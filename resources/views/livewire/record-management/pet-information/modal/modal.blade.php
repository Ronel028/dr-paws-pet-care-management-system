{{-- Create Modal --}}
<x-wui-modal wire:model.defer="show" x-on:close="$wire.resetModal">
    <x-wui-card title="Create Pet Information">
        <form wire:submit='save'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select label="Search a Owner" wire:model.defer="client" placeholder="Select owner"
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                </div>
                <div>
                    <x-label>Name</x-label>
                    <x-wui-input wire:model='name' placeholder="Name" />
                </div>
                <div>
                    <x-label>Breed</x-label>
                    <x-wui-input wire:model='breed' placeholder="Breed" />
                </div>
                <div>
                    <x-label>Species</x-label>
                    <x-wui-input wire:model='species' placeholder="Species" />
                </div>
                <div>
                    <x-label>Birth Date</x-label>
                    <x-wui-datetime-picker placeholder="Birth Date" wire:model.defer="birthdate" without-time />
                </div>
                <div>
                    <x-label>Sex</x-label>
                    <x-wui-select placeholder="Select sex" :options="['Male', 'Female', 'N/A']"
                        wire:model.defer="sex" />
                </div>
                <div>
                    <x-label>Markings</x-label>
                    <x-wui-input wire:model='markings' placeholder="Markings" />
                </div>

            </div>


            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-wui-button type="button" negative wire:click='show=false'>
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


{{-- Edit Modal --}}
<x-wui-modal wire:model.defer="editModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Update Pet Information">
        <form wire:submit='update'>
            <div class="space-y-4">
                <div>
                    <x-label>Owner</x-label>
                    <x-wui-select label=" Search a Owner" wire:model.defer="editClient" placeholder="Select owner"
                        :async-data="route('users.index')" option-label="name" option-value="id" />
                </div>
                <div>
                    <x-label>Name</x-label>
                    <x-wui-input wire:model='editName' placeholder="Name" />
                </div>
                <div>
                    <x-label>Breed</x-label>
                    <x-wui-input wire:model='editBreed' placeholder="Breed" />
                </div>
                <div>
                    <x-label>Species</x-label>
                    <x-wui-input wire:model='editSpecies' placeholder="Species" />
                </div>
                <div>
                    <x-label>Birth Date</x-label>
                    <x-wui-datetime-picker placeholder="Birth Date" wire:model.defer="editBirthdate" without-time />
                </div>
                <div>
                    <x-label>Sex</x-label>
                    <x-wui-select placeholder="Select sex" :options="['Male', 'Female', 'N/A']"
                        wire:model.defer="editSex" />
                </div>
                <div>
                    <x-label>Markings</x-label>
                    <x-wui-input wire:model='editMarkings' placeholder="Markings" />
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
