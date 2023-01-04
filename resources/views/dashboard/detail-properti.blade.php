<x-dashboard-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
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


    <div class="w-full">
        <img class="w-full" src="{{ asset('storage/' . $model->featured_image) }}" alt="" srcset="">
    </div>
    <div class="flex container mt-4">
        <div class="">
            <p class="font-light">Developer: {{ $model->nama_developer }}</p>
            <h1 class="text-xl font-medium">{{ $model->nama_properti }}</h1>
            <p class="font-light"> Cicilan Mulai: Rp. {{ $model->cicilan }}</p>
            <p>Lokasi: {{ $model->lokasis->nama_lokasi }}</p>
            <p>Tipe Properti: {{ $model->tipeproperti->nama_tipe }}</p>
            <h1 class="text-2xl font-medium mt-4 mb-2">Desripsi:</h1>
            <p class="font-light text-gray-100"><?php echo $model->deskripsi_properti; ?></p>
            <h1 class="text-2xl font-medium mt-4 mb-2">Fasilitas:</h1>
            <p class="font-light text-gray-100"><?php echo $model->fasilitas; ?></p>
            <h1 class="text-2xl font-medium mt-4 mb-2">Deskripsi Lokasi:</h1>
            {!! html_entity_decode($model->deskripsi_lokasi) !!}
        </div>
    </div>
    <h1 class="text-2xl font-medium mt-4 mb-2">Gallery:</h1>
    <div class="">
        <div class="owl-carousel owl-theme">
            @foreach ($model->gallery as $gambar)
                <div class="item">

                    <img class="item" src="{{ asset($gambar->url) }}" alt="">
                </div>
            @endforeach
            <div class="owl-nav">


            </div>
        </div>
    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            center: true,
            items: 2,
            loop: true,
            autoWidth: true,
            margin: 10,
        })
    </script>



</x-dashboard-layout>
