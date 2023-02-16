<div class="h-full font-mono text-sm {{ $padding ? 'py-8 pl-4 sm:pl-6 lg:pl-8' : '' }}" id="code">
    <textarea
        name="code" class="dark:bg-zinc-900 text-gray-900 dark:text-white w-full h-full resize-none outline-none"
        placeholder="<?php&#10;&#10;echo 'Share your snippet here!';">{{ optional($paste ?? null)->code }}</textarea>
</div>
