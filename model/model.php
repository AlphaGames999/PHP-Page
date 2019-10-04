<?php
    class Model
    {
        public function getUrlViews($link)
        {
            if ($link == 'about')
            {
                $urlView = './views/modules/'.$link.'.php';
            }
            else if ($link == 'home')
            {
                $urlView = './views/modules/init.php';
            }
            else
            {
                $urlView = './views/modules/404.php';
            }

            return $urlView;
        }
    }
?>
