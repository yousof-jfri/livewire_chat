<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\User;
use App\Models\Message;

class CreateChat extends Component
{
    public function render()
    {
        $users = User::where('id', '!=', \Auth::user()->id)->get();
        return view('livewire.chat.create-chat', compact('users'));
    }

    public function checkConversation($user)
    {
        $conversation = Conversation::where('receiver_id', \Auth::user()->id)
            ->where('sender_id', $user)
            ->orWhere('receiver_id', $user)
            ->where('sender_id', \Auth::user()->id)
            ->get();

        if(count($conversation) == 0)
        {
            // dd('no conversation');

            $newConversation = Conversation::create([
                'receiver_id' => $user,
                'sender_id' => \Auth::user()->id,
                'last_time_message' => null,
            ]);

            $newMessage = Message::create([
                'conversation_id' => $newConversation->id,
                'sender_id' => \Auth::user()->id,
                'receiver_id' => $user,
                'message' => 'hello guys',
            ]);
            
            $newConversation->last_time_message = $newMessage->created_at;

            $newConversation->save();

            dd('save');
        }
         
        else if(count($conversation) > 0)
        {
            dd('conversation exists');
        }
    }
}
