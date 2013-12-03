@extends('layouts.scaffold')

@section('main')

<h1>All Badges</h1>

<p>{{ link_to_route('badges.create', 'Add new badge') }}</p>

@if ($badges->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($badges as $badge)
				<tr>
					<td>{{{ $badge->name }}}</td>
                    <td>{{ link_to_route('badges.edit', 'Edit', array($badge->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('badges.destroy', $badge->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no badges
@endif

@stop
