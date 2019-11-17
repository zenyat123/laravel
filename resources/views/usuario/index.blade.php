

@extends("principal")

@section("titulo", "Sistema de Usuarios")

@section("contenido")

	<h1 class = "text-center texto-primario mt-5 mb-5">

		<a href = "{{ route('usuarios.index') }}" class = "texto-primario">

			<i class = "fa fa-eercast" aria-hidden = "true"></i> Sistema de Usuarios

		</a>

	</h1>

	<div class = "espaciado-1">
		


	</div>

	<nav aria-label = "breadcrumb">
				
		<ol class = "breadcrumb">
			
			<li class = "breadcrumb-item active" aria-current = "page"><i class = "fa fa-home" aria-hidden = "true"></i> Inicio</li>

		</ol>

	</nav>

	<nav class = "navbar navbar-light float-right">

		<form class = "form-inline">

			<select name = "buscarpor" class = "form-control mr-md-2">
				
				<option selected>Buscar por</option>
				<option value = "id_usuario">Identificación</option>
				<option value = "nombres">Nombres</option>
				<option value = "apellidos">Apellidos</option>				 
				<option value = "telefono">Teléfono</option>
				<option value = "celular">Celular</option>
				<option value = "cargo">Cargo</option>
				<option value = "email">Correo electrónico</option>

			</select>
			
			<input type = "search" name = "buscador" class = "form-control mr-md-2" aria-label = "search">

			<button type = "submit" class = "btn btn-outline-primary my-md-2">Buscar</button>

		</form>

	</nav>

	<table class = "table table-bordered table-sm">
		
		<thead>
			
			<tr>
				
				<th scope = "col">Identificación</th>
				<th scope = "col">Nombres</th>
				<th scope = "col">Dirección</th>
				<th scope = "col">Teléfono</th>
				<th scope = "col">Celular</th>
				<th scope = "col">Departamento</th>
				<th scope = "col">Cargo</th>
				<th scope = "col">Salario</th>
				<th scope = "col">Correo Electrónico</th>
				<th scope = "col">Acciones</th>

			</tr>

		</thead>

		<tbody>

			@foreach($usuario as $campo)
			
			<tr>
				
				<th scope = "row">{{ $campo->id_usuario }}</th>
				<td><a href = "{{ route('usuarios.show', $campo->id_usuario) }}">{{ $campo->nombres }} {{ $campo->apellidos }}</a></td>
				<td>{{ $campo->direccion }}</td>
				<td>{{ $campo->telefono }}</td>
				<td>{{ $campo->celular }}</td>
				<td>{{ $campo->departamento }}</td>
				<td>{{ $campo->cargo }}</td>
				<td>{{ $campo->salario }}</td>
				<td>{{ $campo->email }}</td>
				
				<td>

					<a href = "{{ route('usuarios.edit', $campo->id_usuario) }}" class = "btn btn-warning btn-sm" role = "button">

						<i class = "fa fa-pencil-square-o" aria-hidden = "true"></i>

					</a>

					<a href = "{{ route('usuarios.confirm', $campo->id_usuario) }}" class = "btn btn-danger btn-sm" role = "button">

						<i class = "fa fa-times" aria-hidden = "true"></i>

					</a>

				</td>

			</tr>

			@endforeach

		</tbody>

	</table>

	{{ $usuario->appends(Request::all())->links() }}

	<div class = "row">

		<div class = "offset-md-9 col-md-3">

			<a href = "{{ route('usuarios.create') }}" class = "btn btn-primary"><i class = "fa fa-user-plus" aria-hidden = "true"></i> Registrar Usuario</a>

		</div>

	</div>

	<div class = "espaciado-1">
		


	</div>

	@if(session("respuesta"))

		<div class = "alert alert-success alert-dismissable fade show col-md-4 mx-auto" role = "alert">
			
			{{ session("respuesta") }}

			<button type = "button" class = "close" data-dismiss = "alert" aria-label = "close">
				
				<span aria-hidden = "true">&times;</span>

			</button>

		</div>

	@endif

@endsection

