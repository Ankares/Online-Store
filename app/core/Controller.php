<?php

    class Controller{

        // Creating models
        protected function model($model) {  
            require_once 'app/models/'. $model . '.php';
            return new $model();
        }

        // Creating views
        protected function view($view, $data = []) { 
            require_once 'app/views/'. $view . '.php';
        }
    }
