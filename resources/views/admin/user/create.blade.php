<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="/admin/user/store">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="hours" class="block text-sm font-medium text-gray-700">Hours</label>
                            <div class="mt-1">
                                <select id="hours" name="role_id" class="form-multiselect block w-full mt-1"
                                    multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ encrypt($role->id) }}">{{ $role->display_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <div class="mt-6 p-4">

                            <x-primary-button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</x-admin-layout>
