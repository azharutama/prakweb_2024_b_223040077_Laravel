@extends('dashboard.layouts.main')

@section('container')
 
        
     
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <div class="flex items-center gap-x-4">
              <!-- Back Button -->
              <a href="/dashboard/posts/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline inline-flex items-center">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                  </svg>
              </a>
          
              <!-- Edit Button -->
            
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline inline-flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                  </svg>
                  
            </a>
          
              <!-- Delete Button -->
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline-block">
                  @method('delete')
                  @csrf
                  <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline inline-flex items-center" onclick="return confirm('Are you sure?')">
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                      </svg>
                  </button>
              </form>
          </div>
          

              <address class="flex items-center mb-6 my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/posts?author={{ $post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                          <p class="text-base  text-gray-500 dark:text-gray-400 pb-3">{{ $post->created_at->diffForHumans()}}</p>
                          <a href="/posts?category={{ $post->category->slug }}">
                            <span class="bg-{{$post->category->color}}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                  <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                  {{ $post->category->name}}
                              </span>
                            </a>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>

      @if ($post->image)
      <figure class="max-w-lg">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
      </figure>

            @else
            <figure class="max-w-lg">
              <img class="h-auto max-w-full rounded-lg" src="https://images.unsplash.com/photo-1719937050679-c3a2c9c67b0f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxfHx8ZW58MHx8fHx8" alt="{{ $post->category->name }}">
            </figure>
          @endif
                
         

              <p>{{ strip_tags($post->body)}}</p>
          </article>
      </div>
    </main>

@endsection
