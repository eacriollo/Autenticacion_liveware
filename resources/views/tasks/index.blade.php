<x-layouts::app>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Listado de tareas</h1>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

@can('task.create')
    <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
        Nueva tarea
    </a>
@endcan

<table class="w-full mt-4 border">
    <thead>
    <tr class="bg-gray-100">
        <th class="border p-2">Título</th>
        <th class="border p-2">Descripción</th>
        <th class="border p-2">Estado</th>
        <th class="border p-2">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td class="border p-2">{{ $task->title }}</td>
            <td class="border p-2">{{ $task->description }}</td>
            <td class="border p-2">{{ $task->status }}</td>
            <td class="border p-2">
                @can('task.edit')
                    <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600">Editar</a>
                @endcan

                @can('task.delete')
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2">Eliminar</button>
                    </form>
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $tasks->links() }}
</div>
</div>
</x-layouts::app>
