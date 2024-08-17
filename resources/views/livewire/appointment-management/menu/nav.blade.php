<nav class="flex mb-4 -mb-px space-x-8 " aria-label="Tabs">
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    <a href="{{route('appointment-management.index')}}"
        class="px-1 py-4 text-sm font-medium whitespace-nowrap {{Route::is('appointment-management.index') ? 'text-blue-600 border-b-2 border-blue-500 ' : 'text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'}} ">
        Appointments </a>


    <a href="{{route('appointment-management.requests')}}"
        class="px-1 py-4 text-sm font-medium whitespace-nowrap {{Route::is('appointment-management.requests') ? 'text-blue-600 border-b-2 border-blue-500 ' : 'text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'}}"
        aria-current="page"> Appointment Requests </a>


</nav>
