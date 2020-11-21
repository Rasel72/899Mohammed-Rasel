<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
</head>
<body>
  <div class="container">
  	<h2>Department</h2>
  	<table class ="table table-bordered" id="std"></table>
  	<thead>
  		<th>name</th>
  			<th>short_name</th>
  			
  	
  	</thead>
  	<tbody>
  		@foreach($data as $s)
  		<tr>
  			<td>{{$s->name}}</td>
  				<td>{{$s->short_name}}</td>
  		</tr>
  		@endforeach
  	</tbody>
  </div>
  <script >
  	$(document).ready(function()
  	{
  	    $("#std").DataTable()
  	};
  </script>
</body>
</html>