<x-app-page-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
            left: 0;
            top: 300px
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
            right: 0;
            top: 300px;
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

        ul {
            list-style-type: disc;
        }

        p {
            color: rgb(105, 105, 105);
        }

        li {
            color: rgb(105, 105, 105);
        }
    </style>

    <div class="">
        <div class="owl-carousel owl-theme">
            @foreach ($properti->gallery as $gambar)
                <div class="item">
                    <img class="item" src="{{ asset($gambar->url) }}" alt="">
                </div>
            @endforeach
            <div class="owl-nav">


            </div>
        </div>
    </div>
    <div class="max-w-6xl p-6 sm:p-0 mx-auto mt-10 mb-10">
        <p class="text-slate-400">Nama Developer: {{ $properti->nama_developer }}</p>
        <h1 class="font-bold text-slate-500">{{ $properti->nama_properti }}</h1>
        <h1 class="text-2xl font-bold text-slate-500">Rp. {{ $minharga }} Milyar - {{ $maxharga }} Milyar</h1>
        <p class="text-black text-slate-600">Cicilan Mulai Dari: {{ $properti->cicilan }}</p>
        <h1 class="text-lg font-bold text-slate-500 mt-5 mb-2">Tipe Unit:</h1>
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($properti->tipeunit as $tipeunit)
                <div class="w-full bg-white drop-shadow rounded-md">
                    <img src="{{ asset('storage/' . $tipeunit->image_tipe) }}" alt="" srcset="">
                    <div class="p-3">
                        <h1 class="text-lg font-medium text-gray-600">{{ $tipeunit->nama_tipe }}</h1>
                        <p class="text-sm">Harga Mulai:</p>
                        <h1 class="text-xl font-medium text-gray-600">Rp. {{ $tipeunit->harga }} M</h1>
                        <div class="flex flex-col lg:flex-row justify-items-center gap-1">
                            <div class="flex items-center gap-1">
                                <i class="ti ti-bed"></i>{{ $tipeunit->kamar_tidur }}KT
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="ti ti-home-up"></i>LT:{{ $tipeunit->luas_tanah }}m<sup>2</sup>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="ti ti-home-move"></i>LB:{{ $tipeunit->luas_tanah }}m<sup>2</sup>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-center items-center">
                            <a href="https://wa.me/628979382175?text=Hallo%20propertiku%20saya%20mau%20properti%20{{ $properti->nama_properti }}%20dengan%20tipe%20unit%20{{ $tipeunit->nama_tipe }}"
                                class="py-2 rounded-lg text-center text-white w-full bg-green-500"><i
                                    class="ti ti-brand-whatsapp"></i> Hubungi
                                Lewat
                                Whatsapp</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h1 class="text-lg font-bold text-slate-500 mt-5 mb-2">Site Plan:</h1>
        <p class="text-slate-400">
            <?= $properti->deskripsi_properti ?>
        </p>
        <h1 class="text-lg font-bold text-slate-500 mt-5 mb-2">Fasilitas Properti:</h1>
        <p class="text-slate-400">
            <?= $properti->fasilitas ?>
        </p>
        <h1 class="text-lg font-bold text-slate-500 mt-5 mb-2">Lokasi:</h1>
        <p class="text-slate-400">
            <?= $properti->deskripsi_lokasi ?>
        </p>


    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            center: false,
            items: 3,
            loop: true,
            autoWidth: true,
            margin: 10,
            nav: true,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    autoWidth: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</x-app-page-layout>
