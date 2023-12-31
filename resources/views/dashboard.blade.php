<x-app-layout>
    <div class="h-[32rem] flex justify-center items-center ">
        <img src="/banner/dashboard/banner-home.jpg" class=" h-[32rem] w-full object-cover">
        <h1 
        class="absolute md:text-[96px] text-5xl font-bold text-white text-center" style="filter: drop-shadow(10px 10px 10px black)">
            Bienvenid@
            {{Auth::user()->name}}
        </h1> 
    </div>

    <section class="flex flex-wrap justify-between [&>a]:min-w-[280px]">
        @can('student.create')
        <a href="{{route('teacher.index')}}" class="bg-[#696de0] text-center grid grow flex-1 h-60 py-5">
            <div>
                <h1 class="text-5xl text-black font-semibold">Docentes</h1>
            </div>
            <div class=" w-full flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="102" height="97" viewBox="0 0 102 97" fill="none">
                    <path d="M82.875 7.57812H28.6875C24.8833 7.57813 21.2349 9.01526 18.5449 11.5734C15.855 14.1315 14.3438 17.601 14.3438 21.2188V84.875C14.3438 86.0809 14.8475 87.2374 15.7441 88.0901C16.6408 88.9428 17.8569 89.4219 19.125 89.4219H76.5C77.7681 89.4219 78.9842 88.9428 79.8809 88.0901C80.7775 87.2374 81.2812 86.0809 81.2812 84.875C81.2812 83.6691 80.7775 82.5126 79.8809 81.6599C78.9842 80.8072 77.7681 80.3281 76.5 80.3281H23.9062V78.8125C23.9062 77.6066 24.41 76.4501 25.3066 75.5974C26.2033 74.7447 27.4194 74.2656 28.6875 74.2656H82.875C84.1431 74.2656 85.3592 73.7866 86.2559 72.9339C87.1525 72.0812 87.6562 70.9247 87.6562 69.7188V12.125C87.6562 10.9191 87.1525 9.76258 86.2559 8.90987C85.3592 8.05717 84.1431 7.57812 82.875 7.57812ZM78.0938 65.1719H28.6875C27.0584 65.1689 25.441 65.433 23.9062 65.9524V21.2188C23.9062 20.0128 24.41 18.8563 25.3066 18.0036C26.2033 17.1509 27.4194 16.6719 28.6875 16.6719H78.0938V65.1719Z" fill="black"/>
                  </svg>
            </div>
        </a>
        @endcan
        @role('teacher')
        <a href="{{route('grade.index')}}" class="bg-[#696de0] text-center grid grow flex-1 h-60 py-5">
            <div>
                <h1 class="text-5xl text-black font-semibold">Notas</h1>
            </div>
            <div class=" w-full flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="102" height="97" viewBox="0 0 102 97" fill="none">
                    <path d="M82.875 7.57812H28.6875C24.8833 7.57813 21.2349 9.01526 18.5449 11.5734C15.855 14.1315 14.3438 17.601 14.3438 21.2188V84.875C14.3438 86.0809 14.8475 87.2374 15.7441 88.0901C16.6408 88.9428 17.8569 89.4219 19.125 89.4219H76.5C77.7681 89.4219 78.9842 88.9428 79.8809 88.0901C80.7775 87.2374 81.2812 86.0809 81.2812 84.875C81.2812 83.6691 80.7775 82.5126 79.8809 81.6599C78.9842 80.8072 77.7681 80.3281 76.5 80.3281H23.9062V78.8125C23.9062 77.6066 24.41 76.4501 25.3066 75.5974C26.2033 74.7447 27.4194 74.2656 28.6875 74.2656H82.875C84.1431 74.2656 85.3592 73.7866 86.2559 72.9339C87.1525 72.0812 87.6562 70.9247 87.6562 69.7188V12.125C87.6562 10.9191 87.1525 9.76258 86.2559 8.90987C85.3592 8.05717 84.1431 7.57812 82.875 7.57812ZM78.0938 65.1719H28.6875C27.0584 65.1689 25.441 65.433 23.9062 65.9524V21.2188C23.9062 20.0128 24.41 18.8563 25.3066 18.0036C26.2033 17.1509 27.4194 16.6719 28.6875 16.6719H78.0938V65.1719Z" fill="black"/>
                  </svg>
            </div>
        </a>
        @endrole

        @role('student')
        <a href="{{route('generated::f2KFWY8UHuqrdGOu')}}" class="bg-[#696de0] text-center grid grow flex-1 h-60 py-5">
            <div>
                <h1 class="text-5xl text-black font-semibold">Notas</h1>
            </div>
            <div class=" w-full flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="102" height="97" viewBox="0 0 102 97" fill="none">
                    <path d="M82.875 7.57812H28.6875C24.8833 7.57813 21.2349 9.01526 18.5449 11.5734C15.855 14.1315 14.3438 17.601 14.3438 21.2188V84.875C14.3438 86.0809 14.8475 87.2374 15.7441 88.0901C16.6408 88.9428 17.8569 89.4219 19.125 89.4219H76.5C77.7681 89.4219 78.9842 88.9428 79.8809 88.0901C80.7775 87.2374 81.2812 86.0809 81.2812 84.875C81.2812 83.6691 80.7775 82.5126 79.8809 81.6599C78.9842 80.8072 77.7681 80.3281 76.5 80.3281H23.9062V78.8125C23.9062 77.6066 24.41 76.4501 25.3066 75.5974C26.2033 74.7447 27.4194 74.2656 28.6875 74.2656H82.875C84.1431 74.2656 85.3592 73.7866 86.2559 72.9339C87.1525 72.0812 87.6562 70.9247 87.6562 69.7188V12.125C87.6562 10.9191 87.1525 9.76258 86.2559 8.90987C85.3592 8.05717 84.1431 7.57812 82.875 7.57812ZM78.0938 65.1719H28.6875C27.0584 65.1689 25.441 65.433 23.9062 65.9524V21.2188C23.9062 20.0128 24.41 18.8563 25.3066 18.0036C26.2033 17.1509 27.4194 16.6719 28.6875 16.6719H78.0938V65.1719Z" fill="black"/>
                  </svg>
            </div>
        </a>
        @endrole
        @can('subject.index')
        <a href="{{route('subject.index')}}" class="bg-[#FFD14C] grid text-center flex-1 grow h-60 py-5">
            <div>
                <h1 class="text-5xl text-black font-semibold">Asignaturas</h1>
            </div>
            <div class=" w-full flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="102" height="97" viewBox="0 0 102 97" fill="none">
                    <path d="M51 12.125L4.25 36.375L21.25 45.1858V69.4358L51 84.875L80.75 69.4358V45.1858L89.25 40.7804V68.7083H97.75V36.375L51 12.125ZM79.985 36.375L51 51.41L22.015 36.375L51 21.34L79.985 36.375ZM72.25 64.6667L51 75.66L29.75 64.6667V49.5913L51 60.625L72.25 49.5913V64.6667Z" fill="black"/>
                  </svg>
            </div>
        </a>
        @endcan
        @can('student.index')
        <a href="{{route('course-student.index')}}" class="bg-[#bababa] grid text-center flex-1 grow h-60 py-5">
            <div>
                <h1 class="text-5xl text-black font-semibold">Estudiantes</h1>
            </div>
            <div class=" w-full flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="102" height="103" viewBox="0 0 102 103" fill="none">
                    <path d="M51 51.5C46.325 51.5 42.3229 49.8191 38.9938 46.4573C35.6646 43.0955 34 39.0542 34 34.3333C34 29.6125 35.6646 25.5712 38.9938 22.2094C42.3229 18.8476 46.325 17.1667 51 17.1667C55.675 17.1667 59.6771 18.8476 63.0062 22.2094C66.3354 25.5712 68 29.6125 68 34.3333C68 39.0542 66.3354 43.0955 63.0062 46.4573C59.6771 49.8191 55.675 51.5 51 51.5ZM17 85.8333V73.8167C17 71.3847 17.6205 69.1488 18.8615 67.1088C20.1025 65.0688 21.7487 63.5138 23.8 62.4437C28.1917 60.2264 32.6542 58.5626 37.1875 57.4525C41.7208 56.3424 46.325 55.7888 51 55.7917C55.675 55.7917 60.2792 56.3467 64.8125 57.4568C69.3458 58.5669 73.8083 60.2292 78.2 62.4437C80.2542 63.5167 81.9017 65.0731 83.1427 67.1131C84.3838 69.153 85.0028 71.3876 85 73.8167V85.8333H17ZM25.5 77.25H76.5V73.8167C76.5 73.0299 76.3045 72.3146 75.9135 71.6708C75.5225 71.0271 75.0097 70.5264 74.375 70.1687C70.55 68.2375 66.6896 66.7898 62.7937 65.8256C58.8979 64.8614 54.9667 64.3779 51 64.375C47.0333 64.375 43.1021 64.8585 39.2063 65.8256C35.3104 66.7926 31.45 68.2404 27.625 70.1687C26.9875 70.5264 26.4733 71.0271 26.0823 71.6708C25.6913 72.3146 25.4972 73.0299 25.5 73.8167V77.25ZM51 42.9167C53.3375 42.9167 55.3392 42.0755 57.0052 40.3932C58.6712 38.7108 59.5028 36.6909 59.5 34.3333C59.5 31.9729 58.667 29.9515 57.001 28.2692C55.335 26.5869 53.3347 25.7471 51 25.75C48.6625 25.75 46.6607 26.5912 44.9947 28.2735C43.3287 29.9558 42.4972 31.9758 42.5 34.3333C42.5 36.6937 43.333 38.7151 44.999 40.3975C46.665 42.0798 48.6653 42.9195 51 42.9167Z" fill="black"/>
                  </svg>
            </div>
        </a>
        @endcan
    </section>

    @role('admin')
    <h1 class="text-4xl font-bold mt-12 mb-5 text-center">
        ¿Que deseas hacer hoy?
    </h1>

    <section class="bg-gray-200 max-w-7xl text-white grid lg:grid-cols-4 grid-cols-2 gap-5 mx-auto rounded shadow p-5">
        <a 
        href="{{route('student.create')}}"
        id="student-tab" 
        class="bg-[var(--primary-color)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-4 w-28 h-28 flex justify-center items-center">
                <img
                class="objet-contain"
                width="100" 
                height="100" 
                src="https://img.icons8.com/external-konkapp-outline-color-konkapp/100/external-student-back-to-school-konkapp-outline-color-konkapp.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Registrar estudiante</h2>
        </a>

        <a
        href="{{route('teacher.create')}}"
        id="teacher-tab"
        class="bg-[var(--secondary-color)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-3 w-28 h-28 flex justify-center items-center">
                <img
                class="object-contain"
                width="100" 
                height="100" 
                src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/100/external-teacher-professions-flaticons-lineal-color-flat-icons-2.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Registrar docente</h2>
        </a>

        <a 
        href="{{route('subject.create')}}" 
        class="bg-[var(--third-color)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
                <img
                class="mx-auto"
                width="100" 
                height="100" 
                src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/100/external-white-board-education-smashingstocks-circular-smashing-stocks.png"/>

            <h2 class="text-xl font-semibold text-center">Registrar asignatura</h2>
        </a>

        <a href="{{route('schedule.index')}}" class="bg-[var(--gray)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-3 w-28 h-28 flex justify-center items-center">
                <img
                width="100" 
                height="100" 
                src="https://img.icons8.com/color/100/calendar--v1.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Horario de clases</h2>
        </a>

        <a href="" class="bg-[var(--gray)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-3 w-28 h-28 flex justify-center items-center">
                <img
                width="100"
                height="100" 
                src="https://img.icons8.com/3d-fluency/100/combo-chart.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Grafico de rendimiento</h2>
        </a>

        <a href="" class="bg-[var(--primary-color)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-4 w-28 h-28 flex justify-center items-center">
                <img
                width="100" 
                height="100" 
                src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/100/external-paper-note-office-xnimrodx-lineal-color-xnimrodx.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Anotaciones de estudiante</h2>
        </a>

        <a href="" class="bg-[var(--third-color)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-3 w-28 h-28 flex justify-center items-center">
                <img
                width="100"
                height="100"
                src="https://img.icons8.com/color/100/checked-user-male--v1.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Registro de asistencias</h2>
        </a>

        <a href="" class="bg-[var(--secondary-color)] p-3 rounded hover:scale-105 transition-all hover:shadow-xl">
            <div class="mx-auto rounded-full bg-white p-4 w-28 h-28 flex justify-center items-center">
                <img
                width="100"
                height="100"
                src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/100/external-grades-online-education-flaticons-lineal-color-flat-icons.png"/>
            </div>
            <h2 class="text-xl font-semibold text-center">Ver calificaciones</h2>
        </a>
    </section>
    @endrole
    <br>
</x-app-layout>
