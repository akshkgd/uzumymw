<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codekaro Dashboard</title>
    <style>
      [x-cloak] {
        display: none;
      }
    </style>
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <link href="{{asset('assets/css/output.css')}}" rel="stylesheet" />
  </head>
  <body class="font-geist">
    
    @yield('content')

    <!-- Footer Section -->
    <section class="bg-white">
      <div
        class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8"
      >
        
        
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
          &copy; 2024 Codekaro All rights reserved.
        </p>
      </div>
    </section>


</body>
</html>
