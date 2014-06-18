<?php

class SiteController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
     */

    public function getIndex(){
        // return "wordwrap";
        return View::make('sites.pages.index');
    }

    public function getAboutcompany(){
        return View::make('sites.pages.about_company');
    }

    public function getChairmanmessage(){
        return View::make('sites.pages.chairman_message');
    }

    public function getWhocanjoinus(){
        return View::make('sites.pages.who_can_join_us');
    }

    public function getSuccessplan(){
        return View::make('sites.pages.success_plan');
    }

    public function getBeyourboss (){
        return View::make('sites.pages.be_your_boss');
    }
    public function getDreamsgoals(){
        return View::make('sites.pages.dreams_goals');
    }
    public function getAboutindustry(){
        return View::make('sites.pages.about_industry');
    }
    public function getOurstrategy(){
        return View::make('sites.pages.our_strategy');
    }
    public function getCertifications(){
        return View::make('sites.pages.certifications');
    }
    public function getCodeofethics(){
        return View::make('sites.pages.code_of_ethics');
    }
    public function getPhotogallery(){
        return View::make('sites.pages.photo_gallery');
    }
    public function getOurdivisions(){
        return View::make('sites.pages.our_division');
    }
    public function getPackages(){
        return View::make('sites.pages.packages');
    }
    public function getProducts(){
        return View::make('sites.pages.products');
    }
    public function getIncentives(){
        return View::make('sites.pages.incentives');
    }
    public function getMonthlyincentives(){
        return View::make('sites.pages.monthly_incentives');
    }
    public function getArchivers(){
        return View::make('sites.pages.archivers');
    }
    public function getSeminars(){
        return View::make('sites.pages.seminars');
    }
    public function getCorporateoffice(){
        return View::make('sites.pages.corporate_office');
    }
    public function getHeadoffice(){
        return View::make('sites.pages.head_office');
    }
    public function getBranchoffice(){
        return View::make('sites.pages.branch_office');
    }
    public function getPatnaoffice(){
        return View::make('sites.pages.patna_office');
    }
    public function getTrainingcenter(){
        return View::make('sites.pages.training_center');
    }
}
