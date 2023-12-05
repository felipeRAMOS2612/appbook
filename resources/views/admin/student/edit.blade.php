<x-app-layout>
    <form class="max-w-7xl mx-auto p-5 grid grid-cols-[70%_30%] gap-5" enctype="multipart/form-data" method="POST" action="{{route('student.update', $student)}}">
        @method('PATCH')
        @csrf
        <section class="w-full flex flex-col gap-5">
            <div class=" grid grid-cols-3 gap-5">
                <div class="flex flex-col gap-1 justify-center">
                    <label class="text-start">Nombre</label>
                    <input type="text" value="{{$student->name}}" class="h-8 rounded shadow border-gray-100" placeholder="Nombre" name="name">
                </div>

                <div class="flex flex-col gap-1 justify-center">
                    <label class="text-start">Apellido</label>
                    <input type="text" value="{{$student->last_name}}" class="h-8 rounded shadow border-gray-100" placeholder="Apellido" name="last_name">
                </div>

                <div class="flex flex-col gap-1 justify-center">
                    <label class="text-start">RUT</label>
                    <input type="text" value="{{$student->rut}}" class="h-8 rounded shadow border-gray-100" placeholder="RUT" name="rut">
                </div>

                <div class="flex flex-col gap-1 justify-center">
                    <label class="text-start">Email</label>
                    <input type="text" value="{{$student->email}}" class="h-8 rounded shadow border-gray-100" placeholder="Email" name="email">
                </div>

                <div class="flex flex-col gap-1 justify-center">
                    <label class="text-start">Teléfono</label>
                    <input 
                    type="text" 
                    value="{{$student->phone}}" 
                    class="h-8 rounded shadow border-gray-100" 
                    placeholder="Telefono" 
                    name="phone">
                </div>

                <div class="flex flex-col gap-1 justify-center">
                    <label class="text-start">Dirección</label>
                    <input 
                    type="text" 
                    value="{{$student->address}}" 
                    class="h-8 rounded shadow border-gray-100" 
                    placeholder="Dirección" 
                    name="address">
                </div>
            </div>
        </section>

        <section class="w-full flex-1 p-5 flex flex-col gap-5 bg-white shadow-md rounded-lg h-96 overflow-y-scroll">
            @foreach($courses as $course)
                <div class="bg-gray-200 p-2 flex gap-3 items-center">
                    <input type="radio" name="course_id" value="{{ $course->id }}" {{ $student->course_id == $course->id ? 'checked' : '' }} />
                    {{ $course->course }}
                </div>
            @endforeach
        </section>

        <div class="col-span-2 flex justify-end">
            <input type="submit" class="bg-green-500 py-2 px-12 text-white rounded shadow hover:scale-105 transition-all">
        </div>
    </form>
</x-app-layout>