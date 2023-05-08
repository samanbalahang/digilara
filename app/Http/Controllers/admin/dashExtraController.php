<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class dashExtraController extends Controller
{
    public function randomNum(){
        $first = rand(1,100);
        $sec = rand(100,1000);
        $final = rand($first,$sec);
        $alafabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alfabetsize = intval(count($alafabet)-1);
        $alfrand = rand(0,$alfabetsize);

        $alf = $alafabet[$alfrand];
        $alfrand = rand(0,$alfabetsize);
        $alf = strval($alf).$alafabet[$alfrand];
        $alfrand = rand(0,$alfabetsize);
        $alf = strval($alf).strval($alafabet[$alfrand]);
        return strval($final) . "-".$alf."-". strval(time());
    }
    public function fileupload(){

    }
}