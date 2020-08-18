@extends('layouts.app')

@section('content')


<div class="card card-default">
	<div class="card-header">Users</div>

	
	<div class="card-body">
		@if($users->count() > 0)
		<table class="table">
			<thead>
				<th>Image</th>
				<th>Name</th>
				<th>Email</th>
			</thead>
			<tbody>





				@foreach($users as $user)
					<tr>
						<td><img src="{{ asset('storage/app/public/')}}"></td>
						<td>{{ $post->name }}</td>
						<td>
							{{ $post->category->email }}
							
						</td>

					</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<h3 class="text-center">No User Yet</h3>

		@endif
	</div>
</div>


@endsection