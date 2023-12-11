<x-app-layout>
    <main class="max-w-7xl mx-auto p-5">
        <div>
            <h1 class="text-3xl font-semibold">Curso: {{$course->course}}</h1>
            <section>
                <table class="my-12 w-full text-sm text-left text-gray-500 ">
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
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($students as $student)
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <td scope="row" class="px-6 ">
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
                                {{$student->phone}}
                            </td>
                            <td class="px-6 py-4">
                                {{$student->email}}
                            </td>
                            @can('student.update')
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
                            @endcan
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</x-app-layout>