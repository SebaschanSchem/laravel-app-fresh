<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Ideas;
use App\Models\User;
use App\Models\Post;

Route::view('/', 'welcome', [
    'greeting' => 'Hello, World!',
    'name' => 'John Doe',
    'age' => 30,
    'tasks' => [
        'Learn Laravel',
        'Build a project',
        'Deploy to production',
    ],
]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');

//index
Route::get('/posts', function(){
    $posts = Post::all();

    return view('posts.index', [
        'posts' => $posts,
    ]);
});

//show
Route::get('/posts/{post}', function (Post $post) {
    return view('posts.show', [
        'post' => $post,
    ]);
});

//edit
Route::get('/posts/{post}/edit', function (Post $post) {
    return view('posts.edit', [
        'post' => $post,
    ]);
}
);

//update
Route::patch('/posts/{post}', function (Post $post) {
    $post->update([
        'description' => request('description'),
        'updated_at' => now(),
    ]);

    return redirect('/posts' . '/' . $post->id);
}
);






//user registration routes

Route::get('/register', function () {
    $users = User::all(); 
    return view('user_registration.index', [
        'users' => $users
    ]);
});

Route::get('/register/create', function () {
    return view('user_registration.create');
});

Route::post('/register', function(User $user){
    $user->create([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
        'middle_name' => request('middle_name'),
        'nickname' => request('nickname'),
        'age' => request('age'),
        'address' => request('address'),
        'contact_number' => request('contact_number'),
        'email' => request('email'),
        'password' => request('password'),
    ]);

    return redirect('/register');
}
);

Route::get('/register/show/{user}', function(User $user){
    return view('user_registration.show', [
        'user' => $user,
    ]);
}
);

Route::patch('/register/update/{user}', function(User $user){
    $user->update([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
        'middle_name' => request('middle_name'),
        'nickname' => request('nickname'),
        'age' => request('age'),
        'address' => request('address'),
        'contact_number' => request('contact_number'),
        'email' => request('email'),
        'password' => request('password'),
    ]);

    return redirect('/register');
}
);

Route::delete('/register/delete/{user}', function (User $user) {
    $user->delete();

    return redirect('/register');
    
});