<div
    x-data="{
        initPickr: function (element) {
            
        }
    }"
    x-init="
        let pickr = Pickr.create({{ json_encode($options()) }});
        let input = document.getElementById('{{ $id . '-input' }}');

        pickr.on('save', function (color) {
            let currentColor = color ? color.toHEXA().toString() : '';

            input.setAttribute('value', currentColor);
            $root.setAttribute('title', currentColor);
        });
    "
    {{ $attributes->merge(['title' => $value]) }}
>
    <div id="{{ $id }}"></div>

    <input
        id="{{ $id }}-input"
        name="{{ $name }}"
        type="hidden"
        @if($value)value="{{ $value }}"@endif
    />
</div>