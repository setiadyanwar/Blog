<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author']}}</a> | {{ $post['created_at']->diffForHumans() }}
            <p class="my-4 font-light">{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back To Post </a>
        </div>
    </article>
    
</x-layout>