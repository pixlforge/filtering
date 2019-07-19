<div>

  @if (request()->query())
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

  @foreach (App\Filters\Course\CourseFilters::mappings() as $key => $map)
    @component('courses.partials._filter-title')
      {{ $map['title'] }}
    @endcomponent
    @include('courses.partials._filter-list', [
      'map' => $map['options'],
      'key' => $key
    ])
  @endforeach


  {{-- Started --}}
  {{-- @auth
    @component('courses.partials._filter-title')
      Progress
    @endcomponent
    @include('courses.partials._filter-list', [
      'map' => ['true' => 'Started', 'false' => 'Not started'],
      'key' => 'started'
    ])
  @endauth --}}
  
</div>