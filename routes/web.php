<?php 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('visible1');
});

Route ::view('/BOOK','BOOK'); 

Route::post('/BOOK',[AppointmentController::class,'save'])->NAME('save.Appointment'); 

Route::get('/doctor/login',function(){
return view('DOCTOR.AUTH.login');

})->name('doctor.login'); 


Route::get('/doctor/registration',function(){
    return view('DOCTOR.AUTH.signup');
    
    })->name('doctor.registration'); 

    

Route::get('/doctor/dashboard', function () {
        return view('Doctor.Layout.dashboard');
 });

Route::post('/doctor/registration',[AuthController::class,'savedoc'])->name('doctor.registration.save');
Route::post('/doctor/login/save',[AuthController::class,'doclogin'])->name('doctor.login.save');
        



// Route ::view('/home','home'); where home.blade.php exists in views 

/*Route::get('/home/{name}', function ($name) { //here name is a parameter typed in after /home/Dnyaneshwari for example  
echo $name;    //prints the parameter dnyaneshwari 
return view('home');
}); 

Route::redirect('/home','/'); //if in the ink we type in home after 8000 we will be redirected to root page 

all these methods are useful for APIs 
*/