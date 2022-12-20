<div>    
    <div class="grid grid-cols-4">
        <div class="col-span-1" style="z-index: 99">
            <div class="min-h-screen p-5">
                {{-- user details:start --}}
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="rounded-full bg-gray-100 h-16 w-16 overflow-hidden">
                            <img src="{{ asset('assets/profile/user2.jpg') }}" alt="profile_image" class="w-full h-full object-cover">
                        </div>

                        <div class="flex flex-col">
                            <h3 class="text-teal-500 font-semibold">Yousef Jafari</h3>
                            <span class="text-gray-400 text-sm">senior developer</span>
                        </div>
                    </div>

                    <a href="#" class="text-teal-500">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                </div>
                {{-- user details:end --}}

                @livewire('chat.chat-list')
            </div>
        </div>
        <div class="col-span-2">
            <div class="min-h-screen bg-white p-5 relative flex flex-col">

                {{-- header:start --}}
                <div class="flex items-center justify-between bg-white" style="z-index: 99;">
                    <div class="flex items-center gap-3">
                        <div class="rounded-full bg-gray-100 h-14 w-14 overflow-hidden">
                            <img src="{{ asset('assets/profile/user.png') }}" alt="profile_image" class="w-full h-full object-cover">
                        </div>

                        <div class="flex flex-col">
                            <h3 class="text-gray-500 font-semibold">{{ auth()->user()->name }}</h3>
                        </div>

                        <span class="bg-green-400 w-3 h-3 rounded-full"></span>
                    </div>

                    <a href="#" class="text-teal-500">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                </div>
                {{-- header:end --}}

                @livewire('chat.chat-box')
    
                @livewire('chat.send-message')
            </div>
        </div>
        <div class="col-span-1"  style="z-index: 99">
            <div class="min-h-screen p-5">
                @livewire('chat.user-profile')
            </div>
        </div>
    </div>
</div>
