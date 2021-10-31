<?php

//sub categories    international
Route::post('/addcountry', 'backend\InternationalController@store')->name('addcountry');
Route::get('/GetInternational', 'backend\InternationalController@Index')->name('GetInternational');
Route::get('/viewinternational/{name}', 'backend\InternationalController@View')->name('ShowInter');
Route::post('/updateinternational/{name}', 'backend\InternationalController@update')->name('updateinter');
Route::get('/DeleteInternational/{id}', 'backend\InternationalController@Delete')->name('deleteinternational');
Route::post('/selectedInternational/removeitems', 'backend\InternationalController@removeitems')->name('removeitems');
Route::post('/International/changestatus', 'backend\InternationalController@ChangStatus')->name('InternationalChangStatus');
// sub categories bangladesh
Route::post('/addbangladesh', 'backend\BangladeshController@store')->name('addcountry');
Route::get('/GetBangladesh', 'backend\BangladeshController@Index')->name('GetInternational');
Route::get('/viewbangladesh/{name}', 'backend\BangladeshController@View')->name('ShowInter');
Route::post('/UpdateBangladesh/{name}', 'backend\BangladeshController@update')->name('updateinter');
Route::get('/DeleteBangladesh/{id}', 'backend\BangladeshController@Delete')->name('deleteinternational');
Route::post('/selectedBangladesh/removeitems', 'backend\BangladeshController@removeitems')->name('removeitems');
Route::post('/Bangladesh/changestatus', 'backend\BangladeshController@ChangStatus')->name('InternationalChangStatus');

