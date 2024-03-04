<!doctype html>
<html>
<head>
    <title>track</title>
</head>
<body>
    <h1>track</h1>
        

    <table>
        <tr>
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
            
            
                foreach($track as $row){
                    if(is_array($row)){
                        echo '<tr>';
                        echo '<td>'.$row['titre'].'</td>';
                        echo'<td>|</td>';
                        echo '<td>'.$row['filname'].'</td>';
                        echo'<td>|</td>';
                        echo '<td>'.$row['pathname'].'</td>';
                        echo'<td>|</td>';
                        echo '<td>'.$row['total'].'</td>';
                        echo'<td>|</td>';
                        echo '<td>'.$row['nb'].'</td>';
                        echo '</tr>';
                    }
                }
            
        ?>
    </table>
        <br>
        <br>
    <em>&copy; 2024</em>
</body>
</html>