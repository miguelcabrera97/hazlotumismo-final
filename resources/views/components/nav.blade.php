
    <div class="fixed sm:w-1/4 lg:w-1/5 xl:w-1/6 hidden lg:block md:hidden p-8 border-r h-screen border-gray-200">
        <h6 class="font-bold mb-4">Acciones rapidas</h6>
        <ul>

            {{--  INICIO  --}}
            <a href="{{route('home')}}">
                <li class=" py-3 ">
                    <div class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-violet-600 hover:text-white ">
                
                        <i class="bi bi-house"></i>
                         <span class="text-[15px] ml-4  "> Inicio </span>
                      </div>
                </li>
            </a>
             {{-- END INICIO  --}}
            

             {{-- CREAR SUTIO --}}
             <a href="{{route('plantillas')}}">
                <li class=" py-3 ">
                    <div class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-violet-600 hover:text-white ">
                
                        <i class="bi bi-plus-square"></i>
                                <span class="text-[15px] ml-4  "> Crear Nuevo Sitio</span>
                      </div>
                </li>
            </a>
             {{-- END CREAR SUTIO --}}

            
            {{-- MIS SITIOS --}}
            <a href="{{route('sites')}}">
                <li class=" py-3 ">
                    <div class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-violet-600 hover:text-white ">
                
                        <i class="bi bi-collection"></i>
                        <span class="text-[15px] ml-4  "> Mis Sitios</span>
                      </div>
                </li>
            </a>
            {{-- END MIS SITIOS --}}

            {{-- MI FACTURACION --}}
            <a href=" {{route('facturacion')}}">
                <li class=" py-3 ">
                    <div class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-violet-600 hover:text-white ">
                
                        <i class="bi bi-receipt"></i>
                        <span class="text-[15px] ml-4  "> Mi Facutación</span>
                      </div>
                </li>
            </a>
            {{-- END MIS FACTURACION --}}

            {{-- SOPORTE  --}}
            <a href=" ">
                <li class=" py-3 ">
                    <div class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-violet-600 hover:text-white ">
                        <i class="bi bi-headset"></i>
                        <span class="text-[15px] ml-4 "> Soporte </span>
                      </div>
                </li>
            </a>
            {{-- END  SOPORTE  --}}

        </ul>

        <h6 class="font-bold mb-4 mt-4">Configuracion</h6>
        <ul>
            {{-- Perfil  --}}
            <a href="{{route('profile.show')}}">
                <li class=" py-3 ">
                    <div class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-violet-600 hover:text-white ">
                
                        <i class="bi bi-fingerprint"></i>
                                <span class="text-[15px] ml-4  ">Perfil</span>
                      </div>
                </li>
            </a>
            {{-- END  Perfil  --}}
            
           
        </ul>
    </div>
    
