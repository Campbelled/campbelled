@extends('layouts.master')

@section('content')
<?php foreach ($entries as $entry): ?>
    <article class="post">
        <a href="{{ $entry->url }}" class="image featured" target="_blank">
            <img src="{{ $entry->files->first()->path }}" alt=""/>
        </a>
        <footer>
            <ul class="actions">
            </ul>
            <ul class="stats">
                <li>{{ $entry->created_at->format('M d, Y') }}</li>
                <li style="display:none;">
                    <a href="#" class="icon fa-heart jsLikeEntry" data-id="{{ $entry->id }}">
                        {{ $entry->likes }}
                    </a>
                </li>
            </ul>
        </footer>
    </article>
<?php endforeach; ?>
@stop

@section('scripts')
    <script>
        $( document ).ready(function() {
            $('.jsLikeEntry').on('click', function (e) {
                e.preventDefault();
                var entryId = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('entry.like') }}',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'entryId': entryId
                    },
                    success: function(data) {
                    }
                });
            });
        });
    </script>
@stop
