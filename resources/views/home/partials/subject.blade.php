<h1
class="text-bblue font-bold font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl lg:mt-10 md:mt-9 sm:mt-8 mt-7 md:mb-6 sm:mb-5 mb-4">
Mata Pelajaran</h1>
<div class="flex flex-wrap">

@for ($i = 0; $i < 8; $i++)
    <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
        <div class="flex flex-col justify-center items-center">
            <a href="/materi">
                <div
                    class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                    <img src="{{ asset('img/Matemetika.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                </div>
            </a>
            <div class="md:mt-4 sm:mt-3 mt-2">
                <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">
                    Matematika</h1>
            </div>
        </div>
    </div>
@endfor

</div>