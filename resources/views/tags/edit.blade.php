@extends('main')

@section('title', ' | Tags')

@section('content')

	{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) !!}
		{!! Form::label('name', 'Title') !!}
		{!! Form::text('name', null, ['class' =>'form-control']) !!}

		{!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection