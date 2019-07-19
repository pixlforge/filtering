@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      @include('courses.partials._filters')
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-body">
          @if ($courses->count())  
            @each('courses.partials._course', $courses, 'course')

            {{ $courses->appends(request()->query())->links() }}
          @else
            <div class="text-center py-16">
              <h3 class="text-lg font-bold">
                Sorry :(
              </h3>
              <p class="leading-loose">
                We couldn't find any course matching your criteria.
              </p>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
