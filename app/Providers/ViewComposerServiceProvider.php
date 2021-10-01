<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->composeContacts();
    }

    private function composeContacts(){
      view()->composer('pages.Contacts', function ($view){
        $emails = \App\Models\Contact::where('type','email')->get();
        $phones = \App\Models\Contact::where('type','phone')->get();
        $socials = \App\Models\Contact::where('type','social')->get();
        $view->with(compact('emails','phones','socials'));
      });
    }

}
