<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class ChatBox extends Component
{
    public $selectedConversation;

    public $receiverInstance;
    
    public $messages;

    public $messages_count;

    public $paginateVar = 10;

    protected $listeners = ['loadConversation'];

    public function loadConversation(Conversation $conversation, User $receiver)
    {
        $this->selectedConversation = $conversation;

        $this->receiverInstance = $receiver;

        $this->messages_count = Message::where('conversation_id', $this->selectedConversation->id)
            ->count();

        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messages_count - $this->paginateVar)
            ->take($this->paginateVar)
            ->get();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }

    
}
