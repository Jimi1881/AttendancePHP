<?php 
    $title = 'Success';
    require_once 'includes/headers.php'; 
    require_once 'includes/db/conn.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email= $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];
        $SisSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);
        //call function to insert and track if success or not

        if($SisSuccess){
            include 'includes/successmessage.php';
        }
        else{
            echo '<h1 class="text-center text-success">There was an error in processing!</h1>';
        }
     }

?>

    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">
              Name: <?php echo $_POST["firstname"] ." ". $_POST["lastname"]; ?></h5>
            <h6 class="card-title">
                Specialty: <?php echo $_POST["specialty"]; ?></h6>
            <h6 class="card-title">
                DOB: <?php echo $_POST["dob"]; ?></h6>
            <h6 class="card-title">
                Email: <?php echo $_POST["email"]; ?></h6>
            <h6 class="card-title">
                Phone: <?php echo $_POST["phone"]; ?></h6>
            <a href="index.php" class="btn btn-primary">Return to Registration</a>
        </div>
    </div>



<?php require_once 'includes/footers.php'; ?>   