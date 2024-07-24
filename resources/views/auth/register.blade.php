<x-guest-layout>
    <div class="flex min-h-screen">
        <!-- Left Section (Form) -->
        <div class="w-full bg-white p-8 flex items-center justify-center">
            <div class="w-1/2 max-w-md bg-white rounded-lg p-8 border border-transparent">
                <h1 class="text-2xl font-bold mb-6 text-center">Create Your Account</h1>
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex space-x-4 mb-4">
                        <div class="w-1/3">
                            <x-label for="firstname" value="{{ __('First Name') }}" />
                            <x-input id="firstname" name="firstname" type="text" placeholder="" class="block mt-1 w-full" required autofocus autocomplete="given-name" />
                        </div>
                        <div class="w-1/3">
                            <x-label for="middlename" value="{{ __('Middle Name') }}" />
                            <x-input id="middlename" name="middlename" type="text" placeholder="" class="block mt-1 w-full" autocomplete="additional-name" />
                        </div>
                        <div class="w-1/3">
                            <x-label for="lastname" value="{{ __('Last Name') }}" />
                            <x-input id="lastname" name="lastname" type="text" placeholder="" class="block mt-1 w-full" required autocomplete="family-name" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="section" value="{{ __('Section') }}" />
                            <select id="section" name="section" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="Budget">Budget</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Cash">Cash</option>
                            </select>
                        <input type="hidden" id="section_value" name="section_value" value="1">
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ms-4 bg-sky-500">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Section (Image) -->
        <div class="w-full bg-blue-500 flex items-center justify-center">
            <img src="/build/assets/img/airv.jpg" alt="Placeholder Image" class="w-full h-full object-cover">
        </div>
    </div>
</x-guest-layout>
