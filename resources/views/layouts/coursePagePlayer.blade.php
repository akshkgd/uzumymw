<main class=" flex gap-4 justify-center align-middle py-12 ">
    <div class="2xl:px-0 max-w-6xl mt-16 ml-[370p">
      <div class="sm:w-[740px] px-2 sm:px-4 md:px-0">
            <div class="video-containe">
              <script type="text/javascript" src="//assets.mediadelivery.net/playerjs/player-0.1.0.min.js"></script>

                <div style="position:relative;padding-top:56.25%;"><iframe id="bunny-stream-embed" src="https://iframe.mediadelivery.net/embed/{{ str_contains($video->videoLink, '/') ? substr($video->videoLink, 0, strpos($video->videoLink, '/')) : '200867' }}/{{ str_contains($video->videoLink, '/') ? substr($video->videoLink, strpos($video->videoLink, '/') + 1) : $video->videoLink }}?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
            </div>
            <div class="my-5">
              
              <h1 class="text-2xl  font-extrabold" id="title">{{ $video->title }}</h1>
                
            
              
                <div class="desc mt-0">
                  {!! $video->desc !!}
                </div>
                
                {{-- {{ $video->id }} --}}
            </div>
      </div>
    </div>
    
  </main>
  <script>
    // ... existing player code ...
    
    document.getElementById('markComplete').addEventListener('click', function() {
        const button = this;
        button.disabled = true; // Prevent double-clicks
        
        fetch('{{ route('mark.video.complete') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                videoId: {{ $video->id }},
                batchId: {{ $video->batchId }}
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Update button appearance
                button.classList.remove('bg-green-100', 'text-green-700', 'hover:bg-green-200');
                button.classList.add('bg-neutral-100', 'text-neutral-700');
                button.textContent = 'Completed';
                button.disabled = true;
                
                // Optional: Update progress display if you have one
                if (data.progress) {
                    // Update any progress indicators here
                    console.log(`Course progress: ${data.progress}%`);
                }
            } else {
                button.disabled = false; // Re-enable button on failure
                console.error('Failed to mark video as complete');
            }
        })
        .catch(error => {
            button.disabled = false; // Re-enable button on error
            console.error('Error:', error);
        });
    });
    </script>
  <script>
    const player = new playerjs.Player('bunny-stream-embed');
    
    let totalDuration = 0;
    let totalVideoDuration = 0;
    let currentDuration = 0;
    let lastProgress = 0;
    let isPlaying = false;
    let videoProgress = 0;
    let hasResumed = false;
    let resumeFrom = {{ optional($video->userProgress(Auth::user()->id))->progress ?? 0 }};
    function resumeVideo(time){
      if (typeof time === 'number' && time >= 0) {
          player.setCurrentTime(time);
      } else {
          console.warn('Invalid resume time:', time);
          player.setCurrentTime(0); // fallback to start
      }
    }
    
    
    
    player.on('ready', () => {
        console.log('Ready');
    });
    
    player.on('play', () => {
        isPlaying = true;
        if (!hasResumed) {
        resumeVideo(resumeFrom);
        hasResumed = true;
    }
    });

    
    player.on('pause', () => {
        isPlaying = false;
    });
    
    player.on('ended', () => {
        isPlaying = false;
    });
    
    // player.getDuration((duration) => {
    //     totalDuration = duration;
    //     totalVideoDuration = duration;
    // });
    
    // Event handler for time updates when the player is playing
    player.on('timeupdate', (timingData) => {
        // Get current seconds
        const currentTime = timingData.seconds;
    
        // Calculate progress percentage and round to the nearest 25%
        const progressPercentage = (currentTime / timingData.duration) * 100;
        const progressRounded = Math.floor(progressPercentage / 25) * 25;
    
        // Log the progress percentage
        // console.log('Progress Percentage: ' + Math.floor(progressPercentage) + "%");
        videoProgress = Math.floor(progressPercentage);
        // Check if progress reached a new 25% milestone and update the progress bar
        if (progressRounded > lastProgress) {
            // console.log(`Video progress: ${progressRounded}%`);
            lastProgress = progressRounded;
        }
    });
    
    document.addEventListener('DOMContentLoaded', function () {
        
        function updateTimeSpent() {
            if (isPlaying) {
                player.getCurrentTime(value => {
                    currentDuration = value;
                    
                    fetch('{{ route('update.timeSpent') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            videoId: '{{ $video->id }}',
                            batchId: '{{ $video->batchId }}',
                            progress: currentDuration, // Send current video timestamp
                            duration: totalDuration
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            console.log('Time spent and progress updated successfully.');
                        } else {
                            console.error('Failed to update time spent and progress.');
                        }
                    });
                });
            }
        }
    
        // Call updateTimeSpent every 1 minute (60,000 milliseconds)
        setInterval(updateTimeSpent, 60000);
    });
    </script>
    