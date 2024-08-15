<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        

                  <header class="bg-white h-16 w-full shadow flex justify-between items-stretch px-3">
<a href="#" class="text-indigo-600 font-bold items-center flex">Logo</a>
<div class="flex">
<div class="hidden sm:flex items-stretch">

</div>
<div class="flex items-center">
     @if (Route::has('login'))
      @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                      @else
    <a href="{{ route('login') }}"
        class="text-black py-1 px-3 transition-colors hover:text-indigo-500 hover:bg-indigo-100 rounded mx-3">Log in</a>
         @if (Route::has('register'))
    <a href="{{ route('register') }}"
        class="bg-indigo-600 text-white py-1 px-3 transition-colors rounded hover:bg-indigo-700 ring-offset-1 focus:ring-1 focus:bg-indigo-700">Register</a>
          @endif
                                @endauth
                           
                        @endif
</div>
<div class="sm:hidden h-full flex items-center ml-4">
<button class="flex items-center justify-center h-8 w-8 hover:bg-indigo-100 hover:text-indigo-600 transition-colors rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    class="size-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
</svg>
</button>
</div>
</div>

    </header>

                   
                </div>
            </div>
        </div>
    </body>
</html>
