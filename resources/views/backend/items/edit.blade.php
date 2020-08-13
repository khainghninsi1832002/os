@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Item Edit(Form / Old Value)</h2>
		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form method="POST" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>CodeNo</label>
			<input type="text" name="codeno" class="form-control" value="{{$item->codeno}}" readonly="readonly">
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$item->name}}">
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file" >
			<img src="{{asset($item->photo)}}">
			<input type="hidden" name="oldphoto" value="{{$item->photo}}">
		</div>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div class="form-group my-3">
					<input type="number" name="price" class="form-control" placeholder="Unit Price" value="{{$item->price}}">
				</div>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="form-group my-3">
					<input type="number" name="discount" class="form-control" placeholder="Discount Price" value="{{$item->discount}}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Brand</label>
			<select class="form-control brand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}" 
						@if($brand->id==$item->brand_id)
						{{'selected'}}
						@endif
						>{{$brand->name}}</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		<div class="form-group">
			<label>Sub Categories</label>
			 <select name="subcategory" class="form-control">
				<optgroup label="Choose Subcategoy">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}"
						@if($subcategory->id==$item->subcategory_id)
						{{'selected'}}
						@endif
						>{{$subcategory->name}}</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		<div class="form-group">
			<label for="des">Description</label>
			<textarea type="text" name="description" class="form-control" >{{$item->description}}</textarea>
		</div>
		
		<input type="submit" value="+ Update" class="btn btn-outline-primary" name="submit">
	</form>
	</div>
@endsection