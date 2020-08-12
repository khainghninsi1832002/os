@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Subcategories List(Table)</h2>
		<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Add Subcategories</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					
					<th>Name</th>
					<th>Category</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>

					<td>Subcategory One</td>
					<td>Category One</td>
					<td>
						<a href="{{route('subcategories.edit',1)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection