<div> <!-- ئەمە تاگی سەرەکییە کە هەموو شتەکان کۆدەکاتەوە -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-slate-100 to-slate-200">
        <!-- Header Section -->
        <div class="mb-8 text-center animate-fade-in-down">
            <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight mb-2">
                خۆشناو <span class="text-blue-600">سێرڤیس سێنته‌ر</span>
            </h1>
            <p class="text-slate-500 font-medium text-lg">بەخێربێیت بۆ سیستەمی بەڕێوەبردن</p>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-white shadow-[0_20px_50px_rgba(8,_112,_184,_0.1)] overflow-hidden sm:rounded-2xl border border-slate-100">

            <form wire:submit="login" dir="rtl">
                <!-- Email Address -->
                <div>
                    <label for="email" class="block font-bold text-sm text-slate-700 mb-2">ئیمەیڵ</label>
                    <input wire:model="form.email" id="email" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition duration-200 py-3" type="email" name="email" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-6">
                    <label for="password" class="block font-bold text-sm text-slate-700 mb-2">پاسۆرد</label>
                    <input wire:model="form.password" id="password" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition duration-200 py-3" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-6 flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded-md border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ms-2 text-sm text-slate-600 font-medium">بمبێرەوە یاد</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:text-blue-800 font-semibold transition duration-200" href="{{ route('password.request') }}" wire:navigate>
                            پاسۆردت بیرچووە؟
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-end mt-8">
                    <button class="w-full inline-flex justify-center items-center px-6 py-3 bg-blue-600 border border-transparent rounded-xl font-bold text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-blue-200">
                        چوونە ژوورەوە
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-8 text-slate-400 text-xs font-medium uppercase tracking-widest">
            &copy; {{ date('Y') }} Khoshnaw Group - All Rights Reserved
        </div>
    </div>

    <style>
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-down { animation: fade-in-down 0.8s ease-out; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    </style>
</div> <!-- کۆتایی تاگە سەرەکییەکە -->
