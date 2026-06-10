
<x-layout>
    <x-slot:title>
        {{ $country->name }}
    </x-slot:title>
    <h1>{{ $country->name }}</h1>

    <p><strong>Platība:</strong> {{ $country->area_km2 }} km²</p>
    <p><strong>Iedzīvotāju skaits:</strong> {{ $country->population }}</p>

    <h2>Pilsētas</h2>
    @if ($country->cities->count() > 0)
        <ul>
            @foreach ($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Šajā valstī nav pilsētu.</p>
    @endif

    <p><a href="/countries/{{ $country->id }}/edit">Rediģēt šo ierakstu</a></p>

    <form method="POST" action="/countries/{{ $country->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Dzēst šo valsti</button>
    </form>
</x-layout>
