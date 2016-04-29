{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('n_id', 'N_id:') !!}
			{!! Form::text('n_id') !!}
		</li>
		<li>
			{!! Form::label('n_data', 'N_data:') !!}
			{!! Form::text('n_data') !!}
		</li>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::text('date') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}