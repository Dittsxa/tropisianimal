<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Mailbox;
use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use \Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function index(Request $request)
    {
        $no = Post::paginate(5);
        $pagination = 5;
        $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.blog', ['posts' => $posts])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('admin.pages.add-blog');
    }

    public function edit($id)
    {
        $posts = Post::where('id', $id)->get();
        return view('admin.pages.edit-blog', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'body' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $input = $request->all();
        $posts = Post::create([
            'judul' => $input['judul'],
            'slug' => Str::slug($input['judul'], $separator = '-', $language = 'id'),
            'body' => $input['body'],
            'excerpt' => Str::limit($input['body'], $limit = 50),
        ]);

        // $imageName = time().'.'.$request->image->extension();  
        // $request->image->move(public_path('post-images'), $imageName);
        return redirect()->route('dataBerita')->with('success', 'Berita telah berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'body' => 'required',
        ]);

        $posts = Post::find($id)->update($request->all());
        return redirect()->route('dataBerita')->with('success', 'Berita telah berhasil diperbaharui');

    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        return back()->with('success', 'Penghapusan data telah berhasil');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $posts = DB::table('posts')->where('judul','like',"%".$search."%")->paginate(5);
        // $posts = Post::latest();
        // if($request['search']) {
        //     $posts->where('judul','like', '&' . $request['search'] . '%');
        // }

        return view('admin.blog', ['posts' => $posts]);
    }

    public function viewMail()
    {   
        $no = Mailbox::paginate(5);
        $mail = Mailbox::all();
        $mail = Mailbox::paginate(5);
        return view('admin.mailbox', ['mail' => $mail]);
    }

    public function viewGaleri()
    {
        return view('admin.galeri');
    }

    public function viewContact()
    {
        $no = Contact::paginate(5);
        $contact = Contact::all();
        $contact = Contact::paginate(5);
        return view('admin.profile', ['contact' => $contact]);
    }

    public function storeContact(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'telp' => 'required',
            'location' => 'required',
        ]);

        $contact = Contact::findOrFail($id)->update($request->all());
        return redirect()->route('contact')->with('success', 'Contact telah berhasil diperbaharui');

    }
}
