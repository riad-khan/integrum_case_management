{{-- -------------------- The default card (white) -------------------- --}}
@if ($viewType == 'default')
    @if ($from_id != $to_id)
        <div class="ms-chat-bubble ms-chat-message ms-chat-incoming media clearfix">
            <div class="ms-chat-status ms-status-online ms-chat-img">
                <img src="http://127.0.0.1:8000/admin/assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round"
                    alt="people">
            </div>
            <div class="media-body">
                <div class="ms-chat-text">
                    <p> {!! $message == null && $attachment != null && @$attachment[2] != 'file' ? $attachment[1] : nl2br($message) !!}

                        @if (@$attachment[2] == 'file')
                            <a href="{{ route(config('chatify.attachments.download_route_name'), ['fileName' => $attachment[0]]) }}"
                                style="color: #595959;" class="file-download">
                                <span class="fas fa-file"></span> {{ $attachment[1] }}</a>
                        @endif
                    </p>

                </div>
                <p class="ms-chat-time">{{ $time }}</p>
            </div>
        </div>
    @endif
@endif



{{-- -------------------- Sender card (owner) -------------------- --}}
@if ($viewType == 'sender')


    <div style="padding: 0" class="ms-panel-body ms-scrollable ps" title="{{ $fullTime }}"
        data-id="{{ $id }}">



        <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
            <div class="ms-chat-status ms-status-online ms-chat-img">
                <img src="http://127.0.0.1:8000/admin/assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round"
                    alt="people">
            </div>
            <div class="media-body">
                <div class="ms-chat-text">
                    <p>
                        {!! $message == null && $attachment != null && @$attachment[2] != 'file' ? $attachment[1] : nl2br($message) !!}
                        @if (@$attachment[2] == 'file')
                            <a href="{{ route(config('chatify.attachments.download_route_name'), ['fileName' => $attachment[0]]) }}"
                                class="file-download">
                                <span class="fas fa-file"></span> {{ $attachment[1] }}</a>
                        @endif
                    </p>
                </div>
                <p class="ms-chat-time">{{ $time }}</p>

            </div>
        </div>
    </div>
@endif
