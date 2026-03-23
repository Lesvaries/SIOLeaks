<?php
function get_all_course_by_year($tag_year)
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM subject WHERE tag_year = :tag_year");
    $req->execute([
            tag_year = $tag_year;
    
        ]);
    $allCourse = $req->fetchall(PDO::FETCH_ASSOC);
}


?>