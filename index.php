<?php include "header.php"?>


<?php 

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $addy = $_POST['addy'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $zip = $_POST['zip'];
        $pnum = $_POST['pnum'];
        $cake = $_POST['cake'];
        $rawcake = $_POST['rawcake'];

        // echo $pnum;
        $query = "INSERT INTO bistro(id,firstname,addy,city,region,zip,pnum,cake,rawcake)VALUES('{$id}','{$firstname}','{$addy}','{$city}','{$region}','{$zip}','{$pnum}','{$cake}','{$rawcake}')";
        $add_bistro = mysqli_query($conn,$query);

        if(!$add_bistro){
            echo "something went wrong". mysqli_err($conn);
        } else{
            echo "<script type='text/javascript'>alert('Order added successfully!')</script>";
        }
    }
?>

<div class="container">
    <form method="post">
        <h1 class="text-center">Bistro Mini-Cake Order Form</h1><br />
        <label>Delivery Address:</label>
        <input type="text" class="form form-control" name="firstname" placeholder="First & Last Name" required/><br />
        <input type="text" class="form form-control" name="addy" placeholder="Street Address" /><br />
        <input type="text" class="form form-control" name="city" placeholder="City"  required/><br />
        <input type="text" class="form form-control" name="region" placeholder="Region" required/><br />
        <input type="number" class="form form-control" name="zip" placeholder="Postal/Zip" required/><br />
        <select class="form form-control mb-5">
            <option value="Other">Other</option>
            <option value="United">United States of America</option>
            <option value="UK">United Kingdom</option>
            <option value="Can">Canada</option>
            <option value="Mexico">Mexico</option>
            <option value="Africa">Africa</option>
            <option value="Russia">Russia</option>
            <option value="4Brazil">Brazil</option>
        </select>

        <label class="mb-3">Table Number:</label>
        <input type="num" class="form form-control" name="id" placeholder="#"/>

        <label class="mt-5 mb-5" for="cake">Best Option for you:</label><br />
        <input type="radio" name="cake" value="Wild Berry" class="mb-5"/> Wild Berry<br />
        <input type="radio" name="cake" value="Carrot & Pumpkin Cake" class="mb-5"/> Carrot & Pumpkin Cake<br />
        <input type="radio" name="cake" value="Chocolate, Vanilla and Carmel Cake" class="mb-5"/> Chocolate, Vanilla and Carmel Cake<br />
        <input type="radio" name="cake" value="Cheesecake with Raspberry" class="mb-5"/> Cheesecake with Raspberry<br />
        <input type="radio" name="cake" value="Tiramisu" class="mb-5"/> Tiramisu<br />
        <input type="radio" name="cake" value="Amandina Cake" class="mb-5"/> Amandina Cake<br />


        <label class="mt-5 mb-5" for="rawcake">Best raw option for you:</label><br />
        <input type="radio" name="rawcake" value="Wild Berry Cake - Raw" class="mb-5"/> Wild Berry Cake - Raw<br />
        <input type="radio" name="rawcake" value="Amoraws Cake - Raw" class="mb-5"/> Amoraws Cake - Raw<br />
        <input type="radio" name="rawcake" value="Pear, Banana, Pineapple and Cake - Raw" class="mb-5"/> Pear, Banana, Pineapple and Cake - Raw<br />
        <input type="radio" name="rawcake" value="Chocolate Cake - Raw" class="mb-5"/> Chocolate Cake - Raw<br />
        <input type="radio" name="rawcake" value="Mango & Vanilla Cake - Raw" class="mb-5"/> Mango & Vanilla Cake - Raw<br />
        <input type="radio" name="rawcake" value="ocoa and Mint Cake - Raw" class="mb-5"/> Cocoa and Mint Cake - Raw<br />

        <label>Phone Number:</label><br />
        <input type="text" class="form form-control" name="pnum" placeholder="###-###-####" required/><br />
        

        <input type="submit" class="form" value="submit" name="submit"/>
    </form>
    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    </div>
</div>
<?php include "footer.php"?>