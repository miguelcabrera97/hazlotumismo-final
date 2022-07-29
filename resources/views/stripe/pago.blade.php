<x-app-layout>
    
    <form action="{{route('Mxn-Anual')}}" method="POST">
        @csrf
        
        <button class="m-5 p-5 bg-purple-500" id="checkout"> checkout </button>
    </form>
</x-app-layout>