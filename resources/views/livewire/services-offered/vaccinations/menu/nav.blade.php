<nav class="flex mb-4 -mb-px space-x-8 " aria-label="Tabs">
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    <a href="{{route('services-offered.vaccinations')}}"
        class="px-1 py-4 text-sm font-medium whitespace-nowrap {{Route::is('services-offered.vaccinations') ? 'text-blue-600 border-b-2 border-blue-500 ' : 'text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'}} ">
        Vaccinations </a>


    <a href="{{route('services-offered.vaccinations.deworming')}}" class="px-1 py-4 text-sm font-medium whitespace-nowrap {{Route::is('services-offered.vaccinations.deworming') ? 'text-blue-600 border-b-2 border-blue-500 ' : 'text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'}}"
        aria-current="page"> DW / HP / AM / ATF </a>


</nav>
