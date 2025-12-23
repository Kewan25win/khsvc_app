<!-- Wrap everything in a single container to avoid Livewire rendering issues -->
<div class="main-login-container">
    <!-- Include Tailwind CDN and FontAwesome for quick styling in this view -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;400;700;900&display=swap');

        .main-login-container {
            font-family: 'Vazirmatn', sans-serif !important;
            background: #f1f5f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            direction: ltr;

        }

        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(15, 23, 42, 0.04);
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(2, 6, 23, 0.06);
        }

        /* Thinner, elegant inputs */
        .input-plain {
            width: 100%;
            padding: 0.5rem 0.9rem;
            background: #fff;
            border: 1px solid #e6e9ef;
            border-radius: 10px;
            box-shadow: 0 1px 2px rgba(2, 6, 23, 0.03);
            font-size: 0.95rem;
            color: #0f172a;
        }

        .input-plain::placeholder {
            color: #94a3b8;
        }

        .input-plain:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.06);
            border-color: rgba(59, 130, 246, 0.8);
        }

        .icon-input {
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: .9rem;
            color: #94a3b8
        }
    </style>

    <div class="w-full max-w-[420px] p-4">
        <!-- Logo and header -->
        <div class="text-center mb-8">
            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-blue-600 rounded-3xl shadow-lg shadow-blue-200 mb-4 transform rotate-3">
                <i class="fas fa-screwdriver-wrench text-white text-3xl"></i>
            </div>
            <h1 class="text-3xl font-black text-slate-800 tracking-tight">
                Khushnaw <span class="text-blue-600">Service Center</span>
            </h1>
            <p class="text-slate-500 mt-2">Welcome to the admin dashboard</p>
        </div>

        <!-- کارتی لۆگین -->
        <div class="glass-card p-8 md:p-10 bg-white">
            <form wire:submit="login" class="space-y-6">

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2 ml-2">Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute icon-input"></i>
                        <input wire:model="form.email" type="email" placeholder="example@gmail.com" aria-label="email"
                            autocomplete="email" class="input-plain pl-10" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2 ml-2">Password</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute icon-input"></i>
                        <input wire:model="form.password" type="password" placeholder="••••••••" aria-label="password"
                            autocomplete="current-password" class="input-plain pl-10" />
                    </div>
                </div>

                <!-- Sign in button -->
                <button type="submit"
                    class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow transition-all active:scale-95 flex items-center justify-center gap-3">
                    Sign in
                    <i class="fas fa-arrow-right"></i>
                </button>

                <div class="text-center mt-4">
                    <a href="#" class="text-sm font-bold text-blue-600 hover:underline">Forgot your password?</a>
                </div>
            </form>
        </div>

        <p class="text-center mt-8 text-slate-400 text-sm font-medium">
            © 2025 All rights reserved to <span class="text-slate-600">Khushnaw Group</span>
        </p>
    </div>
</div>
