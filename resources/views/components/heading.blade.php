<div>
    <div class="mb-11">
        <div class="mb-7">
            <h2 class="text-2xl font-medium tracking-wide text-gray-700 ">{{ $title }}</h2>
        </div>

        <nav class="flex " aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                @foreach($breadcrumbs as $breadcrumb)
                    <li class="inline-flex items-center">
                        @if(!$loop->first)
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                            </div>
                        @endif
                        <a href="{{ $breadcrumb['url'] }}" class="inline-flex items-center text-xs font-normal text-gray-600 hover:text-primary-red dark:text-gray-400 dark:hover:text-white">
                            @if($breadcrumb['icon'])
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="{{ $breadcrumb['icon'] }}"/>
                                </svg>
                            @endif
                            {{ $breadcrumb['label'] }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
