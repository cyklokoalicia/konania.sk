<?php
/**
 * Created by PhpStorm.
 * User: Andrej
 * Date: 18.02.2016
 * Time: 21:14
 */
?>
<!DOCTYPE html>
<html class="fill">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Carmaa">
        <title>Stavebne konania</title>

        <!--  CSS  -->
        <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--  JS  -->
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    </head>
    <body class="fill">
        <div id="bsover" class="container-fluid fill">
            <div style="margin-bottom: 0;" class="row fill">
                <div class="no-padding col l12 s12 m12 fill">
                    <div class="main-nav sb-slidebar sb-left sb-width-custom" data-sb-width="240px">
                        @yield('slidebar')
                    </div>
                    <div id="sb-site" class="main-content fill">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div id="modalOprojekte" class="modal">
            <div class="modal-content">
                <h4>Stavebné konania</h4>
                <p>Cieľom portálu je informovať širokú verejnosť o aktuálnych stavebných konaniach. Informovanosť umožnuje verejnosti zapojiť sa do rozhodovacích procesov. Informácie pre vás zbierame z verejných zdrojov, tak aby boli aktuálne, a pre vás relevantné.</p>
           
                           <p>Občianske združenie <a href="http://cyklokoalicia.sk/" rel="home">Cyklokoalícia</a> vytvorilo portál v rámci projektu Informovanosť a zapojenie verejnosti do rozhodovacích procesov. Na projekte spolupracovala Cyklokoalícia tiež s občianskym združením VIA IURIS, ktoré nám pomohlo najmä s prípravou právnych podkladov a s administráciou projektu.</p>
                           <p>
                           Samotný portál napísali  šikovní programátori Andrej Szabo, Michal Varga, Martin Vincenc a Michal Malý.
                           </p>
                           <p style="text-align: justify;"><a href="http://i2.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_osf_500x192px_rgb_sk.png" data-rel="lightbox-gallery-SJqR" title=""><img class="wp-image-3361 alignnone" src="http://i2.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_osf_500x192px_rgb_sk.png?resize=385%2C148" alt="logo_osf_500x192px_rgb_sk" srcset="http://i2.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_osf_500x192px_rgb_sk.png?w=500 500w, http://i2.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_osf_500x192px_rgb_sk.png?resize=240%2C92 240w, http://i2.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_osf_500x192px_rgb_sk.png?resize=50%2C19 50w" sizes="(max-width: 385px) 100vw, 385px" data-recalc-dims="1" /></a><a href="http://i0.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_EEA_60x43mm_CMYK_300DPI-1.jpg" data-rel="lightbox-gallery-SJqR" title=""><img class="wp-image-3360 alignnone" src="http://i0.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_EEA_60x43mm_CMYK_300DPI-1.jpg?resize=222%2C160" srcset="http://i0.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_EEA_60x43mm_CMYK_300DPI-1.jpg?w=709 709w, http://i0.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_EEA_60x43mm_CMYK_300DPI-1.jpg?resize=240%2C173 240w, http://i0.wp.com/cyklokoalicia.sk/wp-content/uploads/2016/01/logo_EEA_60x43mm_CMYK_300DPI-1.jpg?resize=50%2C36 50w" sizes="(max-width: 222px) 100vw, 222px" data-recalc-dims="1" /></a></p>
