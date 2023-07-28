@extends('layouts.pages_site.app', [
    'elementActive' => 'index'
])

@section('content')



  <!-- #C25ED2 -->
  

  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
    <section class="dark:bg-gray-800 dark:text-gray-100">
      <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
      <h3 class="tracking-tight text- font-extrabold text-[#C25ED2] text-3xl md:text-4xl uppercase">Informações e conteúdos</h3>
        <a rel="noopener noreferrer" href="{{ route('post.single',$last_posts->id) }}" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
          <img src="/image/{{ $last_posts->image }}" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">

          <div class="p-6 space-y-2 lg:col-span-5">
            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">{{ $last_posts->title }}</h3>
            <!-- <span class="text-xs dark:text-gray-400">{{$last_posts->created_at->format('d/m/Y')}}</span> -->
            <span href="" class="text-start font-medium text-[#C25ED2] text-sm">{{$last_posts->postCategory->name}}</span>
            <p>{!! Str::limit($last_posts->description, 300, ' ...') !!}</p>
          </div>
        </a>
        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $post)

          <a rel="noopener noreferrer" href="{{ route('post.single',$post->id) }}" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="/image/{{ $post->image }}">

            <div class="p-6 space-y-2">

              <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{ $post->title }}</h3>
              <span class="text-xs dark:text-gray-400">{{$post->created_at->format('d M Y')}}</span>
              <p>{!! Str::limit($post->description, 160, ' ...') !!}</p>
            </div>
          </a>
          @endforeach
        </div>
        <div class="flex justify-center">
          <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">Carregar mais posts...</button>
        </div>
      </div>
    </section>

  </main>
  @endsection



  @push('scripts')
  <script>
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
  </script>
@endpush