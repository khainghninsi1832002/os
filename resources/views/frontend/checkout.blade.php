@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2> Checkout Page </h2>
	<div class="table-responsive">
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
							<tr>
								<td>1</td>
								<td>Doll</td>
								<td>5000MMK</td>
								<td>1</td>
								<td>5000MMK</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4">Total</td>
								<td>50000MMK</td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					
					</table>

				</div>
</div>

@endsection