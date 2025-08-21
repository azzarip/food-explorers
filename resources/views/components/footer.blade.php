@props(['flag' => false, 'email' => true])
<footer>
    <div class="px-2 py-2 bg-black font-lato">
        @if($email)
        <div class="flex flex-col mb-3 text-center text-white gap-y-3 md:flex-row justify-evenly">
            <a href="mailto:marco.azzari@foodexplorers.ch"> <x-heroicon-s-envelope class="inline w-5 h-5"/> marco.azzari@foodexplorers.ch</a>
        </div>
        @endif

        @if($flag)
        <p class="text-center text-slate-500">Please report to me any bug of this website.</p>
        @endif
        <div class="text-center text-white"> &copy; 2022-{{ date('Y') }} Prem Inh Azzari | Knüslistrasse 8, 8004 Zürich <span class="hidden md:inline">|</span><br class="md:hidden"> <a href="/privacy-policy" class="text-blue-500 underline">Privacy Policy</a> | <a href="/cookie-policy" class="text-blue-500 underline">Cookie Policy</a>
        </div>
    </div>
</footer>
