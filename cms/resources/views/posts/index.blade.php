@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
	<a href="{{ route('posts.create') }}" class="btn btn-outline-success">Add Post</a>
</div>

<div class="card card-default">
	<div class="card-header">Posts</div>

	
	<div class="card-body">
		@if($posts->count() > 0)
		<table class="table">
			<thead>
				<th>Image</th>
				<th>Title</th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td><img src="{{ asset($post->image) }}"></td>
						<td>{{ $post->title }}</td>
						@if(!$post->trashed())
						<td>
							<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
						</td>
						@else
						<td>
							<form method="POST" action="{{ route('restore-posts', $post->id) }}">
								@csrf
								@method('PUT')
								<button type="submit" class="btn btn-outline-info btn-sm">Restore</button>
							</form>
						</td>
						@endif
						<td>
							<form action="{{ route('posts.destroy',$post->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-danger btn-sm">
									{{ $post->trashed() ? 'Delete' : 'Trash' }}
									
									
								</button>
								
							</form>
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<h3 class="text-center">No Post Yet</h3>

		@endif
	</div>
</div>


@endsection