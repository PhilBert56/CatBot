<?php
if (empty($_GET)) {
    echo "Aucune donnée reçue";
}
else {
    $get = print_r($_GET, true);
    file_put_contents('post_form.log', $get);
}
