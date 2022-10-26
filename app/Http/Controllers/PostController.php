<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{


    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
        return view('posts', [
            'title' => 'All Posts' . $title,
            // 'posts' => PostModel::all()
            'posts' => PostModel::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

        ]);
    }

    public function show(PostModel $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
