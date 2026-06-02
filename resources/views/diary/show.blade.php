
<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>

    <x-slot:content>
    {{ $diary->body }}
  </x-slot:content>
  <p>{{ $diary->body }}</p>
  <p><a href="/diaries/{{ $diary->id }}/edit">Rediģēt šo ierakstu</a></p>

  <form method="POST" action="/diaries/{{ $diary->id }}">
    @csrf
    @method('DELETE')
    <button type="submit">Dzēst šo ierakstu</button>
  </form>
</x-layout>
