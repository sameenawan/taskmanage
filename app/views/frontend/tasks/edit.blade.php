@extends('frontend.layouts.default')

@section('title')
Editing Task :: {{ $task->name }}
@parent
@stop

@section('content')
<div class="row-fluid">
	<div class="span12">
		<h3 class="page-title">Editing "{{ $task->name }}" Task</h3>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		{{ Form::open(array('action' => 'TasksController@postUpdate', 'class' => 'form-horizontal')) }}
		{{ Form::hidden('task_id', $task->id) }}
		<div class="control-group">
			<label for="name" class="control-label">Title</label>
			<div class="controls">
				{{ Form::text('name', $task->name) }}
			</div>
		</div>
		<div class="control-group">
			<label for="description" class="control-label">Description</label>
			<div class="controls">
				{{ Form::textarea('description', $task->description) }}
			</div>
		</div>
		<div class="control-group">
			<label for="outcome" class="control-label">Outcome</label>
			<div class="controls">
				{{ Form::textarea('outcome', $task->outcome) }}
			</div>
		</div>
		<div class="control-group">
			<label for="verification" class="control-label">How to Verification?</label>
			<div class="controls">
				{{ Form::textarea('verification', $task->verification) }}
			</div>
		</div>
		<div class="control-group">
			Time inputs should be in minutes. e.g. 0.30 for 30 minutes, 3.32 for 3 hrs, 32 minutes
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Preparation Time</label>
			<div class="controls">
				{{ Form::text('time[preparation]', $task->time->preparation) }}<br/>
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Travel Time</label>
			<div class="controls">
				{{ Form::text('time[travel]', $task->time->travel) }}
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Execution Time</label>
			<div class="controls">
				{{ Form::text('time[execution]', $task->time->execution) }}
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Report Time</label>
			<div class="controls">
				{{ Form::text('time[report]', $task->time->report) }}
			</div>
		</div>

		{{ Form::submit('Update Task', array('class' => 'btn green')) }}
		{{ Form::close() }}
	</div>
</div>


@stop