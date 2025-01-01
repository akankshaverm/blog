<div class="flex flex-1 flex-col justify-center items-center h-[85vh] bg-slate-100">
    <div class="w-4/12 border p-5 rounded-lg shadow-lg bg-white">
        <div class="flex  ">
            <h2 class=" text-3xl font-semibold mb-3">Login Here!</h2>
        </div>

        <div class=" p-5 rounded-lg ">
            <a href="{{('auth/google')}}" class="flex items-center mb-4 justify-center w-full py-2 px-4 border bg-blue-300 font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition ease-in-out duration-150">
                <svg class="w-8 h-8 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path fill="#EA4335" d="M24 9.5c3.15 0 5.3 1.37 6.47 2.52l4.73-4.75C32.95 4.75 29 3 24 3 14.64 3 7.25 9.84 7.25 19.5S14.64 36 24 36c5.35 0 9.2-1.86 12-5.25l-4.9-3.75c-2.25 2.1-5.1 3.25-7.1 3.25-4.75 0-8.5-3.7-8.5-8.75S19.25 9.5 24 9.5z" />
                    <path fill="#34A853" d="M7.48 12.74l4.9 3.74c1.2-2.25 3.15-3.8 5.35-4.5-1.35-2.1-3.85-4.25-7.05-4.25C8.5 7.75 7.25 9.85 7.25 12.75c0 1.05.15 2 .4 2.85-.15-.75-.15-1.55-.15-2.35 0-1.85.9-3.55 2.05-4.85z" />
                    <path fill="#FBBC05" d="M9.05 28.25c-.9-1.7-1.5-3.65-1.5-5.65s.65-3.95 1.5-5.65l-4.9-3.75C2.5 17.05 2 19.25 2 21.75s.5 4.75 1.55 7.25l4.75-3.75c-.4-.55-.75-1.25-1.05-2z" />
                    <path fill="#4285F4" d="M37 24c0-.85-.1-1.75-.25-2.75H24v5.5h7.5c-.5 2-2.25 3.5-4.5 3.5-2.15 0-4.15-1.65-4.65-3.5H12v4.75C16.5 36 19.5 36 24 36c6.75 0 11.25-4.25 11.25-9.5 0-.5-.05-1-.05-1.5h2.55z" />
                </svg>
                Login with Google
            </a>


            <form wire:submit="login">

                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" wire:model="email" class=" border w-full px-3 py-2 rounded">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" wire:model="password" class=" border w-full px-3 py-2 rounded">
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                </div>
                <div class=" mb-3 flex justify-end">
                    <input type="submit" class=" bg-teal-600 text-white px-3 py-2 rounded-lg self-end" value="Login Here">

                </div>
            </form>

        </div>

        @session('error')
        <p class=" text-red-500 font-semibold text-xl">{{session('error')}}</p>
        @endsession
    </div>

</div>