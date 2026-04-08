<x-layout title="Users List | fresh-laravel-app">
    <div class="max-w-6xl mx-auto mt-12 px-4 pb-20">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-black text-white tracking-tight">User Management</h1>
                <p class="text-blue-200/60 text-sm mt-1">Reviewing active student records in the database.</p>
            </div>

            <a href="/register/create"
               class="flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-amber-950 px-5 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg shadow-amber-400/20 active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Create New User
            </a>
        </div>

        <div class="relative overflow-hidden bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl shadow-2xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/5 text-blue-200/70 text-xs uppercase tracking-widest font-bold">
                            <th class="px-6 py-4">User Details</th>
                            <th class="px-6 py-4">Contact</th>
                            <th class="px-6 py-4">Demographics</th>
                            <th class="px-6 py-4">Address</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-white/10">
                        @foreach ($users as $user)
                            <tr class="group hover:bg-white/[0.03] transition-colors">
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500/20 to-indigo-500/20 border border-white/10 flex items-center justify-center text-blue-300 font-bold">
                                            {{ substr($user->first_name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="text-white font-semibold">{{ $user->first_name }} {{ $user->last_name }}</div>
                                            <div class="text-blue-100/40 text-xs font-mono">ID: #{{ str_pad($user->id, 4, '0', STR_PAD_LEFT) }}</div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-5 text-blue-100/70 text-sm">
                                    {{ $user->email }}
                                </td>

                                <td class="px-6 py-5">
                                    <span class="bg-blue-400/10 text-blue-300 px-2.5 py-0.5 rounded-full text-xs border border-blue-400/20">
                                        {{ $user->age }} Years Old
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-blue-100/50 text-sm">
                                    {{ $user->address }}
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <div class="flex justify-end items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <a href="/register/show/{{ $user->id }}"
                                           class="p-2 text-blue-300 hover:bg-blue-400/20 rounded-lg transition-colors tooltip" title="View Details">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>

                                        <form action="/register/delete/{{ $user->id }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Delete this record permanently?')"
                                                    class="p-2 text-red-400 hover:bg-red-400/20 rounded-lg transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @if($users->isEmpty())
                <div class="py-20 text-center">
                    <p class="text-blue-200/40 italic font-mono">No student records found in database.</p>
                </div>
            @endif
        </div>
    </div>
</x-layout>