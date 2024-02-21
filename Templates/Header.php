<?php
class Header
{
    public $title = "";
    public $path = "";
    public function __construct($path) {
        $this->path = explode("/", $path);
        if(isset($this->path[1])) {
            $this->title = $this->path[1];
        }else {
            $this->title = "Smokes CS2";
        }
       
    
    }

    public function getHeader() {

        $str = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . $this->title . '</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/style.css">

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            </head>
        <header>
            <nav class="d-flex align-items-center justify-content-around" id="main-menu>
                <div>
                    <a href=""><img src="/img/logo.jpg" class="logo-img"></a>
                </div>
                <ul class="d-flex">
                    <li><a href="#">Maps</a></li>
                    <li><a href="#">Player</a></li>
                    <li><a href="#">Sign in</a></li>
                </ul>
            </nav>

            <input type="checkbox" id="hamburger-input" class="burger-shower" />
            <label id="hamburger-menu" for="hamburger-input">
            <nav id="sidebar-menu">
                <h3>Cs2 Smokes</h3>
                <ul>
                <li><a href="#">Maps</a></li>
                <li><a href="#">Player</a></li>
                <li><a href="#">Sign in</a></li>
                </ul>
            </nav>
            </label>

        </header>
        <hr>
        ';
        echo $str;

    }

}