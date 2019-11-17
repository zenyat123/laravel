

@extends("principal")

@section("titulo", "Confirmar")

@section("contenido")

	<h1 class = " text-center mt-5 mb-5 text-danger">Confirmar la eliminación</h1>

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

				<i class = "fa fa-user-times"></i> Eliminar Usuario

			</li>

		</ol>

	</nav>

	<div class = "row mt-5">
		
		<div class = "col-md-12">

			<h3 class = "text-danger">

				¿Confirma la eliminación de {{ $usuario->nombres }} {{ $usuario->apellidos }}?

			</h3>

		</div>

	</div>

	<div class = "espaciado-3">
		
		

	</div>

	<div class = "row mt-5">
		
		<div class = "offset-md-10 col-md-2">
			
			<form method = "post" action = "{{ route('usuarios.destroy', $usuario->id_usuario) }}">
			@method("delete")			
			@csrf

				<a href = "{{ route('usuarios.index') }}" class = "btn btn-light" role = "button">Volver</a>
				
				<button type = "submit" class = "btn btn-danger">Eliminar</button>

			</form>

		</div>

	</div>

@endsection

