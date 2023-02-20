<x-dashboard-layout>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('sweetalert::alert')
    <div class="mt-5">
        <a href="{{ route('properti.create') }}" class="px-8 rounded-md py-2 bg-green-500 text-white font-medium"><i
                class="ti ti-map-pin"></i>
            Tambah
            Properti</a>
    </div>
    <div class="grid grid-cols-4 lg:grid-cols-4 mt-10 gap-4">
        @foreach ($model as $key => $value)
            <div class="w-full bg-white drop-shadow rounded-md">
                <a href="{{ route('properti.show', $value->id) }}">
                    <img src="{{ asset('storage/' . $value->featured_image) }}" alt="" srcset="">
                    <div class="p-3">
                        <h1 class="text-lg font-medium text-gray-600">{{ $value->nama_properti }}</h1>
                        <h1 class="text-sm text-gray-600">Developer: {{ $value->nama_developer }}</h1>
                        <h1 class="text-sm text-gray-600">Jumlah Tipe Unit: {{ $value->tipeunit_count }}</h1>
                        <h1 class="text-sm text-gray-600">Jumlah Tipe Unit: {{ $value->lokasis->nama_lokasi }}</h1>
                        <div class="flex mt-5 gap-1">
                            <a href="{{ route('properti.show', $value->id) }}"
                                class="p-2 rounded-md bg-blue-500 text-white"><i class="ti ti-id"></i></a>
                            <a href="{{ route('properti.edit', $value->id) }}"
                                class="p-2 rounded-md bg-green-500 text-white"><i class="ti ti-edit"></i></i></a>
                            <form id="formLokasi" method="post" action="{{ route('properti.destroy', $value->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit"
                                    class="show_confirm bg-red-500 text-white p-2 font-medium rounded-md"
                                    id="delete-lokasi" data-nama="{{ $value->nama_properti }}"><i
                                        class="ti ti-trash"></i>
                                </button>
                            </form>
                            <a href="{{ route('addtipeunit', $value->id) }}"
                                class="p-2 rounded-md bg-yellow-500 text-white"><i class="ti ti-plus"></i>Tambah Tipe
                                unit</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


    <script>
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var namaLokasi = $(this).attr('data-nama');
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Apakah anda yakin ingin menghapus lokasi " + namaLokasi + "",
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
</x-dashboard-layout>
