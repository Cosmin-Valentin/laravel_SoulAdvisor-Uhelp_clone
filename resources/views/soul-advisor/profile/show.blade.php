<x-app-layout>
    <x-slot name="header">
        @include('soul-advisor.components.back-button', ['header' => 'Current Profile'])
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-neutral-800 shadow sm:rounded-lg">
                <section class="border-b border-slate-700 py-5">
                    <div class="block md:grid grid-cols-4">
                        <div class="relative m-auto w-44 h-44 col-span-1 md:w-32 md:h-32 lg:w-44 lg:h-44">
                            <img src="{{ isset($profile->photo) ? (asset('photos/' . str_replace('photos/', '',$profile->photo))) :  '/images/lary-avatar.svg'}}"  alt="avatar" class="rounded-full mx-auto p-1 border-2 border-secondary sm:mx-auto md:mx-0">
                        </div>
                        <div class="px-0 py-3 my-auto w-full col-span-3 md:py-0 md:pl-8 text-slate-100">
                            <h3 class="text-base font-bold">Hello, I am</h3>
                            <h2 class="text-2xl font-bold">{{ $profile->fullname }}</h2>
                            <div>
                                <span class="block text-sm font-normal">
                                    {{ $profile->state }}, {{ $profile->city }}
                                </span>
                            </div>
                            <div class="mt-2 transition-600 text-blue-700">
                                <a href="tel:+4{{ $profile->phone }}" class="inline-block font-normal text-sm">+4{{ $profile->phone }}</a>
                            </div>
                            <div>
                                <a href="mailto:{{ $profile->email }}" class="inline-block font-normal flex-wrap text-blue-700">{{ $profile->email }}</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="border-b border-slate-700 py-7 text-slate-100">
                    <h3 class="text-xl font-bold mb-4">Address</h3>
                    <div class="relative">
                        <div class="text-base my-2">
                            <div class="font-bold">State</div>
                            <span class="text-slate-500">{{ $profile->state }}</span>
                        </div>
                        <div class="text-base my-2">
                            <div class="font-bold">City</div>
                            <span class="text-slate-500">{{ $profile->city }}</span>
                        </div>
                        <div class="text-base my-2">
                            <div class="font-bold">Street</div>
                            <span class="text-slate-500">{{ $profile->street }}</span>
                        </div>
                        <div class="text-base my-2">
                            <div class="font-bold">Postal Code</div>
                            <span class="text-slate-500">{{ $profile->postal_code }}</span>
                        </div>
                    </div>
                </section>

                <section class="border-b border-slate-700 py-7 text-slate-100">
                    <h3 class="text-xl font-bold mb-4">Professional Information</h3>
                    <div class="relative">
                        <h3 class="font-bold text-2xl my-2">{{ $profile->profession }}</h3>
                        <div class="text-base my-2">
                            <div class="font-bold">at {{ $profile->organization }}</div>
                            <div class="mt-2 text-slate-500">
                                Website: <a href="https://{{ $profile->website }}" class="inline-block font-normal flex-wrap text-blue-700">{{ $profile->website }}</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="border-b border-slate-700 py-7 text-slate-100">
                    <h3 class="text-xl font-bold mb-4">Experience and Qualifications</h3>
                    <div class="relative">
                        <div class="text-base mt-6">
                            <div class="font-bold">Summary</div>
                            <div class="mt-2">{{ $profile->summary }}</div>
                        </div>
                        <div class="text-base mt-6">
                            <div class="font-bold">Education</div>
                            <div class="mt-2">{{ $profile->education }}</div>
                        </div>
                        <div class="text-base mt-6">
                            <div class="font-bold">Work History</div>
                            <div class="mt-2">{{ $profile->work_history }}</div>
                        </div>
                    </div>
                </section>
                
                <section class="border-b border-slate-700 py-7 text-slate-100">
                    <h3 class="text-xl font-bold mb-4">Services Offered</h3>
                    <div class="grid gap-2 md:grid-cols-2 mt-6">
                       <div>
                            <div class="flex justify-start text-base">
                                <div class="font-bold mr-4">Service Category</div>
                                <span class="text-slate-500">{{ ucwords($profile->service_category) }}</span>
                            </div>
                            <div class="flex justify-start text-base mt-6">
                                <div class="font-bold mr-16">Hourly Rate</div>
                                <span class="text-slate-500">{{ $profile->hourly_rate }}.00 $</span>
                            </div>
                            <div class="flex justify-start text-base mt-6">
                                <div class="font-bold mr-10">Package Prices</div>
                                <span class="text-slate-500">{{ $profile->package_prices }}.00 $</span>
                            </div>
                       </div>
                       <div>
                            <div class="text-base">
                                <div class="font-bold">Service Description</div>
                                <div class="mt-2">{{ $profile->service_description }}</div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="border-b border-slate-700 py-7 text-slate-100">
                    <h3 class="text-xl font-bold mb-4">Availability</h3>
                    <div class="relative mt-6">
                        <div class="flex justify-start text-base">
                            <div class="font-bold mr-20">Working Hours</div>
                            <span class="text-slate-500">{{ $profile->working_hours }}</span>
                        </div>
                        <div class="flex justify-start text-base mt-4">
                            <div class="font-bold mr-4">Appointment Booking</div>
                            <span class="text-slate-500">{{ $profile->appointment_booking }}</span>
                        </div>
                    </div>
                </section>

                <section class="border-b border-slate-700 py-7 text-slate-100">
                    <h3 class="text-xl font-bold mb-4">Additional Information</h3>
                    <div class="relative">
                        <div class="text-base mt-6">
                            <div class="font-bold">Specializations</div>
                            <div class="mt-2">{{ $profile->specializations }}</div>
                        </div>
                        <div class="flex justify-start text-base mt-4">
                            <div class="font-bold mr-4">Languages</div>
                            <span class="text-slate-500">{{ $profile->languages }}</span>
                        </div>
                        <div class="flex justify-start text-base mt-4">
                            <div class="font-bold mr-4">Certifications</div>
                            <span class="text-slate-500">{{ $profile->certifications }}</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</x-app-layout>