<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        return view('forum.documents.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|min:2|max:50',
            'title_fr' => 'min:2|max:50',
            'file' => 'required|mimes:pdf,docx,zip,doc|max:2048'
        ]);
        $path = $request->file('file')->store('uploads', 'public');
     
         $document = new Document;
         $document->title = $request->title;
         $document->file_path = $path;
         $document->user_id = Auth::id();
         $document->save();
         
         return redirect()->back()
             ->with('success', 'Document created successfully.');
         }

    
           
     




    public function show($id)
    {
        $document = Document::findOrFail($id);
        return view('documents.show', compact('document'));
    }




    public function edit($id)
    {
        
       
        $document = Document::findOrFail($id);
        if ($document->user_id != Auth::id()) {
            return view('auth.login');
        }
        return view('forum.documents.edit', compact('document'));
    }
       


    //'file' => 'mimes:pdf,doc,zip|max:2048'

    //     if ($request->hasFile('file')) {
    //         if ($document->file_path) {
    //             Storage::delete($document->file_path);
    //         }
    //         $path = $request->file('file')->store('uploads', 'public');
    //         $document->file_path = $path;
   
   

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|min:2|max:50',
        'title_fr' => 'min:2|max:50',
    ]);

    $document = Document::findOrFail($id);
   
    if ($document->user_id != Auth::id()) {
        return redirect()->back()->with('error', 'You are not authorized to update this document.');
    }
    $document->title = $request->title;
    $document->title_fr = $request->title_fr;
    $document->update();
    return redirect()->route('etudiants.show', Auth::id())
        ->with('success', 'Document updated successfully.');
}
  
    
    


    public function destroy($id, $user_id)
    {
        if ($user_id != Auth::id()) {
            return view('auth.login');
        }
        $document = Document::where('id', $id)->where('user_id', $user_id)->firstOrFail();
        Storage::delete($document->file_path);
        $document->delete();

        return redirect()->route('etudiants.show', Auth::id() )
            ->with('success', 'Document deleted successfully.');
    }
}
