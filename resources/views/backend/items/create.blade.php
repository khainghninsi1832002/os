@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create(Form)</h2>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>CodeNo</label>
			<input type="text" name="codeno" class="form-control">
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
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
					<input type="number" name="price" class="form-control" placeholder="Unit Price">
				</div>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="form-group my-3">
					<input type="number" name="discount" class="form-control" placeholder="Discount Price">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Brand</label>
			<select class="form-control brand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		<div class="form-group">
			<label>Sub Categories</label>
			 <select name="subcategory" class="form-control">
				<optgroup label="Choose Subcategoy">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					@endforeach
				</optgroup>
		</div>
		<div class="form-group">
			<label>Desctiption</label>
			<textarea type="text" name="description" class="form-control"></textarea>
		</div>
		
		<input type="submit" value="+ Create" class="btn btn-outline-primary" name="submit">
	</form>
</div>
@endsection