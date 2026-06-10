<x-layout>
    <x-slot:title>Izveidot valsti</x-slot:title>
    <h1>Izveidot valsti</h1>
        
<form method="POST" action="/countries">
    @csrf

    <label for="name">Valsts nosaukums</label>
    <input name="name">
    @error("name")
    <p>{{ $message }}</p>
    @enderror

    <label for="area_km2">Platība (km2)</label>
    <input name="area_km2" type="number" step="0.01">
    @error("area_km2")
    <p>{{ $message }}</p>
    @enderror
    
    <label for="population">Iedzīvotāju skaits</label>
    <input name="population" type="number">
    @error("population")
    <p>{{ $message }}</p>
    @enderror

    <button type="submit">Saglabāt</button>
</form>
    
</x-layout>
