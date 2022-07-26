<?php
    if (isset($_POST)) {
        $a = $_POST['char'];
        var_dump($a);
        $c = [];
        $d = count($a);
        $d -= 1;
        for ($b = 0; $b < count($a);$b++) {
            $c[$d] = $a[$b];
            $d--;
        }
        for ($b = 0; $b < count($c);$b++) {
            echo $c[$b];
        }

    }
?>