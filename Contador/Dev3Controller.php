<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dev3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $data)
    {
        $desarrollo =[];
        if(!$data->filled('numbers5')){
           return view('dev.dev3', compact('desarrollo') ); 
        }

        $numeros6 = explode(',',$data->numbers5);
        $howMany7 = count($numeros6);
        $desarrollo3 = $this->comparationOrg ($numeros6, $howMany7);
        
        return view('dev.dev3')->with(['desa'=>$desarrollo3]);
     }
        
     
     function comparationOrg ($numeros6,$howMany7)
    {           
            $repetidos = [];
            
            $cumple=false;
            
            for($x=0;$x<$howMany7;$x++){
                $a = $numeros6[$x];
                $c = $x+1;
                for($y = 0 ;$y<$howMany7;$y++){
                    $b= $numeros6[$y];
                    if($a == $b && $x!= $y && ! array_key_exists($x,$repetidos)){
                        $cumple=true;
                        array_push($repetidos,$a);
                    }
                }
            }
            if($cumple==true){
                $repetidos1 = array_count_values($repetidos);
                return $repetidos1;
                        
            }
            elseif($cumple==false){    
                 
                  return [];
                  
                }   
            
        }        
}
