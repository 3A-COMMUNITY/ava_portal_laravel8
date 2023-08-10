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
  <style>
    @media (max-width: 650px) {

      /* Estilos para dispositivos com largura menor que 768px */
      .w-perso {
        width: 280px !important;
      }

      #bghero {
        background-size: 350% !important;
        background: linear-gradient(rgba(0, 0, 0, 0.521), #5c1068),
        url("{{ asset(' site/images/111.jpeg') }}");
        background-position: top !important;
        background-repeat: no-repeat;
      }
    }
  </style>
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

<!-- flex flex-col xl:flex-row h-screen -->
<main class="">



  <div class="w-full">
    <div class="">
      <div class="" style="">
        <div id="bghero" class=" w-full sm:rounded-bl-[200px]  py-44 -mt-5 sm:w-[100%] bg-center text-white  px-10" style="background:  linear-gradient( rgba(0, 0, 0, 0.521),#5c1068), url('{{ asset('site/images/111.jpeg') }}');background-size: 105%; background-position: top !important; ">

          <div data-aos-duration="1000" data-aos="fade-up" class="flex-col flex items-center justify-center ">
            <h1 class="text-4xl text-center md:w-4/6 md:text-7xl tracking-tight leading-none font-extrabold text-[#fff]">Luta contra o preconceito e a auto-aceitação</h1>`

            <p class="text- text-center md:w-3/6 text-white text-opacity-75 mt-2">Um sorriso de esperança, a recuperação da auto-estima e da autoconfiança. Um processo doloroso, difícil mas necessário *"<span>AUTO-ACEITAÇÃO</span>" é o segredo</p>

            <div class="flex flex-col md:flex-row gap-x-5 mt-5">
              <a href="#sobre" class="inline-block w-perso text-center bg-[#fff]  font-semibold hover:bg-opacity-80 mt-3 px-14 sm:px-40 md:px-16 py-3 rounded-md text-black">Saber mais</a>
              <a href="{{ route('register') }}" class="inline-block w-perso text-center bg-[#C25ED2]  font-semibold hover:bg-opacity-80 mt-3 px-14 sm:px-40 md:px-16 py-3 rounded-md text-white">Se inscrever</a>

            </div>
          </div>

        </div> <!-- container -->
        <br>
      </div>




    </div>

  </div>


  <section id="sobre" data-aos="fade-up" data-aos-duration="1000" class="pt-32 pb-20 px-5 md:px-24">

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
        <h1 class="tracking-tight text- font-extrabold text-[#C25ED2] text-4xl md:text-5xl uppercase">Sobre nós</h1>
          <p class="text-lg text-black text-opacity-75 mt-2">Associação dos Vitilindos de Angola é uma organização sem fins lucrativos, com vocação e inspiração no propósito de apoiar todos os membros e não só a encontrarem apoio incondicional dentro daquilo que são as nossas limitações.</p>
          <div class="flex gap-x-4 flex-col gap-y-4 md:flex- mt-10">
            <span href="" class="text-start font-medium text-[#C25ED2] text-sm">Missão</span>

            <div class=" py-4 rounded-xl px-8 text-center transition-all text-base bg-white">Promover a consciencialização das pessoas sobre a doença </div>
            <div class=" py-4 rounded-xl px-8 text-center transition-all text-base bg-white">Apoiar todos os portadores de vitiligo e seus familiares directos no sentido de encontrarem o apoio necessário para o tratamento da doença. </div>
            <div class=" py-4 rounded-xl px-8 text-center transition-all text-base bg-white">Formar jovens e adultos para que partilhem competências e capacidades infomrativas sobre a doença. </div>
          </div>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-8">
        <img class="w-full rounded-lg" src="{{ asset('site/images/hand.jpg') }}" alt="office content 1">
        <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('site/images/looking.jpg') }}" alt="office content 2">
      </div>
    </div>

  </section>





  <div class="px-5 md:px-0">

    <div class="main">
      <div class="container">
        <div class="card">
          <div class="card-image">
            <a href="{{ asset('site/images/hero.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
              <img class="hvr-float " src="{{ asset('site/images/hero.jpg') }}" alt="Image Gallery">
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="{{ asset('site/images/gallery(8).jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
              <img class="hvr-float" src="{{ asset('site/images/gallery(8).jpg') }}" alt="Image Gallery">
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="{{ asset('site/images/about.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
              <img class="hvr-float" src="{{ asset('site/images/about.jpg') }}" alt="Image Gallery">
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="{{ asset('site/images/gallery(6).jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
              <img class="hvr-float" src="{{ asset('site/images/gallery(6).jpg') }}" alt="Image Gallery">
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="{{ asset('site/images/new3.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
              <img class="hvr-float" src="{{ asset('site/images/new3.jpg') }}" alt="Image Gallery">
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <a href="{{ asset('site/images/gallery(4).jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
              <img class="hvr-float" src="{{ asset('site/images/gallery(4).jpg') }}" alt="Image Gallery">
            </a>
          </div>
        </div>

      </div>
      <div class="flex my-5 justify-center">
        <a href="" class="border rounded-full py-2 px-8 mt-10 text-sm text-center">Ver todos</a>

      </div>
    </div>
  </div>




  <section id="post">

    <div class=" md:rounded-tr-[200px] bg-[darkmagenta] mt-32 md:px-10 px-5 pb-20 pt-32">
      <h1 class="tracking-tight text- font-extrabold text-white text-4xl md:text-5xl uppercase">Atividades em destaque</h3>
        <p class="text-lg text-white md:w-3/6 text-opacity-75 mt-2">Associação dos Vitilindos de Angola é uma organização sem fins lucrativos, com vocação e inspiração.</p>


        <div class="carousel-container mt-10">
          <div class="carousel-inner">
            @foreach($posts as $post)
            <div class="carousel-item">
              <div class=" flex h-[450px] justify-end flex-col px-10 pb-10 text-white" style="background: linear-gradient(to top, black, transparent),url('/image/{{ $post->image }}'); background-size: cover; border-radius: 15px !important;">
                <h2 class="text-3xl font-bold">TEMA: {{ $post->title }}</h2>
                <p class="text-white"> {!! Str::limit($post->description, 170, ' ...') !!}</p>
                <a href="{{ route('post.single',$post->id) }}" class="border rounded-full py-2 px-8 text-sm text-center w-32 mt-5">Ver mais</a>
              </div>

            </div>
            @endforeach
          </div>
          <div class="carousel-controls">
            <button id="prevButton" class="carousel-control text-sm opacity-50">Anterior</button>
            <button id="nextButton" class="carousel-control text-sm opacity-50">Próximo</button>
          </div>
        </div>



        <div class="flex my-5 justify-center">
          <a href="{{ route('posts.atividades') }}" class="border rounded-full py-2 px-8 mt-10 text-white text-sm text-center">Ver todos</a>

        </div>
    </div>

  </section>


<!-- Modal de doações -->

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
            <!-- Modal header -->
            <!-- <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div> -->
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-white">
                    Poderá fazer o seu donativo oferecendo medicação e protectores solares FPS 50+.
                </p>
                
                <p class="text-base leading-relaxed text-gray-500 dark:text-white">
                    Poderá fazer a sua doação em dinheiro. <br>
                    Banco BAI <br>
                    Conta: <b>197467655 10 001</b> <br>
                    Iban: <b>AO06 0040 0000 9746 7655 1015 0</b>
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Fim da modal de doações -->

  <section id="doar" data-aos="fade-up" data-aos-duration="1000">
    <div class="bg-white">
      <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative isolate overflow-hidden px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0" style="background:  linear-gradient( rgba(0, 0, 0, 0.671),#e7b9acaf), url('{{ asset('site/images/hero.jpg') }}');background-size: 108% !important; background-position: top !important;background-repeat:none;background-repeat: no-repeat; ">
          <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
            <defs>
              <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                <stop stop-color="#7775D6" />
                <stop offset="1" stop-color="#E935C1" />
              </radialGradient>
            </defs>
          </svg>
          <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-lseft">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Faça uma doação.<br>Contribua para o crescimento deste projeto.</h2>
            <p class="mt-6 text-lg leading-8 text-white">Todo o Trabalho e serviço que tem sido efectuados são "pro-bono" em benefício da sociedade e dos membros que solicitem.</p>

            <div class="flex flex-col md:flex-row gap-x-5 mt-5">
              <a href="#sobre" class="inline-block text-center bg-[#fff]  font-semibold hover:bg-opacity-80 mt-3 px-14 sm:px-32 md:px-16 py-3 rounded-md text-black">Saber mais</a>
              <!-- <a href="#" class="inline-block text-center bg-[#C25ED2]  font-semibold hover:bg-opacity-80 mt-3 px-14 sm:px-32 md:px-16 py-3 rounded-md text-white">Contribuir</a> -->


<!-- Modal toggle -->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="inline-block text-center bg-[#C25ED2]  font-semibold hover:bg-opacity-80 mt-3 px-14 sm:px-32 md:px-16 py-3 rounded-md text-white" type="button">
Contribuir
</button>




            </div>

          </div>
          <div class="relative mt-16 h-80 lg:mt-8">
            <img class="absolute left-0 top-0 w-[48rem] max-w-none rounded-md rounded-tl-[100px] bg-white/5 ring-1 ring-white/10" style="object-fit: contain;" src="{{ asset('site/images/unnamed (10).jpg') }}" alt="App screenshot" width="1824" height="1080">
          </div>
        </div>
      </div>
    </div>

  </section>


  <section data-aos="fade-up" data-aos-duration="1000" class="bg-white pt-20 dark:bg-gray-900">
    <div class="py-8 px-5 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <h1 class="tracking-tight mb-8 font-extrabold text-[#C25ED2] text-5xl uppercase">Perguntas Frequentes</h3>
        <div>
          <div class="flex mt-20">

            <!-- Component Start -->
            <div class="w-full  md:max-w-screen-xl dark:text-white">
              <button class="w-full focus:text-purple-700 border-b-2  border-gray-300 pb-6 text-left group focus:outline-none">
                <div class="md:text-lg  font-semibold asa">
                  <h3 class="flex items-center">
                    <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    O que é o Vitiligo?
                  </h3>
                </div>
                <div class="dark:text-white mt-3 hidden text-gray-700 group-focus:flex">
                  <p>O vitiligo é uma doença de pele crônica em que ocorre a perda da pigmentação,
                    resultando em manchas brancas ou descoloridas na pele.</p>
                </div>
              </button>
              <button class="w-full focus:text-purple-700 border-b-2 border-gray-300 pb-6 text-left group mt-6 focus:outline-none">
                <div class="md:text-lg font-semibold">
                  <h3 class="flex items-center">
                    <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    Existe cura para o vitiligo?
                  </h3>
                </div>
                <div class="dark:text-white mt-3 hidden text-gray-700 group-focus:flex">
                  <p>Atualmente, não há uma cura definitiva para o vitiligo, mas existem tratamentos
disponíveis para ajudar a controlar a doença.</p>
                </div>
              </button>
              <button class="w-full focus:text-purple-700 border-b-2 border-gray-300 pb-6 text-left group mt-6 focus:outline-none">
                <div class="md:text-lg font-semibold">
                  <h3 class="flex items-center">
                    <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    Quais são as causas do vitiligo?
                  </h3>
                </div>
                <div class="dark:text-white mt-3 hidden text-gray-700 group-focus:flex">
                  <p>As causas exatas do vitiligo não são totalmente compreendidas, mas acredita-se que
seja uma combinação de fatores genéticos, auto-imunes e ambientais.</p>
                </div>
              </button>
              <button class="w-full focus:text-purple-700 border-b-2 border-gray-300 pb-6 text-left group mt-6 focus:outline-none">
                <div class="md:text-lg font-semibold">
                  <h3 class="flex items-center">
                    <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    É possível prevenir o vitiligo?
                  </h3>
                </div>
                <div class="dark:text-white mt-3 hidden text-gray-700 group-focus:flex">
                  <p>Não há uma maneira comprovada de prevenir o vitiligo, uma vez que suas causas não
são totalmente conhecidas. No entanto, medidas como evitar lesões na pele e proteger-
se do sol podem ajudar a reduzir o risco de desenvolver a doença.</p>
                </div>
              </button>
              <button class="w-full focus:text-purple-700 border-b-2 border-gray-300 pb-6 text-left group mt-6 focus:outline-none">
                <div class="md:text-lg font-semibold">
                  <h3 class="flex items-center">
                    <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    O vitiligo pode ser confundido com outras doenças de pele?
                  </h3>
                </div>
                <div class="dark:text-white mt-3 hidden text-gray-700 group-focus:flex">
                  <p>O vitiligo pode ser confundido com outras condições de pele que causam
despigmentação, como a pitiríase versicolor, a micose branca, entre outras. Um
diagnóstico preciso deve ser feito por um dermatologista.</p>
                </div>
              </button>
            </div>
            <!-- Component End  -->

          </div>


        </div>
    </div>
  </section>



  <section id="contactos" data-aos="fade-up" data-aos-duration="1000" class="bg-white py-20">
    <!-- Container for demo purpose -->
    <div class="container mb-24 mt-14 mx-auto md:px-6">
      <!-- Section: Design Block -->
      <h1 class="tracking-tight mb-8 px-5 font-extrabold text-[#C25ED2] text-4xl md:text-5xl uppercase">Contacte-nos</h3>

      @include('sweetalert::alert')
      
        <section class="mb-32">
          <div class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat bg-[url('')]" style="background: url('{{ asset('site/images/about.jpg') }}'); background-size: cover; background-position: center;"></div>
          <div class="container px-6 md:px-12">
            <div class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]">
              <div class="flex flex-wrap">
                <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                <form action="{{route('contact-email')}}"  method="post" role="form">
  @csrf
                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <label class="pointer-events-none text-sm top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput90">Nome
                      </label> <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none " id="exampleInput90" placeholder="Nome..."  name="name" required/>

                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <label class="pointer-events-none text-sm top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput91">Email
                      </label><input type="email" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none " id="exampleInput91" placeholder="Ex.: email@exemplo.com"  name="email" required/>

                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <label class="pointer-events-none text-sm top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput92">Assunto
                      </label><input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none " id="exampleInput92" placeholder="Ex.: email@exemplo.com" name="subject" required/>

                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <label for="exampleFormControlTextarea1" class="pointer-events-none text-sm top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Mensagem</label>
                      <textarea class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none " id="exampleFormControlTextarea1" rows="3" placeholder="Sua mensagem"  name="message" required></textarea>
                    </div>

                    <button type="submit" class="inline-block text-center bg-[#C25ED2] hover:bg-opacity-80 mt-3 w-full py-3 rounded-md text-white">Enviar</button>

                  </form>
                </div>
                <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                  <div class="flex flex-wrap">
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                      <div class="flex flex-col md:flex-row items-start">
                        <div class="shrink-0">
                          <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-7 w-7">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                            </svg>
                          </div>
                        </div>
                        <div class="ml-6 grow">
                          <p class="mb-2 font-bold dark:text-white">
                            Telefone e email
                          </p>
                          <p class="text-neutral-500 dark:text-neutral-200">
                          associacaodosvitilindos-angola@gmail.com
                          </p>
                          <p class="text-neutral-500 dark:text-neutral-200">
                          +244 947 977 251 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                      <div class="flex items-start flex-col md:flex-row">
                        <div class="shrink-0">
                          <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">

                            <img src="{{ asset('site/images/redes-sociais.png') }}" class="h-10 w-10" alt="">
                          </div>
                        </div>
                        <div class="ml-6 grow">
                          <p class="mb-2 font-bold dark:text-white">
                            Redes sociais
                          </p>
                          <a href="https://instagram.com/associacao_vitiligo?igshid=NTc4MTIwNjQ2YQ=="> associacao_vitiligo </a>  
                          <p class="text-neutral-500 dark:text-neutral-200">
                          +244 997 230 647
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="w-full shrink-0 grow-0 basis-auto md:px-3 lg:w-full lg:px-6 xl:mb-12">
                      <div class="align-start flex">
                        <div class="block w-full shrink-0 grow-0 basis-auto ">
                          <div class="h-[300px] w-full">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15770.729273839614!2d13.2297998!3d-8.8158854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f2522f49dc0b%3A0x1e6469bda5ac2983!2sUniversidade%20Lus%C3%ADada%20de%20Angola!5e0!3m2!1spt-PT!2sao!4v1683016092116!5m2!1spt-PT!2sao" class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->
  </section>
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

 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

  <script>
    // Others

    document.addEventListener('DOMContentLoaded', function() {
      const burger = document.querySelectorAll('.navbar-burger');
      const menu = document.querySelectorAll('.navbar-menu');

      if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }

      // close
      const close = document.querySelectorAll('.navbar-close');
      const backdrop = document.querySelectorAll('.navbar-backdrop');

      if (close.length) {
        for (var i = 0; i < close.length; i++) {
          close[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }

      if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }
    });




    var cont = 0;

    function loopSlider() {
      var xx = setInterval(function() {
        switch (cont) {
          case 0: {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            cont = 1;

            break;
          }
          case 1: {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");

            cont = 0;

            break;
          }


        }
      }, 8000);

    }

    function reinitLoop(time) {
      clearInterval(xx);
      setTimeout(loopSlider(), time);
    }



    function sliderButton1() {

      $("#slider-2").fadeOut(400);
      $("#slider-1").delay(400).fadeIn(400);
      $("#sButton2").removeClass("bg-purple-800");
      $("#sButton1").addClass("bg-purple-800");
      reinitLoop(4000);
      cont = 0

    }

    function sliderButton2() {
      $("#slider-1").fadeOut(400);
      $("#slider-2").delay(400).fadeIn(400);
      $("#sButton1").removeClass("bg-purple-800");
      $("#sButton2").addClass("bg-purple-800");
      reinitLoop(4000);
      cont = 1

    }

    $(window).ready(function() {
      $("#slider-2").hide();
      $("#sButton1").addClass("bg-purple-800");


      loopSlider();






    });



    // Fancybox Configuration
    $('[data-fancybox="gallery"]').fancybox({
      buttons: [
        "slideShow",
        "thumbs",
        "zoom",
        "fullScreen",
        "share",
        "close"
      ],
      loop: false,
      protect: true
    });
  </script>

  <!-- <script src="js/swiper.min.js"></script> -->
  <script src="{{ asset('site') }}/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      // mousewheel: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>



  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    const carouselContainer = document.querySelector('.carousel-container');
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentIndex = 0;
    let slideWidth = 50; // Largura dos slides em porcentagem (50% para dois slides)

    function updateCarousel() {
      carouselInner.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
    }

    function nextSlide() {
      currentIndex++;
      if (currentIndex >= carouselItems.length) {
        currentIndex = 0;
      }
      updateCarousel();
    }

    function prevSlide() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = carouselItems.length - 1;
      }
      updateCarousel();
    }

    let intervalId = setInterval(nextSlide, 3000);

    carouselContainer.addEventListener('mouseenter', () => {
      clearInterval(intervalId);
    });

    carouselContainer.addEventListener('mouseleave', () => {
      intervalId = setInterval(nextSlide, 3000);
    });

    function adjustCarousel() {
      if (window.innerWidth < 768) { // Menor que 768px (tamanho mobile)
        slideWidth = 100; // Define a largura dos slides para 100% (um slide por vez)
      } else {
        slideWidth = 50; // Define a largura dos slides para 50% (dois slides por vez)
      }
      updateCarousel();
    }

    window.addEventListener('resize', adjustCarousel);

    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);
  </script>


  <!-- #C25ED2 -->
  </body>

</html>