<x-wui-modal wire:model.defer="show" x-on:close="$wire.resetModal">
    <x-wui-card title="Create Client Information">
        <form wire:submit='save'>
            <div class="space-y-2">
                <div>
                    <x-label>Name</x-label>
                    <x-wui-input wire:model='name' placeholder="Name" />
                </div>
                <div>
                    <x-label>Contact No.</x-label>
                    <x-wui-inputs.maskable mask="###########" placeholder="Contact number" wire:model='contact_no' />
                </div>
                <div>
                    <x-label>Address</x-label>
                    <x-wui-input wire:model='address' placeholder="Address" />
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



<x-wui-modal wire:model.defer="editModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Update Client Information">
        <form wire:submit='update'>
            <div class="space-y-2">
                <div>
                    <x-label>Name</x-label>
                    <x-wui-input wire:model='editName' placeholder="Name" />
                </div>
                <div>
                    <x-label>Contact No.</x-label>
                    <x-wui-inputs.maskable mask="###########" placeholder="Contact number" wire:model='editContactNo' />
                </div>
                <div>
                    <x-label>Address</x-label>
                    <x-wui-input wire:model='editAddress' placeholder="Address" />
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
