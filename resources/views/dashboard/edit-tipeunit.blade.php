<x-dashboard-layout>
    @include('sweetalert::alert')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <div class="">
        <form action="{{ route('tipe-unit.update', $model->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <p class="font-medium mb-4">Nama Tipe Unit:</p>
                    <input type="hidden" class="w-full rounded-md border-gray-300" name="property_id" id=""
                        value="{{ $model->propertis->id }}">

                    <input type="text" class="w-full rounded-md border-gray-300" name="nama_tipe" id=""
                        value="{{ $model->nama_tipe }}">
                </div>
                <div>
                    <p class="font-medium mb-4">Harga:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" name="harga" id=""
                        value="{{ $model->harga }}">
                </div>
                <div>
                    <p class="font-medium mb-4">Kamar Tidur:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" name="kamar_tidur" id=""
                        value="{{ $model->kamar_tidur }}">
                </div>
                <div>
                    <p class="font-medium mb-4">Luas Tanah:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" name="luas_tanah"
                        value="{{ $model->luas_tanah }}" id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Luas Bangunan:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" value="{{ $model->luas_bangunan }}"
                        name="luas_bangunan" id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Gambar:</p>
                    <input type="file" class="w-full rounded-md border-gray-300" value="{{ $model->luas_bangunan }}"
                        name="image_tipe" id="">
                    <img src="{{ asset('storage/' . $model->image_tipe) }}" width="200px" height="200px"
                        alt="">
                </div>

            </div>
            <input type="submit" value="Simpan Tipe Unit"
                class="px-8 mt-5 rounded-md py-2 bg-green-500 text-white font-medium">
        </form>
    </div>
</x-dashboard-layout>
