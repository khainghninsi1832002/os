@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class="d-inline-block">Order List(Table)</h2>
		<a href="{{route('orders.create')}}" class="btn btn-success float-right">Add Order</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Voucher No</th>
					<th>Orderdate</th>
					<th>Total</th>
					<th>Notes</th>
					<th>User</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($orders as $order)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$order->voucherno}}</td>
					<td>{{$order->orderdate}}</td>
					<td>{{$order->total}}MMK</td>
					<td>{{$order->notes}}</td>
					<td>{{$order->user_id}}</td>
					<td><a href="" class="btn btn-primary">Detail</a></td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection