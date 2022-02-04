<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;

class Admin_all_Controller extends Controller
{
    

   public function all_order(){
     

    $all=Order::all();

    $c=array();
    foreach($all as $a){



         $c[]=[

          'name'=>$a->user_info->name,
          'food_name'=>$a->Food_info->title,
            'quantity'=>$a->quantity,
            'price'=>$a->quantity*$a->Food_info->price
         ];


    }
   
     return view('admin_view.order',compact('c'));
   }

    public function user(){
        $user_Data=User::all();
     
        return view("admin_view.user",compact("user_Data"));
    }
    public function dlt($id){
  
   $x=user::find($id);
   $x->delete();


    }
    public function admin_food(){
 

      $all_data=Food::all();

       return view('admin_view.food',compact('all_data'));


    }
    public function load(){
      $user_Data=User::all();
      foreach($user_Data as $a){
        ?>
     

        <tr >
        <th scope="row"></th>
        <td> <?php echo $a->name  ?></td>
        <td><?php echo $a->email  ?></td>
             

        <?php
        if($a->is_admin==0)
        {
        ?>

           <td>
           
         
            <a href=" "  id='d' value='<?php echo $a->id  ?>'   class="btn btn-danger f" >delete</a>
            
            
           
          </td>
        <?php
        }
        ?>
     
      </tr>   
      <?php
      }
    }
}
