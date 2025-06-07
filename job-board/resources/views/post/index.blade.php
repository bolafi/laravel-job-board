<x-layout :title="$pageTitle">
    <h2>Blog</h2>
    @foreach ($posts as $post)
        <p class="text-sm-300">{{ $post->id }}</p>
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <div class="flex w-full flex-col">
            <div class="divider divider-info"></div>
        </div>

    @endforeach
    {{ $posts->links() }}
</x-layout>