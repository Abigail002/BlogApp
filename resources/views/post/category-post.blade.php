<x-app-layout>
    <!-- Page Header -->
    <section class="py-10 py-lg-15 bg-striped">
        <div class="container">
            <div class="text-center">
                <h3 class="text-white mb-2">Blog Posts</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-center fs-sm">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="pt-20 pb-10 pt-lg-20 pb-lg-15">
        <div class="container">
            <x-cta-button url="{{ route('posts.create') }}">
                Add New Post
            </x-cta-button>

            <section class="pt-20 pb-10 pt-lg-20 pb-lg-15">
                <div class="container">
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
                </div>
            </section>
        </div>
    </section>
</x-app-layout>
