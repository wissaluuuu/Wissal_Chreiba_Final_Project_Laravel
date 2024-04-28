<?php

namespace App\Providers;

use App\Models\Calendar;
use App\Models\Espace;
use App\Models\Project;
use App\Models\Tache;
use Illuminate\Console\View\Components\Task;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $user = User::all();
        
        $projects = Project::all();
        view()->share([
            "projects" => $projects,
        ]); 
        $taches = Tache::all();
        view()->share("taches", $taches );

        $users = User::all();
        view()->share("users", $users );
        $tachesParProjet = [];

        $taskks =Calendar::all();
        view()->share("taskks", $taskks );


        foreach ($projects as $project) {
      
            $tacheid = Tache::where('project_id', $project->id)->get();
            // $tachesParProjet[$project->id] = $taches;
            // dd($tacheid);
        }



        
    }

    
}
