
<div class="space-y-4">
    <label class="flex flex-col" for="title">
        <span class="font-serif text-slate-600 dark:text-slate-400">Titulo</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="title" id="title" value="{{ old('title', $post->title)  }}">
        <br>
        @error('title')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
    </label>
    <br>
    
    <label class="flex flex-col" for="body">
        <span class="font-serif text-slate-600 dark:text-slate-400">Contenido</span>
        <textarea  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="body" id="body" cols="30" rows="10">{{ old('body', $post->body)  }}</textarea>
        <br>
        @error('body')
        <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
    @enderror
    </label>
    <br>

</div>
