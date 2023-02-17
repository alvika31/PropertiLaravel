<x-dashboard-layout>
    @include('sweetalert::alert')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <div class="">
        <form action="{{ route('tipe-unit.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="w-full">
                    <p class="font-medium mb-4">Nama Properti:</p>
                    <input type="hidden" name="property_id" value="{{ $model->id }}">
                    <input type="text" disabled value="{{ $model->nama_properti }}"
                        class="w-full rounded-md border-gray-300" name="featured_image" id="">
                </div>
                <div class="w-full">
                    <p class="font-medium mb-4">Image Tipe Unit:</p>
                    <input type="file" class="w-full rounded-md border-gray-300" name="image_tipe" id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Nama Tipe Unit:</p>
                    <input type="text" class="w-full rounded-md border-gray-300" name="nama_tipe" id="">
                </div>
                <div class="">
                    <p class="font-medium mb-4">Harga:</p>
                    <div class="flex items-center justify-center">
                        <div class="w-10 border py-2 rounded-l-md pl-2 bg-gray-200 border-gray-300">Rp.</div>
                        <input type="text" class="w-full rounded-r-md border-gray-300" name="harga" id="test1"
                            onkeyup="test()">
                    </div>
                </div>
                <div>
                    <p class="font-medium mb-4">Kamar Tidur:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" name="kamar_tidur" id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Luas Tanah:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" name="luas_tanah" id="">
                </div>
                <div>
                    <p class="font-medium mb-4">Luas Bangunan:</p>
                    <input type="number" class="w-full rounded-md border-gray-300" name="luas_bangunan" id="">
                </div>

            </div>
            <input type="submit" onclick="removeKeyUp()" value="Simpan Tipe Unit"
                class="px-8 mt-5 rounded-md py-2 bg-green-500 text-white font-medium">
        </form>
    </div>
    <script>
        const hargaChange = document.getElementById('test1');

        function addCommas(str) {
            return str.replace(/^0+/, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function removeKeyUp() {
            hargaChange.removeAttribute("onkeyup");
        }

        function test() {
            document.getElementById('test1').value = addCommas(hargaChange.value);

            test1.oninput = function() {
                document.getElementById('test2').value = test1.value
            }

        }
    </script>
</x-dashboard-layout>
