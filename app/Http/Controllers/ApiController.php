<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use GuzzleHttp\Promise\RejectionException;

class ApiController extends Controller
{
  public function indexAction(Request $request)
  {
    return view('index',['films' => (new ArticleController())->show()]);
  }
  public function filmsAction(Request $request)
  {
    return view('films',['films' => (new ArticleController())->show()]);
  }
  public function film1Action(Request $request)
  {
    return view('film1',['films' => (new ArticleController())->show()]);
  }
  public function film2Action(Request $request)
  {
    return view('film2',['films' => (new ArticleController())->show()]);
  }
  public function film3Action(Request $request)
  {
    return view('film3',['films' => (new ArticleController())->show()]);
  }
  public function aboutAction(Request $request)
  {
    return view('about');
  }
  public function maintenanceAction(Request $request)
  {
    return view('maintenance');
  }
  public function contactsAction(Request $request)
  {
    return view('contacts');
  }
  public function getArticle(Request $request)
  {
    return (new ArticleController())->show() ;
  }
  public function registerAction(Request $request)
  {
    return view('register');
  }
  public function loginAction(Request $request)
  {
    return view('login');
  }
  public function search (Request $request)
  {
  $films = (new ArticleController())->search($request->search_field);
  if (is_null($films)){
    return "Не найдено";
  }
    return view('films',['films'=>$films]);
  }
}
