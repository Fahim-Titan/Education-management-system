{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('r_id', 'R_id:') !!}
			{!! Form::text('r_id') !!}
		</li>
		<li>
			{!! Form::label('r_data', 'R_data:') !!}
			{!! Form::text('r_data') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}