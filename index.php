<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="OLX Clone - Jual beli online mudah dan cepat. Temukan barang bekas dan baru dengan harga terbaik.">
    <title>OLX Clone — Jual Beli Online Mudah & Cepat</title>

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
        @keyframes float-up {
            0%   { transform: translateY(0) scale(1); opacity: 0; }
            10%  { opacity: .5; }
            90%  { opacity: .5; }
            100% { transform: translateY(-120px) scale(1.2); opacity: 0; }
        }
        @keyframes pulse-glow {
            0%, 100% { opacity: 1; }
            50% { opacity: .4; }
        }

        .animate-logo-pulse { animation: logo-pulse 2s ease-in-out infinite; }
        .animate-float-up   { animation: float-up 15s linear infinite; }
        .animate-pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }

        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Line clamp fallback */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Smooth scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 999px; }
        ::-webkit-scrollbar-thumb:hover { background: #9ca3af; }

        body {
            -webkit-tap-highlight-color: transparent;
        }
    </style>
</head>

<body class="font-sans bg-[#f7f8f9] text-gray-800 antialiased overflow-x-hidden min-h-screen flex flex-col">

    <!-- ========================================
         HEADER
         ======================================== -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm" id="header">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4 h-16 sm:h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-1 text-2xl sm:text-3xl font-extrabold text-primary shrink-0 tracking-tight" id="logo">
                OLX<span class="inline-block w-2.5 h-2.5 bg-sell rounded-full animate-logo-pulse ml-0.5"></span>
            </a>

            <!-- Search (Hidden on small mobile, visible on sm and up) -->
            <form class="hidden sm:flex flex-1 max-w-2xl items-center bg-gray-50 border-2 border-gray-200 rounded-full pl-5 pr-1.5 h-12 focus-within:border-primary focus-within:bg-white transition-all duration-200" id="search-form" action="/search" method="GET">
                <i data-lucide="search" class="w-5 h-5 text-gray-400 shrink-0"></i>
                <input type="text" class="flex-1 h-full bg-transparent text-[15px] outline-none placeholder:text-gray-400 min-w-0 px-3" id="search-input" name="q" placeholder="Cari mobil, HP, laptop, dan lainnya..." autocomplete="off">
                <button type="submit" class="flex items-center justify-center w-9 h-9 rounded-full bg-primary text-white hover:bg-primary-light active:scale-95 transition-all duration-150 shrink-0" aria-label="Cari">
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
            </form>

            <!-- Nav Actions -->
            <nav class="flex items-center gap-2 sm:gap-4 shrink-0" id="nav-actions">
                <!-- Mobile Search Icon -->
                <button class="sm:hidden p-2 text-gray-600 hover:text-primary transition-colors" aria-label="Cari">
                    <i data-lucide="search" class="w-6 h-6"></i>
                </button>
                
                <a href="/chat" class="hidden lg:flex items-center gap-2 px-3 py-2 text-[14px] font-semibold text-gray-700 hover:text-primary transition-colors" id="nav-chat">
                    <i data-lucide="message-circle" class="w-5 h-5"></i> Chat
                </a>
                <a href="/login" class="flex items-center gap-2 px-4 py-2 text-[14px] font-semibold text-primary hover:bg-gray-50 rounded-full transition-colors whitespace-nowrap" id="nav-login">
                    <span class="hidden xs:inline underline decoration-2 underline-offset-4 decoration-sell">Masuk / Daftar</span>
                    <i data-lucide="user" class="w-6 h-6 xs:hidden text-gray-600"></i>
                </a>
                <a href="/post-ad" class="hidden sm:flex items-center gap-2 px-6 py-3 text-[15px] font-bold text-primary bg-sell rounded-full hover:bg-sell-hover hover:shadow-float active:scale-[0.98] transition-all duration-200 whitespace-nowrap" id="btn-sell">
                    <i data-lucide="plus" class="w-5 h-5"></i>
                    <span>JUAL</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- ========================================
         HERO
         ======================================== -->
    <section class="relative bg-gradient-to-br from-[#002f34] via-[#00474f] to-[#005a60] overflow-hidden" id="hero">
        <!-- Floating particles -->
        <div class="absolute inset-0 pointer-events-none opacity-40" aria-hidden="true">
            <span class="absolute w-1.5 h-1.5 bg-white/20 rounded-full animate-float-up" style="left:15%;top:30%;animation-duration:12s"></span>
            <span class="absolute w-2 h-2 bg-white/10 rounded-full animate-float-up" style="left:35%;top:70%;animation-delay:2s;animation-duration:18s"></span>
            <span class="absolute w-1.5 h-1.5 bg-white/15 rounded-full animate-float-up" style="left:65%;top:40%;animation-delay:4s;animation-duration:14s"></span>
            <span class="absolute w-2 h-2 bg-white/10 rounded-full animate-float-up" style="left:85%;top:60%;animation-delay:1s;animation-duration:20s"></span>
        </div>

        <div class="relative z-10 text-center max-w-4xl mx-auto px-4 sm:px-6 py-12 sm:py-20 lg:py-24">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 border border-white/20 rounded-full text-[12px] sm:text-sm font-medium text-white/90 mb-6 sm:mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse-glow shadow-[0_0_8px_rgba(74,222,128,0.6)]"></span>
                100.000+ iklan aktif hari ini
            </div>

            <h1 class="text-3xl xs:text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-[1.15] tracking-tight mb-5 sm:mb-6">
                Jual Beli <span class="text-sell">Lebih Mudah</span><br>dan Cepat
            </h1>

            <p class="text-[15px] sm:text-lg text-white/80 mb-8 sm:mb-12 leading-relaxed max-w-2xl mx-auto px-2">
                Temukan jutaan barang baru & bekas dengan harga terbaik.
                Mulai dari mobil, properti, hingga elektronik.
            </p>

            <!-- Hero Search -->
            <form class="flex flex-col sm:flex-row items-stretch sm:items-center bg-white rounded-2xl p-2 max-w-[720px] mx-auto shadow-float" id="hero-search-form" action="/search" method="GET">
                <div class="flex items-center flex-1 min-w-0 px-4">
                    <i data-lucide="search" class="w-5 h-5 text-gray-400 shrink-0 mr-3"></i>
                    <input type="text" class="flex-1 py-4 text-[15px] sm:text-base text-gray-800 bg-transparent outline-none placeholder:text-gray-400 min-w-0" id="hero-search-input" name="q" placeholder="Cari mobil, HP, atau rumah...">
                </div>
                <div class="h-px sm:h-10 sm:w-px bg-gray-200 shrink-0 my-2 sm:my-0 mx-4 sm:mx-0"></div>
                <button type="button" class="flex items-center justify-between sm:justify-center gap-2 px-4 py-3 sm:py-0 sm:w-[180px] text-[14px] text-gray-600 hover:text-primary transition-colors shrink-0">
                    <div class="flex items-center gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                        <span class="font-medium truncate">Seluruh Indonesia</span>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 opacity-50"></i>
                </button>
                <button type="submit" class="mt-2 sm:mt-0 flex items-center justify-center gap-2 px-8 py-4 text-[15px] font-bold text-primary bg-sell rounded-xl hover:bg-sell-hover active:scale-[0.98] transition-all duration-200 whitespace-nowrap shrink-0">
                    Cari
                </button>
            </form>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-4 sm:gap-8 max-w-2xl mx-auto mt-12 sm:mt-16">
                <div class="text-center">
                    <div class="text-2xl sm:text-4xl font-black text-white tracking-tight hero-stat-value">2.5Jt+</div>
                    <div class="text-[11px] sm:text-[13px] text-white/60 mt-1 font-semibold uppercase tracking-wider">Iklan Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl sm:text-4xl font-black text-white tracking-tight hero-stat-value">500rb+</div>
                    <div class="text-[11px] sm:text-[13px] text-white/60 mt-1 font-semibold uppercase tracking-wider">Pengguna</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl sm:text-4xl font-black text-white tracking-tight hero-stat-value">50+</div>
                    <div class="text-[11px] sm:text-[13px] text-white/60 mt-1 font-semibold uppercase tracking-wider">Kota</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         CATEGORIES 
         ======================================== -->
    <section class="py-12 sm:py-16 lg:py-20" id="categories">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8 sm:mb-10 reveal">
                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight">Kategori Utama</h2>
                <a href="/categories" class="group flex items-center gap-1.5 text-[14px] sm:text-[15px] font-semibold text-primary hover:text-accent transition-all">
                    Lihat Semua
                    <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>

            <div class="grid grid-cols-4 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-3 sm:gap-5 reveal">
                <?php
                $categories = [
                    ['id' => 1, 'name' => 'Mobil',           'icon' => 'car',         'color' => 'text-blue-500',   'bg' => 'bg-blue-50'],
                    ['id' => 2, 'name' => 'Motor',           'icon' => 'bike',        'color' => 'text-orange-500', 'bg' => 'bg-orange-50'],
                    ['id' => 3, 'name' => 'Properti',        'icon' => 'home',        'color' => 'text-emerald-500','bg' => 'bg-emerald-50'],
                    ['id' => 4, 'name' => 'Elektronik',      'icon' => 'smartphone',  'color' => 'text-purple-500', 'bg' => 'bg-purple-50'],
                    ['id' => 5, 'name' => 'Furniture',       'icon' => 'sofa',        'color' => 'text-amber-600',  'bg' => 'bg-amber-50'],
                    ['id' => 6, 'name' => 'Fashion',         'icon' => 'shirt',       'color' => 'text-pink-500',   'bg' => 'bg-pink-50'],
                    ['id' => 7, 'name' => 'Hobi',            'icon' => 'dumbbell',    'color' => 'text-cyan-500',   'bg' => 'bg-cyan-50'],
                    ['id' => 8, 'name' => 'Jasa & Lowongan','icon' => 'briefcase',   'color' => 'text-indigo-500', 'bg' => 'bg-indigo-50'],
                ];
                foreach ($categories as $cat): ?>
                <a href="/category/<?= $cat['id'] ?>" class="group flex flex-col items-center text-center gap-3 py-5 sm:py-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-soft hover:border-gray-200 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 rounded-full <?= $cat['bg'] ?> <?= $cat['color'] ?> group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="<?= $cat['icon'] ?>" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                    </div>
                    <span class="text-[12px] sm:text-[14px] font-semibold text-gray-700 leading-tight px-1"><?= $cat['name'] ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ========================================
         IKLAN TERBARU 
         ======================================== -->
    <section class="pb-16 sm:pb-20" id="ads-latest">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8 sm:mb-10 reveal">
                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight">Rekomendasi Baru</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 reveal">
                <?php
                $ads = [
                    ['id'=>1, 'title'=>'Toyota Avanza 1.5 G MT 2021 Putih Mulus Terawat', 'price'=>195000000, 'loc'=>'Jakarta Selatan', 'time'=>'2 jam lalu', 'img'=>'https://images.unsplash.com/photo-1549317661-bd32c8ce0afa?w=600&h=450&fit=crop&q=80', 'imgs'=>5, 'badge'=>'Baru'],
                    ['id'=>2, 'title'=>'MacBook Pro M2 2022 256GB Fullset Garansi Aktif', 'price'=>18500000, 'loc'=>'Bandung', 'time'=>'5 jam lalu', 'img'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&h=450&fit=crop&q=80', 'imgs'=>3, 'badge'=>null],
                    ['id'=>3, 'title'=>'Rumah Minimalis 2 Lantai Strategis Dekat Tol Cibubur', 'price'=>850000000, 'loc'=>'Depok', 'time'=>'1 hari lalu', 'img'=>'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&h=450&fit=crop&q=80', 'imgs'=>8, 'badge'=>'Urgent', 'urgent'=>true],
                    ['id'=>4, 'title'=>'iPhone 14 Pro Max 256GB Deep Purple iBox Resmi', 'price'=>14200000, 'loc'=>'Surabaya', 'time'=>'3 jam lalu', 'img'=>'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=600&h=450&fit=crop&q=80', 'imgs'=>4, 'badge'=>null],
                    ['id'=>5, 'title'=>'Honda PCX 160 ABS 2023 KM Rendah Pajak Panjang', 'price'=>28500000, 'loc'=>'Yogyakarta', 'time'=>'6 jam lalu', 'img'=>'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600&h=450&fit=crop&q=80', 'imgs'=>6, 'badge'=>'Baru'],
                    ['id'=>6, 'title'=>'Sofa Minimalis L Shape Premium Bahan Oscar Tebal', 'price'=>3200000, 'loc'=>'Tangerang', 'time'=>'8 jam lalu', 'img'=>'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=450&fit=crop&q=80', 'imgs'=>3, 'badge'=>null],
                    ['id'=>7, 'title'=>'Nike Air Max 270 React Original BNIB Size 42', 'price'=>1450000, 'loc'=>'Semarang', 'time'=>'12 jam lalu', 'img'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&h=450&fit=crop&q=80', 'imgs'=>4, 'badge'=>null],
                    ['id'=>8, 'title'=>'Sepeda Polygon Strattos S5 Road Bike Shimano 105', 'price'=>4800000, 'loc'=>'Bekasi', 'time'=>'1 hari lalu', 'img'=>'https://images.unsplash.com/photo-1485965120184-e220f721d03e?w=600&h=450&fit=crop&q=80', 'imgs'=>7, 'badge'=>null],
                ];

                function formatRupiah($n) {
                    return 'Rp ' . number_format($n, 0, ',', '.');
                }

                foreach ($ads as $ad):
                    $bClass = !empty($ad['urgent']) ? 'bg-red-500' : 'bg-green-500';
                ?>
                <article class="group flex flex-col bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-soft hover:border-gray-300 hover:-translate-y-1 transition-all duration-300 cursor-pointer" id="ad-<?= $ad['id'] ?>">
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="<?= $ad['img'] ?>" alt="<?= htmlspecialchars($ad['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy">

                        <?php if ($ad['badge']): ?>
                        <span class="absolute top-3 left-3 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-md <?= $bClass ?> text-white shadow-sm"><?= $ad['badge'] ?></span>
                        <?php endif; ?>

                        <button class="ad-fav absolute top-3 right-3 w-8 h-8 flex items-center justify-center bg-white/90 backdrop-blur-sm rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-all duration-200 shadow-sm" aria-label="Simpan">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>

                        <div class="absolute bottom-3 left-3 flex items-center gap-1.5 px-2 py-1 text-[11px] font-semibold bg-black/60 text-white rounded-md backdrop-blur-md">
                            <i data-lucide="camera" class="w-3.5 h-3.5"></i>
                            <?= $ad['imgs'] ?>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="flex flex-col flex-1 p-4 sm:p-5">
                        <div class="text-[17px] sm:text-[20px] font-extrabold text-primary tracking-tight leading-tight mb-2"><?= formatRupiah($ad['price']) ?></div>
                        <h3 class="text-[13px] sm:text-[14px] text-gray-700 mb-3 line-clamp-2 leading-snug flex-1"><?= htmlspecialchars($ad['title']) ?></h3>
                        <div class="flex items-center justify-between text-[11px] sm:text-[12px] text-gray-500 pt-3 border-t border-gray-100 mt-auto">
                            <span class="truncate mr-2"><?= $ad['loc'] ?></span>
                            <span class="shrink-0 whitespace-nowrap"><?= $ad['time'] ?></span>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Load More -->
            <div class="text-center mt-10 sm:mt-12 reveal">
                <a href="/ads" class="inline-flex items-center justify-center px-8 py-3.5 text-[15px] font-bold text-primary border-2 border-primary rounded-full hover:bg-primary hover:text-white active:scale-[0.98] transition-all duration-200 w-full sm:w-auto" id="btn-load-more">
                    Muat Lebih Banyak
                </a>
            </div>
        </div>
    </section>

    <!-- ========================================
         CTA BANNER
         ======================================== -->
    <section class="pb-16 sm:pb-24 px-4 sm:px-6 lg:px-8" id="cta-banner">
        <div class="max-w-[1280px] mx-auto">
            <div class="relative bg-gradient-to-br from-[#002f34] to-[#00474f] rounded-3xl p-8 sm:p-12 lg:p-16 overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-10 reveal shadow-xl">
                <div class="absolute -right-20 -top-20 w-[300px] h-[300px] bg-sell opacity-20 blur-[100px] rounded-full pointer-events-none" aria-hidden="true"></div>

                <div class="relative z-10 max-w-xl text-center lg:text-left">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white mb-4 sm:mb-6 leading-tight">
                        Punya Barang Tak Terpakai? <br><span class="text-sell">Ubah Jadi Uang!</span>
                    </h2>
                    <p class="text-[15px] sm:text-lg text-white/80 mb-8 leading-relaxed">
                        Pasang iklan secara gratis dalam hitungan menit. Jangkau jutaan pembeli potensial di seluruh Indonesia hari ini juga.
                    </p>
                    <a href="/post-ad" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-[16px] font-bold text-primary bg-sell rounded-full shadow-lg shadow-sell/30 hover:bg-sell-hover hover:-translate-y-1 hover:shadow-xl hover:shadow-sell/40 active:scale-[0.98] transition-all duration-300 w-full sm:w-auto" id="cta-sell-btn">
                        <i data-lucide="plus" class="w-5 h-5"></i>
                        Pasang Iklan Sekarang
                    </a>
                </div>

                <div class="relative z-10 flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                    <div class="flex-1 bg-white/10 border border-white/20 rounded-2xl p-6 backdrop-blur-md text-center text-white">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="clock" class="w-6 h-6"></i>
                        </div>
                        <div class="text-2xl font-black mb-1">Cepat</div>
                        <div class="text-[13px] text-white/70">Kurang dari 5 menit</div>
                    </div>
                    <div class="flex-1 bg-white/10 border border-white/20 rounded-2xl p-6 backdrop-blur-md text-center text-white">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="users" class="w-6 h-6"></i>
                        </div>
                        <div class="text-2xl font-black mb-1">Luas</div>
                        <div class="text-[13px] text-white/70">Jutaan pembeli aktif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         FOOTER
         ======================================== -->
    <footer class="bg-gray-900 text-gray-400 mt-auto" id="footer">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 pt-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12 pb-12 border-b border-white/10">
                <!-- Brand -->
                <div class="col-span-2 md:col-span-4 lg:col-span-1">
                    <div class="text-2xl font-black text-white flex items-center gap-1 mb-5">
                        OLX<span class="inline-block w-2.5 h-2.5 bg-sell rounded-full"></span>
                    </div>
                    <p class="text-[14px] text-gray-500 leading-relaxed mb-6">
                        Platform jual beli online terbesar dan terpercaya di Indonesia. Cara mudah menemukan barang impian.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i data-lucide="facebook" class="w-4 h-4"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i data-lucide="instagram" class="w-4 h-4"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"><i data-lucide="twitter" class="w-4 h-4"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-span-1">
                    <h3 class="text-[13px] font-bold text-white mb-5">KATEGORI</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Mobil Bekas</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Motor Bekas</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Properti</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Elektronik</a></li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <h3 class="text-[13px] font-bold text-white mb-5">TENTANG OLX</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Press</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-1">
                    <h3 class="text-[13px] font-bold text-white mb-5">BANTUAN</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Tips Keamanan</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-[14px] hover:text-white transition-colors">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>

            <div class="py-6 text-center sm:text-left text-[13px] text-gray-500">
                &copy; 2026 OLX Clone. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- ========================================
         MOBILE BOTTOM NAV 
         ======================================== -->
    <nav class="fixed bottom-0 inset-x-0 z-50 bg-white border-t border-gray-200 sm:hidden shadow-[0_-4px_20px_rgba(0,0,0,0.05)] pb-[env(safe-area-inset-bottom)]" id="mobile-nav">
        <ul class="flex justify-between items-center px-2 pt-2 pb-1.5 relative">
            <li class="flex-1">
                <a href="/" class="flex flex-col items-center gap-1 text-primary">
                    <i data-lucide="home" class="w-6 h-6"></i>
                    <span class="text-[10px] font-semibold">Beranda</span>
                </a>
            </li>
            <li class="flex-1">
                <a href="/explore" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary transition-colors">
                    <i data-lucide="heart" class="w-6 h-6"></i>
                    <span class="text-[10px] font-semibold">Favorit</span>
                </a>
            </li>
            
            <!-- Floating Action Button for Jual -->
            <li class="flex-shrink-0 w-16 flex justify-center">
                <a href="/post-ad" class="absolute -top-6 flex items-center justify-center w-14 h-14 bg-sell rounded-full shadow-[0_4px_12px_rgba(255,206,50,0.4)] text-primary hover:scale-105 active:scale-95 transition-transform border-4 border-[#f7f8f9]" aria-label="Jual">
                    <i data-lucide="plus" class="w-7 h-7 stroke-[3]"></i>
                </a>
            </li>

            <li class="flex-1">
                <a href="/chat" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary transition-colors">
                    <i data-lucide="message-square" class="w-6 h-6"></i>
                    <span class="text-[10px] font-semibold">Chat</span>
                </a>
            </li>
            <li class="flex-1">
                <a href="/profile" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary transition-colors">
                    <i data-lucide="user" class="w-6 h-6"></i>
                    <span class="text-[10px] font-semibold">Akun</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Mobile Nav Spacer to prevent content overlap -->
    <div class="h-20 sm:hidden"></div>

    <!-- Scroll to Top -->
    <button class="fixed bottom-24 sm:bottom-8 right-4 sm:right-8 w-12 h-12 flex items-center justify-center bg-primary text-white rounded-full shadow-float opacity-0 invisible translate-y-4 transition-all duration-300 z-40 hover:bg-primary-light active:scale-95" id="scroll-top" aria-label="Scroll ke atas">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    <!-- ========================================
         SCRIPTS
         ======================================== -->
    <script>
        lucide.createIcons();

        // Scroll to top visibility
        const scrollBtn = document.getElementById('scroll-top');
        window.addEventListener('scroll', () => {
            const show = window.scrollY > 500;
            scrollBtn.classList.toggle('opacity-0', !show);
            scrollBtn.classList.toggle('invisible', !show);
            scrollBtn.classList.toggle('translate-y-4', !show);
        });
        scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Reveal animations on scroll
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // Favorite Toggle
        document.querySelectorAll('.ad-fav').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const icon = btn.querySelector('i');
                const isFav = btn.classList.toggle('text-red-500');
                
                if (isFav) {
                    icon.setAttribute('fill', 'currentColor');
                    btn.classList.remove('text-gray-400');
                } else {
                    icon.setAttribute('fill', 'none');
                    btn.classList.add('text-gray-400');
                }
                
                // Pop animation
                btn.style.transform = 'scale(1.2)';
                setTimeout(() => btn.style.transform = '', 150);
            });
        });

        // Counter Animation for Hero Stats
        function animateValue(obj, start, end, duration, formatFn) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = Math.floor(progress * (end - start) + start);
                obj.innerHTML = formatFn(current);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        const statObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                const stats = document.querySelectorAll('.hero-stat-value');
                if(stats.length === 3) {
                    animateValue(stats[0], 0, 2500000, 1500, n => (n/1e6).toFixed(1) + 'Jt+');
                    animateValue(stats[1], 0, 500000, 1500, n => (n/1e3).toFixed(0) + 'rb+');
                    animateValue(stats[2], 0, 50, 1500, n => n + '+');
                }
                statObserver.disconnect();
            }
        });
        statObserver.observe(document.getElementById('hero'));
    </script>
</body>
</html>
