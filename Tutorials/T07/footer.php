<footer>
    Copyright &copy;
    <?php
    //Owner: is set properly, not null, not empty
    // if (!isset($owner) || !is_null($owner) || $owner == "") {
    //     error_log("Please set owner properly.");
    //     $owner = "(?? Unknown)";
    // }
    if (empty($owner)) {
        error_log("Please set owner properly.");
        $owner = "(?? Unknown)";
    }
    echo $owner;
   
    ?>
</footer>