<html>
<head>
    <style>
        button{
            background-color:transparent;
        }
    </style>
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

        <?php foreach ($item as $all_prod): ?> 
                   
                <tr>
                    <td><?php echo $all_prod->bookid?></td>
                    <td><a href="<?php //echo site_url('book') ?>"></a></td>
                    <td><a href="<?php //echo site_url('book') ?>"><?phpecho $all_prod->title?></a></td>
                    <td><?php echo $all_prod->sprice?></td>
                    <td><a href="<?php echo site_url('update') ?>"><button type="button" name="update" >UPDATE <i class="fas fa-sync-alt"></i></button></a>
                    <button type="button" name="delete" >DELETE <i class="fas fa-trash"></i></button></td>
                </tr>
        <?php endforeach; ?>
    </table>
 </body>
</html>