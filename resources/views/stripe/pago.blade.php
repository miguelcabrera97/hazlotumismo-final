<x-app-layout>
    <div class=" p-10">
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-9 place-items-center">
            <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                <h3 class="text-2xl text-center">Pagina Informativa</h3>
                <ul class="m-5">
                    <ol>
                        <li class="italic m-2 text-lg">-Diseño responsivo</li>
                        <li class="italic m-2 text-lg">-SEO para tu sitio</li>
                        <li class="italic m-2 text-lg">-asdfsdggdg</li>
                        <li class="italic m-2 text-lg">-gdgdfgdfgdfgdf</li>
                        <li class="italic m-2 text-lg">-askdjfhasdkfgjh</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                    </ol>
                </ul>
                <form action="{{route('Mxn-Anual')}}" method="POST">
                    @csrf
                    <button class="m-5 p-5 bg-purple-500 justify-items-center" id="checkout"> checkout </button>
                </form> 
            </div>

            <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                <h3 class="text-2xl text-center">Tienda Basica</h3>
                <ul class="m-5">
                    <ol>
                        <li class="italic m-2 text-lg">-Diseño responsivo</li>
                        <li class="italic m-2 text-lg">-SEO para tu sitio</li>
                        <li class="italic m-2 text-lg">-asdfsdggdg</li>
                        <li class="italic m-2 text-lg">-gdgdfgdfgdfgdf</li>
                        <li class="italic m-2 text-lg">-askdjfhasdkfgjh</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                    </ol>
                </ul>
                <form action="{{route('Mxn-Anual')}}" method="POST">
                    @csrf
                    <button class="m-5 p-5 bg-purple-500" id="checkout"> checkout </button>
                </form> 
            </div>


            <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                <h3 class="text-2xl text-center">Tienda Completa</h3>
                <ul class="m-5">
                    <ol>
                        <li class="italic m-2 text-lg">-Diseño responsivo</li>
                        <li class="italic m-2 text-lg">-SEO para tu sitio</li>
                        <li class="italic m-2 text-lg">-asdfsdggdg</li>
                        <li class="italic m-2 text-lg">-gdgdfgdfgdfgdf</li>
                        <li class="italic m-2 text-lg">-askdjfhasdkfgjh</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                        <li class="italic m-2 text-lg">-asdhjkfgasdjkgsdgjhas</li>
                    </ol>
                </ul>
                <form action="{{route('Mxn-Anual')}}" method="POST">
                    @csrf
                    <button class="m-5 p-5 bg-purple-500" id="checkout"> checkout </button>
                </form> 
            </div>
            
            
            
        </div>
    </div>   
</x-app-layout>