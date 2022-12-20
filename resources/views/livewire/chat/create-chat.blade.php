<div>
    <div class="flex w-full gap-3 flex-col">
        @foreach ($users as $user)
            
        <button wire:click="checkConversation({{ $user->id }})" class="w-full shadow-3xl rounded-xl px-3 py-2">
            <span>{{ $user->name }}</span>
        </button>
        @endforeach
    </div>

    <a href="{{ route('chat') }}">go to chat</a>
</div>
