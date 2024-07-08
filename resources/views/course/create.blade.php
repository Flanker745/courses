<x-layout>
    <div class="flex">
        <x-navigation />
        <div class="w-[85%]">
            <form class="w-3/4 m-auto p-5 border-2 space-y-5  mt-5 rounded-lg" action="/course" method="POST">
                @csrf
                <x-form.heading>{{ isset($course) ? "Edit Course" : "Add Course" }}</x-form.heading>
                <x-form.input id="title" placeholder="title" name="title" value="{{ isset($course) ? $course->title : old('title') }}" type="text" />
                <x-form.input id="description" placeholder="description" name="description" value="{{ isset($course) ? $course->description : old('description') }}"
                    type="text" />
                <x-form.input id="price" placeholder="price" name="price" value="{{ isset($course) ? $course->price : old('price') }}" type="text" />
                <x-form.input id="duration" placeholder="duration" name="duration" value="{{ isset($course) ? $course->duration : old('duration') }}" type="text" />
                <div class="flex gap-4">
                    <div class="flex gap-1">
                        <x-form.lable for="true" class="">Active</x-form.lable>
                        <x-form.input id="true" placeholder="" name="status" value="true" type="radio" />
                    </div>
                    <div class="flex gap-1">
                        <x-form.lable for="false" class="">Inactive</x-form.lable>
                        <x-form.input id="false" placeholder="" name="status" value="false" type="radio" />
                    </div>

                </div>
                <x-form.button>{{ isset($course) ? "Edit Course" : "Add Course" }}</x-form.button>
            </form>
        </div>
    </div>
</x-layout>
