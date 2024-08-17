<x-wui-modal wire:model.defer="createModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Add DW / HP / AM / ATF History">
        <form wire:submit='create'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select wire:model.live="client_id" placeholder="Select owner"
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                </div>
                <x-wui-select wire:model.live="pet_id" placeholder="Select pet" :options="$pets" option-label="name"
                    label="Pet" option-value="id" />
                <x-wui-datetime-picker label="Date Administered" placeholder="Date Administered"
                    wire:model.defer="date_administered" without-time="true" without-timezone="true" />

                <x-wui-inputs.number label="Weight (lbs / kg)" wire:model.defer='weight' min="0" max="999" step="0.1" />
                <x-wui-select wire:model.live="drug_reference_id" placeholder="Select Immunization"
                    :options="$drug_references" option-label="name" option-value="id" label="Type" />

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
    <x-wui-card title="Edit DW / HP / AM / ATF History">
        <form wire:submit='update'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select wire:model.live="editClientId" placeholder="Select owner"
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                </div>
                <x-wui-select wire:model.live="editPetId" placeholder="Select pet" :options="$pets" option-label="name"
                    label="Pet" option-value="id" />
                <x-wui-datetime-picker label="Date Administered" placeholder="Date Administered"
                    wire:model.defer="editDateAdministered" without-time="true" without-timezone="true" />

                <x-wui-inputs.number label="Weight (lbs / kg)" wire:model.defer='editWeight' min="0" max="999" step="0.1" />
                <x-wui-select wire:model.live="editDrugReferenceId" placeholder="Select Immunization"
                    :options="$drug_references" option-label="name" option-value="id" label="Type" />

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
