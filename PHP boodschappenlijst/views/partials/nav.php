<?php
require "./functions.php";
?>

<div id="navbar">
        <ul style="display:inline">
                <li style="display:inline" <?php if(urlIs('/')){ echo "class=\"strong\"" ; } ?>  >
                        <a href="/" class="home">Home</a>
                </li> 
                <li style="display:inline" <?php if(urlIs('/create')){ echo "class=\"strong\"" ; } ?>>
                        <a href="/create" class="input">Create</a>
                </li>
        </ul>
</div>