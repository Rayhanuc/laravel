<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function createPost(){
        $post = new Post();
        $post->title = "Quick Red Fox";
        $post->content = "Jumps Over The Lazy Dog";
        $post->save();
        return $post;
    }
}
