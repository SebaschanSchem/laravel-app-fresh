<x-layout title="Edit User | {{ $user->first_name }}">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <div class="mb-8 flex justify-between items-center">
            <a href="/register" class="text-blue-300 hover:text-white transition-colors text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Cancel and Go Back
            </a>
            <span class="text-xs font-mono text-blue-200/30 tracking-widest uppercase">Editing Record #{{ $user->id }}</span>
        </div>

        <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>

            <form method="POST" action="/register/update/{{ $user->id }}">
                @csrf
                @method('PATCH')
                
                <div class="border-b border-white/10 pb-8 mb-8">
                    <h2 class="text-3xl font-black text-white tracking-tight">Update Information</h2>
                    <p class="mt-2 text-blue-200/60 text-sm">Modifying details for <span class="text-blue-300 font-semibold">{{ $user->first_name }} {{ $user->last_name }}</span>.</p>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-semibold text-blue-100 mb-2">First name</label>
                        <input id="first_name" type="text" name="first_name" value="{{ $user->first_name }}" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-semibold text-blue-100 mb-2">Last name</label>
                        <input id="last_name" type="text" name="last_name" value="{{ $user->last_name }}" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="middle_name" class="block text-sm font-semibold text-blue-100 mb-2">Middle name</label>
                        <input id="middle_name" type="text" name="middle_name" value="{{ $user->middle_name }}"
                            class="block w-full rounded-xl bg-white/5 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="nickname" class="block text-sm font-semibold text-blue-100 mb-2">Nickname</label>
                        <input id="nickname" type="text" name="nickname" value="{{ $user->nickname }}"
                            class="block w-full rounded-xl bg-white/5 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-semibold text-blue-100 mb-2">Email address</label>
                        <input id="email" type="email" name="email" value="{{ $user->email }}" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="age" class="block text-sm font-semibold text-blue-100 mb-2">Age</label>
                        <input id="age" type="number" name="age" value="{{ $user->age }}" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="col-span-full">
                        <label for="address" class="block text-sm font-semibold text-blue-100 mb-2">Street address</label>
                        <input id="address" type="text" name="address" value="{{ $user->address }}" required
                            class="block w-full rounded-xl bg-white/10 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 outline-hidden transition-all sm:text-sm" />
                    </div>

                    <div class="sm:col-span-3">
                        <label for="contact_number" class="block text-sm font-semibold text-blue-100 mb-2">Contact Number</label>
                        <input id="contact_number" type="text" name="contact_number" value="{{ $user->contact_number }}"
                            class="block w-full rounded-xl bg-white/5 border border-white/10 px-4 py-2.5 text-white focus:ring-2 focus:ring-blue-400 outline-hidden transition-all sm:text-sm" />
                    </div>
                </div>

                <div class="mt-12 flex items-center justify-end gap-x-4 pt-8 border-t border-white/10">
                    <a href="/register" class="px-6 py-2.5 text-sm font-bold text-red-400 hover:bg-red-400/10 rounded-xl transition-all">
                        Discard Changes
                    </a>
                    <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-400 text-white px-8 py-2.5 rounded-xl font-black text-sm transition-all shadow-lg shadow-blue-500/20 active:scale-95 cursor-pointer">
                        Update Student Record
                    </button>
                </div>
            </form>
        </div>
        
        <div class="mt-8 flex justify-center gap-4 text-[10px] font-mono text-blue-200/20 uppercase tracking-[0.2em]">
            <span>Method: POST</span>
            <span>Spoofing: PATCH</span>
            <span>Security: CSRF Active</span>
        </div>
    </div>
</x-layout>