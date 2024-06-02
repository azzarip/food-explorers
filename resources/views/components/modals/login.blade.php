<div class="bg-black/50 fixed left-0 top-0 bottom-0 right-0 z-10 flex items-center justify-center"
    x-data="{login: false, page: 'login', sent: false}" 
    x-show="login" 
    @login.window="login = true; page: 'login'" 
    @register.window="page = 'register'" 
    @sent.window="sent = true"
    x-cloak>
    <div x-show="login" x-transition.scale.origin.right.50 @click.outside="login = false"
    class="bg-white rounded-lg w-full max-w-md fixed z-20">
        <div class="float-right mr-3 mt-3 link" @click="login = false"><x-heroicon-s-x-mark class="inline w-5 h-5 mb-1 mr-1" /></div>
        <x-authenticator />
    </div>
</div>