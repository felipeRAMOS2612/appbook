<x-app-layout>
    <form class="max-w-7xl flex mx-auto py-12 gap-5" action="{{route('grade.store')}}" method="POST">
        @csrf
        <section class="w-full">
            @foreach($students as $student)
            <div class="bg-gray-200 p-4 flex-1 w-full flex gap-2 items-center rounded shadow">
                <input type="radio" name="student_id" value="{{$student->id}}">
                <h1 class="w-full">
                    Nombre:
                    {{$student->name}}
                    {{$student->last_name}}
                </h1>

                <h1 class="w-full">
                    RUT:
                    {{$student->rut}}
                </h1>

        <div class="w-full flex gap-3">
            <input type="text" name="grade" class="w-full" placeholder="Ingrese nota del estudiante">

            <input type="submit" class="px-4 py-2 w-full bg-green-500 rounded text-white">
        </div>
            </div>
            @endforeach
        </section>
        
        <input type="hidden" name="subject_id" value="{{$subjects}}">
        <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
    </form>
</x-app-layout>