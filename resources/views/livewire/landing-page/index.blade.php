<div x-data="{ openMenuMobile: false }">
    <div class="fixed top-0 left-0 right-0 z-60 bg-primary-blue-light">
        <nav
            class=" max-w-[1274px] w-[90%] mx-auto flex items-center justify-between py-5 animate__animated animate__fadeInDown">
            <a href="#" @click="openMenuMobile = false">
                <h3 class="text-lg font-bold tracking-wide text-blue">Dr <span class=" text-primary-yellow">Paws</span>
                </h3>
            </a>
            <ul class="items-center hidden gap-10 md:flex ">
                <li>
                    <a href="#about"
                        class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">About</a>
                </li>
                <li>
                    <a href="#services"
                        class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Services</a>
                </li>
                <li>
                    <a href="#pricing"
                        class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Offers</a>
                </li>
                <li>
                    <a href="#appointment"
                        class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Appointment</a>
                </li>
                <li>
                    <a href="#contact"
                        class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Contact</a>
                </li>
            </ul>
            <button @click="openMenuMobile = ! openMenuMobile" class="block md:hidden">
                <svg x-show="!openMenuMobile" class="w-6 h-6 text-white " xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 4H21V6H3V4ZM3 11H15V13H3V11ZM3 18H21V20H3V18Z"></path>
                </svg>
                <svg x-cloak x-show="openMenuMobile" class="w-6 h-6 text-white " xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z">
                    </path>
                </svg>
            </button>
        </nav>
    </div>
    <ul x-cloak
        :class="openMenuMobile ? 'top-[67px] transition-all ease-linear duration-300' :
            '-top-[100vh] transition-all ease-linear duration-300'"
        class="fixed left-0 right-0 z-50 flex flex-col items-center gap-10 py-8 bg-primary-blue-light ">
        <li>
            <a @click="openMenuMobile = false" href="#about"
                class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">About</a>
        </li>
        <li>
            <a @click="openMenuMobile = false" href="#services"
                class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Services</a>
        </li>
        <li>
            <a @click="openMenuMobile = false" href="#pricing"
                class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Offers</a>
        </li>
        <li>
            <a @click="openMenuMobile = false" href="#appointment"
                class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Appointment</a>
        </li>
        <li>
            <a @click="openMenuMobile = false" href="#contact"
                class="text-sm text-white transition-all ease-linear hover:text-primary-yellow">Contact</a>
        </li>
    </ul>
    <div
        class="flex items-center justify-between pt-28 md:pt-16 py-16 max-w-[1274px] md:max-w-none w-[90%] md:w-full mx-auto">
        <div class=" md:pl-[83px] animate__animated animate__fadeInLeft">
            <div class=" max-w-[617px] mb-8">
                <h1 class="mb-5 font-bold leading-tight text-dark heading-font-size">Your <span
                        class=" text-primary-yellow">Pet</span> Is Part Of Our <span class=" text-blue">Family</span>
                </h1>
                <p class="text-sm leading-loose tracking-wide ">Welcome to Dr. paws veterinary clinic and Grooming
                    Center, where your pet becomes part of our family. With a deep commitment to compassionate care and
                    personalized attention, we treat every furry friend as if they were our own. Experience the
                    difference of entrusting your pet to a team that values their well-being and happiness above all
                    else. Join our family today and give your pet the love and care they deserve.</p>
            </div>
            <div class="inline-flex items-center gap-4 ">
                <a href="#"
                    class="px-5 py-3 font-bold tracking-wide text-white rounded-md shadow bg-primary-blue">
                    Book Schedule
                </a>
                <a href="#"
                    class="px-5 py-3 font-bold tracking-wide text-white rounded-md shadow bg-primary-yellow">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="hidden animate__animated animate__fadeInRight md:block">
            <img class=" w-[633px] h-auto" src="{{ asset('images/landing-page/heading-image.png') }}" alt="Dog and Cat">
        </div>
    </div>

    {{-- about --}}
    <div id="about" class="flex items-center w-full h-auto py-16 bg-lightgray">
        <div
            class="flex items-center flex-col lg:flex-row gap-3 lg:gap-0 justify-between max-w-[1274px] w-[90%] mx-auto">
            <div class="">
                <div class=" max-w-[617px] mb-5">
                    <h1 data-aos="fade-up" class=" text-dark font-bold text-2xl md:text-[35px] leading-tight mb-2">Why
                        Choose Dr
                        Paws ?</span></h1>
                    <p data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                        class="text-sm leading-loose tracking-wide ">
                        There are many things to consider when choosing a clinic that will provide the needs of your
                        pets. Trust is a critical factor that should be at the top of every pet parent's mind. At Dr.
                        Paws Veterinary Clinic and Grooming Center, you can rest assured that your pet is always safe
                        and loved.
                    </p>
                </div>
                <ul data-aos-duration="1000" data-aos-delay="200" data-aos="fade-up" class="flex flex-col gap-3 mb-9">
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Through examinations ensure early detection and prevention of any potential health issues.
                    </li>
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Advanced imaging technology offers non-invasive diagnostics for accurate assessments.
                    </li>
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Comprehensive screenings provide to valuable insights into your furry friend's well-being.
                    </li>
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Ensures your pet receives expert care and attention throughout their procedure.
                    </li>
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Safe and effective treatments to rid your furry friend of harmful parasites.
                    </li>
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Ensures your furry friend receives the necessary immunizations to stay healthy and happy.
                    </li>
                    <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                        <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                        Pamper your pet with precision and care.
                    </li>
                </ul>
                <div data-aos-duration="1000" data-aos-delay="300" data-aos="fade-up"
                    class="inline-flex items-center gap-4 ">
                    <a href="#"
                        class="px-5 py-3 font-bold tracking-wide text-white rounded-md shadow bg-primary-blue">
                        Contact Us
                    </a>
                </div>
            </div>
            <div data-aos-duration="1000" data-aos-delay="400" data-aos="fade-left">
                <img class=" w-[500px] h-auto" src="{{ asset('images/landing-page/about-image.webp') }}"
                    alt="Dog and Cat">
            </div>
        </div>
    </div>

    {{-- services --}}
    <div id="services" class="flex items-center w-full h-auto py-28">
        <div class="max-w-[1274px] w-[90%] mx-auto">
            <div class="">
                <div class="mb-20 ">
                    <h1 data-aos-duration="1000" data-aos="fade-up"
                        class=" text-dark font-bold text-2xl md:text-[35px] leading-tight mb-1 text-center">Our Pet
                        Care
                        Services</span></h1>
                    <p data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                        class=" text-sm tracking-wide leading-relaxed text-center max-w-[1200px] mx-auto">
                        At Our Pet Care Services, we understand that your pets are family. That's why we offer a
                        comprehensive range of tailored services to cater to their every need. From vaccination and
                        grooming to attentive companionship, our dedicated team ensures that your furry friends receive
                        the highest standard of care. With a focus on their well-being and happiness, we provide a
                        loving environment where they can thrive. Experience peace of mind knowing that your pets are in
                        capable hands. Contact us today to learn more about how we can enhance your pet's quality of
                        life.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 ">
                    <div data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                        class="px-4 py-6 bg-center bg-cover rounded-md bg-grooming">
                        <div class="inline-block p-2 rounded-md bg-primary-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-white">
                                <path fill-rule="evenodd"
                                    d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold tracking-wide text-white ">Grooming</h3>
                        <p class="text-sm font-light leading-relaxed tracking-wide text-white ">
                            Welcome to Our Pet Care Services' pet grooming – where tails wag and fur shines! Our expert
                            groomers are here to pamper your pet with precision and care. From trims to baths, we'll
                            have your furry friend looking their best in no time. Book your appointment today and let us
                            bring out the beauty in your beloved companion!
                        </p>
                    </div>
                    <div data-aos-duration="1000" data-aos-delay="200" data-aos="fade-up"
                        class="px-4 py-6 bg-center bg-cover rounded-md bg-vaccination">
                        <div class="inline-block p-2 rounded-md bg-primary-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-white">
                                <path fill-rule="evenodd"
                                    d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold tracking-wide text-white ">Vaccination</h3>
                        <p class="text-sm font-light leading-relaxed tracking-wide text-white ">
                            Protect your pet with Our vaccination program. Our experienced team ensures your furry
                            friend receives the necessary immunizations to stay healthy and happy. Schedule your
                            appointment today and give your pet the gift of protection.
                        </p>
                    </div>
                    <div data-aos-duration="1000" data-aos-delay="300" data-aos="fade-up"
                        class="px-4 py-6 bg-center bg-cover rounded-md bg-deworming">
                        <div class="inline-block p-2 rounded-md bg-primary-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-white">
                                <path fill-rule="evenodd"
                                    d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold tracking-wide text-white ">Deworming</h3>
                        <p class="text-sm font-light leading-relaxed tracking-wide text-white ">
                            Safeguard your pet's health with Our Pet deworming program. Our team provides safe and
                            effective treatments to rid your furry friend of harmful parasites. Keep your pet happy and
                            healthy—schedule a deworming appointment today!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Pricing --}}
    <div id="pricing"
        class="flex items-center w-full h-auto py-28 bg-gradient-to-r to-primary-blue from-primary-blue-light">
        <div class="max-w-[1274px] w-[90%] mx-auto">
            <div class="">
                <div class="mb-20 ">
                    <h1 data-aos-duration="1000" data-aos="fade-up"
                        class=" text-gray-100 font-bold text-2xl md:text-[35px] leading-tight mb-3 text-center">Dr Paws
                        Offers and
                        Pricing</span></h1>
                    <p data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                        class=" text-sm text-gray-100 tracking-wide leading-relaxed text-center max-w-[1200px] mx-auto">
                        Explore our range of pet care services and discover competitive pricing options designed to fit
                        your budget. From grooming packages to daycare and boarding rates, we offer transparent pricing
                        for all our offerings. At Our Pet Care Services, we believe in providing top-quality care at
                        affordable prices, ensuring your pet receives the best without breaking the bank. Contact us
                        today to learn more about our current offers and pricing plans, and give your furry friend the
                        care they deserve without compromise.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 ">
                    <div data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                        class="px-4 py-6 rounded-md bg-gradient-to-r to-primary-yellow from-primary-yellow-light">
                        <div class="inline-block p-2 rounded-md bg-primary-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-white">
                                <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                            </svg>
                        </div>
                        <h3 class="mb-4 text-lg font-bold tracking-wide text-center text-dark">Grooming</h3>
                        <div class="py-3 mb-4 rounded-md bg-primary-blue">
                            <p class="text-2xl font-medium tracking-wide text-center text-white ">
                                &#8369;400 - &#8369;1,200
                            </p>
                        </div>
                        <ul class="flex flex-col gap-3 mb-9">
                            <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                                <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                                Small breeds and Large breeds
                            </li>
                            <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                                <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                                Package: 5 + 1 in any small breeds
                            </li>
                        </ul>
                    </div>
                    <div data-aos-duration="1000" data-aos-delay="300" data-aos="fade-up"
                        class="px-4 py-6 rounded-md bg-gradient-to-r to-primary-yellow from-primary-yellow-light">
                        <div class="inline-block p-2 rounded-md bg-primary-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-white">
                                <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                            </svg>
                        </div>
                        <h3 class="mb-4 text-lg font-bold tracking-wide text-center text-dark">Vaccination</h3>
                        <div class="py-3 mb-4 rounded-md bg-primary-blue">
                            <p class="text-2xl font-medium tracking-wide text-center text-white ">
                                &#8369;250 - &#8369;750
                            </p>
                        </div>
                        <ul class="flex flex-col gap-3 mb-9">
                            <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                                <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                                For every vaccination, there is a free face trim and nail clipping.
                            </li>
                        </ul>
                    </div>
                    <div data-aos-duration="1000" data-aos-delay="600" data-aos="fade-up"
                        class="px-4 py-6 rounded-md bg-gradient-to-r to-primary-yellow from-primary-yellow-light">
                        <div class="inline-block p-2 rounded-md bg-primary-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-white">
                                <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                            </svg>

                        </div>
                        <h3 class="mb-4 text-lg font-bold tracking-wide text-center text-dark">Deworming</h3>
                        <div class="py-3 mb-4 rounded-md bg-primary-blue">
                            <p class="text-2xl font-medium tracking-wide text-center text-white ">
                                &#8369;100 - &#8369;250
                            </p>
                        </div>
                        <ul class="flex flex-col gap-3 mb-9">
                            <li class="flex items-center gap-3 text-sm leading-loose tracking-wide ">
                                <img src="{{ asset('images/landing-page/check.png') }}" alt="Check">
                                5% off in 3 to 5 dogs and cats
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- appointment --}}
    <div id="appointment" class="flex items-center w-full h-auto bg-gray-200 ">
        <div class="w-full mx-auto ">
            <div class=" grid grid-cols-1 lg:grid-cols-[40%_1fr]">
                <div class="hidden lg:block">
                    <img class="object-cover w-full h-full "
                        src="{{ asset('images/landing-page/appointment-image.webp') }}" alt="Dog">
                </div>
                <div class="py-20 px-7">
                    <div class="mb-16 ">
                        <h1 data-aos-duration="1000" data-aos="fade-up"
                            class=" text-dark font-bold text-2xl md:text-[35px] leading-tight mb-1 text-center">Set an
                            Appointment
                            With Us</span></h1>
                        <p data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                            class=" text-sm text-dark  tracking-wide leading-relaxed text-center max-w-[1200px] mx-auto">
                            Ready to provide your pet with the exceptional care they deserve? Set an appointment with us
                            today! Our team is eager to meet you and your furry friend, tailoring our services to meet
                            your specific needs. Whether it's for a routine check-up, grooming session, or day of
                            pampering, scheduling with us ensures your pet receives the attention and care they need to
                            thrive. Contact us now to book your appointment and experience the difference of Our Pet
                            Care Services firsthand.
                        </p>
                    </div>
                    <div data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up">
                        <div>
                            <div>
                                <form wire:submit='createRequest'>
                                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-input label="Name" wire:model='requestName'
                                                placeholder="Name" />
                                        </div>
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-inputs.maskable mask="###########" label="Contact No"
                                                placeholder="Contact number" wire:model='requestContactNo'
                                                placeholder="Contact No" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                                        <x-wui-input label="Email" wire:model='requestEmail' placeholder="Email" />
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-input label="Pet Name" wire:model='requestPetName'
                                                placeholder="Pet Name" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-select label="Type of Service" placeholder="Select one service"
                                                :options="['Vaccination', 'Grooming', 'Consultation']" wire:model.defer="requestService" />
                                        </div>
                                        <x-wui-datetime-picker label="Appointment Date" placeholder="Appointment Date"
                                            :min="now()->addDay()" without-time="true"
                                            wire:model.defer="requestAppointmentDate" />
                                    </div>
                                    <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-select label="Species" placeholder="Select Species"
                                                :options="['Dog', 'Cat', 'Goat']" wire:model.defer="species" />
                                        </div>
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-select label="Type of Pet" placeholder="Select Type"
                                                :options="['Domestic', 'Wild', 'Exotic']" wire:model.defer="pet_type" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                                        <x-wui-input label="Breed" wire:model='breed' placeholder="Breed" />
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-input label="Sex" wire:model='sex' placeholder="Sex" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-1 mb-5 md:grid-cols-2">
                                        <x-wui-input label="Address" wire:model='requestAddress'
                                            placeholder="Address" />
                                        <div class="flex flex-col gap-1 mb-5 ">
                                            <x-wui-datetime-picker label="Pet Birthdate" wire:model='birth_date'
                                                placeholder="Pet Birthdate" without-time />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1 mb-5 ">
                                        <x-wui-textarea wire:model="requestPetInfo" label="Pet Info"
                                            placeholder="Describe your pet like what is his/her Breed, Sex, Markings, Age, Weight" />
                                    </div>
                                    <div class="flex items-center justify-end ">
                                        <button type="submit"
                                            class="px-5 py-2 text-sm font-bold tracking-wide text-white rounded-md shadow bg-primary-blue">
                                            Set Appointment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div id="contact" class="flex items-center w-full h-auto py-16">
        <div class="max-w-[1274px] w-[90%] mx-auto">
            <div class="mb-3 ">
                <h1 data-aos-duration="1000" data-aos="fade-up"
                    class=" text-dark font-bold text-2xl md:text-[35px] leading-tight mb-1 text-center">Get In
                    Touch</span></h1>
                <p data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                    class=" text-sm text-dark tracking-wide leading-relaxed text-center max-w-[1100px] mx-auto mb-8">
                    Have questions about our services or want to learn more about how we can care for your beloved pet?
                    Get in touch with us today! Our friendly team is here to assist you and address any inquiries you
                    may have. Whether it's via phone, email, or in person, we're committed to providing you with the
                    information you need to make the best choices for your furry friend. Reach out to us now and let's
                    start the conversation about how we can support your pet's well-being.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 ">
                <div class="overflow-hidden rounded-tr-md lg:rounded-tr-none rounded-tl-md lg:rounded-bl-md">
                    {{-- <div class="flex flex-col gap-6 ">
                        <p data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                            class="flex items-center gap-2 text-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M17.834 6.166a8.25 8.25 0 1 0 0 11.668.75.75 0 0 1 1.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0 1 21.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 1 1-.82-6.26V8.25a.75.75 0 0 1 1.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 0 0-2.416-5.834ZM15.75 12a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            exampale@gmail.com
                        </p>
                        <p data-aos-duration="1000" data-aos-delay="200" data-aos="fade-up"
                            class="flex items-center gap-2 text-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            09343435433
                        </p>
                    </div> --}}
                    <div class=" bg-primary-blue w-full h-[400px] lg:h-full " data-aos-duration="1000"
                        data-aos-delay="100" data-aos="fade-up">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923.7690975242053!2d121.04697003857024!3d15.347311882869592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33972382a79317d5%3A0xec803da56567b632!2sDr.%20Paws%20Veterinary%20Clinic!5e0!3m2!1sen!2sph!4v1712927106119!5m2!1sen!2sph"
                            style="border:0;width:100%;height:100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div data-aos-duration="1000" data-aos-delay="100" data-aos="fade-up"
                    class="p-5 overflow-hidden bg-center bg-cover bg-contact rounded-bl-md lg:rounded-bl-none lg:rounded-tr-md rounded-br-md">
                    <div>
                        <h3 class="mb-4 text-lg font-medium tracking-wide text-white">Email Us</h3>
                        <form wire:submit='inquire'>
                            <div class="flex flex-col gap-2 mb-5 ">
                                <label for="" class="-mb-1 text-sm text-white ">Name</label>
                                <x-wui-input wire:model='contactus_name' placeholder="Name" />
                            </div>
                            <div class="flex flex-col gap-2 mb-5 ">
                                <label for="" class="-mb-1 text-sm text-white ">Email</label>
                                <x-wui-input wire:model='contactus_email' placeholder="Email" />
                            </div>
                            <div class="flex flex-col gap-2 mb-5 ">
                                <label for="" class="-mb-1 text-sm text-white ">Subject</label>
                                <x-wui-input wire:model='contactus_subject' placeholder="Subject" />
                            </div>
                            <div class="flex flex-col gap-2 mb-5 ">
                                <label for="" class="-mb-1 text-sm text-white ">Message</label>
                                <x-wui-textarea wire:model="contactus_message" placeholder="Message" />
                            </div>
                            <div class="flex items-center justify-end ">
                                <button type="submit"
                                    class="px-5 py-2 text-sm font-bold tracking-wide text-white rounded-md shadow bg-primary-yellow">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="py-4 bg-gradient-to-r to-primary-blue from-primary-blue-light">
        <div class=" max-w-[1274px] w-[90%] mx-auto  flex items-center justify-between mb-3">
            <h3 class="text-lg font-bold tracking-wide text-blue">Dr <span class=" text-primary-yellow">Paws</span>
            </h3>
            <ul class="flex items-center gap-5 ">
                <li>
                    <a href="#" title="Facebook">
                        <svg class="text-white transition-all ease-linear w-7 h-7 hover:text-primary-yellow"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M15.4024 21V14.0344H17.7347L18.0838 11.3265H15.4024V9.59765C15.4024 8.81364 15.62 8.27934 16.7443 8.27934L18.1783 8.27867V5.85676C17.9302 5.82382 17.0791 5.75006 16.0888 5.75006C14.0213 5.75006 12.606 7.01198 12.606 9.32952V11.3265H10.2677V14.0344H12.606V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15.4024Z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" title="Twitter">
                        <svg class="text-white transition-all ease-linear w-7 h-7 hover:text-primary-yellow"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22.2125 5.65605C21.4491 5.99375 20.6395 6.21555 19.8106 6.31411C20.6839 5.79132 21.3374 4.9689 21.6493 4.00005C20.8287 4.48761 19.9305 4.83077 18.9938 5.01461C18.2031 4.17106 17.098 3.69303 15.9418 3.69434C13.6326 3.69434 11.7597 5.56661 11.7597 7.87683C11.7597 8.20458 11.7973 8.52242 11.8676 8.82909C8.39047 8.65404 5.31007 6.99005 3.24678 4.45941C2.87529 5.09767 2.68005 5.82318 2.68104 6.56167C2.68104 8.01259 3.4196 9.29324 4.54149 10.043C3.87737 10.022 3.22788 9.84264 2.64718 9.51973C2.64654 9.5373 2.64654 9.55487 2.64654 9.57148C2.64654 11.5984 4.08819 13.2892 6.00199 13.6731C5.6428 13.7703 5.27232 13.8194 4.90022 13.8191C4.62997 13.8191 4.36771 13.7942 4.11279 13.7453C4.64531 15.4065 6.18886 16.6159 8.0196 16.6491C6.53813 17.8118 4.70869 18.4426 2.82543 18.4399C2.49212 18.4402 2.15909 18.4205 1.82812 18.3811C3.74004 19.6102 5.96552 20.2625 8.23842 20.2601C15.9316 20.2601 20.138 13.8875 20.138 8.36111C20.138 8.1803 20.1336 7.99886 20.1256 7.81997C20.9443 7.22845 21.651 6.49567 22.2125 5.65605Z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" title="Instagram">
                        <svg class="text-white transition-all ease-linear w-7 h-7 hover:text-primary-yellow"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M13.0281 2.00073C14.1535 2.00259 14.7238 2.00855 15.2166 2.02322L15.4107 2.02956C15.6349 2.03753 15.8561 2.04753 16.1228 2.06003C17.1869 2.1092 17.9128 2.27753 18.5503 2.52503C19.2094 2.7792 19.7661 3.12253 20.3219 3.67837C20.8769 4.2342 21.2203 4.79253 21.4753 5.45003C21.7219 6.0867 21.8903 6.81337 21.9403 7.87753C21.9522 8.1442 21.9618 8.3654 21.9697 8.58964L21.976 8.78373C21.9906 9.27647 21.9973 9.84686 21.9994 10.9723L22.0002 11.7179C22.0003 11.809 22.0003 11.903 22.0003 12L22.0002 12.2821L21.9996 13.0278C21.9977 14.1532 21.9918 14.7236 21.9771 15.2163L21.9707 15.4104C21.9628 15.6347 21.9528 15.8559 21.9403 16.1225C21.8911 17.1867 21.7219 17.9125 21.4753 18.55C21.2211 19.2092 20.8769 19.7659 20.3219 20.3217C19.7661 20.8767 19.2069 21.22 18.5503 21.475C17.9128 21.7217 17.1869 21.89 16.1228 21.94C15.8561 21.9519 15.6349 21.9616 15.4107 21.9694L15.2166 21.9757C14.7238 21.9904 14.1535 21.997 13.0281 21.9992L12.2824 22C12.1913 22 12.0973 22 12.0003 22L11.7182 22L10.9725 21.9993C9.8471 21.9975 9.27672 21.9915 8.78397 21.9768L8.58989 21.9705C8.36564 21.9625 8.14444 21.9525 7.87778 21.94C6.81361 21.8909 6.08861 21.7217 5.45028 21.475C4.79194 21.2209 4.23444 20.8767 3.67861 20.3217C3.12278 19.7659 2.78028 19.2067 2.52528 18.55C2.27778 17.9125 2.11028 17.1867 2.06028 16.1225C2.0484 15.8559 2.03871 15.6347 2.03086 15.4104L2.02457 15.2163C2.00994 14.7236 2.00327 14.1532 2.00111 13.0278L2.00098 10.9723C2.00284 9.84686 2.00879 9.27647 2.02346 8.78373L2.02981 8.58964C2.03778 8.3654 2.04778 8.1442 2.06028 7.87753C2.10944 6.81253 2.27778 6.08753 2.52528 5.45003C2.77944 4.7917 3.12278 4.2342 3.67861 3.67837C4.23444 3.12253 4.79278 2.78003 5.45028 2.52503C6.08778 2.27753 6.81278 2.11003 7.87778 2.06003C8.14444 2.04816 8.36564 2.03847 8.58989 2.03062L8.78397 2.02433C9.27672 2.00969 9.8471 2.00302 10.9725 2.00086L13.0281 2.00073ZM12.0003 7.00003C9.23738 7.00003 7.00028 9.23956 7.00028 12C7.00028 14.7629 9.23981 17 12.0003 17C14.7632 17 17.0003 14.7605 17.0003 12C17.0003 9.23713 14.7607 7.00003 12.0003 7.00003ZM12.0003 9.00003C13.6572 9.00003 15.0003 10.3427 15.0003 12C15.0003 13.6569 13.6576 15 12.0003 15C10.3434 15 9.00028 13.6574 9.00028 12C9.00028 10.3431 10.3429 9.00003 12.0003 9.00003ZM17.2503 5.50003C16.561 5.50003 16.0003 6.05994 16.0003 6.74918C16.0003 7.43843 16.5602 7.9992 17.2503 7.9992C17.9395 7.9992 18.5003 7.4393 18.5003 6.74918C18.5003 6.05994 17.9386 5.49917 17.2503 5.50003Z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <p class="text-xs text-center text-white ">Copyright ©, 2024, All Rights Reserved</p>
    </div>
</div>
