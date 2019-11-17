

@extends("principal")

@section("titulo", "Consultar Usuario")

@section("contenido")

	<h1 class = "text-center mt-5 mb-5 texto-primario">Consultar Usuario</h1>

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

				<i class = "fa fa-search"></i> Consultar Usuario

			</li>

		</ol>

	</nav>

	<form>

		<div class = "form-group row">
			
			<label for = "id_usuario" class = "col-md-2 col-form-label">Identificación:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "id_usuario" class = "form-control" value = "{{ $usuario->id_usuario }}" disabled>

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "nombres" class = "col-md-2 col-form-label">Nombres:</label>

			<div class = "col-md-4">

				<input type = "text" name = "nombres" class = "form-control" value = "{{ $usuario->nombres }}" disabled>

			</div>

			<label for = "apellidos" class = "col-md-2 col-form-label">Apellidos:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "apellidos" class = "form-control" value = "{{ $usuario->apellidos }}" disabled>

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "direccion" class = "col-md-2 col-form-label">Dirección:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "direccion" class = "form-control" value = "{{ $usuario->direccion }}" disabled>

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "telefono" class = "col-md-2 col-form-label">Teléfono:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "telefono" class = "form-control" value = "{{ $usuario->telefono }}" disabled>

			</div>

			<label for = "celular" class = "col-md-2 col-form-label">Celular:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "celular" class = "form-control" value = "{{ $usuario->celular }}" disabled>

			</div>

		</div>

		<div class = "form-group row">
			
			<label for = "departamento" class = "col-md-2 col-form-label">Departamento:</label>

			<div class = "col-md-4">

				@php($departamentos = ["Administrativo","Tecnología","Operativo","Comercial","Recursos Humanos"])
				
				<select name = "departamento" class = "form-control" disabled>
					
					@foreach($departamentos as $departamento)

						<option value = "{{ $departamento }}" @if($usuario->departamento == $departamento) selected @endif>

							{{ $departamento }}

						</option>

					@endforeach

				</select>

			</div>

			<label for = "cargo" class = "col-md-2 col-form-label">Cargo:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "cargo" class = "form-control" value = "{{ $usuario->cargo }}" disabled>

			</div>

		</div>

		<div class = "form-group row">

			<label for = "salario" class = "col-md-2 col-form-label">Salario:</label>

			<div class = "col-md-4">
				
				<input type = "text" name = "salario" class = "form-control" value = "{{ $usuario->salario }}" disabled>

			</div>		
	
		</div>

		<div class = "form-group row">
			
			<label for = "email" class = "col-md-2 col-form-label">Correo Electrónico:</label>

			<div class = "col-md-4">
				
				<input type = "email" name = "email" class = "form-control" value = "{{ $usuario->email }}" disabled>

			</div>

		</div>

	</form>

@endsection

