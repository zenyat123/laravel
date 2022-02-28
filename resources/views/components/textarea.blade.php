@props(["name"])

<textarea name = "{{ $name }}" rows = "6" class = "border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">

	{{ $slot }}

</textarea>

