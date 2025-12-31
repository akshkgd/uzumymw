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
    .monaco-editor .margin, .monaco-editor .lines-content {
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
    /* Console styles */
    .console-line {
      padding: 8px 12px;
      border-bottom: none;
      font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
      font-size: 16px;
      line-height: 1.5;
    }
    .console-line:hover {
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
    .property, .number, .string, .boolean, .null, .array-index, .function-name {
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
  </style>
</head>
<body class="bg-white text-black  overflow-hidden flex flex-col font-sans">
  <div class="flex flex-col h-[calc(100vh-56px)] mt-[56px]" id="container">
    <!-- Header -->
    <div class="flex justify-between items-center px-4 py-2 border-b">
      <h1 class="text-lg font-semibold">JavaScript Editor</h1>
      <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
          <button class="p-2 rounded-full hover:bg-gray-100" onclick="resetEditor()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
          </button>
          <button class="p-2 rounded-full hover:bg-gray-100" id="fullscreenBtn" onclick="toggleFullscreen()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5" />
            </svg>
          </button>
        </div>
        <div class="flex items-center gap-3">
          <span class="text-sm font-medium">Auto Run</span>
          <label class="inline-flex items-center cursor-pointer">
            <div class="relative">
              <input type="checkbox" id="autorun" class="sr-only peer" checked>
              <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-black"></div>
            </div>
          </label>
        </div>
        <button onclick="runCode()" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-neutral-900">Run Code</button>
      </div>
    </div>

    <!-- Main Layout -->
    <div class="flex flex-1 overflow-hidden">
      <!-- Code Editor -->
      <div class="w-1/3 h-full overflow-y-scroll  borde border-r border-neutral-200">
        <div class="px-4 pb-10">
            <h1 class="text-xl mt-5  font-bold">{{$video->title}}</h1>
            <div class="mt-5">
                {!! $video->desc !!}
            </div>
        </div>
    </div> 
      <div  class="w-2/3 h-[calc(100vh-20vh)]">
        <div id="editor" class="w-full 2xl:h-[calc(100vh-30vh)] h-[calc(100vh-38vh)]"></div>
        <div class="border-t border-neutral-200">
            <div id="output" class="flex-1 overflow-y-auto overflow-x-auto"></div>
        </div>
    </div>

      <!-- Output -->
      <div class="2xl:flex hidden w-1/4 h-full border-l overflow-hidden flex-col">
        <div class="px-4  py-3 border-b flex justify-between items-center">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span class="font-medium text-sm">Console</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-sm font-medium">Pretty Print</span>
            <label class="inline-flex items-center cursor-pointer">
              <div class="relative">
                <input type="checkbox" id="prettyprint" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-black"></div>
              </div>
            </label>
          </div>
        </div>
        <div id="output" class="flex-1 overflow-y-auto overflow-x-auto"></div>
      </div>
    </div>
  </div>

  <script>
    const DEFAULT_CODE = `//Run your Javascript code using Codekaro JS Online Compiler
console.log("Hello, World!");`;

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
    
    // Reset editor to default code
    function resetEditor() {
      if (window.editor) {
        window.editor.setValue(DEFAULT_CODE);
        document.getElementById("output").innerHTML = "";
        runCode();
      }
    }

    require.config({ paths: { 'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@0.44.0/min/vs' } });
    require(['vs/editor/editor.main'], function () {
      window.editor = monaco.editor.create(document.getElementById('editor'), {
        value: DEFAULT_CODE,
        language: 'javascript',
        theme: 'vs-light',
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
      
      // Auto-run on initial load
      setTimeout(runCode, 500);
      
      // Setup auto-run on content change
      let autoRunTimeout;
      editor.onDidChangeModelContent(() => {
        if (document.getElementById("autorun").checked) {
          clearTimeout(autoRunTimeout);
          autoRunTimeout = setTimeout(runCode, 500);
        }
      });
      
      // Listen for pretty print toggle changes to rerun code
      document.getElementById("prettyprint").addEventListener('change', () => {
        runCode();
      });
    });

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
        .replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function(match) {
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
      line.className = `console-line log-${type}`;
      
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
      line.className = "console-line log-error";
      
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

      console.log = function(...args) {
        addConsoleLine('info', ...args);
        originalConsole.log.apply(console, args);
      };

      console.warn = function(...args) {
        addConsoleLine('warn', ...args);
        originalConsole.warn.apply(console, args);
      };

      console.error = function(...args) {
        addConsoleLine('error', ...args);
        originalConsole.error.apply(console, args);
      };

      console.info = function(...args) {
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