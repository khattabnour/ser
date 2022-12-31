<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


              <li class="nav-item">
                <a class="nav-link " aria-current="page" href={{ route('product.create') }}>create product</a>
              </li>


              <li class="nav-item">
                <a class="nav-link " aria-current="page"href={{ route('category.create') }}>create category</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " aria-current="page" href={{ route('editproduct') }}>edit product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href={{ route('indexcategory') }} >category</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>





</x-app-layout>
