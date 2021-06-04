<section class="mb-40">
    @include('layouts._sponsors')
</section>

<div class="bg-gray-900 text-white">
    <div class="container mx-auto pt-20 pb-8">
        <div class="mx-32">
            <div class="flex pb-16 mb-8 border-b border-gray-800">
                <div class="flex-grow">
                    <a href="" class="block mb-5">
                        <img src="{{ asset('images/laravelio-logo-white.svg') }}" />
                    </a>
                    <p class="leading-loose">
                        The Laravel portal for problem solving,<br />
                        knowledge sharing and community<br />
                        building. Join 46,564 other artisans.
                    </p>
                </div>

                <div class="flex-grow">
                    <div>
                        <h6 class="text-lg mb-6">
                            Laravel.io
                        </h6>

                        <div class="flex flex-col">

                            <a href="" class="text-gray-400 mb-6">
                                Forum
                            </a>

                            <a href="" class="text-gray-400 mb-6">
                                Articles
                            </a>

                            <a href="" class="text-gray-400 mb-6">
                                Pastebin
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-grow">
                    <div>
                        <h6 class="text-lg mb-6">
                            Socials
                        </h6>

                        <div class="flex flex-col">

                            <a href="" class="text-gray-400 mb-6">
                                <x-icon-twitter class="text-white w-4 h-4 inline mr-3.5"/>
                                Twitter
                            </a>

                            <a href="" class="text-gray-400 mb-6 flex items-center">
                                <x-icon-github class="text-white w-4 h-4 inline mr-3.5"/>
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-grow">
                    <div>
                        <h6 class="text-lg mb-6">
                            The community
                        </h6>

                        <div class="flex flex-col">
                            <div class="flex mb-6">
                                <a href="https://laravel.com" class="w-1/2 text-gray-400">
                                    <img src="{{ asset('images/laravel.png') }}" alt="Laravel" class="w-4 h-4 inline mr-2" />
                                    Laravel
                                </a>

                                <a href="https://laravel-news.com" class="w-1/2 text-gray-400">
                                    <img src="{{ asset('images/laravel-news.png') }}" alt="Laravel News" class="w-4 h-4 inline mr-2" />
                                    Laravel News
                                </a>
                            </div>

                            <div class="flex">
                                <a href="https://laracasts.com" class="w-1/2 text-gray-400">
                                    <img src="{{ asset('images/laracasts.png') }}" alt="Laracasts" class="w-4 h-4 inline mr-2" />
                                    Laracasts
                                </a>

                                <a href="https://www.laravelpodcast.com" class="w-1/2 text-gray-400">
                                    <img src="{{ asset('images/podcast.png') }}" alt="Laravel Podcast" class="w-4 h-4 inline mr-2" />
                                    Laravel Podcast
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-gray-100">
                <span class="mr-5">© 2021 Laravel.io - All rights reserved.</span>
                <a href="https://laravel.io/terms" class="mr-8">Terms of service</a>
                <a href="https://laravel.io/privacy" class="mr-8">Privacy policy</a>
                <a href="https://github.com/sponsors/laravelio">Advertise</a>
            </div>
        </div>
    </div>
</div>
