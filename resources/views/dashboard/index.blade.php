
@extends('dashboard.layouts.main');
@section('container')
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold tracking-tight text-gray-900">Hallo {{ auth()->user()->name }}</h1>
</div>

<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
  <div class="grid grid-cols-3 gap-4 mb-4">
   
     <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
           <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
           </svg>
        </p>

        
     </div>

  </div>
</div>

@endsection