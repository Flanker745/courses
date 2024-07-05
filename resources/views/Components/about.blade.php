<div>
    <form class="w-3/4 m-auto p-5 border-2 space-y-5  mt-5 rounded-lg" action="">
        <x-form.heading>About Us</x-form.heading>
        <x-form.lable for="heading" class="block">Heading</x-form.lable>
        <x-form.input placeholder="" id="heading" name="heading" value="try" type="text" />
        <x-form.lable for="paragraph" class="block">Paragraph</x-form.lable>
        <x-form.textarea id="paragraph" type="text" name="paragraph">Lorem libero, maiores</x-form.textarea>
        <x-form.lable for="contact" class="block">Contact</x-form.lable>
        <x-form.input placeholder="" id="contact" name="contact" value="try" type="text" />
        <x-form.lable for="address" class="block">Address</x-form.lable>
        <x-form.input placeholder="" id="address" name="address" value="try" type="text" />
        <x-form.lable for="email" class="block">E-mail</x-form.lable>
        <x-form.input placeholder="" id="email" name="email" value="try" type="text" />
        <x-form.button>Submit</x-form.button>
    </form>
</div>
