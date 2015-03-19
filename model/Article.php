<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author hb
 */
class Article {
    //put your code here
    public $id;
    private $titre;
    private $content;
    
    public function afficher() {
        echo $titre . "," . $content . "<br />";
    }
}
