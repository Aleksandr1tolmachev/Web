<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Article;
class ArticleController extends Controller
{
    public function show()
    {
      return Article::all();
    }

}
