<x-app-layout>
    <main class="max-w-6xl mx-auto w-full py-5">
        @can('student.create')
        <div class="flex justify-end">
            <a href="{{route('student')}}" class="p-3 bg-blue-500 rounded text-white">
                Ver estudiantes
            </a>
        </div>
        @endcan
        <h1 class="my-5 text-4xl font-bold">Cursos</h1>
        <p>Seleccione un curso para ver sus estudiantes</p>
        <div class="flex gap-10 flex-wrap w-full">
            @foreach ($courses as $course)
            <a href="{{route('courses.show', $course->id)}}" class="p-5 max-w-[250px] w-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$course->course}}</h5>
                    Numero de estudiantes: {{ count($course->students) }}
                </div>
            </a>
            @endforeach
        </div>
    </main>
</x-app-layout>