<?php
// declare(strict_types=1);

// LaravelのRouteの中のメソッドっぽい関数
function get(string $uri, array|string|callable|null $action = null) {
    echo "\t", __FUNCTION__ , ":{$uri}:\n";
}
function group(\Closure|array|string $routes) {
    echo __FUNCTION__ , "\n";
    if ($routes instanceof \Closure) {
        $routes();
    }
}

// Route::prefix('/login')->group(function() {
group(function() {
    // Route::get('', [LoginController::class, 'index']);
    get('/', [stdClass::class, 'index']);
    get('/hoge', [stdClass::class, 'hoge']);
)};
