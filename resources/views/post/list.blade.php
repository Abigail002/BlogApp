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
            <x-cta-button url="{{ route('posts.create') }}">
                Add New Post
            </x-cta-button>

            <section class="pt-20 pb-10 pt-lg-20 pb-lg-15">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-6 gy-10 gy-lg-16 pt-lg-15">
                        @if ($posts->isEmpty())
                            <div class="center py-10 py-lg-15 bg-striped">
                                <h3 class="text-white mb-2">Aucun Post</h3>
                            </div>
                        @else
                            @foreach ($posts as $post)
                                <div class="col">
                                    <div class="blog-card card border-0">
                                        <div
                                            class="card-header border-0 bg-transparent ratio ratio-6x4 rounded overflow-hidden">
                                            <a href="article.html" class="d-block">
                                                <img src="/thumbnails/1.jpg" alt=""
                                                    class="img-fluid post-thumbnail w-full h-full object-cover" />
                                            </a>
                                        </div>
                                        <div class="card-body p-0 mt-6">
                                            <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list">
                                                <li>{{$post->category->name}}</li>
                                                <li>{{$post->created_at}}</li>
                                                <li>5 Min. Read</li>
                                            </ul>

                                            <h4 class="post-title fw-medium mb-0">
                                                <a href="article.html">{{$post->title}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-app-layout>
