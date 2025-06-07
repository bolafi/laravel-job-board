<x-layout :title="$pageTitle">
    <h2>Tags</h2>
    @foreach ($tags as $tag)
        <p class="text-sm-600">{{ $tag->id }}</p>
        <h1 class="text-2xl">{{ $tag->title }}</h1>
    @endforeach

</x-layout>