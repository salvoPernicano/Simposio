<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create talk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg"></div>
            <div class="p-6 text-black">
                <ul>
                    @foreach ($talks as $talk)
                        <li class="mt-2 bg-gray-500 p-2 ring-black">
                            <a href="{{ route('talks.show', ['talk' => $talk]) }}">{{ $talk->title }}</a>
                            <span>
                                {{ $talk->length }}
                            </span>
                            <h5>
                                {{ $talk->type }}
                            </h5>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
