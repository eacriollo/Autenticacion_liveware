<x-layouts::app>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Listado de usuarios</h1>

        <table class="w-full border">
            <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Nombre</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Rol</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border p-2">{{ $user->name }}</td>
                    <td class="border p-2">{{ $user->email }}</td>
                    <td class="border p-2">{{ $user->roles->pluck('name')->join(', ') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layouts::app>
