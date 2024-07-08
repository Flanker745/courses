<x-layout>
    <div class="flex">
        <x-navigation />
        <div class="w-[85%]">
            <div class="w-[95%] m-auto p-5 border-2 space-y-5  mt-5 rounded-lg">
                <x-form.heading>View Gallery</x-form.heading>
                <table class="w-full">
                    <thead>
                        <x-table.row class="grid-cols-8">
                            <x-table.th>Sr. No.</x-table.th>
                            <x-table.th>Title</x-table.th>
                            <x-table.th class="col-span-2">Descripition</x-table.th>
                            <x-table.th>Price</x-table.th>
                            <x-table.th>Duration</x-table.th>
                            <x-table.th>Status</x-table.th>
                            <x-table.th>Action</x-table.th>
                        </x-table.row>
                    </thead>
                    <tbody>
                        @foreach ($courses as $key => $course)
                            <x-table.row class="grid-cols-8">
                                <x-table.td>{{ $key + 1 }}</x-table.td>
                                <x-table.td>{{ $course->title }}</x-table.td>
                                <x-table.td class="col-span-2 overflow-y-scroll text-sm">
                                    <p class="h-full text-start w-full">{{ $course->description }}</p>
                                </x-table.td>
                                <x-table.td>{{ $course->price }}</x-table.td>
                                <x-table.td>{{ $course->duration }}</x-table.td>
                                <x-table.td>
                                    <a href="/course/{{ $course->id }}">
                                        <x-table.button
                                            class="{{ $course->status ? 'bg-green-400' : 'bg-red-400' }}">{{ $course->status ? 'Active' : 'Inactive' }}</x-table.button></a>
                                </x-table.td>
                                <x-table.td>
                                    <div>
                                        <a href="/courses/{{ $course->id }}">
                                            <x-table.button class="bg-blue-400">Edit</x-table.button>
                                        </a>
                                        <x-table.button class="bg-red-400">Delete</x-table.button>
                                    </div>
                                </x-table.td>
                            </x-table.row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
