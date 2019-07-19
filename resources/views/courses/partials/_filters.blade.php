<div>

  {{-- Access --}}
  @component ('courses.partials._filter-list')
    @foreach ([
      'free' => 'Free',
      'premium' => 'Premium'
    ] as $value => $name)
      @component ('courses.partials._filter', [
        'route' => 'courses.index',
        'query' => ['access' => $value]
      ])
        {{ $name }}
      @endcomponent
    @endforeach
  @endcomponent

  {{-- Difficulty --}}
  @component ('courses.partials._filter-list')
    @foreach ([
      'beginner' => 'Beginner',
      'intermediate' => 'Intermediate',
      'advanced' => 'Advanced',
    ] as $value => $name)
      @component ('courses.partials._filter', [
        'route' => 'courses.index',
        'query' => ['difficulty' => $value]
      ])
        {{ $name }}
      @endcomponent
    @endforeach
  @endcomponent
  
</div>