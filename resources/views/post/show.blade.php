<x-app-layout>
    <div class="wrapper d-flex flex-column justify-between">
        <main class="flex-grow-1">
            <!-- Page header -->
            <section class="py-10 py-lg-15 bg-striped" data-aos="fade-up-sm" data-aos-delay="50">
                <div class="container">
                    <div class="text-center">
                        <h3 class="text-white mb-2">Article</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-center fs-sm">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Article</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>


            <!-- Article -->
            <section class="pt-20 pb-10 pt-lg-30 pb-lg-15">
                <div class="container">
                    <div class="row justify-center mb-10">
                        <div class="col-lg-8">
                            <h2 class="text-white fw-medium mb-0">
                                {{ $post->title }}
                            </h2>
                        </div>
                    </div>
                    <div class="ratio ratio-21x9 rounded-4 overflow-hidden">
                        <img src="{{Storage::url($post->path)}}" alt="" class="img-fluid post-thumbnail w-full h-full object-cover" />
                    </div>
                    <div class="row justify-center mt-8">
                        <div class="col-lg-8">
                            <div class="">
                                <div class="d-flex flex-wrap justify-between align-center mb-6 gap-6">
                                    <div class="d-flex flex-wrap align-center gap-4">
                                        <p class="fw-medium mb-0 post-author"><a href="#">{{ $post->user->name }}</a></p>
                                    </div>

                                    <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list mb-0">
                                        <li>{{ $post->category->name }}</li>
                                        <li>{{ $post->created_at }}</li>
                                        <li>5 Min. Read</li>
                                    </ul>
                                </div>

                                <article class="blog-post">
                                    {!! $post->content !!}
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Related posts -->
            <section class="py-10 pb-lg-15">
                <div class="container">
                    <h2 class="text-white mb-10">Related Article</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-6 gy-10 gy-lg-16">
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="50">
                            <div class="blog-card card border-0">
                                <div class="card-header border-0 bg-transparent ratio ratio-6x4 rounded overflow-hidden">
                                    <a href="article.html" class="d-block">
                                        <img src="../../assets/images/thumbnails/1.jpg" alt="" class="img-fluid post-thumbnail w-full h-full object-cover" />
                                    </a>
                                </div>
                                <div class="card-body p-0 mt-6">
                                    <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list">
                                        <li>Design</li>
                                        <li>14 March 2023</li>
                                        <li>5 Min. Read</li>
                                    </ul>

                                    <h4 class="post-title fw-medium mb-0">
                                        <a href="article.html">Best free AI content generator & AI writers for 2023</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="100">
                            <div class="blog-card card border-0">
                                <div class="card-header border-0 bg-transparent ratio ratio-6x4 rounded overflow-hidden">
                                    <a href="article.html" class="d-block">
                                        <img src="assets/images/thumbnails/2.jpg" alt="" class="img-fluid post-thumbnail w-full h-full object-cover" />
                                    </a>
                                </div>
                                <div class="card-body p-0 mt-6">
                                    <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list">
                                        <li>ChatGPT</li>
                                        <li>14 March 2023</li>
                                        <li>5 Min. Read</li>
                                    </ul>

                                    <h4 class="post-title fw-medium mb-0">
                                        <a href="article.html">Using AI to Write Articles: how I churn out 2000 words</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="blog-card card border-0">
                                <div class="card-header border-0 bg-transparent ratio ratio-6x4 rounded overflow-hidden">
                                    <a href="article.html" class="d-block">
                                        <img src="assets/images/thumbnails/3.jpg" alt="" class="img-fluid post-thumbnail w-full h-full object-cover" />
                                    </a>
                                </div>
                                <div class="card-body p-0 mt-6">
                                    <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list">
                                        <li>AI Tool</li>
                                        <li>14 March 2023</li>
                                        <li>5 Min. Read</li>
                                    </ul>

                                    <h4 class="post-title fw-medium mb-0">
                                        <a href="article.html">Free AI content generator tools and free-forever AI writers in 2023</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-app-layout>
