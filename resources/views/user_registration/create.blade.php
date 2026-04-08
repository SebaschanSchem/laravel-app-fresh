<x-layout title="User Registration | fresh-laravel-app">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <div class="mb-8">
            <a href="/register" class="text-blue-300 hover:text-white transition-colors text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Users List
            </a>
        </div>

        <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl">
            <form method="POST" action="/register">
                @csrf
                
                <div class="border-b border-white/10 pb-8 mb-8">
                    <h2 class="text-3xl font-black text-white tracking-tight">Create Student Account</h2>
                    <p class="mt-2 text-blue-200/60 text-sm">Please fill in the details below to register a new user in the demonstration database.</p>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-semibold text-blue-100 mb-2">First name</label>
                        <input id="first_name" type="text" name="first_name" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-amber-400 focus:border-transparent outline-hidden transition-all sm:text-sm" 
                            placeholder="John" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-semibold text-blue-100 mb-2">Last name</label>
                        <input id="last_name" type="text" name="last_name" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-amber-400 focus:border-transparent outline-hidden transition-all sm:text-sm" 
                            placeholder="Doe" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="middle_name" class="block text-sm font-semibold text-blue-100 mb-2">Middle name</label>
                        <input id="middle_name" type="text" name="middle_name"
                            class="block w-full rounded-xl bg-white/5 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="nickname" class="block text-sm font-semibold text-blue-100 mb-2">Nickname</label>
                        <input id="nickname" type="text" name="nickname"
                            class="block w-full rounded-xl bg-white/5 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-semibold text-blue-100 mb-2">Email address</label>
                        <input id="email" type="email" name="email" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-amber-400 focus:border-transparent outline-hidden transition-all sm:text-sm" 
                            placeholder="john.doe@example.com" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="age" class="block text-sm font-semibold text-blue-100 mb-2">Age</label>
                        <input id="age" type="number" name="age" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-amber-400 outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="col-span-full">
                        <label for="address" class="block text-sm font-semibold text-blue-100 mb-2">Street address</label>
                        <input id="address" type="text" name="address" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-amber-400 outline-hidden transition-all sm:text-sm" 
                            placeholder="123 Main St, Davao City" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="contact_number" class="block text-sm font-semibold text-blue-100 mb-2">Contact Number</label>
                        <input id="contact_number" type="text" name="contact_number"
                            class="block w-full rounded-xl bg-white/5 border border-white/10 px-4 py-2.5 text-white placeholder:text-white/20 focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-hidden transition-all sm:text-sm" 
                            placeholder="+63 900 000 0000" />
                    </div>
                </div>

                <div class="mt-12 flex items-center justify-end gap-x-4 pt-8 border-t border-white/10">
                    <a href="/register" class="px-6 py-2.5 text-sm font-bold text-white hover:text-red-400 transition-colors">
                        Cancel
                    </a>
                    <button type="submit" 
                        class="bg-amber-400 hover:bg-amber-300 text-amber-950 px-8 py-2.5 rounded-xl font-black text-sm transition-all shadow-lg shadow-amber-400/20 active:scale-95 cursor-pointer">
                        Save User Record
                    </button>
                </div>
            </form>
        </div>
        
        <p class="mt-6 text-center text-xs text-blue-200/30 uppercase tracking-tighter">
            Laravel Validation Demo &bull; Form Method: POST
        </p>
    </div>
</x-layout>