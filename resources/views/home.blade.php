@extends('layouts.base', ['bodyClass' => 'home', 'disableFooterAds' => true])

@section('body')
    @include('layouts._alerts')

    <!-- Head section -->
    <section class="container mx-auto flex items-center my-20">
        <div>
            <div class="w-10/12">
                <h1 class="font-heading text-6xl font-bold text-gray-900 leading-tight mb-3">
                    The Laravel Community Portal
                </h1>
                <div class="mb-5">
                    <p class="text-gray-800 text-lg leading-8">
                        The Laravel portal for problem solving, knowledge sharing and community building. Join <x-accent-text href="">46,564</x-accent-text> other artisans.
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
        </div>
        <div>
            <x-community-members />
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
        <div>
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
                        <a href="" class="flex items-center text-base text-gray-300">
                            <span class="text-gray-700 mr-1">Open thread</span>
                            <x-heroicon-s-arrow-right class="w-4 h-4 fill-current" />
                        </a>
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
    <section>
        <h2>Laravel.io in numbers</h2>

        <div>
            <h3>Users</h3>
            <span>46,564</span>
            <x-community-members />
        </div>

        <div>
            <h3>Threads</h3>
            <span>18,183</span>
        </div>

        <div>
            <h3>Replies</h3>
            <span>500,100</span>
        </div>
    </section>
    <!-- /Laravel.io in numbers -->

    <!-- Popular articles -->
    <section>
        <div>
            <h2>Popular articles</h2>
            <p>Have a look a the latest shared articles by our community members</p>
        </div>

        <div>
            <img src="https://via.placeholder.com/800" />
            <span>March 15th 2021</span>
            <h3>Releasing Blade Icons v1.0</h3>
            <p>Laracon Online 2021 is coming to you live on March 17th, 2021! No hotels, no airfare, just signup and spend the day watching some of the best speaker...</p>
            <a href="">Read article</a>
        </div>

        <a href="">View all articles</a>
    </section>
    <!-- /Popular articles -->
@endsection