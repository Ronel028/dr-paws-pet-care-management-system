<div>
    <x-modal wire:model='show'>
        <div class="relative p-4 w-full max-w-[1200px] max-h-full">
            <div @click.outside="show = false" x-show="show" x-transition:enter="animate__animated animate__fadeInDown" x-transition:leave="animate__animated animate__fadeOutUp" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-3 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Pet Management
                    </h3>
                    <button @click="toggleShowModal" type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 space-y-4 md:p-5">
                    <div>
                        <x-label>Input Data</x-label>
                        <x-input />
                    </div>
                </div>
                <div class="flex items-center gap-2 justify-end p-4 border-t border-gray-200 rounded-b md:p-3 dark:border-gray-600">
                    <x-button wire:click='create' class="">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 12 4.7 4.5 9.3-9"/>
                            </svg>
                        Save
                    </x-button>
                </div>
            </div>
        </div>
    </x-modal>
</div>
