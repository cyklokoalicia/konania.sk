<?php

Route::get("/", function(){return  view('index')->with('id',0);});
Route::get("/{id}", function($id){return  view('index')->with('id',$id);});

// "api" :-D
Route::get("/api/slovensko","ApiController@slovensko");
Route::get("/api/okresy","ApiController@okresy");
Route::get("/api/markery","ApiController@markery");
Route::get("/api/cron","ApiController@newsletterSender");
//newsletter api
Route::post("/api/newsletter","ApiController@newsletter");
Route::get("/api/activate","ApiController@activatenewsletter");
Route::get("/api/deactivate","ApiController@deactivatenewsletter");
Route::get('/api/feed', function(){

    // create new feed
    $feed = App::make("feed");

    // multiple feeds are supported
    // if you are using caching you should set different cache keys for your feeds

    // cache the feed for 60 minutes (second parameter is optional)
    //$feed->setCache(60, 'feedCacheKey');


     if (!$feed->isCached())
     {
        // creating rss feed with our most recent 20 posts
        $posts = \DB::table('proceedings')->orderBy('created_at', 'desc')->take(20)->get();

        // set your feed's title, description, link, pubdate and language
        $feed->title = "konania.sk";
        $feed->description = 'Stránka stavebné konanie pre vás zbiera informácie z verejných zdrojov. Informácie o všetkých stavebných konaniach ktoré su zverejnené elektronicky nájdete na našej stránke. Chceli by ste vedieť všetky novinky z vášho okolia alebo z vami vybranej oblasti ? Aktivujte si zasielanie noviniek na Váš email v sekcii newsletter a dostávajte tak najčerstvejšie novinky z oblasti ktorá vás zaujíma.';
        $feed->logo = 'http://konania.sk/assets/images/logo.png';
        $feed->link = 'http://konania.sk';
        $feed->setDateFormat('datetime');
        $feed->pubdate = $posts[0]->created_at;
        $feed->lang = 'slovak';
        $feed->setShortening(true);
        $feed->setTextLimit(100);

        foreach ($posts as $post)
        {
            // set item's title, author, url, pubdate, description, content, enclosure (optional)*
            $feed->add($post->title, "admin","http://konania.sk/".$post->id, $post->created_at, $post->description);
        }

    }

    $feed->ctype = "text/xml";
    return $feed->render('rss');
});
Route::get("/api/{id}","ApiController@getKonanie");




Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/home/konania', 'HomeController@getKonania');
    Route::get('/home/konania/{id}', 'HomeController@getKonanie');
    Route::get('/home/konania/{id}/edit', 'HomeController@editKonanie');
    Route::post('/home/search', 'HomeController@search');
});
