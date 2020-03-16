<div style="width: 100%; float:left">
      <div id="table-bottom-toggle" style="width: 50%; margin: 2%">
        <table class="table">
            <tr>
                <th>Company</th>
                <th>Name</th>
                <th>ID</th>
            </tr>
            <tr>
                <td>{{$users->company}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->id}}</td>
            </tr>
        </table>
    </div>

</div>

<script>
    function toggleTable() {
        var x = document.getElementById("table-bottom-toggle");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

