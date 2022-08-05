<?php

class Page{

    function homepage(){
        $content="<h1>Hi</h1><div>I'm in the homepage</div>";
        require_once("view.php");
    }

    function folder1(){
        $content="<h1>Hi</h1><div>I'm in folder1</div>";
        require_once("view.php");
    }

    function folder2(){
        $content="<h1>Hi</h1><div>I'm in folder2</div>";
        require_once("view.php");
    }

}
?>