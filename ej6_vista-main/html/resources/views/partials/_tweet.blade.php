<div class="hover:bg-gray-100">
    {{-- @if (isset($post)) --}}

    {{-- {{dd($post)}} --}}

        {{-- @foreach ($posts as $post) --}}
            <div class="flex flex-shrink-0 p-4 pb-0">
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full" src="https://picsum.photos/400"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="font-medium leading-6 text-base text-gray-900">
                                {{-- {{ $post->user->name }} {{ $post->user->surname }} --}}
                                Equipo Vista
                                <span
                                    class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition">
                                    {{-- @{{ $post->user->username }}. {{ $post->created_at }} --}}
                                    @Unomas &emsp;  22 Junio
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pl-16">
                <p class="flex-shrink font-medium text-base text-gray-900 width-auto">
                    {{-- <span>{{ $post->lenguaje }} </span> {{ $post->publicacion }} --}}
                    <span class = "text-blue-700 text-xl">Python</span> <br>

                      print ("Hola Mundo")
                </p>

                <div class="flex">
                    <div class="w-full">
                        <div class="flex items-center">
                            <div class="flex-1 text-center">
                                <a href="#"
                                    class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12">
                                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#"
                                    class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user-plus" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="" />
        {{-- @endforeach --}}
    {{-- @endif --}}
</div>
