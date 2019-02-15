<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h2>List State</h2>

<table style="width:100%">
  <tr>
    <th>Bil</th>
    <th>Name</th> 
    <th>Abbr</th>
  </tr>
  @foreach($state as $key => $sta)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $sta->state_name }}</td>
        <td>{{ $sta->state_abbr }}</td>
    </tr>
  @endforeach
</table>

</body>
</html>