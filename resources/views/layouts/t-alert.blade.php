<div class="flash-message fixed top-4 right-4 z-[1000] flex flex-col gap-3">
    @if(Session::has('alert-success'))
        <div id="alert" 
             class="transform transition-all duration-300 ease-in-out opacity-0 translate-y-[-100%]
                    bg-white border border-neutral-200 px-6 py-4 rounded-lg
                    flex items-center gap-3 min-w-[380px] backdrop-blur-sm bg-opacity-80">
            
            {{-- Message --}}
            <div class="flex-grow text-sm text-neutral-600">
                {{ Session::get('alert-success') }}
            </div>

            {{-- Close Button --}}
            <button onclick="closeAlert('alert')" 
                    class="flex-shrink-0 text-neutral-400 hover:text-neutral-500 focus:outline-none focus:ring-2 focus:ring-neutral-500 focus:ring-offset-2 rounded-sm">
                <svg class="w-4 h-4" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>

        <script>
            // Show alert smoothly
            requestAnimationFrame(() => {
                const alert = document.getElementById('alert');
                if (alert) {
                    alert.style.opacity = '1';
                    alert.style.transform = 'translateY(0)';
                }
            });

            // Auto-hide after 3 seconds
            setTimeout(() => {
                const alert = document.getElementById('alert');
                if (alert) {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateY(-100%)';
                    setTimeout(() => {
                        alert.remove();
                    }, 300);
                }
            }, 3000);

            function closeAlert(alertId) {
                const alert = document.getElementById(alertId);
                if (alert) {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateY(-100%)';
                    setTimeout(() => {
                        alert.remove();
                    }, 300);
                }
            }
        </script>
    @endif
</div>
