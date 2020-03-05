<?php
$message = '';
include('./classes/Student.php');
$id = $_GET['id'];
$student = new Student();
if($id > 0) {
    $student_detail = mysqli_fetch_assoc($student->fetch_user_details($id));
}
if (isset($_POST['submit'])) {
    $message = $student->update_student($_POST,$id);
    $student_detail = mysqli_fetch_assoc($student->fetch_user_details($id));
}
?>
<?php include_once('./header.php') ?>
<div class="container">
    <?php if ($message != '') : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message?>
        </div>
    <?php endif; ?>
<?php include_once('./form.php');?>
</div>

</body>

</html>