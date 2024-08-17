<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Livewire\AppointmentManagement\AppointmentRequests;
use App\Livewire\Dashboard\Index as DashboardIndex;

use App\Livewire\RecordManagement\UserInformation\Index as UserInformationIndex;
use App\Livewire\RecordManagement\PetInformation\Index as PetInformationIndex;

use App\Livewire\PetManagement\Index as PetManagementIndex;
use App\Livewire\PetManagement\MedicalHistory\Index as MedicalHistoryIndex;

use App\Livewire\ServicesOffered\Grooming\Index as GroomingIndex;
use App\Livewire\ServicesOffered\Vaccinations\Index as VaccinationsIndex;

use App\Livewire\AppointmentManagement\Index as AppointmentManagementIndex;
use App\Livewire\Inquiries\Index;
use App\Livewire\LandingPage\Index as LandingPageIndex;
use App\Livewire\Pos\InventoryManagement\Index as InventoryManagementIndex;
use App\Livewire\Pos\PosTerminal;
use App\Livewire\ServicesOffered\Vaccinations\Deworming;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', LandingPageIndex::class)->name('landing-page');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::redirect('/administrator', 'login');

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', DashboardIndex::class)->name('index');

    Route::prefix('record-management')->name('record-management.')->group(function () {
        Route::get('/', UserInformationIndex::class)->name('index');
        Route::get('/pet-information', PetInformationIndex::class)->name('pet-information');
    });

    Route::prefix('pet-management')->name('pet-management.')->group(function () {
        Route::get('/', PetManagementIndex::class)->name('index');
        Route::get('/medical-history', MedicalHistoryIndex::class)->name('medical-history');
    });

    Route::prefix('services-offered')->name('services-offered.')->group(function () {
        Route::get('/grooming', GroomingIndex::class)->name('grooming');
        Route::get('/vaccinations', VaccinationsIndex::class)->name('vaccinations');
        Route::get('/vaccinations/deworming', Deworming::class)->name('vaccinations.deworming');
    });

    Route::prefix('appointment-management')->name('appointment-management.')->group(function () {
        Route::get('/', AppointmentManagementIndex::class)->name('index');
        Route::get('/requests', AppointmentRequests::class)->name('requests');
    });

    Route::prefix('inquiries')->name('inquiries.')->group(function () {
        Route::get('/', Index::class)->name('index');
    });

    Route::fallback(function () {
        return view('pages/utility/404');
    });

    Route::prefix('pos')->name('pos.')->group(function () {
        Route::prefix('inventory-management')->name('inventory-management.')->group(function () {
            Route::get('/', InventoryManagementIndex::class)->name('index');
            Route::get('/pos-terminal', PosTerminal::class)->name('pos-terminal');
        });
    });
});
