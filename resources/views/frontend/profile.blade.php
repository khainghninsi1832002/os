@extends('frontendtemplate')

@section('content')
<div class="col-lg-9 text-center">
	<h2>Customer Profile Page </h2>
	
	<div class="container">
		
			<div class="row">
				
				<div class="col-md-12 mt-2">
					<table class="table table-bordered ">
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
					


			
		</div>
</div>


@endsection

