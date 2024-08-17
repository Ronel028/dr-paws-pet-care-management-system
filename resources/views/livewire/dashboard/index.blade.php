<div>
    <div>
        <div>

            <!-- Welcome banner -->
            <x-dashboard.welcome-banner />

            <!-- Dashboard actions -->
            <div class="mb-8 sm:flex sm:justify-between sm:items-center">

                <!-- Cards -->
                <div class="grid w-full grid-cols-12 gap-6">

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="col-span-12">
                        <dl class="grid w-full grid-cols-4 gap-5 mt-5">
                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Clients</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_clients}}</dd>
                            </div>

                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Pets</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_pets}}</dd>
                            </div>

                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Grooming Histories</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_groomings}}</dd>
                            </div>

                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Vaccination Histories</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_vaccinations}}</dd>
                            </div>
                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total DW / HP / AM / ATF
                                    Histories</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_other_histories}}</dd>
                            </div>
                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Appointments Today</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_appointments_today}}</dd>
                            </div>
                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate text-wrap">Total Pending Appointment
                                    Requests</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                    {{$total_pending_appointment_requests}}</dd>
                            </div>
                            <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Inquiries</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900">{{$total_inquiries}}</dd>
                            </div>
                        </dl>
                    </div>


                    {{--
                    <!-- Line chart (Acme Plus) -->
                    <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" />

                    <!-- Line chart (Acme Advanced) -->
                    <x-dashboard.dashboard-card-02 :dataFeed="$dataFeed" />

                    <!-- Line chart (Acme Professional) -->
                    <x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" />

                    <!-- Bar chart (Direct vs Indirect) -->
                    <x-dashboard.dashboard-card-04 />

                    <!-- Line chart (Real Time Value) -->
                    <x-dashboard.dashboard-card-05 />

                    <!-- Doughnut chart (Top Countries) -->
                    <x-dashboard.dashboard-card-06 />

                    <!-- Table (Top Channels) -->
                    <x-dashboard.dashboard-card-07 />

                    <!-- Line chart (Sales Over Time)  -->
                    <x-dashboard.dashboard-card-08 />

                    <!-- Stacked bar chart (Sales VS Refunds) -->
                    <x-dashboard.dashboard-card-09 />

                    <!-- Card (Customers)  -->
                    <x-dashboard.dashboard-card-10 />

                    <!-- Card (Reasons for Refunds)   -->
                    <x-dashboard.dashboard-card-11 />

                    <!-- Card (Recent Activity) -->
                    <x-dashboard.dashboard-card-12 />

                    <!-- Card (Income/Expenses) -->
                    <x-dashboard.dashboard-card-13 /> --}}

                </div>

            </div>
        </div>

    </div>
