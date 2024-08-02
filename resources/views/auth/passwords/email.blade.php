@extends('layouts.t-student')
@section('content')

<header
      id="sticky-header"
      class="fixed top-0 z-[60] flex items-center justify-center w-full h-16 duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-400 border-opacity-20"
    >
      <div
        class="flex items-center justify-between w-full px-4 mx-auto 2xl:px-0 max-w-5xl"
      >
        <div
          class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left"
        >
          <a
            href="{{url('/home')}}"
            class="inline-flex sm:mr-8 items-end font-sans text-2xl font-extrabold text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline"
          >
          <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg>
          </a>
          
        </div>

        <div class="relative">
            
          <a href="{{url('/home')}}" class="btn border px-4 py-3 rounded-lg text-sm">Back to Dashboard</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>
    
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <div class="">
            <div class="space-y-1">
                <p class="text-neutral-700 mb-5 text-center">You can change your password for security reasons or reset it if you forget it by entering registered mail id.</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                <input type="text" placeholder="Email Address" id="email" name="email" class="flex w-full h-10 px-3 py-6 text-md bg-white border rounded-lg peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50"/>
                <button class="bg-black text-white py-4 px-5 mt-2 w-full rounded-lg" type="submit">Send password reset link</button>
                </form>
            </div>
          </div>
        <div class="mt-5 text-center">
            @error('email')
                                <span class="invalid-feedback font-ligh text-sm text-red-600" role="alert">
                                    <div>{{ $message }}</div>
                                </span>
                            @enderror
            @if (session('status'))
                        <div class="text-sm text-green-600" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
          </div>
          
        </div>
      </main>

</section>
@endsection