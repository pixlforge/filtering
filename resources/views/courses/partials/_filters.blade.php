<div>

  {{-- Access --}}
  @component('courses.partials._filter-title')
    Access
  @endcomponent
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
  @component('courses.partials._filter-title')
    Difficulty
  @endcomponent
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

  {{-- Subjects --}}
  @component('courses.partials._filter-title')
    Subjects
  @endcomponent
  @component ('courses.partials._filter-list')
    @foreach ($subjects as $value => $name)
      @component ('courses.partials._filter', [
        'route' => 'courses.index',
        'query' => ['subject' => $value]
      ])
        {{ $name }}
      @endcomponent
    @endforeach
  @endcomponent

  {{-- Type --}}
  @component('courses.partials._filter-title')
    Type
  @endcomponent
  @component ('courses.partials._filter-list')
    @foreach ([
      'theory' => 'Theory',
      'project' => 'Project',
      'snippet' => 'Snippet',
    ] as $value => $name)
      @component ('courses.partials._filter', [
        'route' => 'courses.index',
        'query' => ['type' => $value]
      ])
        {{ $name }}
      @endcomponent
    @endforeach
  @endcomponent

  {{-- Started --}}
  @auth
    @component('courses.partials._filter-title')
      Progress
    @endcomponent
    @component ('courses.partials._filter-list')
      @foreach ([
        'true' => 'Started',
        'false' => 'Not started',
      ] as $value => $name)
        @component ('courses.partials._filter', [
          'route' => 'courses.index',
          'query' => ['started' => $value]
        ])
          {{ $name }}
        @endcomponent
      @endforeach
    @endcomponent
  @endauth
  
</div>