{!! Form::open(array('route' => 'attendence.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('c_id', 'C_id:') !!}
			{!! Form::text('c_id') !!}
		</li>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::text('sub_id') !!}
		</li>
		<li>
			{!! Form::label('t_id', 'T_id:') !!}
			{!! Form::text('t_id') !!}
		</li>
		<li>
			{!! Form::label('attend', 'Attend:') !!}
			{!! Form::text('attend') !!}
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