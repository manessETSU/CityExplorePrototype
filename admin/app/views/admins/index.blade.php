@extends('layouts.scaffold')

@section('main')

<h1>All Admins</h1>

<p>{{ link_to_route('admins.create', 'Add new admin') }}</p>

@if ($admins->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($admins as $admin)
				<tr>
					<td>{{{ $admin->username }}}</td>
					<td>{{{ $admin->password }}}</td>
                    <td>{{ link_to_route('admins.edit', 'Edit', array($admin->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admins.destroy', $admin->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no admins
@endif

@stop
