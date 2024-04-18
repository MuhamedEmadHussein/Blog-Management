<footer class="text-sm space-x-4 flex items-center border-t border-gray-100 flex-wrap justify-between py-4 px-4">
   <div class="flex space-x-4">
    @foreach (config('app.supported_locales') as $locale => $data)
        <a href="{{route('locale.set',$locale)}}">
            <x-dynamic-component :component="$data['icon']" class="w-6 h-6" />
        </a>
    @endforeach

   </div>
    @auth
        <div class="flex space-x-4">
            <a class="text-gray-500 hover:text-yellow-500" href="{{route('profile.show')}}">{{__('menu.profile')}}</a>
            <a class="text-gray-500 hover:text-yellow-500" href="{{route('posts.index')}}">{{__('menu.blog')}}</a>
            <a class="text-gray-500 hover:text-yellow-500" href="{{route('logout')}}">{{__('menu.logout')}}</a>
        </div>
    @else
        <div class="flex space-x-4">
            <a class="text-gray-500 hover:text-yellow-500" href="{{route('login')}}">{{__('menu.login')}}</a>
            <a class="text-gray-500 hover:text-yellow-500" href="{{route('register')}}">{{__('menu.register')}}</a>
        </div>

    @endauth
</footer>
