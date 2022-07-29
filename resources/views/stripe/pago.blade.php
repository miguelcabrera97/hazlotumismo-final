<x-app-layout>
    <div class="">

        <div x-data="{ openTab: 1,
                activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                inactiveClasses: 'text-blue-500 hover:text-blue-800' }" class="p-6">
            <!-- Content goes here -->
            <ul class="flex border-b justify-center">
                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                    <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                        class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                        href="#">Mensual</a>
                </li>
                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                    <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                        class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="#">Anual</a>
                </li>

            </ul>
            <div class="w-full pt-4">
                <div x-show="openTab === 1">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-9 place-items-center">
                        <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                            <h3 class="text-xl text-center">Pagina Informativa Mensual</h3>
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
                                <button class="m-5 p-5 bg-purple-500 justify-items-center" id="checkout"> checkout
                                </button>
                            </form>
                        </div>

                        <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                            <h3 class="text-xl text-center">Tienda Basica Mensual</h3>
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
                            <h3 class="text-xl text-center">Tienda Completa Mensual</h3>
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
                <div x-show="openTab === 2">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-9 place-items-center">



                        <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                            <h3 class="text-xl text-center">Pagina Informativa Anual</h3>
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
                                <button class="m-5 p-5 bg-purple-500 justify-items-center" id="checkout"> checkout
                                </button>
                            </form>
                        </div>

                        <div class="p-6 rounded-lg shadow-sm bg-blue-200">
                            <h3 class="text-xl text-center">Tienda Basica Anual</h3>
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
                            <h3 class="text-xl text-center">Tienda Completa Anual</h3>
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

            </div>
        </div>

    </div>
</x-app-layout>