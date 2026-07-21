@extends('layouts.t-admin-sidebar')

@section('content')
<div class="p-6 max-w-5xl mx-auto space-y-6 text-neutral-900 font-sans" x-data="migrationsManager()">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-5 border-b border-neutral-200" style="border-bottom: 1px solid #e5e5e5;">
        <div>
            <div class="flex items-center gap-2.5">
                <div class="p-2.5 rounded-lg border" style="background-color: #f4f4f5; border: 1px solid #e4e4e7; color: #18181b;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                        <path d="M3 3v5h5"></path>
                        <path d="M12 7v5l4 2"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold tracking-tight text-neutral-900">Data Migrations</h1>
                    <p class="text-xs text-neutral-500">Queue-based chunk transmission to API services (1 Lakh+ ready)</p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-md text-xs border" style="background-color: #ffffff; border: 1px solid #e4e4e7;">
                <span class="text-neutral-500 font-medium">API Key:</span>
                <input type="password" x-model="apiKey" placeholder="Bearer token (optional)" class="bg-transparent text-neutral-900 font-mono text-xs focus:outline-none w-44">
            </div>
            <button @click="startAllSequential" 
                    :disabled="isAnyRunning"
                    class="px-4 py-2 text-white rounded-md text-xs font-semibold flex items-center gap-2 border transition-all cursor-pointer disabled:opacity-50"
                    style="background-color: #18181b; color: #ffffff; border: 1px solid #18181b;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span>Migrate All Sequentially</span>
            </button>
        </div>
    </div>

    <!-- Stacked Full-Width Entity Cards (One Below Another) -->
    <div class="space-y-6">
        
        <!-- Card 1: Users (Full Width) -->
        <div class="bg-white rounded-xl p-6 border space-y-5" style="background-color: #ffffff; border: 1px solid #e4e4e7;">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 pb-4 border-b" style="border-bottom: 1px solid #f4f4f5;">
                <div class="flex items-center gap-3">
                    <div class="p-2.5 rounded-lg border" style="background-color: #f4f4f5; border: 1px solid #e4e4e7; color: #18181b;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-bold text-neutral-900 text-base">Users Migration</h2>
                        <p class="text-xs text-neutral-500">Student & admin accounts</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-xs px-3 py-1 rounded-full font-mono font-semibold border"
                          :class="{
                              'bg-zinc-100 text-zinc-700 border-zinc-300': users.status === 'idle',
                              'bg-amber-100 text-amber-800 border-amber-300 animate-pulse': users.status === 'running',
                              'bg-blue-100 text-blue-800 border-blue-300': users.status === 'paused',
                              'bg-emerald-100 text-emerald-800 border-emerald-300': users.status === 'completed',
                              'bg-rose-100 text-rose-800 border-rose-300': users.status === 'failed'
                          }"
                          x-text="users.status.toUpperCase()"></span>
                    
                    <div class="flex items-center gap-2">
                        <template x-if="users.status !== 'running'">
                            <button @click="startEntityQueue('users')" class="px-4 py-2 text-white rounded-md text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer" style="background-color: #18181b; color: #ffffff; border: 1px solid #18181b;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                <span x-text="users.status === 'paused' ? 'Resume Queue' : 'Start Queue'"></span>
                            </button>
                        </template>
                        <template x-if="users.status === 'running'">
                            <button @click="pauseEntityQueue('users')" class="px-4 py-2 text-white rounded-md text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer" style="background-color: #d97706; color: #ffffff; border: 1px solid #d97706;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
                                <span>Pause</span>
                            </button>
                        </template>
                        <button @click="resetEntityQueue('users')" class="px-3.5 py-2 rounded-md text-xs font-bold transition-all cursor-pointer" style="background-color: #ffffff; color: #18181b; border: 1px solid #d4d4d8;">
                            Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- Progress & Controls Grid -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
                <!-- Progress Box -->
                <div class="md:col-span-5 rounded-lg p-4 border space-y-2" style="background-color: #fafafa; border: 1px solid #f4f4f5;">
                    <div class="flex justify-between items-baseline text-xs">
                        <span class="text-neutral-500 font-medium">Migration Progress</span>
                        <span class="font-mono font-bold text-neutral-900 text-sm" x-text="users.processed.toLocaleString() + ' / ' + users.total.toLocaleString()"></span>
                    </div>
                    <div class="w-full rounded-full h-2.5 overflow-hidden" style="background-color: #e4e4e7;">
                        <div class="h-2.5 rounded-full transition-all duration-300" style="background-color: #18181b;" :style="'width: ' + getPercentage('users') + '%'"></div>
                    </div>
                    <div class="flex justify-between text-xs text-neutral-500 font-mono">
                        <span x-text="getPercentage('users') + '% completed'"></span>
                        <span x-text="users.errors + ' errors'"></span>
                    </div>
                </div>

                <!-- Controls Inputs -->
                <div class="md:col-span-7 grid grid-cols-1 md:grid-cols-12 gap-3 text-xs">
                    <div class="md:col-span-8">
                        <label class="block text-neutral-700 font-semibold mb-1 text-xs">Endpoint URL</label>
                        <input type="url" x-model="users.targetUrl" class="w-full px-3 py-2 bg-white rounded-md text-neutral-900 font-mono text-xs border focus:outline-none" style="border: 1px solid #d4d4d8;">
                    </div>
                    <div class="md:col-span-4">
                        <label class="block text-neutral-700 font-semibold mb-1 text-xs">Chunk Size</label>
                        <select x-model.number="users.chunkSize" class="w-full px-3 py-2 bg-white rounded-md text-neutral-900 text-xs font-mono font-semibold border focus:outline-none" style="border: 1px solid #d4d4d8;">
                            <option value="100">100 / batch</option>
                            <option value="250">250 / batch</option>
                            <option value="500">500 / batch</option>
                            <option value="1000">1,000 / batch (Rec.)</option>
                            <option value="2000">2,000 / batch (Fast)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Batches (Full Width) -->
        <div class="bg-white rounded-xl p-6 border space-y-5" style="background-color: #ffffff; border: 1px solid #e4e4e7;">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 pb-4 border-b" style="border-bottom: 1px solid #f4f4f5;">
                <div class="flex items-center gap-3">
                    <div class="p-2.5 rounded-lg border" style="background-color: #f4f4f5; border: 1px solid #e4e4e7; color: #18181b;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                            <line x1="2" x2="22" y1="10" y2="10"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-bold text-neutral-900 text-base">Batches Migration</h2>
                        <p class="text-xs text-neutral-500">Course & live class batches</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-xs px-3 py-1 rounded-full font-mono font-semibold border"
                          :class="{
                              'bg-zinc-100 text-zinc-700 border-zinc-300': batches.status === 'idle',
                              'bg-amber-100 text-amber-800 border-amber-300 animate-pulse': batches.status === 'running',
                              'bg-blue-100 text-blue-800 border-blue-300': batches.status === 'paused',
                              'bg-emerald-100 text-emerald-800 border-emerald-300': batches.status === 'completed',
                              'bg-rose-100 text-rose-800 border-rose-300': batches.status === 'failed'
                          }"
                          x-text="batches.status.toUpperCase()"></span>
                    
                    <div class="flex items-center gap-2">
                        <template x-if="batches.status !== 'running'">
                            <button @click="startEntityQueue('batches')" class="px-4 py-2 text-white rounded-md text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer" style="background-color: #18181b; color: #ffffff; border: 1px solid #18181b;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                <span x-text="batches.status === 'paused' ? 'Resume Queue' : 'Start Queue'"></span>
                            </button>
                        </template>
                        <template x-if="batches.status === 'running'">
                            <button @click="pauseEntityQueue('batches')" class="px-4 py-2 text-white rounded-md text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer" style="background-color: #d97706; color: #ffffff; border: 1px solid #d97706;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
                                <span>Pause</span>
                            </button>
                        </template>
                        <button @click="resetEntityQueue('batches')" class="px-3.5 py-2 rounded-md text-xs font-bold transition-all cursor-pointer" style="background-color: #ffffff; color: #18181b; border: 1px solid #d4d4d8;">
                            Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- Progress & Controls Grid -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
                <!-- Progress Box -->
                <div class="md:col-span-5 rounded-lg p-4 border space-y-2" style="background-color: #fafafa; border: 1px solid #f4f4f5;">
                    <div class="flex justify-between items-baseline text-xs">
                        <span class="text-neutral-500 font-medium">Migration Progress</span>
                        <span class="font-mono font-bold text-neutral-900 text-sm" x-text="batches.processed.toLocaleString() + ' / ' + batches.total.toLocaleString()"></span>
                    </div>
                    <div class="w-full rounded-full h-2.5 overflow-hidden" style="background-color: #e4e4e7;">
                        <div class="h-2.5 rounded-full transition-all duration-300" style="background-color: #18181b;" :style="'width: ' + getPercentage('batches') + '%'"></div>
                    </div>
                    <div class="flex justify-between text-xs text-neutral-500 font-mono">
                        <span x-text="getPercentage('batches') + '% completed'"></span>
                        <span x-text="batches.errors + ' errors'"></span>
                    </div>
                </div>

                <!-- Controls Inputs -->
                <div class="md:col-span-7 grid grid-cols-1 md:grid-cols-12 gap-3 text-xs">
                    <div class="md:col-span-8">
                        <label class="block text-neutral-700 font-semibold mb-1 text-xs">Endpoint URL</label>
                        <input type="url" x-model="batches.targetUrl" class="w-full px-3 py-2 bg-white rounded-md text-neutral-900 font-mono text-xs border focus:outline-none" style="border: 1px solid #d4d4d8;">
                    </div>
                    <div class="md:col-span-4">
                        <label class="block text-neutral-700 font-semibold mb-1 text-xs">Chunk Size</label>
                        <select x-model.number="batches.chunkSize" class="w-full px-3 py-2 bg-white rounded-md text-neutral-900 text-xs font-mono font-semibold border focus:outline-none" style="border: 1px solid #d4d4d8;">
                            <option value="100">100 / batch</option>
                            <option value="250">250 / batch</option>
                            <option value="500">500 / batch (Rec.)</option>
                            <option value="1000">1,000 / batch</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Enrollments (Full Width) -->
        <div class="bg-white rounded-xl p-6 border space-y-5" style="background-color: #ffffff; border: 1px solid #e4e4e7;">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 pb-4 border-b" style="border-bottom: 1px solid #f4f4f5;">
                <div class="flex items-center gap-3">
                    <div class="p-2.5 rounded-lg border" style="background-color: #f4f4f5; border: 1px solid #e4e4e7; color: #18181b;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-bold text-neutral-900 text-base">Enrollments Migration</h2>
                        <p class="text-xs text-neutral-500">Student course access & payment summaries</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-xs px-3 py-1 rounded-full font-mono font-semibold border"
                          :class="{
                              'bg-zinc-100 text-zinc-700 border-zinc-300': enrollments.status === 'idle',
                              'bg-amber-100 text-amber-800 border-amber-300 animate-pulse': enrollments.status === 'running',
                              'bg-blue-100 text-blue-800 border-blue-300': enrollments.status === 'paused',
                              'bg-emerald-100 text-emerald-800 border-emerald-300': enrollments.status === 'completed',
                              'bg-rose-100 text-rose-800 border-rose-300': enrollments.status === 'failed'
                          }"
                          x-text="enrollments.status.toUpperCase()"></span>
                    
                    <div class="flex items-center gap-2">
                        <template x-if="enrollments.status !== 'running'">
                            <button @click="startEntityQueue('enrollments')" class="px-4 py-2 text-white rounded-md text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer" style="background-color: #18181b; color: #ffffff; border: 1px solid #18181b;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                <span x-text="enrollments.status === 'paused' ? 'Resume Queue' : 'Start Queue'"></span>
                            </button>
                        </template>
                        <template x-if="enrollments.status === 'running'">
                            <button @click="pauseEntityQueue('enrollments')" class="px-4 py-2 text-white rounded-md text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer" style="background-color: #d97706; color: #ffffff; border: 1px solid #d97706;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
                                <span>Pause</span>
                            </button>
                        </template>
                        <button @click="resetEntityQueue('enrollments')" class="px-3.5 py-2 rounded-md text-xs font-bold transition-all cursor-pointer" style="background-color: #ffffff; color: #18181b; border: 1px solid #d4d4d8;">
                            Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- Progress & Controls Grid -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
                <!-- Progress Box -->
                <div class="md:col-span-5 rounded-lg p-4 border space-y-2" style="background-color: #fafafa; border: 1px solid #f4f4f5;">
                    <div class="flex justify-between items-baseline text-xs">
                        <span class="text-neutral-500 font-medium">Migration Progress</span>
                        <span class="font-mono font-bold text-neutral-900 text-sm" x-text="enrollments.processed.toLocaleString() + ' / ' + enrollments.total.toLocaleString()"></span>
                    </div>
                    <div class="w-full rounded-full h-2.5 overflow-hidden" style="background-color: #e4e4e7;">
                        <div class="h-2.5 rounded-full transition-all duration-300" style="background-color: #18181b;" :style="'width: ' + getPercentage('enrollments') + '%'"></div>
                    </div>
                    <div class="flex justify-between text-xs text-neutral-500 font-mono">
                        <span x-text="getPercentage('enrollments') + '% completed'"></span>
                        <span x-text="enrollments.errors + ' errors'"></span>
                    </div>
                </div>

                <!-- Controls Inputs -->
                <div class="md:col-span-7 grid grid-cols-1 md:grid-cols-12 gap-3 text-xs">
                    <div class="md:col-span-8">
                        <label class="block text-neutral-700 font-semibold mb-1 text-xs">Endpoint URL</label>
                        <input type="url" x-model="enrollments.targetUrl" class="w-full px-3 py-2 bg-white rounded-md text-neutral-900 font-mono text-xs border focus:outline-none" style="border: 1px solid #d4d4d8;">
                    </div>
                    <div class="md:col-span-4">
                        <label class="block text-neutral-700 font-semibold mb-1 text-xs">Chunk Size</label>
                        <select x-model.number="enrollments.chunkSize" class="w-full px-3 py-2 bg-white rounded-md text-neutral-900 text-xs font-mono font-semibold border focus:outline-none" style="border: 1px solid #d4d4d8;">
                            <option value="100">100 / batch</option>
                            <option value="250">250 / batch</option>
                            <option value="500">500 / batch</option>
                            <option value="1000">1,000 / batch (Rec.)</option>
                            <option value="2000">2,000 / batch (Fast)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- White Minimalist Queue Activity Terminal Log -->
    <div class="rounded-xl p-5 border space-y-3" style="background-color: #ffffff; border: 1px solid #e4e4e7;">
        <div class="flex items-center justify-between pb-3 border-b text-xs" style="border-bottom: 1px solid #f4f4f5;">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full animate-ping" style="background-color: #10b981;"></span>
                <span class="font-bold text-neutral-800">Queue Activity Terminal Log</span>
            </div>
            <button @click="logs = []" class="text-xs font-semibold text-neutral-500 hover:text-neutral-900 transition-colors cursor-pointer">Clear Console</button>
        </div>

        <div class="h-60 overflow-y-auto font-mono text-xs space-y-1.5 p-2 pr-3 rounded-lg border scrollbar-thin" style="background-color: #fafafa; border: 1px solid #f4f4f5;" id="logContainer">
            <template x-if="logs.length === 0">
                <div class="text-neutral-400 italic py-8 text-center text-xs">System ready. Click "Start Queue" on any migration section above to begin transmission.</div>
            </template>
            <template x-for="(log, idx) in logs" :key="idx">
                <div class="flex items-start gap-2.5 leading-relaxed">
                    <span class="text-neutral-400 font-bold select-none text-[11px]" x-text="log.timestamp"></span>
                    <span class="font-bold text-[10px] px-1.5 py-0.5 rounded border"
                          :class="{
                              'bg-zinc-100 text-zinc-700 border-zinc-300': log.type === 'info',
                              'bg-emerald-100 text-emerald-800 border-emerald-300': log.type === 'success',
                              'bg-amber-100 text-amber-800 border-amber-300': log.type === 'warning',
                              'bg-rose-100 text-rose-800 border-rose-300': log.type === 'danger'
                          }"
                          x-text="log.entity ? '[' + log.entity + ']' : '[SYS]'"></span>
                    <span class="font-medium"
                          :class="{
                              'text-neutral-700': log.type === 'info',
                              'text-emerald-700': log.type === 'success',
                              'text-amber-700': log.type === 'warning',
                              'text-rose-600 font-bold': log.type === 'danger'
                          }" x-text="log.message"></span>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
    function migrationsManager() {
        return {
            apiKey: '',
            users: {
                total: {{ $usersCount }},
                processed: 0,
                offset: 0,
                chunkSize: 1000,
                targetUrl: 'https://api.codekaro.in/migration/users',
                status: 'idle',
                errors: 0
            },
            batches: {
                total: {{ $batchesCount }},
                processed: 0,
                offset: 0,
                chunkSize: 500,
                targetUrl: 'https://api.codekaro.in/migration/batches',
                status: 'idle',
                errors: 0
            },
            enrollments: {
                total: {{ $enrollmentsCount }},
                processed: 0,
                offset: 0,
                chunkSize: 1000,
                targetUrl: 'https://api.codekaro.in/migration/enrollments',
                status: 'idle',
                errors: 0
            },
            logs: [],

            get isAnyRunning() {
                return this.users.status === 'running' || this.batches.status === 'running' || this.enrollments.status === 'running';
            },

            getPercentage(entity) {
                const item = this[entity];
                if (!item || item.total === 0) return 0;
                return Math.min(100, Math.round((item.processed / item.total) * 100));
            },

            addLog(message, type = 'info', entity = null) {
                const now = new Date();
                const timestamp = now.toTimeString().split(' ')[0] + '.' + String(now.getMilliseconds()).padStart(3, '0');
                this.logs.push({ timestamp, message, type, entity });
                
                this.$nextTick(() => {
                    const container = document.getElementById('logContainer');
                    if (container) container.scrollTop = container.scrollHeight;
                });
            },

            async startEntityQueue(entity) {
                const item = this[entity];
                if (!item) return;

                item.status = 'running';
                this.addLog(`Starting queue migration... Target: ${item.targetUrl} (Chunk: ${item.chunkSize})`, 'info', entity);

                while (item.status === 'running' && item.offset < item.total) {
                    const success = await this.sendChunk(entity);
                    if (!success) {
                        item.errors++;
                        if (item.errors >= 3) {
                            item.status = 'failed';
                            this.addLog(`Queue stopped after 3 consecutive errors.`, 'danger', entity);
                            break;
                        }
                    } else {
                        item.errors = 0;
                    }

                    await new Promise(res => setTimeout(res, 200));
                }

                if (item.offset >= item.total && item.status !== 'failed') {
                    item.status = 'completed';
                    item.processed = item.total;
                    this.addLog(`Completed migrating all ${item.total.toLocaleString()} ${entity}.`, 'success', entity);
                }
            },

            pauseEntityQueue(entity) {
                if (this[entity]) {
                    this[entity].status = 'paused';
                    this.addLog(`Paused ${entity} queue at ${this[entity].processed.toLocaleString()} items.`, 'warning', entity);
                }
            },

            resetEntityQueue(entity) {
                if (this[entity]) {
                    this[entity].status = 'idle';
                    this[entity].processed = 0;
                    this[entity].offset = 0;
                    this[entity].errors = 0;
                    this.addLog(`Reset ${entity} queue progress.`, 'info', entity);
                }
            },

            async startAllSequential() {
                this.addLog("Starting sequential migration: Users -> Batches -> Enrollments", "info");
                
                if (this.users.status !== 'completed') {
                    await this.startEntityQueue('users');
                }
                if (this.users.status === 'completed' && this.batches.status !== 'completed') {
                    await this.startEntityQueue('batches');
                }
                if (this.batches.status === 'completed' && this.enrollments.status !== 'completed') {
                    await this.startEntityQueue('enrollments');
                }
            },

            async sendChunk(entity) {
                const item = this[entity];
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

                try {
                    const response = await fetch('{{ route("admin.migrations.send-chunk") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            entity: entity,
                            offset: item.offset,
                            limit: item.chunkSize,
                            target_url: item.targetUrl,
                            api_key: this.apiKey
                        })
                    });

                    const resData = await response.json();

                    if (response.ok && resData.success) {
                        const count = resData.processed || 0;
                        item.offset = resData.next_offset;
                        item.processed = Math.min(item.total, item.offset);

                        this.addLog(`Sent ${count.toLocaleString()} ${entity} chunk -> ${resData.target_url} [${resData.status_code}] (${resData.duration_ms}ms)`, 'success', entity);
                        return true;
                    } else {
                        let errMsg = resData.error || resData.message;
                        if (!errMsg && resData.response_body) {
                            errMsg = typeof resData.response_body === 'object' ? JSON.stringify(resData.response_body) : resData.response_body;
                        }
                        if (!errMsg) {
                            errMsg = `HTTP ${resData.status_code || response.status}`;
                        }
                        this.addLog(`Chunk failed (Offset ${item.offset.toLocaleString()}): ${errMsg}`, 'danger', entity);
                        return false;
                    }
                } catch (err) {
                    this.addLog(`Network error (Offset ${item.offset.toLocaleString()}): ${err.message}`, 'danger', entity);
                    return false;
                }
            }
        };
    }
</script>
@endsection
