<x-layout>
    <x-slot:title>Rediģēt {{ $country->name }}</x-slot:title>
    <h1>Rediģēt {{ $country->name }}</h1>
        
<form method="POST" action="/countries/{{ $country->id }}">
    @csrf
    @method("PUT")


    <div>
        <label for="name">Valsts nosaukums</label>
        <input name="name" value="{{ $country->name }}">
        @error("name")
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="area_km2">Platība (km2)</label>
        <input name="area_km2" type="number" step="0.01" value="{{ $country->area_km2 }}">
        @error("area_km2")
        <p>{{ $message }}</p>
        @enderror
    </div>


    <div>
        <label for="population">Iedzīvotāju skaits</label>
        <input name="population" type="number" value="{{ $country->population }}">
        @error("population")
        <p>{{ $message }}</p>
        @enderror
    </div>



    <button type="submit">Atjaunināt</button>
</form>
    
</x-layout>
