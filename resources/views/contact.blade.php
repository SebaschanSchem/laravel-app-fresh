<x-layout title="Contact | fresh-laravel-app">
    <div class="flex flex-col items-center justify-center min-h-[calc(100vh-100px)] px-6">
        
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-white mb-2">Get in Touch</h1>
            <p class="text-blue-200/60">Have questions about the demo? Reach out below.</p>
        </div>

        <div class="w-full max-w-md">
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-amber-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                
                <div class="relative bg-white/5 border border-white/10 backdrop-blur-xl p-8 rounded-3xl shadow-2xl">
                    <div class="flex flex-col items-center text-center">
                        
                        <div class="w-24 h-24 bg-gradient-to-tr from-amber-400 to-orange-500 rounded-full p-1 mb-6">
                            <div class="w-full h-full bg-[#1c3056] rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>

                        <h2 class="text-2xl font-bold text-white">LJ Orcullo</h2>
                        <p class="text-amber-300 font-mono text-sm mb-6 underline decoration-amber-500/30">Web Dev Instructor</p>

                        <div class="w-full space-y-3">
                            <a href="https://github.com/lj-torbs" target="_blank" class="flex items-center justify-center gap-3 w-full py-3 px-4 bg-white/10 hover:bg-white/20 border border-white/10 rounded-xl text-white transition-all group/link">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.416-4.041-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                <span>Follow on GitHub</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>

                            <a href="mailto:lj.orcullo@whatever.com" class="flex items-center justify-center gap-3 w-full py-3 px-4 bg-transparent hover:bg-white/5 border border-white/5 rounded-xl text-blue-200/80 hover:text-white transition-all text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Send an Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-xs text-blue-100/40 uppercase tracking-widest font-semibold">
                    Blade Component: <code class="text-amber-500/60 lowercase font-normal">resources/views/contact.blade.php</code>
                </p>
            </div>
        </div>
    </div>
</x-layout>