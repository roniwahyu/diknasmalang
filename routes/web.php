<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	
	Route::get('', 'HomeController@index')->name('index');
	Route::get('home', 'HomeController@index')->name('home');




/* routes for Audits Controller */
	Route::get('audits', 'AuditsController@index')->name('audits.index');
	Route::get('audits/index/{filter?}/{filtervalue?}', 'AuditsController@index')->name('audits.index');	
	Route::get('audits/view/{rec_id}', 'AuditsController@view')->name('audits.view');	
	Route::get('audits/add', 'AuditsController@add')->name('audits.add');
	Route::post('audits/add', 'AuditsController@store')->name('audits.store');
		
	Route::any('audits/edit/{rec_id}', 'AuditsController@edit')->name('audits.edit');	
	Route::get('audits/delete/{rec_id}', 'AuditsController@delete');

/* routes for Audittrail Controller */
	Route::get('audittrail', 'AudittrailController@index')->name('audittrail.index');
	Route::get('audittrail/index/{filter?}/{filtervalue?}', 'AudittrailController@index')->name('audittrail.index');	
	Route::get('audittrail/view/{rec_id}', 'AudittrailController@view')->name('audittrail.view');	
	Route::get('audittrail/add', 'AudittrailController@add')->name('audittrail.add');
	Route::post('audittrail/add', 'AudittrailController@store')->name('audittrail.store');
		
	Route::any('audittrail/edit/{rec_id}', 'AudittrailController@edit')->name('audittrail.edit');	
	Route::get('audittrail/delete/{rec_id}', 'AudittrailController@delete');

/* routes for DataNonAsn2022Bkpsdm Controller */
	Route::get('datanonasn2022bkpsdm', 'DataNonAsn2022BkpsdmController@index')->name('datanonasn2022bkpsdm.index');
	Route::get('datanonasn2022bkpsdm/index/{filter?}/{filtervalue?}', 'DataNonAsn2022BkpsdmController@index')->name('datanonasn2022bkpsdm.index');	
	Route::get('datanonasn2022bkpsdm/view/{rec_id}', 'DataNonAsn2022BkpsdmController@view')->name('datanonasn2022bkpsdm.view');	
	Route::get('datanonasn2022bkpsdm/add', 'DataNonAsn2022BkpsdmController@add')->name('datanonasn2022bkpsdm.add');
	Route::post('datanonasn2022bkpsdm/add', 'DataNonAsn2022BkpsdmController@store')->name('datanonasn2022bkpsdm.store');
		
	Route::any('datanonasn2022bkpsdm/edit/{rec_id}', 'DataNonAsn2022BkpsdmController@edit')->name('datanonasn2022bkpsdm.edit');	
	Route::get('datanonasn2022bkpsdm/delete/{rec_id}', 'DataNonAsn2022BkpsdmController@delete');

/* routes for Groups Controller */
	Route::get('groups', 'GroupsController@index')->name('groups.index');
	Route::get('groups/index/{filter?}/{filtervalue?}', 'GroupsController@index')->name('groups.index');	
	Route::get('groups/view/{rec_id}', 'GroupsController@view')->name('groups.view');
	Route::get('groups/masterdetail/{rec_id}', 'GroupsController@masterDetail')->name('groups.masterdetail');	
	Route::get('groups/add', 'GroupsController@add')->name('groups.add');
	Route::post('groups/add', 'GroupsController@store')->name('groups.store');
		
	Route::any('groups/edit/{rec_id}', 'GroupsController@edit')->name('groups.edit');	
	Route::get('groups/delete/{rec_id}', 'GroupsController@delete');

/* routes for GroupsPermissions Controller */
	Route::get('groupspermissions', 'GroupsPermissionsController@index')->name('groupspermissions.index');
	Route::get('groupspermissions/index/{filter?}/{filtervalue?}', 'GroupsPermissionsController@index')->name('groupspermissions.index');	
	Route::get('groupspermissions/view/{rec_id}', 'GroupsPermissionsController@view')->name('groupspermissions.view');	
	Route::get('groupspermissions/add', 'GroupsPermissionsController@add')->name('groupspermissions.add');
	Route::post('groupspermissions/add', 'GroupsPermissionsController@store')->name('groupspermissions.store');
		
	Route::any('groupspermissions/edit/{rec_id}', 'GroupsPermissionsController@edit')->name('groupspermissions.edit');	
	Route::get('groupspermissions/delete/{rec_id}', 'GroupsPermissionsController@delete');

