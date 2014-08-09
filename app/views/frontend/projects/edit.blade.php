@extends('frontend.layouts.default')

@section('title')
Edit Project ::
@parent
@stop

@section('content')

{{ Form::open(array('action' => 'ProjectsController@postUpdate')) }}
{{ Form::hidden('id', $project->id) }}
<h4>Name:</h4>
<p>{{ Form::text('name', $project->name) }}</p>

<h4>Description:</h4>
<p>{{ Form::textarea('description', $project->description) }}</p>

{{ Form::submit('Update Project') }}

@stop