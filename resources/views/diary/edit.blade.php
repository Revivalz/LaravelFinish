<x-layout>
    <x-slot:title>Rediģēt dienasgrāmatu</x-slot:title>

    <h1>Rediģēt dienasgrāmatu</h1>

    <form method="POST" action="/diaries/{{ $diary->id }}">
        @csrf
        @method('PUT')

        <div>
            <label>Virsraksts</label>
            <input type="text" name="title" value="{{ old('title', $diary->title) }}">
            @error('title')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label>Saturs</label>
            <textarea name="body">{{ old('body', $diary->body) }}</textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label>Datums</label>
            <input type="date" name="date" value="{{ old('date', $diary->date) }}">
            @error('date')
                {{ $message }}
            @enderror
        </div>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
