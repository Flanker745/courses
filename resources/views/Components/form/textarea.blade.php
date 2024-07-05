@props(["name" , "type"  , "id"])
@php
    $default=[
        "name" => $name,
        "type" => $type,
        "id" => $id,
        "class"=>"w-3/4 bg-neutral-200 ps-3 py-1 focus:outline-none rounded",
        "cols"=>"30",
        "rows"=>"5"
    ]
@endphp

<div class="space-y-3">
    <textarea {{ $attributes($default) }} >{{ $slot }}</textarea>
</div>



