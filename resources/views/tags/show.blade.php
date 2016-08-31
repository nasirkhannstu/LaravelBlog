@extends('main')

@section('title', " | $tag->name Tag")

@section('content')
	<div class="row">
		<div class="col-md-8 col-sm-8">
			<h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
		</div>
		<div class="col-md-2 col-sm-2">
			<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-block pull-right" style="margin-top:20px">Edit</a>
		</div>
		<div class="col-md-2 col-sm-2">
			{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
			{{ Form::close() }}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Tags</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tag->posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<th>{{ $post->title }}</th>
						<th>
							@foreach($post->tags as $tag)
								<span class="label label-default">{{ $tag->name }}</span>
							@endforeach
						</th>
						<th><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a></th>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection