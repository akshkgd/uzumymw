<script src="https://cdn.jsdelivr.net/npm/monaco-editor@0.44.0/min/vs/loader.js"></script>
<style>
  ::-webkit-scrollbar {
    display: none;
    width: 8px;
    height: 8px;
  }

  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  ::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 4px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
  }

  .monaco-editor .cursor {
    border-left: 2px solid #000 !important;
  }

  .monaco-editor .margin,
  .monaco-editor .lines-content {
    border: none !important;
  }

  /* Full screen styles */
  .fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    background-color: white;
  }

  /* Terminal styles */
  .terminal-line {
    padding: 8px 12px;
    border-bottom: none;
    font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
    font-size: 16px;
    line-height: 1.5;
  }

  .terminal-line:hover {
    background-color: rgba(0, 0, 0, 0.02);
  }

  .log-info {
    color: #1f2937;
  }

  .log-warn {
    color: #1f2937;
  }

  .log-error {
    color: #dc2626;
  }

  /* Error styles */
  .error-header {
    display: flex;
    align-items: flex-start;
    cursor: pointer;
    padding: 4px 0;
  }

  .error-type {
    font-weight: 500;
    margin-right: 8px;
    color: #dc2626;
  }

  .error-message {
    color: #dc2626;
    word-break: break-word;
  }

  .error-location {
    color: #6b7280;
    font-size: 14px;
    margin-left: 4px;
    white-space: nowrap;
  }

  .error-stack {
    display: none;
    padding-left: 24px;
    margin-top: 6px;
    color: #6b7280;
    font-size: 14px;
    white-space: pre-wrap;
    word-break: break-all;
  }

  .arrow-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 16px;
    height: 16px;
    margin-right: 8px;
    transition: transform 0.2s;
    line-height: 1;
    color: #dc2626;
  }

  .arrow-expanded {
    transform: rotate(90deg);
  }

  #output {
    font-size: 16px;
    background-color: #ffffff;
    font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
    overflow-x: auto;
  }

  .code-highlight {
    background-color: #f3f4f6;
    border-radius: 0;
    padding: 0 2px;
  }

  /* Reset all syntax highlighting colors to black */
  .property,
  .number,
  .string,
  .boolean,
  .null,
  .array-index,
  .function-name {
    color: inherit;
  }

  /* Style for code sections */
  .code-snippet {
    background-color: #f3f4f6;
    padding: 2px 4px;
    border-radius: 0;
    font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
  }

  .monaco-editor .current-line,
  .monaco-editor .view-overlays .current-line {
    border: none !important;
    background-color: #f5f5f5 !important;
  }

  /* Pretty Print Styles */
  .pretty-json .json-key {
    color: #5b21b6;
  }

  .pretty-json .json-string {
    color: #047857;
  }

  .pretty-json .json-number {
    color: #1d4ed8;
  }

  .pretty-json .json-boolean {
    color: #0369a1;
  }

  .pretty-json .json-null {
    color: #dc2626;
  }

  .pretty-json {
    white-space: pre-wrap;
    line-height: 1.5;
    overflow-x: auto;
  }

  /* Feedback styles */
  #feedback {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    font-size: 14px;
    line-height: 1.6;
  }

  #feedback p {
    margin-bottom: 12px;
  }

  #feedback p:last-child {
    margin-bottom: 0;
  }

  #feedback ul,
  #feedback ol {
    margin: 8px 0;
    padding-left: 20px;
  }

  #feedback li {
    margin-bottom: 6px;
  }

  #feedback strong {
    font-weight: 600;
    color: #1f2937;
  }

  #feedback code {
    background-color: #f3f4f6;
    padding: 2px 6px;
    border-radius: 3px;
    font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
    font-size: 13px;
  }

  /* Problem section styles */
  #problemSection {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  }

  #problemSection h1 {
    line-height: 1.4;
  }

  /* Spinner animation */
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }

  .animate-spin {
    animation: spin 1s linear infinite;
  }

  /* Disabled button styles */
  #submitBtn:disabled {
    cursor: not-allowed;
    opacity: 0.5;
  }

  /* Dark Mode Styles */
  body {
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  body.dark-mode {
    background-color: #1a1a1a;
    color: #e5e7eb;
  }

  body.dark-mode #container {
    background-color: #1a1a1a;
  }

  body.dark-mode .border-neutral-200,
  body.dark-mode .border-b {
    border-color: #2d2d2d !important;
  }

  body.dark-mode .border-l {
    border-color: #2d2d2d !important;
  }

  body.dark-mode .hover\:bg-gray-100:hover {
    background-color: #2d2d2d !important;
  }

  body.dark-mode button.hover\:bg-gray-100 {
    color: #e5e7eb;
  }

  body.dark-mode #submitBtn {
    background-color: #3b82f6;
    color: white;
  }

  body.dark-mode #submitBtn:hover {
    background-color: #2563eb;
  }

  body.dark-mode h1 {
    color: #e5e7eb;
  }

  body.dark-mode #problemSection .text-sm {
    color: #d1d5db;
  }

  body.dark-mode .hover\:bg-gray-50:hover {
    background-color: #2d2d2d !important;
  }

  body.dark-mode .bg-gray-50 {
    background-color: #2d2d2d !important;
  }

  body.dark-mode .text-gray-700 {
    color: #d1d5db !important;
  }

  body.dark-mode .text-gray-500 {
    color: #9ca3af !important;
  }

  body.dark-mode .text-neutral-800 {
    color: #e5e7eb !important;
  }

  body.dark-mode #output {
    background-color: #1a1a1a;
    color: #e5e7eb;
  }

  body.dark-mode .terminal-line:hover {
    background-color: rgba(255, 255, 255, 0.05);
  }

  body.dark-mode .log-info {
    color: #e5e7eb;
  }

  body.dark-mode .log-warn {
    color: #fbbf24;
  }

  body.dark-mode .log-error {
    color: #f87171;
  }

  body.dark-mode .error-type,
  body.dark-mode .error-message {
    color: #f87171;
  }

  body.dark-mode .error-location,
  body.dark-mode .error-stack {
    color: #9ca3af;
  }

  body.dark-mode .code-snippet {
    background-color: #2d2d2d;
    color: #e5e7eb;
  }

  body.dark-mode #feedback {
    color: #e5e7eb;
  }

  body.dark-mode #feedback strong {
    color: #f3f4f6;
  }

  body.dark-mode #feedback code {
    background-color: #2d2d2d;
    color: #60a5fa;
  }

  body.dark-mode #feedback p,
  body.dark-mode #feedback li {
    color: #d1d5db;
  }

  body.dark-mode .text-gray-500 {
    color: #9ca3af !important;
  }

  body.dark-mode .text-sm.text-gray-700 {
    color: #d1d5db !important;
  }

  /* Dark mode badge colors */
  body.dark-mode .bg-green-100 {
    background-color: #065f46 !important;
  }

  body.dark-mode .text-green-800 {
    color: #6ee7b7 !important;
  }

  body.dark-mode .bg-blue-100 {
    background-color: #1e3a8a !important;
  }

  body.dark-mode .text-blue-800 {
    color: #93c5fd !important;
  }

  body.dark-mode .bg-yellow-100 {
    background-color: #78350f !important;
  }

  body.dark-mode .text-yellow-800 {
    color: #fcd34d !important;
  }

  body.dark-mode .bg-red-100 {
    background-color: #7f1d1d !important;
  }

  body.dark-mode .text-red-800 {
    color: #fca5a5 !important;
  }

  body.dark-mode .text-green-600 {
    color: #4ade80 !important;
  }

  body.dark-mode .text-red-600 {
    color: #f87171 !important;
  }

  /* Dark mode for pretty JSON */
  body.dark-mode .pretty-json .json-key {
    color: #c084fc;
  }

  body.dark-mode .pretty-json .json-string {
    color: #34d399;
  }

  body.dark-mode .pretty-json .json-number {
    color: #60a5fa;
  }

  body.dark-mode .pretty-json .json-boolean {
    color: #38bdf8;
  }

  body.dark-mode .pretty-json .json-null {
    color: #f87171;
  }

  /* Dark mode Monaco editor customization */
  body.dark-mode .monaco-editor .cursor {
    border-left: 2px solid #fff !important;
  }

  body.dark-mode .monaco-editor .current-line,
  body.dark-mode .monaco-editor .view-overlays .current-line {
    background-color: #2d2d2d !important;
  }
