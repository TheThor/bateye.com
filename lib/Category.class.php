<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 1/23/14
 * Time: 8:00 PM
 */

class Category {
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
} 