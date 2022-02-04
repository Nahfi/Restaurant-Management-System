<x-app-layout>
    
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Corona Admin</title>
    <link rel="stylesheet" href="{{ asset('/icon_css/all.css') }}">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.11.3/af-2.3.7/b-2.1.1/datatables.min.css"/>
 

    
 <style>
  .p{
      position: absolute;
      top:149px;
      left:35%;
      
  }
  .sorting{
    font-size: 16px !important;
    color: #fff !important;
  }
  .c{
      font-size: 23px;
  }
  i{
    font-size: 23px;
  }
 #name,#role{
  font-size: 23px;
  color: #fff;
  }
  #des{
    font-size: 23px;
  color: #000;
  }
  #des1{
    font-size: 23px;
  color: #000;
  }
</style>
 @include('admin_view.css')
  </head>
  <body>
  @include('admin_view.body')

<div class="p">
  <div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
		
				<h2>All Data</h2>
				<table id="n" class="table table-striped v">
					<thead >


						<tr >
							<th>#</th>
							<th>name</th>
							
							<th>food_name</th>
					
							<th>Quantity</th>
							<th>price</th>
						</tr>
					</thead>
					<tbody id="x">

					 @foreach ($c as $sex )
						<tr>
							<td>{{ $loop->index+1 }}</td>
							<td>{{ $sex['name']}}</td>
						
							<td>{{ $sex['food_name'] }}</td>
							<td>{{ $sex['quantity'] }}</td>
							<td>{{ $sex['price'] }}</td>
							
							
							
						</tr>
						@endforeach  
						
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
      
</div>



@include('admin_view.js')
<script src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.11.3/af-2.3.7/b-2.1.1/datatables.min.js"></script>


<script src="{{ asset('/assets/js/test.js') }}"></script>

 
  </body>
</html>