@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-center text-red-600">{{ __('Ops, parece que algo deu errado!') }}</div>
        <div class="font-medium mt-2 text-grey-600">{{ __('Favor,  verifique os dados e tente novamente!') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                {{-- <li>{{ $error }}</li> --}}
            @endforeach
        </ul>
    </div>
@endif
