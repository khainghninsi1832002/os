@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Brand Detail(Your UI)</h2>
		<div class="container">
			<div class="row">
				{{-- <div class="col-md-8 mt-2 progress-bar-animated"> --}}
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>Products Name:</td>
								<td>{{$brand->name}}</td>
							</tr>
							
						</tbody>
					</table>


				</div>
				{{-- <div class="col-md-4 mt-2 pt-2 animated in-left"> --}}
					<p><img src="{{asset($brand->photo)}}" class="img-fluid"></p>
				</div>
				
			</div>
		</div>
	</div>
@endsection