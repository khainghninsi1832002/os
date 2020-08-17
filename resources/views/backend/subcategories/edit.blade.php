@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Subcategory Edit(Form / Old Value)</h2>
		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form method="POST" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
	
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$subcategory->name}}">
		</div>
		
		
		<div class="form-group">
			<label> Categories</label>
			 <select name="category" class="form-control">
				<optgroup label="Choose categoy">
					@foreach($categories as $category)
					<option value="{{$category->id}}"
						@if($category->id==$subcategory->category_id)
						{{'selected'}}
						@endif
						>{{$category->name}}</option>
					@endforeach
				</optgroup>
			</select>
		</div>
	
		
		<input type="submit" value="+ Update" class="btn btn-outline-primary" name="submit">
	</form>
	</div>
@endsection