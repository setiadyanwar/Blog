<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    
    @foreach ( $posts as $post )
    <article class="py-8 max-w-screen-md border-b border-grey-300">
        <a href="/posts/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author']}}</a> | {{ $post['created_at']->diffForHumans() }}
            <p class="my-4 font-light">{{ Str::limit($post['body'],200) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </div>
    </article>
    @endforeach
</x-layout>