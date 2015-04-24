@if(session()->has('flash_message'))
    <br />

    <div class="alert {{session()->has('flash_message_important') ? 'alert-danger' : 'alert-success'}}">

        @if(session()->has('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        @endif

        {{ session('flash_message') }}

    </div>
@endif