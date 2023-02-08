<div class="m-header m-header-messaging">
    <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
        {{-- header back button, avatar and user name --}}
        <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
            <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
            <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
            </div>
            <a href="#" class="user-name">{{ config('chatify.name') }}</a>
        </div>
        {{-- header buttons --}}
        <nav class="m-header-right">
            <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
            <a href="/"><i class="fas fa-home"></i></a>
            <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
        </nav>
    </nav>
</div>


<div class="ms-panel-header">
    <div class="ms-chat-header justify-content-between">
        <div class="ms-chat-user-container media clearfix">
            <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                <img src="http://127.0.0.1:8000/admin/assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
            </div>
            <div class="media-body ms-chat-user-info mt-1">
                <h6>Heather Brown</h6>
                <span class="text-disabled fs-12">
                    Active Now
                </span>
            </div>
        </div>
        <ul class="ms-list ms-list-flex ms-chat-controls">
            <li data-toggle="tooltip" data-placement="top" title="Call"> <i class="material-icons">local_phone</i> </li>
            <li data-toggle="tooltip" data-placement="top" title="Video Call"> <i class="material-icons">videocam</i> </li>
            <li data-toggle="tooltip" data-placement="top" title="Add to Chat"> <i class="material-icons">person_add</i> </li>
        </ul>
    </div>
</div>

{{-- chat msg part --}}
<div class="ms-panel-body ms-scrollable ps">
    <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
        <div class="ms-chat-status ms-status-online ms-chat-img">
            <img src="http://127.0.0.1:8000/admin/assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round"
                alt="people">
        </div>
        <div class="media-body">
            <div class="ms-chat-text">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <p class="ms-chat-time">10:33 pm</p>
        </div>
    </div>
   
 
</div>

<div class="message-card" data-id="{{ $id }}">
    <p>{!! ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message) !!}
        <sub title="{{ $fullTime }}">{{ $time }}</sub>
        {{-- If attachment is a file --}}
        @if(@$attachment[2] == 'file')
        <a href="{{ route(config('chatify.attachments.download_route_name'), ['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download">
            <span class="fas fa-file"></span> {{$attachment[1]}}</a>
        @endif
    </p>
    {{-- If attachment is an image --}}
    @if(@$attachment[2] == 'image')
    <div class="image-file chat-image" style="width: 250px; height: 150px;background-image: url('{{ Chatify::getAttachmentUrl($attachment[0]) }}')">
    </div>
    @endif
</div>