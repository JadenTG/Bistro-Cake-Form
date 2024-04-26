<?php include "header.php" ?>
<div class="container mt-5">
    <h1 class="text-center"> Bistro Order Table </h1>
    <a href="index.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create a new bistro cake order </a>

    <table class="table table-striped tables-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col"> Table ID </th>
                <th scope="col"> First Name </th>
                <th scope="col"> Address </th>
                <th scope="col"> City </th>
                <th scope="col"> Region </th>
                <th scope="col"> Zip </th>
                <th scope="col"> Phone Number </th>
                <th scope="col"> Cake </th>
                <th scope="col"> Raw Cake </th>
                <th scope="col" colspan="3" class="text-center"> CRUD Application ( Bistro Ver. ) </th>
            </tr>
        </thead>
        <tbody>
        <?php 

        $query="SELECT * FROM bistro";
        $view_bistro=mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($view_bistro)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $addy = $row['addy'];
            $city = $row['city'];
            $region = $row['region'];
            $zip = $row['zip'];
            $pnum = $row['pnum'];
            $cake = $row['cake'];
            $rawcake = $row['rawcake'];
            echo "<tr >";
            echo "<th scope='row' > {$id} </th>";
            echo "<td > {$firstname} </td>";
            echo "<td > {$addy} </td>";
            echo "<td > {$city} </td>";
            echo "<td > {$region} </td>";
            echo "<td > {$zip} </td>";
            echo "<td > {$pnum} </td>";
            echo "<td > {$cake} </td>";
            echo "<td > {$rawcake} </td>";
            echo " <td class='text-center'> <a href='view.php?&id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
            echo " <td class='text-center' > <a href='edit.php?edit&id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Edit</a> </td>";
            echo " <td  class='text-center'>  <a href='delete.php?&delete&id={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Delete</a> </td>";
            echo " </tr> ";
        }
        ?>
        </tbody>
    </table>
</div>
<?php include "footer.php" ?>