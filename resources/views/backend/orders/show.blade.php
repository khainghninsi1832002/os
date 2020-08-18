@extends('frontendtemplate')
@section('content')
  <!-- DataTales Example -->
 	   <div class="card shadow mb-4">
 	   	<div class="card-body">
 	   		<div class="table-responsive">

 	   			<table class="table table-bordered"  width="100%" cellspacing="0">
 	   				<tr>
 	   					<h5 style="color: pink;" class="text-center">KHAING ONLINE SHOP</h5>
 	   					<p class="text-center">Mandalay Region,Sintgaing Township,Paleik.<br>Tel:09770106551</p>
 	   				</tr>

 	   				 <thead >
                        <tr>
                            <td colspan="2">Casher 
                            {{$order->user->name}}</td>
                            <td colspan="2">Order Date
                            	{{$order->orderdate}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Voucher No 
                            {{$order->voucherno}}</td>
                           
                            <td colspan="2">Order Time 
                             {{$order->created_at}}</td>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                    		<td>Item Name</td>
                    		<td>Price</td>
                    		<td>Qty</td>
                    		<td>Amount</td>
                    	</tr>
                    	@php
                    	$amount=0;
                    	@endphp
                    	@foreach($order->items as $order1)
                    	<tr>
                    		<td>{{$order1->name}}</td>
                    		<td><span class="text-muted">{{$order1->price}}.00</span></td>
                    		<td>{{$order1->pivot->qty}}</td>
                    		<td>{{$order1->price*$order1->pivot->qty}}.00</td>
                    	</tr>
                    	@endforeach
                        <tr>
                            <td colspan="3">Total amount</td>
                            <td>{{$order->total}}.00</td>
                        </tr>
                    </tbody>
                   
					</table>

            	</div>
            </div>
          </div>
					


			
		
@endsection

