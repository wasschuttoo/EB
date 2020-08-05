<html>
<head>
</head>
 <body>
    <table>
        <tr>
            <td>id</td>
            <td>Cover</td>
            <td>Title</td>
            <td>Price</td>
            <td></td>
            <td></td>
        </tr>

            <?php
              foreach($userArray as $key =>$value) {
            ?>
                <tr>
                    <td><?php $value['id']?></td>
                    <td></td>
                    <td><?php $value['title']?></td>
                    <td><?php $value['sprice']?></td>
                    <td></td>
                    <td></td>
                </tr>
              <?php }?>
    </table>
 </body>
</html>