<div style="width: 100%; float:left">
    <div id="table-bottom-toggle" style="width: 50%; margin: 2%">
        <table class="table">
            <thead>
            <tr>
                <th>Type</th>
                <th>Brand</th>
            </tr>
            </thead>
            <tbody>
            @if(count($fleets) > 0)
                @foreach($fleets as $fleet)
                    <tr>
                        <td>{{$fleet->type}}</td>
                        <td>{{$fleet->brand}}</td>
                    </tr>
                @endforeach
            @else
                <p> No assigned fleet</p>
            @endif
            </tbody>
        </table>
    </div>
</div>
