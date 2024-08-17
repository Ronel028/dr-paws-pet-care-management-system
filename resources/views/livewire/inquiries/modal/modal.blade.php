<x-wui-modal wire:model.defer="viewModal" x-on:close="$wire.resetModal">
    <x-wui-card title="Inquiry">
        <dl class="w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Name</dt>
                <dd class="text-lg font-semibold">{{$name}}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email Address</dt>
                <dd class="text-lg font-semibold">{{$email}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Subject</dt>
                <dd class="text-lg font-semibold">{{$subject}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Message</dt>
                <dd class="text-lg font-semibold">{{$message}}</dd>
            </div>
        </dl>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <x-wui-button negative label="Close" wire:click="viewModal = false" />
            </div>
        </x-slot>
    </x-wui-card>
</x-wui-modal>
