<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ComputeController extends Controller{
    public function compute(Request $request){
        $input = $request->all();
        unset($input["_token"]);  

        $caution=false;

        $process = new Process(['python3', '/var/www/python/test.py',$input["gejalaPertama"], $input["berair"], $input["berairParah"], $input["disentri"], $input["bepergian"], $input["demam"], $input["durasi"]]);
        $process->run();
        
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        

        $data = $process->getOutput();



        $out=array();

        if(strpos($data, 'A')!==false || strpos($data, 'B')!==false){
            array_push($out, "A");            
            if($request->input('imun')=="1" || $request->input('lansia')=="1" || $request->input('antibiotik')=="1"){
                $caution=true;
            }
            if(strpos($data, 'D')!==false){
                array_push($out, "D");
            }
            if(strpos($data, 'F')!==false){
                array_push($out, "F");
            }
            if(strpos($data, 'G')!==false){
                array_push($out, "G");
            }
        }
        if(strpos($data, 'B')!==false){
            array_push($out, "B");
        }
        if(strpos($data, 'C')!==false){
            array_push($out, "C");
        }
        if(strpos($data, 'E')!==false){
            array_push($out, "E");
        }
        if($data == ""){
            $caution=false;
        }

        return view('result', ['response'=>$out, 'caution'=>$caution]);
    }
}
