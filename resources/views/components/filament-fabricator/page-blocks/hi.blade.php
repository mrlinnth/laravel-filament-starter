@props(['name'])
<div {{ $attributes->class('px-4 py-4 md:py-8') }}>
    <div class="max-w-7xl mx-auto">
        Hi {{ $name }}
    </div>
</div>
