@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2>Item Page Filter By brand and subcategory</h2>
	<div class="container-fluid">
		<div class="row">
			@foreach($items as $item)
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">{{$item->name}}</a>
						</h4>
						<h5>{{$item->price}}MMK</h5>
						<p class="card-text">{{$item->description}}</p>
					</div>
					<div class="card-footer">
						{{-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> --}}
						<a href="#" class="btn btn-info">Add to Cart</a>
						<a href="{{route('itemdetail',$item->id)}}" class="btn btn-primary">Detail</a>
					</div>
				</div>
			</div>
			@endforeach


		</div>
	</div>
</div>

@endsection