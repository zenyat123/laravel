

	@extends("principal")

	@section("content")

		<h1 class = "text-3xl text-gray-900 mt-3 mb-16">Publicaciones</h1>

		<div class = "bg-white rounded-md shadow px-4 py-6">

			<table class = "table-auto w-full">

				<thead>

					<tr>

						<th>Id</th>
						<th>Título</th>
						<th>Url</th>
						<th>Contenido</th>
						<th></th>

					</tr>

				</thead>

				<tbody>

					@foreach($posts as $post)

						<tr>

							<td>{{ $post->id }}</td>
							<td>{{ $post->title }}</td>
							<td>{{ $post->url }}</td>
							<td>{{ $post->content }}</td>
							<td>

								<div class = "flex justify-center">

									<a href = "{{ route('post.show', $post) }}" class = "bg-gray-100 text-blue-600 rounded border border-gray-300 mx-0.5 px-3 py-1">

										<svg xmlns = "http://www.w3.org/2000/svg" class = "h-6 w-6" fill = "none" viewBox = "0 0 24 24" stroke = "currentColor">

											<path stroke-linecap = "round" stroke-linejoin = "round" stroke-width = "2" d = "M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>

										</svg>

									</a>

									<a href = "{{ route('post.edit', $post) }}" class = "bg-gray-100 text-blue-600 rounded border border-gray-300 mx-0.5 px-3 py-1">

										<svg xmlns = "http://www.w3.org/2000/svg" class = "h-6 w-6" fill = "none" viewBox = "0 0 24 24" stroke = "currentColor">

									  		<path stroke-linecap = "round" stroke-linejoin = "round" stroke-width = "2" d = "M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>

										</svg>

									</a>

									<form method = "post" action = "{{ route('post.destroy', $post) }}">
									@method("delete")
									@csrf

										<button type = "submit" class = "bg-gray-100 text-red-600 rounded border border-gray-300 mx-0.5 px-3 py-1">

											<svg xmlns = "http://www.w3.org/2000/svg" class = "h-6 w-6" fill = "none" viewBox = "0 0 24 24" stroke = "currentColor">
	 
												<path stroke-linecap = "round" stroke-linejoin = "round" stroke-width = "2" d = "M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"/>

											</svg>

										</button>

									</form>

								</div>

							</td>

						</tr>

					@endforeach

				</tbody>

			</table>

		</div>

		<div class = "flex justify-end mt-3">

			<x-link class="bg-gray-200 hover:bg-gray-100 border border-gray-300 text-gray-800 mr-3">

				<x-slot name="link">

					/

				</x-slot>

				<x-slot name="text">

					Inicio

				</x-slot>

			</x-link>

			<x-link>

				<x-slot name="link">

					{{ route("post.create") }}

				</x-slot>

				<x-slot name="text">

					Registrar

				</x-slot>

			</x-link>

		</div>

	@endsection

