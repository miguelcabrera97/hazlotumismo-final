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
                            <a class="mr-5" href="/editar/{{Auth::user()->email}}/{{$site->siteid}}">Editar</a>


                            
                            <form action="{{route('resetear')}}" method="POST">
                                @csrf
                                <input class="mr-5" type="hidden" value="{{$site->siteid}}" name="id">
                                <input type="hidden" value="{{$site->template}}">
                                <input class="mr-5" type="submit" value="Resetear">
                                
                            </form> 



                            <a href="/delete/{{$site->siteid}}">Borrar Sitio</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
</x-app-layout>