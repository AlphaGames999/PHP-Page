<?php
    class Controller
    {
        public function includeTemplate()
        {
            include "./views/template.php";
        }

        public function getViews()
        {
            if (isset($_GET['link']))
            {
                $link = $_GET['link'];
            }
            else
            {
                $link = 'home';
            }

            $urlView = Model::getUrlViews($link);
            return $urlView;
        }
    }
?>
