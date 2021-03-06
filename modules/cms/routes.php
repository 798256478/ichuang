<?php

//Route::get('forum',function(){
////    require_once('./forum/install');
//    return redirect('http://www.shanjing.com/foru');
//});

/**
 * Register CMS routes before all user routes.
 */
App::before(function ($request) {
    /*
     * Extensibility
     */
    Event::fire('cms.beforeRoute');

    /*
     * The CMS module intercepts all URLs that were not
     * handled by the back-end modules.
     */
    Route::any('{slug}', 'Cms\Classes\CmsController@run')->where('slug', '(.*)?');

    /*
     * Extensibility
     */
    Event::fire('cms.route');
});
