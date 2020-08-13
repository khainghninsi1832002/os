@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Item Detail(Your UI)</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-4 mt-2 pt-2 animated in-left">
					<p><img src="{{asset($item->photo)}}" class="img-fluid"></p>
				</div>
				<div class="col-md-8 mt-2 progress-bar-animated">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>Products Name:</td>
								<td>{{$item->name}}</td>
							</tr>
							<tr>
								<td>Products Code:</td>
								<td>{{$item->codeno}}</td>
							</tr>
							<tr>
								<td>Products Price:</td>
								<td>{{$item->price}}</td>
							</tr>
							<tr>
								<td>Description:</td>
								<td>{{$item->description}}</td>
							</tr>
						</tbody>
					</table>


				</div>
			</div>
		</div>
	</div>
@endsection