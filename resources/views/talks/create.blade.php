<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create talk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <ul class="space-y-4">
                        @foreach ($talks as $talk)
                            <li class="rounded-lg bg-gray-50 p-4 shadow-md transition-colors hover:bg-gray-100">
                                <a
                                    href="{{ route('talks.show', ['talk' => $talk]) }}"
                                    class="text-lg font-semibold text-blue-600 hover:text-blue-800"
                                >
                                    {{ $talk->title }}
                                </a>
                                <div class="mt-2 text-sm text-gray-500">
                                    <span>{{ $talk->length }} mins</span>
                                    <h5 class="mt-1 font-medium text-gray-600">
                                        {{ ucwords($talk->type) }}
                                    </h5>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
