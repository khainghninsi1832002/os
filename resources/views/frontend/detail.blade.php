@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2>Item Detail Page </h2>
		
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-4 mt-2 pt-2 animated in-left">
					<p><img src="{{asset($items->photo)}}" class="img-fluid"></p>
				</div>
				<div class="col-md-8 mt-2 progress-bar-animated">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>Products Name:</td>
								<td>{{$items->name}}</td>
							</tr>
							<tr>
								<td>Products Code:</td>
								<td>{{$items->codeno}}</td>
							</tr>
							<tr>
								<td>Products Price:</td>
								<td>{{$items->price}}</td>
							</tr>
							<tr>
								<td>Description:</td>
								<td>{{$items->description}}</td>
							</tr>
							<tr>
								<td>Brand:</td>
								<td>{{$items->brand->name}}</td>
							</tr>
							<tr>
								<td>Subcategory</td>
								<td>{{$items->subcategory->name}}</td>
							</tr>
						</tbody>
					</table>


				</div>
			</div>
		</div>
		
	</div>
</div>

@endsection