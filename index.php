c<?php
        //header('Access-Control-Allow-Origin: *');
        //header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

        //header('Access-Control-Allow-Origin: https://suzukiwaruko.github.io');
        //header('Access-Control-Allow-Methods: GET, OPTIONS');
        //header('Access-Control-Allow-Headers: Content-Type');

        $cmd='none';
        $arg1='none';
        $arg2='none';
        $arg3='none';

        if(isset($_GET['cmd'])) {
                $cmd = $_GET['cmd'];
        }

        if(isset($_GET['arg1'])) {
                $arg1 = $_GET['arg1'];
        }

        if(isset($_GET['arg2'])) {
                $arg2 = $_GET['arg2'];
        }

        if(isset($_GET['arg3'])) {
                $arg3 = $_GET['arg3'];
        }

        $exec = "https://vrmanscg.com/03R/index.php?";
        $exec .= 'cmd=';
        $exec .= $cmd;
        $exec .= '&arg1=';
        $exec .= $arg1;
        $exec .= '&arg2=';
        $exec .= $arg2;
        $exec .= '&arg3=';
        $exec .= $arg3;
        echo exec($exec);
        //echo "TAIL OF DATA\r\n"
?>
