@extends('layouts.admin')

@section('main')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-200">
                Actualizar Categoría
            </h2>
            <form action="{{ route('admin.store.categories.update', $category->id) }}" method="POST"
                class="flex flex-col gap-4 px-4 py-3 mb-8 rounded-lg shadow-md bg-gray-800">
                @csrf
                @method('PUT')
                <div class="block text-sm">
                    <label name="name" class="text-gray-400">Nombre</label>
                    <input name="name" type="text"
                        class="block w-full mt-1 text-sm border-gray-600 bg-gray-700 focus:border-grape-400 focus:outline-none focus:shadow-outline-grape text-gray-300" 
                        value="{{ $category->name }}" placeholder="Ingresa un nombre" />
                </div>
                <button type="submit"
                    class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Actualizar Categoría
                </button>
            </form>
        </div>
    </main>
@endsection
