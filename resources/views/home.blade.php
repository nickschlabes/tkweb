@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="bg-red-700 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4">Willkommen bei Tamourkorps Blumenkamp</h1>
        <p class="text-xl">Tradition, Musik und Gemeinschaft</p>
    </div>
</section>

<!-- About Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Über uns</h2>
            <p class="text-lg text-gray-700 mb-4">
                Das Tamourkorps Blumenkamp ist ein traditionsreicher Verein, der Musik und Gemeinschaft vereint.
                Wir pflegen die musikalische Tradition und bringen Menschen zusammen.
            </p>
        </div>
    </div>
</section>

<!-- Vorstand Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Unser Vorstand</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            @forelse($vorstandMembers as $member)
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                @if($member->image)
                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                @else
                    <div class="w-32 h-32 rounded-full mx-auto mb-4 bg-red-200 flex items-center justify-center">
                        <i class="fas fa-user text-4xl text-red-700"></i>
                    </div>
                @endif
                <h3 class="text-xl font-bold mb-2">{{ $member->position }}</h3>
                <p class="text-gray-600 mb-2">{{ $member->name }}</p>
                @if($member->description)
                    <p class="text-sm text-gray-500">{{ $member->description }}</p>
                @endif
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500">
                <p>Keine Vorstandsmitglieder vorhanden.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Instagram Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Folgen Sie uns auf Instagram</h2>
        <div class="max-w-4xl mx-auto">
            <div class="bg-gray-50 rounded-lg p-8 text-center">
                <i class="fab fa-instagram text-6xl text-pink-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-4">@tamourkorps_blumenkamp</h3>
                <p class="text-gray-600 mb-6">
                    Bleiben Sie auf dem Laufenden mit unseren neuesten Aktivitäten, Veranstaltungen und Bildern!
                </p>
                <a href="https://www.instagram.com/tamourkorps_blumenkamp" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="inline-block bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white px-8 py-3 rounded-full hover:shadow-lg transition duration-300">
                    Auf Instagram folgen
                </a>
            </div>
            
            <!-- Instagram Feed Placeholder -->
            <div class="mt-8">
                <div class="text-center text-gray-600 mb-4">
                    <p class="text-sm">Aktuelle Beiträge</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- Placeholder for Instagram posts -->
                    <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                    </div>
                </div>
                <p class="text-center text-sm text-gray-500 mt-4">
                    Hinweis: Für die Integration echter Instagram-Posts benötigen Sie einen Instagram API-Zugang.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Kontakt</h2>
        <div class="max-w-2xl mx-auto text-center">
            <p class="text-lg text-gray-700 mb-4">
                Haben Sie Fragen oder möchten Sie mehr über uns erfahren?
            </p>
            <p class="text-lg text-gray-700">
                <i class="fas fa-envelope mr-2"></i>
                <a href="mailto:info@tamourkorps-blumenkamp.de" class="text-red-700 hover:underline">
                    info@tamourkorps-blumenkamp.de
                </a>
            </p>
        </div>
    </div>
</section>
@endsection
