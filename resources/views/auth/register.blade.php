<x-guest-layout>


     <x-jet-validation-errors class="mb-4" />

      <!-- LOGIN CONTAINER  -->
		<div class="container mx-auto ">
			<div class="flex justify-center items-center h-screen px-6 ">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex border-2 border-slate-100 rounded-xl">
                    {{-- IMAGE LOGIN --}}
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
					></div>
					  {{-- IMAGE LOGIN END--}}


                      <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none ">
						<h3 class="pt-4 text-2xl text-center font-bold mb-5"> Crear mi Cuenta</h3>
						<div class="w-full h-100">
                           
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- NOMBRE INPUT --}}
                            <div>
                                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div> 
                            {{-- NOMBRE  INPUT END--}}
            
            
                            {{-- PASSWORD EMAIL --}}
                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                            {{-- PASSWORD EMAIL END--}}
            
                            
                            <div class="mt-4">
                                <x-jet-label for="pais" value="{{ __('Pais') }}" />
                                <x-jet-input id="pais" class="block mt-1 w-full" type="text" name="pais" :value="old('pais')" required autofocus autocomplete="name" />
                            </div>
                
                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>
                
                            <div class="mt-4">
                                <x-jet-label for="password_confirmation" value="{{ __('Confirme su Contraseña') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        
                            
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
            
            
                            <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                                    px-4 py-3 mt-6">Registrarme </button>
                            </form>
                            <hr class="my-6 border-gray-300 w-full">
                            
                            <p class="mt-8">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Iniciar Sesión</a></p>
                      </div>
					</div>


				</div>
			</div>
		</div>
        {{-- LOGIN CONTAINER END--}}




</x-guest-layout>
