@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2>Customer Profile Page </h2>
	<div class="container">
			<div class="row">
				<div class="col-md-4 mt-2 pt-2 animated in-left">
					<p><img src="" class="img-fluid"></p>
				</div>
				<div class="col-md-8 mt-2 progress-bar-animated">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td> Name:</td>
								<td></td>
							</tr>
							<tr>
								<td> Address:</td>
								<td></td>
							</tr>
							
							<tr>
								<td>Description:</td>
								<td></td>
							</tr>
							
						</tbody>
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