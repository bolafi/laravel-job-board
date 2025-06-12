<x-layout :title="$pageTitle">
    <h2>{{$tag->title}}</h2>

    <h3>Related Posts</h3>
    <ul>
        @forelse($tag->posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>{{ $post->body }}</p>
                <p>Author:{{ $post->author }}</p>
                <a href="{{ route('blog.show', $post->id) }}">View Full Post</a>
            </li>
        @empty
            <p>No Posts are assocaiated with this tag</p>
        @endforelse
    </ul>
</x-layout>