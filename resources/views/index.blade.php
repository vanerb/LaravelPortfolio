@extends('layouts.app')

@section('title', 'Inicio')

@section('meta-description', 'index inicio ayuda')

@section('content')
<h1 class="my-4 text-3xl text-center text-sky-600 dark:text-sky-500">Inicio</h1>
<header class="bg-slate-900">
    <div class="bg-black p-10">
        <img src="img/logocabecera.png" alt="" class="mx-auto h-96 w-96 shadow-lg rounded-lg">
    </div>
    
</header>

<div class="mb-20">
    <h1 class="text-center text-sky-600 text-3xl">Presentación</h1>
    <div class="grid grid-cols-2 gap-4">
        <div class="ml-20 text-left text-white p-4">
            <p>Soy full-stack developer en entorno web, también soy programadora de videojuegos.</p>
            <p>Domino varios lenguajes de programación entre los que se incluye: </p>
            <ul class="list-disc ml-4">
                <li>C#</li>
                <li>Java</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Frameworks</li>
                <li>Python</li>
                <li>SQL</li>
                <li>FileMaker</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>Bootstrap</li>
            </ul>
           
            <p>Tengo experiencia en el uso del motor grafico de Unity, FileMaker, Git/GitHub y WordPress. También tengo experiencia en el montaje y mantenimiento de equipos informáticos.</p>
            <p>Dominio de los sistemas informáticos Windows y Linux.</p>
        </div>
    
        <div class="p-4">
            <img class="mx-auto" src="img/usuario.png" alt="" width="300px" height="300px">
        </div>
    
    </div>
    <div class="flex justify-center items-center">
        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="button" onclick="window.location.href='{{ route('about') }}'">Saber más</button>
    </div>
   
</div>


<div class="mb-20">
    <div class="bg-black">
        
        <div class="grid grid-cols-2 gap-4 p-10">
            <div class="text-left text-white p-4">
                <h1 class="text-center text-sky-600 text-3xl">Servicios</h1>
            </div>
            <div class="text-left text-white pt-4">
                <ul>
                    <li class="border-b border-gray-700">Creación de páginas web</li>
                    <li class="border-b border-gray-700">Creación de apps móviles</li>
                    <li class="border-b border-gray-700">Creación de videojuegos</li>
                    <li class="border-b border-gray-700">Posicionamiento SEO</li>
                </ul>
            </div>

            

        </div>
       
    </div>
    
</div>


<div class="mb-20">
    <h1 class="text-center text-sky-600 text-3xl">Lenguajes de programación</h1>
    <div class="grid grid-cols-3 gap-4 p-10">
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/htmlcss.png" alt="" width="128" height="128">
            <p class="ml-10">HTML y CSS</p>
        </div>
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/js.png" alt="" width="128" height="128">
            <p class="ml-10">JavaScript</p>
        </div>
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/php.png" alt="" width="128" height="128">
            <p class="ml-10">PHP</p>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 p-10">
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/c.png" alt="" width="128" height="128">
            <p class="ml-10">C#</p>
        </div>
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/sql.png" alt="" width="128" height="128">
            <p class="ml-10">SQL</p>
        </div>
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/android.png" alt="" width="128" height="128">
            <p class="ml-10">Android Studio</p>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 p-10">
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img src="img/lenguajes/j.png" alt="" width="128" height="128">
            <p class="ml-10">Java</p>
        </div>
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img class="bg-gray-300" src="img/lenguajes/git.png" alt="" width="128" height="128">
            <p class="ml-10">Github/Git</p>
        </div>
        <div class="ml-20 text-left text-white p-2 shadow-lg rounded-lg flex justify-center items-center bg-black/40">
            <img class="bg-gray-300" src="img/lenguajes/unity.png" alt="" width="128" height="128">
            <p class="ml-10">Unity</p>
        </div>
    </div>
</div>

<div class="mb-20 ml-20 text-left text-white">
    <h1 class="text-center text-sky-600 text-3xl">Portfolio</h1>
    <div class="grid grid-cols-2 gap-4">
        <div class="p-4">
            <p class="text-white">Tengo bastante experiencia ya que he realizado varios proyectos entre los que se incluyen:</p>
            <ul class="list-disc ml-4 text-white">
                <li>Páginas web completas</li>
                <li>Videojuegos</li>
                <li>Aplicaciones hechas con Android Studio</li>
                
            </ul>
            <p class="text-white">Para saber más sobre estas aplicaciones o webs dale al botón descubrir.</p>
        </div>

        <div class="p-4">
            <div class="grid grid-cols-3 gap-4">
                <div class="p-2">
                    <img src="img/portfolio/artistapptienda.png" alt="" width="250">
                </div>
                <div class="p-2">
                    <img src="img/portfolio/artistapptienda2.png" alt="" width="250">
                </div>
                <div class="p-2">
                    <img src="img/portfolio/artistapptienda3.png" alt="" width="250">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div class="p-2">
                    <img src="img/portfolio/rememberme.png" alt="" width="250">
                </div>
                <div class="p-2">
                    <img src="img/portfolio/rememberme2.png" alt="" width="250">
                </div>
                <div class="p-2">
                    <img src="img/portfolio/vanerbtienda.png" alt="" width="250">
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="p-2">
                    <img src="img/portfolio/vanerbtienda3.png" alt="" width="250">
                </div>
                <div class="p-2">
                    <img src="img/portfolio/savegaming.png" alt="" width="250">
                </div>
                <div class="p-2">
                    <img src="img/portfolio/savegaming2.png" alt="" width="250">
                </div>
            </div>
        </div>
    </div>
    

</div>


<div class="mb-20">
    <h1 class="text-center text-sky-600 text-3xl mb-2">Contacto</h1>

<div>
    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('contact')  }}" method="POST">
        @csrf
    
        @include('contact.formfields')
       
        <div class="flex items-center justify-between mt-4">
           
    
            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Enviar</button>
    </form>
</div>
</div>


<div>
    
</div>



@endsection




