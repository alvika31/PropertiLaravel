<nav class="sticky top-0 bg-white z-10" x-data='{open: false}'>
    <div class="border-b-2 border-gray-100">
        <div class="flex justify-between px-10 py-5 items-center">
            <div class="">
                <h1 class="text-2xl font-bold">Propertiku</h1>
            </div>
            <div class="space-x-10 hidden sm:flex items-center">
                <x-nav-page-link class="text-black font-medium text-base" :active="request()->routeIs('home')">Home</x-nav-page-link>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-nav-page-link class="cursor-pointer text-black font-medium text-base">Tipe Properti <i
                                class="ti ti-chevron-down"></i></x-nav-page-link>
                    </x-slot>

                    <div class="flex flex-col">
                        <x-slot name="content">
                            @foreach ($tipe as $tipes)
                                <x-dropdown-link class="text-black font-medium text-base"><i
                                        class="ti ti-home-2 mr-2"></i>
                                    {{ $tipes->nama_tipe }}
                                </x-dropdown-link>
                            @endforeach
                        </x-slot>
                    </div>
                </x-dropdown>
                <x-nav-page-link class="text-black font-medium text-base">Harga</x-nav-page-link>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-nav-page-link class="cursor-pointer text-black font-medium text-base">Lokasi <i
                                class="ti ti-chevron-down"></i></x-nav-page-link>
                    </x-slot>

                    <div class="flex flex-col">
                        <x-slot name="content">
                            @foreach ($model as $menu)
                                <x-dropdown-link class="text-black font-medium text-base">
                                    <i class="ti ti-map-pin"></i>
                                    {{ $menu->nama_lokasi }}
                                </x-dropdown-link>
                            @endforeach




                        </x-slot>
                    </div>
                </x-dropdown>
                <x-nav-page-link class="text-black font-medium text-base">KPR</x-nav-page-link>
                <x-nav-page-link class="text-black font-medium text-base">Peta</x-nav-page-link>
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
        x-data='{menuOpen: false}'>
        <x-nav-link-mobile>Home</x-nav-link-mobile>
        <button @click="menuOpen = !menuOpen"
            class="text-left p-3 m-0 w-full hover:bg-gray-100 divide-y-2 p-3 font-medium">
            <a x-data="{ 'menuOpen: false' }">
                Tipe Properti <i class="ti ti-chevron-down"></i>
            </a>
        </button>
        <div :class="{ 'block': menuOpen, 'hidden': !menuOpen }" class="flex flex-col ml-3">
            <x-nav-link-mobile>Rumah</x-nav-link-mobile>
            <x-nav-link-mobile>Ruko</x-nav-link-mobile>
            <x-nav-link-mobile>Apartemen</x-nav-link-mobile>
        </div>
        <x-nav-link-mobile>Harga</x-nav-link-mobile>
        <x-nav-link-mobile>Lokasi</x-nav-link-mobile>
        <x-nav-link-mobile>KPR</x-nav-link-mobile>
        <x-nav-link-mobile>Peta</x-nav-link-mobile>
        <x-nav-link-mobile>Login</x-nav-link-mobile>
    </div>

</nav>
