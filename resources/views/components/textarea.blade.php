@props([
    'label',
    'name',
    'rows' => 3,
    'required' => false,
    'readonly' => false,
    'disabled' => false,
    'placeholder' => '',
    'helpText' => null,
    'value' => null,
])

@php
    $hasError = $errors->has($name);
    $isReadonly = $readonly || $disabled;
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

    <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}"
        @if ($required) required @endif @if ($isReadonly) readonly @endif
        @if ($disabled) disabled @endif
        class="{{ collect([
            'w-full px-3.5 py-2.5 border rounded-lg shadow-sm placeholder-gray-400 transition duration-150 ease-in-out',
            $isReadonly ? 'bg-gray-50 cursor-not-allowed text-gray-500' : '',
            $hasError
                ? 'border-rose-300 text-rose-900 focus:ring-rose-500 focus:border-rose-500'
                : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500',
        ])->implode(' ') }}">{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="mt-1.5 text-sm text-rose-600">{{ $message }}</p>
    @enderror

    @if ($helpText)
        <p class="mt-1.5 text-xs text-gray-500">{{ $helpText }}</p>
    @endif
</div>
