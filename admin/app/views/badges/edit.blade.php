@extends('layouts.scaffold')

@section('main')

<h1>Edit Badge</h1>
{{ Form::model($badge, array('method' => 'PATCH', 'route' => array('badges.update', $badge->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('badges.show', 'Cancel', $badge->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
