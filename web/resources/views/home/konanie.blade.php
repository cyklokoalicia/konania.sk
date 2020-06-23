<?php
/**
 * Created by PhpStorm.
 * User: Andrej
 * Date: 13.04.2016
 * Time: 11:37
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
                            <div class="col-lg-3">
                            ID
                            </div>
                            <div class="col-lg-9">
                            {{$konanie['ID']}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                FILENAME
                            </div>
                            <div class="col-lg-9">
                                {{$konanie['file_name']}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                LON
                            </div>
                            <div class="col-lg-9">
                                {{$konanie['lon']}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                LAT
                            </div>
                            <div class="col-lg-9">
                                {{$konanie['lat']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
