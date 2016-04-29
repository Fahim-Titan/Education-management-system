{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('textbook_name', 'Textbook_name:') !!}
			{!! Form::text('textbook_name') !!}
		</li>
		<li>
			{!! Form::label('sub_name', 'Sub_name:') !!}
			{!! Form::text('sub_name') !!}
		</li>
		<li>
			{!! Form::label('credit', 'Credit:') !!}
			{!! Form::text('credit') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}