<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterJobSeekerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\UserController;

use App\Http\Controllers\Employer\EmployerDashboardController;
use App\Http\Controllers\Employer\EmployerApplicationsController;
use App\Http\Controllers\Employer\EmployerChatController;
use App\Http\Controllers\Employer\EmployerSettingsController;
use App\Http\Controllers\Employer\EmployerProfileController;

use App\Http\Controllers\JobSeeker\JobSeekerDashboardController;
use App\Http\Controllers\JobSeeker\JobSeekerProfileController;
use App\Http\Controllers\JobSeeker\JobSeekerChatController;
use App\Http\Controllers\JobSeeker\JobSeekerSettingsController;

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

Route::middleware(['auth'])->group(function () {
    Route::prefix('jobseeker')->name('jobseeker.')->group(function () {
        Route::get('/profile', [\App\Http\Controllers\JobSeeker\JobSeekerProfileController::class, 'index'])->name('profile');
        Route::get('/edit', [\App\Http\Controllers\JobSeeker\JobSeekerProfileController::class, 'edit'])->name('edit');
        Route::put('/profile', [\App\Http\Controllers\JobSeeker\JobSeekerProfileController::class, 'update'])->name('update');
    });
});


Route::post('/search', [JobPostingController::class, 'search'])->name('search');

Route::get('/jobseeker/jobapply/{id}', 'App\Http\Controllers\JobPostingController@apply')->name('jobseeker.jobapply');
Route::post('/jobapply/{id}', 'App\Http\Controllers\JobApplicationController@store')->name('jobseeker.store');

Route::get('/chat/employer/{id}', [JobSeekerChatController::class, 'chatWithEmployer'])->name('chat.employer');

Route::get('/employer/application/{id}', [EmployerApplicationsController::class, 'showApplication'])->name('employer.application.show');
Route::get('/resume/{filename}', 'App\Http\Controllers\JobPostingController@viewResume')->name('employer.application.resume');
Route::post('/contactUs', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutUs');
Route::get('/howItWorks', [App\Http\Controllers\HowItWorksController::class, 'index'])->name('howItWorks');
Route::get('/contactUs', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contactUs');
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');
Route::get('/policy', [App\Http\Controllers\PolicyController::class, 'index'])->name('policy');


Route::get('/employer/settings', [EmployerSettingsController::class, 'index'])->name('employer.settings');
Route::post('/delete-account', 'App\Http\Controllers\Auth\UserController@deleteAccount')->name('delete.account');
Route::delete('/users/{id}', 'App\Http\Controllers\Employer\EmployerSettingsController@destroy')->name('users.destroy');
Route::delete('/users/{id}', 'App\Http\Controllers\JobSeeker\JobSeekerSettingsController@destroy')->name('users.destroy');



    //profile employer
    Route::get('/employer/profile', [\App\Http\Controllers\Employer\EmployerProfileController::class, 'index'])->name('employer.profile');
    Route::get('employer/edit', [\App\Http\Controllers\Employer\EmployerProfileController::class, 'edit'])->name('employer.edit');
    Route::put('/employer/profile', [\App\Http\Controllers\Employer\EmployerProfileController::class, 'update'])->name('profile.update');

    //register jobseeeker
    Route::get('/register/jobseeker', [RegisterJobSeekerController::class, 'showRegistrationForm'])->name('register.jobseeker');
    Route::post('/register/jobseeker', [RegisterJobSeekerController::class, 'register'])->name('register.jobseeker.submit');

    //chat jobseekr
    Route::get('/jobseeker/chat', [JobSeekerChatController::class, 'index'])->name('jobseeker.chat');

    //dashboard
    Route::get('/jobseeker/dashboard', [JobPostingController::class, 'index'])->name('jobseeker.dashboard');
    Route::get('/jobseeker/dashboard', [JobPostingController::class, 'index'])->name('jobseeker.dashboard');

    //settings jobseeker

    Route::put('/jobseeker/settings/updatePassword', 'App\Http\Controllers\JobSeeker\JobSeekerSettingsController@updatePassword')->name('settings.updatePassword');
    Route::put('/jobseeker/settings/deleteAccount', 'App\Http\Controllers\JobSeeker\JobSeekerSettingsController@deleteAccount')->name('settings.deleteAccount');
    Route::resource('/jobseeker/settings', 'App\Http\Controllers\JobSeeker\JobSeekerSettingsController')->only(['index', 'update', 'destroy']);
    Route::get('/jobseeker/settings', [App\Http\Controllers\JobSeeker\JobSeekerSettingsController::class, 'index'])->name('jobseeker.settings');

    //job postings
    Route::post('/job-postings', [JobPostingController::class, 'store'])->name('job-postings.store');
    Route::resource('job-postings', \App\Http\Controllers\JobPostingController::class);


Auth::routes();
Route::middleware(['auth', 'jobseeker'])->group(function () {
    Route::get('/jobseeker/dashboard', [JobSeekerDashboardController::class, 'index'])->name('jobseeker.dashboard');
});

Route::middleware(['auth', 'employer'])->group(function () {
    Route::get('/employer/dashboard', [EmployerDashboardController::class, 'index'])->name('employer.dashboard');
});



// Employers Routes
Route::middleware(['auth', 'employer'])->prefix('employer')->group(function () {

    //settings
    Route::put('/employer/settings/updatePassword', 'App\Http\Controllers\Employer\EmployerSettingsController@updatePassword')->name('settings.updatePassword');
    Route::put('/employer/settings/deleteAccount', 'App\Http\Controllers\Employer\EmployerSettingsController@deleteAccountd')->name('settings.deleteAccount');
    Route::resource('/employer/settings', 'App\Http\Controllers\Employer\EmployerSettingsController')->only(['index', 'update', 'destroy']);
    //chat
    Route::get('/employer/chat', [EmployerChatController::class, 'index'])->name('employer.chat');

    //application
    Route::get('/employer/applications', [EmployerApplicationsController::class, 'index'])->name('employer.applications');
    Route::post('/employer/create', [JobPostingController::class, 'create'])->name('employer.create');
    Route::delete('/employer/delete/{id}', [JobPostingController::class, 'destroy'])->name('employer.delete');


});

