@extends('layouts.base', ['bodyClass' => 'home', 'disableFooterAds' => true])

@section('body')
    @include('layouts._alerts')

    <div class="container mx-auto">
        <!-- Head section -->
        <section>
            <div>
                <h1 class="text-5xl">
                    The Laravel Community Portal
                </h1>
                <div>
                    <p>
                        The Laravel portal for problem solving, knowledge sharing and community building. Join <span>46,564</span> other artisans.
                    </p>

                    <a href="">Join the community</a>
                    <a href="">Visit the forum</a>
                </div>
            </div>
            <div>
                <x-community-members />
            </div>
        </section>
        <!-- /Head section -->

        <!-- Banner ad -->
        <section>
            @include('layouts._ads._footer')
        </section>
        <!-- /Banner ad -->

        <!-- Search -->
        <section>
            <div>
                <h2>Looking for a solution</h2>
                <p>Search the forum for the answer to your question</p>
            </div>

            <div>
                <input type="search" placeholder="Search here for threads" />
            </div>

            <div>
                <p>Can't find what you're looking for?</p>
                <a href="">Create a new thread</a>
            </div>
        </section>
        <!-- /Search -->

        <!-- Help others -->
        <section>
            <div>
                <h2>Or you can help others</h2>
                <p>By joining our platform, you can take a look at the latest unresolved threads</p>

                <div>
                    <div>
                        <div>
                            <img class="w-6 h-6 rounded-full mx-4 my-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=3iakaAt3nn&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tim Cook" />
                            <span>Tim Cook</span>
                        </div>

                        <div>
                            4 hours ago
                        </div>
                    </div>

                    <div>
                        <h3>Cloudinary Laravel SDK</h3>
                        <p>Hey, Does anyone have experience with cloudinary-laravel-sdk? Any examples on CRUD operations on thi...</p>
                    </div>
                </div>

                <a href="">View all threads</a>
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
    </div>
@endsection