@extends('layouts.t-student')
@section('content')

@include('layouts.t-student-nav')

<main class="mt-28 flex flex-col justify-center align-middle py-12">
  <div class="mt-2">
    <div class="max-w-lg  mx-auto w-full px-4 md:px-0 text-left sm:text-cente">
      <h2
        class="text-2xl font-semibold leading-9 tracking-tight text-gray-900">
        Love to hear from you, Get in touch 👋
      </h2>
      <p class="text-neutral-500"> Discuss your requirements, technical issues, learn about courses, or request a demonstration.</p>
    
    
    <div class="mt-12">
      <h2
        class="text-lg font-medium leading-9 tracking-tight text-gray-900">
        Codekaro
      </h2>
      <p class="text-neutral-500 -mt-1">585/9 Gaughat, Prayagraj, 211003</p>

      <h2
        class="text-lg mt-5 font-medium leading-9 tracking-tight text-gray-900">
        WhatsApp
      </h2>
      <p class="text-sm -mt-2 mb-3 text-neutral-600">This number is only available on WhatsApp.</p>

      <div class="fle items-center gap-4">
        <p class="text-neutral-500">+91 9451849553</p>
        <a href="https://wa.me/919451849553" class="text-blue-600" target="_blank" rel="noopener noreferrer">Text us on WhatsApp</a>
      </div>
      <h2
        class="text-lg mt-5 font-medium leading-9 tracking-tight text-gray-900">
        Email
      </h2>
      <div class="fle items-center gap-4">
        <p class="text-neutral-500">info@codekaro.in</p>
        <a href="mailto:info@codekaro.in" class="text-blue-600">Mail us</a>
      </div>
    </div>
    
    </div>
  </div>
</main>



@endsection
