<div style="width: 40%; height: 100%; float:left; margin-left:10px"; >
    <button type="button" class="collapsible btn btn-info" style="width:100%; height:10%">Open Section 1</button>
        <div class="content">
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
            <button type="button" class="collapsible btn btn-info" style="width:100%; height:10%">Open Section 2</button>
    <div class="content">
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
            <button type="button" class="collapsible btn btn-info" style="width:100%; height:10%">Open Section 3</button>
        <div class="content">
            <p>Here tracker data wil come based on which machine you choose</p>
        </div>
             <button type="button" class="collapsible btn btn-info" style="width:100%; height:10%">Open Section 4</button>
            <p>Data sums , total Kilometers, total amount of fuel useds</p>
        <div class="content">
        </div>
            <button type="button" class="collapsible btn btn-info" style="width:100%; height:10%">Open Section 5</button>
        <div class="content">
            <p>Extra information etc..</p>
        </div>
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
