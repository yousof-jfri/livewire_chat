<div>
    <div class="mt-5">
        {{-- search box:start --}}
        <div class="w-full rounded-xl bg-white px-3 py-2 flex">
            <input type="text" class="w-full duration-150 border-none rounded-xl focus:border-gray-100" placeholder="search...">
        </div>
        {{-- search box:end --}}

        {{-- chat list:start --}}
        <div class="flex flex-col gap-2 mt-5">
            @foreach ($conversations as $conversation)
            <div class="w-full flex items-center justify-between cursor-pointer hover:bg-white duration-150 px-3 py-2 hover:pl-4 rounded-xl">
                <div class="flex items-center justify-start gap-2">
                    <div class="w-12 h-12 overflow-hidden rounded-full bg-gray-100">
                        <img src="{{ asset('assets/profile/livewire.png') }}" alt="user_profile" class="w-full h-full object-cover">
                    </div>

                    <div class="flex flex-col">
                        <span class="text-teal-600 font-semibold text-sm">{{ $this->getChatUserInstance($conversation, $name='name') }}</span>
                        <span class="text-gray-400 text-xs">{{ Str::limit($conversation->messages->last()->message, 20, '...') }}</span>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <span class="text-xs font-bold text-gray-400">{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans() }}</span>
                    <span class="text-white bg-teal-400 rounded-full h-5 w-5 text-xs flex items-center justify-center">
                        {{ count($conversation->messages) }}
                    </span>
                </div>
            </div>
            @endforeach

        </div>
        {{-- chat list:end --}}
    </div>
</div>
