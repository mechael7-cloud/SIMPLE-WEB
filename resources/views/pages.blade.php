<x-page>
    <div class="news">
        <div class="news1">
            <h1 class="th1">{{ $page->judul }}</h1>
            <p class="th2">02/02/2026 |</p>
            <div class="news2">
                <img src="{{ asset('image/photo.5.jfif') }}" alt="">
            </div>    
            <p class="th3">{{ $page->isi }}</p>
            <div class="km">
                <a href="/blog">&laquo; Kembali </a>
            </div>
        </div>
    </div>
</x-page>