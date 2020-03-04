@extends('layouts.app')
    <style>

        .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }

        .column {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
        }

        .left-table {
            background-color: gray;
            height: 700px;
        }

        .map-div {
            background-color: lightblue;
            height: 700px;
        }
        .double-column {
            display: flex;
            flex-direction: column;
            background-color: pink;
            flex-basis: 100%;
            flex: 2;
        }

    </style>
@section('content')
        <div class="row">
            <div class="column">
                <div class="left-table">1 Here is where we show car mileage</div>
            </div>
            <div class="column">
                <div class="map-div">2 here is where we display the map</div>
            </div>
        </div>
        <div class="row 2">
            <div class="double-column">
                <div class="bottom-table">3 here is where we display extra info</div>
            </div>
        </div>
@endsection