/* routes for LoginAttempts Controller */
	Route::get('loginattempts', 'LoginAttemptsController@index')->name('loginattempts.index');
	Route::get('loginattempts/index/{filter?}/{filtervalue?}', 'LoginAttemptsController@index')->name('loginattempts.index');	
	Route::get('loginattempts/view/{rec_id}', 'LoginAttemptsController@view')->name('loginattempts.view');	
	Route::get('loginattempts/add', 'LoginAttemptsController@add')->name('loginattempts.add');
	Route::post('loginattempts/add', 'LoginAttemptsController@store')->name('loginattempts.store');
		
	Route::any('loginattempts/edit/{rec_id}', 'LoginAttemptsController@edit')->name('loginattempts.edit');	
	Route::get('loginattempts/delete/{rec_id}', 'LoginAttemptsController@delete');

/* routes for Logs Controller */
	Route::get('logs', 'LogsController@index')->name('logs.index');
	Route::get('logs/index/{filter?}/{filtervalue?}', 'LogsController@index')->name('logs.index');	
	Route::get('logs/view/{rec_id}', 'LogsController@view')->name('logs.view');	
	Route::get('logs/add', 'LogsController@add')->name('logs.add');
	Route::post('logs/add', 'LogsController@store')->name('logs.store');
		
	Route::any('logs/edit/{rec_id}', 'LogsController@edit')->name('logs.edit');	
	Route::get('logs/delete/{rec_id}', 'LogsController@delete');

/* routes for Masterdapodik Controller */
	Route::get('masterdapodik', 'MasterdapodikController@index')->name('masterdapodik.index');
	Route::get('masterdapodik/index/{filter?}/{filtervalue?}', 'MasterdapodikController@index')->name('masterdapodik.index');	
	Route::get('masterdapodik/view/{rec_id}', 'MasterdapodikController@view')->name('masterdapodik.view');	
	Route::get('masterdapodik/add', 'MasterdapodikController@add')->name('masterdapodik.add');
	Route::post('masterdapodik/add', 'MasterdapodikController@store')->name('masterdapodik.store');
		
	Route::any('masterdapodik/edit/{rec_id}', 'MasterdapodikController@edit')->name('masterdapodik.edit');	
	Route::get('masterdapodik/delete/{rec_id}', 'MasterdapodikController@delete');

/* routes for Namasekolah Controller */
	Route::get('namasekolah', 'NamasekolahController@index')->name('namasekolah.index');
	Route::get('namasekolah/index/{filter?}/{filtervalue?}', 'NamasekolahController@index')->name('namasekolah.index');	
	Route::get('namasekolah/view/{rec_id}', 'NamasekolahController@view')->name('namasekolah.view');	
	Route::get('namasekolah/add', 'NamasekolahController@add')->name('namasekolah.add');
	Route::post('namasekolah/add', 'NamasekolahController@store')->name('namasekolah.store');
		
	Route::any('namasekolah/edit/{rec_id}', 'NamasekolahController@edit')->name('namasekolah.edit');	
	Route::get('namasekolah/delete/{rec_id}', 'NamasekolahController@delete');

/* routes for Penganggaran2024 Controller */
	Route::get('penganggaran2024', 'Penganggaran2024Controller@index')->name('penganggaran2024.index');
	Route::get('penganggaran2024/index/{filter?}/{filtervalue?}', 'Penganggaran2024Controller@index')->name('penganggaran2024.index');	
	Route::get('penganggaran2024/view/{rec_id}', 'Penganggaran2024Controller@view')->name('penganggaran2024.view');	
	Route::get('penganggaran2024/add', 'Penganggaran2024Controller@add')->name('penganggaran2024.add');
	Route::post('penganggaran2024/add', 'Penganggaran2024Controller@store')->name('penganggaran2024.store');
		
	Route::any('penganggaran2024/edit/{rec_id}', 'Penganggaran2024Controller@edit')->name('penganggaran2024.edit');	
	Route::get('penganggaran2024/delete/{rec_id}', 'Penganggaran2024Controller@delete');

