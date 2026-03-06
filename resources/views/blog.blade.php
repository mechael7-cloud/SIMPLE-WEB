<x-page>
    <div class="journal">
        <form action="">
    <h1>JOURNAL</h1>
    <input type="text" placeholder="Search Journal">
    <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    </div>
    <div class="blog">
        <div class="log1">
            <form action="/form">
                <div class="log2">
                    <a href=""><img src="{{ asset('image/photo.5.jfif') }}" alt=""></a>
                    <button>category</button>
                </div>
            </form>
            <p class="p">12 Febuari 2026</p>
            <a href=""><h2>Judul blog</h2></a>
            <p id="tktk">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea officia voluptates quia exercitationem!</p>
            <a href="/read" class="read">READ MORE</a>
        </div>
        <div class="log1">
            <form action="/form">
                <a href="">
                <div class="log2">
                    <a href=""><img src="{{ asset('image/photo.6.jfif') }}" alt=""></a>
                    <button>category</button>
                </div>
            </form>
            <p class="p">12 Febuari 2026</p>
            <a href=""><h2>Judul blog</h2></a>
            <p id="tktk">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea officia voluptates quia exercitationem!</p>
            <a href="" class="read">READ MORE</a>
            </a>
        </div>
    </div>
    <div class="footer">
            <button>LOAD MORE BLOG</button>
        </div>
</x-page>