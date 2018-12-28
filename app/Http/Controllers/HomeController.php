<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Post;
use App\Rateable;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('home');

    }



    public function posts()

    {

        $posts = Post::all();

        return view('posts',compact('posts'));

    }



    public function show($id)

    {

        $post = Post::find($id);

        return view('postsShow',compact('post'));

    }


        public function create()
    {
        return view('konsultan.create');
    }



    public function postPost(Request $request)

    {

        request()->validate(['rate' => 'required']);

        $post = Post::find($request->id);



        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;



        $post->ratings()->save($rating);



        return redirect()->route("posts");

    }

        public function store(Request $request)
    {
        $data = new Post();
        $data->name = $request->name;
        $data->jasa = $request->jasa;
        $data->tarif = $request->tarif;
        $data->tentang = $request->tentang;
        $data->web = $request->web;
        $data->email = $request->email;
        // if($data->foto == null)
            $data->foto = $request->name.".jpg";

        // $file       = $request->file('foto');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('foto')->move("image/", $fileName);
        // $data->foto = $fileName;
        

        //$data->rating = $request->rating;
        $data->save();
        return redirect()->route('konsultan.index');
    }

    public function update(Request $request, $id)
    {
        $data = Konsultan::where('id', $id)->first();
        $data->name = $request->name;
        $data->jasa = $request->jasa;
        $data->tarif = $request->tarif;
        $data->tentang = $request->tentang;
        $data->web = $request->web;
        $data->email = $request->email;

        // $uploadedFile = $request->file('foto');        
        // $path = $uploadedFile->store('public/upload');
        // $format = $request->file('foto')->getClientOriginalExtension();
        // $data->foto = $path;

        //$data->rating = $request->rating;
        //data->rating = 0;
        $data->save();
        return redirect()->route('konsultan.index')->with('alert-success', 'Data berhasil diubah!');
    }


        public function edit($id)
    {
        $data = Konsultan::where('id', $id)->get();
        return view('konsultan.edit', compact('data'));
    }
}