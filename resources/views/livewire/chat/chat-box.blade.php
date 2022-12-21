<div>
    <div class="w-full mt-5 h-full flex flex-col gap-3 overflow-y-scroll px-5 min-h-screen absolute top-0 left-0 py-24">
        @if($selectedConversation)
        <div class="flex items-center justify-start">
            <div>
                <div class="px-3 py-2 bg-white shadow-3xl rounded-full">
                    <span>this is a text, too!</span>
                </div>
                <div class="flex w-full items-center justify-between gap-2 mt-2">
                    <span class="text-xs text-teal-400">3:21Am</span>
                    <span class="text-xs text-teal-400">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end">
            <div>
                <div class="px-3 py-2 bg-teal-400 text-white shadow-3xl rounded-full shadow-teal-400">
                    <span>this is text</span>
                </div>
                <div class="flex w-full items-center justify-between gap-2 mt-2">
                    <span class="text-xs text-teal-400">3:21Am</span>
                    <span class="text-xs text-teal-400">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                    </span>
                </div>
            </div>
        </div>
        @else
        <span>no conversation selected</span>
        @endif
    </div>
</div>
