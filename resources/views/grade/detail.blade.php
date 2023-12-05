<x-app-layout>
    <section class="max-w-7xl mx-auto">
        <div class="m-5 p-5 rounded shadow-md">
            Nombre: {{$user->name}}:
            <p>Asignatura: {{$subject->name}}</p>
        </div>
        
        @foreach($grades as $semesterId => $semesterGrades)
            <div>
                <h3>Semestre {{$semesterId}}</h3>
                @foreach($semesterGrades as $grade)
                    <p>Notas: {{$grade->grade}}</p>
                @endforeach
            </div>
        @endforeach
    </section>
</x-app-layout>