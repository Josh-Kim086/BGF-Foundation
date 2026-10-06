<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="min-h-24 py-3 flex items-center justify-between">

            <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img
            src="{{ asset('images/BGFF-FINAL-FULL-LOGO.svg') }}"
             alt="Better Globe Forestry Foundation"
             class="h-16 w-auto"
            >

                <div class="hidden sm:block">
                    <div class="font-bold text-bgf-dark leading-none">
                        BGF Foundation
                    </div>

                    
                </div>

            </a>

            <nav class="hidden lg:flex items-center gap-8">

                <a href="{{ route('home') }}"
                   class="text-sm font-medium text-gray-700 hover:text-bgf-green">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="text-sm font-medium text-gray-700 hover:text-bgf-green">
                    About Us
                </a>

                <a href="#projects"
                   class="text-sm font-medium text-gray-700 hover:text-bgf-green">
                    Projects
                </a>

                <a href="#partners"
                   class="text-sm font-medium text-gray-700 hover:text-bgf-green">
                    Partners
                </a>

                <a href="#contact"
                   class="text-sm font-medium text-gray-700 hover:text-bgf-green">
                    Contact
                </a>

                <a href="#faq"
                   class="text-sm font-medium text-gray-700 hover:text-bgf-green">
                    FAQ
                </a>

            </nav>

            <div class="hidden lg:block">

                <a href="#contact"
                   class="inline-flex items-center px-5 py-3 rounded-full bg-bgf-dark text-white text-sm font-semibold hover:bg-bgf-green">
                    Get Involved
                </a>

            </div>

            <button
                type="button"
                class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100"
                aria-label="Open menu">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.8"
                     stroke="currentColor"
                     class="w-6 h-6">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>

                </svg>

            </button>

        </div>

    </div>

</header>
