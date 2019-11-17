

@extends("principal")

@section("titulo", "Actualizar Usuario")

@section("contenido")

	<h1 class = "text-center mt-5 mb-5 texto-primario">Actualizar Usuario</h1>

	<div class = "espaciado-1">
		


	</div>

	<nav aria-label = "breadcrumb">
				
		<ol class = "breadcrumb">
			
			<li class = "breadcrumb-item">

				<a href = "{{ route('usuarios.index') }}">

					<i class = "fa fa-home" aria-hidden = "true"></i> Inicio

				</a>

			</li>

			<li class = "breadcrumb-item active" aria-current = "page">

				<i class = "fa fa-pencil"></i> Actualizar Usuario

			</li>

		</ol>

	</nav>

	<form method = "post" action = "{{ route('usuarios.update', $usuario->id_usuario) }}" class = "formulario">
	@method("put")
	@csrf

		<div class = "form-group row">
			
			<label for = "id_usuario" class = "col-md-2 col-form-label">Identificación:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "id_usuario" class = "form-control" value = "{{ $usuario->id_usuario }}">

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "nombres" class = "col-md-2 col-form-label">Nombres:</label>

			<div class = "col-md-4">

				<input type = "text" name = "nombres" class = "form-control" value = "{{ $usuario->nombres }}">

			</div>

			<label for = "apellidos" class = "col-md-2 col-form-label">Apellidos:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "apellidos" class = "form-control" value = "{{ $usuario->apellidos }}">

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "direccion" class = "col-md-2 col-form-label">Dirección:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "direccion" class = "form-control" value = "{{ $usuario->direccion }}">

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "telefono" class = "col-md-2 col-form-label">Teléfono:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "telefono" class = "form-control" value = "{{ $usuario->telefono }}">

			</div>

			<label for = "celular" class = "col-md-2 col-form-label">Celular:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "celular" class = "form-control" value = "{{ $usuario->celular }}">

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "departamento" class = "col-md-2 col-form-label">Departamento:</label>

			<div class = "col-md-4">

				@php($departamentos = ["Administrativo","Tecnología","Operativo","Comercial","Recursos Humanos"])
				
				<select name = "departamento" class = "form-control">
					
					@foreach($departamentos as $departamento)

						<option value = "{{ $departamento }}" @if($usuario->departamento == $departamento) selected @endif>

							{{ $departamento }}

						</option>

					@endforeach

				</select>

			</div>

			<label for = "cargo" class = "col-md-2 col-form-label">Cargo:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "cargo" class = "form-control" value = "{{ $usuario->cargo }}">

			</div>

		</div>

		<div class = "form-group row">

			<label for = "salario" class = "col-md-2 col-form-label">Salario:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "salario" class = "form-control" value = "{{ $usuario->salario }}">

			</div>		
	
		</div>

		<div class = "form-group row">
			
			<label for = "email" class = "col-md-2 col-form-label">Correo Electrónico:</label>

			<div class = "col-md-4">
				
				<input type = "email" name = "email" class = "form-control" value = "{{ $usuario->email }}">

			</div>

		</div>

		<div class = "form-group row mt-5">
			
			<div class = "offset-md-9 col-md-3">

				<a href = "{{ route('usuarios.index') }}" class = "btn btn-light" role = "button">Volver</a>

				<input type = "submit" value = "Actualizar" class = "btn btn-primary">

			</div>

		</div>

	</form>

@endsection

