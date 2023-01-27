<x-dashboard-layout>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('sweetalert::alert')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <div class="">
        <form action="{{ route('properti.update', $model->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="font-medium mb-4">Nama Properti:</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="nama_properti" id=""
                        value="{{ $model->nama_properti }}">
                </div>
                <div>
                    <p class="font-medium mb-4">Developer:</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="nama_developer" id=""
                        value="{{ $model->nama_developer }}">
                </div>
                <div>
                    <p class="font-medium mb-4">Cicilan(perbulan):</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="cicilan" id=""
                        value="{{ $model->cicilan }}">
                </div>
                <div class="w-full">
                    <p class="font-medium mb-4">Featured Image:</p>
                    <img src="{{ asset('storage/' . $model->featured_image) }}" class="mb-2" width="100"
                        alt="">
                    {{-- <input type="text" name="featured_image" id=""> --}}
                    <input type="file" class="w-full rounded-md border-gray-300" name="featured_image"
                        id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Lokasi:</p>
                    <select class="w-full rounded-md border-gray-300" name="lokasi_id" id="">
                        @foreach ($lokasi as $lokasis)
                            <option value="{{ $lokasis->id }}">{{ $lokasis->nama_lokasi }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <p class="font-medium mb-4">Tipe Properti:</p>
                    <select class="w-full rounded-md border-gray-300" name="tipe_properti_id" id="">
                        @foreach ($tipe as $tipes)
                            <option value="{{ $tipes->id }}">{{ $tipes->nama_tipe }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <p class="font-medium mb-4 mt-4">Deskripsi Properti:</p>
            <textarea name="deskripsi_properti" class="rounded" id="deskripsi" cols="30" rows="10">{{ $model->deskripsi_properti }}</textarea>
            <p class="font-medium mb-4 mt-4">Fasilitas Properti:</p>
            <textarea name="fasilitas" class="rounded" id="" cols="30" rows="10">{{ $model->fasilitas }}</textarea>
            <p class="font-medium mb-4 mt-4">Deskripsi Lokasi:</p>
            <textarea name="deskripsi_lokasi" class="rounded" id="" cols="30" rows="10">{{ $model->deskripsi_lokasi }}</textarea>
            <p class="font-medium mb-4 mt-4">Gallery Properti:</p>

            <input type="file" class="block" name="gallery[]" multiple><br>
            <input type="submit" value="Simpan Properti"
                class="px-8 mt-5 rounded-md py-2 bg-green-500 text-white font-medium">
        </form>
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
                        <h1 class="text-xl font-medium text-gray-600">Rp. {{ $tipeunit->harga }}</h1>
                        <div class="flex justify-items-center gap-4">
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
                    </div>
                    <form id="formLokasi" method="post" action="{{ route('tipe-unit.destroy', $tipeunit->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit"
                            class="show_confirm2 bg-red-500 text-white p-2 font-medium rounded-md absolute top-0"
                            id="delete-lokasi" data-nama="{{ $tipeunit->nama_tipe }}"><i class="ti ti-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('tipe-unit.edit', $tipeunit->id) }}"
                        class="bg-green-500 text-white p-2 font-medium rounded-md absolute top-0 left-10"><i
                            class="ti ti-edit"></i>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="grid grid-cols-2">
            @foreach ($model->gallery as $gallerys)
                <div class="">
                    <form action="{{ route('deletegallery', $gallerys->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="show_confirm" type="submit">
                            <div class="p-3 bg-red-500 text-white rounded-md absolute z-20">
                                <i class="ti ti-trash-x"></i>
                            </div>
                        </button>
                    </form>
                    <img src="{{ asset($gallerys->url) }}" class="relativ w-full" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <script>
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Apakah anda yakin ingin menghapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });

        $('.show_confirm2').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Apakah anda yakin ingin menghapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('deskripsi_properti');
        CKEDITOR.replace('fasilitas');
        CKEDITOR.replace('deskripsi_lokasi');
    </script>
</x-dashboard-layout>
