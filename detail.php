<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Detail Iklan OLX Clone">
    <title>Toyota Avanza 1.5 G MT 2021 Putih Mulus - OLX Clone</title>

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

        /* Smooth scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 999px; }
        ::-webkit-scrollbar-thumb:hover { background: #9ca3af; }

        body { -webkit-tap-highlight-color: transparent; }
    </style>
</head>

<body class="font-sans bg-[#f7f8f9] text-gray-800 antialiased overflow-x-hidden min-h-screen flex flex-col">

    <!-- ========================================
         HEADER
         ======================================== -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm" id="header">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4 h-16 sm:h-20">
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-1 text-2xl sm:text-3xl font-extrabold text-primary shrink-0 tracking-tight" id="logo">
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
                <button class="sm:hidden p-2 text-gray-600 hover:text-primary transition-colors" aria-label="Cari">
                    <i data-lucide="search" class="w-6 h-6"></i>
                </button>
                <a href="/chat" class="hidden lg:flex items-center gap-2 px-3 py-2 text-[14px] font-semibold text-gray-700 hover:text-primary transition-colors">
                    <i data-lucide="message-circle" class="w-5 h-5"></i> Chat
                </a>
                <a href="/login" class="flex items-center gap-2 px-4 py-2 text-[14px] font-semibold text-primary hover:bg-gray-50 rounded-full transition-colors whitespace-nowrap">
                    <span class="hidden xs:inline underline decoration-2 underline-offset-4 decoration-sell">Masuk / Daftar</span>
                    <i data-lucide="user" class="w-6 h-6 xs:hidden text-gray-600"></i>
                </a>
                <a href="/post-ad" class="hidden sm:flex items-center gap-2 px-6 py-3 text-[15px] font-bold text-primary bg-sell rounded-full hover:bg-sell-hover hover:shadow-float active:scale-[0.98] transition-all duration-200 whitespace-nowrap">
                    <i data-lucide="plus" class="w-5 h-5"></i>
                    <span>JUAL</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- ========================================
         MAIN CONTENT (DETAIL IKLAN)
         ======================================== -->
    <main class="flex-1 max-w-[1280px] w-full mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-[12px] sm:text-[13px] text-gray-500 mb-4 sm:mb-6 overflow-x-auto whitespace-nowrap pb-2">
            <a href="index.php" class="hover:text-primary transition-colors">Beranda</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
            <a href="/category/1" class="hover:text-primary transition-colors">Mobil</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 opacity-60"></i>
            <span class="text-gray-800 font-medium truncate">Toyota Avanza 1.5 G MT 2021...</span>
        </nav>

        <?php
        // Simulated Ad Data mapped to `ads`, `users`, `categories`, `ad_images`
        $ad = [
            'id' => 1,
            'title' => 'Toyota Avanza 1.5 G MT 2021 Putih Mulus Terawat',
            'price' => 195000000,
            'description' => "Dijual Cepat Toyota Avanza 1.5 G Manual Tahun 2021.\n\nKondisi sangat mulus terawat, atas nama sendiri dari baru. Pajak hidup panjang sampai bulan 10 tahun depan. \n\nSpesifikasi:\n- Mesin 1500cc halus no rembes\n- Transmisi Manual responsif\n- KM rendah 35.xxx on going\n- Body mulus kaleng, cat original\n- Interior bersih, wangi, jok sudah dilapis kulit\n- AC Double Blower sangat dingin\n- Ban tebal 90%\n- Kunci serep, buku servis, buku manual lengkap\n\nMobil siap pakai luar kota tanpa PR. Alasan jual karena ingin ganti mobil yang lebih besar.\nLokasi unit di Jakarta Selatan, bisa janjian untuk cek unit langsung. Harga nego tipis di tempat setelah lihat barang.",
            'location' => 'Kebayoran Baru, Jakarta Selatan',
            'created_at' => '2 jam lalu',
            'category' => 'Mobil',
            'seller' => [
                'name' => 'Budi Santoso',
                'member_since' => 'Okt 2021',
                'avatar' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=002f34&color=fff'
            ],
            'images' => [
                'https://images.unsplash.com/photo-1549317661-bd32c8ce0afa?w=1000&h=750&fit=crop&q=80',
                'https://images.unsplash.com/photo-1550355291-bbee04a92027?w=1000&h=750&fit=crop&q=80',
                'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=1000&h=750&fit=crop&q=80',
                'https://images.unsplash.com/photo-1503376710356-70e68c813f17?w=1000&h=750&fit=crop&q=80'
            ]
        ];
        function formatRp($n) { return 'Rp ' . number_format($n, 0, ',', '.'); }
        ?>

        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
            
            <!-- LEFT COLUMN: Gallery & Details -->
            <div class="flex-1 lg:max-w-[70%]">
                <!-- Gallery -->
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-200 mb-6 shadow-sm">
                    <!-- Main Image -->
                    <div class="relative aspect-[4/3] bg-gray-100 flex items-center justify-center group cursor-pointer">
                        <img id="main-image" src="<?= $ad['images'][0] ?>" alt="Gambar Utama" class="w-full h-full object-cover">
                        <!-- Navigation arrows -->
                        <button class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-primary shadow hover:bg-white transition-colors opacity-0 group-hover:opacity-100"><i data-lucide="chevron-left"></i></button>
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-primary shadow hover:bg-white transition-colors opacity-0 group-hover:opacity-100"><i data-lucide="chevron-right"></i></button>
                    </div>
                    <!-- Thumbnails -->
                    <div class="flex gap-2 p-3 overflow-x-auto">
                        <?php foreach($ad['images'] as $idx => $img): ?>
                        <div class="w-20 h-16 sm:w-24 sm:h-20 shrink-0 rounded-lg overflow-hidden border-2 cursor-pointer <?= $idx===0 ? 'border-primary opacity-100' : 'border-transparent opacity-60 hover:opacity-100' ?> transition-all thumb-btn" data-src="<?= $img ?>">
                            <img src="<?= $img ?>" alt="Thumbnail" class="w-full h-full object-cover">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Product Detail Box (Mobile: Title & Price move here from sidebar) -->
                <div class="bg-white rounded-2xl p-5 sm:p-7 border border-gray-200 shadow-sm mb-6 lg:hidden">
                    <div class="flex justify-between items-start gap-4 mb-4">
                        <h1 class="text-3xl font-black text-primary tracking-tight"><?= formatRp($ad['price']) ?></h1>
                        <div class="flex gap-2 shrink-0">
                            <button class="w-10 h-10 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-gray-100"><i data-lucide="share-2" class="w-5 h-5"></i></button>
                            <button class="w-10 h-10 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-gray-100 ad-fav"><i data-lucide="heart" class="w-5 h-5"></i></button>
                        </div>
                    </div>
                    <h2 class="text-lg text-gray-800 leading-snug mb-4"><?= htmlspecialchars($ad['title']) ?></h2>
                    <div class="flex items-center justify-between text-[12px] text-gray-500 pt-4 border-t border-gray-100">
                        <span class="flex items-center gap-1.5"><i data-lucide="map-pin" class="w-4 h-4"></i> <?= $ad['location'] ?></span>
                        <span><?= $ad['created_at'] ?></span>
                    </div>
                </div>

                <!-- Details & Description -->
                <div class="bg-white rounded-2xl p-5 sm:p-7 border border-gray-200 shadow-sm mb-6">
                    <h3 class="text-[18px] font-bold text-gray-900 mb-5 pb-4 border-b border-gray-100">Detail & Spesifikasi</h3>
                    
                    <!-- Meta Specs grid -->
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 mb-8 text-[14px]">
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-500 text-[12px]">Kategori</span>
                            <span class="font-medium text-gray-800"><?= $ad['category'] ?></span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-500 text-[12px]">Merek</span>
                            <span class="font-medium text-gray-800">Toyota</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-500 text-[12px]">Tahun</span>
                            <span class="font-medium text-gray-800">2021</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-500 text-[12px]">Kondisi</span>
                            <span class="font-medium text-gray-800">Bekas (Sangat Baik)</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-500 text-[12px]">Transmisi</span>
                            <span class="font-medium text-gray-800">Manual</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-500 text-[12px]">Tipe Body</span>
                            <span class="font-medium text-gray-800">MPV</span>
                        </div>
                    </div>

                    <h3 class="text-[18px] font-bold text-gray-900 mb-4">Deskripsi</h3>
                    <div class="text-[15px] text-gray-700 leading-relaxed whitespace-pre-line"><?= htmlspecialchars($ad['description']) ?></div>
                </div>

                <!-- Location Map Placeholder -->
                <div class="bg-white rounded-2xl p-5 sm:p-7 border border-gray-200 shadow-sm mb-6 lg:mb-0">
                    <h3 class="text-[18px] font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i> Lokasi Iklan
                    </h3>
                    <p class="text-[14px] text-gray-600 mb-4"><?= $ad['location'] ?></p>
                    <div class="w-full h-[200px] bg-gray-200 rounded-xl overflow-hidden relative flex items-center justify-center border border-gray-200">
                        <!-- Simulate map -->
                        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cartographer.png')]"></div>
                        <div class="relative flex flex-col items-center">
                            <i data-lucide="map-pin" class="w-8 h-8 text-red-500 mb-2"></i>
                            <span class="text-sm font-semibold text-gray-600">Peta disembunyikan</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Sticky Sidebar -->
            <div class="lg:w-[32%] flex-shrink-0">
                <div class="sticky top-[104px] flex flex-col gap-6">
                    
                    <!-- Price & Title (Desktop Only) -->
                    <div class="hidden lg:block bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                        <div class="flex justify-between items-start gap-4 mb-4">
                            <h1 class="text-3xl font-black text-primary tracking-tight"><?= formatRp($ad['price']) ?></h1>
                            <div class="flex gap-2 shrink-0">
                                <button class="w-10 h-10 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-gray-100 transition-colors" title="Bagikan"><i data-lucide="share-2" class="w-5 h-5"></i></button>
                                <button class="w-10 h-10 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-gray-100 transition-colors ad-fav" title="Favorit"><i data-lucide="heart" class="w-5 h-5"></i></button>
                            </div>
                        </div>
                        <h2 class="text-lg text-gray-800 leading-snug mb-5"><?= htmlspecialchars($ad['title']) ?></h2>
                        <div class="flex items-center justify-between text-[12px] text-gray-500 pt-4 border-t border-gray-100">
                            <span class="flex items-center gap-1.5 truncate mr-2"><i data-lucide="map-pin" class="w-4 h-4 shrink-0"></i> <?= $ad['location'] ?></span>
                            <span class="shrink-0"><?= $ad['created_at'] ?></span>
                        </div>
                    </div>

                    <!-- Seller Info Box -->
                    <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                        <h3 class="text-[14px] font-bold text-gray-900 mb-4 uppercase tracking-wider">Profil Penjual</h3>
                        <div class="flex items-center gap-4 mb-6">
                            <img src="<?= $ad['seller']['avatar'] ?>" alt="Avatar" class="w-14 h-14 rounded-full bg-gray-100 object-cover">
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-gray-900 text-[16px] truncate hover:underline cursor-pointer"><?= $ad['seller']['name'] ?></h4>
                                <p class="text-[12px] text-gray-500 mt-0.5">Bergabung sejak <?= $ad['seller']['member_since'] ?></p>
                            </div>
                            <i data-lucide="chevron-right" class="w-5 h-5 text-gray-400 cursor-pointer"></i>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <a href="#" class="flex items-center justify-center gap-2 w-full py-3.5 bg-primary text-white font-bold rounded-xl hover:bg-primary-light active:scale-[0.98] transition-all">
                                <i data-lucide="message-square" class="w-5 h-5"></i> Chat Penjual
                            </a>
                            <a href="#" class="flex items-center justify-center gap-2 w-full py-3.5 bg-white text-primary border-2 border-primary font-bold rounded-xl hover:bg-gray-50 active:scale-[0.98] transition-all">
                                <i data-lucide="phone" class="w-5 h-5"></i> Tampilkan Nomor
                            </a>
                        </div>
                    </div>
                    
                    <!-- Safety Tips -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
                        <div class="flex items-center gap-2 text-primary font-bold mb-3">
                            <i data-lucide="shield-check" class="w-5 h-5"></i> Tips Keamanan
                        </div>
                        <ul class="text-[13px] text-gray-600 space-y-2 list-disc pl-4 marker:text-gray-300">
                            <li>Jangan pernah mentransfer uang sebelum melihat barang.</li>
                            <li>Ajak bertemu di tempat yang aman dan ramai.</li>
                            <li>Periksa barang dengan teliti sebelum membeli.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- ========================================
         SIMILAR ADS
         ======================================== -->
    <section class="border-t border-gray-200 bg-white py-12 sm:py-16 mt-8">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 tracking-tight mb-6 sm:mb-8">Iklan Serupa</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                <?php
                // Re-using some mock data for similar ads
                $similar_ads = [
                    ['id'=>5, 'title'=>'Honda PCX 160 ABS 2023 KM Rendah Pajak Panjang', 'price'=>28500000, 'loc'=>'Yogyakarta', 'time'=>'6 jam lalu', 'img'=>'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600&h=450&fit=crop&q=80', 'imgs'=>6, 'badge'=>'Baru'],
                    ['id'=>2, 'title'=>'MacBook Pro M2 2022 256GB Fullset Garansi Aktif', 'price'=>18500000, 'loc'=>'Bandung', 'time'=>'5 jam lalu', 'img'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&h=450&fit=crop&q=80', 'imgs'=>3, 'badge'=>null],
                    ['id'=>4, 'title'=>'iPhone 14 Pro Max 256GB Deep Purple iBox Resmi', 'price'=>14200000, 'loc'=>'Surabaya', 'time'=>'3 jam lalu', 'img'=>'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=600&h=450&fit=crop&q=80', 'imgs'=>4, 'badge'=>null],
                    ['id'=>6, 'title'=>'Sofa Minimalis L Shape Premium Bahan Oscar Tebal', 'price'=>3200000, 'loc'=>'Tangerang', 'time'=>'8 jam lalu', 'img'=>'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=450&fit=crop&q=80', 'imgs'=>3, 'badge'=>null],
                ];
                foreach ($similar_ads as $ad):
                ?>
                <article class="group flex flex-col bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-soft hover:border-gray-300 hover:-translate-y-1 transition-all duration-300 cursor-pointer" onclick="window.location.href='detail.php?id=<?= $ad['id'] ?>'">
                    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="<?= $ad['img'] ?>" alt="<?= htmlspecialchars($ad['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy">
                        <?php if ($ad['badge']): ?>
                        <span class="absolute top-3 left-3 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-md bg-green-500 text-white shadow-sm"><?= $ad['badge'] ?></span>
                        <?php endif; ?>
                        <button class="ad-fav absolute top-3 right-3 w-8 h-8 flex items-center justify-center bg-white/90 backdrop-blur-sm rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-all duration-200 shadow-sm" aria-label="Simpan"><i data-lucide="heart" class="w-4 h-4"></i></button>
                        <div class="absolute bottom-3 left-3 flex items-center gap-1.5 px-2 py-1 text-[11px] font-semibold bg-black/60 text-white rounded-md backdrop-blur-md">
                            <i data-lucide="camera" class="w-3.5 h-3.5"></i> <?= $ad['imgs'] ?>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 p-4 sm:p-5">
                        <div class="text-[17px] sm:text-[20px] font-extrabold text-primary tracking-tight leading-tight mb-2"><?= formatRp($ad['price']) ?></div>
                        <h3 class="text-[13px] sm:text-[14px] text-gray-700 mb-3 line-clamp-2 leading-snug flex-1"><?= htmlspecialchars($ad['title']) ?></h3>
                        <div class="flex items-center justify-between text-[11px] sm:text-[12px] text-gray-500 pt-3 border-t border-gray-100 mt-auto">
                            <span class="truncate mr-2"><?= $ad['loc'] ?></span>
                            <span class="shrink-0 whitespace-nowrap"><?= $ad['time'] ?></span>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

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
                <!-- Simplified links for detail page -->
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
         MOBILE BOTTOM NAV (Same as Index)
         ======================================== -->
    <nav class="fixed bottom-0 inset-x-0 z-50 bg-white border-t border-gray-200 sm:hidden shadow-[0_-4px_20px_rgba(0,0,0,0.05)] pb-[env(safe-area-inset-bottom)]" id="mobile-nav">
        <ul class="flex justify-between items-center px-2 pt-2 pb-1.5 relative">
            <li class="flex-1"><a href="index.php" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="home" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Beranda</span></a></li>
            <li class="flex-1"><a href="/explore" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="heart" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Favorit</span></a></li>
            <li class="flex-shrink-0 w-16 flex justify-center"><a href="/post-ad" class="absolute -top-6 flex items-center justify-center w-14 h-14 bg-sell rounded-full shadow-[0_4px_12px_rgba(255,206,50,0.4)] text-primary hover:scale-105 active:scale-95 border-4 border-white"><i data-lucide="plus" class="w-7 h-7 stroke-[3]"></i></a></li>
            <li class="flex-1"><a href="/chat" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="message-square" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Chat</span></a></li>
            <li class="flex-1"><a href="/profile" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="user" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Akun</span></a></li>
        </ul>
    </nav>
    <div class="h-20 sm:hidden"></div> <!-- Spacer -->

    <!-- Mobile Sticky Action Bar (Chat/Call) -->
    <div class="fixed bottom-16 inset-x-0 z-40 bg-white border-t border-gray-200 p-3 sm:hidden shadow-[0_-4px_10px_rgba(0,0,0,0.05)] flex gap-3">
        <a href="#" class="flex-1 flex items-center justify-center gap-2 py-3 bg-primary text-white font-bold rounded-xl active:scale-[0.98]"><i data-lucide="message-square" class="w-5 h-5"></i> Chat</a>
        <a href="#" class="w-14 flex items-center justify-center bg-white text-primary border-2 border-primary rounded-xl active:scale-[0.98]"><i data-lucide="phone" class="w-5 h-5"></i></a>
    </div>

    <!-- ========================================
         SCRIPTS
         ======================================== -->
    <script>
        lucide.createIcons();

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
                btn.style.transform = 'scale(1.2)';
                setTimeout(() => btn.style.transform = '', 150);
            });
        });

        // Image Gallery Thumbnails
        const mainImage = document.getElementById('main-image');
        const thumbs = document.querySelectorAll('.thumb-btn');
        
        thumbs.forEach(thumb => {
            thumb.addEventListener('click', function() {
                // Update main image source
                mainImage.src = this.getAttribute('data-src');
                
                // Update active state
                thumbs.forEach(t => {
                    t.classList.remove('border-primary', 'opacity-100');
                    t.classList.add('border-transparent', 'opacity-60');
                });
                this.classList.remove('border-transparent', 'opacity-60');
                this.classList.add('border-primary', 'opacity-100');
            });
        });
    </script>
</body>
</html>
