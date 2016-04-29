{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::text('sub_id') !!}
		</li>
		<li>
			{!! Form::label('c_id', 'C_id:') !!}
			{!! Form::text('c_id') !!}
		</li>
		<li>
			{!! Form::label('e_type', 'E_type:') !!}
			{!! Form::text('e_type') !!}
		</li>
		<li>
			{!! Form::label('e_cat', 'E_cat:') !!}
			{!! Form::text('e_cat') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}