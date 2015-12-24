@extends('layouts.master')

@section('styles')
    <style>
        .jsLikeEntry.liked {
            color: red;
        }
    </style>
@stop
@section('content')
    <article class="post" id="entry-{{ $entry->id }}">
        <header>
            <div class="title">
                <p><a href="{{ route('entry.show', $entry->id) }}">{{ $entry->repository }}</a></p>
            </div>
        </header>
        <a href="{{ $entry->url }}" class="image featured" target="_blank">
            <?php if ($image = $entry->files->first()): ?>
            <img src="{{ $image->path }}" alt=""/>
            <?php endif; ?>
        </a>
        <footer>
            <ul class="actions">
            </ul>
            <ul class="stats">
                <li>
                    <a href="#entry-{{ $entry->id }}">
                        {{ $entry->created_at->format('M d, Y') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="jsLikeEntry {{ $entry->isLiked() ? 'liked' : ''}}" data-id="{{ $entry->id }}">
                        <i class="fa fa-heart"></i> {{ $entry->likes->count() }}
                    </a>
                </li>
            </ul>
        </footer>
    </article>
@stop

@section('scripts')
    <script>
        $( document ).ready(function() {
            $.localScroll({
                target: 'body',
                hash: true
            });
            $('.jsLikeEntry').on('click', function (e) {
                e.preventDefault();
                var entryId = $(this).data('id'),
                        self = this;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('entry.like') }}',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'entryId': entryId
                    },
                    success: function(data) {
                        $(self).html('<i class="fa fa-heart"></i> ' + data);
                        $(self).toggleClass('liked');
                    }
                });
            });
        });
    </script>
@stop
