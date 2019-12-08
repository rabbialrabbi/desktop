<?php
/**
 * Created by PhpStorm.
 * User: Rabbi
 * Date: 11/17/2019
 * Time: 1:20 PM
 */

namespace App;


class data
{

    public function get_submenu_data($menu_name){
        switch ($menu_name) {
            case "add":
                return $data =(object) [
                    (object) ['menu_name'=>'Add City', 'link_name'=>'add.city','active_class'=>'add_city'],
                    (object)['menu_name'=>'Add Route', 'link_name'=>'add.route','active_class'=>'add_route'],
                    (object)['menu_name'=>'Add Bus', 'link_name'=>'add.bus','active_class'=>'add_bus'],
                ];
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

    }

}
