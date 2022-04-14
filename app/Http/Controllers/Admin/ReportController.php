<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Myparent;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $enquetes = Myparent::all();
        return view('page.rapport',compact('enquetes'));
    }

    
    public function Search_invoices(Request $request){
        $rdio = $request->rdio;
    
    
     // في حالة البحث بنوع الفاتورة
        
        if ($rdio == 1) {
           
           
     // في حالة عدم تحديد تاريخ
            if ($request->type && $request->start_at =='' && $request->end_at =='') {
               $enquetes = Myparent::select('*')->where('user','=',$request->type)->get();
               $type = $request->type;
               return view('page.rapport',compact('type','enquetes'))->withDetails($enquetes);
            }
            
            // في حالة تحديد تاريخ استحقاق
            else {
               
              $start_at = date($request->start_at);
              $end_at = date($request->end_at);
              $type = $request->type;
              
              $enquetes = Myparent::whereBetween('Reponse',[$start_at,$end_at])->where('user','=',$request->type)->get();
              return view('page.rapport',compact('type','start_at','end_at','enquetes'))->withDetails($enquetes);
              
            }
    
     
            
        } 
        
    //====================================================================
        
    // في البحث برقم الفاتورة
        else {
            
            $enquetes = Myparent::select('*')->where('N_Pension','=',$request->N_Pension)->get();
            return view('page.rapport',compact('enquetes'))->withDetails($enquetes);
            
        }
    
        
         
        }
        
}

