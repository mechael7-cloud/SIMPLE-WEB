<x-nav>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="header">
        <form action="/register" method="POST">
        <h1 class="text-3xl font-bold mb-4">Register</h1>
        <div class="email">
            <label for="email" >Username</label>
            <input type="text" name="email" id="email" autocomplete="off" placeholder="Username">
        </div>
        <div class="email">
            <label for="email" >Email</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="Email">
        </div>
        <div class="password">
            <label for="password" >Password</label>
            <input type="password" name="password" id="password" autocomplete="off" placeholder="Password">
        </div>
        <button type="submit"  >Register</button>
        </form>
    </div>
</x-nav>