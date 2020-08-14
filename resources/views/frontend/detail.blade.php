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
						<thead>
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
						</thead>

					</table>	
					<div class="card-footer">
					{{-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> --}}
					<a href="#" class="btn btn-info addtocart" data-id="{{$items->id}}" data-name="{{$items->name}}" data-photo="{{asset('$items->photo')}}" data-price="{{$items->price}}" data-discount={{$items->discount}}>Add to Cart</a>
					
				</div>

				</div>
			</div>
		</div>
		
	</div>
</div>

@endsection
@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
		
	</script>
@endsection