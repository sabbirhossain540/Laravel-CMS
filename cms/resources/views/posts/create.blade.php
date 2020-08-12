@extends('layouts.app')

@section('content')

<div class="card card-default">
	<div class="card-header">Create Post</div>

	
	<div class="card-body">
		<form action="{{ route('posts.store') }}" action="POST">
			@csrf
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" cols="5" rows="5"></textarea>
			</div>

			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control" id="content" name="content" cols="5" rows="5"></textarea>
			</div>

			<div class="form-group">
				<label for="published_at">Published At</label>
				<input type="text" name="published_at" id="published_at" class="form-control">
			</div>

			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Create Post</button>
			</div>
		</form>
	</div>
</div>


@endsection