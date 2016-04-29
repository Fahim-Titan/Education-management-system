{!! Form::open(array('route' => 'enrollment.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('c_id', 'C_id:') !!}
			{!! Form::text('c_id') !!}
		</li>
		<li>
			{!! Form::label('s_id', 'S_id:') !!}
			{!! Form::text('s_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}