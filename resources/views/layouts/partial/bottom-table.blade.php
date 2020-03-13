<div style="width: 100%; float:left">
    <button onclick="toggleTable()" style="width: 100%">Bottom table</button>

    <div id="table-bottom-toggle">
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

