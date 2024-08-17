<x-wui-modal wire:model.defer="show" x-on:close="$wire.resetModal">
    <x-wui-card title="Create Client Information">
        <form wire:submit='createRequest'>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-input label="Name" wire:model='requestName' placeholder="Name" />
                </div>
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-inputs.maskable mask="###########" label="Contact No" placeholder="Contact number"
                        wire:model='requestContactNo' placeholder="Contact No" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                <x-wui-input label="Email" wire:model='requestEmail' placeholder="Email" />
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-input label="Pet Name" wire:model='requestPetName' placeholder="Pet Name" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Type of Service" placeholder="Select one service" :options="['Vaccination', 'Grooming', 'Consultation']"
                        wire:model.defer="requestService" />
                </div>
                <x-wui-datetime-picker label="Appointment Date" placeholder="Appointment Date" :min="now()->addDay()"
                    without-time="true" wire:model.defer="requestAppointmentDate" />
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Species" placeholder="Select Species" :options="['Dog', 'Cat', 'Goat']"
                        wire:model.defer="species" />
                </div>
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Type of Pet" placeholder="Select Type" :options="['Domestic', 'Wild', 'Exotic']"
                        wire:model.defer="pet_type" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <x-wui-input label="Breed" wire:model='breed' placeholder="Breed" />
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-input label="Sex" wire:model='sex' placeholder="Sex" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <x-wui-input label="Address" wire:model='requestAddress' placeholder="Address" />
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-datetime-picker label="Pet Birthdate" wire:model='birth_date' placeholder="Pet Birthdate"
                        without-time />
                </div>
            </div>
            <div class="flex flex-col gap-1 mb-5 ">
                <x-wui-textarea wire:model="requestPetInfo" label="Pet Info"
                    placeholder="Describe your pet like what is his/her Breed, Sex, Markings, Age, Weight" />
            </div>
            <div class="flex items-center justify-end ">
                <button type="submit"
                    class="px-5 py-2 text-sm font-bold tracking-wide text-white rounded-md shadow bg-primary-blue">
                    Set Appointment
                </button>
            </div>
        </form>
    </x-wui-card>
</x-wui-modal>



<x-wui-modal wire:model.defer="editModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Update Client Information">
        <form wire:submit='approvedRequest'>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-input label="Name" wire:model='requestName' placeholder="Name" />
                </div>
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-inputs.maskable mask="###########" label="Contact No" placeholder="Contact number"
                        wire:model='requestContactNo' placeholder="Contact No" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                <x-wui-input label="Email" wire:model='requestEmail' placeholder="Email" />
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-input label="Pet Name" wire:model='requestPetName' placeholder="Pet Name" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Type of Service" placeholder="Select one service" :options="['Vaccination', 'Grooming', 'Consultation']"
                        wire:model.defer="requestService" />
                </div>
                <x-wui-datetime-picker label="Appointment Date" placeholder="Appointment Date" :min="now()->addDay()"
                    without-time="true" wire:model.defer="requestAppointmentDate" />
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Species" placeholder="Select Species" :options="['Dog', 'Cat', 'Goat']"
                        wire:model.defer="species" />
                </div>
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Type of Pet" placeholder="Select Type" :options="['Domestic', 'Wild', 'Exotic']"
                        wire:model.defer="pet_type" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <x-wui-input label="Breed" wire:model='breed' placeholder="Breed" />
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-input label="Sex" wire:model='sex' placeholder="Sex" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                <x-wui-input label="Address" wire:model='requestAddress' placeholder="Address" />
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-datetime-picker label="Pet Birthdate" wire:model='birth_date' placeholder="Pet Birthdate"
                        without-time />
                </div>
            </div>
            <div class="flex flex-col gap-1 mb-5 ">
                <x-wui-textarea wire:model="requestPetInfo" label="Pet Info"
                    placeholder="Describe your pet like what is his/her Breed, Sex, Markings, Age, Weight" />
            </div>
            <div class="grid grid-cols-1 gap-1 mb-5">
                <div class="flex flex-col gap-1 mb-5 ">
                    <x-wui-select label="Status" placeholder="Select Status" :options="$statuses" option-value="id"
                        option-label="name" wire:model.defer="status_id" />
                </div>
            </div>
            <div class="flex items-center justify-end ">
                <button type="submit"
                    class="px-5 py-2 text-sm font-bold tracking-wide text-white rounded-md shadow bg-primary-blue">
                    Schedule This Appointment
                </button>
            </div>
        </form>
    </x-wui-card>
</x-wui-modal>