/* routes for Permissions Controller */
	Route::get('permissions', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index/{filter?}/{filtervalue?}', 'PermissionsController@index')->name('permissions.index');

/* routes for Role Controller */
	Route::get('role', 'RoleController@index')->name('role.index');
	Route::get('role/index/{filter?}/{filtervalue?}', 'RoleController@index')->name('role.index');	
	Route::get('role/view/{rec_id}', 'RoleController@view')->name('role.view');	
	Route::get('role/add', 'RoleController@add')->name('role.add');
	Route::post('role/add', 'RoleController@store')->name('role.store');
		
	Route::any('role/edit/{rec_id}', 'RoleController@edit')->name('role.edit');	
	Route::get('role/delete/{rec_id}', 'RoleController@delete');

/* routes for RolePermissions Controller */
	Route::get('rolepermissions', 'RolePermissionsController@index')->name('rolepermissions.index');
	Route::get('rolepermissions/index/{filter?}/{filtervalue?}', 'RolePermissionsController@index')->name('rolepermissions.index');	
	Route::get('rolepermissions/view/{rec_id}', 'RolePermissionsController@view')->name('rolepermissions.view');	
	Route::get('rolepermissions/add', 'RolePermissionsController@add')->name('rolepermissions.add');
	Route::post('rolepermissions/add', 'RolePermissionsController@store')->name('rolepermissions.store');
		
	Route::any('rolepermissions/edit/{rec_id}', 'RolePermissionsController@edit')->name('rolepermissions.edit');	
	Route::get('rolepermissions/delete/{rec_id}', 'RolePermissionsController@delete');

/* routes for Session Controller */
	Route::get('session', 'SessionController@index')->name('session.index');
	Route::get('session/index/{filter?}/{filtervalue?}', 'SessionController@index')->name('session.index');	
	Route::get('session/view/{rec_id}', 'SessionController@view')->name('session.view');	
	Route::get('session/add', 'SessionController@add')->name('session.add');
	Route::post('session/add', 'SessionController@store')->name('session.store');
		
	Route::any('session/edit/{rec_id}', 'SessionController@edit')->name('session.edit');	
	Route::get('session/delete/{rec_id}', 'SessionController@delete');

/* routes for SkemaPaguSd Controller */
	Route::get('skemapagusd', 'SkemaPaguSdController@index')->name('skemapagusd.index');
	Route::get('skemapagusd/index/{filter?}/{filtervalue?}', 'SkemaPaguSdController@index')->name('skemapagusd.index');	
	Route::get('skemapagusd/view/{rec_id}', 'SkemaPaguSdController@view')->name('skemapagusd.view');	
	Route::get('skemapagusd/add', 'SkemaPaguSdController@add')->name('skemapagusd.add');
	Route::post('skemapagusd/add', 'SkemaPaguSdController@store')->name('skemapagusd.store');
		
	Route::any('skemapagusd/edit/{rec_id}', 'SkemaPaguSdController@edit')->name('skemapagusd.edit');	
	Route::get('skemapagusd/delete/{rec_id}', 'SkemaPaguSdController@delete');

/* routes for SkemaPaguSdDetail Controller */
	Route::get('skemapagusddetail', 'SkemaPaguSdDetailController@index')->name('skemapagusddetail.index');
	Route::get('skemapagusddetail/index/{filter?}/{filtervalue?}', 'SkemaPaguSdDetailController@index')->name('skemapagusddetail.index');	
	Route::get('skemapagusddetail/view/{rec_id}', 'SkemaPaguSdDetailController@view')->name('skemapagusddetail.view');	
	Route::get('skemapagusddetail/add', 'SkemaPaguSdDetailController@add')->name('skemapagusddetail.add');
	Route::post('skemapagusddetail/add', 'SkemaPaguSdDetailController@store')->name('skemapagusddetail.store');
		
	Route::any('skemapagusddetail/edit/{rec_id}', 'SkemaPaguSdDetailController@edit')->name('skemapagusddetail.edit');	
	Route::get('skemapagusddetail/delete/{rec_id}', 'SkemaPaguSdDetailController@delete');

/* routes for SkemaPaguSmp Controller */
	Route::get('skemapagusmp', 'SkemaPaguSmpController@index')->name('skemapagusmp.index');
	Route::get('skemapagusmp/index/{filter?}/{filtervalue?}', 'SkemaPaguSmpController@index')->name('skemapagusmp.index');	
	Route::get('skemapagusmp/view/{rec_id}', 'SkemaPaguSmpController@view')->name('skemapagusmp.view');	
	Route::get('skemapagusmp/add', 'SkemaPaguSmpController@add')->name('skemapagusmp.add');
	Route::post('skemapagusmp/add', 'SkemaPaguSmpController@store')->name('skemapagusmp.store');
		
	Route::any('skemapagusmp/edit/{rec_id}', 'SkemaPaguSmpController@edit')->name('skemapagusmp.edit');	
	Route::get('skemapagusmp/delete/{rec_id}', 'SkemaPaguSmpController@delete');

/* routes for SkemaPaguSmpDetail Controller */
	Route::get('skemapagusmpdetail', 'SkemaPaguSmpDetailController@index')->name('skemapagusmpdetail.index');
	Route::get('skemapagusmpdetail/index/{filter?}/{filtervalue?}', 'SkemaPaguSmpDetailController@index')->name('skemapagusmpdetail.index');	
	Route::get('skemapagusmpdetail/view/{rec_id}', 'SkemaPaguSmpDetailController@view')->name('skemapagusmpdetail.view');	
	Route::get('skemapagusmpdetail/add', 'SkemaPaguSmpDetailController@add')->name('skemapagusmpdetail.add');
	Route::post('skemapagusmpdetail/add', 'SkemaPaguSmpDetailController@store')->name('skemapagusmpdetail.store');
		
	Route::any('skemapagusmpdetail/edit/{rec_id}', 'SkemaPaguSmpDetailController@edit')->name('skemapagusmpdetail.edit');	
	Route::get('skemapagusmpdetail/delete/{rec_id}', 'SkemaPaguSmpDetailController@delete');

/* routes for Users Controller */
	Route::get('users', 'UsersController@index')->name('users.index');
	Route::get('users/index/{filter?}/{filtervalue?}', 'UsersController@index')->name('users.index');	
	Route::get('users/view/{rec_id}', 'UsersController@view')->name('users.view');
	Route::get('users/masterdetail/{rec_id}', 'UsersController@masterDetail')->name('users.masterdetail');	
	Route::get('users/add', 'UsersController@add')->name('users.add');
	Route::post('users/add', 'UsersController@store')->name('users.store');
		
	Route::any('users/edit/{rec_id}', 'UsersController@edit')->name('users.edit');	
	Route::get('users/delete/{rec_id}', 'UsersController@delete');

/* routes for UsersGroups Controller */
	Route::get('usersgroups', 'UsersGroupsController@index')->name('usersgroups.index');
	Route::get('usersgroups/index/{filter?}/{filtervalue?}', 'UsersGroupsController@index')->name('usersgroups.index');	
	Route::get('usersgroups/view/{rec_id}', 'UsersGroupsController@view')->name('usersgroups.view');	
	Route::get('usersgroups/add', 'UsersGroupsController@add')->name('usersgroups.add');
	Route::post('usersgroups/add', 'UsersGroupsController@store')->name('usersgroups.store');
		
	Route::any('usersgroups/edit/{rec_id}', 'UsersGroupsController@edit')->name('usersgroups.edit');	
	Route::get('usersgroups/delete/{rec_id}', 'UsersGroupsController@delete');

/* routes for UsersPermissions Controller */
	Route::get('userspermissions', 'UsersPermissionsController@index')->name('userspermissions.index');
	Route::get('userspermissions/index/{filter?}/{filtervalue?}', 'UsersPermissionsController@index')->name('userspermissions.index');	
	Route::get('userspermissions/view/{rec_id}', 'UsersPermissionsController@view')->name('userspermissions.view');	
	Route::get('userspermissions/add', 'UsersPermissionsController@add')->name('userspermissions.add');
	Route::post('userspermissions/add', 'UsersPermissionsController@store')->name('userspermissions.store');
		
	Route::any('userspermissions/edit/{rec_id}', 'UsersPermissionsController@edit')->name('userspermissions.edit');	
	Route::get('userspermissions/delete/{rec_id}', 'UsersPermissionsController@delete');

/**
 * All routes which requires auth
 */
Route::middleware(['auth'])->group(function () {
	
	
});


	
Route::get('componentsdata/user_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->user_id_option_list($request);
	}
);
	
