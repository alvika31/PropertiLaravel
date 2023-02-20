<x-app-page-layout>

    <div class="w-full bg-fixed bg-center h-48 sm:h-96 flex bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/hero.jpg') }}')">
        <div class="m-auto text-center w-full">

            <h1 class="text-white font-bold text-5xl">{{ $lokasi->nama_lokasi }}</h1>

        </div>
    </div>
    <div class="max-w-6xl  p-6 sm:p-0 mx-auto mt-10">
        @if ($cek->isEmpty())
            <div class="bg-red-200 p-5 flex items-center gap-x-3 rounded">
                <i class="ti ti-zoom-exclamation text-2xl"></i>
                <h1 class="font-medium">Oppss.. Properti Belum Tersedia</h1>
            </div>
        @endif
        <div class="grid grid-cols-3 lg:grid-cols-3 mt-10 gap-4">

            @foreach ($cek as $key => $value)
                <div class="w-full bg-white drop-shadow rounded-md">
                    <a href="{{ route('detailproperti', $value->id) }}">
                        <img class="w-full" src="{{ asset('storage/' . $value->featured_image) }}" alt=""
                            srcset="" height="10px" style="height: 240px">
                        <div class="p-3">
                            <h1 class="text-xl text-slate-500 font-bold">{{ $value->cicilan }}</h1>
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
    </div>

</x-app-page-layout>
