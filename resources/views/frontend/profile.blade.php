@extends('frontendtemplate')

@section('content')
<div class="col-lg-9 text-center">
	<h2>Customer Profile Page </h2>
	
	<div class="container">
		
			<div class="row">
				
				<div class="col-md-12 mt-2">
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<td> Name:</td>
								<td>{{Auth::user()->name}}</td>
							</tr>
							<tr>
								<td> Email:</td>
								<td>{{Auth::user()->email}}</td>
							</tr>
							
							
							
						</thead>
					</table>
				</div>
			</div>
					<h3 class="text-center">Order Detail</h3><hr class="w-25">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>


			
		</div>
</div>


@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
		
	</script>
@endsection