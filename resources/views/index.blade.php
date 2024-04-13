<!DOCTYPE html>
<html>
<head>
	<title> SPP </title>
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<table id="example" class="display" style="width:50%">
        
        <thead>
        	<tr>
        		<th style="text-align: center;"> ID </th>
        		<th style="text-align: center;"> NAMA </th>
        		<th style="text-align: center;"> KELAS </th>
        	</tr>
        </thead>

        <tbody>

        	@foreach ($data_sd as $user)
	        	<tr>
	        		<td style="text-align: center;"> {{ $user->ID }} </td>
	        		<td style="text-align: center;"> {{ $user->NAMA }} </td>
	        		<td style="text-align: center;"> {{ $user->KELAS }} </td>
	        	</tr>
			@endforeach


        </tbody>

	</table>

	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
      	{{ $data_sd->links() }}
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>
			

<!--     <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script> -->

    <script type="text/javascript">
    	new DataTable('#example');
    </script>

</body>
</html>