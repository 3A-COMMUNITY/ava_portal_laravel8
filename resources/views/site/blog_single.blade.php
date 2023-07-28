@extends('layouts.pages_site.app', [
    'elementActive' => 'index'
])

@section('content')

<!-- #C25ED2 -->
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
              
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
            </header>
            <span href="" class="text-start font-medium text-[#C25ED2] text-sm">{{$post->postCategory->name}}</span>

            <p>{{$post->created_at->format('d M Y')}}</p>
         
            <figure class="mt-5"><img src="/image/{{$post->image}}" alt="">
            </figure>

         
            {!!$post->description!!}
         
        </article>
    </div>
  </main>
  
  <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Outros posts</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($posts as $post)
            <article class="max-w-xs">
                <a href="{{ route('post.single',$post->id) }}">
                    <img src="/image/{{ $post->image }}" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">{{ $post->title }}</a>
                </h2>
                <p class="mb-4 font-light text-gray-500 dark:text-gray-400">{!! Str::limit($post->description, 160, ' ...') !!}</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                {{$post->created_at->format('d M Y')}}
                </a>
            </article>
            @endforeach
        </div>
    </div>
  </aside>
    
  @endsection

@push('scripts')



      
<script>

document.addEventListener('DOMContentLoaded', function () {
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function () {
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
                    close[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });



</script>
@endpush
