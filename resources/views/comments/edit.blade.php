@extends('main')

@section('title', ' | Edit Conttent')

@section('content')
<div class="col-md-8 col-md-offset-2">
	<h1>Edit Form</h1>
	{!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) !!}

		{{ Form::label('name', 'Name:', ["class" => 'form-spacing-top']) }}
		{{ Form::text('name', null, ["class" => 'form-control', 'disabled' => '']) }}

		{{ Form::label('email', 'Email:', ["class" => 'form-spacing-top']) }}
		{{ Form::text('email', null, ["class" => 'form-control', 'disabled' => '']) }}

		{{ Form::label('comment', 'Comment:', ["class" => 'form-spacing-top']) }}
		{{ Form::textarea('comment', null, ["class" => 'form-control']) }}

		{{ Form::submit('Update-comment', ['class'=> 'btn btn-success btn-block form-spacing-top']) }}

	{!! Form::close() !!}
</div>
@endsection