<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="mt-4">
        <div class="max-w-7xl mx-auto overflow-hidden sm:rounded-lg">
            <div class="grid grid-cols-2 gap-4 mb-4 ">
                <div class="flex flex-col justify-between max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow max-h-max">
                    <h5 class="text-7xl font-bold tracking-tight text-gray-900 py-3">
                        {{ $total_tagihan }}
                    </h5>
                    <p class="font-normal text-gray-500">
                        Tagihan yang belum dibayar
                    </p>
                </div>

                <div class="block max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="mx-auto my-2">
                        @if ($tagihan_terdekat)
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 py-3">
                                {{ $tagihan_terdekat->nama }}
                            </h5>
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 py-3">
                                {{ $tagihan_terdekat->tanggal_tagihan }}
                            </h5>
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 py-3">
                                {{ $tagihan_terdekat->total_tagihan }}
                            </h5>
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 py-3">
                                {{ $tagihan_terdekat->status }}
                            </h5>
                           @else
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 py-3">
                                Tidak ada tagihan
                            </h5> 
                        @endif
                    </div>
                    <p class="font-normal text-gray-500">
                        Tagihan terdekat
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
