<x-dashboard-layout>
    @include('sweetalert::alert')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <div class="">
        <form action="{{ route('properti.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="font-medium mb-4">Nama Properti:</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="nama_properti" id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Developer:</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="nama_developer"
                        id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Cicilan(perbulan):</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="cicilan" id="">
                </div>
                <div class="w-full">
                    <p class="font-medium mb-4">Featured Image:</p>
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
            <textarea name="deskripsi_properti" class="rounded" id="deskripsi" cols="30" rows="10"></textarea>
            <p class="font-medium mb-4 mt-4">Fasilitas Properti:</p>
            <textarea name="fasilitas" class="rounded" id="" cols="30" rows="10"></textarea>
            <p class="font-medium mb-4 mt-4">Deskripsi Lokasi:</p>
            <textarea name="deskripsi_lokasi" class="rounded" id="" cols="30" rows="10"></textarea>
            <p class="font-medium mb-4 mt-4">Gallery Properti:</p>
            <input type="file" name="gallery[]" multiple><br>
            <input type="submit" value="Simpan Properti"
                class="px-8 mt-5 rounded-md py-2 bg-green-500 text-white font-medium">
        </form>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('deskripsi_properti');
        CKEDITOR.replace('fasilitas');
        CKEDITOR.replace('deskripsi_lokasi');
    </script>
</x-dashboard-layout>
