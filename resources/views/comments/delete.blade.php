@extends('main')

@section('title', ' | Edit Conttent')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Delete This Comment</h1>

		<p><strong>Name:</strong>{{ $comment->name }}</p>
		<p><strong>Email:</strong>{{ $comment->emali }}</p>
		<p><strong>Comment:</strong>{{ $comment->comment }}</p>

		{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
			{{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-danger btn-block']) }}
		{{ Form::close() }}

	</div>
</div>

@endsection