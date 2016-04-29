{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('gender', 'Gender:') !!}
			{!! Form::text('gender') !!}
		</li>
		<li>
			{!! Form::label('blood_type', 'Blood_type:') !!}
			{!! Form::text('blood_type') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('dob', 'Dob:') !!}
			{!! Form::text('dob') !!}
		</li>
		<li>
			{!! Form::label('phone_number', 'Phone_number:') !!}
			{!! Form::text('phone_number') !!}
		</li>
		<li>
			{!! Form::label('address', 'Address:') !!}
			{!! Form::text('address') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::text('image') !!}
		</li>
		<li>
			{!! Form::label('father_name', 'Father_name:') !!}
			{!! Form::text('father_name') !!}
		</li>
		<li>
			{!! Form::label('mother_name', 'Mother_name:') !!}
			{!! Form::text('mother_name') !!}
		</li>
		<li>
			{!! Form::label('gurdian_phone_number', 'Gurdian_phone_number:') !!}
			{!! Form::text('gurdian_phone_number') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}