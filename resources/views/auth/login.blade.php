@extends('layouts.t-student')
@section('content')

    <body class="relative h-screen ">
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
                </svg></div>
                <span class="text-center absolute  left-1/2 -translate-x-1/2  text-2xl cal-sans font-bold leading-9 tracking-tight text-neutral-800 mt-5 z-50"></span>
            <div
                class="absolute left-1/2 top-6 size-[80px] -translate-x-1/2 -translate-y-1/2 scale-x-[1.6] mix-blend-overlay">
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
        <header class="hidden">
            <nav
                class="fixe top-0 overflow-hidden z-20 w-full bg-white/80 dark:bg-gray-950/75 dark:shadow-md rounded-b-l dark:shadow-gray-950/10 border- border-gray-100 border- dark:border-[--ui-dark-border-color] backdrop-blur">
                <div class="px-4 m-auto max-w-5xl 2xl:px-0">
                    <div class="flex flex-wrap items-center justify-between py-2 sm:py-4">
                        <div class="w-full items-center flex justify-between lg:w-auto">
                            <a href="/" aria-label="tailus logo"
                                class="text-2xl text-neutral-800 tracking-wid font-bold cal-sans">
                                Codekaro
                                <!-- <svg class="text-white rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Codekaro logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg> -->
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg> -->
                            </a>
                            <div class="flex lg:hidden">
                                <button aria-label="humburger" id="menu"
                                    class="relative border bordeer-gray-950/30 dark:border-white/20 size-9 rounded-full transition duration-300 active:scale-95">
                                    <div aria-hidden="true" id="line1"
                                        class="m-auto h-[1.5px] w-4 rounded bg-gray-900 transition duration-300 dark:bg-gray-300">
                                    </div>
                                    <div aria-hidden="true" id="line2"
                                        class="m-auto mt-1.5 h-[1.5px] w-4 rounded bg-gray-900 transition duration-300 dark:bg-gray-300">
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div
                            class="w-full h-0 lg:w-fit flex-wrap justify-end items-center space-y-8 lg:space-y-0 lg:flex lg:h-fit md:flex-nowrap">
                            <div class="mt-6 text-ne-600 dark:text-gray-300 md:-ml-4 lg:pr-4 lg:mt-0">
                                <ul
                                    class="space-y-6 tracking-tigh text-l lg:text-sm lg:flex lg:space-y-0 flex items-center">


                                    <li>
                                        <a href="#"
                                            class="block transition hover:text-whit border border-neutral-400 ring-2 ring-neutral-300 py-2 px-8 rounded-full">
                                            <span>Create Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </nav>
        </header>




        <!-- Sign in Section  -->

        <main class="h-[90vh]  flex flex-col justify-center align-middle px-6 py-12 lg:px-8 z-100 relative" style="">

            <!-- <main class="flex justify-center items-center px-4">
                <img src="gray.svg" alt="" class="w-[80px]" />
              </main> -->
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="text-center text-2xl cal-sans font-bold leading-9 tracking-tight text-gray-800">Welcome back!
                </h2>
            </div>

            <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm" id="loginContainer">
                
                <div class="relative">
                    <div class="absolute flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-md leading-6">
                        <span class="bg-white px-6 text-gray-500 text-center">Login to your account to see all your courses
                            <br />
                            and upcoming classes.</span>
                    </div>
                </div>

                <!-- Login Options -->
                <div class="mt-6 space-y-4" id="loginOptions">
                    <!-- Google Login Button -->
                    <div class="flex justify-center transition-all duration-200">
                        <a href="{{ url('/redirect') }}"
                            class="inline-flex w-800 w-full items-center justify-center px-3 py-3 gap-x-3 font-sans font-light tracking-wide transition-all duration-200 bg-black text-white rounded-xl hover:bg-neutral-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-google" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                            </svg>
                            <span class="text-md font-normal">Continue with Google</span>
                        </a>
                    </div>

                    <!-- Email Login Button -->
                    <div class="flex justify-center">
                        <button onclick="toggleEmailForm()" type="button" id="emailLoginBtn"
                            class="inline-flex w-800 w-full items-center justify-center px-3 py-3 gap-x-3 font-sans font-light tracking-wide transition-colors duration-200 bg-white text-neutral-800 border border-neutral-300 rounded-xl hover:bg-neutral-50 hover:border-neutral-400">
                            <span class="text-md font-normal">Continue with Email</span>
                        </button>
                    </div>
                </div>

                <!-- Email Login Form -->
                <div id="emailForm" class="mt-6 hidden transition-all duration-300 opacity-0 transform scale-95">
                    
                    <!-- Back Button -->
                    <div class="flex items-center mb-4">
                        <button onclick="toggleEmailForm()" type="button" id="backBtn" class="flex items-center text-sm text-neutral-600 hover:text-neutral-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left mr-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                            </svg>
                            Back to login options
                        </button>
                    </div>

                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        
                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">Email address</label>
                            <input id="email" 
                                   name="email" 
                                   type="email" 
                                   autocomplete="email" 
                                   required 
                                   value="{{ old('email') }}"
                                   class="w-full px-3 py-3 border border-neutral-300 rounded-xl shadow-sm placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200 focus:border-neutral-400 transition-colors duration-200 @error('email') border-red-500 focus:ring-red-500 @enderror"
                                   placeholder="Enter your email address">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4 hidden transition-all duration-300 opacity-0" id="passwordField">
                            <label for="password" class="block text-sm font-medium text-neutral-700 mb-2">Password</label>
                            <div class="relative">
                                <input type="password" 
                                       id="password" 
                                       name="password" 
                                       required 
                                       autocomplete="current-password"
                                       class="w-full px-3 py-3 pr-10 border border-neutral-300 rounded-xl shadow-sm placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200 focus:border-neutral-400 transition-colors duration-200 @error('password') border-red-500 focus:ring-red-500 @enderror"
                                       placeholder="Enter your password">
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

                        <!-- Forgot Password Link -->
                        <div class="flex items-center justify-between mb-6 hidden transition-all duration-300 opacity-0" id="forgotPasswordLink">
                            <a href="{{url('/password/reset')}}" 
                               class="text-sm text-neutral-600 hover:text-black hover:underline transition-colors duration-200">
                                Forgot your password?
                            </a>
                        </div>

                        <!-- Submit Button -->
                        <div class="hidden transition-all duration-300 opacity-0" id="submitButton">
                            <button type="submit" id="loginBtn"
                                    class="w-full flex justify-center items-center px-4 py-3 border border-transparent text-sm font-medium rounded-xl text-white bg-black hover:bg-neutral-800 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                <svg id="loadingSpinner" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span id="buttonText">Sign in</span>
                            </button>
                        </div>
                    </form>
                </div>

                <p class="mt-2 text-center text-xs text-neutral-900" id="privacyText">
                    By clicking continue, you agree to our
                    <a class="underline underline-offset-4 hover:text-neutral-600" href="/privacy">Privacy Policy.</a>
                </p>
            </div>
        </main>




        </div>
    </body>

    <script>
        // State management
        let showEmailForm = false;
        let isLoading = false;
        let showPassword = false;

        // DOM elements
        const loginOptions = document.getElementById('loginOptions');
        const emailForm = document.getElementById('emailForm');
        const emailInput = document.getElementById('email');
        const passwordField = document.getElementById('passwordField');
        const passwordInput = document.getElementById('password');
        const forgotPasswordLink = document.getElementById('forgotPasswordLink');
        const submitButton = document.getElementById('submitButton');
        const privacyText = document.getElementById('privacyText');
        const togglePasswordBtn = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeSlashIcon = document.getElementById('eyeSlashIcon');
        const loginBtn = document.getElementById('loginBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const buttonText = document.getElementById('buttonText');

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Check localStorage for persistent state
            const savedState = localStorage.getItem('loginFormState');
            if (savedState) {
                const state = JSON.parse(savedState);
                if (state.showEmailForm) {
                    showEmailForm = true;
                    emailInput.value = state.email || '';
                    showEmailFormView();
                    
                    // If email exists, show password field and subsequent elements
                    if (emailInput.value.length > 0) {
                        showPasswordField();
                    }
                }
            }

            // Add event listeners
            emailInput.addEventListener('input', handleEmailInput);
            passwordInput.addEventListener('input', handlePasswordInput);
            togglePasswordBtn.addEventListener('click', togglePasswordVisibility);
            
            // Form submission handling
            document.getElementById('loginForm').addEventListener('submit', handleFormSubmit);
        });

        // Toggle between login options and email form
        function toggleEmailForm() {
            showEmailForm = !showEmailForm;
            
            if (showEmailForm) {
                showEmailFormView();
            } else {
                showLoginOptionsView();
            }
            
            saveState();
        }

        // Show email form view
        function showEmailFormView() {
            // Hide login options with fade out
            loginOptions.style.opacity = '0';
            loginOptions.style.transform = 'scale(0.95)';
            privacyText.style.opacity = '0';
            
            setTimeout(() => {
                loginOptions.classList.add('hidden');
                privacyText.classList.add('hidden');
                
                // Show email form with fade in
                emailForm.classList.remove('hidden');
                setTimeout(() => {
                    emailForm.style.opacity = '1';
                    emailForm.style.transform = 'scale(1)';
                    emailInput.focus();
                }, 50);
            }, 200);
        }

        // Show login options view
        function showLoginOptionsView() {
            // Hide email form with fade out
            emailForm.style.opacity = '0';
            emailForm.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                emailForm.classList.add('hidden');
                
                // Reset form fields
                emailInput.value = '';
                passwordInput.value = '';
                hidePasswordField();
                hideForgotPasswordLink();
                hideSubmitButton();
                
                // Show login options with fade in
                loginOptions.classList.remove('hidden');
                privacyText.classList.remove('hidden');
                setTimeout(() => {
                    loginOptions.style.opacity = '1';
                    loginOptions.style.transform = 'scale(1)';
                    privacyText.style.opacity = '1';
                }, 50);
            }, 200);
        }

        // Handle email input
        function handleEmailInput() {
            if (emailInput.value.length > 0) {
                showPasswordField();
            } else {
                hidePasswordField();
                hideForgotPasswordLink();
                hideSubmitButton();
            }
            saveState();
        }

        // Handle password input
        function handlePasswordInput() {
            if (emailInput.value.length > 0 && passwordInput.value.length > 0) {
                showForgotPasswordLink();
                showSubmitButton();
            } else {
                hideSubmitButton();
                if (passwordInput.value.length === 0) {
                    hideForgotPasswordLink();
                }
            }
        }

        // Show password field with animation
        function showPasswordField() {
            passwordField.classList.remove('hidden');
            setTimeout(() => {
                passwordField.style.opacity = '1';
                passwordField.style.transform = 'translateY(0)';
            }, 50);
        }

        // Hide password field with animation
        function hidePasswordField() {
            passwordField.style.opacity = '0';
            passwordField.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                passwordField.classList.add('hidden');
            }, 300);
        }

        // Show forgot password link with animation
        function showForgotPasswordLink() {
            forgotPasswordLink.classList.remove('hidden');
            setTimeout(() => {
                forgotPasswordLink.style.opacity = '1';
                forgotPasswordLink.style.transform = 'translateY(0)';
            }, 50);
        }

        // Hide forgot password link with animation
        function hideForgotPasswordLink() {
            forgotPasswordLink.style.opacity = '0';
            forgotPasswordLink.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                forgotPasswordLink.classList.add('hidden');
            }, 300);
        }

        // Show submit button with animation
        function showSubmitButton() {
            submitButton.classList.remove('hidden');
            setTimeout(() => {
                submitButton.style.opacity = '1';
                submitButton.style.transform = 'translateY(0)';
            }, 50);
        }

        // Hide submit button with animation
        function hideSubmitButton() {
            submitButton.style.opacity = '0';
            submitButton.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                submitButton.classList.add('hidden');
            }, 300);
        }

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

        // Handle form submission
        function handleFormSubmit(e) {
            if (!isLoading) {
                isLoading = true;
                
                // Show loading state
                loginBtn.disabled = true;
                loginBtn.classList.remove('hover:bg-neutral-800');
                loginBtn.classList.add('bg-neutral-400', 'cursor-not-allowed');
                loadingSpinner.classList.remove('hidden');
                buttonText.textContent = 'Signing in...';
            }
        }

        // Save state to localStorage
        function saveState() {
            localStorage.setItem('loginFormState', JSON.stringify({
                showEmailForm: showEmailForm,
                email: emailInput.value
            }));
        }

        // Clear state from localStorage
        function clearState() {
            localStorage.removeItem('loginFormState');
            showEmailForm = false;
            emailInput.value = '';
            passwordInput.value = '';
        }
    </script>
@endsection
