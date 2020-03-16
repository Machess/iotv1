@extends('layouts.app')
@section('nav-bar')
    @include('layouts.partial.nav-bar')
@endsection
@section('content-bottom')
<div class="container">
    <h1>Add to fleet</h1>
    {{ Form::open(['action' => 'FleetsController@store', 'method' => 'POST'])}}

    <div class="form-group">
         {{Form::label('type', 'Type')}}
         {{Form::select('type', array('car' => 'car', 'machine' => 'machine')) }}
    </div>

    <div class="form-group">
        {{Form::label('brand', 'Brand')}}
        {{Form::text('brand', 'test', ['class' => 'form-control','placeholder' => "Brand of vehicle"])}}
    </div>
    {{Form::submit('Add to fleet', ['class' => 'btn btn-primary'] ) }}
    {{ Form::close() }}
</div>
    @endsection
