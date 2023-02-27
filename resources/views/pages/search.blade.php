<x-app-page-layout>
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
    <div class="w-full bg-fixed bg-center h-48 sm:h-96 flex bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/hero.jpg') }}')">


        <div class="m-auto text-center w-full">
            <form action="{{ route('search') }}" class="m-o p-0">
                <input type="text" name="cari" class="border-0 rounded w-4/5 sm:w-1/2"
                    placeholder="Mau Cari Property Dimana?" value="{{ $cari }}" id="">
                <button class="p-0 rounded m-0 bg-black text-white h-10 w-10"><i class="ti ti-search"></i></button>
            </form>
        </div>

    </div>
    <div class="max-w-6xl  p-6 sm:p-0 mx-auto mt-10 mb-10">
        {{-- @if ($cek->isEmpty())
            <div class="bg-red-200 p-5 flex items-center gap-x-3 rounded">
                <i class="ti ti-zoom-exclamation text-2xl"></i>
                <h1 class="font-medium">Oppss.. Properti Belum Tersedia</h1>
            </div>
        @endif --}}
        <div class="grid grid-cols-3 lg:grid-cols-3 mt-10 gap-4">

            @foreach ($cek as $key => $value)
                <div class="w-full bg-white drop-shadow rounded-xl">
                    <a href="{{ route('detailproperti', $value->slug) }}">
                        <img class="w-full" src="{{ asset('storage/' . $value->featured_image) }}" alt=""
                            srcset="" height="10px" style="height: 240px">
                        <div class="p-3">
                            <h1 class="text-md text-slate-500 font-bold">
                                @if ($value->tipeunit_min_harga == '' || $value->tipeunit_max_harga == '')
                                    Harga Belum Tersedia
                                @else
                                    <?= nice_number($value->tipeunit_min_harga) ?> -
                                    <?= nice_number($value->tipeunit_max_harga) ?>
                                @endif


                            </h1>
                            <h2 class="text-base text-slate-500 font-bold">{{ $value->nama_properti }}</h2>
                            <div class="flex mt-5 justify-start text-gray-500  space-x-1">
                                <div class="">
                                    <i class="ti ti-home-check"></i>
                                    {{ $value->tipeunit_count }}
                                </div> |
                                <div class="">
                                    <i class="ti ti-bed"></i>
                                    {{ $value->tipeunit_min_kamar_tidur }}-{{ $value->tipeunit_max_kamar_tidur }}
                                </div> |
                                <div class="">
                                    LT:
                                    {{ $value->tipeunit_min_luas_tanah }}-{{ $value->tipeunit_max_luas_tanah }}m<sup>2</sup>
                                </div> |
                                <div class="">
                                    LT:
                                    {{ $value->tipeunit_min_luas_bangunan }}-{{ $value->tipeunit_max_luas_bangunan }}m<sup>2</sup>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        @if ($cek->isEmpty())
            <div class="flex p-3 bg-red-200 w-full items-center gap-x-3 rounded-md">
                <i class="ti ti-alert-triangle"></i>
                <h1>Opppss.. Properti Belum Tersedia!</h1>
            </div>
        @endif
    </div>
</x-app-page-layout>
