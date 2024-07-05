<div class="w-[95%] m-auto p-5 border-2 space-y-5  mt-5 rounded-lg">
    <x-form.heading>View Gallery</x-form.heading>
    <table class="w-full">
        <thead>
            <x-table.row class="grid-cols-8">
                <x-table.th>Sr. No.</x-table.th>
                <x-table.th>Title</x-table.th>
                <x-table.th class="col-span-2">Descripition</x-table.th>
                <x-table.th>Image</x-table.th>
                <x-table.th>Category</x-table.th>
                <x-table.th>Status</x-table.th>
                <x-table.th>Action</x-table.th>
            </x-table.row> 
        </thead>
        <tbody>
            <x-table.row class="grid-cols-8">
                <x-table.td>Sr. No.</x-table.td>
                <x-table.td>Title</x-table.td>
                <x-table.td class="col-span-2 overflow-y-scroll text-xs">
                    <p class="h-full">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore cumque,
                        perferendis expedita, perspiciatis maxime nam voluptas quisquam sunt esse explicabo asperiores!
                        Nesciunt ducimus explicabo tempore dolor optio error corrupti molestias.</p>
                </x-table.td>
                <x-table.td>
                    <x-table.img src='https://picsum.photos/id/237/200/300' />
                </x-table.td>
                <x-table.td>Category</x-table.td>
                <x-table.td>
                    <x-table.button class="bg-green-400">Active</x-table.button>
                </x-table.td>
                <x-table.td>
                    <div>
                        <x-table.button class="bg-blue-400">Edit</x-table.button>
                        <x-table.button class="bg-red-400">Delete</x-table.button>
                    </div>
                </x-table.td>
            </x-table.row>
        </tbody>
    </table>
</div>
