@extends('dashboard.layouts.main')

@section('container')
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Edit Post</h1>
    </div>


        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
          
            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
              @method('put')
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="add title"  autofocus value="{{ old('title', $post->title)}}">
                    </div>
                    @error('title')
                    <div>   
                      <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium"> {{ $message }} </p>    
                    </div>
                      @enderror

                    <div class="sm:col-span-2">
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                        <input type="text" name="slug" id="slug"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 " placeholder="add slug" value="{{ old('slug', $post->slug) }}">
                    </div>
                    @error('slug')
                    <div>   
                      <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium"> {{ $message }} </p>    
                    </div>
                      @enderror

                   

                    <div class="sm:col-span-2">
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ( $categories as $category  )
                            @if (old('category_id',$post->category_id)==$category->id )
                            <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                            @endif
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    

                    <div class="sm:col-span-2">
                        <label for="body" class="block text-sm font-medium text-gray-700">Content</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>

                    </div>
                    @error('body')
                    <div>   
                      <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium"> {{ $message }} </p>    
                    </div>
                      @enderror
                  
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                  Update Post
                </button>
            </form>
        </div>
 
        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');
        
            title.addEventListener('change', function() {
                fetch('/dashboard/posts/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug);
            });

            document.addEventListener("trix-initialize", function(event) {
                const fileTools = event.target.toolbarElement.querySelector('[data-trix-button-group="file-tools"]');
                if (fileTools) {
                    fileTools.style.display = 'none';
                }
            });
        </script>
        

@endsection
