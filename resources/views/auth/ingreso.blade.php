

@extends("principal")

@section("titulo", "Ingreso")

@section("contenido")

	<div class = "row justify-content-center mt-5">

		<div class = "col-md-6">
			
			<h2 class = "text-center texto-primario">Sistema de Usuarios</h2>

		</div>

	</div>

	<div class = "row justify-content-center login">

		<div class = "col-md-5">

			<div class = "card">
				
				<div class = "card-header text-center">Iniciar Sesión</div>

				<div class = "card-body">
					
					<form action ="#">
						
						<div class = "form-group row">
							
							<label for = "email" class = "col-md-5 col-form-label text-md-right">Correo Electrónico</label>

							<div class = "col-md-7">

								<input type = "email" name = "email" class = "form-control">

							</div>

						</div>

						<div class = "form-group row">
							
							<label for = "password" class = "col-md-5 col-form-label text-md-right">Contraseña</label>

							<div class = "col-md-7">
								
								<input type = "password" name = "password" class = "form-control">

							</div>

						</div>

						<div class = "form-group row mt-4">
							
							<div class = "offset-md-9 col-md-3">
								
								<button type = "submit" class = "btn btn-primary">Ingresar</button>

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

@endsection

