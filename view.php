<?php
include('./classes/Student.php');
$id = $_GET['id'];
$student = new Student();
$student_details = mysqli_fetch_assoc($student->fetch_user_details($id));
?>
<?php include_once('./header.php') ?>
<div class="container">
    <?php if ($student_details != NULL) : ?>
        <h3> User Details</h3>
        <img height="100" width="100" src="<?php echo $student_details['profile_photo_path']?>">
        <p><b>Full Name: </b><?php echo $student_details['full_name'] ?></p>
        <p><b>Date of Birth: </b><?php echo $student_details['dob'] ?></p>
        <p><b>Enrollment Date: </b><?php echo $student_details['enrollment_date'] ?></p>
        <p><b>Current School Year: </b><?php echo $student_details['current_school_year'] ?></p>
        <p><b>Home Phone: </b><?php echo $student_details['home_phone'] ?></p>
        <p><b>Mobile: </b><?php echo $student_details['mobile'] ?></p>
        <p><b>First Contact Name: </b><?php echo $student_details['first_contact_name'] ?></p>
        <p><b>First Contact Phone: </b><?php echo $student_details['first_contact_phone'] ?></p>
        <p><b>Second Contact Name: </b><?php echo $student_details['second_contact_name'] ?></p>
        <p><b>Second Contact Phone: </b><?php echo $student_details['second_contact_phone'] ?></p>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>">Delete</a>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            No Record found for the given id: <?php echo $id ?>
        </div>
    <?php endif; ?>
</div>
</body>

</html>