<x-app-layout>
    <main class="max-w-6xl mx-auto py-5">
        <div>
            <h1>Seleccione un profesor y un curso:</h1>
            <form action="{{route('course-student.store')}}" method="POST" class="flex gap-5 justify-between">
                <section class="p-3 rounded bg-gray-300 w-full flex flex-col gap-5 justify-center">
                    @foreach($teachers as $teacher)
                        @foreach ($teacher->roles as $role)
                        @if ($role->name === 'teacher')
                            <div class="flex items-center p-3 text-white rounded gap-1 bg-blue-500">
                                <input type="radio" name="student_id" value="{{$student->id}}" />
                                    <p>{{ $student }}</p>
                            </div>
                        @endif
                        @endforeach
                    @endforeach
                </section>

                <section class="p-3 rounded bg-gray-300 w-full flex flex-col gap-5 justify-center">
                    @foreach($subjects as $subject)
                            <div class="flex items-center p-3 text-white rounded gap-1 bg-blue-500">
                                <input type="radio" name="course_id" value="{{$subject->id}}" />
                                    <p>{{ $subject->subject }}</p>
                            </div>
                    @endforeach
                </section>
            </form>
        </div>
    </main>
</x-app-layout>