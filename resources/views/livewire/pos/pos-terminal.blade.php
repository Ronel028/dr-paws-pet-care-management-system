<div x-data='initData' class=" pt-12">
    <div class="fixed top-0 left-0 right-0 z-60 bg-primary-blue-light">
        <nav class=" max-w-[1274px] w-[90%] mx-auto flex items-center justify-between py-2">
            <a href="#">
                <h3 class="text-lg font-bold tracking-wide text-blue">Dr <span class=" text-primary-yellow">Paws</span>
                </h3>
            </a>
        </nav>
    </div>
    <div>
        <div class="">
            <div class=" fixed top-0 left-0 bottom-0 w-[450px] pl-1 pt-12 pb-2">
                <div class=" bg-white rounded relative p-2 min-h-full h-auto flex flex-col justify-between">
                    <div>
                        <div class=" flex items-center gap-1">
                            <input type="text" name="" id="" placeholder="Type the number then hit enter"
                                class=" w-full rounded placeholder:text-sm text-sm">
                            <button class=" bg-gray-600 form-input py-2.5">
                                <svg class=" w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-3 py-2 whitespace-nowrap">
                                            #
                                        </th>
                                        <th scope="col" class="px-3 py-2 whitespace-nowrap">
                                            QTY
                                        </th>
                                        <th scope="col" class="px-3 py-2 whitespace-nowrap">
                                            Price
                                        </th>
                                        <th scope="col" class="px-3 py-2 whitespace-nowrap">
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-3 py-2  text-xs whitespace-nowrap ">
                                            Cefalexin 250mg/5ml - Exel
                                        </th>
                                        <td class="px-3 py-2 text-xs whitespace-nowrap">
                                            3
                                        </td>
                                        <td class="px-3 py-2 text-xs whitespace-nowrap">
                                            200
                                        </td>
                                        <td class="px-3 py-2 text-xs">
                                            <button class=" p-1 bg-red-700 rounded">
                                                <svg class=" w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"></path></svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=" absolute bottom-0 left-0 right-0 p-2 z-20">
                        <div class=" border-t pt-2">
                            <div class=" grid grid-cols-2 gap-6 mb-3">
                                <div>
                                    <div class=" grid grid-cols-2 mb-1">
                                        <p class=" text-xs">Total Item(s):</p>
                                        <p class=" text-xs">0</p>
                                    </div>
                                    <div class=" grid grid-cols-2">
                                        <p class=" text-xs">Discount:</p>
                                        <input type="number" class=" rounded p-1 text-xs">
                                    </div>
                                </div>
                                <div class=" place-content-center">
                                    <div class=" flex flex-col">
                                        <p class=" text-xs">Total Price:</p>
                                        <p class=" text-xl font-bold">2000</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" flex items-center gap-2 justify-end">
                                <button class=" bg-indigo-600 flex items-center gap-1 py-2 px-2 text-sm text-white rounded shadow-sm">
                                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 17H17V22H7V17ZM19 20V15H5V20H3C2.44772 20 2 19.5523 2 19V9C2 8.44772 2.44772 8 3 8H21C21.5523 8 22 8.44772 22 9V19C22 19.5523 21.5523 20 21 20H19ZM5 10V12H8V10H5ZM7 2H17C17.5523 2 18 2.44772 18 3V6H6V3C6 2.44772 6.44772 2 7 2Z"></path></svg>
                                </button>
                                <button class=" bg-green-600 flex items-center gap-1 py-1.5 px-2 text-sm text-white rounded shadow-sm">
                                    <svg class=" w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3.00488 2.99979H21.0049C21.5572 2.99979 22.0049 3.4475 22.0049 3.99979V19.9998C22.0049 20.5521 21.5572 20.9998 21.0049 20.9998H3.00488C2.4526 20.9998 2.00488 20.5521 2.00488 19.9998V3.99979C2.00488 3.4475 2.4526 2.99979 3.00488 2.99979ZM20.0049 10.9998H4.00488V18.9998H20.0049V10.9998ZM20.0049 8.99979V4.99979H4.00488V8.99979H20.0049ZM14.0049 14.9998H18.0049V16.9998H14.0049V14.9998Z"></path></svg>
                                    Pay
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" pl-[460px] pr-2">
                <div class="bg-white rounded h-auto w-full p-2">
                    <div class=" mb-8">
                        <div class=" mb-2">
                            <input type="text" name="" id="" placeholder="Search product by name"
                                class=" w-full rounded placeholder:text-sm text-sm">
                        </div>
                        <ul>
                            <li>
                                <Button class=" border py-1 text-xs px-3 rounded bg-gray-700 text-white">
                                    All
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Antibiotic Suspension
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Antibiotic Tablet
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Medication Suspension
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Medication Tablet
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Edibles
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Wellness
                                </Button>
                                <Button class=" border py-1 text-xs px-3 rounded">
                                    Hygiene
                                </Button>
                            </li>
                        </ul>
                    </div>

                    {{-- Item --}}
                    <div class=" flex items-center flex-wrap">
                        
                        <button @click="toggleShowModal" class=" flex flex-col items-center border rounded px-2 py-5">
                            <svg class=" w-14 h-14 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 20V7L20 3H4L2 7.00353V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20ZM5.23582 5H18.7638L19.7638 7H4.23682L5.23582 5ZM9 11H15V13H9V11Z"></path></svg>
                            <p class=" text-xs text-center">Cefalexin 250mg/5ml - Exel</p>
                            <div class=" py-2 mt-2">
                                <p class=" text-xs text-center">Stock: 10</p>
                                <p class=" text-xs text-center text-green-600 font-medium">&#8369;200</p>
                            </div>
                        </button>  
                        <button @click="toggleShowModal" class=" flex flex-col items-center border rounded px-2 py-5">
                            <svg class=" w-14 h-14 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 20V7L20 3H4L2 7.00353V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20ZM5.23582 5H18.7638L19.7638 7H4.23682L5.23582 5ZM9 11H15V13H9V11Z"></path></svg>
                            <p class=" text-xs text-center">Cefalexin 250mg/5ml - Exel</p>
                            <div class=" py-2 mt-2">
                                <p class=" text-xs text-center">Stock: 10</p>
                                <p class=" text-xs text-center text-green-600 font-medium">&#8369;200</p>
                            </div>
                        </button>  
                        <button @click="toggleShowModal" class=" flex flex-col items-center border rounded px-2 py-5">
                            <svg class=" w-14 h-14 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 20V7L20 3H4L2 7.00353V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20ZM5.23582 5H18.7638L19.7638 7H4.23682L5.23582 5ZM9 11H15V13H9V11Z"></path></svg>
                            <p class=" text-xs text-center">Cefalexin 250mg/5ml - Exel</p>
                            <div class=" py-2 mt-2">
                                <p class=" text-xs text-center">Stock: 10</p>
                                <p class=" text-xs text-center text-green-600 font-medium">&#8369;200</p>
                            </div>
                        </button>  
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('livewire.pos.modal.modal')

    @push('script')
        <script>
            document.addEventListener('livewire:init', () =>{
                Alpine.data('initData', function(){
                    return {
                        toggleShowModal(){
                            this.$wire.show = ! this.$wire.show;
                        },
                        init(){
                            console.log('Testing')
                        }
                    }
                })
            })
        </script>
    @endpush

</div>