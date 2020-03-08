@extends('layouts.app')

@section('nav-bar')
    @include('layouts.partial.nav-bar')
@endsection
@section('content-left')
    @include('layouts.partial.left-table')
@endsection
@section('content-right')
    @include('layouts.partial.map-div')
@endsection
@section('content-bottom')
@include('layouts.partial.bottom-table')
@endsection