// sub categories Jobs
Route::post('/addjobs', 'backend\JobController@store')->name('addjobs');
Route::get('/GetJobs', 'backend\JobController@Index')->name('GetJobs');
Route::get('/viewjobs/{name}', 'backend\JobController@View')->name('ShowJobs');
Route::post('/updatejobs/{name}', 'backend\JobController@update')->name('updateJobs');
Route::get('/DeleteJobs/{id}', 'backend\JobController@Delete')->name('deleteJobs');
Route::post('/selectedJobs/removeitems', 'backend\JobController@removeitems')->name('removeitems');
Route::post('/Jobs/changestatus', 'backend\JobController@ChangStatus')->name('JobsChangStatus');
// sub categories District
Route::post('/adddistrict', 'backend\DistrictController@store')->name('adddistrict');
Route::get('/GetDistrict', 'backend\DistrictController@Index')->name('GetDistrict');
//Route::get('/GetActiveDistrict', 'backend\DistrictController@ActiveDistrict')->name('GetActiveDistrict');
Route::get('/viewdistrict/{name}', 'backend\DistrictController@View')->name('ShowDistrict');
Route::post('/updatedistrict/{name}', 'backend\DistrictController@update')->name('updateDistrict');
Route::get('/DeleteDistrict/{id}', 'backend\DistrictController@Delete')->name('deleteDistrict');
Route::post('/selectedDistrict/removeitems', 'backend\DistrictController@removeitems')->name('removeitems');
Route::post('/District/changestatus', 'backend\DistrictController@ChangStatus')->name('DistrictChangStatus');
// sub categories   Subdistrict
Route::post('/addsubdistrict', 'backend\SubdistrictController@store')->name('addSubdistrict');
Route::get('/GetSubdistrict', 'backend\SubdistrictController@Index')->name('GetSubdistrict');
//Route::get('/GetActiveSubdistrict', 'backend\SubdistrictController@ActiveSubdistrict')->name('GetActiveSubdistrict');
Route::get('/viewsubdistrict/{name}', 'backend\SubdistrictController@View')->name('ShowSubdistrict');
Route::post('/updatesubdistrict/{name}', 'backend\SubdistrictController@update')->name('updateSubdistrict');
Route::get('/DeleteSubdistrict/{id}', 'backend\SubdistrictController@Delete')->name('deleteSubdistrict');
Route::post('/selectedSubdistrict/removeitems', 'backend\SubdistrictController@removeitems')->name('removeitems');
Route::post('/Subdistrict/changestatus', 'backend\SubdistrictController@ChangStatus')->name('SubdistrictChangStatus');
// sub categories Business
Route::post('/addbusiness', 'backend\BusinessController@store')->name('addbusiness');
Route::get('/GetBusiness', 'backend\BusinessController@Index')->name('Getbusiness');
Route::get('/viewbusiness/{name}', 'backend\BusinessController@View')->name('Showbusiness');
Route::post('/updatebusiness/{name}', 'backend\BusinessController@update')->name('updatebusiness');
Route::get('/DeleteBusiness/{id}', 'backend\BusinessController@Delete')->name('deletebusiness');
Route::post('/selectedBusiness/removeitems', 'backend\BusinessController@removeitems')->name('removeitems');
Route::post('/Business/changestatus', 'backend\BusinessController@ChangStatus')->name('businessChangStatus');
// sub categories Sports
Route::post('/addsports', 'backend\SportsController@store')->name('addsports');
Route::get('/GetSports', 'backend\SportsController@Index')->name('Getsports');
Route::get('/viewsports/{name}', 'backend\SportsController@View')->name('ShowSports');
Route::post('/updatesports/{name}', 'backend\SportsController@update')->name('updateSports');
Route::get('/DeleteSports/{id}', 'backend\SportsController@Delete')->name('deleteSports');
Route::post('/selectedSports/removeitems', 'backend\SportsController@removeitems')->name('removeitems');
Route::post('/Sports/changestatus', 'backend\SportsController@ChangStatus')->name('SportsChangStatus');
// sub categories Entertainment
Route::post('/addentertainment', 'backend\EntertainmentController@store')->name('addentertainment');
Route::get('/GetEntertainment', 'backend\EntertainmentController@Index')->name('Getentertainment');
Route::get('/viewentertainment/{name}', 'backend\EntertainmentController@View')->name('Showentertainment');
Route::post('/updateentertainment/{name}', 'backend\EntertainmentController@update')->name('updateentertainment');
Route::get('/DeleteEntertainment/{id}', 'backend\EntertainmentController@Delete')->name('deleteentertainment');
Route::post('/selectedEntertainment/removeitems', 'backend\EntertainmentController@removeitems')->name('removeitems');
Route::post('/Entertainment/changestatus', 'backend\EntertainmentController@ChangStatus')->name('entertainmentChangStatus');
// sub categories Lifestyle   lifestyle
Route::post('/addlifestyle', 'backend\LifestyleController@store')->name('addlifestyle');
Route::get('/GetLifestyle', 'backend\LifestyleController@Index')->name('GetLifestyle');
Route::get('/viewlifestyle/{name}', 'backend\LifestyleController@View')->name('viewlifestyle');
Route::post('/updatelifestyle/{name}', 'backend\LifestyleController@update')->name('updatelifestyle');
Route::get('/DeleteLifestyle/{id}', 'backend\LifestyleController@Delete')->name('DeleteLifestyle');
Route::post('/selectedLifestyle/removeitems', 'backend\LifestyleController@removeitems')->name('removeitems');
Route::post('/Lifestyle/changestatus', 'backend\LifestyleController@ChangStatus')->name('LifestyleChangStatus');
// sub categories    Health
Route::post('/addhealth', 'backend\HealthController@store')->name('addhealth');
Route::get('/GetHealth', 'backend\HealthController@Index')->name('GetHealth');
Route::get('/viewhealth/{name}', 'backend\HealthController@View')->name('viewhealth');
Route::post('/updatehealth/{name}', 'backend\HealthController@update')->name('updatehealth');
Route::get('/DeleteHealth/{id}', 'backend\HealthController@Delete')->name('DeleteHealth');
Route::post('/selectedHealth/removeitems', 'backend\HealthController@removeitems')->name('removeitems');
Route::post('/Health/changestatus', 'backend\HealthController@ChangStatus')->name('HealthChangStatus');
// sub categories    Religion religion  ReligionController
Route::post('/addreligion', 'backend\ReligionController@store')->name('addreligion');
Route::get('/GetReligion', 'backend\ReligionController@Index')->name('GetReligion');
Route::get('/viewreligion/{name}', 'backend\ReligionController@View')->name('viewreligion');
Route::post('/updatereligion/{name}', 'backend\ReligionController@update')->name('updatereligion');
Route::get('/DeleteReligion/{id}', 'backend\ReligionController@Delete')->name('DeleteReligion');
Route::post('/selectedReligion/removeitems', 'backend\ReligionController@removeitems')->name('removeitems');
Route::post('/Religion/changestatus', 'backend\ReligionController@ChangStatus')->name('ReligionChangStatus');
// sub categories   Science
Route::post('/addscience', 'backend\ScienceController@store')->name('addScience');
Route::get('/GetScience', 'backend\ScienceController@Index')->name('GetScience');
Route::get('/viewscience/{name}', 'backend\ScienceController@View')->name('viewScience');
Route::post('/updatescience/{name}', 'backend\ScienceController@update')->name('updateScience');
Route::get('/DeleteScience/{id}', 'backend\ScienceController@Delete')->name('DeleteScience');
Route::post('/selectedScience/removeitems', 'backend\ScienceController@removeitems')->name('removeitems');
Route::post('/Science/changestatus', 'backend\ScienceController@ChangStatus')->name('ScienceChangStatus');
// sub categories   Education
Route::post('/addeducation', 'backend\EducationController@store')->name('addEducation');
Route::get('/GetEducation', 'backend\EducationController@Index')->name('GetEducation');
Route::get('/vieweducation/{name}', 'backend\EducationController@View')->name('viewEducation');
Route::post('/updateeducation/{name}', 'backend\EducationController@update')->name('updateEducation');
Route::get('/DeleteEducation/{id}', 'backend\EducationController@Delete')->name('DeleteEducation');
Route::post('/selectedEducation/removeitems', 'backend\EducationController@removeitems')->name('removeitems');
Route::post('/Education/changestatus', 'backend\EducationController@ChangStatus')->name('EducationChangStatus');
// sub categories   Life
Route::post('/addlife', 'backend\LifeController@store')->name('addLife');
Route::get('/GetLife', 'backend\LifeController@Index')->name('GetLife');
Route::get('/viewlife/{name}', 'backend\LifeController@View')->name('viewLife');
Route::post('/updatelife/{name}', 'backend\LifeController@update')->name('updateLife');
Route::get('/DeleteLife/{id}', 'backend\LifeController@Delete')->name('DeleteLife');
Route::post('/selectedLife/removeitems', 'backend\LifeController@removeitems')->name('removeitems');
Route::post('/Life/changestatus', 'backend\LifeController@ChangStatus')->name('LifeChangStatus');
// sub categories   Expatriate
Route::post('/addexpatriate', 'backend\ExpatriateController@store')->name('addExpatriate');
Route::get('/GetExpatriate', 'backend\ExpatriateController@Index')->name('GetExpatriate');
Route::get('/viewexpatriate/{name}', 'backend\ExpatriateController@View')->name('viewExpatriate');
Route::post('/updateexpatriate/{name}', 'backend\ExpatriateController@update')->name('updateExpatriate');
Route::get('/DeleteExpatriate/{id}', 'backend\ExpatriateController@Delete')->name('DeleteExpatriate');
Route::post('/selectedExpatriate/removeitems', 'backend\ExpatriateController@removeitems')->name('removeitems');
Route::post('/Expatriate/changestatus', 'backend\ExpatriateController@ChangStatus')->name('ExpatriateChangStatus');
// sub categories   Opinion
Route::post('/addopinion', 'backend\OpinionController@store')->name('addOpinion');
Route::get('/GetOpinion', 'backend\OpinionController@Index')->name('GetOpinion');
Route::get('/viewopinion/{name}', 'backend\OpinionController@View')->name('viewOpinion');
Route::post('/updateopinion/{name}', 'backend\OpinionController@update')->name('updateOpinion');
Route::get('/DeleteOpinion/{id}', 'backend\OpinionController@Delete')->name('DeleteOpinion');
Route::post('/selectedOpinion/removeitems', 'backend\OpinionController@removeitems')->name('removeitems');
Route::post('/Opinion/changestatus', 'backend\OpinionController@ChangStatus')->name('OpinionChangStatus');
// sub categories   Photo
Route::post('/addphoto', 'backend\PhotoController@store')->name('addPhoto');
Route::get('/GetPhoto', 'backend\PhotoController@Index')->name('GetPhoto');
Route::get('/viewphoto/{name}', 'backend\PhotoController@View')->name('viewPhoto');
Route::post('/updatephoto/{name}', 'backend\PhotoController@update')->name('updatePhoto');
Route::get('/DeletePhoto/{id}', 'backend\PhotoController@Delete')->name('DeletePhoto');
Route::post('/selectedPhoto/removeitems', 'backend\PhotoController@removeitems')->name('removeitems');
Route::post('/Photo/changestatus', 'backend\PhotoController@ChangStatus')->name('PhotoChangStatus');
// sub categories Video
Route::post('/addvideo', 'backend\VideoController@store')->name('addVideo');
Route::get('/GetVideo', 'backend\VideoController@Index')->name('GetVideo');
Route::get('/viewvideo/{name}', 'backend\VideoController@View')->name('viewVideo');
Route::post('/updatevideo/{name}', 'backend\VideoController@update')->name('updateVideo');
Route::get('/DeleteVideo/{id}', 'backend\VideoController@Delete')->name('DeleteVideo');
Route::post('/selectedVideo/removeitems', 'backend\VideoController@removeitems')->name('removeitems');
Route::post('/Video/changestatus', 'backend\VideoController@ChangStatus')->name('VideoChangStatus');
// sub categories Feature
Route::post('/addfeature', 'backend\FeatureController@store')->name('addFeature');
Route::get('/GetFeature', 'backend\FeatureController@Index')->name('GetFeature');
Route::get('/viewfeature/{name}', 'backend\FeatureController@View')->name('viewFeature');
Route::post('/updatefeature/{name}', 'backend\FeatureController@update')->name('updateFeature');
Route::get('/DeleteFeature/{id}', 'backend\FeatureController@Delete')->name('DeleteFeature');
Route::post('/selectedFeature/removeitems', 'backend\FeatureController@removeitems')->name('removeitems');
Route::post('/Feature/changestatus', 'backend\FeatureController@ChangStatus')->name('FeatureChangStatus');

// Reporter Reporter reporter
Route::post('/addreporter', 'backend\ReporterController@store')->name('addReporter');
Route::get('/GetReporter', 'backend\ReporterController@Index')->name('GetReporter');
Route::get('/GetActiveDistrict', 'backend\ReporterController@ActiveDistrict')->name('GetActiveDistrict');
Route::get('/GetActiveSubdistrict', 'backend\ReporterController@ActiveSubdistrict')->name('GetActiveSubdistrict');
Route::get('/viewreporter/{name}', 'backend\ReporterController@View')->name('viewReporter');
Route::post('/updatereporter/{name}', 'backend\ReporterController@update')->name('updateReporter');
Route::get('/DeleteReporter/{id}', 'backend\ReporterController@Delete')->name('DeleteReporter');
Route::post('/selectedReporter/removeitems', 'backend\ReporterController@removeitems')->name('removeitems');
Route::post('/Reporter/changestatus', 'backend\ReporterController@ChangStatus')->name('ReporterChangStatus');

