<x-layouts::app>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Crear tarea</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label>Título</label>
                <input type="text" name="title" class="w-full border rounded p-2" value="{{ old('title') }}">
            </div>

            <div class="mb-4">
                <label>Descripción</label>
                <textarea name="description" class="w-full border rounded p-2">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label>Estado</label>
                <select name="status" class="w-full border rounded p-2">
                    <option value="pendiente">Pendiente</option>
                    <option value="en_proceso">En proceso</option>
                    <option value="completada">Completada</option>
                </select>
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
</x-layouts::app>
