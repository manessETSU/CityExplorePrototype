@extends('layouts.scaffold')

@section('main')

<h1>Show Badge</h1>

<p>{{ link_to_route('badges.index', 'Return to all badges') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $badge->name }}}</td>
                    <td>{{ link_to_route('badges.edit', 'Edit', array($badge->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('badges.destroy', $badge->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
