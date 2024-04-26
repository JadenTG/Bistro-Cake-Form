<?php include "header.php" ?>
<?php 
    if(isset($_GET['id'])){
        $bistro_id = $_GET['id'];
    }

    $query ="SELECT * FROM bistro WHERE id = {$bistro_id}";
    $view_bistro = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($view_bistro)){
        $id = $row['id'];
        $firstname = $row['firstname'];
        $addy = $row['addy'];
        $city = $row['city'];
        $region = $row['region'];
        $zip = $row['zip'];
        $pnum = $row['pnum'];
        $cake = $row['cake'];
        $rawcake = $row['rawcake'];
    }

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $addy = $_POST['addy'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $zip = $_POST['zip'];
        $pnum = $_POST['pnum'];
        $cake = $_POST['cake'];
        $rawcake = $_POST['rawcake'];

        $query = "UPDATE bistro SET id='{$id}', firstname='{$fname}', addy='{$addy}', city='{$city}', region='{$region}', zip='{$zip}', pnum='{$pnum}', cake='{$cake}', rawcake='{$raw}' WHERE id=$id";
        $edit_bistro = mysqli_query($conn,$query);
        echo "<script type='text/javascript'>alert('Student data updated successfully!')</script>";
    }
?>

<h1 class="text-center"> Edit Pet Details </h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="firstname"> First Name </label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $firstname ?>">
        </div>
        
        <div class="form-group">
            <label for="addy"> Street Address </label>
            <input type="text" name="addy" class="form-control" value="<?php echo $addy ?>">
        </div>

        <div class="form-group">
            <label for="city"> city </label>
            <input type="text" name="city" class="form-control" value="<?php echo $city ?>">
        </div>

        <div class="form-group">
            <label for="region"> Region </label>
            <input type="text" name="region" class="form-control" value="<?php echo $region ?>">
        </div>
        
        <div class="form-group">
            <label for="zip"> Postal/Zip Code </label>
            <input type="num" name="zip" class="form-control" value="<?php echo $zip ?>">
        </div>

        <div class="form-group">
            <label for="pnum"> Phone Number </label>
            <input type="text" name="pnum" class="form-control" value="<?php echo $pnum ?>">
        </div>

        <div class="form-group">
            <input type="submit" name="edit" class="btn btn-primary mt-2" value="edit">
        </div>
    </form>

    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-warning mt-5"> back </a>
    </div>
</div>

<?php include "footer.php" ?>