<ul class="bg-white rounded border border-gray-200 mb-4">
  @foreach ($map as $value => $name)
    <li>
      <a
        href="{{ route('courses.index', array_merge(request()->query(), [$key => $value])) }}"
        class="block hover:bg-blue-300 font-semibold text-gray-900 hover:text-white hover:no-underline pl-3 py-2 {{ request($key) === $value ? 'bg-blue-500 text-white' : '' }}">
        {{ $name }}
      </a>
    </li>
  @endforeach
</ul>