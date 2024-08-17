{{-- Create Modal --}}
<x-wui-modal wire:model.defer="createModal" x-on:close="$wire.resetCreateModal">
    <x-wui-card title="Create Product">
        <form wire:submit='saveCreateForm'>
            <div class="space-y-4">

                <div>
                    <x-wui-input label="Name" wire:model='create.name' placeholder="Name" />
                </div>
                <div>
                    <x-wui-input label="Brand" wire:model='create.brand' placeholder="Brand" />
                </div>
                <div>
                    <x-wui-select label="Unit of Measurement" wire:model.defer="create.unit" placeholder="Select unit"
                        :options="[
                            ['value'=>'pc','label'=>'Piece'],
                            ['value'=>'tab','label'=>'Tab'],
                            ['value'=>'mixture','label'=>'Mixture'],
                            ['value'=>'kg','label'=>'Kilogram'],
                            ['value'=>'unit','label'=>'Unit'],
                        ]" option-label="label" option-value="value" />
                </div>
                <div>
                    <x-wui-inputs.currency label="Unit Price" placeholder="Unit Price" wire:model="create.unit_price" />
                </div>
                <div>
                    <x-wui-inputs.currency label="Retail Price" placeholder="Retail Price"
                        wire:model="create.retail_price" />
                </div>
                <div>
                    <x-wui-inputs.number label="Critical Stocks" wire:model.defer='create.critical_stocks' min="0"
                        max="999" step="1" />
                </div>
                <div>
                    <x-wui-inputs.number label="Stocks" wire:model.defer='create.stocks' min="0" max="999" step="1" />
                </div>
                <div>
                    <x-wui-select wire:model.live="create.category_id" placeholder="Select category" label="Category"
                        :options="$categories" option-label="name" option-value="id" />
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
