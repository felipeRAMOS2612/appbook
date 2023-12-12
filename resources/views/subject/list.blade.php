<x-app-layout>
    <main class="max-w-6xl mx-auto w-full py-5">
        <div class="flex justify-end">
            @can('subject.create')
            <a class="bg-blue-500 p-3 rounded text-white text-end" href="{{route('subject.create')}}">
                Crear asignatura
            </a>
            @endcan
        </div>
        <h1 class="my-5 text-4xl font-bold">Asignaturas</h1>
        <div class="flex flex-col gap-10 flex-wrap w-full">
            @foreach ($subjects as $subject)
            <div class="p-5 w-full bg-white border border-gray-200 hover:scale-105 transition-all rounded-lg shadow hover:bg-gray-100">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$subject->name}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</x-app-layout>