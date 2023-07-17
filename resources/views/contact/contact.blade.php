@extends('layouts.app')

@section('title', 'Contacto')

@section('meta-description', 'contacto contactame ayuda')

@section('content')
<h1 class="my-4 text-3xl text-center text-sky-600 dark:text-sky-500">Contacto</h1> 

<div>
    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('contact')  }}" method="POST">
        @csrf
    
        @include('contact.formfields')
       
        <div class="flex items-center justify-between mt-4">
           
    
            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Enviar</button>
    </form>
</div>


@endsection