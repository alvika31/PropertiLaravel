<div class="" x-data="{ open: false }">
    <div class="absolute text-slate-800 flex w-full h-12 items-center bg-gray-100 justify-end">
        <button @click="open = !open">
            <i class="ti ti-menu-2 w-16 block sm:hidden"></i>
        </button>
        <a href="{{ url('/') }}">
            <h1 class="font-medium text-sm mr-10"><i class="ti ti-eye"></i> {{ __('View Website') }}</h1>
        </a>
        <div class="w-20">

            <h1 class="font-medium text-sm"><i class="ti ti-user"></i> {{ Auth::user()->name }}</h1>
        </div>
    </div>
    <aside :class="{ 'block': open, 'hidden': !open }" x-transition.opacity x-transition:enter.duration.500ms
        class="fixed w-1/2 sm:w-1/5 lg:w-60 bg-white border-r-2 border-gray-200 px-8 py-10 hidden sm:block">
        <h1 class="text-center text-2xl font-bold text-gray-800">Propertyku</h1>
        <div class="flex my-20 flex-col">
            <a href="{{ route('dashboard') }}">
                <div
                    class="{{ request()->is('dashboard') ? 'rounded-md drop-shadow-md bg-black text-white' : 'rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white' }}">
                    <div class="w-full flex items-center  p-3 space-x-3 justify-start">
                        <i class="ti ti-dashboard"></i>
                        <h1 class="text-base font-medium">Dashboard</h1>
                    </div>
                </div>
            </a>
            <a href="{{ route('properti.index') }}">
                <div
                    class="{{ request()->routeIs('properti.index') || request()->routeIs('properti.create') || request()->routeIs('properti.show') ? 'rounded-md drop-shadow-md bg-black text-white' : 'rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white' }}">
                    <div class="w-full flex items-center p-3 space-x-3 justify-start">
                        <i class="ti ti-building-community"></i>
                        <h1 class="text-base font-medium">Properti</h1>
                    </div>
                </div>
            </a>
            <a href="{{ route('tipe-properti.index') }}">
                <div
                    class="{{ request()->routeIs('tipe-properti.index') ? 'rounded-md drop-shadow-md bg-black text-white' : 'rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white' }}">
                    <div class="w-full flex items-center p-3 space-x-3 justify-start">
                        <i class="ti ti-building-warehouse"></i>
                        <h1 class="text-base font-medium">Tipe Properti</h1>
                    </div>
                </div>
            </a>
            <a href="{{ route('lokasi.index') }}">
                <div
                    class="{{ request()->routeIs('lokasi.index') ? 'rounded-md drop-shadow-md bg-black text-white' : 'rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white' }}">
                    <div class="w-full flex items-center p-3 space-x-3 justify-start">
                        <i class="ti ti-map-pin"></i>
                        <h1 class="text-base font-medium">Lokasi</h1>
                    </div>
                </div>
            </a>
            <div class="rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white">
                <div class="w-full flex items-center p-3 space-x-3 justify-start">
                    <i class="ti ti-user"></i>
                    <h1 class="text-base font-medium">User</h1>
                </div>
            </div>
            <div class="rounded-md drop-shadow-md bg-white mt-20 bg-red-700 text-white">
                <div class="w-full flex items-center p-3 space-x-3 justify-start">
                    <i class="ti ti-logout"></i>
                    <h1 class="text-base font-medium">Logout</h1>
                </div>
            </div>
            <div class="rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white">
                <div class="w-full flex items-center p-3 space-x-3 justify-start">
                    <i class="ti ti-user-circle"></i>
                    <h1 class="text-base font-medium">My Profile</h1>
                </div>
            </div>
        </div>
    </aside>
</div>
