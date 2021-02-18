<?php 
    $title = 'Edit Record';
    require_once 'includes/headers.php'; 
    require_once 'includes/db/conn.php';

    $results = $crud->getSpecialties();

    if(!isset($_GET['id']))
    {
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
   
?>
 
    <h1 class="text-center">Edit Record</h1>

    <form method ="post" action="editpost.php">
        <input type="hidden" name ="id" value="<?php echo $attendee['attendee_id'] ?>"/>
    <br>
    <div class="row">
        <div class="col">First Name
            <input type="text" class="form-control" value ="<?php echo $attendee['firstname']?>" id="firstname" name="firstname">
    </div>
        <div class="col">Last Name
         <input type="text" class="form-control" value ="<?php echo $attendee['lastname']?>" id="lastname" name="lastname">
        </div>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type ="text" class="form-control" value ="<?php echo $attendee['dateofbirth']?>" id="dob" name="dob">
    </div>
    <br>
    <div class="form-group">
    <label for="specialty">Area Of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?> 
        <option value = "<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
        <?php echo $r['name']; ?>
        </option>
    <?php } ?>
    </select>

    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" value ="<?php echo $attendee['emailaddress']?>" id="Email" name="email">    
    </div>
    <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="phone" class="form-control" value ="<?php echo $attendee['contactnumber']?>" id="phone" name="phone">
    </div>
    <div class ="form-group">
    <br>
  
    </div>
    <br>
       <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button> 
       <a href ="viewrecords.php" class="btn btn-info">Back To List</a>
     
</form>
<br>
 <?php } ?>

    <?php require_once 'includes/footers.php'; ?>   
