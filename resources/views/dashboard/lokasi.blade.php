<x-dashboard-layout>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('sweetalert::alert')
    <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
        <!-- Trigger for Modal -->
        <button type="button" @click="showModal = true"
            class="px-8 rounded-md py-2 bg-green-500 text-white font-medium"><i class="ti ti-map-pin"></i> Tambah
            Lokasi</button>

        <!-- Modal -->
        <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
            x-show="showModal" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95" x-cloak style="display: none">
            <!-- Modal inner -->
            <div class="w-1/2 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg" @click.away="showModal = false">
                <!-- Title / Close-->
                <div class="flex items-center justify-between">
                    <h5 class="mr-3 text-black max-w-none font-medium">Form Tambah Lokasi</h5>

                    <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- content -->
                <div class="border-t-2 border-gray-300 mt-4">
                    <form action="{{ route('lokasi.store') }}" method="POST" class="mt-7">
                        @csrf
                        <input type="text" name="nama_lokasi" class="w-full rounded-md h-10"
                            placeholder="Nama Lokasi" id="">
                        @error('nama_lokasi')
                            {{ $message }}
                        @enderror <br>
                        <input type="submit" value="Tambah Lokasi"
                            class="bg-purple-500 px-4 h-8 mt-5 rounded-md text-white">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="inline-block w-full rounded-lg mt-5 shadow-md">
        <table class=" border-2 w-full border-gray-100 rounded-lg">
            <tr class="rounded bg-blue-500 py-3 text-white">
                <th class="py-2">No</th>
                <th class="py-2">Nama Lokasi</th>
                <th class="py-2">Action</th>
            </tr>
            @foreach ($model as $key => $value)
                <tr class="border-y-2 border-gray-100">
                    <td class="py-3 text-center">{{ ++$key }}</td>
                    <td class="py-3 text-center">{{ $value->nama_lokasi }}</td>
                    <td class="py-3 text-center">

                        <div class="">
                            <button class="bg-green-500 mb-2 text-white px-4 py-1 font-medium rounded-md" id="btn-edit"
                                data-id="{{ $value->id }}" data-url="{{ route('lokasi.show', $value->id) }}"></i>
                                <i class="ti ti-pencil"></i> Edit
                            </button>
                            <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                                id="modal-edit" style="display: none">
                                <!-- Modal inner -->
                                <div class="w-1/2 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg">
                                    <!-- Title / Close-->
                                    <div class="flex items-center justify-between">
                                        <h5 class="mr-3 text-black max-w-none font-medium">Form Edit Lokasi</h5>

                                        <button type="button" id="btn-edit-close" class="z-50 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- content -->
                                    <div class="border-t-2 border-gray-300 mt-4">
                                        <form action="{{ route('lokasi.update', $value->id) }}" method="POST"
                                            class="mt-7">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" name="id" id="lokasi-id">
                                            <input type="text" name="nama_lokasi" id="nama-lokasi"
                                                class="w-full rounded-md h-10" value="">
                                            @error('nama_lokasi')
                                                {{ $message }}
                                            @enderror <br>
                                            <input type="submit" value="Edit Lokasi"
                                                class="bg-purple-500 px-4 h-8 mt-5 rounded-md text-white">

                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <form id="formLokasi" method="post" action="{{ route('lokasi.destroy', $value->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit"
                                class="show_confirm bg-red-500 text-white px-4 py-1 font-medium rounded-md"
                                id="delete-lokasi" data-nama="{{ $value->nama_lokasi }}"><i class="ti ti-trash"></i>
                                Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
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


        $('body').on('click', '#btn-edit', function() {
            $("#modal-edit").show();
            let lokasi_id = $(this).data('id');
            var lokasiURL = $(this).data('url');
            console.log(lokasi_id);
            console.log(lokasiURL);
            $.ajax({
                url: "/dashboard/lokasi/" + lokasi_id + "/edit",
                type: "GET",
                success: function(response) {
                    console.log(response.model[0].id);

                    $('#lokasi-id').val(response.model[0].id);
                    $('#nama-lokasi').val(response.model[0].nama_lokasi);
                }
            })
        });

        $("#btn-edit-close").click(function(event) {
            $("#modal-edit").hide();
        });
    </script>
</x-dashboard-layout>
