<?php
/**
 * Created by PhpStorm.
 * User: Andrej
 * Date: 18.02.2016
 * Time: 21:09
 */
?>
@extends('layouts.master')

@section('content')
    <input type="hidden" value="{{$id}}" id="centerKonanie">
    <div class="container-fluid ovladacie-prvky">
        <div class="row">
            <div id="burger-menu" class="btn nav-toogle sb-toggle-left red-color-background">
                <i class="mdi-navigation-menu"></i>
            </div>
            <div id="fullTextSearchContainer">
                <nav class="red-color-background">
                    <div class="nav-wrapper">
                        <form onsubmit="return false;">
                            <div class="input-field">
                                {{ Form::input('search','fullTextSearch',null, array('id'=>'fullTextSearch','placeholder'=>Lang::get('common.Search address'))) }}
                                <label for="search"><i id="search-icon" class="material-icons">search</i></label>
                                <i id="close-icon" class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div id="map" class="shadow"></div>
@endsection
@section('slidebar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg12 watch-expressions-buttons-container-12">
                <ul class="vertical-nav shadows">
                    <li>
                        <a href="{{URL::to('/')}}">
                            <img class="responsive-img" src="assets/images/logo.png">
                        </a>
                    </li>
                    <li>
                        <button onclick="location.href='{{URL::to('/')}}';"   class="nav-button grow no-padding no-margin">
                            <img width="50" height="50" alt="home icon" src="assets/images/home.png">
                            <span>{{ Lang::get('common.Home') }}</span>
                        </button>
                    </li>
                    <li>
                        <button id="newsletter" data-target="modal2" class="nav-button modal-trigger grow no-padding no-margin">
                            <img width="50" height="50" src="assets/images/nesletter.png">
                            <span>Newsletter</span>
                        </button>
                    </li>
                    <li>
                        <button data-target="modalOprojekte" rel="leanModal" class="nav-button modal-trigger grow no-padding no-margin">
                            <img width="50" height="50" alt="question icon" src="assets/images/project.png">
                            <span>{{ Lang::get('common.About project') }}</span>
                        </button>
                    </li>
                    <li>
                        <button data-target="modalAkoToFunguje" rel="leanModal" class="nav-button modal-trigger grow no-padding no-margin">
                            <img width="50" height="50" alt="add icon" src="assets/images/question.png">
                            <span>{{ Lang::get('common.How does it works?') }}</span>
                        </button>
                    </li>
                    <li>
                        <button data-target="modalOnas" rel="leanModal" class="nav-button modal-trigger grow no-padding no-margin">
                            <img width="50" height="50" alt="about us icon" src="assets/images/onas.png">
                            <span>{{ Lang::get('common.About us') }}</span>
                        </button>
                    </li>
                    <li>
                        <button onclick="location.href='{{URL::to('/api/feed')}}';"  class="nav-button grow no-padding no-margin">
                            <img width="50" height="50" alt="rss icon" src="assets/images/rss2.png">
                            <span>RSS</span>
                        </button>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection

