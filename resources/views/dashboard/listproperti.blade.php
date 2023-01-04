<x-dashboard-layout>
    @include('sweetalert::alert')
    <div class="mt-5">
        <a href="{{ route('properti.create') }}" class="px-8 rounded-md py-2 bg-green-500 text-white font-medium"><i
                class="ti ti-map-pin"></i>
            Tambah
            Properti</a>
    </div>
    <div class="inline-block w-full rounded-lg mt-5 shadow-lg">
        <table class=" border-2 w-full border-gray-100 rounded-lg">
            <tr class="rounded bg-blue-500 py-3 text-white">
                <th class="py-2">No</th>
                <th class="py-2">Nama Properti</th>
                <th class="py-2">Nama Developer</th>
                <th class="py-2">Featured Image</th>
                <th class="py-2">Action</th>
            </tr>
            @foreach ($model as $key => $value)
                <tr>
                    <td class="py-3 text-center">{{ ++$key }}</td>
                    <td class="py-3 text-center">{{ $value->nama_properti }}</td>
                    <td class="py-3 text-center">{{ $value->nama_developer }}</td>
                    <td class="py-3 text-center">
                        <img width="100" class="text-center" src="{{ asset('storage/' . $value->featured_image) }}"
                            alt="">
                        <div class="" class="text-center"></div>
                    </td>
                    <td class="py-3 text-center">
                        <a href="{{ route('properti.show', $value->id) }}"
                            class="p-2 rounded-md bg-blue-500 text-white"><i class="ti ti-id"></i></a>
                        <a href="{{ route('properti.edit', $value->id) }}"
                            class="p-2 rounded-md bg-green-500 text-white"><i class="ti ti-edit"></i></i></a>
                        <button href="" class="p-2 rounded-md bg-red-500 text-white"><i
                                class="ti ti-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-dashboard-layout>
