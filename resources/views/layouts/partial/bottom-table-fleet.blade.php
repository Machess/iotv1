<div style="width: 100%; float:left">
    <div id="table-bottom-toggle" style="width: 50%; margin: 2%">
        <table class="table">
            @if(count($fleets) > 0)
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Brand</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fleets as $fleet)
                    <tr>
                        <td>{{$fleet->type}}</td>
                        <td>{{$fleet->brand}}</td>
                        <td>{{Form::open(['action' => ['FleetsController@destroy', $fleet->id],'method' => 'POST', 'class' => 'pull-right'])}}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                       {{Form::close()}}
                       </td>
                    </tr>
                @endforeach
            @else
                <p class="text-danger"> No assigned fleet</p>
            @endif
            </tbody>
        </table>
    </div>
    <a href="/fleets/create" class="btn btn-primary" style="margin-left: 25px"> Add more to fleet</a>
</div>
