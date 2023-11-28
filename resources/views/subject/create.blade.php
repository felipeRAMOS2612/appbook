<x-app-layout>
    <main class="max-w-7xl p-12 mx-auto">
        <div class="bg-gray-200 p-5">
            <form action="{{route('subject.store')}}" method="POST" class="flex flex-col gap-12 justify-center items-center">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Nombre de la asignatura">
                </div>

                <div>
                    <input type="submit" class="py-3 px-5 text-white bg-green-500 rounded">
                </div>
            </form>
        </div>
    </main>
</x-app-layout>