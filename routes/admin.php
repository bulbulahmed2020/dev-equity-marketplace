<?php
Route::group(['as'=>'admin::','prefix'=>'cpanel/admin','middleware' => ['web','AdminMiddleWare','revalidate']], function () {

    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\Dashboard\DashboardController@dashboard']);
    Route::get('changePassForm', ['as' => 'changePassForm', 'uses' => 'Admin\AdminController@changePassForm']);
    Route::post('ChangePass', ['as' => 'ChangePass', 'uses' => 'Admin\AdminController@ChangePass']);
    Route::get('profile', ['as' => 'profile', 'uses' => 'Admin\AdminController@profile']);
    Route::post('update-profile', ['as' => 'updateProfile', 'uses' => 'Admin\AdminController@updateProfile']);

    /* Users route start*/
    Route::get('manage-user', ['as'=>'manageUser' ,'uses'=>'Admin\User\UserController@index']);
    Route::get('add-user', ['as' => 'addUser', 'uses' => 'Admin\User\UserController@addUser']);
    Route::post('save-user', ['as' => 'saveUser', 'uses' => 'Admin\User\UserController@saveUser']);
    Route::get('edit-user-form/{id}', ['as' => 'editUserForm', 'uses' => 'Admin\User\UserController@editUserForm']);
    Route::post('edit-user', ['as' => 'editUser', 'uses' => 'Admin\User\UserController@editUser']);
    Route::get('del-user/{id}', ['as' => 'delUser', 'uses' => 'Admin\User\UserController@delUser']);
    Route::post('active-inactive-user/', ['as' => 'active_inactive_user', 'uses' => 'Admin\User\UserController@active_inactive_user']);
    /* Users route end*/


    /*
        /*Page Content*/
    Route::get('page', ['as' => 'showPage','uses' => 'Admin\PageController@index']);
    Route::get('page-new', ['as' => 'newPage','uses' => 'Admin\PageController@create']);
    Route::post('page-save', ['as' => 'savePage','uses' => 'Admin\PageController@store']);   
    Route::get('page-edit/{id}', ['as' => 'pageEdit','uses' => 'Admin\PageController@edit']);
    Route::get('page-delete/{id}', ['as' => 'pageDelete','uses' => 'Admin\PageController@delete']);
    Route::post('page-update', ['as' => 'pageUpdate','uses' => 'Admin\PageController@update']);


    Route::get('company-member', ['as' => 'company-member','uses' => 'Admin\AboutController@index']);
    Route::get('company-member-new', ['as' => 'company-member-new','uses' => 'Admin\AboutController@create']);
    Route::post('company-member-save', ['as' => 'company-member-save','uses' => 'Admin\AboutController@store']);   
    Route::get('company-member-edit/{id}', ['as' => 'company-member-edit','uses' => 'Admin\AboutController@edit']);
    Route::get('company-member-delete/{id}', ['as' => 'company-member-delete','uses' => 'Admin\AboutController@delete']);
    Route::post('company-member-update', ['as' => 'company-member-update','uses' => 'Admin\AboutController@update']);




 Route::get('contact', ['as' => 'contactPage','uses' => 'Admin\ContactController@index']);


    /*About Content*/
    Route::get('about-index', ['as' => 'about_index','uses' => 'Admin\AboutController@about_index']);
   // Route::get('about-add', ['as' => 'about_add','uses' => 'Admin\AboutController@about_add']);
    //Route::post('about-save', ['as' => 'about_save','uses' => 'Admin\AboutController@about_save']);
    Route::get('about-edit/{id}', ['as' => 'about_edit','uses' => 'Admin\AboutController@about_edit']);
    Route::post('about-update/{id}', ['as' => 'about_update','uses' => 'Admin\AboutController@about_update']);
    //Route::get('about-delete/{id}', ['as' => 'about_delete','uses' => 'Admin\AboutController@about_delete']);

    /*About Process*/
    Route::get('process-index', ['as' => 'process_index','uses' => 'Admin\AboutController@process_index']);
    Route::get('process-edit/{id}', ['as' => 'process_edit','uses' => 'Admin\AboutController@process_edit']);
    Route::post('process-update/{id}', ['as' => 'process_update','uses' => 'Admin\AboutController@process_update']);

    /*Executive Team*/
    Route::get('team-index', ['as' => 'team_index','uses' => 'Admin\AboutController@team_index']);
    Route::get('team-add', ['as' => 'team_add','uses' => 'Admin\AboutController@team_add']);
    Route::post('team-save', ['as' => 'team_save','uses' => 'Admin\AboutController@team_save']);
    Route::get('team-edit/{id}', ['as' => 'team_edit','uses' => 'Admin\AboutController@team_edit']);
    Route::post('team-update/{id}', ['as' => 'team_update','uses' => 'Admin\AboutController@team_update']);
    Route::get('team-delete/{id}', ['as' => 'team_delete','uses' => 'Admin\AboutController@team_delete']);

    /*Service route*/
    Route::get('service-index', ['as' => 'service_index','uses' => 'Admin\ServiceController@service_index']);
    //Route::get('service-add', ['as' => 'service_add','uses' => 'Admin\ServiceController@service_add']);
    //Route::post('service-save', ['as' => 'service_save','uses' => 'Admin\ServiceController@service_save']);
    Route::get('service-edit/{id}', ['as' => 'service_edit','uses' => 'Admin\ServiceController@service_edit']);
    Route::post('service-update/{id}', ['as' => 'service_update','uses' => 'Admin\ServiceController@service_update']);
    Route::post('active-inactive-service', ['as' => 'active_inactive_service','uses' => 'Admin\ServiceController@active_inactive_service']);

    /*Project route*/
    Route::get('project-index', ['as' => 'project_index','uses' => 'Admin\ProjectController@project_index']);
    Route::get('project-add', ['as' => 'project_add','uses' => 'Admin\ProjectController@project_add']);
    Route::post('project-save', ['as' => 'project_save','uses' => 'Admin\ProjectController@project_save']);
    Route::get('project-edit/{id}', ['as' => 'project_edit','uses' => 'Admin\ProjectController@project_edit']);
    Route::post('project-update/{id}', ['as' => 'project_update','uses' => 'Admin\ProjectController@project_update']);
    Route::get('project-delete/{id}', ['as' => 'project_delete','uses' => 'Admin\ProjectController@project_delete']);
    Route::post('active-inactive-project', ['as' => 'active_inactive_project','uses' => 'Admin\ProjectController@active_inactive_project']);

    /*Gallery route*/
    Route::get('gallery-index', ['as' => 'gallery_index','uses' => 'Admin\GalleryController@gallery_index']);
    Route::get('gallery-add', ['as' => 'gallery_add','uses' => 'Admin\GalleryController@gallery_add']);
    Route::post('gallery-save', ['as' => 'gallery_save','uses' => 'Admin\GalleryController@gallery_save']);
    Route::get('gallery-edit/{id}', ['as' => 'gallery_edit','uses' => 'Admin\GalleryController@gallery_edit']);
    Route::post('gallery-update/{id}', ['as' => 'gallery_update','uses' => 'Admin\GalleryController@gallery_update']);
    Route::get('gallery-delete/{id}', ['as' => 'gallery_delete','uses' => 'Admin\GalleryController@gallery_delete']);

    /*Gallery route*/
    Route::get('comp-project-index', ['as' => 'comp_project_index','uses' => 'Admin\CompProjectController@comp_project_index']);
    Route::get('comp-project-add', ['as' => 'comp_project_add','uses' => 'Admin\CompProjectController@comp_project_add']);
    Route::post('comp-project-save', ['as' => 'comp_project_save','uses' => 'Admin\CompProjectController@comp_project_save']);
    Route::get('comp-project-edit/{id}', ['as' => 'comp_project_edit','uses' => 'Admin\CompProjectController@comp_project_edit']);
    Route::post('comp-project-update/{id}', ['as' => 'comp_project_update','uses' => 'Admin\CompProjectController@comp_project_update']);
    Route::get('comp-project-delete/{id}', ['as' => 'comp_project_delete','uses' => 'Admin\CompProjectController@comp_project_delete']);

    /*News route*/
    Route::get('news-index', ['as' => 'news_index','uses' => 'Admin\NewsController@news_index']);
    Route::get('news-add', ['as' => 'news_add','uses' => 'Admin\NewsController@news_add']);
    Route::post('news-save', ['as' => 'news_save','uses' => 'Admin\NewsController@news_save']);
    Route::get('news-edit/{id}', ['as' => 'news_edit','uses' => 'Admin\NewsController@news_edit']);
    Route::post('news-update/{id}', ['as' => 'news_update','uses' => 'Admin\NewsController@news_update']);
    Route::get('news-delete/{id}', ['as' => 'news_delete','uses' => 'Admin\NewsController@news_delete']);

    /*Get In Touch*/

    Route::get('get-in-touch-index',['as' => 'get_in_touch_index','uses' => 'Admin\ContactController@get_in_touch_index']);
    Route::get('get-in-touch-edit/{id}',['as' => 'get_in_touch_edit','uses' => 'Admin\ContactController@get_in_touch_edit']);
    Route::get('get-in-touch-delete/{id}',['as' => 'get_in_touch_delete','uses' => 'Admin\ContactController@get_in_touch_delete']);

    /*Request A Quote*/

    Route::get('request-a-quote-index',['as' => 'request_a_quote_index','uses' => 'Admin\ContactController@request_a_quote_index']);
    Route::get('request-a-quote-edit/{id}',['as' => 'request_a_quote_edit','uses' => 'Admin\ContactController@request_a_quote_edit']);
    Route::get('request-a-quote-delete/{id}',['as' => 'request_a_quote_delete','uses' => 'Admin\ContactController@request_a_quote_delete']);

    /*Make a Enquiry*/

    Route::get('make-an-enquiry-index',['as' => 'make_an_enquiry_index','uses' => 'Admin\ContactController@make_an_enquiry_index']);
    Route::get('make-an-enquiry-edit/{id}',['as' => 'make_an_enquiry_edit','uses' => 'Admin\ContactController@make_an_enquiry_edit']);
    Route::get('make-an-enquiry-delete/{id}',['as' => 'make_an_enquiry_delete','uses' => 'Admin\ContactController@make_an_enquiry_delete']);

    /*Feedback*/

    Route::get('feedback-index',['as' => 'feedback_index','uses' => 'Admin\ContactController@feedback_index']);
    Route::get('feedback-edit/{id}',['as' => 'feedback_edit','uses' => 'Admin\ContactController@feedback_edit']);
    Route::get('feedback-delete/{id}',['as' => 'feedback_delete','uses' => 'Admin\ContactController@feedback_delete']);

    /*Web Info*/
    Route::get('webinfo-index', ['as' => 'webinfo_index','uses' => 'Admin\PageController@webinfo_index']);
    Route::get('webinfo-edit/{id}', ['as' => 'webinfo_edit','uses' => 'Admin\PageController@webinfo_edit']);
    Route::post('webinfo-update/{id}', ['as' => 'webinfo_update','uses' => 'Admin\PageController@webinfo_update']);

    /*home page New space*/
    Route::get('space-index', ['as' => 'space_index','uses' => 'Admin\NewSpaceController@space_index']);
    Route::get('space-add', ['as' => 'space_add','uses' => 'Admin\NewSpaceController@space_add']);
    Route::post('space-save', ['as' => 'space_save','uses' => 'Admin\NewSpaceController@space_save']);
    Route::get('space-edit/{id}', ['as' => 'space_edit','uses' => 'Admin\NewSpaceController@space_edit']);
    Route::post('space-update/{id}', ['as' => 'space_update','uses' => 'Admin\NewSpaceController@space_update']);
    Route::get('space-delete/{id}', ['as' => 'space_delete','uses' => 'Admin\NewSpaceController@space_delete']);

    /*Career Route*/
    Route::get('career-index', ['as' => 'career_index','uses' => 'Admin\CareerController@career_index']);
    Route::get('career-add', ['as' => 'career_add','uses' => 'Admin\CareerController@career_add']);
    Route::post('career-save', ['as' => 'career_save','uses' => 'Admin\CareerController@career_save']);
    Route::get('career-edit/{id}', ['as' => 'career_edit','uses' => 'Admin\CareerController@career_edit']);
    Route::post('career-update/{id}', ['as' => 'career_update','uses' => 'Admin\CareerController@career_update']);
    Route::get('career-delete/{id}', ['as' => 'career_delete','uses' => 'Admin\CareerController@career_delete']);

    /*submit form*/
    Route::get('submit-index', ['as' => 'submit_index','uses' => 'Admin\CareerController@submit_index']);
    //Route::get('submit-add', ['as' => 'career_add','uses' => 'Admin\CareerController@career_add']);
    //Route::post('career-save', ['as' => 'career_save','uses' => 'Admin\CareerController@career_save']);
    Route::get('submit-view/{id}', ['as' => 'submit_view','uses' => 'Admin\CareerController@submit_view']);
    //Route::post('career-update/{id}', ['as' => 'career_update','uses' => 'Admin\CareerController@career_update']);
    Route::get('submitdelete/{id}', ['as' => 'submitdelete','uses' => 'Admin\CareerController@submitdelete']);



});