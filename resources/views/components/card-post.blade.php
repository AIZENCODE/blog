

@props(['post'])


<div class="py-8">
    {{-- overflow-hidden hace que lo que salga del contenido se oculte --}}
    <article class=" bg-white shadow-lg rounded-lg overflow-hidden">


        @if ($post->image)
        
            <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""> 
        @else
            <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/09/17/20/31/ocean-7461792_960_720.jpg" alt="">
        @endif




        <div class="py-2">
            <div class="px-6 pt-4">
                <h1 class="font-bold text-xl mb-2">
                    <a href="{{ route('posts.show', $post) }}">{{$post->name}}</a>
                </h1>
            </div>
            <div class="text-gray-700 text-base px-6 ">
                {!!$post->extract!!}
            </div>

            <div class="px-6 pt-4 pb-2">

                @foreach ($post->tags as $tag)
                
                    <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name }}</a>

                @endforeach

            </div>
        </div>
    

    </article>
</div>
