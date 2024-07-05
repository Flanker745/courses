<x-layout>
    <div class="flex">
        <x-navigation/>
        <div class="w-[85%]">
            @if (request()->is('about'))
                <x-about />
            @endif
            @if (request()->is('/'))
                <x-home />
            @endif
            @if (request()->is('gallaryC'))
                <x-gallary.create/>
            @endif
            @if (request()->is('gallaryS'))
                <x-gallary.show/>
            @endif

            @if (request()->is('courseC'))
                <x-course.create/>
            @endif
            @if (request()->is('courseS'))
                <x-course.show/>
            @endif

            @if (request()->is('videoC'))
                <x-video.create/>
            @endif
            @if (request()->is('videoS'))
                <x-video.show/>
            @endif
        </div>
    </div>
</x-layout>
