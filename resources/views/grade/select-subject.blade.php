<x-app-layout>
    <main class="max-w-7xl mx-auto">
        <div>
            <h1 class="text-4xl">Asignaturas</h1>
            <small>Seleccione una asignatura</small>
        </div>

        <div class="flex gap-10 items-center justify-center"> 
                @foreach($subjects as $subject)
                    <div class="bg-gray-200 p-3 shadow rounded">
                        <a href="{{route('generated::bkV0aVwdDKnHTiBo', $subject->id)}}" name="subject">{{$subject->name}}</a>
                    </div>
                @endforeach
        </div>
    </main>
</x-app-layout>