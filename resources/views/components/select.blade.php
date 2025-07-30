@props([
    'label',
    'name',
    'options' => [],
    'required' => false,
    'readonly' => false,
    'disabled' => false,
    'placeholder' => '-- Pilih --',
    'helpText' => null,
    'value' => null,
])

@php
    $hasError = $errors->has($name);
    $isDisabled = $disabled || $readonly;
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

    <select id="{{ $name }}" name="{{ $name }}" @if ($readonly) readonly @endif
        @if ($required) required @endif @if ($disabled) disabled @endif
        class="{{ collect([
            'w-full px-3.5 py-2.5 border rounded-lg shadow-sm transition duration-150 ease-in-out',
            $isDisabled ? 'bg-gray-50 cursor-not-allowed text-gray-500' : 'bg-white text-gray-700',
            $hasError
                ? 'border-rose-300 text-rose-900 focus:ring-rose-500 focus:border-rose-500'
                : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500',
        ])->implode(' ') }}">

        <option value="">{{ $placeholder }}</option>
        @foreach ($options as $key => $text)
            <option value="{{ is_int($key) ? $text : $key }}" @selected(old($name, $value) == (is_int($key) ? $text : $key))>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="mt-1.5 text-sm text-rose-600">{{ $message }}</p>
    @enderror

    @if ($helpText)
        <p class="mt-1.5 text-xs text-gray-500">{{ $helpText }}</p>
    @endif
</div>