<p style="text-align: justify;">Projekt Informovanosť a zapojenie verejnosti do rozhodovacích procesov bol podporený sumou 13446 eur z <a href="http://www.eeango.sk/">Fondu pre mimovládne organizácie</a>, ktorý je financovaný z Finančného mechanizmu EHP 2009 &#8211; 2014 (<a href="http://www.eeagrants.org">www.eeagrants.org</a>). Správcom Fondu je <a href="http://osf.sk">Nadácia otvorenej spoločnosti – Open Society Foundation</a>. Cieľom projektu Informovanosť a zapojenie verejnosti do rozhodovacích procesov je zvýšenie zapojenia MVO do tvorby politík a rozhodovacích procesov na miestnej, regionálnej a národnej úrovni.</p>

                
            </div>
            <div class="modal-footer">
                <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">{{ Lang::get('common.Agree') }}</a>
            </div>
        </div>
        <div id="modalAkoToFunguje" class="modal">
            <div class="modal-content">
                <h4>Ako to funguje</h4>
                <p>Stránka stavebné konanie pre vás zbiera informácie z verejných zdrojov. Informácie o všetkých stavebných konaniach ktoré su zverejnené elektronicky nájdete na našej stránke. Chceli by ste vedieť všetky novinky z vášho okolia alebo z vami vybranej oblasti ? Aktivujte si zasielanie noviniek na Váš email v sekcii newsletter a dostávajte tak najčerstvejšie novinky z oblasti ktorá vás zaujíma.  </p>
                <p>Vytvorili sme aj manuál pod názvom&nbsp;<a href="http://cyklokoalicia.sk/wp-content/uploads/2016/04/co-mi-stavaju-pod-oknami.pdf">Čo mi stavajú pod oknami?</a>, ktorý v&nbsp;skratke a laickým jazykom vysvetľuje, prečo je dobré zaujímať sa a&nbsp;zapájať sa do stavebných konaní, ako prebieha proces posudzovania stavieb (aké prebiehajú konania) a&nbsp;ako je možné zapojiť sa do nich. Manuál obsahuje aj vzor jednoduchej pripomienky k&nbsp;stavbe, ktorý je možné prispôsobiť na konkrétny prípad.</p>
                
            </div>
            <div class="modal-footer">
                <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">{{ Lang::get('common.Agree') }}</a>
            </div>
        </div>
        <div id="modaldetailform" class="modal">
            <div id="detailcontent" class="modal-content">

            </div>
            <div class="modal-footer">
                <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">{{ Lang::get('common.Agree') }}</a>
            </div>
        </div>
        <div id="modalOnas" class="modal">
            <div class="modal-content">
                <h4>O nás</h4>
                <p><a href="http://cyklokoalicia.sk/" rel="home">Cyklokoalícia</a> je občianske združenie podporujúce rozvoj mestskej cyklistiky v Bratislave a rozvoj cyklistickej dopravy na Slovensku. Cyklokoalícia tiež monitoruje a pripomienkuje stav verejných priestorov, aby boli bezbariérové a vyhovujúce pre peších.<br/>
                
                <a href="http://cyklokoalicia.sk/" rel="home"><img src="http://cyklokoalicia.sk/wp-content/themes/cyklokoalicia-2/img/cyklokoalicia_logo.svg" alt="Cyklokoalíca logo"></a>
                
                </p>
            </div>
            <div class="modal-footer">
                <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">{{ Lang::get('common.Agree') }}</a>
            </div>
        </div>
        <div id="modalnewsletter" class="modal">
            <div class="modal-content">
                <h4>Newsletter</h4>
                <p>Oblasť vášho záujmu vyznačte myšou na mape.</p>
            </div>
            <div class="modal-footer">
                <a  class=" modal-action modal-close waves-effect waves-green btn-flat">Rozumiem</a>
            </div>
        </div>
        <div id="modalnewsletterform" class="modal">
            <div class="modal-content">
                <h4>Email na novinky</h4>
                {{ Form::open(['id'=>'send-newsletter']) }}
                <div id="newsletterBody">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            {{ Form::email('email','',array('id'=>'usermail')) }}
                            {{ Form::label('email', 'E-Mail',array('for'=>'email')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light red-color-background" type="submit" name="action">{{ Lang::get('common.Submit') }}
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="newsletterResponse">
                    <div class="row">
                        <div class="col s12">
                            <p id="newsletterResponseText">
                            </p>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <div class="modal-footer">
                <a id="cancelNewsletter" class=" modal-action modal-close waves-effect waves-green btn-flat">{{ Lang::get('common.Cancel') }}</a>
            </div>
        </div>
    </body>
</html>
