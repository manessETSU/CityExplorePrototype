@extends('layouts.scaffold')

@section('main')

<h1>Show Medium</h1>

<p>{{ link_to_route('media.index', 'Return to all media') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>AltText</th>
				<th>Uri</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $medium->name }}}</td>
					<td>{{{ $medium->altText }}}</td>
					<td>{{{ $medium->uri }}}</td>
                    <td>{{ link_to_route('media.edit', 'Edit', array($medium->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('media.destroy', $medium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
