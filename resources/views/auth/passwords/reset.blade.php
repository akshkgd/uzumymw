@extends('layouts.t-student')

@section('content')
    <body class="relative h-screen">
        <!-- Header Section -->
        <div class="absolute inset-0 isolate overflow-hidden bg-white">
            <div
                class="absolute inset-y-0 left-1/2 w-[1200px] -translate-x-1/2 [mask-composite:intersect] [mask-image:linear-gradient(black,transparent_320px),linear-gradient(90deg,transparent,black_5%,black_95%,transparent)]">
                <svg class="pointer-events-none absolute inset-0 text-neutral-200" width="100%" height="100%">
                    <defs>
                        <pattern id="grid-:r17:" x="-0.25" y="-1" width="60" height="60" patternUnits="userSpaceOnUse">
                            <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="1"></path>
                        </pattern>
                    </defs>
                    <rect fill="url(#grid-:r17:)" width="100%" height="100%"></rect>
                </svg>
            </div>
            <span class="text-center absolute left-1/2 -translate-x-1/2 text-2xl cal-sans font-bold leading-9 tracking-tight text-neutral-800 mt-5 z-50"></span>
            <div class="absolute left-1/2 top-6 size-[80px] -translate-x-1/2 -translate-y-1/2 scale-x-[1.6] mix-blend-overlay">
                <div
                    class="absolute -inset-16 mix-blend-overlay blur-[50px] saturate-[2] bg-[conic-gradient(from_90deg,#F00_5deg,#EAB308_63deg,#5CFF80_115deg,#1E00FF_170deg,#855AFC_220deg,#3A8BFD_286deg,#F00_360deg)]">
                </div>
                <div
                    class="absolute -inset-16 mix-blend-overlay blur-[50px] saturate-[2] bg-[conic-gradient(from_90deg,#F00_5deg,#EAB308_63deg,#5CFF80_115deg,#1E00FF_170deg,#855AFC_220deg,#3A8BFD_286deg,#F00_360deg)]">
                </div>
            </div>
            <div class="absolute left-1/2 top-6 size-[80px] -translate-x-1/2 -translate-y-1/2 scale-x-[1.6] opacity-10">
                {{-- <div
                    class="absolute -inset-16 mix-blend-overlay blur-[50px] saturate-[2] bg-[conic-gradient(from_90deg,#F00_5deg,#EAB308_63deg,#5CFF80_115deg,#1E00FF_170deg,#855AFC_220deg,#3A8BFD_286deg,#F00_360deg)]">
                </div> --}}
            </div>
        </div>

        <!-- Reset Password Section -->
        <main class="h-[90vh] flex flex-col justify-center align-middle px-6 py-12 lg:px-8 z-100 relative">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="text-center text-2xl cal-sans font-bold leading-9 tracking-tight text-neutral-800">Reset Password</h2>
            </div>

            <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
                <div class="relative">
                    <div class="absolute flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-neutral-200"></div>
                    </div>
                    <div class="relative flex justify-center text-md leading-6">
                        <span class="bg-white px-6 text-neutral-500 text-center text-sm">Enter your new password to complete the reset process and login again.</span>
                    </div>
                </div>

                <div class="mt-6">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">Email address</label>
                            <input id="email" 
                                   name="email" 
                                   type="email" 
                                   autocomplete="email" 
                                   required 
                                   autofocus
                                   value="{{ old('email') }}"
                                   class="w-full px-3 py-3 border border-neutral-300 rounded-xl shadow-sm placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200 focus:border-neutral-400 transition-colors duration-200 @error('email') border-red-500 focus:ring-red-500 @enderror"
                                   placeholder="Enter your email address">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-neutral-700 mb-2">New Password</label>
                            <div class="relative">
                                <input type="password" 
                                       id="password" 
                                       name="password" 
                                       required 
                                       autocomplete="new-password"
                                       class="w-full px-3 py-3 pr-10 border border-neutral-300 rounded-xl shadow-sm placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200 focus:border-neutral-400 transition-colors duration-200 @error('password') border-red-500 focus:ring-red-500 @enderror"
                                       placeholder="Enter your new password">
                                <button type="button" id="togglePassword"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-neutral-400 hover:text-neutral-600" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                    <svg id="eyeSlashIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-neutral-400 hover:text-neutral-600 hidden" viewBox="0 0 16 16">
                                        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                        <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.708zm10.296 8.884-12-12 .708-.708 12 12z"/>
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-6">
                            <label for="password-confirm" class="block text-sm font-medium text-neutral-700 mb-2">Confirm Password</label>
                            <div class="relative">
                                <input type="password" 
                                       id="password-confirm" 
                                       name="password_confirmation" 
                                       required 
                                       autocomplete="new-password"
                                       class="w-full px-3 py-3 pr-10 border border-neutral-300 rounded-xl shadow-sm placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200 focus:border-neutral-400 transition-colors duration-200"
                                       placeholder="Confirm your new password">
                                <button type="button" id="toggleConfirmPassword"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <svg id="eyeIconConfirm" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-neutral-400 hover:text-neutral-600" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                    <svg id="eyeSlashIconConfirm" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-neutral-400 hover:text-neutral-600 hidden" viewBox="0 0 16 16">
                                        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                        <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.708zm10.296 8.884-12-12 .708-.708 12 12z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" id="resetBtn"
                                    class="w-full flex justify-center items-center px-4 py-3 border border-transparent text-sm font-medium rounded-xl text-white bg-black hover:bg-neutral-800 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                <svg id="loadingSpinner" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span id="buttonText">Reset Password</span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Success Message -->
                <div class="mt-5 text-center">
                    @if (session('status'))
                        <div class="text-sm text-green-600" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </main>
    </body>

    <script>
        // State management
        let showPassword = false;
        let showConfirmPassword = false;
        let isLoading = false;

        // DOM elements
        const togglePasswordBtn = document.getElementById('togglePassword');
        const toggleConfirmPasswordBtn = document.getElementById('toggleConfirmPassword');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password-confirm');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeSlashIcon = document.getElementById('eyeSlashIcon');
        const eyeIconConfirm = document.getElementById('eyeIconConfirm');
        const eyeSlashIconConfirm = document.getElementById('eyeSlashIconConfirm');
        const resetBtn = document.getElementById('resetBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const buttonText = document.getElementById('buttonText');

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listeners
            if (togglePasswordBtn) {
                togglePasswordBtn.addEventListener('click', togglePasswordVisibility);
            }
            if (toggleConfirmPasswordBtn) {
                toggleConfirmPasswordBtn.addEventListener('click', toggleConfirmPasswordVisibility);
            }
            
            // Form submission handling
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', handleFormSubmit);
            }
        });

        // Toggle password visibility
        function togglePasswordVisibility() {
            showPassword = !showPassword;
            
            if (showPassword) {
                passwordInput.type = 'text';
                eyeIcon.classList.add('hidden');
                eyeSlashIcon.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('hidden');
                eyeSlashIcon.classList.add('hidden');
            }
        }

        // Toggle confirm password visibility
        function toggleConfirmPasswordVisibility() {
            showConfirmPassword = !showConfirmPassword;
            
            if (showConfirmPassword) {
                confirmPasswordInput.type = 'text';
                eyeIconConfirm.classList.add('hidden');
                eyeSlashIconConfirm.classList.remove('hidden');
            } else {
                confirmPasswordInput.type = 'password';
                eyeIconConfirm.classList.remove('hidden');
                eyeSlashIconConfirm.classList.add('hidden');
            }
        }

        // Handle form submission
        function handleFormSubmit(e) {
            if (!isLoading) {
                isLoading = true;
                
                // Show loading state
                resetBtn.disabled = true;
                resetBtn.classList.remove('hover:bg-neutral-800');
                resetBtn.classList.add('bg-neutral-400', 'cursor-not-allowed');
                loadingSpinner.classList.remove('hidden');
                buttonText.textContent = 'Resetting Password...';
            }
        }
    </script>
@endsection