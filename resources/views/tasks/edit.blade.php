<x-layouts::app>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Editar tarea</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Título</label>
                <input type="text" name="title" class="w-full border rounded p-2" value="{{ old('title', $task->title) }}">
            </div>

            <div class="mb-4">
                <label>Descripción</label>
                <textarea name="description" class="w-full border rounded p-2">{{ old('description', $task->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label>Estado</label>
                <select name="status" class="w-full border rounded p-2">
                    <option value="pendiente" @selected($task->status === 'pendiente')>Pendiente</option>
                    <option value="en_proceso" @selected($task->status === 'en_proceso')>En proceso</option>
                    <option value="completada" @selected($task->status === 'completada')>Completada</option>
                </select>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>
</x-layouts::app>
