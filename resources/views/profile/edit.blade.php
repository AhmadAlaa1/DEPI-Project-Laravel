{{--
@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        {{ __('Profile') }}
    </h2>

    <div class="py-12 "padding="10px">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="mt-6 overflow-hidden bg-white shadow sm:rounded-lg">
                @include('profile.partials.update-password-form')
            </div>

            <div class="mt-6 overflow-hidden bg-white shadow sm:rounded-lg">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 p-4 text-white bg-gray-800">


        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Profile') }}
            </h2>

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        @include('profile.partials.update-profile-information-form')
                    </div>

                    <div class="mt-6 overflow-hidden bg-white shadow sm:rounded-lg">
                        @include('profile.partials.update-password-form')
                    </div>

                    <div class="mt-6 overflow-hidden bg-white shadow sm:rounded-lg">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
