<x-layout>
    <x-slot:title>Rediģēt uzdevumu</x-slot:title>

    <h1>Rediģēt uzdevumu</h1>

    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="content">Saturs</label>
            <textarea id="content" name="content">{{ old('content', $todo->content) }}</textarea>
                @error("content")
                <p>{{ $message }}</p>
                @enderror
        </div>

        <div>
            <label>
                Izpildīts:
                <input name="completed" type="hidden" value="0">
                <input name="completed" type="checkbox" value="1" {{ old('completed', $todo->completed) ? 'checked' : '' }}>
            </label>
            @error('completed')
                {{ $message }}
            @enderror
        </div>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
