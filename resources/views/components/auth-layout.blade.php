<x-base-layout>
    <div class="wrapper d-flex flex-column justify-between">
        <main class="flex-grow-1">
            <section class="account-section login-page py-6 h-full">
                <div class="container-fluid h-full">
                    <div class="row h-full">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div
                                class="bg-lite-blue border border-lite-blue-2 rounded-4 h-full p-6 p-md-20 text-center d-flex flex-column justify-center">
                                <h2 class="mb-12">
                                    Unlock the Power of <br class="d-none d-xl-block" />
                                    <span class="text-primary">GenAI</span> Copywriting Tool
                                </h2>
                                <img src="/screens/screen-8.png" alt=""
                                    class="img-fluid w-full mt-n24 mb-n10" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="close-btn">
                                <a href="/"
                                    class="icon w-12 h-12 rounded p-3 d-flex align-center justify-center ms-auto bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2">
                                            <path d="M18 6 6 18M6 6l12 12" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="account-wrapper h-full d-flex flex-column justify-center">
                                <div class="text-center">
                                    <a href="">
                                        <img src="/logo-blue.svg" alt="" class="img-fluid"
                                            width="165" />
                                    </a>
                                    <div class="vstack gap-4 mt-10">
                                        {{ $slot }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-base-layout>
