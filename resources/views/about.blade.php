<x-layout title="About | fresh-laravel-app">
    <div class="flex flex-col items-center py-20 px-6">
        
        <div class="max-w-3xl text-center mb-16">
            <h1 class="text-6xl font-black text-white mb-6 tracking-tight">
                About the <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-orange-500">Project</span>
            </h1>
            <p class="text-xl text-blue-100/70 leading-relaxed">
                This application was built specifically for classroom demonstrations to demystify the core concepts of the Laravel framework.
            </p>
        </div>

        <div class="max-w-4xl w-full">
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 md:p-12 backdrop-blur-md shadow-2xl">
                
                <div class="space-y-12">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="w-14 h-14 shrink-0 bg-amber-400/20 rounded-2xl flex items-center justify-center border border-amber-400/30 text-amber-300 font-bold text-xl">
                            01
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white mb-3">Educational Goals</h2>
                            <p class="text-blue-100/60 leading-relaxed">
                                The primary goal is to show how <strong>Blade Components</strong> and <strong>Tailwind CSS</strong> work together to create high-end user interfaces with minimal custom CSS. We focus on clean code and the "Laravel Way" of doing things.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="w-14 h-14 shrink-0 bg-blue-400/20 rounded-2xl flex items-center justify-center border border-blue-400/30 text-blue-300 font-bold text-xl">
                            02
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white mb-3">Tech Stack</h2>
                            <ul class="grid grid-cols-2 gap-3 mt-4">
                                <li class="flex items-center text-sm text-blue-100/80">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-2"></span> Laravel 11/12
                                </li>
                                <li class="flex items-center text-sm text-blue-100/80">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-2"></span> Tailwind CSS v4
                                </li>
                                <li class="flex items-center text-sm text-blue-100/80">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-2"></span> Blade Templating
                                </li>
                                <li class="flex items-center text-sm text-blue-100/80">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-2"></span> SQLite / MySQL
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-8 border-t border-white/10 mt-8">
                        <div class="bg-gradient-to-r from-blue-600/20 to-indigo-600/20 p-6 rounded-2xl border border-blue-500/30">
                            <h3 class="text-white font-semibold mb-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Instructor's Note
                            </h3>
                            <p class="text-sm text-blue-100/70 italic">
                                "Remember to check the web routes file to see how this page is being returned. Every URL click is a journey through the Laravel lifecycle!"
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <a href="/" class="mt-12 text-blue-300 hover:text-white transition-colors flex items-center gap-2 font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Home
        </a>
    </div>
</x-layout>