Route::get('componentsdata/group_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->group_id_option_list($request);
	}
);


Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');


/**
 * All static content routes
 */
Route::get('info/about',  function(){
		return view("pages.info.about");
	}
);
Route::get('info/faq',  function(){
		return view("pages.info.faq");
	}
);

Route::get('info/contact',  function(){
	return view("pages.info.contact");
}
);
Route::get('info/contactsent',  function(){
	return view("pages.info.contactsent");
}
);

Route::post('info/contact',  function(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$senderName = $request->name;
		$senderEmail = $request->email;
		$message = $request->message;

		$receiverEmail = config("mail.from.address");

		Mail::send(
			'pages.info.contactemail', [
				'name' => $senderName,
				'email' => $senderEmail,
				'comment' => $message
			],
			function ($mail) use ($senderEmail, $receiverEmail) {
				$mail->from($senderEmail);
				$mail->to($receiverEmail)
					->subject('Contact Form');
			}
		);
		return redirect("info/contactsent");
	}
);


Route::get('info/features',  function(){
		return view("pages.info.features");
	}
);
Route::get('info/privacypolicy',  function(){
		return view("pages.info.privacypolicy");
	}
);
Route::get('info/termsandconditions',  function(){
		return view("pages.info.termsandconditions");
	}
);

Route::get('info/changelocale/{locale}', function ($locale) {
	app()->setlocale($locale);
	session()->put('locale', $locale);
    return redirect()->back();
})->name('info.changelocale');