<main class=" flex gap-4 justify-center align-middle py-12 ">
    <div class="2xl:px-0 max-w-6xl mt-16 ml-[370p">
      <div class="sm:w-[740px] px-2 sm:px-4 md:px-0">
            <div class="video-containe">
              <script type="text/javascript" src="//assets.mediadelivery.net/playerjs/player-0.1.0.min.js"></script>

                <div style="position:relative;padding-top:56.25%;"><iframe id="bunny-stream-embed" src="https://iframe.mediadelivery.net/embed/{{ str_contains($video->videoLink, '/') ? substr($video->videoLink, 0, strpos($video->videoLink, '/')) : '200867' }}/{{ str_contains($video->videoLink, '/') ? substr($video->videoLink, strpos($video->videoLink, '/') + 1) : $video->videoLink }}?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
            </div>
            <div class="my-5">
              
              <h1 class="text-2xl cal-sans font-extrabold" id="title">{{ $video->title }}</h1>
                
            
              
                <div class="desc mt-0">
                  {!! $video->desc !!}
                </div>
                
                {{-- {{ $video->id }} --}}
            </div>
      </div>
    </div>
    
  </main>
  <script>
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
                videoId: window.activeVideo.id,
                batchId: window.activeVideo.batchId
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                window.activeVideo.isCompleted = true;
                if (typeof updateMarkCompleteButton === 'function') {
                    updateMarkCompleteButton();
                }
                if (typeof addCheckmarkToSidebar === 'function') {
                    addCheckmarkToSidebar(window.activeVideo.id);
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
    
    function resumeVideo(time){
      if (typeof time === 'number' && time >= 0) {
          player.setCurrentTime(time);
      } else {
          player.setCurrentTime(0); // fallback to start
      }
    }
    
    player.on('ready', () => {
        console.log('Ready');
    });
    
    player.on('play', () => {
        isPlaying = true;
        if (!window.hasResumed) {
            resumeVideo(window.resumeFrom);
            window.hasResumed = true;
        }
    });

    player.on('pause', () => {
        isPlaying = false;
    });
    
    player.on('ended', () => {
        isPlaying = false;
    });
    
    // Event handler for time updates when the player is playing
    player.on('timeupdate', (timingData) => {
        const currentTime = timingData.seconds;
        const progressPercentage = (currentTime / timingData.duration) * 100;
        const progressRounded = Math.floor(progressPercentage / 25) * 25;
        videoProgress = Math.floor(progressPercentage);
        if (progressRounded > lastProgress) {
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
                            videoId: window.activeVideo.id,
                            batchId: window.activeVideo.batchId,
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
    