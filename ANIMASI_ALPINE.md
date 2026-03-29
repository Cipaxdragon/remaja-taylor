# Panduan Menggunakan Animasi CSS dengan Alpine.js

## Daftar Animasi yang Tersedia

### 1. **Fade In**
Animasi membuat elemen secara perlahan muncul dari transparan ke opaque.
```html
<div x-show="condition" x-transition class="fade-in">
    Konten di sini
</div>
```

### 2. **Bounce In**
Animasi elemen muncul dengan efek bouncing.
```html
<div class="bounce-in">
    Konten dengan efek bounce
</div>
```

### 3. **Scale In**
Animasi elemen mulai dari ukuran kecil lalu membesar.
```html
<div class="scale-in">
    Konten dengan efek scale
</div>
```

### 4. **Slide Up**
Animasi elemen naik dari bawah ke atas.
```html
<div class="slide-up">
    Konten naik dari bawah
</div>
```

### 5. **Slide Down**
Animasi elemen turun dari atas ke bawah.
```html
<div class="slide-down">
    Konten turun dari atas
</div>
```

### 6. **Slide In Left**
Animasi elemen muncul dari sisi kiri.
```html
<div class="slide-in-left">
    Konten dari kiri
</div>
```

### 7. **Slide Out**
Animasi elemen hilang ke sisi kanan.
```html
<div x-show="condition" class="slide-out">
    Konten keluar ke kanan
</div>
```

### 8. **Expand Down**
Animasi membuka konten dengan efek ekspansi ke bawah (cocok untuk accordion).
```html
<div x-show="isOpen" class="expand-down">
    Konten yang membuka
</div>
```

### 9. **Modal Show**
Animasi modal atau popup muncul.
```html
<div x-show="showModal" class="modal-show">
    Konten modal
</div>
```

### 10. **Shake**
Animasi berguncang (cocok untuk error messages).
```html
<div class="shake">
    Pesan error
</div>
```

### 11. **Fade Out**
Animasi elemen hilang secara perlahan.
```html
<div class="fade-out">
    Konten yang hilang
</div>
```

### 12. **Pulse**
Animasi elemen berkedip/pulsing (untuk perhatian).
```html
<div class="pulse">
    Konten yang berkedip
</div>
```

### 13. **Spin**
Animasi elemen berputar (cocok untuk loading).
```html
<div class="spin">
    <svg class="w-8 h-8"><!-- SVG icon --></svg>
</div>
```

---

## Contoh Implementasi dengan Alpine.js

### Modal dengan Animasi
```html
<div x-data="{ showModal: false }">
    <!-- Tombol untuk membuka modal -->
    <button @click="showModal = true" class="px-4 py-2 bg-blue-600 text-white rounded">
        Buka Modal
    </button>

    <!-- Modal -->
    <div x-show="showModal" @click="showModal = false" class="fixed inset-0 bg-black bg-opacity-50">
        <div @click.stop x-show="showModal" class="modal-show bg-white p-8 max-w-md mx-auto mt-20">
            <h2 class="text-2xl font-bold mb-4">Judul Modal</h2>
            <p class="mb-6">Konten modal di sini</p>
            <button @click="showModal = false" class="px-4 py-2 bg-red-600 text-white rounded">
                Tutup
            </button>
        </div>
    </div>
</div>
```

### Accordion/Toggle dengan Animasi
```html
<div x-data="{ isOpen: false }">
    <button @click="isOpen = !isOpen" class="px-4 py-2 bg-purple-600 text-white rounded">
        Toggle Konten
    </button>

    <div x-show="isOpen" class="expand-down mt-4 p-4 bg-purple-100">
        Konten yang dapat ditampilkan/disembunyikan
    </div>
</div>
```

### Tab dengan Animasi
```html
<div x-data="{ active: 'tab1' }">
    <div class="flex gap-4 mb-4">
        <button 
            @click="active = 'tab1'"
            :class="active === 'tab1' ? 'bg-blue-600 text-white' : 'bg-gray-200'"
            class="px-4 py-2 rounded">
            Tab 1
        </button>
        <button 
            @click="active = 'tab2'"
            :class="active === 'tab2' ? 'bg-blue-600 text-white' : 'bg-gray-200'"
            class="px-4 py-2 rounded">
            Tab 2
        </button>
    </div>

    <div x-show="active === 'tab1'" class="fade-in">Tab 1 Konten</div>
    <div x-show="active === 'tab2'" class="fade-in">Tab 2 Konten</div>
</div>
```

### Loading Spinner
```html
<div class="spin inline-block">
    <svg class="w-8 h-8 text-blue-600 animate-spin" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
</div>
```

### Toast Notification dengan Animasi
```html
<div x-data="{ 
    showToast: false,
    message: ''
}" 
@notify.window="showToast = true; message = $event.detail;"
class="fixed bottom-4 right-4 z-50">
    
    <div x-show="showToast" class="slide-up bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg">
        <p x-text="message"></p>
    </div>
</div>
```

---

## Tips Penggunaan

1. **Gunakan `x-transition`** untuk transisi otomatis Alpine.js:
   ```html
   <div x-show="condition" x-transition class="fade-in">
       Konten
   </div>
   ```

2. **Kombinasikan dengan Tailwind CSS**:
   ```html
   <div class="bounce-in bg-blue-500 text-white p-4 rounded">
       Kombinasi animasi dan styling
   </div>
   ```

3. **Untuk animasi berulang**, gunakan kelas dengan `infinite`:
   ```html
   <div class="pulse">Elemen yang berkedip</div>
   ```

4. **Gunakan `@click` untuk trigger animasi**:
   ```html
   <button @click="animated = true">Trigger Animasi</button>
   <div x-show="animated" class="bounce-in">Animasi dimulai</div>
   ```

---

## File yang Sudah Dikonfigurasi

- **resources/css/app.css** - Berisi semua definisi animasi CSS
- **resources/js/app.js** - Sudah mengimport Alpine.js
- **resources/views/layout/main.blade.php** - Alpine.js sudah diintegrasikan
- **resources/views/components/animation-demo.blade.php** - Contoh implementasi

---

## Cara Menggunakan di Halaman

Tambahkan ke halaman Blade Anda:
```blade
@include('components.animation-demo')
```

Selamat menggunakan animasi CSS dengan Alpine.js!
