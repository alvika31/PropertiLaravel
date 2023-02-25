<x-app-page-layout>

    <div class="w-full bg-fixed bg-center h-48 sm:h-96 flex bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/hero.jpg') }}')">
        <div class="m-auto text-center w-full">

            <h1 class="text-white font-bold text-5xl">{{ $lokasi->nama_lokasi }}</h1>

        </div>
    </div>
    <form action="{{ route('lokasi_filter', $lokasi->slug) }}">
        <div class="max-w-6xl flex gap-x-3 p-6 sm:p-0 mx-auto mt-10">
            <div class="w-1/3 flex items-center ring-gray-300 ring-1 rounded px-3">
                <i class="ti ti-building"></i>
                <input type="text" class="w-full rounded border-none focus:outline-none focus:border-none focus:ring-0"
                    placeholder="Cari Cluster">
            </div>
            <div class="w-1/3 flex items-center ring-gray-300 ring-1 rounded px-3">
                <i class="ti ti-building-skyscraper"></i>
                <select name="tipeproperti" onchange="this.form.submit()" id=""
                    class="w-full rounded border-none focus:outline-none focus:border-none focus:ring-0">
                    <option class="w-full" value="">Tipe Properti</option>
                    @foreach ($tipeProperti as $tipe)
                        <option value="{{ $tipe->slug }}" class="w-full"
                            {{ $inputtipeproperti == $tipe->slug ? 'selected' : '' }}>
                            {{ $tipe->nama_tipe }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="w-1/3 flex items-center ring-gray-300 ring-1 rounded px-3">
                <i class="ti ti-coin "></i>
                <select name="harga" id="" onchange="this.form.submit()"
                    class="w-full rounded border-none focus:outline-none focus:border-none focus:ring-0">
                    <option>Pilih Harga</option>
                    @if ($inputharga != '')
                        <option value="<1M" {{ $inputharga == '<1M' ? 'selected' : '' }}>
                            <1M </option>
                        <option value="1-2M" {{ $inputharga == '1-2M' ? 'selected' : '' }}>1-2M</option>
                        <option value="2-3M" {{ $inputharga == '2-3M' ? 'selected' : '' }}>2-3M</option>
                        <option value="3-5M" {{ $inputharga == '3-5M' ? 'selected' : '' }}>3-5M</option>
                        <option value=">5M"> {{ $inputharga == '>5M' ? 'selected' : '' }}>5M</option>
                    @endif
                </select>
            </div>
        </div>
    </form>
    <div class="max-w-6xl  p-6 sm:p-0 mx-auto mt-10">
        {{-- @if ($cek->isEmpty())
            <div class="bg-red-200 p-5 flex items-center gap-x-3 rounded">
                <i class="ti ti-zoom-exclamation text-2xl"></i>
                <h1 class="font-medium">Oppss.. Properti Belum Tersedia</h1>
            </div>
        @endif --}}
        <div class="grid grid-cols-3 lg:grid-cols-3 mt-10 gap-4 mb-10">

            @foreach ($cek as $key => $value)
                <div class="w-full bg-white drop-shadow rounded-md">
                    <a href="{{ route('detailproperti', $value->slug) }}">
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
