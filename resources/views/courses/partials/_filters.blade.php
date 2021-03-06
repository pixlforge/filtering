<div>

  @if (array_intersect(array_keys(request()->query()), array_keys($mappings)))
    <a
      href="{{ route('courses.index') }}"
      class="block hover:no-underline hover:text-red-500 mb-4">
      <span class="inline-block rounded bg-red-500 font-black text-white leading-none px-2 py-1">
        &times;
      </span>
      <span class="text-xs ml-1">
        Clear <strong>all</strong> filters
      </span>
    </a>
  @endif

  @foreach ($mappings as $key => $map)
    @component ('courses.partials._filter-title')
      {{ $map['title'] }}
    @endcomponent
    @include ('courses.partials._filter-list', [
      'map' => $map['options'],
      'key' => $key
    ])
  @endforeach

</div>