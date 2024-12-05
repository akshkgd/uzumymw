@extends('layouts.t-student')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{asset('css/quill.css')}}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="{{ asset('assets/js/Sortable.min.js') }}"></script>
<style>
   
    #quill_editor {
    min-height: 100px; 
    max-height: 140px; 
    font-size: 16px;
    position: static;
    /* position: absolute; */
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}
.ql-toolbar.ql-snow {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    
    z-index: -600;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}
.sidebar{
    overflow-y: auto
}
.sidebar::-webkit-scrollbar{
    display: none;
}
#suggestions-list {
    position: absolute; /* Absolute positioning */
    background: white;
    border: 1px solid #ddd;
    border-radius: 4px;
    z-index: 1000;
    max-height: 200px;
    overflow-y: auto;
    width: auto; /* Dynamically calculated */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

#suggestions-list.hidden {
    display: none;
}
.active{
    color: orangered !important;
}

</style>
@section('content')
    
    <section class="font-geist">
        <div class="">
            <div class="flex ">
                <!-- <div class="flex flex-col-reverse grid-cols-5 gap-10 pt-5 mt-0 lg:grid"> -->

                    
                    
                    <div class="sidebar w-72 border-r bg-neutral-10 h-screen fixed">
                        {{-- <div class="h-14 border-b"></div> --}}
                        <div class="intro px-4 mt-5">
                            <h2 class="text-lg font-bold text-gray-800">{{ $batch->name }}</h2>
                            <span class="text-sm text-gray-600 -mt-3">
                                {{ $batchContent->where('type', 2)->count() }} Videos 
                                <span class="text-sm">({{ $batchContent->where('type', 1)->count() }} Assignments)</span>
                            </span>
                        </div>
                    
                        <div id="sortable-list" class="mt-5 px-4 pb-20">
                            @foreach($sections as $section)
                            <div class="sortable-section" data-batch-id="{{ $section->batchId }}" data-section-id="{{ $section->id }}">
                                <ul class="sortable-section-list" style="list-style-type: none;">
                                    <li class="mb-5">
                                        <div class="flex justify-between items-center mb-3">
                                            <a href="{{ route('addCourseContent', ['id' => $batch->id, 'contentId' => $currentContent->id, 'sectionId' => $section->id]) }}"" class="">{{ $section->name }}</a>
                                            {{-- <span class="font-medium">{{ $section->name }}</span> --}}
                                            
                                        </div>
                                        <div class="sortable-content">
                                            <ul class="sortable-content-list ml-4" style="list-style-type: none;">
                                                @foreach ($section->chapters as $c)
                                                <li data-id="{{ $c->id }}" class="hover:text-violet-600 ">
                                                    <a class="sortable-item  mb-2 text-[15px] font-ligh text-neutral-700 flex gap-3 items-center {{ $c->id == $currentContent->id ? 'active' : '' }}" 
                                                       href="{{ route('addCourseContent', ['id' => $batch->id, 'contentId' => $c->id]) }}">
                                                        @if ($c->type == 2)
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video "><path d="m22 8-6 4 6 4V8Z"></path><rect width="14" height="12" x="2" y="6" rx="2" ry="2"></rect></svg>
                                                        @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text "><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                                        @endif
                                                        {{ $c->title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                                <button 
                                                class="hidde text-[15px] mt- flex gap-3 items-center text-neutral-700" onclick="openChapterModal('{{ $section->id }}', '{{ $section->batchId }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gallery-vertical-end "><path d="M7 2h10"></path><path d="M5 6h14"></path><rect width="18" height="12" x="3" y="10" rx="2"></rect></svg>
                                                <span>Add Chapter Item</span>
                                            </button>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    
                        <div class="fixed bottom-0  bg-white">
                            <button 
                            class="bg-white border-t flex items-center justify-cente gap-3 box-border hover:bg-neutral-20 text-black bg-neutral-20 py-3   w-72 border-r mx-auto fixed bottom-0"
                            onclick="openSectionModal('{{ $batch->id }}')">
                            <div class="px-3 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus "><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                <span>Add New Section</span>
                            </div>
                        </button>
                        </div>
                    
                        <!-- Add Chapter Modal -->
                        <div id="chapterModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                            <div class="bg-white rounded-lg p-6 w-full max-w-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h3 class="text-lg font-bold">Add Chapter Item</h3>
                                        <p class="text-neutral-600 text-sm">Create new chapter, you can add chapters from suggestions</p>
                                    </div>
                                    
                                    <button onclick="closeModal('chapterModal')" class="text-gray-600 hover:text-gray-800">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                    
                                <div class="mt-4">
                                    <form id="addChapterForm" action="{{ route('addContent') }}" method="POST" class="mt-4">
                                        @csrf
                                        <input type="hidden" name="sectionId" id="chapter-section-id">
                                        <input type="hidden" name="batchId" id="chapter-batch-id">
                                        
                                        <input 
                                            type="text" 
                                            id="chapter-search-input" 
                                            placeholder="Search chapter name or enter a new one"
                                            class="w-full p-3 border rounded-lg mb-3 focus:border-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200"
                                            name="title">
                                            <input type="hidden" name="type" value="1">
                                            <input type="hidden" name="desc">
                                            <input type="hidden" name="videoLink">
                                        
                                        <ul id="chapter-suggestions-list" class="border rounded-lg bg-white hidden relative w-full max-h-48 overflow-y-auto z-10 mb-4"></ul>
                                        
                                        <div class="flex justify-end">
                                            <button type="button" onclick="closeModal('chapterModal')" class="mr-2 bg-white hover:bg-neutral-100 px-5 py-3 rounded-lg">
                                                Cancel
                                            </button>
                                            <button type="submit" class="bg-black text-white px-5 py-3 rounded-lg">
                                                Add Chapter
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Add Section Modal -->
                        <div id="sectionModal" class="hidden relative z-50 w-auto h-auto ">
                            <div class=" fixed z-[10000] inset-0 bg-black bg-opacity-60 flex items-center justify-center ">
                            <div class="bg-white rounded-lg p-6 w-full max-w-lg">
                                <div class="flex justify-between items-center">
                                    <div class="mb-6">
                                        <h3 class="text-lg font-bold">Add New Section</h3>
                                        <p class="text-neutral-600 text-sm">Create new section to add chapters inside</p>
                                        
                                    </div>
                                    {{-- <button onclick="closeModal('sectionModal')" class="text-gray-600 hover:text-gray-800">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button> --}}
                                </div>
                    
                                <div class="mt-4">
                                    <form id="addSectionForm" action="{{ route('addSection') }}" method="POST" class="mt-4 mb-0 pb-0">
                                        @csrf
                                        <input type="hidden" name="batchId" id="section-batch-id">
                                        
                                        <input 
                                            type="text" 
                                            placeholder="Enter Section Name"
                                            class="w-full p-3 border rounded-lg mb-3 focus:border-black focus:outline-none focus:ring-4 focus:ring-neutral-200"
                                            name="name" required>
                                        
                                        <div class="flex justify-end">
                                            <button type="button" onclick="closeModal('sectionModal')" class="mr-2 bg--200 px-5 py-3 rounded-lg">
                                                Cancel
                                            </button>
                                            <button type="submit" class="bg-black text-white px-5 py-3 rounded-lg">
                                                Add Section
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sectionModal" class="hidden fixed inset-0 z-50 w-auto h-auto">
                        
                    
                        <div class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen">
                            <div onclick="closeModal('sectionModal')" class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                            <div class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                <div class="flex items-center justify-between pb-2">
                                    <h3 class="text-lg font-semibold">Modal Title</h3>
                                    <button onclick="closeModal('sectionModal')" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative w-auto">
                                    <p>This is placeholder text. Replace it with your own content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    
                    <script>
                        // Open/close modals
                        function openModal(modalId) {
                            const modal = document.getElementById(modalId);
                            let issue = document.querySelector('.ql-toolbar.ql-snow');
                            issue ? issue.classList.add('absolute') : ""
                            if (modal) {
                                modal.classList.remove('hidden');
                            }
                        }
                    
                        function closeModal(modalId) {
                            const modal = document.getElementById(modalId);
                            let issue = document.querySelector('.ql-toolbar.ql-snow');
                            issue ? issue.classList.remove('absolute') : ""
                            if (modal) {
                                modal.classList.add('hidden');
                            }
                        }
                    
                        function openChapterModal(sectionId, batchId) {
                            document.getElementById('chapter-section-id').value = sectionId || '';
                            document.getElementById('chapter-batch-id').value = batchId || '';
                            openModal('chapterModal');
                        }
                    
                        function openSectionModal(batchId) {
                            document.getElementById('section-batch-id').value = batchId || '';
                            openModal('sectionModal');
                        }
                    
                        // Fetch suggestions for chapters
                        document.getElementById('chapter-search-input').addEventListener('input', async function (e) {
                            const query = e.target.value.trim();
                    
                            if (query.length > 0) {
                                try {
                                    const response = await fetch(`/search-batch-content?query=${encodeURIComponent(query)}`);
                                    if (response.ok) {
                                        const results = await response.json();
                                        console.log(results)
                                        renderSuggestions(results);
                                    } else {
                                        console.error("Error fetching suggestions:", response.statusText);
                                        clearSuggestions();
                                    }
                                } catch (error) {
                                    console.error("Error fetching suggestions:", error);
                                    clearSuggestions();
                                }
                            } else {
                                clearSuggestions();
                            }
                        });
                    
                        function renderSuggestions(suggestions) {
                            const suggestionsList = document.getElementById('chapter-suggestions-list');
                            suggestionsList.innerHTML = '';
                    
                            if (suggestions.length > 0) {
                                suggestionsList.classList.remove('hidden');
                                suggestions.forEach(item => {
                                    const listItem = document.createElement('li');
                                    listItem.textContent =  `${item.title} - ${item.batchName || 'No Batch Name'}`;
                                    listItem.className = 'p-2 hover:bg-gray-100 cursor-pointer';
                                    listItem.addEventListener('click', () => {
                                        document.getElementById('chapter-search-input').value = item.title;
                                        document.querySelector('[name="type"]').value = item.type || '';
                                        document.querySelector('[name="desc"]').value = item.desc || '';
                                        document.querySelector('[name="videoLink"]').value = item.videoLink || '';
                                        suggestionsList.classList.add('hidden');
                                    });
                                    suggestionsList.appendChild(listItem);
                                });
                            } else {
                                const noResults = document.createElement('li');
                                noResults.textContent = 'No suggestions found.';
                                noResults.className = 'p-2 text-gray-600';
                                suggestionsList.appendChild(noResults);
                            }
                        }
                    
                        function clearSuggestions() {
                            const suggestionsList = document.getElementById('chapter-suggestions-list');
                            suggestionsList.innerHTML = '';
                            suggestionsList.classList.add('hidden');
                        }
                    </script>
                     
                    
                    
                {{-- main container --}}
                <div class="w-[calc(100vw-288px)] ml-72 border-r h-screen">
                    {{-- <div class="h-14 border-b flex items-center w-full fixed top-0 bg-white">
                        <div class="px-20">
                            <p>{{$currentContent->title}}</p>
                        </div>
                    </div> --}}

                <div class=" text-left bg-white w-[550px] mx-auto">
                    @if(isset($currentSection))
                    {{-- <h1 class="text-lg font-bold text-gray-800 mt-5">Edit Section</h1> --}}
                    <form action="{{ route('updateContent') }}" method="POST" class="mb-1 mt-7">
                        @csrf
                        <div class="form-floating space-y-2 my-4">
                            <label class="text-base  leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="floatingInput">Section Name</label>
                            <input type="text" value="{{$currentSection->name}}" class="flex w-full px-3 py-3 text-base bg-white border rounded-lg border-neutral-300  placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2  focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" id="floatingInput" name="accessOn" placeholder="Content">
                            <p class="text-sm text-neutral-700">Once you delete a section all chapters inside the section will also be deleted!</p>
                            
                        </div>
    
                          
                          <div class="flex gap-3">
                            
                                
                                <button type="submit" class="save-btn text-white bg-black p-3 hover:bg-neutral-900 px-8 rounded-lg">Update section</button>
                            </form>
                                
                                    
                                        
                                         
                                         <a href="{{ route('deleteSection', $currentSection->id) }}" 
                                            class="inline-block text-red-500 hover:text-red-600 p-3 bg-red-50 hover:bg-red-100 px-8 rounded-lg" 
                                            onclick="return confirm('Are you sure you want to delete this section?')">
                                             Delete Section
                                         </a>
                                         

                          </div>
                          {{-- <p class="text-sm text-neutral-600">Once you delete a section all chapters inside the section will also be deleted!</p> --}}
                        
                    @elseif($currentContent)
                    @if($currentContent->id == 0)
                          <div class="mt-7 max-w-sm">
                            <h1 class="text-lg font-bold">No Chapters Found.</h1>
                            <p>Start adding videos and assignments inside section!</p>
                          </div>
                    @else
                <div class="p-5">
                  <form action="{{ route('updateContent') }}" method="POST" class="mb-12">
                    @csrf
                    <input type="hidden" name="batchId" value="{{$batch->id}}">
                    <input type="hidden" name="contentId" value="{{$currentContent->id}}">

                <div class="">
                    {{-- <div class="text-base-center text-md-left mb-3 mb-md-1 mb-lg-2 ">
                        <span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary text-center lead m-1">Add Course Content</span>
                      </div> --}}
                    {{-- <h3 class="pb-2">Course: {{$batch->name}}</h3> --}}
                      
                    <div class="form-floating  mb-1 space-y-2 mt-2">
                        <label class="text-base text-neutral-800 leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="floatingInput">Assignment / Recordings </label>
                        <input type="number" value="{{$currentContent->type}}" class="flex w-full px-3 py-3  bg-white border rounded-lg border-neutral-300  placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2  focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" id="floatingInput" name="type" placeholder="Content Title" value="1">
                      </div>
                      <p class="small" style="color:red; font-size:14px; margin-top:4px">Add 1 for assignments and 2 for recordings</p>

                    
                      <div class="form-floating my-4 space-y-2">
                        <label class="text-base  leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="floatingInput">Chapter Title</label>
                        <input type="text" value="{{$currentContent->title}}" class="flex w-full px-3 py-3 text-base bg-white border rounded-lg border-neutral-300  placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2  focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" id="floatingInput" name="title" placeholder="Content Title">
                      </div>
                    

                      <div id="quill_editor" class="mb-2"></div>
                    <input type="hidden" id="quill_html" name="desc"></input>
                      
                    <div class="form-floating space-y-2 my-4">
                        <label class="text-base  leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="floatingInput">Bunny or YouTube Video Id</label>
                        <input type="text" value="{{$currentContent->videoLink}}" class="flex w-full px-3 py-3 text-base bg-white border rounded-lg border-neutral-300  placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2  focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" id="floatingInput" name="videoLink" placeholder="Content">
                    </div>
                      <div class="form-floating space-y-2 my-4">
                        <label class="text-base  leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="floatingInput">Access On</label>
                        <input type="text" value="{{$currentContent->accessOn}}" class="flex w-full px-3 py-3 text-base bg-white border rounded-lg border-neutral-300  placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2  focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" id="floatingInput" name="accessOn" placeholder="Content">
                        <p class="text-sm text-neutral-700">Enter the number of day when the content needs to be unlocked.</p>
                        
                    </div>

                      
                      <div class="flex gap-3">
                        
                            
                            <button type="submit" class="save-btn text-white bg-black p-3 hover:bg-neutral-900 px-8 rounded-lg">Save Chapter</button>
                            <a href="{{ route('deleteContent', $currentContent->id) }}" 
                                class="inline-block text-red-500 hover:text-red-600 p-3 bg-red-50 hover:bg-red-100 px-8 rounded-lg" 
                                onclick="return confirm('Are you sure you want to delete this chapter?')">
                                 Delete Chapter
                             </a>
                            
                        
                      </div>
                      
                </div>
                  </form>
            </div> 
            @endif
            @else
            <div>
                
                <h1>No content available! Add the videos or assignments now.</h1>

            </div>
            @endif
        </div>
            </div>

            {{-- second sidebar --}}
            <div class="w-[430] ml border- p-5 hidden">
                <p>Update Section</p>
                <div class="form-floating space-y-2 my-4">
                    <label class="text-base  leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="floatingInput">Access On</label>
                    @if(isset($currentSection))
                    <input type="text" value="{{$currentSection->name}}" class="flex w-full px-3 py-3 text-base bg-white border rounded-lg border-neutral-300  placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2  focus:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" id="floatingInput" name="accessOn" placeholder="Content">
                    @endif
                    <p class="text-sm text-neutral-700">Enter the number of day when the content needs to be unlocked.</p>
                    
                </div>

                  
                  <div class="flex gap-3">
                    
                        <div>
                        <button type="submit" class="save-btn text-white bg-black p-3 px-8 hover:bg-neutral-900 p rounded-lg">Update</button>

                        </div>
                        <form action="" method="POST">
                            @csrf
                            @method('Post')
                            <button class="text-red-500 hover:text-red-600 p-3 bg-red-50 hover:bg-red-100 px-8 rounded-lg" type="submit">Delete</button>
                        </form>
                    
                    
                  </div>
            </div>


                </div>
                
                </div>
            </div>
                  
    </section>

    
   





<script src="{{asset('js/quill.js')}}"></script>

<!-- Initialize Quill editor -->
{{-- <script>
  var quill = new Quill('#quill_editor', {
        theme: 'snow'
  });
quill.on('text-change', function(delta, oldDelta, source) {
    document.getElementById("quill_html").value = quill.root.innerHTML;
});
</script> --}}
@if($currentContent)
<script>
  var quill = new Quill('#quill_editor', {
        theme: 'snow'
  });
quill.on('text-change', function(delta, oldDelta, source) {
    document.getElementById("quill_html").value = quill.root.innerHTML;
});

const value = `{!!$currentContent->desc!!}`;
const delta = quill.clipboard.convert(value);

quill.setContents(delta, 'silent')
</script>

{{-- sortable --}}

{{-- old sort ends and new start --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var sortableSections = new Sortable(document.getElementById('sortable-list'), {
          animation: 150,
          handle: '.sortable-section',
          onEnd: function (evt) {
              updateSortOrder('section', evt.oldIndex, evt.newIndex, evt);
          }
      });

      // Initialize Sortable for content independently for each section
      var sortableContents = document.querySelectorAll('.sortable-content');
      sortableContents.forEach(function (sortableContent) {
          new Sortable(sortableContent.querySelector('.sortable-content-list'), {
              animation: 150,
              handle: '.sortable-item',
              onEnd: function (evt) {
                  updateSortOrder('content', evt.oldIndex, evt.newIndex, evt);
              }
          });
      });

      function updateSortOrder(type, oldIndex, newIndex, evt) {
          var sortedOrder;
          if (type === 'section') {
              sortedOrder = Array.from(document.querySelectorAll('.sortable-section')).map(function (section) {
                  return {
                      batchId: section.getAttribute('data-batch-id'),
                      sectionId: section.getAttribute('data-section-id')
                  };
              });
          } else if (type === 'content') {
              // Get the section ID from the current dragged item's parent section
              var sectionId = evt.from.closest('.sortable-section').getAttribute('data-section-id');

              sortedOrder = Array.from(document.querySelectorAll('.sortable-section[data-section-id="' + sectionId + '"] .sortable-content-list li')).map(function (content) {
                  return content.getAttribute('data-id');
              });
          }

          fetch("{{ route('updateSortOrder') }}", {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': '{{ csrf_token() }}',
              },
              body: JSON.stringify({
                  sortedOrder: sortedOrder,
                  type: type
              }),
          })
              .then(response => response.json())
              .then(data => {
                  console.log(data)
              })
              .catch(error => {
                  console.log(error)
              });
      }
  });
</script>
<script>
    document.getElementById('sortable-list').addEventListener('click', function (event) {
        var addButton = event.target.closest('.addItems');
        if (addButton) {
            var sectionId = addButton.closest('.sortable-section').getAttribute('data-section-id');
            document.getElementById('sectionIdInput').value = sectionId;
        }
    });
</script>

@endif
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" async crossorigin="anonymous"></script> --}}
{{-- chapter suggestions --}}

@endsection


