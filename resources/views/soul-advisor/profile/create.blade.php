<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @if (isset($profile))
            <form method="post" action="{{ route('list-practice.update', $profile->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @method('PATCH')
        @else
            <form method="post" action="{{ route('list-practice.create') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="border border-solid rounded-md p-4 border-gray-800">
                <div class="flex justify-between mb-4">
                    @include('soul-advisor.components.previous-button')
                    @include('soul-advisor.components.next-button')
                </div>
                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section" data-section="1">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Personal Information') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="fullname" :value="__('Full Name')" />
                                <x-text-input id="fullname" name="fullname" type="text" class="mt-1 block w-full" :value="old('fullname', $profile?->fullname)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('fullname')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="photo" :value="__('Photo')" />
                                <x-text-input id="photo" name="photo" type="file" class="mt-1 block w-full" :value="old('photo', $profile?->photo)" />
                                <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                            </div>
                        </section>
                    </div>
                </div>

                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section hidden" data-section="2">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Contact Details') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="email" :value="__('Email Address')" />
                                <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $profile?->email)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="phone" :value="__('Phone')" />
                                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $profile?->phone)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>
                            <div class="mt-6">
                                <h4 class="text-base font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Address') }}
                                </h4>
                                <div class="mt-6">
                                    <x-input-label for="street" :value="__('Street')" />
                                    <x-text-input id="street" name="street" type="text" class="mt-1 block w-full" :value="old('street', $profile?->street)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('street')" />
                                </div>
                                <div class="mt-6">
                                    <x-input-label for="city" :value="__('City')" />
                                    <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $profile?->city)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('city')" />
                                </div>
                                <div class="mt-6">
                                    <x-input-label for="state" :value="__('State')" />
                                    <x-text-input id="state" name="state" type="text" class="mt-1 block w-full" :value="old('state', $profile?->state)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('state')" />
                                </div>
                                <div class="mt-6">
                                    <x-input-label for="postal-code" :value="__('Postal Code')" />
                                    <x-text-input id="postal-code" name="postal_code" type="text" class="mt-1 block w-full" :value="old('postal_code', $profile?->postal_code)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('postal_code')" />
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section hidden" data-section="3">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Professional Information') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="profession" :value="__('Title')" />
                                <x-text-input id="profession" name="profession" type="text" class="mt-1 block w-full" :value="old('profession', $profile?->profession)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('profession')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="organization" :value="__('Organization')" />
                                <x-text-input id="organization" name="organization" type="text" class="mt-1 block w-full" :value="old('organization', $profile?->organization)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('organization')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="website" :value="__('Website')" />
                                <x-text-input id="website" name="website" type="text" class="mt-1 block w-full" :value="old('website', $profile?->website)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('website')" />
                            </div>
                        </section>
                    </div>
                </div>

                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section hidden" data-section="4">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Experience and Qualifications') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="summary" :value="__('Summary')" />
                                <x-text-input id="summary" name="summary" type="text" class="mt-1 block w-full" :value="old('summary', $profile?->summary)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('summary')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="education" :value="__('Education')" />
                                <x-text-input id="education" name="education" type="text" class="mt-1 block w-full" :value="old('education', $profile?->education)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('education')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="work-history" :value="__('Work History')" />
                                <x-text-input id="work-history" name="work_history" type="text" class="mt-1 block w-full" :value="old('work_history', $profile?->work_history)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('work_history')" />
                            </div>
                        </section>
                    </div>
                </div>

                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section hidden" data-section="5">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Services Offered') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="service-categories" :value="__('Service Categories')" />
                                <select class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white dark:bg-gray-700" name="service_category" id="service-categories">
                                    <option class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" 
                                            value="consulting"
                                            {{ $profile?->service_category === 'consulting' ? 'selected' : '' }}>
                                                Consulting
                                    </option>
                                    <option class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" 
                                            value="coaching"
                                            {{ $profile?->service_category === 'coaching' ? 'selected' : '' }}>
                                                Coaching
                                    </option>
                                    <option class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" 
                                            value="therapy"
                                            {{ $profile?->service_category === 'therapy' ? 'selected' : '' }}>
                                                Therapy
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('service_category')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="service-description" :value="__('Service Description')" />
                                <x-text-input id="service-description" name="service_description" type="text" class="mt-1 block w-full" :value="old('service_description', $profile?->service_description)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('service_description')" />
                            </div>
                            <div class="mt-6">
                                <h4 class="text-base font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Pricing') }}
                                </h4>
                                <div class="mt-6">
                                    <x-input-label for="hourly-rate" :value="__('Hourly Rate')" />
                                    <x-text-input id="hourly-rate" name="hourly_rate" type="text" class="mt-1 block w-full" :value="old('hourly_rate', $profile?->hourly_rate)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('hourly_rate')" />
                                </div>
                                <div class="mt-6">
                                    <x-input-label for="package-prices" :value="__('Package Prices')" />
                                    <x-text-input id="package-prices" name="package_prices" type="text" class="mt-1 block w-full" :value="old('package_prices', $profile?->package_prices)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('package_prices')" />
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section hidden" data-section="6">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Availability') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="working-hours" :value="__('Working Hours')" />
                                <select class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white dark:bg-gray-700" name="working_hours" id="working-hours">
                                    <option class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" 
                                            value="08.00-16.00"
                                            {{ $profile?->working_hours === '08.00-16.00' ? 'selected' : '' }}>
                                                08.00-16.00
                                    </option>
                                    <option class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" 
                                            value="16.00-00.00"
                                            {{ $profile?->working_hours === '16.00-00.00' ? 'selected' : '' }}>
                                                16.00-00.00
                                    </option>
                                    <option class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" 
                                            value="00.00-08.00"
                                            {{ $profile?->working_hours === '00.00-08.00' ? 'selected' : '' }}>
                                                00.00-08.00
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('working_hours')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="appointment-booking" :value="__('Appointment Booking')" />
                                <x-text-input id="appointment-booking" name="appointment_booking" type="text" class="mt-1 block w-full" :value="old('appointment_booking', $profile?->appointment_booking)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('appointment_booking')" />
                            </div>
                        </section>
                    </div>
                </div>

                <div class="p-4 sm:p-8 mt-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg profile-section hidden" data-section="7">
                    <div class="max-w-3xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Additional Information') }}
                                </h2>
                            </header>
                            <div class="mt-6">
                                <x-input-label for="specializations" :value="__('Specializations')" />
                                <x-text-input id="specializations" name="specializations" type="text" class="mt-1 block w-full" :value="old('specializations', $profile?->specializations)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('specializations')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="languages" :value="__('Languages Spoken')" />
                                <x-text-input id="languages" name="languages" type="text" class="mt-1 block w-full" :value="old('languages', $profile?->languages)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('languages')" />
                            </div>
                            <div class="mt-6">
                                <x-input-label for="certifications" :value="__('Certifications')" />
                                <x-text-input id="certifications" name="certifications" type="text" class="mt-1 block w-full" :value="old('certifications', $profile?->certifications)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('certifications')" />
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            @if (isset($profile))
                <x-primary-button>Update</x-primary-button>
            @else
                <x-primary-button>Save</x-primary-button>
            @endif
        </form>
    </div>
</div>
