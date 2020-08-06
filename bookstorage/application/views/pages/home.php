<html>
<head>
    <script src="https://kit.fontawesome.com/c3d258e0b1.js" crossorigin="anonymous"></script>      
</head>
 <body>
    <table>
        <tr>
        <a href="<?php echo site_url('create') ?>"><button type="button" name="create">CREATE  <i class="fas fa-plus-circle"></i></button></a>
        </tr><br>
        <tr>
    
            <td>id</td>
            <td>Cover</td>
            <td>Title</td>
            <td>Price</td>
            <td></td>
        </tr>

            <?php
            echo $info;
            /*$i=0;
              foreach($info as $book){*/
            ?>
                <tr>
                    <td><?php //echo $book->bookid?></td>
                    <td><a href="<?php echo site_url('book') ?>"></a></td>
                    <td><a href="<?php echo site_url('book') ?>">fe<?php //echo $book->title?></a></td>
                    <td><?php //echo $book->sprice?></td>
                    <td><a href="<?php echo site_url('update') ?>"><button type="button" name="update" >UPDATE <i class="fas fa-sync-alt"></i></button></a>
                    <button type="button" name="delete" >DELETE <i class="fas fa-trash"></i></button></td>
                </tr>
              <?php 
                /*$i++;
              }*/?>
    </table>
 </body>
</html>