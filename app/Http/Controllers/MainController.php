<?php

namespace App\Http\Controllers;


use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Carbon\Carbon;
use PDF;

class MainController extends Controller
{
  

    public function index() {
      $noticias = DB::table('noticias')
                  ->where('estatus','=','activo')
                  ->latest('created_at')
                  ->take(3)
                   ->get();

      $notidestacadas = DB::table('noticias')
                  ->where('estatus','=','activo')              
                  ->latest('created_at')
                  ->take(4)                 
                  ->get();    
                  
      $carreras = DB::table('carreras')
                   ->inRandomOrder()
                   ->take(4)
                   ->get();

      $banner = DB::table('banners')
                ->where('estado','SI')
                ->get();
      
      return view('index', compact('noticias', 'notidestacadas', 'carreras', 'banner'));
   }

   public function ofertasacademicas() {
     
      $notidestacadas = DB::table('noticias')
                  ->where('estatus','=','activo')              
                  ->latest('created_at')
                  ->take(4)                 
                  ->get();    
                  
      $carreras = DB::table('carreras')
                   ->inRandomOrder()
                   ->take(4)
                   ->get();

     
      return view('web.academico.ofertasacademicas', compact('notidestacadas', 'carreras'));
   }

   

   
   public function orgullo() {
      $notidestacadas = DB::table('noticias')
                  ->where('estatus','=','activo')              
                  ->latest('created_at')
                  ->take(4)
               
                  ->get();           


      return view('web.orgullo', compact('notidestacadas'));
   }


   public function estudiantes() {
      $notidestacadas = DB::table('noticias')
                  ->where('estatus','=','activo')              
                  ->latest('created_at')
                  ->take(4)
               
                  ->get();           


      return view('web.estudiantes', compact('notidestacadas'));
   }


   public function nosotros() {
      $notidestacadas = DB::table('noticias')
                  ->where('estatus','=','activo')              
                  ->latest('created_at')
                  ->take(4)
               
                  ->get();           


      return view('web.nosotros', compact('notidestacadas'));
   }

   public function docentes() {
      $notidestacadas = DB::table('noticias')
                  ->where('estatus','=','activo')              
                  ->latest('created_at')
                  ->take(4)
               
                  ->get();           


      return view('web.docentes', compact('notidestacadas'));
   }

   public function noticiasb(){
      $noticiasb = DB::table('noticias')
                   
                   ->where('estatus','=','activo')
                   ->orderBy('created_at','desc')
                   ->paginate(5) ;

      $notidestacadas = DB::table('noticias')
                      ->where('estatus','=','activo')              
                      ->latest('created_at')
                      ->take(5)
                     
                      ->get();
                           
     return view('web.noticiasbrowse', compact('noticiasb', 'notidestacadas'));                
   }

   public function dnoticia($id) {

      $notidestacadas = DB::table('noticias')
               ->where('estatus','=','activo')              
               ->latest('created_at')
               ->take(5)
               ->get();
      
      $shownews = Noticias::find($id);  
      
      
     
      return view('web.notidetalle', compact('notidestacadas', 'shownews'));   
   }
  

}
