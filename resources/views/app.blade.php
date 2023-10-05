<x-app-layout>
    <!-- Page Header -->
    <section class="py-10 py-lg-15 bg-striped">
        <div class="container">
            <div class="text-center">
                <h3 class="text-white mb-2">Blog Posts</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-center fs-sm">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="pt-20 pb-10 pt-lg-20 pb-lg-15">
        <div class="container">
            @auth
                <x-cta-button url="{{ route('posts.create') }}">
                    Add New Post
                </x-cta-button>
            @endauth
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-6 gy-10 gy-lg-16 pt-lg-15">
                @forelse ($posts as $post)
                    <x-post-card name="{{ $post->category->name }}" date="{{ $post->created_at }}"
                        title="{{ $post->title }}" author="{{ $post->user->name }}" image="{{ $post->path }}"></x-post-card>
                @empty
                    <div class="center py-10 py-lg-15 bg-striped">
                        <h3 class="text-white mb-2">Aucun Post</h3>
                    </div>
                @endforelse

            </div>

            <div class="text-center mt-18">
                <ul class="pagination flex-wrap justify-center gap-4">
                    <li class="page-item">
                        <a class="page-link disabled" href="#" aria-label="Previous">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24" height="24">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M5 12h14M5 12l4 4m-4-4 4-4" />
                            </svg>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link " href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24" height="24">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M5 12h14m-4 4 4-4m-4-4 4 4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</x-app-layout>
