

	@extends("principal")

	@section("content")

		<div class = "grid grid-cols-3">

			<div class = "col-span-1">

				<h1 class = "text-lg text-gray-900 font-medium">Actualizar publicación</h1>

				<p class = "text-gray-600 mt-1">Modificar lo creado</p>

			</div>

			<div class = "col-span-2">

				<form method = "post" action = "{{ route('post.update', $post) }}">
				@method("put")
				@csrf

					<div class = "bg-white rounded-tl-md rounded-tr-md shadow px-4 py-6">

						<x-label for="title" value="Título:"/>

						<x-input type="text" name="title" value="{{ $post->title }}"/>

						<x-label for="url" value="Url:"/>

						<x-input type="text" name="url" value="{{ $post->url }}"/>

						<x-label for="content" value="Contenido:"/>

						<x-textarea name="content">

							{{ $post->content }}

						</x-textarea>

					</div>

					<x-actions>

						<x-link class="bg-gray-200 hover:bg-gray-100 border border-gray-300 text-gray-800 mr-3">

							<x-slot name="link">

								{{ route("post.index") }}

							</x-slot>

							<x-slot name="text">

								Volver

							</x-slot>

						</x-link>

						<x-button>Actualizar</x-button>

					</x-actions>

				</form>

			</div>

		</div>

	@endsection

