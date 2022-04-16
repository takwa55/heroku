<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class WilayaReportController extends Controller
{
    public function index()
    {
        $wilayas = Wilaya::all();
        return view('page.wilaya_rapport',compact('wilayas'));
    }

    
    public function Search_invoices(Request $request){
        $rdio = $request->rdio;
    
    
     // في حالة البحث بنوع الفاتورة
        
        if ($rdio == 1) {
           
           
     // في حالة عدم تحديد تاريخ
            if ($request->type && $request->start_at =='' && $request->end_at =='') {
               $wilayas = Wilaya::select('*')->where('user','=',$request->type)->get();
               $type = $request->type;
               return view('page.wilaya_rapport',compact('type','wilayas'))->withDetails($wilayas);
            }
            
            // في حالة تحديد تاريخ استحقاق
            else {
               
              $start_at = date($request->start_at);
              $end_at = date($request->end_at);
              $type = $request->type;
              
              $wilayas = Wilaya::whereBetween('Reponse',[$start_at,$end_at])->where('user','=',$request->type)->get();
              return view('page.wilaya_rapport',compact('type','start_at','end_at','wilayas'))->withDetails($wilayas);
              
            }
    
     
            
        } 
        
    //====================================================================
        
    // في البحث برقم الفاتورة
        else {
            
            $wilayas = Wilaya::select('*')->where('N_Pension','=',$request->N_Pension)->get();
            return view('page.wilaya_rapport',compact('wilayas'))->withDetails($wilayas);
            
        }
    
        
         
        }
        
}
