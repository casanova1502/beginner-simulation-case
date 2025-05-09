<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function sendComment(Request $request, $id)
    {
        $user = Auth::user();

        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->item_id = $id;
        $comment->description = $request->description;
        $comment->save();

        $item = Item::findOrFail($id);
        $comments = Comment::where('item_id', $id)->get();

        redirect()->route('item.show', ['id' => $id]);
    }
}
