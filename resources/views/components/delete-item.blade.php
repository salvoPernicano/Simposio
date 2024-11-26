<form action="{{ $route }}" method="post">
    @method('delete')
    @csrf

    <a
        class="inline-block rounded-lg border border-red-500 px-4 py-2 text-red-600 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
        href="#"
        onclick="event.preventDefault();
    this.closest('form').submit();"
    >
        {{ $text }}
    </a>
</form>
