<x-layout title="Home | fresh-laravel-app">
    <div class="flex flex-col items-center justify-center min-h-[calc(100vh-60px)] px-6 text-center">
        <span class="bg-amber-100 text-amber-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
            Laravel v{{ app()->version() }}
        </span>

        <h1 class="text-5xl md:text-6xl font-black mb-6 tracking-tight">
            IT9a/L PROFESSIONAL TRACK FOR IT 3
        </h1>

        <p class="max-w-2xl text-lg text-blue-200 mb-10 leading-relaxed">
            Welcome to the demonstration project. This application serves as a live example of 
            <span class="text-white font-semibold underline decoration-amber-400">Laravel's Architecture</span>, 
            Blade components, and routing for our current students in IT9a/L.
        </p>

        <span class="bg-amber-100 text-amber-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
            Topics Covered: Blade, Routing, Models, Migrations, Eloquent ORM.
        </span>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl px-4">
    <div class="group relative p-8 rounded-3xl bg-gradient-to-b from-white/10 to-white/[0.02] border border-white/10 shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:border-amber-400/50">
        <div class="absolute inset-0 rounded-3xl bg-amber-400/5 opacity-0 group-hover:opacity-100 transition-opacity blur-xl"></div>
        
        <div class="relative">
            <div class="w-12 h-12 bg-amber-400/20 rounded-2xl flex items-center justify-center mb-6 border border-amber-400/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-3">The Layout</h3>
            <p class="text-blue-100/60 leading-relaxed">
                Styled via <code class="text-amber-200 bg-white/5 px-2 py-0.5 rounded">layout.blade.php</code>. A perfect blend of custom CSS and Tailwind v4 power.
            </p>
        </div>
    </div>

    <div class="group relative p-8 rounded-3xl bg-gradient-to-b from-white/10 to-white/[0.02] border border-white/10 shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:border-blue-400/50">
        <div class="absolute inset-0 rounded-3xl bg-blue-400/5 opacity-0 group-hover:opacity-100 transition-opacity blur-xl"></div>
        
        <div class="relative">
            <div class="w-12 h-12 bg-blue-400/20 rounded-2xl flex items-center justify-center mb-6 border border-blue-400/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-3">The Slot</h3>
            <p class="text-blue-100/60 leading-relaxed">
                Clean injection logic. Content flows seamlessly into the <code class="text-blue-200 bg-white/5 px-2 py-0.5 rounded">$slot</code> variable for total reusability.
            </p>
        </div>
    </div>

    <div class="group relative p-8 rounded-3xl bg-gradient-to-b from-white/10 to-white/[0.02] border border-white/10 shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/50">
        <div class="absolute inset-0 rounded-3xl bg-emerald-400/5 opacity-0 group-hover:opacity-100 transition-opacity blur-xl"></div>
        
        <div class="relative">
            <div class="w-12 h-12 bg-emerald-400/20 rounded-2xl flex items-center justify-center mb-6 border border-emerald-400/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-3">The Data</h3>
            <p class="text-blue-100/60 leading-relaxed italic">
                Environment: <span class="text-emerald-300 font-mono">{{ app()->environment() }}</span><br>
                PHP Engine: <span class="text-emerald-300 font-mono">{{ phpversion() }}</span>
            </p>
        </div>
    </div>
</div>

        <footer class="mt-20 text-blue-300/50 text-sm italic">
            Prepared by Sir LJ Orcullo &bull; 2026
        </footer>
    </div>
</x-layout>