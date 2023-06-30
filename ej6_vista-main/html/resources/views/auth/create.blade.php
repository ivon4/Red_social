@extends('layouts.app')
@section('titulo', 'Crear nuevo usuario')

@section('content')

    <div class="logo">
        <img src="{{ asset('/images/SnippetConnect.png') }}" alt="icono">
    </div>

    <div class=" flex  justify-center h-screen">
        <section class="section max-w-md mx-auto rounded overflow-hidden shadow-lg bg-[#cefcf7] p-8">
            <h1 class="text-3xl">Registro</h1>
            <form action="{{ route('guardar_registro') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block">Usuario</label>
                    <input class="w-80 border border-gray-300 rounded-lg py-2 px-4 " type="text"
                        placeholder="Escribe el usuario" name="username" value="{{ old('username') }}">
                </div>
                <div class="mb-4">
                    <label class="block">Nombre</label>
                    <input class="w-80 border border-gray-300 rounded-lg py-2 px-4" type="text"
                        placeholder="Escribe el nombre" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-4">
                    <label class="block">Apellido</label>
                    <input class="w-80 border border-gray-300 rounded-lg py-2 px-4" type="text"
                        placeholder="Escribe tu apellido" name="surname" value="{{ old('surname') }}">
                </div>
                <div class="mb-4">
                    <label class="block">Correo</label>
                    <input class="w-80 border border-gray-300 rounded-lg py-2 px-4" type="email"
                        placeholder="Escribe el correo" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-4">
                    <label class="block">Contraseña</label>
                    <input class="w-80 border border-gray-300 rounded-lg py-2 px-4" type="password"
                        placeholder="Escribe la contraseña" name="password">
                </div>
                <div class="mb-4">
                    <label class="block">Confirmar contraseña</label>
                    <input class="w-80 border border-gray-300 rounded-lg py-2 px-4" type="password"
                        placeholder="Vuelve a escribir la contraseña" name="passwordConfirm">
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Guardar</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li >{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>
            <a href="{{ route('principal') }}" class="block text-center text-xl pb-3 font-semibold ">Acceso invitados</a>
        </section>
    </div>

@endsection
