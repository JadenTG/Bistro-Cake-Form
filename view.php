<?php include "header.php" ?>

<h1 class="text-center container mt-5"> Order Details </h1>
<div class="container">
    <table class="table table-striped table-borded table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col" name="id"> Table ID </th>
                <th scope="col" name="firstname"> Name </th>
                <th scope="col" name="addy"> Address </th>
                <th scope="col" name="city"> City </th>
                <th scope="col" name="region"> Region </th>
                <th scope="col" name="zip"> Postal/Zip Code </th>
                <th scope="col" name="pnum"> Phone Number </th>
                <th scope="col" name="cake"> Cake </th>
                <th scope="col" name="rawcake"> Raw Cake </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php 
                    if(isset($_GET['id'])){
                        $bistro_id = $_GET['id'];

                        $query = "SELECT * FROM bistro WHERE id = $bistro_id";
                        $view_bistro = mysqli_query($conn,$query);

                        while($row=$view_bistro->fetch_assoc()){
                            $id=$row['id'];
                            $firstname=$row['firstname'];
                            $addy=$row['addy'];
                            $city=$row['city'];
                            $region=$row['region'];
                            $zip=$row['zip'];
                            $pnum=$row['pnum'];
                            $cake=$row['cake'];
                            $rawcake=$row['rawcake'];

                            echo "<tr>";
                            echo " <td> {$id} </td>";
                            echo " <td> {$firstname} </td>";
                            echo " <td> {$addy} </td>";
                            echo " <td> {$city} </td>";
                            echo " <td> {$region} </td>";
                            echo " <td> {$zip} </td>";
                            echo " <td> {$pnum} </td>";
                            echo " <td> {$cake} </td>";
                            echo " <td> {$rawcake} </td>";
                            echo"</tr>";
                        }
                    }
                ?>
            </tr>
        </tbody>
    </table>
    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    </div>
</div>

<?php include "footer.php" ?>