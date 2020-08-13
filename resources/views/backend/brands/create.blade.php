@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Create(Form)</h2>
	 @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form method="POST" action="{{route('brands.store')}}" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
			 @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			@if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif
		</div>


		
		<input type="submit" value="+ Create" class="btn btn-outline-primary" name="submit">
	</form>
</div>
@endsection