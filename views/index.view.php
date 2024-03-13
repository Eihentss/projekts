<?php include "components/head.php"; 
 include "components/navbar.php"; ?>
     <link rel="stylesheet" href="style.css">
    <form >
    <?php
    if(isset($_GET["id"])) {
        ?>
    <input name='id' value='<?= $_GET["id"]?>'/><?php
    }else{
        ?><input name='id' value=''/><?php
    }
    ?>
    <button>Submits</button>
    </form>


    <form>
    <?php
    if(isset($_GET["name"])) {
        ?>
    <input name='name' value='<?= $_GET["name"]?>'/><?php
    }else{
        ?><input name='name' value=''/><?php
    }
    ?>

    <button>Submit Category</button>

    </form>


    <h1>Posts</h1>
    <ol>
    <?php
    foreach($posts as $post){
        ?>
        <li>
        <?=
        $post["title"];
        ?>
        </li><?php
    }
    ?>
    </ol>
</body>
</html>

