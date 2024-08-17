<x-wui-modal wire:model.defer="addModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Add Grooming History">
        <form wire:submit='create'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select wire:model.live="client_id" placeholder="Select owner"
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                    <x-input-error for="client_id" />
                </div>
                <div>
                    <x-label>Pet</x-label>
                    <x-wui-select wire:model.live="pet_id" placeholder="Select pet" :options="$pets" option-label="name"
                        option-value="id" />
                    <x-input-error for="pet_id" />
                </div>
                <div>
                    <x-label>Haircut</x-label>
                    <x-input wire:model='haircut' placeholder="Haircut" />
                    <x-input-error for="haircut" />
                </div>

            </div>


            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-wui-button type="button" negative wire:click='addModal=false'>
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
    <x-wui-card title="Edit Grooming History">
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
                <div>
                    <x-label>Haircut</x-label>
                    <x-wui-input wire:model='editHaircut' placeholder="Haircut" />
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
