@extends('layouts.app')


@section('extarnalCss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css" integrity="sha512-qjOt5KmyILqcOoRJXb9TguLjMgTLZEgROMxPlf1KuScz0ZMovl0Vp8dnn9bD5dy3CcHW5im+z5gZCKgYek9MPA==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection




@section('content')

<div class="card card-default">
	<div class="card-header">{{ isset($post) ? 'Edit Post' : 'Create Post' }}</div>

	
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
		<form action="{{ isset($post) ? route('posts.update',$post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">

			@csrf
			@if(isset($post))

				@method('PUT')

			@endif


			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" value="{{ isset($post) ? $post->title : '' }}">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" cols="5" rows="5">{{ isset($post) ? $post->description : '' }}</textarea>
			</div>

			<div class="form-group">
				<label for="content">Content</label>
				<!-- <textarea class="form-control" id="content" name="content" cols="5" rows="5"></textarea> -->
				<input id="content" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}">
  				<trix-editor input="content"></trix-editor>
			</div>

			<div class="form-group">
				<label for="published_at">Published At</label>
				<input type="text" name="published_at" id="published_at" class="form-control" value="{{ isset($post) ? $post->published_at : '' }}">
			</div>

			@if(isset($post))
			<div class="form-group">
				<img src="{{ asset($post->image) }}" alt="">
			</div>

			@endif

			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control" {{ isset($post) ? $post->image : '' }}>
			</div>

			<div class="form-group">
				<label for="category">Category</label>
				<select name="category" id="category" class="form-control">
					@foreach($categories as $category)
						<option value="{{ $category->id }}"
							@if(isset($post))
								@if($category->id == $post->category_id)
								selected
								@endif
							@endif
							>
							{{ $category->name }}
						</option>
					@endforeach
					
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">{{ isset($post) ? 'Update Post' : 'Create Post' }}</button>
			</div>
		</form>
	</div>
</div>


@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script type="text/javascript">
	flatpickr('#published_at', {
		enableTime: true
	});
</script>

@endsection