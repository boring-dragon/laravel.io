@extends('layouts.base', ['bodyClass' => 'home', 'disableFooterAds' => true, 'isTailwindUi' => true])

@section('body')
    @include('layouts._alerts')

    <!-- Head section -->
    <section class="my-20 overflow-x-hidden">
        <div class="container mx-auto flex items-center my-20">
            <div class="w-1/2">
                <h1 class="font-sans text-6xl font-bold text-gray-900 leading-tight mb-3">
                    The Laravel Community Portal
                </h1>
                <div class="mb-5">
                    <p class="text-gray-800 text-lg leading-8">
                        The Laravel portal for problem solving, knowledge sharing<br>
                        and community building. Join <x-accent-text href="">46,564</x-accent-text> other artisans.
                    </p>
                </div>

                <div>
                    <x-buttons.primary-cta class="mr-2">
                        Join the community
                    </x-buttons.primary-cta>
                    <x-buttons.secondary-cta>
                        Visit the forum
                    </x-buttons.secondary-cta>
                </div>
            </div>

            <div class="w-1/2">
                <x-community-members />
            </div>
        </div>
    </section>
    <!-- /Head section -->

    <!-- Banner ad -->
    <section class="container mx-auto my-20">
        @include('layouts._ads._footer')
    </section>
    <!-- /Banner ad -->

    <!-- Search -->
    <section class="my-16">
        <div class="bg-lio-500 text-white transform -skew-y-1">
            <div class="container mx-auto transform skew-y-1">
                <div class="flex flex-col items-center py-20 text-center">
                    <div class="w-2/5">
                        <div class="mb-8">
                            <h2 class="text-4xl font-bold mb-3">Looking for a solution?</h2>
                            <p class="text-xl opacity-80">Search the forum for the answer to your question</p>
                        </div>

                        <div class="mb-10">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <x-heroicon-o-search class="w-4 h-4 text-gray-900" />
                                </div>
                                <input type="search" placeholder="Search here for threads" class="p-4 pl-10 text-gray-600 rounded w-full" />
                            </div>
                        </div>

                        <div class="text-lg">
                            <p>Can't find what you're looking for? <a href="" class="border-b border-white pb-1">Create a new thread</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Search -->

    <!-- Help others -->
    <section class="my-16 container mx-auto">
        <div class="mx-32">
            <div class="flex items-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 w-1/2">Or you can help others</h2>
                <p class="w-1/2 text-gray-800 text-lg">By joining our platform, you can take a<br> look at the latest unresolved threads</p>
            </div>

            <div class="flex mb-10">
                <div class="flex flex-col rounded w-1/3 shadow-lg p-5 mr-6">
                    <div class="flex justify-between mb-2.5">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full mr-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=3iakaAt3nn&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tim Cook" />
                            <span class="font-heading text-sm text-black">Tim Cook</span>
                        </div>

                        <div>
                            <span class="text-sm text-gray-600">
                                4 hours ago
                            </span>
                        </div>
                    </div>

                    <div class="flex-auto flex flex-col justify-between">
                        <div>
                            <h3 class="text-gray-900 text-2xl mb-2 leading-8">Cloudinary Laravel SDK</h3>
                            <p class="text-gray-800 text-base leading-7">Hey, Does anyone have experience with cloudinary-laravel-sdk? Any examples on CRUD operations on thi...</p>
                        </div>
                        <a href="" class="flex items-center text-base text-gray-300">
                            <span class="text-gray-700 mr-1">Open thread</span>
                            <x-heroicon-s-arrow-right class="w-4 h-4 fill-current" />
                        </a>
                    </div>
                </div>

                <div class="flex flex-col rounded w-1/3 shadow-lg p-5 mr-6">
                    <div class="flex justify-between mb-2.5">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full mr-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=3iakaAt3nn&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tim Cook" />
                            <span class="font-heading text-sm text-black">Tim Cook</span>
                        </div>

                        <div>
                            <span class="text-sm text-gray-600">
                                4 hours ago
                            </span>
                        </div>
                    </div>

                    <div class="flex-auto flex flex-col justify-between">
                        <div>
                            <h3 class="text-gray-900 text-2xl mb-2 leading-8">Cloudinary Laravel SDK</h3>
                            <p class="text-gray-800 text-base leading-7">Hey, Does anyone have experience with cloudinary-laravel-sdk...</p>
                        </div>
                        <a href="" class="flex items-center text-base text-gray-300">
                            <span class="text-gray-700 mr-1">Open thread</span>
                            <x-heroicon-s-arrow-right class="w-4 h-4 fill-current" />
                        </a>
                    </div>
                </div>

                <div class="flex flex-col rounded w-1/3 shadow-lg p-5 mr-6">
                    <div class="flex justify-between mb-2.5">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full mr-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=3iakaAt3nn&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tim Cook" />
                            <span class="font-heading text-sm text-black">Tim Cook</span>
                        </div>

                        <div>
                            <span class="text-sm text-gray-600">
                                4 hours ago
                            </span>
                        </div>
                    </div>

                    <div class="flex-auto flex flex-col justify-between">
                        <div>
                            <h3 class="text-gray-900 text-2xl mb-2 leading-8">Cloudinary Laravel SDK</h3>
                            <p class="text-gray-800 text-base leading-7">Hey, Does anyone have experience with cloudinary-laravel-sdk...</p>
                        </div>
                        <x-buttons.arrow-button href="#">
                            Open thread
                        </x-buttons.arrow-button>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <x-buttons.primary-cta href="">
                    View all threads
                </x-buttons.primary-cta>
            </div>
        </div>
    </section>
    <!-- /Help others -->

    <!-- Laravel.io in numbers -->
    <section class="container mx-auto mb-44">
        <h2 class="text-4xl leading-tight font-bold text-center text-gray-900 mb-12">Laravel.io in numbers</h2>

        <div class="flex mb-10 mx-32">
            <div class="flex flex-col items-center rounded w-1/3 bg-lio-100 mr-6 py-9">
                <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
                    Users
                    <span class="text-4xl text-gray-900 block leading-tight">46,564</span>
                </h3>
                <img src="{{ asset('images/users.png') }}" />
            </div>

            <div class="flex flex-col items-center rounded w-1/3 bg-lio-100 mr-6 py-9">
                <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
                    Threads
                    <span class="text-4xl text-gray-900 block leading-tight">18,183</span>
                </h3>
                <img src="{{ asset('images/threads.png') }}" />
            </div>

            <div class="flex flex-col items-center rounded w-1/3 bg-lio-100 mr-6 py-9 shadow-inner-xl">
                <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
                    Replies
                    <span class="text-4xl text-gray-900 block leading-tight">500,100</span>
                </h3>
                <img src="{{ asset('images/replies.png') }}" />
            </div>
        </div>
    </section>
    <!-- /Laravel.io in numbers -->

    <!-- Popular articles -->
    <section class="container mx-auto mb-40">
        <div class="mx-32">
            <div class="flex items-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 w-1/2">Popular articles</h2>
                <p class="w-1/2 text-gray-800 text-lg">Have a look a the latest shared articles by our community members</p>
            </div>

            <div class="flex mb-16">
                <div class="w-1/3 mr-5">
                    <img src="https://via.placeholder.com/800" class="mb-6 rounded-lg h-72" />
                    <span class="font-mono text-gray-700 leading-6 mb-2 block">March 15th 2021</span>
                    <h3 class="text-gray-900 text-3xl font-bold leading-10 mb-2">Releasing Blade Icons v1.0</h3>
                    <p class="text-gray-800 leading-7 mb-3">Laracon Online 2021 is coming to you live on March 17th, 2021! No hotels, no airfare, just signup and spend the day watching some of the best speaker...</p>
                    <x-buttons.arrow-button href="#">
                        Read article
                    </x-buttons.arrow-button>
                </div>

                <div class="w-1/3 mr-5">
                    <img src="https://via.placeholder.com/800" class="mb-6 rounded-lg h-72" />
                    <span class="font-mono text-gray-700 leading-6 mb-2 block">March 15th 2021</span>
                    <h3 class="text-gray-900 text-3xl font-bold leading-10 mb-2">Releasing Blade Icons v1.0</h3>
                    <p class="text-gray-800 leading-7 mb-3">Laracon Online 2021 is coming to you live on March 17th, 2021! No hotels, no airfare, just signup and spend the day watching some of the best speaker...</p>
                    <x-buttons.arrow-button href="#">
                        Read article
                    </x-buttons.arrow-button>
                </div>

                <div class="w-1/3">
                    <div class="border-b-2 border-gray-200 h-72">
                        <span class="font-mono text-gray-700 leading-6 mb-2 block">March 15th 2021</span>
                        <h4 class="text-gray-900 text-2xl font-bold leading-8 mb-3">
                            Migrate One Database to Another in a Laravel Project
                        </h4>
                        <p class="text-gray-800 leading-7 mb-3">
                            Migrate DB is a package by Andrey Helldar to migrate one database to...
                        </p>
                        <x-buttons.arrow-button href="#">
                            Read article
                        </x-buttons.arrow-button>
                    </div>

                    <div class="pt-6">
                        <span class="font-mono text-gray-700 leading-6 mb-2 block">March 15th 2021</span>
                        <h4 class="text-gray-900 text-2xl font-bold leading-8 mb-3">
                            Migrate One Database to Another in a Laravel Project
                        </h4>
                        <p class="text-gray-800 leading-7 mb-3">
                            Migrate DB is a package by Andrey Helldar to migrate one database to...
                        </p>
                        <x-buttons.arrow-button href="#">
                            Read article
                        </x-buttons.arrow-button>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <x-buttons.primary-cta href="#">
                    View all articles
                </x-buttons.primary-cta>
            </div>
        </div>
    </section>
    <!-- /Popular articles -->
@endsection