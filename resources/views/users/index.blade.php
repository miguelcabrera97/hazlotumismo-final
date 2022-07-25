<x-app-layout>
    <div class="">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Usuarios
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        id
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Creado
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="p-5">
                            {{$user->name}}
                        </td>
                        <td class="p-5">
                            {{$user->email}}
                        </td>
                        <td class="p-5">
                            {{$user->id}}
                        </td>
                        <td class="p-5">
                            {{$user->created_at}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
</x-app-layout>