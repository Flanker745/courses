<x-layout>
    <div class="flex">
        <x-navigation />
        <div class="w-[85%]">
            <form class="w-3/4 m-auto p-5 border-2 space-y-5  mt-5 rounded-lg" action="">
                <x-form.heading>Add Gallery</x-form.heading>
                <x-form.input id="title" placeholder="title" name="title" value="" type="text" />
                <x-form.input id="description" placeholder="description" name="description" value=""
                    type="text" />
                <x-form.input id="image" placeholder="" name="image" value="" type="file" />
                <x-form.select name="category">
                    <x-form.option value="">Select Category....</x-form.option>
                    <x-form.option value="1">Category 1</x-form.option>
                    <x-form.option value="2">Category 2</x-form.option>
                    <x-form.option value="3">Category 3</x-form.option>
                </x-form.select>
                <x-form.button>Add gallery</x-form.button>
            </form>
        </div>
    </div>
</x-layout>
