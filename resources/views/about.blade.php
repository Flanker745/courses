<x-layout>
    <div class="flex">
        <x-navigation />
        <div class="w-[85%]">
            <div>
                <form class="w-3/4 m-auto p-5 border-2 space-y-5  mt-5 rounded-lg" method="POST" action="/about">
                    @csrf
                    @method('PATCH')
                    <x-form.heading>About Us</x-form.heading>
                    <x-form.lable for="title" class="block">Heading</x-form.lable>
                    <x-form.input placeholder="" id="title" name="title" value="{{ $about['title'] }}"
                        type="text" />
                    <x-form.lable for="description" class="block">Description</x-form.lable>
                    <x-form.textarea id="description" type="text"
                        name="description">{{ $about['description'] }}</x-form.textarea>
                    <x-form.lable for="contact" class="block">Contact</x-form.lable>
                    <x-form.input placeholder="" id="contact" name="contact" value="{{ $about['contact'] }}"
                        type="text" />
                    <x-form.lable for="address" class="block">Address</x-form.lable>
                    <x-form.input placeholder="" id="address" name="address" value="{{ $about['address'] }}"
                        type="text" />
                    <x-form.lable for="email" class="block">E-mail</x-form.lable>
                    <x-form.input placeholder="" id="email" name="email" value="{{ $about['email'] }}"
                        type="text" />
                    <x-form.button>Submit</x-form.button>
                </form>
            </div>

        </div>
</x-layout>
