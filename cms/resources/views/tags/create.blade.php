@extends('layouts.app')

@section('content')

<div class="card card-default">
	<div class="card-header">
		{{ isset($tag) ? 'Edit Tag' : 'Create Tag' }}

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
		<form action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}" method="POST">

			@csrf

			@if(isset($tag))
				@method('PUT')
			@endif

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" class="form-control" value="{{ isset($tag) ? $tag->name : '' }}" >
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">{{ isset($tag) ? 'Update Tag' : 'Add Tag' }}</button>
			</div>
		</form>
	</div>
</div>

@endsection