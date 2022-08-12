<x-layouts.app_full>
    <style>
        .glb_navigation {
            display: none;
        }
    </style>
    <div class="grid grid-cols-11 h-screen">
        <div class="col-span-4 md:h-screen">
            <img src="{{ asset('img/regbg.jpg') }}" class="md:h-screen w-full object-cover">
        </div>
        <div class="md:col-span-7 flex items-center w-full max-h-screen col-span-11  px-8">


            <form action="{{ route('register_store') }}" class="jsc_register w-full px-[150px] mx-auto ">
                <div class="min-h-full px-2 bg-white rounded-md  my-4 py-4">
                    <section class="jsc_page  space-y-8 divide-y divide-transparent" data-page="0">
                        <article>
                            <div>
                                <h3 class=" leading-6 font-semibold text-theme-dark">Personal Information</h3>
                            </div>
                            <div class="mt-2 grid grid-cols-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="firstname" class="block text-sm font-medium text-gray-700"> First name </label>
                                    <div class="mt-1">
                                        <input type="text" name="firstname" value="{{ old('firstname') ?? '' }}"
                                            value="{{ old('firstname') ?? '' }}" id="firstname" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="lastname" class="block text-sm font-medium text-gray-700"> Last name </label>
                                    <div class="mt-1">
                                        <input type="text" name="lastname" value="{{ old('lastname') ?? '' }}" id="lastname"
                                            autocomplete="family-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-6 col-span-2">
                                    <label for="birthday" class="block text-sm font-medium text-gray-700"> Date of Birth : </label>
                                    <div class="mt-1">
                                        <input type="date" name="birthday" value="{{ old('birthday') ?? '' }}" id="birthday"
                                            autocomplete="family-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-6 col-span-2">
                                    <fieldset class="mt-2">
                                        <div class="flex justify-between lg:justify-start lg:gap-8 ">
                                            <label class="text-base font-medium text-gray-900">Gendar</label>
                                            <div class="flex gap-4">
                                                <div class="flex items-center">
                                                    <input id="man" value="man" name="gendar" value="{{ old('gendar') ?? '' }}"
                                                        type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="man" class="ml-1 block text-sm font-medium text-gray-700"> Man </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="woman" value="woman" name="gendar" value="{{ old('gendar') ?? '' }}"
                                                        type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="woman" class="ml-1 block text-sm font-medium text-gray-700"> Woman </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </article>
                        <article class="pt-8">
                            <div>
                                <h3 class=" leading-6 font-semibold text-theme-dark">Account Information</h3>
                            </div>
                            <div class="mt-2 grid grid-cols-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3 col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email address </label>
                                    <div class="mt-1">
                                        <input type="email" name="email" value="{{ old('email') ?? '' }}" id="email" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-3 col-span-2">
                                    <label for="email_confirmation " class="block text-sm font-medium text-gray-700">Email repeat </label>
                                    <div class="mt-1">
                                        <input type="email" name="email_confirmation"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-6 col-span-2">
                                    <label for="phone" class=" block text-sm font-medium text-gray-700">Phone number </label>
                                    <div class="mt-1">
                                        <input type="text" name="phone" value="{{ old('phone') ?? '' }}" id="phone"
                                            class="global_phone shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block !w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-3 ">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Password </label>
                                    <div class="mt-1">
                                        <input type="password" placeholder="at least 8 characters" name="password"
                                            value="{{ old('password') ?? '' }}" id="password"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-3 ">
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Password repeat </label>
                                    <div class="mt-1">
                                        <input type="password" name="password_confirmation" value="{{ old('password') ?? '' }}"
                                            id="password_confirmation"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>


                        </article>
                        <article class="pt-5 ">
                            <div class="flex justify-end">
                                <a href="{{ route('login_form') }}"
                                    class=" inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Login instead</a>
                                <div
                                    class="jsc_page_next ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Next</div>
                            </div>
                        </article>
                    </section>
                    <section class="jsc_page  hidden space-y-8 divide-y divide-transparent" data-page="1">
                        <article>
                            <div>
                                <h3 class=" leading-6 font-semibold text-theme-dark">Personal Information</h3>
                            </div>
                            <div class="mt-2 grid grid-cols-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
                                    <div class="mt-1">
                                        <select name="country" value="{{ old('country') ?? '' }}" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="US">US</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700"> City </label>
                                    <div class="mt-1">
                                        <select name="city" value="{{ old('city') ?? '' }}" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-6 col-span-2">
                                    <label for="postalcode" class="block text-sm font-medium text-gray-700"> PostalCode </label>
                                    <div class="mt-1">
                                        <input type="text" name="postalcode" value="{{ old('postalcode') ?? '' }}" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-6 col-span-2">
                                    <label class="block text-sm font-medium text-gray-700"> Address </label>
                                    <div class="mt-1">
                                        <textarea name="address" autocomplete="given-name"
                                            class=" h-28 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ old('address') ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pt-6">
                            <div>
                                <h3 class=" leading-6 font-semibold text-theme-dark">Carrier information</h3>
                            </div>
                            <div class="mt-2 grid grid-cols-2 gap-y-6 gap-x-4 sm:grid-cols-6">

                                <div class="sm:col-span-3 col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Profession </label>
                                    <div class="mt-1">
                                        <input type="text" name="profession" value="{{ old('profession') ?? '' }}" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-3 ">
                                    <label class="block text-sm font-medium text-gray-700">Education </label>
                                    <div class="mt-1">
                                        <input type="text" name="education" value="{{ old('education') ?? '' }}" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="sm:col-span-6 ">
                                    <label class="block text-sm font-medium text-gray-700">University </label>
                                    <div class="mt-1">
                                        <input type="text" name="university" value="{{ old('university') ?? '' }}" autocomplete="given-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="pt-5 ">
                            <div class="flex justify-end">
                                <div
                                    class="jsc_page_back inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Previous</div>
                                <div
                                    class="jsc_page_next ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Next</div>
                            </div>
                        </article>
                    </section>
                    <section class="jsc_page hidden  space-y-8 divide-y divide-transparent" data-page="2">
                        <article>
                            <div>
                                <h3 class="leading-6 font-semibold text-theme-dark">Further information</h3>
                            </div>
                            <div class="mt-2 grid grid-cols-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700"> Native language </label>
                                    <div class="mt-1">
                                        <select name="language_first" value="{{ old('language_first') ?? '' }}"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">Second language </label>
                                    <div class="mt-1">
                                        <select name="language_second" value="{{ old('language_second') ?? '' }}"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="spanish">Spanish</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="sm:col-span-3 col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Security question </label>
                                    <div class="mt-1">
                                        <select name="security_question" value="{{ old('security_question') ?? '' }}"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="animal">What is your favorit animal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Answer : </label>
                                    <div class="mt-1">
                                        <input type="text" name="security_answer" value="{{ old('security_answer') ?? '' }}"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article>
                            <div>
                                <h3 class="leading-6 font-semibold text-theme-dark">Social media</h3>
                            </div>
                            <div class="mt-2 grid grid-cols-2  gap-x-4 ">
                                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 w-[90px] text-gray-500 sm:text-sm">
                                        Instagram </span>
                                    <input type="text" name="instagram" value="{{ old('instagram') ?? '' }}"
                                        class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                                </div>
                                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 w-[90px] text-gray-500 sm:text-sm">
                                        Twitter </span>
                                    <input type="text" name="Twitter" value="{{ old('Twitter') ?? '' }}"
                                        class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                                </div>
                                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 w-[90px] text-gray-500 sm:text-sm">
                                        Facebook </span>
                                    <input type="text" name="Facebook" value="{{ old('Facebook') ?? '' }}"
                                        class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                                </div>
                                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 w-[90px] text-gray-500 sm:text-sm">
                                        Whatsapp </span>
                                    <input type="text" name="Whatsapp" value="{{ old('Whatsapp') ?? '' }}"
                                        class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                                </div>
                                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 w-[90px] text-gray-500 sm:text-sm">
                                        Telegram </span>
                                    <input type="text" name="Telegram" value="{{ old('Telegram') ?? '' }}"
                                        class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                                </div>
                                <div class="mt-3 flex rounded-md shadow-sm col-span-2 sm:col-span-1">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 w-[90px] text-gray-500 sm:text-sm">
                                        linkedin </span>
                                    <input type="text" name="linkedin" value="{{ old('linkedin') ?? '' }}"
                                        class="flex-1 min-w-0 text-sm block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                                </div>
                            </div>
                        </article>


                        <article class="pt-5">
                            <div class="flex justify-end">
                                <div
                                    class="jsc_page_back inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Previous</div>
                                <div
                                    class="jsc_page_submit ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Submit</div>
                            </div>
                        </article>
                    </section>
                </div>
            </form>

        </div>
    </div>
    <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
    <script>

    </script>

    <script>
        let current_page = 0;
        $('.jsc_page_next').on('click', function() {
            current_page++;
            changePageHandler()
        })
        $('.jsc_page_back').on('click', function() {
            current_page--;
            changePageHandler()
        })
        $('.jsc_page_submit').on('click', function() {
            $('.jsc_register').submit();
        })

        function changePageHandler() {
            $('.jsc_page').each(function() {
                if ($(this).attr('data-page') != current_page) {
                    $(this).addClass('hidden');
                } else {
                    $(this).removeClass('hidden');
                }
            })
        }
    </script>
    </x-layouts.app>
