@section('title','Facturacion')
<x-app-layout>
    <div class="  p-10">
        
        <table class="min-w-full leading-normal ">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Total
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        divisa
                    </th>
                   
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ver
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        creado
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagos as $pago)
                    <tr>
                        <td class="p-5 m-5">
                            {{$pago->total}}
                            
                        </td>
                        <td class="p-5 m-5">
                            {{$pago->divisa}}
                        </td>
                        
                        <td class="p-5 m-5">
                            {{$pago->ver}}
                        </td>

                        <td class="p-5 m-5">
                            {{$pago->creado}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>

    </div>

    
</x-app-layout>