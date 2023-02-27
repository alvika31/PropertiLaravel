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

            <h1 class="text-white font-bold text-2xl md:text-5xl lg:text-5xl">Tipe Properti:
                {{ $tipeproperti->nama_tipe }}</h1>

        </div>
    </div>
    <form action="{{ route('tipeproperti_filter', $tipeproperti->nama_tipe) }}" method="GET">
        <div class="max-w-6xl flex flex-col md:flex-row lg:flex-row justify-center gap-x-3 p-5 sm:p-0 mx-auto mt-10">
            <div class="w-full md:w-1/3 lg:w-1/3 flex items-center ring-gray-300 ring-1 rounded px-3">
                <i class="ti ti-building"></i>
                <input type="text" name="cari" value="{{ $inputcari }}"
                    class="w-full rounded border-none focus:outline-none focus:border-none focus:ring-0"
                    placeholder="Cari Cluster">
            </div>

            <div
                class="w-full md:w-1/3 lg:w-1/3 flex items-center my-4 md:my-0 lg:my-0 ring-gray-300 ring-1 rounded px-3">
                <i class="ti ti-coin "></i>
                <select name="harga" id="" onchange="this.form.submit()"
                    class="w-full rounded border-none focus:outline-none focus:border-none focus:ring-0">
                    <option value="">Pilih Harga</option>

                    <option value="<1M" {{ $inputharga == '<1M' ? 'selected' : '' }}>
                        <1M </option>
                    <option value="1-2M" {{ $inputharga == '1-2M' ? 'selected' : '' }}>1-2M</option>
                    <option value="2-3M" {{ $inputharga == '2-3M' ? 'selected' : '' }}>2-3M</option>
                    <option value="3-5M" {{ $inputharga == '3-5M' ? 'selected' : '' }}>3-5M</option>
                    <option value=">5M" {{ $inputharga == '>5M' ? 'selected' : '' }}>>5M</option>

                </select>
            </div>
            <div class="">
                <input type="submit" value="Filter" class="p-3 bg-blue-500 text-white rounded-xl cursor-pointer">
            </div>
        </div>
    </form>

    <div class="max-w-6xl p-6 sm:p-0 mx-auto mt-0 lg:mt-10 md:mt-10 mb-10">
        {{-- @if ($cek->isEmpty())
            <div class="bg-red-200 p-5 flex items-center gap-x-3 rounded">
                <i class="ti ti-zoom-exclamation text-2xl"></i>
                <h1 class="font-medium">Oppss.. Properti Belum Tersedia</h1>
            </div>
        @endif --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 mt-10 gap-4">

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
