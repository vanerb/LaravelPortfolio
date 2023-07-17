@extends('layouts.app')

@section('title', 'Blog')

@section('meta-description', 'blog noticias actualidad noticias 24h')

@section('content')


<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="my-4 text-3xl text-center text-sky-600 dark:text-sky-500">Blog</h1> 

    @auth
    @if(auth()->user()->tipo_usuario === 'administrator')
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{ route('posts.create') }}">Crear post</a>
    @endif
    @endauth
</header>


<main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">

    @foreach ($post as $posts)
    <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
        <a href="{{ route('posts.show', $posts->id) }}">{{ $posts->title }}</a></h2>
        
    
        <div  class="flex justify-between">
            @auth
            @if(auth()->user()->tipo_usuario === 'administrator')
            <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('posts.edit', $posts) }}">Editar</a>
            @endif
            @endauth
            <form action="{{ route('posts.destroy', $posts) }}" method="POST">
                @csrf
                @method('DELETE')
                @auth
                @if(auth()->user()->tipo_usuario === 'administrator')
                <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar</button>
                @endif
                @endauth
            </form>
        </div>
    </div>
    
    @endforeach

</main>
@endsection
