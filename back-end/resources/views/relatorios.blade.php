<x-app-layout>
    <x-slot name="header">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Relatórios') }}
                </h2>
            </div>
        </div>

    </x-slot>

    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container">
                    <div class="row py-12">

                        <div class="col-md-6 text-center">
                            <x-nav-link href="{{ route('imprimir') }}" :active="request()->routeIs('imprimir')">
                                <button class="btn btn-secondary">
                                    {{ __('Imprimir PDF') }}
                                </button>
                            </x-nav-link>
                        </div>

                        <div class="col-md-6 text-center">
                            <x-nav-link href="{{ route('visualizar') }}" :active="request()->routeIs('visualizar')" target="_blank">
                                <button class="btn btn-secondary">
                                    {{ __('Visualizar PDF') }}
                                </button>
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
