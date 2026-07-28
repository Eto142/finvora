<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NFTController extends Controller
{
    public function index()
    {
        return view('user.nfts');
    }

    public function NftGallery()
    {
        return view('user.nft-gallery');
    }

    public function MyCollection()
    {
        return view('user.my-collection');
    }

    public function MintNft()
    {
        return view('user.mint-nft');
    }
}
