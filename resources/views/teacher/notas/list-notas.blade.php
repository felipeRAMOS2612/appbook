<x-app-layout>
    <main class="px-5">
        <h1 class="text-2xl">Listado de notas</h1>
        <section class="bg-gray-200 rounded-sm shadow p-5">
            <form class="bg-[var(--secondary-color)] opacity-75 p-3 rounded shadow flex flex-wrap justify-center">
                <div>
                    <select name="course_id" id="select-course">
                        <option value="">Seleccione un curso</option>
                        @foreach ($courses as $course)
                            <option>{{$course->course}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <select name="course_id" id="select-course">
                        <option value="">Seleccione un estudiante</option>
                        @foreach ($students as $student)
                            <option>{{$course->course}}</option>
                        @endforeach
                    </select>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </form>
        </section>
    </main>
</x-app-layout>