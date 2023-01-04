<x-app-page-layout :$model>
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
    <div class="w-full bg-fixed bg-center h-48 sm:h-96 flex bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/hero.jpg') }}')">

        <div class="m-auto text-center w-full">
            <form action="" class="m-o p-0">
                <input type="text" class="border-0 rounded w-4/5 sm:w-1/2" placeholder="Mau Cari Property Dimana?"
                    name="" id="">
                <button class="p-0 rounded m-0 bg-black text-white h-10 w-10"><i class="ti ti-search"></i></button>
            </form>
        </div>

    </div>
    <div class="w-full sm:max-w-6xl p-6 sm:p-0 mx-auto mt-10">
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-3 sm:space-x-6">
            <div class="w-full sm:w-1/3 rounded drop-shadow-md bg-white">
                <x-card-home>
                    <x-slot name="image">
                        <img src="https://cariproperti.com/static/images/new/homepage/house.svg" alt="">
                    </x-slot>
                    <x-slot name="heading">
                        Jaminan Harga Terbaik
                    </x-slot>
                    <x-slot name="deskripsi">
                        Dapatkan harga terbaik hanya di CariProperti
                    </x-slot>
                </x-card-home>

            </div>
            <div class="w-full sm:w-1/3 rounded drop-shadow-md bg-white">
                <x-card-home>
                    <x-slot name="image">
                        <img src="https://cariproperti.com/static/images/new/homepage/no-dp-alt.png" width="50"
                            alt="">
                    </x-slot>
                    <x-slot name="heading">
                        Tanpa DP
                    </x-slot>
                    <x-slot name="deskripsi">
                        Dapatkan cicilan terbaik <br>
                        tanpa DP
                    </x-slot>
                </x-card-home>

            </div>
            <div class="w-full sm:w-1/3 rounded drop-shadow-md bg-white">
                <x-card-home>
                    <x-slot name="image">
                        <img src="https://cariproperti.com/static/images/new/homepage/kpr.svg" width="50"
                            alt="">
                    </x-slot>
                    <x-slot name="heading">
                        Jaminan Harga Terbaik
                    </x-slot>
                    <x-slot name="deskripsi">
                        Dapatkan harga terbaik hanya di CariProperti
                    </x-slot>
                </x-card-home>
            </div>
        </div>
    </div>
    <div class="max-w-6xl p-6 sm:p-0 mx-auto mt-10">
        <h1 class="text-2xl font-bold">Cari Properti Favoritmu</h1>

        <div class="grid grid-cols-2 mt-5 sm:grid-cols-3 gap-6">

            <div class="drop-shadow-md bg-gray-100 p-4">
                <div class="flex items-center justify-between">
                    <div class="w-full sm:w-1/2">
                        <h1 class="text-xl font-bold">BSD City</h1>
                        <p>Rata-rata <br>
                            Rp 23 Jt/M</p>
                    </div>
                    <div class="">
                        <img src="https://cariproperti.com/static/images/new/homepage/propertyIcon/bsd2.svg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="drop-shadow-md bg-gray-100 p-4">
                <div class="flex items-center justify-between">
                    <div class="w-full sm:w-1/2">
                        <h1 class="text-xl font-bold">Gading Serpong</h1>
                        <p>Rata-rata <br>
                            Rp 23 Jt/M</p>
                    </div>
                    <div class="">
                        <img src="https://cariproperti.com/static/images/new/homepage/propertyIcon/gading2.svg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="drop-shadow-md bg-gray-100 p-4">
                <div class="flex items-center justify-between">
                    <div class="w-full sm:w-1/2">
                        <h1 class="text-xl font-bold">Alam Sutera</h1>
                        <p>Rata-rata <br>
                            Rp 23 Jt/M</p>
                    </div>
                    <div class="">
                        <img src="https://cariproperti.com/static/images/new/homepage/propertyIcon/alsut2.svg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="drop-shadow-md bg-gray-100 p-4">
                <div class="flex items-center justify-between">
                    <div class="w-full sm:w-1/2">
                        <h1 class="text-xl font-bold">Bintaro Jaya</h1>
                        <p>Rata-rata <br>
                            Rp 23 Jt/M</p>
                    </div>
                    <div class="">
                        <img src="https://cariproperti.com/static/images/new/homepage/propertyIcon/bintaro2.svg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="drop-shadow-md bg-gray-100 p-4">
                <div class="flex items-center justify-between">
                    <div class="w-full sm:w-1/2">
                        <h1 class="text-xl font-bold">Lippo Karawaci</h1>
                        <p>Rata-rata <br>
                            Rp 23 Jt/M</p>
                    </div>
                    <div class="">
                        <img src="https://cariproperti.com/static/images/new/homepage/propertyIcon/lippo2.svg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="drop-shadow-md bg-gray-100 p-4">
                <div class="flex items-center justify-between">
                    <div class="w-full sm:w-1/2">
                        <h1 class="text-xl font-bold">Summarecon Bekasi
                        </h1>
                        <p>Rata-rata <br>
                            Rp 23 Jt/M</p>
                    </div>
                    <div class="">
                        <img src="https://cariproperti.com/static/images/new/homepage/propertyIcon/summarecon2.svg"
                            alt="">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="max-w-6xl p-6 sm:p-0 mx-auto mt-10">
        <h1 class="text-2xl font-bold">List Properti</h1>
        <div class="embla flex">
            <div class="flex mt-5 space-x-4">
                <div class="drop-shadow-md bg-white rounded">
                    <img class="w-full"
                        src="https://d3lfgix2a8jnun.cloudfront.net/listing-files/4/the-loop-bsd637c342cea3fd_thumb-637c342d6542c.png"
                        alt="">
                    <div class="p-3">
                        <h1 class="text-xl font-bold">Start Rp 2.1 Milyar</h1>
                        <h2 class="text-base font-bold">Ruko The Loop BSD City</h2>
                        <p> BSD City, Tangerang</p>
                        <div class="flex mt-5 justify-start text-gray-500  space-x-5">
                            <div class="">
                                <i class="ti ti-bed"></i> 4
                            </div>
                            <div class="">
                                LT 90-110 m<sup>2</sup>
                            </div>
                            <div class="">
                                LT 90-110 m<sup>2</sup>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drop-shadow-md bg-white rounded">
                    <img class="w-full"
                        src="https://d3lfgix2a8jnun.cloudfront.net/listing-files/4/the-loop-bsd637c342cea3fd_thumb-637c342d6542c.png"
                        alt="">
                    <div class="p-3">
                        <h1 class="text-xl font-bold">Start Rp 2.1 Milyar</h1>
                        <h2 class="text-base font-bold">Ruko The Loop BSD City</h2>
                        <p> BSD City, Tangerang</p>
                        <div class="flex flex-col sm:flex-row mt-5 justify-start text-gray-500 space-x-1 sm:space-x-5">
                            <div class="">
                                <i class="ti ti-bed"></i> 4
                            </div>
                            <div class="">
                                LT 90-110 m<sup>2</sup>
                            </div>
                            <div class="">
                                LT 90-110 m<sup>2</sup>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drop-shadow-md bg-white rounded">
                    <img class="w-full"
                        src="https://d3lfgix2a8jnun.cloudfront.net/listing-files/4/the-loop-bsd637c342cea3fd_thumb-637c342d6542c.png"
                        alt="">
                    <div class="p-3">
                        <h1 class="text-xl font-bold">Start Rp 2.1 Milyar</h1>
                        <h2 class="text-base font-bold">Ruko The Loop BSD City</h2>
                        <p> BSD City, Tangerang</p>
                        <div class="flex mt-5 justify-start text-gray-500  space-x-5">
                            <div class="">
                                <i class="ti ti-bed"></i> 4
                            </div>
                            <div class="">
                                LT 90-110 m<sup>2</sup>
                            </div>
                            <div class="">
                                LT 90-110 m<sup>2</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <button class="embla__button embla__button--prev" type="button">
        <svg class="embla__button__svg" viewBox="137.718 -1.001 366.563 643.999">
            <path
                d="M428.36 12.5c16.67-16.67 43.76-16.67 60.42 0 16.67 16.67 16.67 43.76 0 60.42L241.7 320c148.25 148.24 230.61 230.6 247.08 247.08 16.67 16.66 16.67 43.75 0 60.42-16.67 16.66-43.76 16.67-60.42 0-27.72-27.71-249.45-249.37-277.16-277.08a42.308 42.308 0 0 1-12.48-30.34c0-11.1 4.1-22.05 12.48-30.42C206.63 234.23 400.64 40.21 428.36 12.5z">
            </path>
        </svg>
    </button>
    <button class="embla__button embla__button--next" type="button">
        <svg class="embla__button__svg" viewBox="0 0 238.003 238.003">
            <path
                d="M181.776 107.719L78.705 4.648c-6.198-6.198-16.273-6.198-22.47 0s-6.198 16.273 0 22.47l91.883 91.883-91.883 91.883c-6.198 6.198-6.198 16.273 0 22.47s16.273 6.198 22.47 0l103.071-103.039a15.741 15.741 0 0 0 4.64-11.283c0-4.13-1.526-8.199-4.64-11.313z">
            </path>
        </svg>
    </button>
    </div>
    <script type="text/javascript">
        var emblaNode = document.querySelector('.embla')
        var options = {
            loop: false
        }
        var plugins = [EmblaCarouselAutoplay()] // Plugins

        var embla = EmblaCarousel(emblaNode, options, plugins)
    </script>
</x-app-page-layout>
