@extends('layouts.app')

@section('content')

<div class="card card-default">
	<div class="card-header">
		{{ isset($category) ? 'Edit Category' : 'Create Category' }}

	</div>

	<div class="card-body">
		@if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group" >
                    @foreach($errors->all() as $error)
                        <li class="list-group-list" >
                        {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
		<form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">

			@csrf

			@if(isset($category))
				@method('PUT')
			@endif

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" class="form-control" value="{{ isset($category) ? $category->name : '' }}" >
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">{{ isset($category) ? 'Update Category' : 'Add Category' }}</button>
			</div>
		</form>
	</div>
</div>

@endsection