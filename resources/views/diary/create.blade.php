<x-layout>
    <x-slot:title>Izveidot ierakstu</x-slot:title>
    <h1>Izveidot ierakstu</h1>

    <form method="POST" action="/diaries">
        @csrf

        <label for="title">Virsraksts</label>
        <input name="title" type="text">
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <label for="body">Saturs</label>
        <textarea name="body"></textarea>
        @error('body')
            <p>{{ $message }}</p>
        @enderror

        <label for="date">Datums</label>
        <input name="date" type="date">
        @error('date')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Saglabāt</button>
    </form>

</x-layout>