<?php 
    $title = 'View Record';
    require_once 'includes/headers.php'; 
    require_once 'includes/db/conn.php';
    // Get All attendee by id
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    }else {
        echo "<h1 class='text-danger'>Please check details and try again</h1>";    
    }

?>

<div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">
              Name: <?php echo $result["firstname"] ." ". $result["lastname"]; ?></h5>
            <h6 class="card-title">
                Specialty: <?php echo $result["name"]; ?></h6>
            <h6 class="card-title">
                DOB: <?php echo $result["dateofbirth"]; ?></h6>
            <h6 class="card-title">
                Email: <?php echo $result["emailaddress"]; ?></h6>
            <h6 class="card-title">
                Phone: <?php echo $result["contactnumber"]; ?></h6>
        </div>
    </div>
        <br>
        <a href ="viewrecords.php" class="btn btn-info">Back To List</a>
        <a href ="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick ="return confirm('Are you sure you want to delete this record?');" href ="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
<br>
<br>
<br>
<?php require_once 'includes/footers.php'; ?>  