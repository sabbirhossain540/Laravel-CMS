@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
	<a href="{{ route('categories.create') }}" class="btn btn-outline-success">Add Category</a>
</div>
<div class="card card-default">
	<div class="card-header">Categories</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<th>Name</th>
				<th>Post Count</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<td>{{ $category->name }}</td>
					<td>{{ $category->posts->count() }}</td>
					<td>
						<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
						<button class="btn btn-outline-danger btn-sm" onclick="handleDelete({{ $category->id }})">Delete</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>


		<!-- Button trigger modal -->
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		  Launch demo modal
		</button> -->

		<!-- Modal -->
		<form action="" method="POST" id="deleteCategoryForm">
			@csrf
			@method('DELETE')

			<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			       	
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">No. Go back</button>
			        <button type="submit" class="btn btn-outline-danger">Yes. Delete</button>
			      </div>
			    </div>
			  </div>
			</div>
		</form>
		
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
        function handleDelete(id){
        	var form = document.getElementById('deleteCategoryForm')
        	form.action = '/categories/'+id
        	//console.log(form)
            $('#deleteModal').modal('show')
        }
    </script>

@endsection