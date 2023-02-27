<nav class="sticky top-0 bg-white z-10" x-data='{open: false}'>
    <div class="border-b-2 border-gray-100">
        <div class="flex justify-between px-10 py-5 items-center">
            <div class="">
                <h1 class="text-2xl font-bold">Propertiku</h1>
            </div>
            <div class="space-x-10 hidden sm:flex items-center">
                <x-nav-page-link class="text-black font-medium text-base" href="{{ url('/') }}" :active="request()->routeIs('page.index')">
                    Home</x-nav-page-link>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-nav-page-link class="cursor-pointer text-black font-medium text-base" :active="request()->routeIs('tipeproperti_filter')">Tipe
                            Properti <i class="ti ti-chevron-down"></i></x-nav-page-link>
                    </x-slot>

                    <div class="flex flex-col">
                        <x-slot name="content">
                            @foreach ($tipe as $tipes)
                                @php
                                    $low = Str::of($tipes->nama_tipe)->lcfirst();
                                @endphp
                                <x-dropdown-link class="text-black font-medium text-base"
                                    href="{{ route('tipeproperti_filter', $tipes->slug) }}"><i
                                        class="ti ti-home-2 mr-2"></i>
                                    {{ $tipes->nama_tipe }}
                                </x-dropdown-link>
                            @endforeach
                        </x-slot>
                    </div>
                </x-dropdown>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-nav-page-link class="cursor-pointer text-black font-medium text-base" :active="request()->routeIs('harga_filter')">
                            Harga<i class="ti ti-chevron-down"></i></x-nav-page-link>
                    </x-slot>
                    <div class="flex flex-col">
                        <x-slot name="content">

                            <x-dropdown-link class="text-black font-medium text-base"
                                href="{{ route('harga_filter', '<1M') }}"><i class="ti ti-premium-rights mr-2"></i>
                                Di bawah 1 M
                            </x-dropdown-link>
                            <x-dropdown-link class="text-black font-medium text-base"
                                href="{{ route('harga_filter', '1M-2M') }}"><i class="ti ti-premium-rights mr-2"></i>
                                1 M - 2 M
                            </x-dropdown-link>
                            <x-dropdown-link class="text-black font-medium text-base"
                                href="{{ route('harga_filter', '2M-3M') }}"><i class="ti ti-premium-rights mr-2"></i>
                                2 M - 3 M
                            </x-dropdown-link>
                            <x-dropdown-link class="text-black font-medium text-base"
                                href="{{ route('harga_filter', '3M-5M') }}"><i class="ti ti-premium-rights mr-2"></i>
                                3 M - 5 M
                            </x-dropdown-link>
                            <x-dropdown-link class="text-black font-medium text-base"
                                href="{{ route('harga_filter', '>5M') }}"><i class="ti ti-premium-rights mr-2"></i>
                                5 M ke atas
                            </x-dropdown-link>

                        </x-slot>
                    </div>
                </x-dropdown>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-nav-page-link class="cursor-pointer text-black font-medium text-base" :active="request()->routeIs('lokasi_filter')">
                            Lokasi <i class="ti ti-chevron-down"></i></x-nav-page-link>
                    </x-slot>

                    <div class="flex flex-col">
                        <x-slot name="content">
                            @foreach ($model as $menu)
                                @php
                                    $slugLokasi = Str::of($menu->nama_lokasi)->slug('-');
                                @endphp
                                <x-dropdown-link class="text-black font-medium text-base"
                                    href="{{ route('lokasi_filter', $slugLokasi) }}">
                                    <i class="ti ti-map-pin"></i>
                                    {{ $menu->nama_lokasi }}
                                </x-dropdown-link>
                            @endforeach




                        </x-slot>
                    </div>
                </x-dropdown>

                @auth
                    <a href="{{ url('/login') }}" class="rounded bg-blue-500 px-10 py-2 text-white">Dashboard</a>
                @endauth
                @guest

                    <a href="{{ url('/login') }}" class="rounded bg-blue-500 px-10 py-2 text-white">Login</a>
                @endguest

            </div>
            <div class="flex sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <i class="ti ti-menu-2" :class="{ 'hidden': open, 'inline-flex': !open }"></i>
                    <i class="ti ti-medical-cross" :class="{ 'hidden': !open, 'inline-flex': open }"></i>
                </button>

            </div>


        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }"
        class="flex flex-col drop-shadown-sm rounded bg-white border-y-2 border-gray-200 hidden sm:hidden"
        x-data='{menuTipe: false, menuHarga: false, menuLokasi: false}'>
        <x-nav-link-mobile href="{{ url('/') }}" :active="request()->routeIs('page.index')">Home</x-nav-link-mobile>
        <button @click="menuTipe = !menuTipe"
            class="text-left p-3 m-0 w-full hover:bg-gray-100 divide-y-2 p-3 font-medium"
            :active="request() - > routeIs('tipeproperti_filter')">
            <a x-data="{ 'menuTipe: false' }">
                Tipe Properti <i class="ti ti-chevron-down"></i>
            </a>
        </button>
        <div :class="{ 'block': menuTipe, 'hidden': !menuTipe }" class="flex flex-col ml-3">
            @foreach ($tipe as $tipes)
                @php
                    $low = Str::of($tipes->nama_tipe)->lcfirst();
                @endphp
                <x-nav-link-mobile href="{{ route('tipeproperti_filter', $tipes->slug) }}"><i
                        class="ti ti-home-2 mr-2"></i> {{ $tipes->nama_tipe }}</x-nav-link-mobile>
                {{-- <x-dropdown-link class="text-black font-medium text-base"
                    href="{{ route('tipeproperti_filter', $tipes->slug) }}"><i class="ti ti-home-2 mr-2"></i>
                    {{ $tipes->nama_tipe }}
                </x-dropdown-link> --}}
            @endforeach
            {{-- <x-nav-link-mobile>Rumah</x-nav-link-mobile>
            <x-nav-link-mobile>Ruko</x-nav-link-mobile>
            <x-nav-link-mobile>Apartemen</x-nav-link-mobile> --}}
        </div>
        <x-nav-link-mobile @click="menuHarga = !menuHarga" x-data="{ 'menuHarga: false' }" :active="request()->routeIs('harga_filter')">Harga<i
                class="ti ti-chevron-down"></i>
        </x-nav-link-mobile>
        <div :class="{ 'block': menuHarga, 'hidden': !menuHarga }" class="flex flex-col ml-3">
            <x-nav-link-mobile class="text-black font-medium text-base" href="{{ route('harga_filter', '<1M') }}"><i
                    class="ti ti-premium-rights mr-2"></i>
                Di bawah 1 M
            </x-nav-link-mobile>
            <x-nav-link-mobile class="text-black font-medium text-base" href="{{ route('harga_filter', '1M-2M') }}"><i
                    class="ti ti-premium-rights mr-2"></i>
                1 M - 2 M
            </x-nav-link-mobile>
            <x-nav-link-mobile class="text-black font-medium text-base" href="{{ route('harga_filter', '2M-3M') }}"><i
                    class="ti ti-premium-rights mr-2"></i>
                2 M - 3 M
            </x-nav-link-mobile>
            <x-nav-link-mobile class="text-black font-medium text-base" href="{{ route('harga_filter', '3M-5M') }}"><i
                    class="ti ti-premium-rights mr-2"></i>
                3 M - 5 M
            </x-nav-link-mobile>
            <x-nav-link-mobile class="text-black font-medium text-base" href="{{ route('harga_filter', '>5M') }}"><i
                    class="ti ti-premium-rights mr-2"></i>
                5 M ke atas
            </x-nav-link-mobile>
        </div>
        <x-nav-link-mobile @click="menuLokasi = !menuLokasi" x-data="{ 'menuLokasi: false' }" :active="request()->routeIs('lokasi_filter')">Lokasi<i
                class="ti ti-chevron-down"></i>
        </x-nav-link-mobile>
        <div :class="{ 'block': menuLokasi, 'hidden': !menuLokasi }" class="flex flex-col ml-3">
            @foreach ($model as $menu)
                @php
                    $slugLokasi = Str::of($menu->nama_lokasi)->slug('-');
                @endphp
                <x-nav-link-mobile class="text-black font-medium text-base"
                    href="{{ route('lokasi_filter', $slugLokasi) }}">
                    <i class="ti ti-map-pin"></i>
                    {{ $menu->nama_lokasi }}
                </x-nav-link-mobile>
            @endforeach

        </div>
        @auth
            <x-nav-link-mobile href="{{ url('/login') }}">Dashboard</x-nav-link-mobile>
            <a href="{{ url('/login') }}" class="rounded bg-blue-500 px-10 py-2 text-white">Dashboard</a>
        @endauth
        @guest
            <x-nav-link-mobile href="{{ url('/login') }}">Login</x-nav-link-mobile>

        @endguest

    </div>

</nav>
