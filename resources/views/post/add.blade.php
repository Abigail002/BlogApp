<x-app-layout>
    <div class="wrapper d-flex flex-column justify-between">
        <main class="flex-grow-1">
            <!-- Page Header -->
            <section class="py-10 py-lg-15 bg-striped">
                <div class="container">
                    <div class="text-center">
                        <h3 class="text-white mb-2">Blog Add</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-center fs-sm">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Add</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>

            <div class="row justify-center mt-18" data-aos="fade-up-sm" data-aos-delay="50">
                <div class="col-lg-8 col-xl-6">
                    <form class="vstack gap-8" method="post" action="{{ route('posts.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <label for="image" class="form-label fs-lg fw-medium mb-4"> Post Image* </label>
                            <div class="input-group with-icon">
                                <input type="file" name="image" label="Drop files here or click to upload."
                                    help="Upload files here and they won't be sent immediately" is="drop-files" />
                            </div>
                        </div>

                        <div class="">
                            <label for="title" class="form-label fs-lg fw-medium mb-4"> Title* </label>
                            <div class="input-group with-icon">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2">
                                            <path
                                                d="M34.667 13.333H56M34.667 24H48M34.667 40H56M34.667 50.667H48M8 13.333a2.667 2.667 0 0 1 2.667-2.666h10.666A2.667 2.667 0 0 1 24 13.333V24a2.667 2.667 0 0 1-2.667 2.667H10.667A2.667 2.667 0 0 1 8 24V13.333ZM8 40a2.667 2.667 0 0 1 2.667-2.667h10.666A2.667 2.667 0 0 1 24 40v10.667a2.667 2.667 0 0 1-2.667 2.666H10.667A2.667 2.667 0 0 1 8 50.667V40Z" />
                                        </g>
                                    </svg>
                                </span>
                                <input type="text" id="title" name="title" class="form-control rounded-2"
                                    placeholder="Unlocking the Power of AI: A Comprehensive Guide" />
                            </div>
                        </div>

                        <x-select-field label="Post Category" name='category_id' placeholder="Select The Post Category"
                            :options="$categories">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path
                                        d="M32 10.667 10.667 21.333 32 32l21.333-10.667L32 10.667ZM10.667 32 32 42.667 53.333 32M10.667 42.667 32 53.333l21.333-10.666" />
                                </g>
                            </svg>
                        </x-select-field>

                        <style>
                            /* Sélectionnez le texte à l'intérieur de CKEditor et appliquez le style désiré */
                            .ck-content {
                                color: black;
                                /* Changez la couleur du texte ici, par exemple, en noir */
                            }

                            .ck-content table {
                                color: black;
                                /* Changez la couleur du texte ici, par exemple, en noir */
                            }
                        </style>
                        <div class="">
                            <label for="content" class="form-label fs-lg fw-medium mb-4">
                                Content*
                            </label>
                            <textarea id="content" name="content" class="form-control rounded-2" placeholder="Write here your post content"
                                rows="4"></textarea>
                        </div>

                        <div class="">
                            <button class="btn btn-outline-primary-dark" type="submit">Add Post</button>
                        </div>
                        <div class="status alert mb-0 d-none"></div>
                    </form>
                </div>
            </div>
            <script type="module" src="//unpkg.com/@grafikart/drop-files-element"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>

            <!-- Blog -->
            <section class="pt-20 pb-10 pt-lg-30 pb-lg-15">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-6 gy-10 gy-lg-16">
                        <div class="col">
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>
</x-app-layout>
