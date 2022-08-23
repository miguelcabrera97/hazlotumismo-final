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
                        Estado
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Ver
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Descargar
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        creado
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Finaliza
                    </th>
                </tr>
            </thead>
            <tbody>


                @foreach ($invoices as $invoice )

                      <tr>
                        <td class="p-5 m-5">
                            <span class="capitalize">{{($invoice->amount_paid/100)}}.00 </span>
                        </td>
                        <td class="p-5 m-5">
                            <span class="capitalize">{{$invoice->currency}}</span>
                        </td>

                        <td class="p-5 m-5">
                            <span class="capitalize">{{$invoice->status}}</span>
                        </td>

                        <td class="p-5 m-5">
                            <span class="capitalize"><a href="{{$invoice->hosted_invoice_url}}" target="blank_">Visualizar</a></span>
                        </td>
                        <td class="p-5 m-5">
                            <span class="capitalize"><a href="{{$invoice->invoice_pdf}}">Descargar</a></span>
                        </td>
                        <td class="p-5 m-5">
                            <span class="capitalize">Aun no</span>
                        </td>
                        <td class="p-5 m-5">
                            <span class="capitalize">Aun tampoco</span>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>

    </div>


</x-app-layout>
