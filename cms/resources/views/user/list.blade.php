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
						<td>{{ $user->name }}</td>
						<td>
							{{ $user->email }}
							
						</td>

                        <td>
                        @if(!$user->isAdmin())
                            <form action="{{ route('user.make-admin',$user->id) }}" method="POST">
                                 @csrf
                                <button type="submit" class="btn btn-success btn-sm">Make Admin</button>
                            </form>
                            
                        @endif
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