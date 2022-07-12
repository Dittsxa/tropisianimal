<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function index(Request $request)
    {
        # code...
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();
        $mail = Mailbox::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'description' => $input['description']
        ]);

        return redirect()->route('kontak')->with('success', 'Email Berhasil Terkirim');
    }

    public function destroy($id)
    {
        $mail = Mailbox::findOrFail($id);
        $mail->delete();
        return back()->with('success', 'Penghapusan data telah berhasil');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $mail = DB::table('mailboxes')->where('subject','like',"%".$search."%")->paginate(5);
        
        return view('admin.mailbox', ['mail' => $mail]);
    }
}
