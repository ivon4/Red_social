<div class="h-12 h-auto py-4 relative text-white w-64">
    <div class="fixed top-0">
        <nav class="mt-5">

            <img src="{{ asset('images/SnippetConnect.png') }}" alt="Imagen icono" class="w-25">
            <a href="{{ route('principal') }}"
                class="flex font-semibold group hover:bg-blue-100 hover:bg-opacity-80 hover:text-blue-500 items-center leading-6 px-2.5 py-2 rounded-full text-base text-gray-900">
                <svg class="mr-4 h-6 w-6 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6">
                    </path>
                </svg>
                Inicio
            </a>

            @auth()
                <a href="#"
                    class="flex font-semibold group hover:bg-blue-100 hover:bg-opacity-80 px-2.5 hover:text-blue-500 items-center leading-6 py-2 rounded-full text-base text-gray-900">
                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                    </svg>
                    Favoritos
                </a>

                <a href="" {{-- {{ route('profile') }} --}}
                    class="flex font-semibold group hover:bg-blue-100 hover:bg-opacity-80 hover:text-blue-500 items-center leading-6 px-2.5 py-2 rounded-full text-base text-gray-900">
                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Perfil
                </a>

                <a href="" {{-- {{ route('settings') }} --}}
                    class="flex font-semibold group hover:bg-blue-100 hover:bg-opacity-80 hover:text-blue-500 items-center leading-6 px-2.5 py-2 rounded-full text-base text-gray-900">
                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Settings
                </a>

                <button class="bg-blue-400 w-48 mt-5 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">
                    Snippets
                </button>
            @endauth
        </nav>

        @auth()
            <div class="flex-shrink-0 flex hover:bg-blue-00 rounded-full p-4 mt-12 mr-2">
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full" src="https://picsum.photos/400"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="font-medium leading-6 text-base text-gray-900">
                                {{ auth()->user()->full_name }}
                            </p>
                            <p
                                class="duration-150 ease-in-out font-medium group-hover:text-gray-300 leading-5 text-gray-400 text-sm transition">
                                {{ auth()->user()->name }} {{ auth()->user()->surname }}
                                <br>
                                {{ auth()->user()->email }}

                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('logout') }}">
                    <button
                        class="bg-blue-400 focus:outline-none font-medium hover:bg-blue-600 mt-5 px-4 py-2 rounded-full text-white w-48">
                        Log Out
                    </button>
                </a>
            </div>
        @endauth

        @guest()
            <div>
                <a href="{{ route('registro') }}">
                    <button
                        class="bg-blue-400 focus:outline-none font-medium hover:bg-blue-600 mt-5 px-4 py-2 rounded-full text-white w-48">
                        Registro
                    </button>
                </a>
            </div>

            <div>
                <a href="{{ route('login') }}">
                    <button
                        class="bg-blue-400 focus:outline-none font-medium hover:bg-blue-600 mt-5 px-4 py-2 rounded-full text-white w-48">
                        Log In
                    </button>
                </a>
            </div>
        @endguest
    </div>
</div>
<!--aside left end-->
