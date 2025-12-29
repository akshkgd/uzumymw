<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">
  <title>Codekaro Logs</title>
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- DataTables Bootstrap 5 -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Atom One Dark Pro Colors */
    :root {
      --bg-primary: #111217;
      --bg-secondary: #181b1f;
      --bg-tertiary: #2c313a;
      --border-color: #2e3036;
      --text-primary: #ccccdc;
      --text-secondary: #5c6370;
      --text-muted: #4b5263;
      --accent-color: #ff7f16;
      --error-color: #e91525;
      --warning-color: #ffa908;
      --info-color: #66cd44;
      --success-color: #66cd44;
      --cyan-color: #56b6c2;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background-color: var(--bg-primary);
      color: var(--text-primary);
      font-size: 16px;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    /* Top Header Bar */
    .top-header {
      background: var(--bg-secondary);
      border-bottom: 1px solid var(--border-color);
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 60px;
    }

    /* Filter Bar */
    .filter-bar {
      background: var(--bg-secondary);
      border-bottom: 1px solid var(--border-color);
      padding: 6px 20px;
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .filter-label {
      color: var(--text-secondary);
      font-size: 13px;
      margin-right: 8px;
      font-weight: 400;
    }

    .filter-btn {
      background: rgba(61, 113, 217, 0.15);
      border: 1px solid rgba(110, 159, 255, 0.25);
      color: #ccccdc;
      border-radius: 4px;
      padding: 4px 14px;
      font-size: 13px;
      cursor: pointer;
      transition: all 0.15s;
      font-family: 'Inter', sans-serif;
      font-weight: 500;
      text-transform: capitalize;
    }

    .filter-btn:hover {
      background: rgba(61, 113, 217, 0.25);
      border-color: rgba(110, 159, 255, 0.35);
    }

    .filter-btn.active {
      background: rgba(61, 113, 217, 0.3);
      border-color: rgba(110, 159, 255, 0.5);
      color: #ffffff;
    }

    .filter-btn.error-filter {
      color: #ccccdc;
    }

    .filter-btn.error-filter.active {
      background: rgba(61, 113, 217, 0.3);
      border-color: rgba(110, 159, 255, 0.5);
      color: #ffffff;
    }

    .filter-btn.warning-filter {
      color: #ccccdc;
    }

    .filter-btn.warning-filter.active {
      background: rgba(61, 113, 217, 0.3);
      border-color: rgba(110, 159, 255, 0.5);
      color: #ffffff;
    }

    .filter-btn.info-filter {
      color: #ccccdc;
    }

    .filter-btn.info-filter.active {
      background: rgba(61, 113, 217, 0.3);
      border-color: rgba(110, 159, 255, 0.5);
      color: #ffffff;
    }

    .header-left {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    h1 {
      font-size: 16px;
      font-weight: 600;
      margin: 0;
      color: var(--text-primary);
      letter-spacing: -0.01em;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .file-selector {
      background-color: var(--bg-primary);
      border: 1px solid var(--border-color);
      color: var(--text-primary);
      border-radius: 4px;
      padding: 8px 32px 8px 12px;
      font-size: 13px;
      font-family: 'Inter', sans-serif;
      min-width: 200px;
      cursor: pointer;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%235c6370' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
    }

    .file-selector:focus {
      outline: none;
      border-color: var(--accent-color);
    }

    .search-box {
      background-color: var(--bg-primary);
      border: 1px solid var(--border-color);
      color: var(--text-primary);
      border-radius: 4px;
      padding: 8px 12px;
      font-size: 14px;
      width: 300px;
    }

    .search-box:focus {
      outline: none;
      border-color: var(--accent-color);
    }

    .btn-refresh, .action-btn {
      background-color: var(--bg-tertiary);
      border: 1px solid var(--border-color);
      color: #ccccdc;
      border-radius: 4px;
      padding: 8px 14px;
      font-size: 13px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: all 0.15s;
      text-decoration: none;
    }

    .btn-refresh:hover, .action-btn:hover {
      background-color: var(--bg-primary);
      color: var(--text-primary);
      border-color: var(--accent-color);
    }

    .btn-refresh svg, .action-btn svg {
      width: 14px;
      height: 14px;
    }

    /* Main Content */
    .main-content {
      height: calc(100vh - 110px);
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .table-wrapper {
      flex: 1;
      overflow: auto;
      padding: 0;
      display: flex;
      flex-direction: column;
    }

    .table-wrapper::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    .table-wrapper::-webkit-scrollbar-track {
      background: var(--bg-secondary);
    }

    .table-wrapper::-webkit-scrollbar-thumb {
      background: var(--bg-tertiary);
      border-radius: 4px;
    }

    .table-wrapper::-webkit-scrollbar-thumb:hover {
      background: var(--text-muted);
    }

    #table-log {
      font-size: 16px;
      margin-bottom: 0;
      border-collapse: collapse;
      width: 100%;
    }

    #table-log thead th {
      background-color: var(--bg-secondary);
      color: var(--text-secondary);
      font-weight: 600;
      border: none;
      border-bottom: 1px solid var(--border-color);
      padding: 14px 16px;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    #table-log tbody td {
      padding: 14px 16px;
      vertical-align: middle;
      border: none;
      border-bottom: 1px solid var(--border-color);
      color: var(--text-primary);
    }

    #table-log tbody tr:hover {
      background-color: var(--bg-secondary);
    }

    /* Log Level Colors - Text Only */
    .log-level {
      font-size: 14px;
      font-weight: 400;
      text-transform: capitalize;
      letter-spacing: 0.05em;
      font-family: 'Inter', sans-serif;
    }

    .text-danger .log-level {
      color: var(--error-color);
    }

    .text-warning .log-level {
      color: var(--warning-color);
    }

    .text-info .log-level {
      color: var(--info-color);
    }

    .text-success .log-level {
      color: var(--success-color);
    }

    .text-default .log-level {
      color: var(--text-secondary);
    }

    .log-date {
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      color: var(--text-secondary);
      white-space: nowrap;
    }

    .log-content {
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      line-height: 1.6;
      color: var(--text-primary);
      word-break: break-word;
    }

    .expand-btn {
      padding: 0;
      border: none;
      background: transparent;
      color: var(--accent-color);
      transition: all 0.15s;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
    }

    .expand-btn:hover {
      opacity: 0.7;
    }

    .expand-btn svg {
      width: 18px;
      height: 18px;
    }

    .stack-trace {
      background-color: var(--bg-secondary);
      color: var(--text-primary);
      padding: 12px;
      border-radius: 3px;
      font-family: 'Fira Code', monospace;
      font-size: 11px;
      line-height: 1.7;
      margin-top: 8px;
      white-space: pre-wrap;
      word-break: break-all;
      max-height: 400px;
      overflow: auto;
      border: 1px solid var(--border-color);
    }

    .actions-bar {
      display: flex;
      gap: 0;
      border-top: 1px solid var(--border-color);
      flex-wrap: wrap;
      background: var(--bg-secondary);
    }

    .action-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: var(--text-secondary);
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      transition: all 0.15s;
      padding: 14px 18px;
      border-right: 1px solid var(--border-color);
      background: transparent;
    }

    .action-link:last-child {
      border-right: none;
    }

    .action-link:hover {
      color: var(--accent-color);
      background-color: var(--bg-tertiary);
    }

    .action-link svg {
      width: 13px;
      height: 13px;
    }

    .action-link.danger:hover {
      color: var(--error-color);
    }

    .empty-state {
      text-align: center;
      padding: 4rem 1rem;
      color: var(--text-secondary);
    }

    .empty-state svg {
      width: 48px;
      height: 48px;
      margin-bottom: 1rem;
      opacity: 0.3;
    }

    /* DataTables Styling */
    .dataTables_wrapper {
      color: var(--text-primary) !important;
      background: var(--bg-primary) !important;
    }

    .dataTables_wrapper .row {
      background: var(--bg-secondary) !important;
      margin: 0 !important;
    }

    .dataTables_wrapper .row:first-child {
      display: none !important;
    }

    .dataTables_wrapper .row:last-child {
      border-top: 1px solid var(--border-color);
      padding: 12px 20px;
      background: var(--bg-primary) !important;
      position: relative;
    }

    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_length {
      margin: 0;
    }

    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
      margin: 0;
    }

    .dataTables_wrapper .dataTables_scroll {
      overflow: visible;
    }

    .dataTables_wrapper .dataTables_scrollHead {
      background: var(--bg-secondary) !important;
    }

    .dataTables_wrapper .dataTables_scrollBody {
      background: var(--bg-primary) !important;
    }
    .dataTables_scrollHead{
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
      color: var(--text-secondary);
      font-size: 14px;
    }

    .dataTables_wrapper .dataTables_length select,
    .dataTables_wrapper .dataTables_filter input {
      background-color: var(--bg-primary);
      border: 1px solid var(--border-color);
      color: var(--text-primary);
      border-radius: 3px;
      padding: 8px 12px;
      font-size: 14px;
    }

    .dataTables_wrapper .dataTables_filter input:focus {
      outline: none;
      border-color: var(--accent-color);
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      border: 1px solid var(--border-color) !important;
      background: var(--bg-secondary) !important;
      color: var(--text-secondary) !important;
      padding: 8px 12px;
      margin: 0 2px;
      border-radius: 4px;
      font-size: 14px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      background: var(--bg-tertiary) !important;
      border-color: var(--accent-color) !important;
      color: var(--text-primary) !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
      background: var(--accent-color) !important;
      border-color: var(--accent-color) !important;
      color: white !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
      background: var(--bg-primary) !important;
      border-color: var(--border-color) !important;
      color: var(--text-muted) !important;
      opacity: 0.5;
    }

    /* Bootstrap Table Overrides for Dark Mode */
    .table {
      color: var(--text-primary) !important;
      background-color: var(--bg-primary) !important;
      border-color: var(--border-color) !important;
    }

    .table thead {
      background-color: var(--bg-secondary) !important;
    }

    .table thead th {
      color: var(--text-secondary) !important;
      background-color: var(--bg-secondary) !important;
      border-color: var(--border-color) !important;
    }

    .table tbody tr {
      background-color: var(--bg-primary) !important;
      border-color: var(--border-color) !important;
    }

    .table tbody tr:hover {
      background-color: var(--bg-secondary) !important;
    }

    .table tbody td {
      color: var(--text-primary) !important;
      background-color: transparent !important;
      border-color: var(--border-color) !important;
    }

    .dataTables_scrollHead .table {
      margin-bottom: 0 !important;
    }

    .dataTables_scrollHeadInner {
      background: var(--bg-secondary) !important;
    }

    .dataTables_scrollHeadInner table {
      background: var(--bg-secondary) !important;
    }

    .dataTables_wrapper .col-sm-12,
    .dataTables_wrapper .col-md-6,
    .dataTables_wrapper .col-md-5,
    .dataTables_wrapper .col-md-7 {
      color: var(--text-primary) !important;
    }

    .dataTables_wrapper .dataTables_paginate {
      text-align: right;
    }

    .dataTables_wrapper .dataTables_info {
      text-align: left;
    }

    .dataTables_processing {
      background-color: var(--bg-secondary) !important;
      color: var(--text-primary) !important;
      border: 1px solid var(--border-color) !important;
    }

    .table-wrapper * {
      border-color: var(--border-color) !important;
    }

    .dataTables_wrapper * {
      box-sizing: border-box;
    }
    ::-webkit-scrollbar{
      display: none;
    }
    .main-container{
      border: 1px solid var(--border-color);
      border-radius: 12px;
      margin: 20px;
      overflow: hidden;
    }
  </style>
