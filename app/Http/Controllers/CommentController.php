<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('index', compact('comments'));

    }

    public function store(Request $request)
{
    // Validasi data input
$validated = $request->validate([
    'name' => 'required|string|max:255',
    'utterance' => 'required|string|max:1000',
    'absen' => 'required|in:hadir,tidak_hadir,belum_konfirmasi',
]);

// Simpan ke database
Comment::create([
    'name' => $validated['name'],
    'utterance' => $validated['utterance'],
    'absen' => $validated['absen'],
]);


    // Redirect atau kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
}

}
