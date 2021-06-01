<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getHome() {
        // $gallery = Gallery::all();
        return view('gallery.home');
    }

    public function getIndex() {
        $gallery = Image::all();
        return view('gallery.index', ['arrayGallery' => $gallery]);
    }

    public function getMostra($id) {
        $arrayGallery = Image::findOrFail($id);
        return view('gallery.mostra', ['datosGallery' => $arrayGallery, 'id' => $id]);
    }

    public function getCrea() {
        return view('gallery.crea');
    }

    public function getEdit($id) {
        // $gallery = Gallery::all();
        $arrayGallery = Image::findOrFail($id);
        return view('gallery.edit', ['datosGallery' => $arrayGallery, 'id' => $id]);
    }

    public function postCrea(Request $data)
    {
        $new_gallery = new Image();
        $new_gallery->title = $data['title'];
        $new_gallery->status = $data['status'];
        $new_gallery->access = $data['access'];
        $new_gallery->ticket1 = $data['ticket1'];
        $new_gallery->ticket2 = $data['ticket2'];
        $new_gallery->ticket3 = $data['ticket3'];
        $new_gallery->autor = $data['autor'];
        $new_gallery->img = $data['img'];
        $new_gallery->email = $data['email'];
        $new_gallery->save();
        $gallery = Image::all();
        return view('gallery.index', ['arrayGallery' => $gallery]);
    }

    public function postEdit(Request $data, $id)
    {
        $edit_gallery = Image::findOrFail($id);
        $edit_gallery->update($data->all());
        return view('gallery.mostra', ['datosGallery' => $edit_gallery, 'id' => $id]);
    }
}
