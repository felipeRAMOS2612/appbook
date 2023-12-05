<x-app-layout>
    <div class="max-w-7xl mx-auto px-5 pt-5 flex gap-5 w-full justify-end text-end">
        @can('student.create')
        <a href="{{route('student.create')}}" class="p-3 bg-blue-500 rounded text-white">
            Crear estudiante
        </a>
        @endcan

        @can('student.create')
        <a href="{{route('course-student.index')}}" class="p-3 bg-blue-500 rounded text-white">
            Ver todos los cursos
        </a>
        @endcan
    </div>
    @foreach($students as $student)
    <form class="max-w-7xl mx-auto p-5 grid grid-cols-[70%_30%] gap-5" method="POST" action="{{route('student.update', $student->id)}}">
        @method('PUT')
        @csrf
        <section class="w-full flex flex-col gap-5">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellido
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rut
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Curso
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <td scope="row" class="px-6 ">
                                <input type="radio" name="student_id" value="{{$student->id}}">
                            </td>
                            <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{$student->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$student->last_name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$student->rut}}
                            </td>
                            <td class="px-6 py-4">
                                @foreach($courses as $course)
                                @if($student->course_id == $course->id)
                                {{$course->course}}
                                @endif
                                @endforeach
                            </td>
                            <td class="pr-2 py-4 flex justify-end items-end flex-col gap-3">
                                <div class="flex w-24 text-center">
                                    <a 
                                    href="{{route('student.edit', $student->id)}}" 
                                    class="w-full font-medium transition-all hover:scale-105 bg-green-500 p-2 text-white rounded">Edit</a>
                                </div>
                                <div class="flex w-24 text-center">
                                    <a 
                                    href="#" 
                                    class="w-full font-medium transition-all hover:scale-105 bg-blue-500 p-2 text-white rounded">Ver detalle</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="w-full flex-1 p-5 flex flex-col gap-5 bg-white shadow-md rounded-lg h-96 overflow-y-scroll">
            @foreach($courses as $course)
            <div class="bg-gray-200 p-2 flex gap-3 items-center">
                {{$course->course}}
            </div>
            @endforeach
        </section>

        <div class="col-span-2 flex justify-end">
            <button type="submit" class="bg-green-500 py-2 px-12 text-white rounded shadow hover:scale-105 transition-all">
                Agregar
            </button>
        </div>
    </form>
    @endforeach
</x-app-layout>