</head>
<body>
  <!-- Top Header -->
  <div class="top-header">
    <div class="header-left">
      <h1>
        Codekaro Logs
      </h1>
      
      <select class="file-selector" onchange="window.location.href='?l='+this.value">
        <option value="">Select log file...</option>
        @foreach($files as $file)
          <option value="{{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}" @if ($current_file == $file) selected @endif>
            {{$file}}
          </option>
        @endforeach
      </select>
      </div>

    <div class="header-right">
      <input type="text" id="log-search" class="search-box" placeholder="Search logs...">
      
      <select id="log-length" class="file-selector" style="min-width: 120px;">
        <option value="25">Show 25</option>
        <option value="50">Show 50</option>
        <option value="100" selected>Show 100</option>
        <option value="250">Show 250</option>
        <option value="-1">Show All</option>
      </select>
      
      @if($current_file)
        <a href="?dl={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="action-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download
        </a>
        <a id="clean-log" href="?clean={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="action-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/></svg>
          Clean
        </a>
        <a id="delete-log" href="?del={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="action-btn danger">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
          Delete
        </a>
      @endif
      
      <button class="btn-refresh" onclick="location.reload()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/></svg>
        Refresh
      </button>
    </div>
  </div>

  <!-- Filter Bar -->
  <div class="filter-bar">
    <button class="filter-btn active" data-level="all">All</button>
    <button class="filter-btn error-filter" data-level="error">Error</button>
    <button class="filter-btn warning-filter" data-level="warning">Warning</button>
    <button class="filter-btn info-filter" data-level="info">Info</button>
    <button class="filter-btn" data-level="emergency">Emergency</button>
    <button class="filter-btn error-filter" data-level="critical">Critical</button>
    <button class="filter-btn" data-level="debug">Debug</button>
  </div>

  <!-- Main Content -->
  <div class="main-container" >
  <div class="main-content">
      @if ($logs === null)
      <div class="empty-state">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>
        <h3>Log file is too large</h3>
        <p>This file is over 50MB. Please download it to view.</p>
        </div>
      @else
      <div class="table-wrapper ">
        <table id="table-log" class="table" data-ordering-index="{{ $standardFormat ? 1 : 0 }}">
          <thead>
          <tr>
            @if ($standardFormat)
                <th style="width: 100px;">Level</th>
                <th style="width: 180px;">Date</th>
            @else
                <th style="width: 80px;">Line</th>
            @endif
              <th>Message</th>
          </tr>
          </thead>
          <tbody>
          @foreach($logs as $key => $log)
            <tr data-display="stack{{{$key}}}">
              @if ($standardFormat)
                  <td class="text-{{{$log['level_class']}}}">
                    <span class="log-level">{{$log['level']}}</span>
                  </td>
                @endif
                <td class="log-date">
                  @php
                    try {
                      $carbonDate = \Carbon\Carbon::parse($log['date']);
                      echo $carbonDate->format('M d, Y g:i A');
                    } catch (\Exception $e) {
                      echo $log['date'];
                    }
                  @endphp
                </td>
                <td class="log-content">
                @if ($log['stack'])
                    <button type="button" class="expand-btn float-end ms-2" data-display="stack{{{$key}}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H7a2 2 0 0 0-2 2v5a2 2 0 0 1-2 2 2 2 0 0 1 2 2v5c0 1.1.9 2 2 2h1"/><path d="M16 21h1a2 2 0 0 0 2-2v-5c0-1.1.9-2 2-2a2 2 0 0 1-2-2V5a2 2 0 0 0-2-2h-1"/></svg>
                  </button>
                @endif
                {{{$log['text']}}}
                @if (isset($log['in_file']))
                    <br><small style="color: var(--text-secondary);">{{{$log['in_file']}}}</small>
                @endif
                @if ($log['stack'])
                    <div class="stack-trace" id="stack{{{$key}}}" style="display: none;">{{{ trim($log['stack']) }}}</div>
                @endif
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    @endif
    </div>
  </div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Bootstrap 5 Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<script>
  // DataTables and interaction
  $(document).ready(function () {
    // Toggle stack traces
    $('.expand-btn').on('click', function (e) {
      e.stopPropagation();
      const stackId = '#' + $(this).data('display');
      $(stackId).slideToggle(200);
      
      // Icon stays the same, just toggle stack visibility
    });

    // Initialize DataTable
    if ($('#table-log').length) {
      var table = $('#table-log').DataTable({
      "order": [$('#table-log').data('orderingIndex'), 'desc'],
      "stateSave": true,
        "pageLength": 100,
        "lengthMenu": [[25, 50, 100, 250, -1], [25, 50, 100, 250, "All"]],
        "scrollY": false,
        "scrollCollapse": false,
        "deferRender": true,
        "dom": "trip",
        "language": {
          "search": "",
          "lengthMenu": "",
          "info": "_START_ to _END_ of _TOTAL_",
          "infoEmpty": "No entries",
          "infoFiltered": "(filtered from _MAX_)"
        },
      "stateSaveCallback": function (settings, data) {
        window.localStorage.setItem("datatable", JSON.stringify(data));
      },
      "stateLoadCallback": function (settings) {
        var data = JSON.parse(window.localStorage.getItem("datatable"));
        if (data) data.start = 0;
        return data;
      }
    });

      // Custom search in header
      $('#log-search').on('keyup', function() {
        table.search(this.value).draw();
      });

    // Custom length change in header
    $('#log-length').on('change', function() {
      table.page.len(this.value).draw();
    });

    // Filter buttons
    $('.filter-btn').on('click', function() {
      var level = $(this).data('level');
      
      // Update active state
      $('.filter-btn').removeClass('active');
      $(this).addClass('active');
      
      // Filter table
      if (level === 'all') {
        table.column(0).search('').draw();
      } else {
        table.column(0).search('^' + level + '$', true, false).draw();
      }
    });
  }

    // Confirmation dialogs
    $('#delete-log, #clean-log').click(function (e) {
      const action = $(this).text().trim();
      if (!confirm(`Are you sure you want to ${action.toLowerCase()}?`)) {
        e.preventDefault();
        return false;
      }
    });
  });
</script>
</body>
</html>
