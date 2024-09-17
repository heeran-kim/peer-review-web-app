<x-master>
<ul>
    @foreach ($teachers as $teacher)
    <a href="{{ route('user.show', ['user' => $teacher->id]) }}"><li>{{$teacher->name}} {{$teacher->s_number}} {{$teacher->email}}</li></a>
    @endforeach
</ul>
<ul>
    @foreach ($assessments as $assessment)
    <a href="{{ route('assessment.show', ['assessment' => $assessment->id]) }}"><li>{{$assessment->title}} {{$assessment->due_date}}</li></a>
    @endforeach
</ul>
</x-master>