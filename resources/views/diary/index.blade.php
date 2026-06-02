
<x-layout>
    <h1>Vis Pierakstītais</h1>

    <ul>
     @foreach ($diaries as $diary)
        <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
    @endforeach
    </ul>
</x-layout>
 