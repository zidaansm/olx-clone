<?php
session_start();
require_once 'config.php';

// Jika user sudah login, langsung arahkan ke beranda
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$error = '';
$success = '';

// Menangkap pesan sukses jika diarahkan dari register.php
if (isset($_GET['registered']) && $_GET['registered'] == 1) {
    $success = "Pendaftaran berhasil! Silakan masuk dengan akun baru Anda.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = "Email dan password wajib diisi.";
    } else {
        try {
            // Mencari user berdasarkan email
            $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE email = :email LIMIT 1");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch();

            // Memverifikasi kecocokan password hash
            if ($user && password_verify($password, $user['password'])) {
                // Set sesi user
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];

                // Redirect ke beranda
                header("Location: index.php");
                exit;
            } else {
                $error = "Email atau password salah.";
            }
        } catch (PDOException $e) {
            $error = "Terjadi kesalahan sistem. Silakan coba lagi nanti.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Masuk ke Akun OLX Clone">
    <title>Masuk - OLX Clone</title>

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

<body class="font-sans bg-[#f7f8f9] text-gray-800 antialiased overflow-x-hidden min-h-screen flex flex-col relative">

    <!-- Header (Simple) -->
    <header class="bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm z-50 sticky top-0">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 sm:h-20">
            <a href="index.php" class="flex items-center gap-1 text-2xl sm:text-3xl font-extrabold text-primary tracking-tight">
                OLX<span class="inline-block w-2.5 h-2.5 bg-sell rounded-full animate-logo-pulse ml-0.5"></span>
            </a>
            <a href="index.php" class="flex items-center gap-2 text-[14px] font-semibold text-gray-500 hover:text-primary transition-colors">
                <span class="hidden sm:inline">Kembali ke Beranda</span>
                <i data-lucide="x" class="w-5 h-5 sm:hidden"></i>
            </a>
        </div>
    </header>

    <!-- Login Container -->
    <main class="flex-1 flex flex-col items-center justify-center w-full px-4 py-12 relative overflow-hidden">
        <!-- Decorative Background Shapes -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary opacity-[0.03] rounded-full pointer-events-none" aria-hidden="true"></div>
        <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] bg-sell opacity-[0.05] rounded-full pointer-events-none" aria-hidden="true"></div>

        <div class="w-full max-w-[440px] bg-white rounded-3xl shadow-float p-6 sm:p-10 border border-gray-100 z-10">
            
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-primary-light/5 text-primary rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="user" class="w-8 h-8"></i>
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-gray-900 tracking-tight mb-2">Selamat Datang!</h1>
                <p class="text-[14px] sm:text-[15px] text-gray-500">Masuk untuk mengelola iklan dan chat dengan pembeli.</p>
            </div>

            <!-- Tampilkan Sukses Jika Ada -->
            <?php if (!empty($success)): ?>
                <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-100 flex items-start gap-3 text-green-700">
                    <i data-lucide="check-circle" class="w-5 h-5 shrink-0 mt-0.5"></i>
                    <p class="text-[13px] font-medium leading-relaxed"><?= htmlspecialchars($success) ?></p>
                </div>
            <?php endif; ?>

            <!-- Tampilkan Error Jika Ada -->
            <?php if (!empty($error)): ?>
                <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-100 flex items-start gap-3 text-red-600">
                    <i data-lucide="alert-circle" class="w-5 h-5 shrink-0 mt-0.5"></i>
                    <p class="text-[13px] font-medium leading-relaxed"><?= htmlspecialchars($error) ?></p>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="" method="POST" class="flex flex-col gap-5">
                
                <!-- Email -->
                <div>
                    <label for="email" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Email</label>
                    <div class="relative flex items-center">
                        <i data-lucide="mail" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required placeholder="Contoh: budi@email.com" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-1.5 ml-1 mr-1">
                        <label for="password" class="block text-[13px] font-bold text-gray-700">Password</label>
                        <a href="#" class="text-[12px] font-semibold text-accent hover:underline">Lupa Password?</a>
                    </div>
                    <div class="relative flex items-center">
                        <i data-lucide="lock" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                        <input type="password" id="password" name="password" required placeholder="Masukkan password Anda" class="w-full pl-11 pr-11 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                        <button type="button" class="absolute right-4 p-1 text-gray-400 hover:text-gray-600 transition-colors" id="toggle-password">
                            <i data-lucide="eye" class="w-5 h-5" id="eye-icon"></i>
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-4 mt-2 bg-primary text-white font-bold text-[15px] rounded-xl shadow-[0_4px_15px_rgba(0,47,52,0.2)] hover:bg-primary-light active:scale-[0.98] transition-all">
                    Masuk Sekarang
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
                    Lanjutkan dengan Google
                </button>
            </div>

            <!-- Register Link -->
            <p class="text-center text-[13px] text-gray-500 mt-8">
                Belum punya akun? 
                <a href="register.php" class="font-bold text-primary hover:underline">Daftar Sekarang</a>
            </p>
        </div>
        
        <div class="text-center mt-6 z-10 pb-4">
            <p class="text-[12px] text-gray-400">
                Dengan masuk atau mendaftar, Anda menyetujui<br>
                <a href="#" class="underline hover:text-gray-600">Syarat Ketentuan</a> dan <a href="#" class="underline hover:text-gray-600">Kebijakan Privasi</a> kami.
            </p>
        </div>
    </main>

    <!-- ========================================
         FOOTER
         ======================================== -->
    <footer class="bg-gray-900 text-gray-400 mt-auto" id="footer">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:pt-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12 pb-12 border-b border-white/10">
                <div class="col-span-2 md:col-span-4 lg:col-span-1">
                    <div class="text-2xl font-black text-white flex items-center gap-1 mb-5">
                        OLX<span class="inline-block w-2.5 h-2.5 bg-sell rounded-full"></span>
                    </div>
                    <p class="text-[14px] text-gray-500 leading-relaxed mb-6">
                        Platform jual beli online terbesar dan terpercaya di Indonesia. Cara mudah menemukan barang impian.
                    </p>
                </div>
                <div class="col-span-1">
                    <h3 class="text-[13px] font-bold text-white mb-5">KATEGORI</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Mobil Bekas</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Motor Bekas</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Properti</a></li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <h3 class="text-[13px] font-bold text-white mb-5">TENTANG OLX</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-1">
                    <h3 class="text-[13px] font-bold text-white mb-5">BANTUAN</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Tips Keamanan</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            <div class="py-6 text-center sm:text-left text-[13px] text-gray-500">
                &copy; 2026 OLX Clone. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- ========================================
         SCRIPTS
         ======================================== -->
    <script>
        lucide.createIcons();

        // Toggle Password Visibility
        const toggleBtn = document.getElementById('toggle-password');
        const passInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        toggleBtn.addEventListener('click', () => {
            const type = passInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passInput.setAttribute('type', type);
            
            // Update icon
            if(type === 'text') {
                eyeIcon.setAttribute('data-lucide', 'eye-off');
            } else {
                eyeIcon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        });
    </script>
</body>
</html>
