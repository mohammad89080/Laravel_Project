@props(['posts'])

{{-- <x-featured-card :post="$posts[0]" /> --}}

@if($posts->count() > 0)
    <div class="lg:grid lg:grid-cols-6">
        @foreach($posts as $post)
            <x-post-card :post="$post"  class="{{ $loop->iteration ='col-span-3 py-5 px-8' }}" />
        @endforeach
    </div>
@endif
