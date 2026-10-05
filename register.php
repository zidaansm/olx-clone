<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Daftar Akun Baru OLX Clone">
    <title>Daftar - OLX Clone</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#002f34', light: '#00474f', dark: '#001a1d' },
                        sell: { DEFAULT: '#ffce32', hover: '#f5c220' },
                        accent: { DEFAULT: '#3a77ff', hover: '#2560e0', light: '#eef3ff' },
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                        'float': '0 10px 30px -5px rgba(0, 0, 0, 0.08)',
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        @keyframes logo-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }
        .animate-logo-pulse { animation: logo-pulse 2s ease-in-out infinite; }
        body { -webkit-tap-highlight-color: transparent; }
    </style>
</head>

<body class="font-sans bg-[#f7f8f9] text-gray-800 antialiased min-h-screen flex flex-col items-center justify-center relative overflow-hidden">

    <!-- Decorative Background Shapes -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary opacity-[0.03] rounded-full pointer-events-none" aria-hidden="true"></div>
    <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] bg-sell opacity-[0.05] rounded-full pointer-events-none" aria-hidden="true"></div>

    <!-- Header (Simple) -->
    <header class="absolute top-0 inset-x-0 w-full px-4 sm:px-8 py-5 flex items-center justify-between z-10">
        <a href="index.php" class="flex items-center gap-1 text-2xl sm:text-3xl font-extrabold text-primary tracking-tight">
            OLX<span class="inline-block w-2.5 h-2.5 bg-sell rounded-full animate-logo-pulse ml-0.5"></span>
        </a>
        <a href="index.php" class="flex items-center gap-2 text-[14px] font-semibold text-gray-500 hover:text-primary transition-colors">
            <span class="hidden sm:inline">Kembali ke Beranda</span>
            <i data-lucide="x" class="w-5 h-5 sm:hidden"></i>
        </a>
    </header>

    <!-- Register Container -->
    <main class="w-full max-w-[440px] px-4 py-8 z-10 mt-12 sm:mt-8">
        <div class="bg-white rounded-3xl shadow-float p-6 sm:p-10 border border-gray-100">
            
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-sell/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="user-plus" class="w-8 h-8"></i>
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-gray-900 tracking-tight mb-2">Daftar Akun Baru</h1>
                <p class="text-[14px] sm:text-[15px] text-gray-500">Bergabunglah dan mulai berjualan hari ini.</p>
            </div>

            <!-- Register Form -->
            <form action="#" method="POST" class="flex flex-col gap-5">
                
                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Nama Lengkap</label>
                    <div class="relative flex items-center">
                        <i data-lucide="user" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                        <input type="text" id="name" name="name" required placeholder="Contoh: Budi Santoso" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Email</label>
                    <div class="relative flex items-center">
                        <i data-lucide="mail" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                        <input type="email" id="email" name="email" required placeholder="Contoh: budi@email.com" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Password</label>
                    <div class="relative flex items-center">
                        <i data-lucide="lock" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                        <input type="password" id="password" name="password" required placeholder="Minimal 8 karakter" class="w-full pl-11 pr-11 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                        <button type="button" class="absolute right-4 p-1 text-gray-400 hover:text-gray-600 transition-colors toggle-password" data-target="password">
                            <i data-lucide="eye" class="w-5 h-5 eye-icon"></i>
                        </button>
                    </div>
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label for="password_confirm" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Konfirmasi Password</label>
                    <div class="relative flex items-center">
                        <i data-lucide="lock-keyhole" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                        <input type="password" id="password_confirm" name="password_confirm" required placeholder="Ulangi password" class="w-full pl-11 pr-11 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                        <button type="button" class="absolute right-4 p-1 text-gray-400 hover:text-gray-600 transition-colors toggle-password" data-target="password_confirm">
                            <i data-lucide="eye" class="w-5 h-5 eye-icon"></i>
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-4 mt-2 bg-primary text-white font-bold text-[15px] rounded-xl shadow-[0_4px_15px_rgba(0,47,52,0.2)] hover:bg-primary-light active:scale-[0.98] transition-all">
                    Daftar Sekarang
                </button>
            </form>

            <div class="relative flex items-center py-6">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="shrink-0 px-4 text-[12px] text-gray-400 font-medium uppercase tracking-wider">ATAU</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <!-- Social Login -->
            <div class="flex flex-col gap-3">
                <button type="button" class="flex items-center justify-center gap-3 w-full py-3 bg-white border-2 border-gray-200 text-gray-700 font-bold text-[14px] rounded-xl hover:bg-gray-50 active:scale-[0.98] transition-all">
                    <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#EA4335" d="M5.266 9.765A7.077 7.077 0 0112 4.909c1.69 0 3.218.6 4.418 1.582L19.91 3C17.782 1.145 15.055 0 12 0 7.27 0 3.198 2.698 1.24 6.65l4.026 3.115z"/><path fill="#34A853" d="M16.04 18.013c-1.09.703-2.474 1.078-4.04 1.078a7.077 7.077 0 01-6.723-4.823l-4.04 3.067A11.965 11.965 0 0012 24c2.933 0 5.735-1.043 7.834-3l-3.793-2.987z"/><path fill="#4A90E2" d="M19.834 21c2.195-2.048 3.62-5.096 3.62-9 0-.71-.109-1.473-.272-2.182H12v4.637h6.436c-.317 1.559-1.17 2.766-2.395 3.558L19.834 21z"/><path fill="#FBBC05" d="M5.277 14.268A7.12 7.12 0 014.909 12c0-.782.125-1.533.357-2.235L1.24 6.65A11.934 11.934 0 000 12c0 1.92.445 3.73 1.237 5.335l4.04-3.067z"/></svg>
                    Daftar dengan Google
                </button>
            </div>

            <!-- Login Link -->
            <p class="text-center text-[13px] text-gray-500 mt-8">
                Sudah punya akun? 
                <a href="login.php" class="font-bold text-primary hover:underline">Masuk</a>
            </p>

        </div>
        
        <div class="text-center mt-8 pb-8">
            <p class="text-[12px] text-gray-400">
                Dengan masuk atau mendaftar, Anda menyetujui<br>
                <a href="#" class="underline hover:text-gray-600">Syarat Ketentuan</a> dan <a href="#" class="underline hover:text-gray-600">Kebijakan Privasi</a> kami.
            </p>
        </div>
    </main>

    <!-- ========================================
         SCRIPTS
         ======================================== -->
    <script>
        lucide.createIcons();

        // Toggle Password Visibility for multiple inputs
        const toggleBtns = document.querySelectorAll('.toggle-password');
        
        toggleBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-target');
                const passInput = document.getElementById(targetId);
                const eyeIcon = btn.querySelector('.eye-icon');

                const type = passInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passInput.setAttribute('type', type);
                
                if(type === 'text') {
                    eyeIcon.setAttribute('data-lucide', 'eye-off');
                } else {
                    eyeIcon.setAttribute('data-lucide', 'eye');
                }
                lucide.createIcons();
            });
        });
    </script>
</body>
</html>
