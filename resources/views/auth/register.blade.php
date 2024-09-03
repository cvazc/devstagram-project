@extends('layouts.app')

@section('title')
Regístrare en DevStagram
@endsection

@section('content')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="">
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-grey-500 font-bold">Nombre</label>
                <input type="text" class="border p-3 w-full rounded-lg" name="name" id="name" placeholder="Tu nombre">
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-grey-500 font-bold">Username</label>
                <input type="text" class="border p-3 w-full rounded-lg" name="username" id="username" placeholder="Tu nombre de usuario">
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-grey-500 font-bold">Email</label>
                <input type="email" class="border p-3 w-full rounded-lg" name="email" id="email" placeholder="Tu email de registro">
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-grey-500 font-bold">Password</label>
                <input type="password" class="border p-3 w-full rounded-lg" name="password" id="password" placeholder="Password de registro">
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-grey-500 font-bold">Repetir password</label>
                <input type="password" class="border p-3 w-full rounded-lg" name="password_confirmation" id="password_confirmation" placeholder="Repite tu password">
            </div>
            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection