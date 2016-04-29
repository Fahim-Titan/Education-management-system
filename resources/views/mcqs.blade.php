{!! Form::open(array('route' => 'mcq.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('e_id', 'E_id:') !!}
			{!! Form::text('e_id') !!}
		</li>
		<li>
			{!! Form::label('e_qs', 'E_qs:') !!}
			{!! Form::text('e_qs') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::text('image') !!}
		</li>
		<li>
			{!! Form::label('opt_1', 'Opt_1:') !!}
			{!! Form::text('opt_1') !!}
		</li>
		<li>
			{!! Form::label('opt_2', 'Opt_2:') !!}
			{!! Form::text('opt_2') !!}
		</li>
		<li>
			{!! Form::label('opt_3', 'Opt_3:') !!}
			{!! Form::text('opt_3') !!}
		</li>
		<li>
			{!! Form::label('opt_4', 'Opt_4:') !!}
			{!! Form::text('opt_4') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}