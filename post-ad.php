<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Pasang Iklan Baru - OLX Clone">
    <title>Pasang Iklan - OLX Clone</title>

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
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 999px; }
        ::-webkit-scrollbar-thumb:hover { background: #9ca3af; }

        body { -webkit-tap-highlight-color: transparent; }
        
        /* Custom file input style */
        input[type="file"] {
            display: none;
        }
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

    <!-- Main Content -->
    <main class="flex-1 w-full max-w-[800px] mx-auto px-4 py-8 sm:py-12 z-10 relative">
        <div class="mb-8 text-center sm:text-left">
            <h1 class="text-2xl sm:text-3xl font-black text-gray-900 tracking-tight mb-2">Pasang Iklan Baru</h1>
            <p class="text-[14px] sm:text-[15px] text-gray-500">Isi detail barang yang ingin kamu jual dengan lengkap agar cepat laku.</p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl shadow-float p-6 sm:p-10 border border-gray-100 flex flex-col gap-8">
            
            <!-- SECTION 1: Detail Barang -->
            <div>
                <h2 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-3 mb-5 flex items-center gap-2">
                    <i data-lucide="box" class="w-5 h-5 text-primary"></i> Detail Barang
                </h2>
                
                <div class="flex flex-col gap-5">
                    <!-- Kategori -->
                    <div>
                        <label for="category_id" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Kategori Barang *</label>
                        <div class="relative flex items-center">
                            <i data-lucide="tag" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                            <select id="category_id" name="category_id" required class="w-full pl-11 pr-10 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all appearance-none cursor-pointer">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="1">Mobil</option>
                                <option value="2">Motor</option>
                                <option value="3">Properti</option>
                                <option value="4">Elektronik</option>
                                <option value="5">Furniture</option>
                                <option value="6">Fashion</option>
                                <option value="7">Hobi</option>
                                <option value="8">Jasa & Lowongan</option>
                            </select>
                            <i data-lucide="chevron-down" class="absolute right-4 w-5 h-5 text-gray-400 pointer-events-none"></i>
                        </div>
                    </div>

                    <!-- Judul Iklan -->
                    <div>
                        <label for="title" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Judul Iklan *</label>
                        <div class="relative flex items-center">
                            <i data-lucide="type" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                            <input type="text" id="title" name="title" required placeholder="Contoh: Toyota Avanza 1.5 G MT 2021 Putih" maxlength="150" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                        </div>
                        <p class="text-[11px] text-gray-400 mt-1.5 ml-1">Tulis judul yang menarik dan jelas (maks. 150 karakter).</p>
                    </div>

                    <!-- Deskripsi -->
                    <div>
                        <label for="description" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Deskripsi *</label>
                        <div class="relative">
                            <i data-lucide="align-left" class="absolute left-4 top-4 w-5 h-5 text-gray-400"></i>
                            <textarea id="description" name="description" required placeholder="Jelaskan kondisi barang, kelengkapan, alasan jual, dll." rows="6" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all resize-y"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Harga & Lokasi -->
            <div>
                <h2 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-3 mb-5 flex items-center gap-2">
                    <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i> Harga & Lokasi
                </h2>
                
                <div class="flex flex-col sm:flex-row gap-5">
                    <!-- Harga -->
                    <div class="flex-1">
                        <label for="price" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Harga (Rp) *</label>
                        <div class="relative flex items-center">
                            <span class="absolute left-4 font-bold text-gray-400">Rp</span>
                            <input type="number" id="price" name="price" required placeholder="0" min="0" class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-bold">
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="flex-1">
                        <label for="location" class="block text-[13px] font-bold text-gray-700 mb-1.5 ml-1">Lokasi *</label>
                        <div class="relative flex items-center">
                            <i data-lucide="map" class="absolute left-4 w-5 h-5 text-gray-400"></i>
                            <input type="text" id="location" name="location" required placeholder="Contoh: Jakarta Selatan" maxlength="100" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-[15px] text-gray-800 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: Upload Foto -->
            <div>
                <h2 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-3 mb-5 flex items-center gap-2">
                    <i data-lucide="image" class="w-5 h-5 text-primary"></i> Foto Barang
                </h2>
                
                <label for="images" class="flex flex-col items-center justify-center w-full h-48 sm:h-56 border-2 border-dashed border-primary/30 rounded-2xl bg-primary/5 hover:bg-primary/10 hover:border-primary/50 transition-all cursor-pointer group">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <div class="w-14 h-14 bg-white rounded-full shadow-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i data-lucide="upload-cloud" class="w-7 h-7 text-primary"></i>
                        </div>
                        <p class="mb-2 text-sm text-gray-600 font-semibold"><span class="text-primary font-bold">Klik untuk unggah</span> atau seret foto ke sini</p>
                        <p class="text-xs text-gray-400">Maks. 5 foto (Format: JPG, PNG, WEBP)</p>
                    </div>
                    <input id="images" name="images[]" type="file" accept="image/*" multiple />
                </label>
                
                <!-- Image Preview Area -->
                <div id="image-preview" class="grid grid-cols-3 sm:grid-cols-5 gap-3 mt-4 hidden">
                    <!-- Previews will be injected here via JS -->
                </div>
            </div>

            <!-- Submit -->
            <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-[12px] text-gray-500 text-center sm:text-left order-2 sm:order-1">
                    Pastikan detail yang Anda masukkan benar dan tidak melanggar syarat & ketentuan.
                </p>
                <button type="submit" class="w-full sm:w-auto px-10 py-4 bg-sell text-primary font-bold text-[15px] rounded-xl shadow-[0_4px_15px_rgba(255,206,50,0.3)] hover:bg-sell-hover hover:-translate-y-1 active:scale-[0.98] transition-all order-1 sm:order-2 flex items-center justify-center gap-2">
                    <i data-lucide="send" class="w-5 h-5"></i>
                    Terbitkan Iklan
                </button>
            </div>
        </form>
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
         MOBILE BOTTOM NAV (Same as Index)
         ======================================== -->
    <nav class="fixed bottom-0 inset-x-0 z-50 bg-white border-t border-gray-200 sm:hidden shadow-[0_-4px_20px_rgba(0,0,0,0.05)] pb-[env(safe-area-inset-bottom)]" id="mobile-nav">
        <ul class="flex justify-between items-center px-2 pt-2 pb-1.5 relative">
            <li class="flex-1"><a href="index.php" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="home" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Beranda</span></a></li>
            <li class="flex-1"><a href="/explore" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="heart" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Favorit</span></a></li>
            <li class="flex-shrink-0 w-16 flex justify-center"><a href="post-ad.php" class="absolute -top-6 flex items-center justify-center w-14 h-14 bg-sell rounded-full shadow-[0_4px_12px_rgba(255,206,50,0.4)] text-primary hover:scale-105 active:scale-95 border-4 border-[#f7f8f9]"><i data-lucide="plus" class="w-7 h-7 stroke-[3]"></i></a></li>
            <li class="flex-1"><a href="/chat" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="message-square" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Chat</span></a></li>
            <li class="flex-1"><a href="/profile" class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary"><i data-lucide="user" class="w-6 h-6"></i><span class="text-[10px] font-semibold">Akun</span></a></li>
        </ul>
    </nav>
    <div class="h-20 sm:hidden"></div> <!-- Spacer -->

    <!-- ========================================
         SCRIPTS
         ======================================== -->
    <script>
        lucide.createIcons();

        // Image Upload Preview Logic
        const imageInput = document.getElementById('images');
        const previewContainer = document.getElementById('image-preview');

        imageInput.addEventListener('change', function() {
            previewContainer.innerHTML = ''; // Clear existing
            
            if (this.files && this.files.length > 0) {
                previewContainer.classList.remove('hidden');
                
                // Limit to 5 files
                const files = Array.from(this.files).slice(0, 5);
                
                files.forEach((file, index) => {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'relative aspect-square rounded-xl overflow-hidden border border-gray-200 group';
                        
                        div.innerHTML = `
                            <img src="${e.target.result}" class="w-full h-full object-cover" />
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <button type="button" class="w-8 h-8 bg-white/20 hover:bg-red-500 rounded-full flex items-center justify-center text-white backdrop-blur-sm transition-colors delete-img-btn" title="Hapus foto">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        `;
                        previewContainer.appendChild(div);
                        lucide.createIcons();
                        
                        // Fake delete button functionality (for UI demo)
                        div.querySelector('.delete-img-btn').addEventListener('click', function(e) {
                            e.preventDefault();
                            div.remove();
                            if(previewContainer.children.length === 0) {
                                previewContainer.classList.add('hidden');
                            }
                        });
                    }
                    
                    reader.readAsDataURL(file);
                });
            } else {
                previewContainer.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
