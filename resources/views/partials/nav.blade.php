<div class="links">
    <a href="/">Profile</a>
    <a href="/home">Home</a>
    <a href="/crud">Crud</a>
    <a href="/messages">Messages</a>

        @foreach ($pages as $page)
            <a href="/{{ $page->slug }}">{{ $page->title }}</a>
        @endforeach

    </div>