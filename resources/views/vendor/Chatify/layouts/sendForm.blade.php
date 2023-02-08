<div class="messenger-sendCard" style="border-top: 0 ">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        
        <textarea readonly='readonly' name="message" class="m-send app-scroll" placeholder="Type a message.."></textarea>
        <label><span class="fas fa-paperclip"></span><input disabled='disabled' type="file" class="upload-attachment" name="file" accept=".{{implode(', .',config('chatify.attachments.allowed_images'))}}, .{{implode(', .',config('chatify.attachments.allowed_files'))}}" /></label>
        <button disabled='disabled'><span class="fas fa-paper-plane"></span></button>




        
    </form>

    {{-- <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        <div class="ms-chat-textbox" style="width: 100%">
            <ul class="ms-list-flex mb-0">
                <li class="ms-chat-vn"><i class="material-icons">mic</i> </li>
                <li class="ms-chat-input">
                    <input type="text" name="message"  class="msg-sent" placeholder="Enter Message"
                        value="">
                </li>
                <li class="ms-chat-text-controls ms-list-flex">
                    
                    <span> 
                        <label><span class="fas fa-paperclip"></span><input disabled='disabled' type="file" class="upload-attachment" name="file" accept=".{{implode(', .',config('chatify.attachments.allowed_images'))}}, .{{implode(', .',config('chatify.attachments.allowed_files'))}}" /></label>    
                    </span>
                    <span> <i class="material-icons">camera_alt</i> </span>
                </li>
            </ul>
        </div>
    </form> --}}
</div>
{{-- <div class="ms-panel-footer">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        <div class="ms-chat-textbox">
            <ul class="ms-list-flex mb-0">
                <li class="ms-chat-vn"><i class="material-icons">mic</i> </li>
                <li class="ms-chat-input">
                    <input type="text" name="message"  class="msg-sent" placeholder="Enter Message"
                        value="">
                </li>
                <li class="ms-chat-text-controls ms-list-flex">
                    
                    <span> <i class="material-icons">attach_file</i> </span>
                    <span> <i class="material-icons">camera_alt</i> </span>
                </li>
            </ul>
        </div>
    </form>
</div> --}}

<style>
    .messenger [type='text']:focus {
    outline: 0 ;
    border-color: #ffffff !important;
    border-color: #ffffff;
    box-shadow: 0 0 2px #ffffff;
}
</style>


