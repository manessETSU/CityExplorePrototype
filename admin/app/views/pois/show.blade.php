@extends('layouts.scaffold')

@section('main')

<h1>Show POI</h1>

<p>{{ link_to_route('pois.index', 'Return to all pois') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Description</th>
				<th>Lat</th>
				<th>Lon</th>
				<th>Media</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $poi->name }}}</td>
					<td>{{{ $poi->description }}}</td>
					<td>{{{ $poi->lat }}}</td>
					<td>{{{ $poi->lon }}}</td>
					<td>{{{ $poi->media }}}</td>
                    <td>{{ link_to_route('pois.edit', 'Edit', array($poi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('pois.destroy', $poi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
