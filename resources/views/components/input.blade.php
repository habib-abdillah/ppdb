@props([
    'label',
    'name',
    'type' => 'text',
    'value' => '',
    'required' => false,
    'readonly' => false,
    'disabled' => false,
    'placeholder' => '',
    'icon' => null,
    'helpText' => null,
])

@php
    $hasError = $errors->has($name);
@endphp

<div class="mb-4">
    <label for="{{ $name }}" @class([
        'text-sm font-medium text-gray-700 mb-1.5',
        'flex items-center justify-between' => $required,
    ])>
        {{ $label }}
        @if ($required)
            <span class="text-xs font-normal text-rose-500">Required</span>
        @endif
    </label>

    <div class="relative">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
            value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}"
            @if ($readonly) readonly @endif @if ($required) required @endif
            @if ($disabled) disabled @endif
            {{ $attributes->merge([
                'class' => collect([
                    'w-full px-3.5 py-2.5 border rounded-lg shadow-sm placeholder-gray-400 transition duration-150 ease-in-out',
                    $readonly || $disabled ? 'bg-gray-50 cursor-not-allowed' : '',
                    $hasError
                        ? 'border-rose-300 text-rose-900 focus:ring-rose-500 focus:border-rose-500'
                        : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500',
                ])->implode(' '),
            ]) }}>

        @if ($icon)
            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                {!! $icon !!}
            </div>
        @endif
    </div>

    @error($name)
        <p class="mt-1.5 text-sm text-rose-600">{{ $message }}</p>
    @enderror

    @if ($helpText)
        <p class="mt-1.5 text-xs text-gray-500">{{ $helpText }}</p>
    @endif
</div>
