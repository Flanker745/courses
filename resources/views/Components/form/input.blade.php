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
<div class="space-y-3">
    <input {{ $attributes($default) }}>
</div>