<li>
  {{-- {{ dump(request(array_first(array_keys($query)))) }} --}}
  {{-- {{ dump(array_first($query)) }} --}}
  <a
    href="{{ route("$route", array_merge(request()->query(), $query)) }}"
    class="block hover:bg-blue-300 text-lg font-bold text-gray-900 hover:text-white hover:no-underline pl-3 py-3 {{ request(array_first(array_keys($query))) === array_first($query) ? 'bg-blue-500 text-white' : '' }}">
    {{ $slot }}
  </a>
</li>