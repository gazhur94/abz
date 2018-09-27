<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class WorkerController extends Controller
{
    public function showWorkers()
    {
        $workers = Worker::where('level', '<=', 2)
                            ->select('id','name','chief_id', 'level', 'position')
                            ->get()
                            ->toArray();
        

        foreach ($workers as $worker) {
            $new[$worker['chief_id']][] = $worker;
        }


        //$tree = collect($this->createTree($new, $new[0])); // changed
        $tree = $this->array_to_object($this->createTree($new, $new[0]));
       // dd($tree);
        //$childrens = $tree[0]['children'];
        return view('tree')->with(['workers' => $tree]);
        //print_r($tree);

        
    }

    public function getSubstitutes(Request $request) {
        $id = $request->id;
        //$id = $request
        $workers = Worker::where('chief_id', '=', $id)
            ->select('id','name','chief_id', 'level', 'position')
            ->get()
            ->toArray();
        //return 'abc';
        return json_encode($workers);
    }

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

    function array_to_object($array) {
        $obj = new \stdClass();
        foreach($array as $k => $v) {
            if(strlen($k)) {
                if(is_array($v)) {
                    $obj->{$k} = $this->array_to_object($v); //RECURSION
                } else {
                    $obj->{$k} = $v;
                }
            }
        }
        return $obj;
    }

}
