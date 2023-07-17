<nav
    class="w-screen overflow-hidden bg-white border-b dark:bg-black/40 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
    
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center flex-shrink-0">
                    <a href="#">
                        <img src="img/logocabecera.png" alt="" width="36px" height="36px">
                    </a>
                </div>
                <div class="mx-auto">
                    <div class="flex space-x-4">
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('home')  }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('home') ? 'text-sky-600' : 'text-slate-400' }}">
                            Inicio
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('posts.index') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('posts.index') ? 'text-sky-600' : 'text-slate-400' }}">
                            Blog
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('about')  }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('about') ? 'text-sky-600' : 'text-slate-400' }}">
                            Sobre mi
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('contact')  }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('contact') ? 'text-sky-600' : 'text-slate-400' }}">
                            Contacto
                        </a>
                    </div>
                </div>

                <div class="ml-auto">
                        <div class="flex space-x-4">
                            @guest
                                <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                            <a href="{{ route('register')  }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('register') ? 'text-sky-600' : 'text-slate-400' }}">
                            Registrarse
                        </a>

                        <a href="{{ route('login')  }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('login') ? 'text-sky-600' : 'text-slate-400' }}">
                            Entrar
                        </a>
                            @else
                            <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('logout') ? 'text-sky-600' : 'text-slate-400' }}">Cerrar sesión</button>
                            
                        </form>
                            @endguest
                            
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>
</nav> 