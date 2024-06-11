<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PhotoGallery;
use App\Models\Admin\PhotoCategory;

class AjaxController extends Controller
{
    Public function delete_images(Request $request)
    {
        $data=explode(',',$request->rowid);
         $imgname=$data[0];
         $geid=$data[1];
         $data = Photogallery::where('id', $geid)->select('img')->first();
         $olddata= explode(",",$data->txtuplode);
         if (($key = array_search($imgname, $olddata)) !== false) {
            unset($olddata[$key]);
        }
         $inputdata= implode(",",$olddata);
         $pArray['img']  	= !empty($inputdata)?$inputdata:'';
         $res= Photogallery::where('id', $geid)->delete($pArray);

         $imguplode1 ='admin\upload\photoGallery\photo/'.$imgname; //die();
               echo   $imguplode1;
               echo "<br>";    
                     if (file_exists($imguplode1)) {
                         unlink($imgname);
                     }
                     
         if(!empty($res)){
            $newdata = Photogallery::where('id', $geid)->select('img')->first();
            echo json_encode( $newdata);
         }else{
            $error="Some error";
         }
         Photogallery::where('id',  $geid)->delete();
       die();
    }
    public function update_gallery_orders(Request $request)
    {
        $msg=array();
        if($request->ajax())
        {
            $id= clean_single_input( $request->id);
               $pArray['cat_postion'] =clean_single_input($request->gallery_postion);
               $data = PhotoCategory::where('id', $id)->first();
               if($data->cat_postion!==$request->gallery_postion){
                   $create 	= PhotoCategory::where('id', $id)->update($pArray);
                   $msg['success']='This Postion is Updated';
               }else{
                   $msg['error']='This Postion Alredy Taken';
               }
            $lastInsertID = $id;
            $user_login_id=Auth()->user()->id;
            if($create > 0){
                echo json_encode($msg);
                die();
                        
            }
        }
        
    }

}
