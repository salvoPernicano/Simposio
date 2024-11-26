<div class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-md">
    <!-- Title -->
    <div>
        <x-input-error :messages="$errors->get('title')" />
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $talk->title ?? '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        />
    </div>

    <!-- Length -->
    <div>
        <x-input-error :messages="$errors->get('length')" />
        <label for="length" class="block text-sm font-medium text-gray-700">Length</label>
        <input
            type="text"
            name="length"
            id="length"
            value="{{ old('length', $talk->length ?? '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        />
    </div>

    <!-- Type -->
    <div>
        <x-input-error :messages="$errors->get('type')" />
        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
        <select
            name="type"
            id="type"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        >
            @foreach (App\Enums\TalkType::cases() as $talkType)
                <option
                    {{ old('type', $talk->type ?? '') === $talkType->value ? 'selected' : '' }}
                    value="{{ $talkType->value }}"
                >
                    {{ ucwords($talkType->value) }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Abstract -->
    <div>
        <x-input-error :messages="$errors->get('abstract')" />
        <label for="abstract" class="block text-sm font-medium text-gray-700">Abstract</label>
        <textarea
            name="abstract"
            id="abstract"
            cols="20"
            rows="5"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        >
{{ old('abstract', $talk->abstract ?? '') }}</textarea
        >
        <!-- Fallback dinamico -->
    </div>

    <!-- Organizer Note -->
    <div>
        <x-input-error :messages="$errors->get('organizer_notes')" />
        <label for="organizer_note" class="block text-sm font-medium text-gray-700">Organizer Note</label>
        <textarea
            name="organizer_notes"
            id="organizer_notes"
            cols="20"
            rows="5"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        >
{{ old('organizer_notes', $talk->organizer_notes ?? '') }}</textarea
        >
        <!-- Fallback dinamico -->
    </div>

    <!-- Submit Button -->
    <div>
        <button
            type="submit"
            class="inline-flex w-full justify-center rounded-md border bg-blue-600 px-4 py-2 text-lg font-bold text-black shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
            Submit
        </button>
    </div>
</div>
