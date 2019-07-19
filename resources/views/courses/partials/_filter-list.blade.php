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
  @if (request($key))    
    <li>
      <a
        href="{{ route('courses.index', array_except(request()->query(), $key)) }}"
        class="block hover:no-underline hover:text-red-500 pl-3 py-2">
        <span class="inline-block rounded bg-red-500 font-black text-white leading-none px-2 py-1">
          &times;
        </span>
        <span class="text-xs ml-1">
          Clear filter
        </span>
      </a>
    </li>
  @endif
</ul>