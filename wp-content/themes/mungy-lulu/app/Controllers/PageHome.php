<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageHome extends Controller
{
    // Pass on all fields from Advanced Custom Fields to the view
    protected $acf = true;

    // This fx gets converted to a snake case variable "home_title"
    public function homeTitle() {
        // Explode on "|" and wrap on span
        $home_title = get_field("home_title");
        $arr = explode("|", $home_title);
        $str = "";
        foreach ($arr as $item) {
            $str .= "<span>" . $item . "</span>";
        }
        return $str;
    }
}
