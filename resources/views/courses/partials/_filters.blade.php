<div>

  {{-- Access --}}
  @component('courses.partials._filter-title')
    Access
  @endcomponent
  @include('courses.partials._filter-list', [
    'map' => ['free' => 'Free', 'premium' => 'Premium'],
    'key' => 'access'
  ])

  {{-- Difficulty --}}
  @component('courses.partials._filter-title')
    Difficulty
  @endcomponent
  @include('courses.partials._filter-list', [
    'map' => ['beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced'],
    'key' => 'difficulty'
  ])

  {{-- Type --}}
  @component('courses.partials._filter-title')
    Type
  @endcomponent
  @include('courses.partials._filter-list', [
    'map' => ['theory' => 'Theory', 'project' => 'Project', 'snippet' => 'Snippet'],
    'key' => 'type'
  ])

  {{-- Subjects --}}
  @component('courses.partials._filter-title')
    Subjects
  @endcomponent
  @include('courses.partials._filter-list', [
    'map' => $subjects,
    'key' => 'subject'
  ])

  {{-- Started --}}
  @auth
    @component('courses.partials._filter-title')
      Progress
    @endcomponent
    @include('courses.partials._filter-list', [
      'map' => ['true' => 'Started', 'false' => 'Not started'],
      'key' => 'started'
    ])
  @endauth
  
</div>