@extends('layouts.master')

@section('title', 'Users')

@section('style')


@endsection

@section('content')	
<div class="fondo">
	<div class="container-fluid">
		<div class="row left_side">
			<div class="col-sm-2">
				@include('partials.left_nav_admin')
			</div>
			<div class="col-sm-10">
				<section class="admin_user">				
					{!! Form::open(['route' => 'admin.users.store','method' => 'POST','files' => true]) !!}
						<h3><i class="fa fa-pencil"> Users</i></h3>
						<hr>
						<div class="form-group">
							{!! Form::label('name','Name') !!}	
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full Name' ,'required']) !!}
						</div>	
						<div class="form-group">
							{!! Form::label('email','E-Mail') !!}	
							{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com' ,'required']) !!}
						</div>						
						<div class="form-group">
							{!! Form::label('passowrd','Password') !!}	
							{!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password' ,'required']) !!}
						</div>							
						<div class="form-group">
							{!! Form::label('phone','Phone') !!}	
							{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone' ,'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('tipo','User Type') !!}	
							{!! Form::select('tipo', ['member' => 'Member', 'admin' => 'Administrator', 'guest' => 'Guest'], null, ['class' => 'form-control', 'placeholder'  => 'Select one Option...', 'required']) !!}
						</div>	
						<br>
						<div class="form-group">
							{!! Form::button('<i class="fa fa-floppy-o"> Add User</i>',['class' => 'btn btn-success', 'type'=>'submit']) !!}
						</div>
					{!! Form::close() !!}
				</section>	
				<br><br>		
			</div>
		</div>
	</div>
	
</div>


@endsection

@section('js')

<script>


	
</script>

@endsection
