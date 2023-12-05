<x-app-layout>
    <div class="container">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small style="color: white;">Step 1</small></div>
            <div class="step-col"><small style="color: white;">Step 2</small></div>
            <div class="step-col"><small style="color: white;">Step 3</small></div>
        </div>
        <form action="{{route('grade.store')}}" method="POST">
            @csrf
            <div class="step" id="step1">
                <h3>Elija una asignatura</h3>
                <div class="flex gap-2 justify-center">
                    @foreach($subjects as $subject)
                    <div class="bg-white shadow-lg h-24 m-5 p-5">
                        <input type="radio" name="subject_id" value="{{$subject->id}}" class="bg-gray-100 border-black border-2" /> {{$subject->name}}
                    </div>
                    @endforeach
                </div>
                <div class="btn-box">
                    <button type="button" id="Next1">Next</button> 
                </div>			
            </div>
            <div class="step" id="step2">
                <h3>Semestre</h3>
                <div class="flex justify-center">
                    <select name="semester_id" id="">
                        <option value="" selected disabled>Seleccione un semestre</option>
                        @foreach($semesters as $semester)
                        <option value="{{$semester->id}}">{{$semester->semester}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="btn-box">
                    <button type="button" id="Previous1">Previous</button>
                    <button type="button" id="Next2">Next</button>				 
                </div>			
            </div>
            <div class="step" id="step3">
                <h3>Estudiante</h3>
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
                            @foreach($students as $student)
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
                            @endforeach
                        </tr>
                    </tbody>
                </table>

                <input type="text" name="grade" placeholder="Ingrese nota del estudiante">
                <div class="btn-box">
                    <button type="button" id="Previous2">Previous</button>
                    <button type="submit" id="submit">Submit</button>				 
                </div>			
            </div>
        </form>
 
        </div>
</x-app-layout>