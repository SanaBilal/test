<?php
include('./classes/Student.php');
$id = $_GET['id'];
$student = new Student();
$check = $student->delete_user($id);
?>
<?php include_once('./header.php') ?>
<div class="container">
    <?php if ($check) : ?>
        <div class="alert alert-success" role="alert">
            User Deleted Successfully
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            No Record found for the given id: <?php echo $id ?>
        </div>
    <?php endif; ?>
    <a class="btn btn-success" href="students.php">View Students</a>
</div>
</body>

</html>