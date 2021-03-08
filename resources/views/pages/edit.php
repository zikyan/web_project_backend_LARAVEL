<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php');
$db=mysqli_connect('localhost', 'root', '', 'products');

if(isset($_POST['edit-btn']))
{
    $edit_proid=$_POST['edit-proid'];
    $edit_proname=$_POST['edit-proname'];
    $edit_propic=$_POST['edit-propic'];
    $edit_proprice=$_POST['edit-proprice'];
    $edit_prostock=$_POST['edit-prostock'];
    $edit_procode=$_POST['edit-procode'];
    $edit_prodis=$_POST['edit-prodis'];
    $edit_proavail=$_POST['edit-proavail'];
    $edit_promat=$_POST['edit-promat'];
    $edit_prosize=$_POST['edit-prosize'];
    $edit_prospecs=$_POST['edit-prospecs'];

    $query="update single set proname='$edit_proname', propic='$edit_propic', proprice='$edit_proprice', prostock='$edit_prostock', procode='$edit_procode', prodis='$edit_prodis', proavail='$edit_proavail', promat='$edit_promat', prosize='$edit_prosize', prospecs='$edit_prospecs' where id='$edit_proid' ";
    $result=mysqli_query($db, $query);

    header('location:dashboard.php');
}
?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
        </div>
            <div class="card-body">

            <?php
            $db=mysqli_connect('localhost','root', '', 'products');
            if(isset($_POST['edit_btn']))
            {
                $id=$_POST['edit_id'];
                $query="select * from single where id='$id' ";
                $result=mysqli_query($db, $query);
            
                foreach($result as $row)
                {

                    
                ?>


        <form method="post" action="">

        <input type="hidden" name="edit-proid" value="<?php echo $id ?>">
        
        <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="edit-proname" class="form-control" placeholder="Enter Name" value="<?php echo $row['proname'] ?>" required>
        </div>

        <div class="form-group">
        <label>Product Image</label>
        <input type="file" name="edit-propic" class="form-control">
        </div>

        <div class="form-group">
        <label>Product Price ($)</label>
        <input type="text" name="edit-proprice" class="form-control" placeholder="Enter Price" value="<?php echo $row['proprice'] ?>" required>
        </div>

        <div class="form-group">
        <label>In Stock</label>
        <select name="edit-prostock" class="form-control">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
        </div>

        <div class="form-group">
        <label>Product Code</label>
        <input type="text" name="edit-procode" class="form-control" placeholder="Enter Code" value="<?php echo $row['procode'] ?>" required>
        </div>

        <div class="form-group">
        <label>Product Discount (%)</label>
        <input type="text" name="edit-prodis" class="form-control" placeholder="Enter Discount" value="<?php echo $row['prodis'] ?>" required>
        </div>

        <div class="form-group">
        <label>Available Sizes</label>
        <input type="text" name="edit-proavail" class="form-control" placeholder="Enter Available Sizes" value="<?php echo $row['proavail'] ?>" required>
        </div>

        <div class="form-group">
        <label>Product Material</label>
        <input type="text" name="edit-promat" class="form-control" placeholder="Enter Material" value="<?php echo $row['promat'] ?>" required>
        </div>

        <div class="form-group">
        <label>Product Size</label>
        <input type="text" name="edit-prosize" class="form-control" placeholder="Enter Size" value="<?php echo $row['prosize'] ?>" required>
        </div>

        <div class="form-group">
        <label>Product Specification</label>
        <textarea style="margin-bottom: 23px;" name="edit-prospecs" class="form-control" placeholder="Enter Specification" required><?php echo $row['prospecs'] ?></textarea>

        <a href="dashboard.php" class="btn btn-warning">Cancel</a>
        <button type="submit" name="edit-btn" class="btn btn-primary">Update</button>
        </div>

        </form>

        <?php
                }
            }
        ?>
    </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>