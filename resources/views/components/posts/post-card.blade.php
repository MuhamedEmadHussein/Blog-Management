<div {{$attributes}}>
    <a wire:navigate href="{{route('posts.show',$post->slug)}}">
        <div>
            <img class="w-full rounded-xl"
                src="{{$post->getThumbnailImage()}}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            @if ($category = $post->categories->first())
                <x-posts.category-badge :category="$category" />
            @endif

            <p class="text-gray-500 text-sm ml-2">{{$post->published_at}}</p>
        </div>
        <a href="#" class="text-xl font-bold text-gray-900">{{$post->title}}</a>
    </div>

</div>
