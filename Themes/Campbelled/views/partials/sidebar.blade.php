<section id="sidebar" xmlns="http://www.w3.org/1999/html">
    <section id="intro">
        <header>
            <h2>{{ setting('core::site-name') }}</h2>
            <p>This site re-groups all friendly comments from Graham Campbell.</p>
        </header>
    </section>
    <section>
        <div class="mini-posts">
            <h2>Popular</h2>
            <?php foreach ($popularEntries as $popularEntry): ?>
                <article class="mini-post">
                    <header style="position: relative;">
                        <time class="published"> {{ $popularEntry->created_at->format('M d, Y') }}</time>
                        <a href="#" class="jsLikeEntry {{ $popularEntry->isLiked() ? 'liked' : '' }}" data-id="{{ $popularEntry->id }}"
                           style="position:absolute; top: 10px; right: 30px; font-size: .7em">
                            <i class="fa fa-heart"></i> {{ $popularEntry->likes->count() }}
                        </a>
                    </header>
                    <?php if ($image = $popularEntry->files->first()): ?>
                    <a href="{{ route('entry.show', $popularEntry->id) }}" class="image"><img src="{{ $image->path }}" alt="" /></a>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="blurb">
        <h2>About</h2>
        <p>
            This site was built to show how rude and inappropriate the replies are on the laravel repositories. With the hope that it will open the eyes of above mentioned author to take action, and make the community worthwhile. These kind of replies don't motivate people to contribute to the laravel framework, on the contrary.
            <br>
            Look at the <a href="https://github.com/symfony/symfony/pulls?q=is%3Apr+is%3Aclosed" target="_blank">closed Symfony pull-requests</a>, to get an idea of what a nice and welcoming community looks like.
        </p>
    </section>
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="fa-github"><span class="label">Github</span></a></li>
        </ul>
        <p class="copyright">&copy; Campbelled. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
    </section>
</section>
