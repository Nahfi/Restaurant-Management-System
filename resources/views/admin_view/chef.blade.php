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
    link rel="stylesheet" href="{{ asset('/icon_css/all.css') }}">


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
 #name,#price{
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
				<a  data-toggle="modal" href="#modi">add  new iteam</a>
				<h2>All Data</h2>
				<table id="t" class="table table-striped v">
					<thead >


						<tr >
							<th>#</th>
							<th>title</th>
							
							<th>price</th>
							<th>decription</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="th">

						{{-- @foreach ($all_data as $sex )
						<tr>
							<td>{{ $loop->index+1 }}</td>
							<td>{{ $sex->title}}</td>
						
							<td>{{ $sex->price }}</td>
							<td>{{ $sex->description }}</td>
							<td><img src="{{ asset( $sex->photo ) }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info t2" href="#">View</a>
         
								<a class="btn btn-sm btn-warning t" value="{{ $sex->id }} " id="edit" data-toggle="modal"  href="#mode">Edit</a>
								<a class="btn btn-sm btn-danger dd"  value="{{ $sex->id }} "   href="#">Delete</a>
							</td>
						</tr>
						@endforeach  --}}
						
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
      
</div>





<script src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.11.3/af-2.3.7/b-2.1.1/datatables.min.js"></script>


<script src="{{ asset('/assets/js/test.js') }}"></script>

  @include('admin_view.js')
  </body>
</html>