<x-layout>
    <div style="height:40px;">&nbsp;</div>
    <div>
        <h1>Kenny Porterfield's Laravel Blog</h1>
        @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h2><small>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </small></h2>
            <div>
                <p><?= $post->excerpt ?></p>
            </div>
            @unless ($loop->last)
            <hr>
            @endif
        </article>
        @endforeach
    </div>
</x-layout>
