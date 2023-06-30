@extends('layouts.app')
@section('content')
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif             

<div class="logo">
    <img src="{{asset('/images/SnippetConnect.png')}}" alt="icono" >
  </div>
  <main class="login-form ">
    <div class="container mx-auto mt-10">
      <div class="max-w-md mx-auto rounded overflow-hidden shadow-lg bg-[#cefcf7]">
        <h3 class="text-center font-bold text-3xl py-4">Formulario Login</h3>
        <div class="p-4">
          <form method="POST" action="{{ route('custom-login') }}">
            @csrf
            <div class="mb-3">
              <input type="text" placeholder="Email" id="email" class="border w-full py-2 px-3 rounded" name="email" required autofocus>
              @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <input type="password" placeholder="Password" id="password" class="border w-full py-2 px-3 rounded" name="password" required>
              @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <label class="flex items-center">
                <input type="checkbox" name="remember" class="form-checkbox">
                <span class="ml-2">Recuerdame</span>
              </label>
            </div>
            <div class="text-center">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <div class="max-w-md mx-auto rounded overflow-hidden shadow-lg bg-[#D1F0FC]">
  <a href="{{ route('registro') }}" class="block text-center mt-4 text-xl font-semibold  ">REGISTRO</a>
  <br>
  <a href="{{ route('principal') }}" class="block text-center text-xl pb-3 font-semibold">Acceso invitados</a>
  </div>
    
@endsection
                            
