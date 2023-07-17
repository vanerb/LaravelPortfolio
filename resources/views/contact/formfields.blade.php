
<div class="space-y-4">
    <label class="flex flex-col" for="name">
        <span class="font-serif text-slate-600 dark:text-slate-400">Nombre</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="name" id="name"> 
        <br>
        @error('name')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
    </label>

    <label class="flex flex-col" for="email">
        <span class="font-serif text-slate-600 dark:text-slate-400">Email</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="email" id="email" >
        <br>
        @error('email')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
    </label>
   

    <label class="flex flex-col" for="message">
        <span class="font-serif text-slate-600 dark:text-slate-400">Mensaje</span>
        <textarea  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        @error('body')
        <small class="font-bold text-red-500/80" style="color: red">{{ $message }}</small>
    @enderror
    </label>

</div>