@props(["name" , "type" , "value" , "id" , "placeholder"])
@php
    $default=[
        "name" => $name,
        "type" => $type,
        "value" => $value,
        "placeholder" => $placeholder,
        "id" => $id,
        "class"=>"w-3/4 bg-neutral-200 ps-3 py-1 focus:outline-none rounded"
    ]
@endphp
<div class="relative space-y-3">
    <input {{ $attributes($default) }}>
    @error($name)
        <p class="text-sm text-red-500 top-[-35px] absolute text-semibold">{{ $message }}</p>
    @enderror
</div>