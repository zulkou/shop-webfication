<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Post;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    // public function index()
    // {
    //     return view('layouts.template');
    // }

    //Membership CRUD
    //create form
    public function formMember(){
        return view('membership.form');
    }
    //create validation
    public function addMember(Request $request){
        $validateData = $request->validate()([
            'username'  => 'required|max:12|unique:memberships,username',
            'nama'      => 'required',
            'nohp'      => 'required|min:11',
            'password'  => 'required',
            'alamat'    => 'required'
        ]);

        Membership::create($validateData);
    }
    //read
    public function showMember(Membership $membership){
        return view('membership.show', ['membership' => $membership]);
    }
    //update form
    public function formUpMember(Membership $membership){
        return view('membership.edit', ['membership' => $membership]);
    }
    //update valid
    public function upMember(Request $request, Membership $membership){
        $validateData = $request->validate()([
            'username'  => 'required|max:12|unique:memberships,username,'.$membership->username,
            'nama'      => 'required',
            'nohp'      => 'required|min:11',
            'password'  => 'required',
            'alamat'    => 'required'
        ]);

        $membership->update($validateData);
    }
    //delete
    public function delMember(Membership $membership){
        $membership->delete();
    }

    //Barang CRUD
    //create form
    public function formBarang(){
        return view('barang.form');
    }
    //create valid
    public function addBarang(Request $request){
        $validateData = $request->validate()([
            'barang'        => 'required',
            'fotoBarang'    => 'required|file|image',
            'harga'         => 'required',
            'stok'          => 'required'
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $nameFile = $validateData['barang'].'-'.['idBarang'].'.'.$extFile;

        $barang = new Barang();
        $barang->barang = $validateData['barang'];
        $barang->fotoBarang = $validateData['fotoBarang']->move('upload',$nameFile);
        $barang->harga = $validateData['harga'];
        $barang->stok = $validateData['stok'];
        $barang->save();
    }
    //read
    public function showBarang(Barang $barang){
        return view('barang.show', ['barang' => $barang]);
    }
    //update form
    public function formUpBarang(Barang $barang){
        return view('barang.edit', ['barang' => $barang]);
    }
    //update valid
    public function upBarang(Request $request, Barang $barang){
        $validateData = $request->validate()([
            'idBarang'      => 'required,'.$barang->idBarang,
            'barang'        => 'required',
            'fotoBarang'    => 'required|file|image',
            'harga'         => 'required',
            'stok'          => 'required|in:A,O'
        ]);

        Barang::where('idBarang',$barang->idBarang)->update($validateData);
    }
    //delete
    public function delBarang(Membership $membership){
        $membership->delete();
    }

    //Post CRUD
    //create form
    public function formPost(){
        return view('barang.form');
    }
    //create valid
    public function addPost(Request $request){
        $validateData = $request->validate()([
            'judul'     => 'required',
            'banner'    => 'nullable|file|image',
            'isiPost'   => 'required',
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $nameFile = $validateData['judul'].'-'.time().'.'.$extFile;

        $post = new Post();
        $post->judul = $validateData['judul'];
        $post->banner = $validateData['banner']->move('upload',$nameFile);
        $post->isiPost = $validateData['isiPost'];
        $post->save();
    }
    //read
    public function showPost(Post $post){
        return view('post.show', ['post' => $post]);
    }
    //delete
    public function delPost(Post $post){
        $post->delete();
    }
}
