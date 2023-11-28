<x-app-layout>
    <div class="max-w-7xl flex justify-end py-5">
        <a href="{{route('grade.create')}}" class="bg-blue-500 py-2 px-5 rounded text-white">
            Registrar nota
        </a>
    </div>
    <section class="max-w-7xl gap-4 mx-auto p-2 flex justify-center items-center h-full w-full">
        @foreach($grades as $grade)

            @foreach($students as $student)
                @if($grade->student_id == $student->id)
                    @foreach($subjects as $subject)
                    @if($subject->id == $grade->subject_id)
                        <div class="bg-gray-200 p-3 rounded shadow hover:scale-105">
                            {{$grade->grade}}
                            {{$student->name}}
                            {{$subject->name}}
                        </div>
                    @endif
                    @endforeach
                @endif
            @endforeach
        @endforeach
    </section>
</x-app-layout>