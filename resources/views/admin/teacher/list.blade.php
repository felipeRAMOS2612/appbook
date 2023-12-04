<x-app-layout>
    <div class="max-w-7xl mx-auto px-5 pt-5 flex w-full justify-end text-end">
        @can('teacher.create')
        <a href="{{route('teacher.create')}}" class="p-3 bg-blue-500 rounded text-white">
            Crear profesor
        </a>
        @endcan
    </div>
    <form class="max-w-7xl mx-auto p-5 grid grid-cols-[65%_35%] gap-5" method="POST" action="{{route('subject-teacher.store')}}">
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
                                Materia
                            </th>
                        </tr>
                    </thead>
                    @foreach($teachers as $teacher)
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <td scope="row" class="px-6 ">
                                <input type="radio" name="teacher_id" value="{{$teacher->id}}">
                            </td>
                            <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{$teacher->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$teacher->last_name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$teacher->rut}}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($teacher->subjects as $subject)
                                    <li>{{ $subject->name }}</li>
                                @endforeach
                            </td>
                            <td class="pr-2 py-4 flex justify-end items-end flex-col gap-3">
                                <div class="flex w-24 text-center">
                                    <a href="#" class="w-full font-medium transition-all hover:scale-105 bg-green-500 p-2 text-white rounded">Edit</a>
                                </div>
                                <div class="flex w-24 text-center">
                                    <a href="#" class=" w-full font-medium transition-all hover:scale-105 bg-blue-500 p-2 text-white rounded">Ver detalle</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </section>

        <section class="w-full flex-1 p-5 flex flex-col gap-5 bg-white shadow-md rounded-lg h-96 overflow-y-scroll">
            @foreach($subjects as $subject)
            <div class="bg-gray-200 p-2 flex gap-3 items-center">
                <input type="radio" name="subject_id" value="{{$subject->id}}">
                {{$subject->name}}
            </div>
            @endforeach
        </section>

        <div class="col-span-2 flex justify-end">
            <button type="submit" class="bg-green-500 py-2 px-12 text-white rounded shadow hover:scale-105 transition-all">
                Agregar
            </button>
        </div>
    </form>
</x-app-layout>