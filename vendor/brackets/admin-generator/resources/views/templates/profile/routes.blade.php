
/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    {!! str_pad("Route::get('/admin/profile',", 60) !!}'{{ $controllerPartiallyFullName }}@editProfile');
    {!! str_pad("Route::post('/admin/profile',", 60) !!}'{{ $controllerPartiallyFullName }}@updateProfile');
    {!! str_pad("Route::get('/admin/password',", 60) !!}'{{ $controllerPartiallyFullName }}@editPassword');
    {!! str_pad("Route::post('/admin/password',", 60) !!}'{{ $controllerPartiallyFullName }}@updatePassword');
});