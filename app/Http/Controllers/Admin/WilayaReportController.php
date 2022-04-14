<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class WilayaReportController extends Controller
{
    public function index()
    {
        $enquetes = Wilaya::all();
        return view('page.wilaya_rapport',compact('enquetes'));
    }

    
    public function Search_invoices(Request $request){
        $rdio = $request->rdio;
    
    
     // في حالة البحث بنوع الفاتورة
        
        if ($rdio == 1) {
           
           
     // في حالة عدم تحديد تاريخ
            if ($request->type && $request->start_at =='' && $request->end_at =='') {
               $enquetes = Wilaya::select('*')->where('user','=',$request->type)->get();
               $type = $request->type;
               return view('page.wilaya_rapport',compact('type','enquetes'))->withDetails($enquetes);
            }
            
            // في حالة تحديد تاريخ استحقاق
            else {
               
              $start_at = date($request->start_at);
              $end_at = date($request->end_at);
              $type = $request->type;
              
              $enquetes = Wilaya::whereBetween('Reponse',[$start_at,$end_at])->where('user','=',$request->type)->get();
              return view('page.wilaya_rapport',compact('type','start_at','end_at','enquetes'))->withDetails($enquetes);
              
            }
    
     
            
        } 
        
    //====================================================================
        
    // في البحث برقم الفاتورة
        else {
            
            $enquetes = Wilaya::select('*')->where('N_Pension','=',$request->N_Pension)->get();
            return view('page.wilaya_rapport',compact('enquetes'))->withDetails($enquetes);
            
        }
    
        
         
        }
        
}
