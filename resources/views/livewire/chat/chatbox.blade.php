<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    @if ($selectedConversation)
    <div class="chatbox_header">
        <div class="return">
            <i class="bi bi-arrow-left"></i>
        </div>
        <div class="img_container">
            <img src="https://picsum.photos/id/{{ $receiverInstance->id}}/200/300" alt="">
        </div>
        <div class="name">
            {{ $receiverInstance->name }}
        </div>
        <div class="info">
            <div class="info_item">
                <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="info_item">
                <i class="bi bi-image"></i>
            </div>
            <div class="info_item">
                <i class="bi bi-info-circle"></i>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </div>

    <div class="chatbox_body">
        @foreach ($messages as $message)
        <div class="msg_body msg_body_receiver">
            {{$message->body}}
            <div class="msg_body_footer">
                <div class="date">
                    {{$message->created_at->format('m:i a')}}
                </div>
                <div class="read">
                    <i class="bi bi-check"></i>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="fs-4 text-center text-primary mt-5">
        No Conversation Selected
    </div>
    @endif

</div>
