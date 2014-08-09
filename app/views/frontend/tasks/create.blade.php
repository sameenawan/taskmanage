@extends('frontend.layouts.default')

@section('title')
Add Task
@stop

@section('content')
<div class="row-fluid">
	<div class="span12">
		<h3 class="page-title">Add Task</h3>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		{{ Form::open(array('action' => array('TasksController@postStore'), 'class' => 'form-horizontal')) }}
		<div class="control-group">
			<label for="name" class="control-label">Project</label>
			<div class="controls">
				{{ Form::select('project_id', Project::all()->lists('name', 'id'), Input::old('project_id')) }}
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Title</label>
			<div class="controls">
				{{ Form::text('name') }}
			</div>
		</div>
		<div class="control-group">
			<label for="description" class="control-label">Description</label>
			<div class="controls">
				{{ Form::textarea('description') }}
			</div>
		</div>
		<div class="control-group">
			<label for="outcome" class="control-label">Outcome</label>
			<div class="controls">
				{{ Form::textarea('outcome') }}
			</div>
		</div>
		<div class="control-group">
			<label for="verification" class="control-label">Mean of Verification</label>
			<div class="controls">
				{{ Form::textarea('verification') }}
			</div>
		</div>
		<div class="control-group">
			Time inputs should be in minutes. e.g. 0.30 for 30 minutes, 3.32 for 3 hrs, 32 minutes
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Preparation Time</label>
			<div class="controls">
				{{ Form::text('time[preparation]', Input::old('time')['preparation'], array('class' =>  'time')) }}<br/>
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Travel Time</label>
			<div class="controls">
				{{ Form::text('time[travel]', Input::old('time')['travel'], array('class' =>  'time')) }}
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Execution Time</label>
			<div class="controls">
				{{ Form::text('time[execution]', Input::old('execution')['preparation'], array('class' =>  'time')) }}
			</div>
		</div>
		<div class="control-group">
			<label for="name" class="control-label">Reporting Time</label>
			<div class="controls">
				{{ Form::text('time[reporting]', Input::old('time')['reporting'], array('class' =>  'time')) }}
			</div>
		</div>
		<div class="control-group">
			<label for="Total Time" class="control-label">Total Time</label>
			<div class="controls">
				<input disabled="disabled" class="total_time" value="0.00" style="width:100px;" /> Hours
			</div>
		</div>
		@if(Sentry::getUser()->hasAccess('task.change_status'))
		<div class="control-group">
			<label for="description" class="control-label">Is Complete?</label>
			<div class="controls">
				{{ Form::checkbox('is_complete') }}
			</div>
		</div>
		@endif

		{{ Form::submit('Add Task', array('class' => 'btn green')) }}
		{{ Form::close() }}
	</div>
</div>
@stop

@section('footer')
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$(".time").keyup(function(){
		$(".total_time").val(0.00);

		$(".time").each(function(){
			if($(this).val() != "")
				$(".total_time").val(parseFloat($(".total_time").val()) + parseFloat($(this).val()));
		});
	});
});
</script>
@stop