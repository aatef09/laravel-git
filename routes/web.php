<?php

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

//Route::get('/contact',function(){
//
//    return "به صفحه تماس با ما خوش آمدید";
//});
//
//Route::get('about',function (){
//
//   return "درباره ما";
//});
//
//Route::get('/post/{id}/{name}',function ($id,$name){
//
//   return "این پست مربوط به ای دی : "." ".$id." $name";
//});
//
//Route::get('/admin/posts/example',function (){
//
//    $url = route('admin');
//   return "این آدرس مربوط به صفحه ادمین می باشد و این آدرس برابر است با :".$url;
//})->name('admin');
//
//Route::get('/admin/login',function (){
//
//   return "صفحه ورود مدیریت";
//});

//Route::redirect(['/admin/login', '/admin/posts/example', 301);

//Route::prefix('user')->group(function(){
//
//    Route::get('posts/example',function (){
//
//        return "گروه بندی ادمین";
//    });
//
//    Route::get('login',function (){
//
//        return "صفحه لاگین";
//    });
//
//});
//Route::get('/contact','PostsController@contact');
//Route::get('/posts/{id?}','PostsController@index');
//Route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
//Route::get('/insert','PostsController@insert');
//Route::get('/select','PostsController@select');
//Route::get('update','PostsController@updatePost');
//Route::get('delete','PostsController@deletePost');
//
//Route::get('posts','PostsController@index');
//Route::get('save-post','PostsController@savePost');
//Route::get('update-post','PostsController@newUpdatePost');
//Route::get('delete-post','PostsController@newDeletePost');
//Route::get('data-trash','PostsController@workWithTrash');
//Route::get('restore-post','PostsController@restorePost');
//Route::get('force-delete-post','PostsController@forceDelete');


//Eloquent Relationship

//One to One Relationship

//Route::get('user/{id}/post',function ($id){
//
//   // $user_post = \App\User::find($id)->post; //تمام پست مربوط به آن کاربر می آورد
//    $user_post = \App\User::find($id)->post->content; //فقط کانتنت می آورد
//
//    return $user_post;
//});
//
//Route::get('post/{id}/user',function ($id){
//
//    //$post_user = \App\Post::find($id)->user;
//    $post_user = \App\Post::find($id)->user->email;
//    return $post_user;
//
//});

//One to Many Relationship

//Route::get('user/{id}/posts',function ($id){
//
//   $user_posts =  \App\User::find($id)->posts;
//
//   foreach ($user_posts as $post)
//   {
//       echo $post->title;
//       echo "<br>";
//   }
//
//
//});

//Many to Many Relationship

//Route::get('user/{id}/roles',function ($id){
//
//   $user = \App\User::find($id);
//
//   foreach ($user->roles as $role)
//   {
//       echo $role->name;
//       echo "<br>";
//   }
//});
//
//Route::get('user/pivot',function (){
//
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role)
//    {
//        echo $role->pivot->created_at;
//        echo "<br>";
//    }
//
//});

// Has Many Through Relationship

//Route::get('user/country',function (){
//
//    $country = \App\User::find(1);
//    foreach ($country->Posts as $post)
//    {
//        echo $post->title;
//        echo "<br>";
//    }
//
//});

//Polymorphic Relationship

//Route::get('user/photos',function (){
//
//   $user = \App\User::find(1);
//
//    foreach ($user->photos as $photo)
//    {
//        echo $photo->path;
//        echo "<br>";
//    }
//});
//
//Route::get('post/photos',function (){
//
//    $post = \App\Post::find(2);
//
//    foreach ($post->photos as $photo)
//    {
//        echo $photo->path;
//        echo "<br>";
//    }
//});
//
//Route::get('photo/{id}/post', function ($id){
//
//    $photo = \App\Photo::find($id);
//    return $photo->imageable;
//
//});
//
//Route::get('post/tags',function (){
//
//    $post = \App\Post::find(3);
//
//    foreach ($post->tags as $tag)
//    {
//        echo $tag->name;
//        echo "<br>";
//    }
//
//});
//
//Route::get('video/tags',function (){
//
//    $video = \App\Video::find(1);
//
//    foreach ($video->tags as $tag)
//    {
//        echo $tag->name;
//        echo "<br>";
//    }
//
//});
//
//Route::get('tag/{id}/post', function ($id){
//
//    $tag = \App\Tag::find($id);
//    foreach ($tag->posts as $post)
//    {
//        echo $post->title;
//        echo "<br>";
//    }
//
//});

//CRUD One to Many Relationship

//Route::get('create',function (){
//
//    $user = \App\User::find(1);
//    $post = new \App\Post();
//    $post->title = 'یک عنوان جدید بااستفاده از CRUD One to Many ';
//    $post->content = 'کانتن جدید مربوط به Crud One to Many';
//    $user->posts()->save($post);
//});
//
//Route::get('read',function (){
//
//    $user = \App\User::find(1);
//    foreach ($user->posts as $post)
//    {
//        echo $post->title;
//        echo "<br>";
//    }
//});
//
//Route::get('update',function (){
//
//   $user = \App\User::find(1);
//   $user->posts()->whereId(2)->update(['title'=>'عنوان با استفاده از CRUD آپدیت شد','content'=>'کانتن با استفاده از CRUD آپدیت شد']);
//
//});
//
//Route::get('delete',function (){
//
//    $user = \App\User::find(1);
//    $user->posts()->whereId(2)->delete();
//
//});

