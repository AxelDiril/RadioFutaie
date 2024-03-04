<!doctype html>
<html>
<head>
    <title>track</title>
</head>
<body>
    <h1>track</h1>
        

    <table>
        <th>titre</th>
                <th>|</th>
                <th>filname</th>
                <th>|</th>
                <th>pathname</th>
                <th>|</th>
                <th>total</th>
                <th>|</th>
                <th>nb</th>
        </tr>
        <?php
            if (!empty($level) && is_array($level)){
            
                foreach($level as $item){
                    if(is_array($item)){
                        echo '<tr>';
                        echo '<td>'.esc($item['label']).'</td>';
                        echo'<td>|</td>';
                        echo '<td>'.esc($item['comment']).'</td>';
                        echo '</tr>';
                    }
                }
            }
            else{
                echo 'Aucun level trouvé.';
            }
        ?>
    </table>
        <br>
        <br>
    <em>&copy; 2024</em>
</body>
</html>