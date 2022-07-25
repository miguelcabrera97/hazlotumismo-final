<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- Resources  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-header/>
        
        <div class="min-h-screen bg-white pt-10 ">
                
            
            
            <!-- Page Content -->
            <div class="mt-12">
                <x-nav/>
                <main class="lg:ml-56 xl:ml-80">
                    {{ $slot }}
                </main>
            </div>

            
            
        </div>

      


        @stack('modals')

        @livewireScripts
    </body>
</html>
