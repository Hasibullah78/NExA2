@extends('layout')
@section('main')
<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            {{-- <x-input-label for="name" :value="{{ __('message.Name') }}" /> --}}
            {{ __('message.Name') }}
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            {{-- <x-input-label for="email" :value="{{ __('message.Email') }}" /> --}}
            {{ __('message.Email') }}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">

            {{-- <x-input-label for="role" :value="{{ __('message.Role') }}" /> --}}
            {{ __('message.Role') }}
            <select  id="role" style="border-radius: 4%; text-align:center" class="block mt-1 w-full"  name="role"  required >
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>
          <div class="mt-4">
            {{-- <x-input-label for="image" :value="{{ __('message.Profile_Image') }}" /> --}}
            {{ __('message.Profile_Image') }}
            <input id="image" class="block mt-1 w-full" type="file" name="image"    />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="{{ __('message.Password') }}" /> --}}
            {{ __('message.Password') }}
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                             autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password_confirmation" :value="{{ __('message.Confirm_Password') }}" /> --}}
            {{ __('message.Confirm_Password') }}
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"  autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}

            <x-primary-button class="ml-4">
                {{ __('message.Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endsection
