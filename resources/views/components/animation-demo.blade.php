<!-- Animation Demo Component untuk Alpine.js -->
<div x-data="{ 
    showModal: false,
    showToggle: false,
    animationClass: 'fade-in'
}" class="p-6 bg-gray-50 rounded-lg">
    
    <h3 class="text-2xl font-bold mb-6">Demo Animasi CSS dengan Alpine.js</h3>

    <!-- Demo 1: Modal dengan Animasi -->
    <div class="mb-8">
        <button 
            @click="showModal = true"
            class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            Buka Modal Animated
        </button>

        <!-- Modal --> <div 
            x-show="showModal"
            x-transition
            @click="showModal = false"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            
            <div 
                @click.stop
                x-show="showModal"
                x-transition:enter="modal-show"
                class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
                
                <h4 class="text-xl font-bold mb-4">Modal Animated!</h4>
                <p class="text-gray-600 mb-6">Ini adalah contoh modal dengan animasi CSS yang indah.</p>
                
                <button 
                    @click="showModal = false"
                    class="w-full px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Demo 2: Toggle dengan Animasi Expand -->
    <div class="mb-8">
        <button 
            @click="showToggle = !showToggle"
            class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
            Toggle Content (Expand Animation)
        </button>

        <div 
            x-show="showToggle"
            x-transition:enter="expand-down"
            x-transition:leave="fade-out"
            class="mt-4 p-4 bg-purple-100 rounded-lg border-l-4 border-purple-600">
            
            <h5 class="font-bold mb-2">Konten yang Dapat Ditampilkan</h5>
            <p class="text-gray-700">Konten ini akan muncul dengan animasi expand yang halus ketika toggle diaktifkan.</p>
        </div>
    </div>

    <!-- Demo 3: Animasi Berbeda -->
    <div class="mb-8">
        <div class="flex gap-4 flex-wrap">
            <button 
                @click="animationClass = 'fade-in'"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Fade In
            </button>
            <button 
                @click="animationClass = 'bounce-in'"
                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                Bounce In
            </button>
            <button 
                @click="animationClass = 'scale-in'"
                class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition">
                Scale In
            </button>
            <button 
                @click="animationClass = 'slide-in-left'"
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                Slide In Left
            </button>
        </div>

        <div 
            :class="animationClass"
            class="mt-4 p-6 bg-linear-to-r from-indigo-500 to-purple-600 text-white rounded-lg text-center">
            
            <p class="text-xl font-bold">Animasi: <span x-text="animationClass"></span></p>
        </div>
    </div>

    <!-- Demo 4: Animasi Loop -->
    <div class="mb-8">
        <div class="flex gap-4 items-center">
            <div class="pulse w-12 h-12 bg-red-600 rounded-full"></div>
            <div class="spin w-12 h-12 border-4 border-gray-300 border-t-blue-600 rounded-full"></div>
            <svg class="rotate-animation w-12 h-12 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
            </svg>
        </div>
        <p class="text-gray-600 mt-4">Contoh animasi loop: pulse, spin, dan rotate</p>
    </div>

</div>


