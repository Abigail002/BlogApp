<x-base-layout>
    <div class="wrapper d-flex flex-column justify-between">
        <!-- Navbar -->
        @include('layouts.partials.navbar')

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

        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>
</x-base-layout>
