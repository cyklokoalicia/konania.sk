<?php
/**
 * Created by PhpStorm.
 * User: Andrej
 * Date: 13.04.2016
 * Time: 11:49
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
                        {{ Form::model($nerd, array('route' => array('nerds.update', $nerd->id), 'method' => 'PUT')) }}

                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('nerd_level', 'Nerd Level') }}
                            {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' =>                                          'form-control')) }}
                        </div>

                        {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
