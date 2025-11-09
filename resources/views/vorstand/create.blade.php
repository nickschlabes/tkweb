@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-2xl">
    <h1 class="text-3xl font-bold mb-6">Neues Vorstandsmitglied</h1>

    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('vorstand.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-6">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name *</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-red-700" required>
        </div>

        <div class="mb-4">
            <label for="position" class="block text-gray-700 font-bold mb-2">Position *</label>
            <input type="text" name="position" id="position" value="{{ old('position') }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-red-700" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Beschreibung</label>
            <textarea name="description" id="description" rows="3" 
                      class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-red-700">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Bild</label>
            <input type="file" name="image" id="image" accept="image/*"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-red-700">
            <p class="text-sm text-gray-500 mt-1">Max. 2MB, Formate: JPG, PNG, GIF</p>
        </div>

        <div class="mb-4">
            <label for="order" class="block text-gray-700 font-bold mb-2">Reihenfolge *</label>
            <input type="number" name="order" id="order" value="{{ old('order', 1) }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-red-700" required>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-red-700 text-white px-6 py-2 rounded hover:bg-red-800">
                <i class="fas fa-save mr-2"></i>Speichern
            </button>
            <a href="{{ route('vorstand.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">
                Abbrechen
            </a>
        </div>
    </form>
</div>
@endsection
