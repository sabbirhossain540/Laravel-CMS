@extends('layouts.app')

@section('content')

<div class="card card-default">
	<div class="card-header">Create Post</div>

	
	<div class="card-body">
		<form action="{{ route('posts.store') }}" action="POST">
			@csrf
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title">
			</div>
		</form>
	</div>
</div>


@endsection