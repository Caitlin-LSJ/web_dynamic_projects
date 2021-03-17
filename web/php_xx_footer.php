<footer>
    Copyright &copy;
    <?php
        // Owner: is set properly, is not null, is not empty
        // if (!isset($owner) || is_null($owner) || $owner == "") {
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
