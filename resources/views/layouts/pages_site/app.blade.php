<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associação Vitiligo de Angola AVA</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <!-- <link rel="stylesheet" href="./css/hover.css"> -->
  <link rel="stylesheet" href="{{ asset('site') }}/css/hover.css">
  <link rel="stylesheet" href="{{ asset('site') }}/css/swiper.min.css">
  <!-- <link rel="stylesheet" href="css/swiper.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="{{ asset('site') }}/css/style.css">

  <link rel="icon" type="image/png" href="{{ asset('paper') }}/img/logo.png">
  @stack('style')
</head>


<body>

  <header class=" w-full bg-white z-50">

    <nav class="bg-white shadow-lg border-gray-200 dark:bg-gray-900">
      <nav class="relative px-5 md:px-24 pt-4 pb-2 border-b flex justify-between items-center bg-white">
        <a class="text-3xl font-bold leading-none" href="{{ route('site') }}">
          <img class="h-16" src="{{ asset('paper') }}/img/logo.png" alt="LOGO">
        </a>
        <div class="lg:hidden">
          <button class="navbar-burger flex items-center text-[#C25ED2] p-3">
            <svg class="block h-8 w-8 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </button>
        </div>
        <ul class="hidden absolute top-1/2 pt-1.5 left-1/2 items-center transform -translate-y-1/2 -translate-x-1/2 lg:flex gap-x-5 lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
          <li><a class="text-sm text-opacity-60 text-black font-extrabold hover:text-[#C25ED2]" href="{{ route('site') }}">Pagina inicial</a></li>
          <li><a class="text-sm text-opacity-60 text-black font-extrabold hover:text-[#C25ED2]" href="{{ route('site') }}#sobre">Sobre</a></li>

          <li class="">
            <div class="group relative cursor-pointer py-2">
              <div class="flex items-center justify-between bg-white px-4">
                <a class="menu-hover text-sm my-2 py-2 font-medium text-black lg:mx-4" onClick="">
                  Nossos posts
                </a>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </div>
              <div class="invisible text-sm absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible" onClick="">
                <a href="{{ route('posts.atividades') }}" class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">Atividades</a>
                <a href="{{ route('posts.dicas') }}" class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">Dicas
                </a>
              </div>
            </div>
          </li>



          <li><a class="text-sm text-opacity-60 text-black font-extrabold hover:text-[#C25ED2]" href="{{ route('site') }}#doar">Doação</a>
          </li>





          <li><a class="text-sm text-opacity-60 text-black font-extrabold hover:text-[#C25ED2]" href="{{ route('site') }}#contactos">Contactos</a>
          </li>
        </ul>
        @if (Auth::check())
        <a class="hidden text-sm lg:inline-block lg:ml-auto font-extrabold text-opacity-60 text-black hover:text-[#C25ED2] lg:mr-3 py-2 px-6" href="{{ route('home') }}">{{Auth::user()->name}}</a>
        @else
        <a class="hidden text-sm lg:inline-block lg:ml-auto font-extrabold text-opacity-60 text-black hover:text-[#C25ED2] lg:mr-3 py-2 px-6" href="{{ route('login') }}">Entrar</a>

        <a href="{{ route('register') }}" class="px-5 py-2 text-[11.6pt] rounded-md bg-[#C25ED2] text-white lg:block hidden ">Cadastrar-se</a>
        @endif
      </nav>
      <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
          <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
              <img class="h-16" src="{{ asset('paper') }}/img/logo.png" alt="">
            </a>
            <button class="navbar-close">
              <svg class="h-16 w-16 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div>
            <ul class="">
              <li class="mb-1">
                <a class="block p-4 text-sm font-extrabold text-gray-400 hover:bg-green-50 hover:text-[#C25ED2] " href="{{ route('site') }}">Pagina Inicial</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-extrabold text-gray-400 hover:bg-green-50 hover:text-[#C25ED2] " href="{{ route('site') }}#sobre">Sobre</a>
              </li>

              <li class="mb-1">
                <div class="group relative cursor-pointer py-2">
                  <div class="flex items-center justify-between bg-white px-4">
                    <a class="menu-hover text-sm my-2 py-2 font-medium text-black lg:mx-4" onClick="">
                      Nossos posts
                    </a>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </span>
                  </div>
                  <div class="invisible text-sm absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible" onClick="">
                    <a href="{{ route('posts.atividades') }}" class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">Atividades</a>
                    <a href="{{ route('posts.dicas') }}" class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">Dicas
                    </a>
                  </div>
                </div>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-extrabold text-gray-400 hover:bg-green-50 hover:text-[#C25ED2] " href="#{{ route('site') }}doar">Doação</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-sm font-extrabold text-gray-400 hover:bg-green-50 hover:text-[#C25ED2] " href="{{ route('site') }}#contactos">Contactos</a>
              </li>
            </ul>
          </div>
          <div class="mt-auto">
            <div class="pt-6">
            @if (Auth::check())
            <a class="block px-4 py-3 mb-3 text-sm text-center leading-none bg-gray-50 hover:bg-gray-100 rounde-md" href="{{ route('home') }}">{{Auth::user()->name}}</a>
        @else
              <a class="block px-4 py-3 mb-3 text-sm text-center leading-none bg-gray-50 hover:bg-gray-100 rounde-md" href="{{ route('login') }}">Entrar</a>
              <a class="block px-4 py-3 mb-2 leading-loose text-sm text-center text-white rounded-md bg-[#C25ED2]  " href="{{ route('register') }}">Cadastrar-se</a>
              @endif
            </div>
          </div>
        </nav>
      </div>
    </nav>

  </header>

  @yield('content')



  <footer class="p-4 bg-purple-200 md:p-8 lg:p-10 md:rounded-t-[100px] dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
      <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
        <img src="{{ asset('paper') }}/img/logo.png" class="h-12 w-20 bg-slate-100 rounded-full" alt="logo">
        AVA
      </a>
      <div class="flex justify-center">
        <p class="my-6 md:w-3/6 text-gray-500 dark:text-gray-400">Associação dos Vitilindos de Angola é uma organização sem fins lucrativos, com vocação e inspiração no propósito de apoiar todos os membros e não só a encontrarem apoio incondicional dentro daquilo que são as nossas limitações.</p>
      </div>
      <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
        <li>
          <a href="{{ route('site') }}#sobre" class="mr-4 hover:underline md:mr-6 ">Sobre</a>
        </li>
        <li>
        <a href="{{ route('posts.atividades')}}" class="mr-4 hover:underline md:mr-6 ">Nossos posts</a>

        </li>
        <li>
          <a href="{{ route('site') }}#doar" class="mr-4 hover:underline md:mr-6 ">Doação</a>
        </li>
        <li>
          <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
        </li>
        <li>
          <a href="{{ route('site') }}#contactos" class="mr-4 hover:underline md:mr-6">Contactos</a>
        </li>
      </ul>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">AVA</a>. Todos os direitos reservados.</span>
    </div>
  </footer>
  </main>

  @stack('scripts')
</body>

</html>