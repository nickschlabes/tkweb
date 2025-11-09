@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Vorstand Verwaltung</h1>
        <a href="{{ route('vorstand.create') }}" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-800">
            <i class="fas fa-plus mr-2"></i>Neues Mitglied
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reihenfolge</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Beschreibung</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktionen</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($vorstandMembers as $member)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $member->order }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $member->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $member->position }}</td>
                    <td class="px-6 py-4">{{ Str::limit($member->description, 50) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <a href="{{ route('vorstand.edit', $member) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                            <i class="fas fa-edit"></i> Bearbeiten
                        </a>
                        <form action="{{ route('vorstand.destroy', $member) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Wirklich löschen?')">
                                <i class="fas fa-trash"></i> Löschen
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        Keine Vorstandsmitglieder vorhanden.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="{{ route('home') }}" class="text-red-700 hover:underline">
            <i class="fas fa-arrow-left mr-2"></i>Zurück zur Startseite
        </a>
    </div>
</div>
@endsection
