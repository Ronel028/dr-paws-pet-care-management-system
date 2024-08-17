<x-wui-modal wire:model.defer="show" x-on:close="$wire.resetModal" z-index='z-[100]'>
    <x-wui-card title="Item Quantity">
        <div class="flex flex-col gap-1 mb-5 ">
            <x-wui-input label="Quantity" wire:model='quantity' placeholder="0" />
        </div>
        <div class="flex items-center justify-end ">
            <button type="submit"
                class="px-5 py-2 text-sm font-bold tracking-wide text-white rounded-md shadow bg-primary-blue">
                Ok
            </button>
        </div>
    </x-wui-card>
</x-wui-modal>
