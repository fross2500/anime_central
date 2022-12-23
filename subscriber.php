
<?php
$title = 'Subscribe';

 require_once "includes/header.php"; 
 require_once "db/conn.php";
 $results = $crud->getspecialties();
 ?>

    

    <h1 class="text-center">Anime Central Subcription List</h1>

    <form method="post"  action="success.php" enctype="multipart/form-data">
    
    <div class="mb-3">
            <label for="firstname"> First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
            
        </div>


        <div class="mb-3">
            <label for="lastname"> Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
        </div>

        <div class="mb-3">
            <label for="gender"> Gender </label>
            <select class="form-control" id="gender" name="gender">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['gender_id']?>"><?php echo $r['name']; ?></option>
                <?php }?>    
            </select>
                </div>
           
            <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="addressHelp" name="address">
            <small id="addressHelp" class="form-text">We'll never share your
            Address with anyone else.</small>
            
            <br/>
           <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-groupform-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>

        <br/>
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
            <label class="custom-file-label" for="avatar">Upload Favourite Anime Character</label>
            <small id="avatar" class="form-text text-danger">File Upload Is Optional</small>
        </div>
        <br/>

        <br>
       
        <button type="submit" name="submit" class="btn btn-dark text-white btn-block" style="width: 70rem;">Submit</button>
    </div>

 </form>



<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>