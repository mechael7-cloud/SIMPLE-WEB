<x-page>
    <div class="journal">
        <form action="">
    <h1>JURNAL</h1>
    <input type="text" placeholder="Search Journal">
    <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    </div>
    <div class="blog">
        @foreach ($pages as $page)
            
        
        <div class="log1">
            <form action="/pages">
                <div class="log2">
                    <a href=""><img src="{{ asset('image/photo.5.jfif') }}" alt=""></a>
                    <button>{{ $page->categorys->name }}</button>
                </div>
            </form>
            <p class="p">12 Febuari 2026</p>
            <a href="/pages"><h2>{{ $page->judul }}</h2></a>
            <p id="tktk">{{ $page->isi }}</p>
            <a href="/pages" class="read">READ MORE</a>
        </div>
        @endforeach

    <div class="footer">
            <button>LOAD MORE BLOG</button>
        </div>
</x-page>