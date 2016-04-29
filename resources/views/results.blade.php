{!! Form::open(array('route' => 'result.store', 'method' => 'POST')) !!}
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
			{!! Form::label('e_id', 'E_id:') !!}
			{!! Form::text('e_id') !!}
		</li>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::text('sub_id') !!}
		</li>
		<li>
			{!! Form::label('number', 'Number:') !!}
			{!! Form::text('number') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}