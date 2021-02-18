  <?php 
    $title = 'Index';
    require_once 'includes/headers.php'; 
    require_once 'includes/db/conn.php';

    $results = $crud->getSpecialties();
?>
<!--
    -First name
    -Last name
    -Date of Birth (use Date picker)
    -Speciality (Database Admin, Software Developer, Web Administration, Other)
    -Email Address
    -Contact Number
 -->   
    <h1 class="text-center">Registration for IT Conference</h1>

    <form method ="post" action="success.php">
    <br>
    <div class="row">
        <div class="col">First Name
            <input required type="text" class="form-control" aria-label="First name" id="firstname" name="firstname">
    </div>
        <div class="col">Last Name
         <input required type="text" class="form-control" aria-label="Last name" id="lastname" name="lastname">
        </div>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input required type ="text" class="form-control" id="dob" name="dob">
    </div>
    <br>
    <div class="form-group">
    <label for="specialty">Area Of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?> 
        <option value = "<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?>></option>
    <?php } ?>
    </select>

    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input required type="email" class="form-control"  id="Email" name="email">    
    </div>
    <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="phone" class="form-control"  id="phone" name="phone">
    </div>
    <div class ="form-group">
    <br>
  
    </div>
    <br>
       <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>   
</form>


    <?php require_once 'includes/footers.php'; ?>   
