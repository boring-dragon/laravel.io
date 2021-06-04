<nav class="container mx-auto py-8 text-gray-500">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center">
            <a href="{{ route('home') }}" class="mr-4">
                <img class="hidden lg:block h-8 w-auto" src="{{ asset('images/laravelio-logo.svg') }}" alt="" />
            </a>

            <a href="{{ route('forum') }}" class="mr-4">
                Forum
            </a>

            <a href="{{ route('articles') }}" class="mr-4">
                Articles
            </a>

            <a href="https://paste.laravel.io" class="mr-4">
                Pastebin
            </a>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <div class="mr-4">
                    <button @click="open = !open" class="flex items-center">
                        Chat
                        <x-heroicon-s-chevron-down x-show="!open" class="w-4 h-4 ml-1"/>
                        <x-heroicon-s-chevron-left x-show="open" class="w-4 h-4 ml-1"/>
                    </button>
                </div>
                <div x-show="open" x-cloak>
                    <div class="absolute flex flex-col mt-2 w-36 rounded-md shadow-lg z-50 bg-white">
                        <a href="https://discord.gg/KxwQuKb" class="p-4 hover:bg-gray-100">Discord</a>
                        <a href="https://larachat.co" class="p-4 hover:bg-gray-100">Larachat</a>
                        <a href="https://webchat.freenode.net/?nick=laravelnewbie&channels=%23laravel&prompt=1" class="p-4 hover:bg-gray-100">IRC</a>
                    </div>
                </div>
            </div>

            <a href="https://laravelevents.com" class="mr-4">
                Events
            </a>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center">
                    Community
                    <x-heroicon-s-chevron-down x-show="!open" class="w-4 h-4 ml-1"/>
                    <x-heroicon-s-chevron-left x-show="open" class="w-4 h-4 ml-1"/>
                </button>

                <div x-show="open" x-cloak>
                    <div class="absolute flex flex-col mt-2 w-36 rounded-md shadow-lg z-50 bg-white">
                        <a href="https://github.com/laravelio" class="p-4 hover:bg-gray-100">Github</a>
                        <a href="https://larachat.co" class="p-4 hover:bg-gray-100">Twitter</a>
                        <a href="https://laravel.com" class="p-4 hover:bg-gray-100">Laravel</a>
                        <a href="https://laracasts.com" class="p-4 hover:bg-gray-100">Laracasts</a>
                        <a href="https://laravel-news.com" class="p-4 hover:bg-gray-100">Laravel News</a>
                        <a href="https://www.laravelpodcast.com" class="p-4 hover:bg-gray-100">Podcast</a>
                        <a href="https://ecosystem.laravel.io" class="p-4 hover:bg-gray-100">Ecosystem</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex items-center justify-end">
            @include('_partials._search')

            @if (Auth::guest())
                <a href="{{ route('register') }}" class="ml-6">
                    Register
                </a>

                <x-buttons.secondary-cta class="flex items-center ml-6" href="{{ route('login') }}">
                    <x-heroicon-o-user class="w-5 h-5 mr-1" />
                    Login
                </x-buttons.secondary-cta>
            @else
                <x-avatar :user="Auth::user()" class="h-8 w-8 mr-3 ml-6" />
                {{ Auth::user()->name() }}
                <x-heroicon-s-chevron-down class="w-4 h-4 ml-1"/>
            @endif
        </div>
    </div>
</nav>