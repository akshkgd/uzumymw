@extends('layouts.t-student')
@section('content')

<!-- Add html2pdf library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
    @media print {
        .no-print {
            display: none !important;
        }
        body {
            margin: 0;
            padding: 0;
        }
        @page {
            size: landscape;
        }
    }
</style>

<section class="py-8">
    <div class="w-[1000px] mx-auto px-4 sm:px-6 lg:px-8 mt font-manrope">
        <!-- Update download button -->
        <div class="flex justify-end mb-4 no-print">
            <button onclick="downloadPDF()" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                Download Certificate
            </button>
        </div>
        <div class="flex justify-center">
            <div class="w-full w-4xl">
                <div class="p-1 rounded-xl" style="background: linear-gradient(90deg, rgb(52, 168, 83) 4%, rgb(66, 133, 244) 0) top / 100% 34% no-repeat, linear-gradient(90deg, rgb(251, 188, 4) 50%, rgb(66, 133, 244) 0) top / 100% 82% no-repeat, linear-gradient(90deg, rgb(251, 188, 4) 10%, rgb(234, 67, 53) 0) top / 100% 100%;">
                <div class="bg-white rounded-lg borde border-gray-20 overflow-hidden" >
                    <!-- Certificate Header -->
                    <div class=" pt-6 ">
                        <div class="text-center">
                            <div class="flex justify-center items-center gap-2">
                                <a href="#" class="px-2 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
                                    <svg class="text-white rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Codekaro logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
                                    
                                  </a>
                                {{-- <p class="text-xl  ">Codekaro</p> --}}
                            </div>
                            <p class="text-xl mt-2">Certificate of Completion</p>
                            
                            {{-- @if ($batch->type == 3)
                                <h1 class="text-3xl font-pacifico  tracking-wide">Certificate of Internship</h1>
                            @else
                                <h1 class="text-3xl font-pacifico  tracking-wide">Certificate of Achievement</h1>
                            @endif --}}
                        </div>
                        
                    </div>

                    <!-- Certificate Content -->
                    <div class="px-8 py-">
                        <div class="text-center mt-16">
                            <p class="text-">This is to certify that</p>
                            <h2 class="text-4xl font-medium text-blue-600 my-4">{{$certificate->students->name}}</h2>
                            
                            @if ($batch->type == 3)
                                <p class="text-lg mx-auto max-w-3xl">
                                    From {{$certificate->students->college}}, has successfully completed <span class="font-semibold">{{$batch->name}}</span> 
                                    Internship from <span class="font-semibold">{{ Carbon\Carbon::parse($batch->startDate)->format('d M') }}</span> 
                                    to <span class="font-semibold">{{ Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}</span>
                                </p>
                            @else
                                <p class="text-lg mx-auto max-w-3xl">
                                    @if(isset($certificate->student) && $certificate->student->college)
                                        from {{$certificate->student->college}},
                                    @endif 
                                    is hearby awarded the certificate of achievement for the successful <br> completion of 
                                    <span class="font-semibold">{{$batch->name}}</span>
                                </p>
                            @endif

                            @if($batch->association !="")
                                <p class="text-lg mt-2">in association with {{$batch->association}}</p>
                            @endif

                            <p class="text-lg mt-4">
                                {{\Carbon\Carbon::parse($batch->endDate)->format('jS M Y')}}
                            </p>
                        </div>

                        <!-- Signatures and Footer -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
                            <div class="text-center md:text-left">
                                <img src="{{asset('assets/img/ashish_sign.png')}}" alt="signature" class="mx-auto md:mx-0">
                                <h4 class="text-lg font-semibold mt-2">Ashish Shukla</h4>
                                <p class="text-gray-600 -mt-1">Founder - Codekaro</p>
                            </div>
                            
                            <div class="text-center hidde flex flex-col items-center justify-center">
                                
                                <img src="{{asset('assets/img/codekaro-dark.png')}}" alt="codekaro" class="h-28 w-auto">
                                @if($batch->association !="")
                                    <img src="{{asset('storage/'.$batch->logo)}}" alt="association logo" class="h-16 w-auto mt-4">
                                @endif
                            </div>

                            <div class="text-center md:text-right">
                                <div class="mt-4">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ urlencode('https://codekaro.in/course-certificate/'.$certificate->certificateId) }}" 
                                         alt="Certificate QR Code" 
                                         class="ml-auto mb-2">
                                    <p class="">Certificate Id: <span class="text-blue-600 font-semibold">{{$certificate->certificateId}}</span></p>
                                    {{-- <p class="text-sm mt-1 text-neutral-600">
                                        Verify the certificate on this QR
                                        
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Add download script -->
<script>
function downloadPDF() {
    // Get the certificate element
    const element = document.querySelector('.flex.justify-center');
    
    // Configure the PDF options
    const options = {
        margin: 0,
        filename: 'codekaro-certificate.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { 
            scale: 2,
            useCORS: true,
            logging: true,
            letterRendering: true
        },
        jsPDF: { 
            unit: 'mm', 
            format: 'a4', 
            orientation: 'landscape'
        }
    };

    // Generate and download PDF
    html2pdf()
        .from(element)
        .set(options)
        .save()
        .catch(err => console.error('Error generating PDF:', err));
}
</script>

@endsection