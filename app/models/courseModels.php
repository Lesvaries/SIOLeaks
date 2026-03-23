<?php
function get_all_by_year($tag_year)
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM subject WHERE tag_year = 1");
    $req->execute([
            
        ]);
}


?>