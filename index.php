<?php
$message = '';
include('./classes/Student.php');
if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir .time(). basename($_FILES["profile"]["name"]);
   
    move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);
    $student = new Student();
    $message = $student->create_student($_POST,$target_file);
    
}
?>
<?php include_once('./header.php') ?>
<div class="container">
    <?php if ($message != '') : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message ?>
        </div>
    <?php endif; ?>
    <?php include_once('./form.php'); ?>
</div>

</body>

</html>