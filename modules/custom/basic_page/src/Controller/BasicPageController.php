<?php
    namespace Drupal\basic_page\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class BasicPageController extends ControllerBase{
        public function basicPage(){
            return [
                '#title'=> "Basic Page Title with Php Code",
                '#markup'=> "<h1>This is Our First Custom Module </h1>"
            ];
        }

        public function information(){
            $data = array(
                'name'=>"Yogender Singh",
                'email'=>"yogender.singh4343@gmail.com"
            );
            return[
                "#title" => "Information Page",
                "#theme" => "information-page",
                "#items" => $data
            ];
        }
    }
?>