<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  /**
   * [showIndex method to show mainpage of site]
   * @return [view] [welcome]
   */
    public function showIndex(){
      return view('welcome');
    }

    public function showAboutUs(){
      return view('pages.aboutUs');
    }

    public function showOurServices(){
      return view('pages.ourServices');
    }

    public function showProjects(){
      return view('pages.Projects');
    }

    public function showContacts(){
      return view('pages.Contacts');
    }

    public function showWorkStages(){
      return view('pages.workStages');
    }
}
