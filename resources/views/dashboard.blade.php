@section('title','Inicio')
<x-app-layout>
    <div class="  p-10">
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-9">
            @role('admin')
            <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm text-center  inline-block align-middle">01</div>
            <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">02</div>
            <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">03</div>
            @endrole
            @role('usuario')
            <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">04</div>
            <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">05</div>
            <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">06</div>
            @endrole
        </div>
    </div>

    
</x-app-layout>
