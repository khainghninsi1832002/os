@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Create(Form)</h2>
{{-- 	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif --}}
	<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
			@error('name')
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @enderror
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			@error('photo')
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @enderror
		</div>
		
		
		<input type="submit" value="+ Create" class="btn btn-outline-primary" name="submit">
	</form>
</div>
@endsection