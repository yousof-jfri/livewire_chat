<?php

namespace App\Http\Livewire\Chat;

use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message;

class ChatList extends Component
{
    public $userId;
    public $conversations;
    public $receiverInstance;


    public function render()
    {
        return view('livewire.chat.chat-list');
    }

    public function mount()
    {
        $this->userId = \Auth::user()->id;

        $this->conversations = Conversation::where('receiver_id', $this->userId)
            ->orWhere('sender_id', $this->userId)
            ->get();
    }


    public function getChatUserInstance(Conversation $conversation, $request)
    {
        $this->userId = \Auth::user()->id;

        // get selected conversation
        if($conversation->sender_id == $this->userId)
        {
            $this->receiverInstance = User::firstWhere('id', $conversation->receiver_id);
        }else {
            $this->receiverInstance = User::firstWhere('id', $conversation->sender_id);
        }


        if(isset($request))
        {
            return $this->receiverInstance->$request;
        }
    }
}
