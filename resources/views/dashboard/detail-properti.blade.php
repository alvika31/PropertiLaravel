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

    @php
        function nice_number($n)
        {
            // first strip any formatting;
            $n = 0 + str_replace(',', '', $n);
        
            // is this a number?
            if (!is_numeric($n)) {
                return false;
            }
        
            // now filter it;
            if ($n > 1000000000000) {
                return round($n / 1000000000000, 2) . ' Triliun';
            } elseif ($n > 1000000000) {
                return round($n / 1000000000, 2) . ' Milyar';
            } elseif ($n > 1000000) {
                return round($n / 1000000, 2) . ' Juta';
            } elseif ($n > 1000) {
                return round($n / 1000, 2) . ' Ribu';
            }
        
            return number_format($n);
        }
    @endphp

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
    @if (!$model->tipeunit->isEmpty())
        <h1 class="text-2xl font-medium mt-4 mb-2">Tipe Unit:</h1>
    @endif

    <div class="grid grid-cols-4 gap-4">
        @foreach ($model->tipeunit as $tipeunit)
            <div class="w-full bg-white drop-shadow rounded-md">
                <img src="{{ asset('storage/' . $tipeunit->image_tipe) }}" alt="" srcset="">
                <div class="p-3">
                    <h1 class="text-lg font-medium text-gray-600">{{ $tipeunit->nama_tipe }}</h1>
                    <p class="text-sm">Harga Mulai:</p>

                    <h1 class="text-xl font-medium text-gray-600 harga" id="harga">Rp.
                        <?php $ini = $tipeunit->harga; ?>
                        <?= nice_number($ini) ?></h1>
                    <div class="flex justify-items-center gap-4">
                        <div class="flex items-center gap-1">
                            <i class="ti ti-bed"></i>{{ $tipeunit->kamar_tidur }}KT
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="ti ti-home-up"></i>LT:{{ $tipeunit->luas_tanah }}m<sup>2</sup>
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="ti ti-home-move"></i>LB:{{ $tipeunit->luas_bangunan }}m<sup>2</sup>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
        });

        // function test(labelValue) {
        //     const sign = Math.sign(Number(labelValue));
        //     // Nine Zeroes for Billions
        //     return Math.abs(Number(labelValue)) >= 1.0e9 ?
        //         "Rp. " + sign * (Math.abs(Number(labelValue)) / 1.0e9) + " Milyar" : // Six Zeroes for Millions
        //         Math.abs(Number(labelValue)) >= 1.0e6 ?
        //         "Rp. " + sign * (Math.abs(Number(labelValue)) / 1.0e6) + " Juta" : // Three Zeroes for Thousands
        //         Math.abs(Number(labelValue)) >= 1.0e3 ?
        //         "Rp. " + sign * (Math.abs(Number(labelValue)) / 1.0e3) + " Ribu" :
        //         Math.abs(Number(labelValue));
        // }
        // <?php foreach ($model->tipeunit as $tipeunit){ ?>


        // // document.getElementById('harga').innerHTML = test(<?= $tipeunit->harga ?>);
        // // var abc = test(<?= $tipeunit->harga ?>)
        // console.log(test(<?= $tipeunit->harga ?>));

        // <?php }?>

        // const nilai = <?php echo json_encode($model->tipeunit); ?>;
        // let text = '';
        // for (let i = 0; i < nilai.length; i++) {
        //     text += nilai[i];
        //     console.log(text);
        // }
        // // let cekHarga = nilai[0]['harga'];
        // // document.getElementById('harga').innerHTML = test(nilai[0]['harga']);

        // // console.log(nilai['harga']);
    </script>



</x-dashboard-layout>
