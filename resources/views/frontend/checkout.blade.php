@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2> Checkout Page </h2>
	<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Item Photo</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
						<tfoot>
							
						</tfoot>
					
					</table>
					<a href="{{route('homepage')}}" class="btn btn-success float-left">Continue Shopping</a> 

					<textarea class="d-inline ml-5 notes" placeholder="Your Note Here!"></textarea>
					@auth
					<a href="#" class="btn btn-primary float-right buy_now">Checkout</a>
					@else
					<a href="{{route('login')}}" class="btn btn-primary float-right ">Login To Checkout</a>
					@endauth
				
</div>

@endsection
@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
		
	</script>
@endsection