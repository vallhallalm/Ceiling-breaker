<?php
    $poste = filter_input(INPUT_GET, 'poste');
    $string = $poste.'.html';
    include "$string";
    echo('<a href="$string"></a>');
    exit;
?>