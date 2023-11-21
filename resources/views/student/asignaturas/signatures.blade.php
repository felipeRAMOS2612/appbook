<x-app-layout>
    <div class="h-[32rem] flex justify-center items-center ">
        <img src="/banners/dashboard/banner-home.jpg" class=" h-[32rem] w-full object-cover">
        <h1 
        class="absolute md:text-[96px] text-5xl font-bold text-white text-center" style="filter: drop-shadow(10px 10px 10px black)">
            Mis asignaturas 
        </h1> 
    </div>

    <section class="flex flex-wrap justify-between [&>div]:min-w-[280px]">
        @foreach($signatures as $signature)
        <a href="{{ Auth::guard('teacher') ? '/notas' : '##' }}" class="bg-[#696de0] text-center grid grow flex-1 h-60 py-5">
            <div>
                <h1 class="text-5xl text-black font-semibold">$signature->attendance</h1>
            </div>
        </a>
        @endfor
    </section>
</x-app-layout>
