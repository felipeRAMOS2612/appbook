<x-app-layout>
    <main class="min-h-[80vh] bg-thrill-section flex items-center justify-center">
        <div class=" max-w-7xl mx-auto bg-gray-200 shadow p-5 w-full">
            <div class="flex justify-end">
                <a class="bg-[var(--secondary-color)] px-5 py-2 rounded hover:scale-105 transition-all" href="{{route('subject.index')}}">Ver todas las asignaturas</a>
            </div>
            <h1 class="text-2xl font-semibold text-center my-5">Registrar asignatura nueva</h1>
            <img
                class="mx-auto my-5"
                width="100"
                height="100"
                src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/100/external-white-board-education-smashingstocks-circular-smashing-stocks.png"/>
            <form action="{{route('subject.store')}}" method="POST" class="flex flex-col gap-1 justify-center items-center">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Nombre asignatura">
                </div>

                <div>
                    <input type="submit" class="py-3 px-5 text-white bg-green-500 rounded">
                </div>
            </form>
        </div>
    </main>
</x-app-layout>