<div class="flex my-16">
  <div class="w-32">
    <a href="#">
      <img
        src="http://via.placeholder.com/320x320"
        alt="{{ $course->name }}"
        class="w-full">
    </a>
  </div>
  <div class="flex-grow px-4 pb-4">
    <div class="">
      @if ($course->subjects->count())
        <ul class="flex border-b border-gray-200 pb-2 -mx-2 mb-3">
          @foreach ($course->subjects as $subject)
            <li class="mx-2">
              {{ $subject->name }}
            </li>
          @endforeach
        </ul>
      @endif
      <h3 class="text-2xl font-bold">
        {{ $course->name }}
      </h3>
      <ul class="flex -mx-2 mt-3">
        <li class="mx-2">
          <span class="capitalize {{ $course->formattedAccess === 'free' ? 'bg-blue-200' : 'bg-orange-200' }} rounded-full px-3 py-1">
            {{ $course->formattedAccess }}
          </span>
        </li>
        <li class="mx-2">
          <span class="capitalize">
            {{ $course->difficulty }}
          </span>
        </li>
        <li class="mx-2">
          <span class="capitalize">
            {{ $course->type }}
          </span>
        </li>
        <li class="mx-2">
          <span class="capitalize">
            {{ $course->formattedStarted }}
          </span>
        </li>
      </ul>
    </div>
  </div>
</div>