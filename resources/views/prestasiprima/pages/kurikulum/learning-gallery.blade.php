@php
    $totalSlides = 13;
@endphp

<section id="learning-gallery" class="relative py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">

        {{-- ================= HEADER ================= --}}
        <div class="relative mb-16 text-center">
            <div class="absolute -top-12 left-1/2 -translate-x-1/2
                        w-48 h-48 bg-purple-300/30 rounded-full blur-3xl pointer-events-none"></div>

            <h2 class="relative text-3xl md:text-4xl font-extrabold mb-5
                       bg-gradient-to-r from-purple-800 via-purple-700 to-indigo-700
                       bg-clip-text text-transparent">
                Learning in Action
            </h2>

            <p class="relative max-w-2xl mx-auto text-gray-700 leading-relaxed">
                Setiap proses belajar di
                <span class="font-semibold text-purple-800">SMA Prestasi Prima</span>
                dirancang untuk membentuk pemikiran kritis, kolaborasi,
                dan kesiapan masa depan.
            </p>

            <div class="w-16 h-1 mx-auto mt-6 rounded-full
                        bg-gradient-to-r from-purple-600 to-indigo-500"></div>
        </div>

        {{-- ================= CAROUSEL WRAPPER ================= --}}
        <div class="relative flex items-center gap-6">

            {{-- Desktop Prev --}}
            <button onclick="prevSlide()"
                class="nav-out hidden md:flex">
                &lt;
            </button>

            {{-- Carousel --}}
            <div class="relative flex-1 overflow-hidden rounded-2xl shadow-xl">
                <div id="galleryTrack"
                     class="flex transition-transform duration-500 ease-out touch-pan-x cursor-grab">

                    @for ($i = 1; $i <= $totalSlides; $i++)
                        <div class="relative w-full flex-shrink-0 select-none">
                            <img
                                src="{{ asset('assets/images/kurikulum/learning/learning' . $i . '.jpeg') }}"
                                alt="Learning {{ $i }}"
                                draggable="false"
                                class="w-full object-cover
                                       aspect-[4/3] sm:aspect-video
                                       max-h-[240px] sm:max-h-none">

                            <div class="caption">
                                Suasana pembelajaran aktif di SMA Prestasi Prima
                            </div>
                        </div>
                    @endfor

                </div>
            </div>

            {{-- Desktop Next --}}
            <button onclick="nextSlide()"
                class="nav-out hidden md:flex">
                &gt;
            </button>
        </div>

        {{-- ================= PAGINATION ================= --}}
        <div id="galleryDots" class="flex justify-center mt-8 gap-3">
            @for ($i = 0; $i < $totalSlides; $i++)
                <span class="dot {{ $i === 0 ? 'active' : '' }}"></span>
            @endfor
        </div>

    </div>
</section>

{{-- ================= STYLES ================= --}}
<style>
    /* Caption */
    .caption {
        position: absolute;
        left: .75rem;
        bottom: .75rem;
        background: rgba(0,0,0,.55);
        backdrop-filter: blur(6px);
        color: #fff;
        padding: .4rem .7rem;
        font-size: .7rem;
        border-radius: .6rem;
        max-width: 85%;
    }

    @media (min-width: 640px) {
        .caption {
            font-size: .85rem;
            padding: .5rem .9rem;
            max-width: 80%;
        }
    }

    /* Desktop Navigation Outside */
    .nav-out {
        width: 44px;
        height: 44px;
        border-radius: 9999px;
        background: white;
        color: #4c1d95;
        font-size: 1.5rem;
        font-weight: 600;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(0,0,0,.15);
        transition: all .3s ease;
    }

    .nav-out:hover {
        background: #7c3aed;
        color: white;
        transform: scale(1.1);
    }

    /* Pagination */
    .dot {
        width: 10px;
        height: 10px;
        background: #d1d5db;
        border-radius: 9999px;
        cursor: pointer;
        transition: all .3s ease;
    }

    .dot.active {
        width: 26px;
        background: #7c3aed;
    }

    #galleryTrack {
        touch-action: pan-y;
        user-select: none;
        will-change: transform;
    }

</style>

{{-- ================= SCRIPT (SWIPE + DRAG) ================= --}}
<script>
    const track = document.getElementById('galleryTrack');
    const dots = document.querySelectorAll('#galleryDots .dot');
    const totalSlides = dots.length;

    let currentSlide = 0;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let isDragging = false;

    function setPosition() {
        track.style.transform = `translateX(${currentTranslate}px)`;
    }

    function updateSlide() {
        currentTranslate = -currentSlide * track.clientWidth;
        prevTranslate = currentTranslate;
        track.style.transition = 'transform .45s ease';
        setPosition();

        dots.forEach((dot, i) =>
            dot.classList.toggle('active', i === currentSlide)
        );
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlide();
    }

    /* ================= DRAG & SWIPE ================= */

    track.addEventListener('pointerdown', e => {
        startX = e.clientX;
        isDragging = true;
        track.style.transition = 'none';
        track.setPointerCapture(e.pointerId);
        track.classList.add('grabbing');
    });

    track.addEventListener('pointermove', e => {
        if (!isDragging) return;
        const diff = e.clientX - startX;
        currentTranslate = prevTranslate + diff;
        setPosition();
    });

    track.addEventListener('pointerup', e => {
        track.releasePointerCapture(e.pointerId);
        isDragging = false;
        track.classList.remove('grabbing');

        const movedBy = currentTranslate - prevTranslate;

        if (movedBy < -80) nextSlide();
        else if (movedBy > 80) prevSlide();
        else updateSlide();
    });

    track.addEventListener('pointerleave', () => {
        if (!isDragging) return;
        isDragging = false;
        updateSlide();
    });

    /* ================= DOT CLICK ================= */

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            currentSlide = i;
            updateSlide();
        });
    });

    window.addEventListener('resize', updateSlide);
</script>
