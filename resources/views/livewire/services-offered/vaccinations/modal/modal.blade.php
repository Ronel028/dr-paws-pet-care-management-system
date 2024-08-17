<x-wui-modal wire:model.defer="createModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Add Vaccination History">
        <form wire:submit='create'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select wire:model.live="client_id" placeholder="Select owner"
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                </div>
                <div>
                    <x-label>Pet</x-label>
                    <x-wui-select wire:model.live="pet_id" placeholder="Select pet" :options="$pets" option-label="name"
                        option-value="id" />
                </div>
                <x-wui-datetime-picker label="Vaccination Date" placeholder="Vaccination Date"
                    wire:model.defer="vaccination_date" without-time="true" without-timezone="true" />

                <x-wui-inputs.number label="Weight (lbs / kg)" wire:model.defer='weight' min="0" max="999" step="0.1" />
                <x-wui-inputs.number label="Temperature" wire:model.defer='temperature' min="0" max="999" step="0.1" />

                <div>
                    <x-label>Immunization</x-label>
                    <x-wui-select wire:model.live="immunization_reference_id" placeholder="Select Immunization"
                        :options="$immunization_references" option-label="name" option-value="id" />
                </div>

                <x-wui-input label="Manufacturer / Lot No." placeholder="Manufacturer / Lot No."
                    wire:model.live='manufacturer_lot' />

                <x-wui-datetime-picker label="Next Schedule Date" placeholder="Next Schedule Date"
                    wire:model.defer="next_schedule_date" without-time="true" without-timezone="true" />

                <div>
                    <x-label>Veterinarian</x-label>
                    <x-wui-select wire:model.live="veterinarian_id" placeholder="Select Veterinarian"
                        :options="$veterinarians" option-label="name" option-value="id" />
                </div>
            </div>


            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-wui-button type="button" negative wire:click='createModal=false'>
                        Cancel
                    </x-wui-button>
                    <x-wui-button positive type="submit">
                        Create
                    </x-wui-button>
                </div>
        </form>
        </x-slot>
    </x-wui-card>
</x-wui-modal>

<x-wui-modal wire:model.defer="editModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Edit Vaccination History">
        <form wire:submit='update'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select wire:model.live="editClientId" placeholder="Select owner" disabled
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                </div>
                <div>
                    <x-label>Pet</x-label>
                    <x-wui-select wire:model.live="editPetId" placeholder="Select pet" :options="$pets"
                        option-label="name" option-value="id" />
                </div>
                <x-wui-datetime-picker label="Vaccination Date" placeholder="Vaccination Date"
                    wire:model.defer="editVaccinationDate" without-time="true" without-timezone="true" />

                <x-wui-inputs.number label="Weight (lbs / kg)" wire:model.defer='editWeight' min="0" max="999"
                    step="0.1" />
                <x-wui-inputs.number label="Temperature" wire:model.defer='editTemperature' min="0" max="999"
                    step="0.1" />

                <div>
                    <x-label>Immunization</x-label>
                    <x-wui-select wire:model.live="editImmunizationReferenceId" placeholder="Select Immunization"
                        :options="$immunization_references" option-label="name" option-value="id" />
                </div>

                <x-wui-input label="Manufacturer / Lot No." placeholder="Manufacturer / Lot No."
                    wire:model.live='editManufacturerLot' />

                <x-wui-datetime-picker label="Next Schedule Date" placeholder="Next Schedule Date"
                    wire:model.defer="editNextScheduleDate" without-time="true" without-timezone="true" />

                <div>
                    <x-label>Veterinarian</x-label>
                    <x-wui-select wire:model.live="editVeterinarianId" placeholder="Select Veterinarian"
                        :options="$veterinarians" option-label="name" option-value="id" />
                </div>

            </div>


            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-wui-button type="button" negative wire:click='editModal=false'>
                        Cancel
                    </x-wui-button>
                    <x-wui-button positive type="submit">
                        Update
                    </x-wui-button>
                </div>
        </form>
        </x-slot>
    </x-wui-card>
</x-wui-modal>
