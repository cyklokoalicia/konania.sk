<?php
/**
 * Created by PhpStorm.
 * User: Andrej
 * Date: 12.04.2016
 * Time: 23:07
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Zoznam stavebnych konani</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {{ Form::open(array('url' => '/home/search')) }}
                                {{ Form::input('search','search',null, array('id'=>'search','placeholder'=>Lang::get('common.Search'))) }}
                                {{ Form::submit('Go')}}
                                {{ Form::close() }}
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                ID
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
                                FILE NAME
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                LON
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                LAT
                            </div>
                        </div>
                        <hr>
                        {{--{{$konania}}--}}
                        @foreach($konania as $konanie)
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                    {{$konanie['ID']}}
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
                                    {{$konanie['file_name']}}
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    {{$konanie['lon']}}
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    {{$konanie['lat']}}
                                </div>
                            </div>



                        @endforeach
                            {!! $konania->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
