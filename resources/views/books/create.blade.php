<x-layout title="Add Book | Book Management">
    <style>
        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-mesh {
            background: linear-gradient(-45deg, #020617, #0f172a, #1e3a8a, #020617);
            background-size: 400% 400%;
            animation: gradientFlow 14s ease infinite;
        }

        .glass-card {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .glass-input {
            background: rgba(15, 23, 42, 0.4);
            border: 1px solid rgba(59, 130, 246, 0.2);
            transition: all 0.2s ease-in-out;
        }

        .glass-input:focus {
            background: rgba(15, 23, 42, 0.6);
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        /* Custom scrollbar for textarea */
        .glass-input::-webkit-scrollbar { width: 4px; }
        .glass-input::-webkit-scrollbar-thumb { background: rgba(59, 130, 246, 0.3); border-radius: 10px; }
    </style>

    <div class="min-h-screen animate-mesh py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
        <div class="w-full max-w-4xl">

            <div class="glass-card rounded-[2.5rem] overflow-hidden">
                
                <div class="px-8 pt-10 pb-6 border-b border-white/5 bg-gradient-to-br from-white/5 to-transparent">
                    <div class="flex items-center gap-5">
                        <div class="hidden sm:flex p-4 bg-blue-500/10 rounded-2xl border border-blue-400/20 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-extrabold text-white tracking-tight">Add New Book</h1>
                            <p class="text-blue-400/60 text-xs uppercase tracking-[0.2em] font-bold mt-1">
                                Library Management Catalog
                            </p>
                        </div>
                    </div>
                </div>

                <div class="px-8 py-10">
                    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                        @csrf
                        @php $book = $book ?? null; @endphp

                        @if ($errors->any())
                            <div class="mb-8 p-4 rounded-2xl bg-red-500/10 border border-red-500/20 text-red-300 text-sm animate-pulse">
                                <div class="flex items-center gap-2 mb-2 font-bold uppercase tracking-wider text-xs">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    Please correct the following:
                                </div>
                                <ul class="list-disc list-inside space-y-1 ml-6">
                                    @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                            {{-- Title & Author --}}
                            <div class="md:col-span-6">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Title *</label>
                                <input type="text" name="title" value="{{ old('title', $book?->title) }}" required placeholder="e.g. The Great Gatsby"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm placeholder:text-blue-400/20" />
                            </div>

                            <div class="md:col-span-6">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Author *</label>
                                <input type="text" name="author" value="{{ old('author', $book?->author) }}" required placeholder="e.g. F. Scott Fitzgerald"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm placeholder:text-blue-400/20" />
                            </div>

                            {{-- Description --}}
                            <div class="md:col-span-12">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Description *</label>
                                <textarea name="description" rows="3" required placeholder="Provide a brief summary of the book content..."
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm placeholder:text-blue-400/20 resize-none">{{ old('description', $book?->description) }}</textarea>
                            </div>

                            {{-- Metadata Grid --}}
                            <div class="md:col-span-4">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Genre *</label>
                                <select name="genre" required class="glass-input w-full rounded-xl px-4 py-3 text-blue-100 text-sm focus:bg-slate-900 cursor-pointer">
                                    <option value="" class="bg-slate-900 text-blue-400">Select Genre</option>
                                    @foreach (['Fiction', 'Non-Fiction', 'Sci-Fi', 'Fantasy', 'Mystery', 'Romance', 'Horror', 'Biography', 'History', 'Other'] as $g)
                                        <option value="{{ $g }}" class="bg-slate-900" {{ old('genre', $book?->genre) == $g ? 'selected' : '' }}>{{ $g }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="md:col-span-4">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">ISBN *</label>
                                <input type="text" name="isbn" value="{{ old('isbn', $book?->isbn) }}" required placeholder="978-3-16-..."
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm placeholder:text-blue-400/20" />
                            </div>

                            <div class="md:col-span-4">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Price (₱) *</label>
                                <input type="number" step="0.01" name="price" value="{{ old('price', $book?->price) }}" required placeholder="0.00"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm placeholder:text-blue-400/20" />
                            </div>

                            <div class="md:col-span-3">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest text-center sm:text-left">Year *</label>
                                <input type="number" name="published_year" value="{{ old('published_year', $book?->published_year) }}" required
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm text-center" />
                            </div>

                            <div class="md:col-span-3">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest text-center sm:text-left">Pages *</label>
                                <input type="number" name="pages" value="{{ old('pages', $book?->pages) }}" required
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm text-center" />
                            </div>

                            <div class="md:col-span-3">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Language *</label>
                                <input type="text" name="language" value="{{ old('language', $book?->language) }}" required placeholder="English"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm" />
                            </div>

                            <div class="md:col-span-3">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Publisher *</label>
                                <input type="text" name="publisher" value="{{ old('publisher', $book?->publisher) }}" required placeholder="Penguin"
                                    class="glass-input w-full rounded-xl px-4 py-3 text-blue-50 text-sm" />
                            </div>

                            {{-- Cover Image --}}
                            <div class="md:col-span-12 lg:col-span-12">
                                <label class="block text-[10px] font-bold text-blue-300/50 mb-2 ml-1 uppercase tracking-widest">Cover Artwork</label>
                                <div class="flex items-center gap-6 p-4 glass-input rounded-xl">
                                    <input type="file" name="cover_image" accept="image/*"
                                        class="text-xs text-blue-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-[10px] file:font-bold file:uppercase file:bg-blue-600 file:text-white hover:file:bg-blue-500 transition-all cursor-pointer" />
                                    
                                    @if ($book?->cover_image)
                                        <div class="flex items-center gap-2 border-l border-white/10 pl-6">
                                            <span class="text-[10px] text-blue-400/60 uppercase font-bold">Current:</span>
                                            <img src="{{ asset('storage/' . $book->cover_image) }}" class="h-10 w-10 rounded-lg object-cover ring-2 ring-blue-500/20 shadow-lg" alt="Cover">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Availability --}}
                            <div class="md:col-span-12">
                                <label class="relative flex items-center gap-3 cursor-pointer group w-fit">
                                    <input type="checkbox" name="is_available" id="is_available"
                                        {{ old('is_available', $book?->is_available ?? true) ? 'checked' : '' }}
                                        class="peer h-5 w-5 rounded-md border-blue-500/30 bg-blue-900/50 text-blue-500 focus:ring-0 focus:ring-offset-0 transition-all" />
                                    <span class="text-sm font-medium text-blue-200 peer-checked:text-blue-400 transition-colors">
                                        List this book as available for public viewing
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-6 border-t border-white/5 pt-8">
                            <a href="{{ route('books.index') }}" 
                                class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-white/5 hover:bg-white/10 text-blue-200 text-xs font-bold uppercase tracking-widest transition-all text-center">
                                ← Back to Catalog
                            </a>

                            <button type="submit"
                                class="w-full sm:w-auto px-12 py-3.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white text-xs font-bold uppercase tracking-[0.2em] shadow-xl shadow-blue-500/20 transition-all active:scale-95 hover:shadow-blue-500/40">
                                Save Book Entry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>