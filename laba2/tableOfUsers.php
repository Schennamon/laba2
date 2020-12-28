<table class="table" >
    <thead>
        <th>#</th>
        <th>First Name</th> 
        <th>Last Name</th>
        <th>Login</th>
        <th>Role</th>
    </thead>
    <tbody>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "0107945";
            $database = "testdb";
        
            $conn = mysqli_connect($servername, $username, $password, $database);

            $queryUser = "SELECT * FROM users";
            $resultUser = mysqli_query($conn, $queryUser);

            if($resultUser){
                while($rowUser = mysqli_fetch_array($resultUser)){
                    echo "<tr>";
                        echo "<td>".$rowUser['id']."</td>";
                        echo "<td>".$rowUser['first_name']."</td>";
                        echo "<td>".$rowUser['last_name']."</td>";
                        echo "<td>".$rowUser['email']."</td>";

                        if($rowUser['role_id'] == 1){
                            echo "<td>"."User"."</td>";
                        }else{
                                echo "<td>"."Admin"."</td>";
                             }
                    echo "</tr>";
                }
            }
        ?>
    </tbody> 
</table>
