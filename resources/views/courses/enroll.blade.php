<x-master-layout title="| Enroll Student">
    <x-course-header :course="$course">
        <h4>Enroll Student</h4>
        <div class="bg-light p-3 border rounded shadow-sm m-3">
            <form method="POST" action="{{ route('course.enroll', ['course' => $course->id]) }}">
                @csrf
                <ul class="list-group" style="max-height: 300px; overflow-y: auto;">
                    @foreach ($unenrolledStudents as $student)
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="{{$student->id}}" name="students[]"
                            {{ is_array(old('student')) && in_array($student->id, old('student')) ? 'checked' : '' }}>
                            <label class="form-check-label">{{$student->snumber}} {{$student->name}}</label>
                        </li>
                    @endforeach
                </ul>
                <x-input-error :messages="$errors->get('student')" class="mt-2" />
                <x-primary-button class="mt-3">
                    {{ __('Enroll') }}
                </x-primary-button>
            </form>
        </div>
    </x-course-header>
</x-master-layout>
