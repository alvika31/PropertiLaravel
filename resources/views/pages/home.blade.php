<x-app-page-layout>
    <style>
        .owl-prev {
            height: 50px;
            width: 50px;
            align-content: center;
            align-items: center;
            align-self: center;
            background-color: blue !important;
            color: white !important;
            font-size: 35px !important;
            position: absolute;
            left: -20px;
            top: 120px;
        }

        .owl-prev span {
            margin-top: -20px !important;
            padding: 0 !important;
            font-size: 50px !important;
            position: relative !important;
            display: block !important;
        }

        .owl-next {
            height: 50px;
            width: 50px;
            align-content: center;
            align-items: center;
            align-self: center;
            background-color: blue !important;
            color: white !important;
            position: absolute;
            right: -20px;
            top: 120px;
            margin: 0 !important;
            padding: 0 !important;
        }

        .owl-next span {
            margin-top: -20px !important;
            padding: 0 !important;
            font-size: 50px !important;
            position: relative !important;
            display: block !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
    <div class="max-w-6xl  p-6 sm:p-0 mx-auto mt-10">
        <h1 class="text-2xl font-bold">List Properti</h1>
        <div class="mt-10">
            <div class="owl-carousel owl-theme w-full h-screen p-10 sm:p-0">
                @foreach ($properti as $properti)
                    <a href="{{ route('detailproperti', $properti->slug) }}">
                        <div class="item drop-shadow-md bg-white mx-1 my-1 rounded-md w-full mb-20">
                            <img class="w-full" src="{{ asset('storage/' . $properti->featured_image) }}" alt=""
                                height="10px" style="height: 240px">
                            <div class="p-3">
                                <h1 class="text-xl text-slate-500 font-bold">{{ $properti->cicilan }}</h1>
                                <h2 class="text-base text-slate-500 font-bold">{{ $properti->nama_properti }}</h2>


                                <p> {{ $properti->lokasis->nama_lokasi }}</p>
                                <div class="flex mt-5 justify-start text-gray-500  space-x-1">
                                    <div class="">
                                        <i class="ti ti-home-check"></i>
                                        {{ $properti->tipeunit_count }}
                                    </div> |
                                    <div class="">
                                        <i class="ti ti-bed"></i>
                                        {{ $properti->tipeunit_min_kamar_tidur }}-{{ $properti->tipeunit_max_kamar_tidur }}
                                    </div> |
                                    <div class="">
                                        LT:
                                        {{ $properti->tipeunit_min_luas_tanah }}-{{ $properti->tipeunit_max_luas_tanah }}m<sup>2</sup>
                                    </div> |
                                    <div class="">
                                        LT:
                                        {{ $properti->tipeunit_min_luas_bangunan }}-{{ $properti->tipeunit_max_luas_bangunan }}m<sup>2</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="owl-nav">


                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            items: 3,
            loop: false,
            nav: true,
            autoWidth: false,
            margin: 20,
            dots: false,
        })
    </script>
</x-app-page-layout>
