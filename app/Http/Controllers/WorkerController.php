<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class WorkerController extends Controller
{
    public function showWorkers()
    {
        $workers = Worker::where('id', '<', 5000)
                            ->select('id','name','chief_id')
                            ->get()
                            ->toArray();
        
        // $tree = $this->formTree($workers);
        // $new = array();
        foreach ($workers as $a){
            $new[$a['chief_id']][] = $a;
        }
        $tree = $this->createTree($new, $new[0]); // changed
        return view('tree')->with(['tree' => $tree]);
        print_r($tree);

        
    }
    
    // private function createTree(&$list, $parent){
    //     $tree = '<ul>';
    //     foreach ($parent as $k=>$l){
    //         if(isset($list[$l['id']])){
    //             //dd($l);
    //             $tree .= '<li>' . $l['name'];
    //             $tree .= $this->createTree($list, $list[$l['id']]);
    //             $tree .= '</li>';
    //         }
    //         //$tree .= '<li>' . $l['children'] = $this->createTree($list, $list[$l['id']]);
    //         $tree .= '</ul>';
    //     } 
    //     return $tree;
    // }

    private function createTree(&$list, $parent){
        $tree = array();
        foreach ($parent as $k=>$l){
            if(isset($list[$l['id']])){
                $l['children'] = $this->createTree($list, $list[$l['id']]);
            }
            $tree[] = $l;
        } 
        return $tree;
    }
   
}
