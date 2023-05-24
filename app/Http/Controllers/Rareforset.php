<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// $Animal=[

        //     [
        //         'Code'=>'1',
        //         'Name'=>'Macaw Parrot',
        //         'Price'=>'3500 RS',
        //         'imge'=>'macaw.png'

        //     ],

        //     [
        //         'Code'=>'2',
        //         'Name'=>'Meerkat',
        //         'Price'=>'3500 RS',
        //         'imge'=>'merkat.jpg'
        //     ],
        //     [
        //         'Code'=>'3',
        //         'Name'=>'chinchilla',
        //         'Price'=>'3500 RS',
        //         'imge'=>'chin.jpg'
        //     ]
        // ];


        
class Rareforset extends Controller
{
    public function Animaltype()
    {


        $forest=DB::table('product')->get();
        

        return view('animals',['animals'=>$forest]);


    }

    public function CheckOut($id){
        $forest = DB::table('product')->where('id',$id)->first();
        
        return view('checkout',compact('forest'));
       }

       public function invoice(Request $request)
{
    // insert row
    $inv = [
        'Name' => $request->fullname,
        'Country' => $request->country,
        'Birthdate' => $request->d,
        'Phone' => $request->phone,
        'Email' => $request->email,
        'Address' => $request->address,
        'ProductName' => $request->pname,
        'Total' => $request->total
    ];
    
    // get id of row after insert
    $id = DB::table('invoice')->insertGetId($inv);
    
    // update invoice record with generated invoice number
    $invoiceNumber = '#' . $id;
    DB::table('invoice')->where('id', $id)->update(['InvoiceNumber' => $invoiceNumber]);
    
    // retrieve the inserted invoice record
    $invoice = DB::table('invoice')->where('id', $id)->first();
    
    return view('invoic', compact('invoice'));
}

       
     }


