    <button type="button" class="collapsible btn-outline-dark" style="width:100%; height:6%">User</button>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <button type="button" class="collapsible btn-outline-dark" style="width:100%; height:6%">Fleet Info</button>
        <div>
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
                        </tr>
                    @endforeach
                @else
                    <div>
                        <p class="text-danger"> No vehicles in your fleet <a href="/fleets/create" class="btn btn-outline-primary btn-sm" style="float: right"> Add to fleet</a>
                    </div>
                @endif
                </tbody>
            </table>
        </div>
    <button type="button" class="collapsible btn-outline-dark" style="width:100%; height:6%">Tracker</button>
           <div>
               <p>Tracker data based on which machine you choose</p>
           </div>

    <button type="button" class="collapsible btn-outline-dark" style="width:100%; height:6%">Data aggregation</button>
            <div>
                <p>Data sums , total kilometers, total amount of fuel used</p>
            </div>




<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
