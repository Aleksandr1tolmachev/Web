<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function indexAction(Request $request)
  {
    return view('index');
  }
  public function filmsAction(Request $request)
  {
    return view('films');
  }
  public function film1Action(Request $request)
  {
    return view('film1');
  }
  public function film2Action(Request $request)
  {
    return view('film2');
  }
  public function film3Action(Request $request)
  {
    return view('film3');
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
}
