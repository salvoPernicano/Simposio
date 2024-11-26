<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create talk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-bold text-gray-800">{{ $talk->title }}</h1>
                    <span class="mt-2 block text-sm text-gray-500">{{ $talk->length }} mins</span>

                    <div class="mt-4 flex flex-col gap-6">
                        <!-- Edit link -->
                        <div class="bg-yellow-300">
                            <a
                                href="{{ route('talks.edit', ['talk' => $talk]) }}"
                                class="inline-block w-full rounded-lg border border-blue-500 p-5 px-4 py-2 text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                            >
                                Edit Talk
                            </a>
                        </div>

                        <!-- Delete Button -->
                        <x-delete-item :route="route('talks.destroy', ['talk' => $talk])" text="Delete this Talk" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
