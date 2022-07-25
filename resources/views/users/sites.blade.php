@section('title','Mis Sitios')
<x-app-layout>
    <div class="">
        <table class="min-w-full leading-normal ">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        site_name
                    </th>
                   
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Creado
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sites as $site)
                    <tr>
                        <td class="p-5 m-5">
                            {{$site->nombre}}
                            
                        </td>
                        <td class="p-5 m-5">
                            {{$site->siteid}}
                        </td>
                        
                        <td class="p-5 m-5">
                            {{$site->creado}}
                        </td>

                        <td class="flex mt-3">
                            <a class="p-3 mr-5 flex items-center rounded-md px-4 duration-300 cursor-pointer  bg-violet-600 text-white " href="/editar/{{Auth::user()->email}}/{{$site->siteid}}">Editar</a>
                            <a class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-red-600 text-white " href="/delete/{{$site->siteid}}/{{$site->id}}">Borrar Sitio</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
</x-app-layout>