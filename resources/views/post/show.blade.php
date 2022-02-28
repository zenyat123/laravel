

	@extends("principal")

	@section("content")

		<div class = "grid grid-cols-3">

			<div class = "col-span-1">

				<h1 class = "text-lg text-gray-900 font-medium">Consultar publicación</h1>

				<p class = "text-gray-600 mt-1">Ten presente lo creado</p>

			</div>

			<div class = "col-span-2">

				<div class = "bg-white rounded-tl-md rounded-tr-md shadow px-4 py-6">

					<div class = "grid grid-cols-6">

						<div class = "col-span-3">

							<x-label for="title" value="Título:"/>

							<span>{{ $post->title }}</span>

							<x-label for="url" value="Url:"/>

							<span>{{ $post->url }}</span>

							<x-label for="content" value="Contenido:"/>

							<span>{{ $post->content }}</span>

						</div>

					</div>

				</div>

				<x-actions>

					<x-link>

						<x-slot name="link">

							{{ route("post.index") }}

						</x-slot>

						<x-slot name="text">

							Volver

						</x-slot>

					</x-link>

				</x-actions>

			</div>

		</div>

	@endsection

