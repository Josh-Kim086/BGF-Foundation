<footer class="bg-bgf-dark text-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">

            <div class="lg:col-span-2">

                <div class="text-2xl font-bold">
                    BGF Foundation
                </div>

                <p class="mt-5 max-w-lg text-green-100 leading-7">
                    Supporting communities, environmental initiatives and
                    sustainable development through practical, locally
                    grounded programmes.
                </p>

            </div>

            <div>

                <h3 class="font-semibold text-lg">
                    Explore
                </h3>

                <div class="mt-5 space-y-3 text-green-100">

                    <a href="{{ route('home') }}" class="block hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('about') }}" class="block hover:text-white">
                        About Us
                    </a>

                    <a href="#projects" class="block hover:text-white">
                        Projects
                    </a>

                    <a href="#partners" class="block hover:text-white">
                        Partners
                    </a>

                </div>

            </div>

            <div>

                <h3 class="font-semibold text-lg">
                    Connect
                </h3>

                <div class="mt-5 space-y-3 text-green-100">

                    <a href="#contact" class="block hover:text-white">
                        Contact Us
                    </a>

                    <a href="#faq" class="block hover:text-white">
                        Frequently Asked Questions
                    </a>

                </div>

            </div>

        </div>

        <div class="border-t border-white/20 mt-12 pt-6
                    flex flex-col md:flex-row
                    justify-between gap-4
                    text-sm text-green-100">

            <p>
                &copy; {{ date('Y') }} BGF Foundation. All rights reserved.
            </p>

            <p>
                Better Globe Forestry Foundation
            </p>

        </div>

    </div>

</footer>
