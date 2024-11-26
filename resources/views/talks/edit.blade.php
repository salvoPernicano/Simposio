<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit talk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg"></div>
            <form method="POST" action="{{ route('talks.update', ['talk' => $talk]) }}" class="space-y-4">
                @csrf
                @method('PATCH')
                @include('talks.template')
            </form>
        </div>
    </div>
</x-app-layout>