//CRUD Many to Many Relationship

//Route::get('create',function (){
//
//    $user = \App\User::find(1);
//    $role = new \App\Role();
//    $role->name = 'نویسدنده';
//    $user->roles()->save($role);
//
//});
//
//Route::get('read',function (){
//
//   $user = \App\User::find(1);
//   foreach ($user->roles as $role)
//   {
//       echo $role->name;
//       echo "<br>";
//   }
//});
//
//Route::get('update',function (){
//
//    $user = \App\User::find(1);
//
//    if ($user->has('roles'))
//    {
//        foreach ($user->roles as $role)
//        {
//            if ($role->name == 'نویسنده')
//            {
//                $role->name = 'Author';
//                $role->save();
//            }
//        }
//    }
//});
//
//Route::get('delete',function (){
//
//   $user = \App\User::find(1);
//
//   foreach ($user->roles as $role) {
//       if ($role->name == 'Author')
//       {
//           $role->delete();
//       }
//   }
//});
//
//Route::get('detach',function (){
//
//   $user = \App\User::find(1);
//   $user->roles()->detach(1);
//});
//
//Route::get('attach',function (){
//
//   $user = \App\User::find(1);
//   $user->roles()->attach(1);
//});
//
//Route::get('sync',function (){
//
//    $user = \App\User::find(1);
//    $user->roles()->sync([1]);
//
//});

//CRUD Polymorphic Relationship

//Route::get('create',function (){
//
//   $video = \App\Video::find(1);
//   $video->tags()->create(['name'=>'morph video']);
//});
//
//Route::get('read',function (){
//
//    $video = \App\Video::find(1);
//    foreach ($video->tags as $tag)
//    {
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('update',function () {
//
//    $video = \App\Video::find(1);
//    $tag = $video->tags;
//    $newtags = $tag->where('id', 3)->first();
//    $newtags->name = 'تگ جدید';
//    $newtags->save();
//});
//
//Route::get('delete',function (){
//
//   $video = \App\Video::find(1);
//   $tag = $video->tags;
//   $deletedTags = $tag->where('id',3)->first();
//   $deletedTags->delete();
//});
//
//Route::get('detach',function (){
//
//   $video = \App\Video::find(1);
//   $video->tags()->detach();
//});
//
//Route::get('attach',function (){
//
//    $video = \App\Video::find(1);
//    $video->tags()->attach(1);
//});
//
//Route::get('sync',function (){
//
//    $video = \App\Video::find(1);
//    $video->tags()->sync([1,2]);
//
//});

//Form Routes
//Use Illuminate\Support\Facades\Storage;

//Route::get('file',function (){
//
//   //$file = \Illuminate\Support\Facades\Storage::disk('public')->get('images/mi58ltbdY4UppQffrPijHROMLwzLDTqUlSZ680zx.png');
//   // echo storage_path('images/mi58ltbdY4UppQffrPijHROMLwzLDTqUlSZ680zx.png');
//   return Storage::disk('files')->download('html.png');
//});
//use Illuminate\Support\Facades\Auth;
//


use Illuminate\Http\Request;

Auth::routes(['verify'=>true]);
//
    Route::middleware(['auth','verified'])->group(function (){
        Route::get('/home','HomeController@index')->name('home');
        Route::resource('/posts','postsController');
    });
Route::get('/');
//
//Route::get('/',function (){
//
////   $user = Auth::user();
////   $id = Auth::id();
////
////   if (Auth::check())
////   {
////       echo "Hello ".$user->name;
////       echo "<br>";
////       echo "User ID: ". $id;
////   }else
////   {
////       return redirect()->to('home');
////   }
//
////  $email = 'aatef.jaberi@gmail.com';
////   $password = '123456';
////
////    $auth = Auth::attempt(['email'=>$email,'password'=>$password]);
//
////    $main_user = \App\User::findorFail(3);
////    $user = Auth::login($main_user);
////    dd($user);
//    $user = Auth::loginUsingId(3);
//    dd($user);
//    Auth::logout();
//
//
//});

//Route::get('/admin',function (){
//
//   echo "Hello to admin page";
//})->middleware('isAdmin:مدیر');
//
//
//
//Route::get('session',function(Request$request){
//
////        $request->session()->put(["username"=>"Aatef"]);
//
//
//    //session(['email'=>'aatef.jaberi@gmail.com']);
//
//    //$request->session()->forget('username');
////    $request->session()->flush();
//    $request->session()->keep('message');
//    return $request->session()->all();
//
//});

//یک تغییر ایجاد شد