</style>
</head>

<body class="bg-white text-black  overflow-hidden flex flex-col font-sans">
  <div class="flex flex-col h-[calc(100vh-56px)] mt-[56px]" id="container">
    <!-- Header -->
    <div class="flex justify-between items-center px-4 py-2 border-b border-neutral-200">
      <h1 class="text-l font-">{{$video->title}}</h1>
      <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
          <button class="p-2 rounded-full hover:bg-gray-100" onclick="resetEditor()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
          </button>
          @if($video->type == 4)
            <button class="p-2 rounded-full hover:bg-gray-100" id="darkModeBtn" onclick="toggleDarkMode()">
              <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
              </svg>
              <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </button>
          @endif
          <button class="p-2 rounded-full hover:bg-gray-100" id="fullscreenBtn" onclick="toggleFullscreen()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5" />
            </svg>
          </button>
        </div>
        <input type="checkbox" id="autorun" class="hidden" checked>
        <button id="submitBtn" onclick="submitCode()"
          class="bg-black text-white px-4 py-2 rounded-lg hover:bg-neutral-900 transition-colors flex items-center gap-2">
          <span id="submitBtnText">Submit Code</span>
          <svg id="submitSpinner" class="hidden animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Main Layout -->
    <div class="flex flex-1 overflow-hidden">
      <!-- Code Editor -->
      <div class="flex-1 h-[calc(100vh-20vh) h-screen">
        <div id="editor" class="w-full h-screen"></div>
      </div>

      <!-- Problem, Terminal and Feedback -->
      <div class="2xl:flex hidde w-[420px] h-full border-l overflow-hidden flex-col">
        <!-- Tab Headers -->
        <div class="flex border-b">
          <button id="problemTab" onclick="switchTab('problem')"
            class="flex-1 px-4 py-3 flex items-center justify-center gap-2 border-b-2 border-black bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="h-4 w-4 text-gray-700">
              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
            </svg>
            <span class="font-medium text-sm">Problem</span>
          </button>
          <button id="terminalTab" onclick="switchTab('terminal')"
            class="flex-1 px-4 py-3 flex items-center justify-center gap-2 border-b-2 border-transparent hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="h-4 w-4 text-gray-500">
              <polyline points="4 17 10 11 4 5" />
              <line x1="12" y1="19" x2="20" y2="19" />
            </svg>
            <span class="font-medium text-sm">Terminal</span>
          </button>
          <button id="feedbackTab" onclick="switchTab('feedback')"
            class="flex-1 px-4 py-3 items-center justify-center gap-2 border-b-2 border-transparent hover:bg-gray-50 hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="h-4 w-4 text-gray-500">
              <path
                d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
              <path d="M5 3v4" />
              <path d="M19 17v4" />
              <path d="M3 5h4" />
              <path d="M17 19h4" />
            </svg>
            <span class="font-medium text-sm">Feedback</span>
          </button>
        </div>

        <!-- Problem Section -->
        <div id="problemSection" class="flex-1 overflow-hidden flex flex-col">
          <div class="flex-1 overflow-y-auto overflow-x-auto p-4">
            <h1 class="text-lg text-neutral-800 font-semibold">{{$video->title}}</h1>
            <div class="mt-4 text-sm">
              {!! $video->desc !!}
            </div>
          </div>
        </div>

        <!-- Terminal Section -->
        <div id="terminalSection" class="flex-1 overflow-hidden flex-col hidden">
          <input type="checkbox" id="prettyprint" class="hidden" checked>
          <div id="output" class="flex-1 overflow-y-auto overflow-x-auto"></div>
        </div>

        <!-- Feedback Section -->
        <div id="feedbackSection" class="flex-1 overflow-hidden flex-col hidden">
          <div id="feedback" class="flex-1 overflow-y-auto overflow-x-auto p-4">
            <div class="text-sm text-gray-500">Submit your code to get AI feedback</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const DEFAULT_CODE = `//Run your Javascript code using Codekaro JS Online Compiler
console.log("Hello, World!");`;

    // LocalStorage key for this specific problem
    const STORAGE_KEY = 'codekaro_editor_{{$video->id}}';
    const LAST_SUBMITTED_KEY = 'codekaro_submitted_{{$video->id}}';

    // Track last submitted code
    let lastSubmittedCode = localStorage.getItem(LAST_SUBMITTED_KEY) || '';

    // Dark mode state (only for type 4 videos)
    const DARK_MODE_KEY = 'codekaro_dark_mode';
    const isCodeLabPage = {{ $video->type == 4 ? 'true' : 'false' }};
    let isDarkMode = isCodeLabPage ? (localStorage.getItem(DARK_MODE_KEY) === 'true') : false;

    // Fullscreen toggle
    function toggleFullscreen() {
      const container = document.getElementById('container');
      const fullscreenBtn = document.getElementById('fullscreenBtn');

      if (container.classList.contains('fullscreen')) {
        // Exit fullscreen
        container.classList.remove('fullscreen');
        fullscreenBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5" />
        </svg>`;

        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      } else {
        // Enter fullscreen
        container.classList.add('fullscreen');
        fullscreenBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>`;

        if (container.requestFullscreen) {
          container.requestFullscreen();
        } else if (container.webkitRequestFullscreen) {
          container.webkitRequestFullscreen();
        } else if (container.mozRequestFullScreen) {
          container.mozRequestFullScreen();
        } else if (container.msRequestFullscreen) {
          container.msRequestFullscreen();
        }
      }

      // Trigger layout resize after fullscreen change
      setTimeout(() => {
        if (window.editor) {
          window.editor.layout();
        }
      }, 100);
    }

    // Dark mode toggle
    function toggleDarkMode() {
      if (!isCodeLabPage) return; // Only allow toggle on code lab pages

      isDarkMode = !isDarkMode;
      localStorage.setItem(DARK_MODE_KEY, isDarkMode);
      applyDarkMode();

      // Dispatch custom event for header to listen
      window.dispatchEvent(new Event('darkModeChanged'));
    }

    function applyDarkMode() {
      const body = document.body;
      const moonIcon = document.getElementById('moonIcon');
      const sunIcon = document.getElementById('sunIcon');

      if (!isCodeLabPage) {
        body.classList.remove('dark-mode');
        return;
      }

      if (isDarkMode) {
        body.classList.add('dark-mode');
        if (moonIcon && sunIcon) {
          moonIcon.classList.add('hidden');
          sunIcon.classList.remove('hidden');
        }

        // Change Monaco editor theme to dark
        if (window.editor) {
          monaco.editor.setTheme('vs-dark');
        }
      } else {
        body.classList.remove('dark-mode');
        if (moonIcon && sunIcon) {
          moonIcon.classList.remove('hidden');
          sunIcon.classList.add('hidden');
        }

        // Change Monaco editor theme to light
        if (window.editor) {
          monaco.editor.setTheme('vs-light');
        }
      }
    }

    // Reset editor to default code
    function resetEditor() {
      if (window.editor) {
        window.editor.setValue(DEFAULT_CODE);
        localStorage.removeItem(STORAGE_KEY);
        localStorage.removeItem(LAST_SUBMITTED_KEY);
        localStorage.removeItem(`codekaro_feedback_{{$video->id}}`);
        lastSubmittedCode = '';
        document.getElementById("output").innerHTML = "";
        document.getElementById("feedback").innerHTML = '<div class="text-sm text-gray-500">Submit your code to get feedback</div>';

        // Hide feedback tab and switch to problem tab
        const feedbackTab = document.getElementById('feedbackTab');
        feedbackTab.classList.add('hidden');
        feedbackTab.classList.remove('flex');
        switchTab('problem');

        updateSubmitButtonState();
        runCode();
      }
    }

    // Function to check if submit button should be enabled
    function updateSubmitButtonState() {
      const currentCode = window.editor ? window.editor.getValue() : '';
      const submitBtn = document.getElementById('submitBtn');

      if (currentCode === lastSubmittedCode) {
        submitBtn.disabled = true;
      } else {
        submitBtn.disabled = false;
      }
    }

    // Function to load saved feedback from localStorage
    function loadSavedFeedback() {
      const feedbackKey = `codekaro_feedback_{{$video->id}}`;
      const savedFeedback = localStorage.getItem(feedbackKey);

      if (savedFeedback) {
        try {
          const feedbackData = JSON.parse(savedFeedback);
          const feedbackEl = document.getElementById('feedback');

          // Check if feedback is not too old (optional: 24 hours)
          const now = Date.now();
          const age = now - feedbackData.timestamp;
          const maxAge = 24 * 60 * 60 * 1000; // 24 hours

          if (age < maxAge) {
            // Show feedback tab if saved feedback exists
            document.getElementById('feedbackTab').classList.remove('hidden');
            document.getElementById('feedbackTab').classList.add('flex');

            // Format and display saved feedback
            let feedbackHTML = '<div class="space-y-3">';

            // Score badge
            const scoreColor = feedbackData.score >= 9 ? 'bg-green-100 text-green-800' :
              feedbackData.score >= 7 ? 'bg-blue-100 text-blue-800' :
                feedbackData.score >= 5 ? 'bg-yellow-100 text-yellow-800' :
                  'bg-red-100 text-red-800';

            feedbackHTML += `<div class="flex items-center gap-3">
              <span class="text-2xl font-bold ${scoreColor} px-3 py-1 rounded-lg">${feedbackData.score}/10</span>
              <span class="text-sm font-medium ${feedbackData.isApproved ? 'text-green-600' : 'text-red-600'}">
                ${feedbackData.isApproved ? '✓ Approved' : '✗ Not Approved'}
              </span>
            </div>`;

            // Feedback text
            feedbackHTML += `<div class="text-sm text-gray-700 leading-relaxed">${formatFeedback(feedbackData.feedback)}</div>`;
            feedbackHTML += '</div>';

            feedbackEl.innerHTML = feedbackHTML;
          } else {
            // Clear old feedback
            localStorage.removeItem(feedbackKey);
          }
        } catch (e) {
          console.error('Error loading saved feedback:', e);
        }
      }
    }

    require.config({ paths: { 'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@0.44.0/min/vs' } });
    require(['vs/editor/editor.main'], function () {
      // Load code from localStorage or use default
      const savedCode = localStorage.getItem(STORAGE_KEY);
      const initialCode = savedCode || DEFAULT_CODE;

      // Determine initial theme based on dark mode preference
      const initialTheme = isDarkMode ? 'vs-dark' : 'vs-light';

      window.editor = monaco.editor.create(document.getElementById('editor'), {
        value: initialCode,
        language: 'javascript',
        theme: initialTheme,
        fontSize: 16,
        automaticLayout: true,
        minimap: { enabled: false },
        lineNumbers: 'on',
        scrollBeyondLastLine: false,
        overviewRulerBorder: false,
        overviewRulerLanes: 0,
        hideCursorInOverviewRuler: true,
        renderLineHighlight: 'all',
        lineHighlightBackground: '#f5f5f5',
        scrollbar: {
          vertical: 'auto',
          horizontal: 'auto',
          useShadows: true,
          verticalHasArrows: false,
          horizontalHasArrows: false,
          verticalScrollbarSize: 10,
          horizontalScrollbarSize: 10
        },
        suggestSelection: 'first',
        quickSuggestions: {
          other: true,
          comments: true,
          strings: true
        },
        quickSuggestionsDelay: 0,
        acceptSuggestionOnEnter: 'on',
        tabCompletion: 'on',
        suggest: {
          showIcons: true,
          filterGraceful: true,
          preview: true,
          maxVisibleSuggestions: 12,
          selectionMode: 'always',
          snippetsPreventQuickSuggestions: false
        }
      });

      // Apply dark mode theme
      applyDarkMode();

      // Notify header of initial dark mode state if on code lab page
      if (isCodeLabPage) {
        window.dispatchEvent(new Event('darkModeChanged'));
      }

      // Auto-run on initial load
      setTimeout(runCode, 500);

      // Check initial submit button state
      updateSubmitButtonState();

      // Load saved feedback if available
      loadSavedFeedback();

      // Setup auto-run on content change and save to localStorage
      let autoRunTimeout;
      let saveTimeout;
      editor.onDidChangeModelContent(() => {
        // Auto-run code
        if (document.getElementById("autorun").checked) {
          clearTimeout(autoRunTimeout);
          autoRunTimeout = setTimeout(runCode, 500);
        }

        // Save to localStorage (debounced)
        clearTimeout(saveTimeout);
        saveTimeout = setTimeout(() => {
          const code = editor.getValue();
          localStorage.setItem(STORAGE_KEY, code);
        }, 1000);

        // Update submit button state
        updateSubmitButtonState();
      });

      // Listen for pretty print toggle changes to rerun code
      document.getElementById("prettyprint").addEventListener('change', () => {
        runCode();
      });
    });

    function switchTab(tab) {
      const problemTab = document.getElementById('problemTab');
      const terminalTab = document.getElementById('terminalTab');
      const feedbackTab = document.getElementById('feedbackTab');
      const problemSection = document.getElementById('problemSection');
      const terminalSection = document.getElementById('terminalSection');
      const feedbackSection = document.getElementById('feedbackSection');

      // Reset all tabs
      [problemTab, terminalTab, feedbackTab].forEach(tabEl => {
        tabEl.classList.remove('border-black', 'bg-gray-50');
        tabEl.classList.add('border-transparent');
        tabEl.querySelector('svg').classList.remove('text-gray-700');
        tabEl.querySelector('svg').classList.add('text-gray-500');
      });

      // Hide all sections
      [problemSection, terminalSection, feedbackSection].forEach(section => {
        section.classList.add('hidden');
        section.classList.remove('flex');
      });

      // Activate selected tab
      if (tab === 'problem') {
        problemTab.classList.add('border-black', 'bg-gray-50');
        problemTab.classList.remove('border-transparent');
        problemTab.querySelector('svg').classList.remove('text-gray-500');
        problemTab.querySelector('svg').classList.add('text-gray-700');
        problemSection.classList.remove('hidden');
        problemSection.classList.add('flex');
      } else if (tab === 'terminal') {
        terminalTab.classList.add('border-black', 'bg-gray-50');
        terminalTab.classList.remove('border-transparent');
        terminalTab.querySelector('svg').classList.remove('text-gray-500');
        terminalTab.querySelector('svg').classList.add('text-gray-700');
        terminalSection.classList.remove('hidden');
        terminalSection.classList.add('flex');
      } else if (tab === 'feedback') {
        feedbackTab.classList.add('border-black', 'bg-gray-50');
        feedbackTab.classList.remove('border-transparent');
        feedbackTab.querySelector('svg').classList.remove('text-gray-500');
        feedbackTab.querySelector('svg').classList.add('text-gray-700');
        feedbackSection.classList.remove('hidden');
        feedbackSection.classList.add('flex');
      }
    }

    function formatFeedback(text) {
      // Escape HTML first
      text = text
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');

      // Convert markdown-style bold (**text** or __text__) to <strong>
      text = text.replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>');
      text = text.replace(/__(.+?)__/g, '<strong>$1</strong>');

      // Convert inline code (`code`) to <code>
      text = text.replace(/`(.+?)`/g, '<code>$1</code>');

      // Split into paragraphs on double line breaks
      const paragraphs = text.split(/\n\n+/);

      let formatted = '';
      for (let para of paragraphs) {
        para = para.trim();
        if (!para) continue;

        // Check if it's a list (lines starting with - or * or numbers)
        const lines = para.split('\n');
        if (lines.length > 1 && lines[0].match(/^[-*•]\s/) || lines[0].match(/^\d+\.\s/)) {
          // It's a list
          const isBulleted = lines[0].match(/^[-*•]\s/);
          const listTag = isBulleted ? 'ul' : 'ol';
          formatted += `<${listTag}>`;
          for (let line of lines) {
            line = line.trim();
            if (line.match(/^[-*•]\s/) || line.match(/^\d+\.\s/)) {
              line = line.replace(/^[-*•]\s/, '').replace(/^\d+\.\s/, '');
              formatted += `<li>${line}</li>`;
            }
          }
          formatted += `</${listTag}>`;
        } else {
          // Convert single line breaks within paragraph to <br>
          para = para.replace(/\n/g, '<br>');
          formatted += `<p>${para}</p>`;
        }
      }

      return formatted || text;
    }

    async function submitCode() {
      const code = window.editor.getValue();

      // Check if code has changed since last submission
      if (code === lastSubmittedCode) {
        return; // Don't submit if no changes
      }

      // First run the code
      runCode();

      // Show feedback tab
      const feedbackTab = document.getElementById('feedbackTab');
      feedbackTab.classList.remove('hidden');
      feedbackTab.classList.add('flex');

      // Switch to feedback tab
      switchTab('feedback');

      const problemStatement = `{!! addslashes($video->title) !!}\n\n{!! strip_tags(addslashes($video->desc)) !!}`;

      const feedbackEl = document.getElementById("feedback");
      const submitBtn = document.getElementById("submitBtn");
      const submitBtnText = document.getElementById("submitBtnText");
      const submitSpinner = document.getElementById("submitSpinner");

      // Show spinner and change text
      submitBtn.disabled = true;
      submitBtnText.textContent = 'Analyzing';
      submitSpinner.classList.remove('hidden');

      feedbackEl.innerHTML = '<div class="text-sm text-gray-500">Analyzing your code...</div>';

      try {
        const response = await fetch('/chat', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({
            message: `Problem: ${problemStatement}\n\nCode:\n${code}`,
            history: [],
            isCodeReview: true
          })
        });

        const data = await response.json();

        // Hide spinner and restore button text
        submitBtnText.textContent = 'Submit Code';
        submitSpinner.classList.add('hidden');

        if (data.success) {
          // Store the submitted code
          lastSubmittedCode = code;
          localStorage.setItem(LAST_SUBMITTED_KEY, code);

          // Update button state (will be disabled since code matches last submitted)
          updateSubmitButtonState();

          try {
            // Try to extract and parse JSON from the response
            let jsonStr = data.reply.trim();

            // Remove markdown code blocks if present
            jsonStr = jsonStr.replace(/```json\s*/g, '').replace(/```\s*/g, '');

            // Try to find JSON object in the response
            const jsonMatch = jsonStr.match(/\{[\s\S]*\}/);
            if (jsonMatch) {
              jsonStr = jsonMatch[0];
            }

            // Parse the JSON response from AI
            const review = JSON.parse(jsonStr);

            // Validate that we have the required fields
            if (typeof review.score === 'undefined' || typeof review.isApproved === 'undefined' || typeof review.feedback === 'undefined') {
              throw new Error('Invalid review format');
            }

            // Format and display feedback
            let feedbackHTML = '<div class="space-y-3">';

            // Score badge
            const scoreColor = review.score >= 9 ? 'bg-green-100 text-green-800' :
              review.score >= 7 ? 'bg-blue-100 text-blue-800' :
                review.score >= 5 ? 'bg-yellow-100 text-yellow-800' :
                  'bg-red-100 text-red-800';

            feedbackHTML += `<div class="flex items-center gap-3">
              <span class="text-2xl font-bold ${scoreColor} px-3 py-1 rounded-lg">${review.score}/10</span>
              <span class="text-sm font-medium ${review.isApproved ? 'text-green-600' : 'text-red-600'}">
                ${review.isApproved ? '✓ Approved' : '✗ Not Approved'}
              </span>
            </div>`;

            // Feedback text - use formatFeedback for proper formatting
            feedbackHTML += `<div class="text-sm text-gray-700 leading-relaxed">${formatFeedback(review.feedback)}</div>`;
            feedbackHTML += '</div>';

            feedbackEl.innerHTML = feedbackHTML;

            // Store feedback in localStorage for persistence
            const feedbackData = {
              score: review.score,
              isApproved: review.isApproved,
              feedback: review.feedback,
              timestamp: Date.now()
            };
            localStorage.setItem(`codekaro_feedback_{{$video->id}}`, JSON.stringify(feedbackData));
          } catch (e) {
            console.error('JSON parsing error:', e);
            console.error('Raw response:', data.reply);
            // If JSON parsing fails, show the raw response
            feedbackEl.innerHTML = `<div class="text-sm text-gray-700">${formatFeedback(data.reply)}</div>`;
          }
        } else {
          submitBtn.disabled = false;
          feedbackEl.innerHTML = '<div class="text-sm text-red-600">Failed to get feedback. Please try again.</div>';
        }
      } catch (error) {
        console.error('Feedback error:', error);

        // Hide spinner and restore button on error
        submitBtn.disabled = false;
        submitBtnText.textContent = 'Submit Code';
        submitSpinner.classList.add('hidden');

        feedbackEl.innerHTML = '<div class="text-sm text-red-600">Error connecting to feedback service.</div>';
      }
    }

    function formatValue(value) {
      const isPrettyPrint = document.getElementById("prettyprint").checked;

      if (isPrettyPrint && (typeof value === 'object' || Array.isArray(value))) {
        return formatPrettyJSON(value);
      }

      if (value === null) {
        return '<span class="code-snippet">null</span>';
      }

      if (value === undefined) {
        return '<span class="code-snippet">undefined</span>';
      }

      if (typeof value === 'boolean') {
        return `<span class="code-snippet">${value}</span>`;
      }

      if (typeof value === 'number') {
        return `<span class="code-snippet">${value}</span>`;
      }

      if (typeof value === 'string') {
        return escapeHTML(value);
      }

      if (typeof value === 'function') {
        const funcStr = value.toString();
        const match = funcStr.match(/^function\s*([^\s(]*)/);
        const name = match && match[1] ? match[1] : 'anonymous';
        return `<span class="code-snippet">ƒ ${name}()</span>`;
      }

      if (Array.isArray(value)) {
        if (value.length === 0) {
          return '<span class="code-snippet">[]</span>';
        }

        let result = '<span class="code-snippet">[ ';
        for (let i = 0; i < Math.min(value.length, 5); i++) {
          if (i > 0) result += ', ';
          // Remove any existing class to avoid nesting
          const formattedValue = formatValue(value[i]).replace(/<\/?span[^>]*>/g, '');
          result += formattedValue;
        }

        if (value.length > 5) {
          result += ', ...';
        }

        result += ' ]</span>';
        return result;
      }

      if (typeof value === 'object') {
        if (Object.keys(value).length === 0) {
          return '<span class="code-snippet">{}</span>';
        }

        let result = '<span class="code-snippet">{ ';
        let count = 0;
        for (const key in value) {
          if (count > 0) result += ', ';
          // Remove any existing class to avoid nesting
          const formattedValue = formatValue(value[key]).replace(/<\/?span[^>]*>/g, '');
          result += `${key}: ${formattedValue}`;
          count++;

          if (count >= 3) {
            result += ', ...';
            break;
          }
        }

        result += ' }</span>';
        return result;
      }

      return String(value);
    }

    function formatPrettyJSON(obj) {
      // Create a container with the pretty-json class
      let result = '<div class="pretty-json">';

      // Convert the value to a formatted string
      const jsonString = JSON.stringify(obj, null, 2);

      // Apply syntax highlighting
      const highlighted = jsonString
        .replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
          let cls = 'json-number';
          if (/^"/.test(match)) {
            if (/:$/.test(match)) {
              cls = 'json-key';
              // Remove the trailing colon
              match = match.replace(/:$/, '');
            } else {
              cls = 'json-string';
            }
          } else if (/true|false/.test(match)) {
            cls = 'json-boolean';
          } else if (/null/.test(match)) {
            cls = 'json-null';
          }
          return '<span class="' + cls + '">' + match + '</span>';
        })
        // Add a colon after keys
        .replace(/<\/span>(\s*)(?=<span)/g, '</span>$1: ');

      result += highlighted + '</div>';
      return result;
    }

    function escapeHTML(str) {
      return str
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
    }

    function addConsoleLine(type, ...args) {
      const outputEl = document.getElementById("output");
      const line = document.createElement("div");
      line.className = `terminal-line log-${type}`;

      const content = document.createElement("span");
      content.innerHTML = args.map(value => formatValue(value)).join(" ");

      line.appendChild(content);
      outputEl.appendChild(line);
      outputEl.scrollTop = outputEl.scrollHeight;
    }

    function addErrorLine(err) {
      const outputEl = document.getElementById("output");

      // Create main error line
      const line = document.createElement("div");
      line.className = "terminal-line log-error";

      // Create error header (clickable)
      const errorHeader = document.createElement("div");
      errorHeader.className = "error-header";

      // Add arrow icon
      const arrow = document.createElement("span");
      arrow.className = "arrow-icon";
      arrow.innerHTML = "▶";
      errorHeader.appendChild(arrow);

      // Error container for type and message
      const errorContainer = document.createElement("div");
      errorContainer.style.flex = "1";

      // Extract error information
      const errorType = document.createElement("span");
      errorType.className = "error-type";
      errorType.textContent = err.name || "Error";

      const errorMessage = document.createElement("span");
      errorMessage.className = "error-message";
      errorMessage.textContent = err.message;

      // Extract line number and file info from the stack
      let lineInfo = "";
      let columnInfo = "";

      if (err.stack) {
        const stackLines = err.stack.split('\n');
        if (stackLines.length > 1) {
          const match = stackLines[1].match(/<anonymous>:(\d+):(\d+)/);
          if (match) {
            lineInfo = match[1];
            columnInfo = match[2];
          }
        }
      }

      // Create location info
      const errorLocation = document.createElement("span");
      errorLocation.className = "error-location";
      if (lineInfo) {
        errorLocation.textContent = `(line: ${lineInfo}, column: ${columnInfo})`;
      }

      // Layout error in a cleaner format
      errorContainer.appendChild(errorType);
      errorContainer.appendChild(errorMessage);
      errorContainer.appendChild(errorLocation);

      errorHeader.appendChild(errorContainer);

      // Create stack trace (hidden by default)
      const stackTrace = document.createElement("div");
      stackTrace.className = "error-stack";

      if (err.stack) {
        stackTrace.textContent = err.stack
          .split('\n')
          .map(line => line.trim())
          .join('\n');
      }

      // Toggle stack trace on click
      errorHeader.addEventListener('click', () => {
        arrow.classList.toggle('arrow-expanded');
        stackTrace.style.display = stackTrace.style.display === 'block' ? 'none' : 'block';
      });

      line.appendChild(errorHeader);
      line.appendChild(stackTrace);

      outputEl.appendChild(line);
      outputEl.scrollTop = outputEl.scrollHeight;
    }

    function runCode() {
      const code = window.editor.getValue();
      const outputEl = document.getElementById("output");
      outputEl.innerHTML = "";

      const originalConsole = {
        log: console.log,
        warn: console.warn,
        error: console.error,
        info: console.info
      };

      console.log = function (...args) {
        addConsoleLine('info', ...args);
        originalConsole.log.apply(console, args);
      };

      console.warn = function (...args) {
        addConsoleLine('warn', ...args);
        originalConsole.warn.apply(console, args);
      };

      console.error = function (...args) {
        addConsoleLine('error', ...args);
        originalConsole.error.apply(console, args);
      };

      console.info = function (...args) {
        addConsoleLine('info', ...args);
        originalConsole.info.apply(console, args);
      };

      try {
        new Function(code)();
      } catch (err) {
        addErrorLine(err);
      }

      // Restore original console methods
      Object.assign(console, originalConsole);
    }

    // Handle fullscreen change events
    document.addEventListener('fullscreenchange', handleFullscreenChange);
    document.addEventListener('webkitfullscreenchange', handleFullscreenChange);
    document.addEventListener('mozfullscreenchange', handleFullscreenChange);
    document.addEventListener('MSFullscreenChange', handleFullscreenChange);

    function handleFullscreenChange() {
      const container = document.getElementById('container');
      const fullscreenBtn = document.getElementById('fullscreenBtn');

      if (!document.fullscreenElement &&
        !document.webkitFullscreenElement &&
        !document.mozFullScreenElement &&
        !document.msFullscreenElement) {
        container.classList.remove('fullscreen');
        fullscreenBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5" />
        </svg>`;
      }

      setTimeout(() => {
        if (window.editor) {
          window.editor.layout();
        }
      }, 100);
    }
  </script>