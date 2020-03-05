<?php
include('./classes/Student.php');
$student = new Student();
$students = $student->view_all_students();
?>
<?php include_once('./header.php') ?>
<div class="container">
    <table class="sortable table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Current School year</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($students) > 0) : ?>
                <?php while ($student_row = mysqli_fetch_assoc($students)) : ?>
                    <tr>
                        <td><?php echo $student_row['full_name'] ?></td>
                        <td><?php echo $student_row['current_school_year'] ?></td>
                        <td><a href="mailto:<?php echo $student_row['email']?>"><?php echo $student_row['email'] ?></a></td>
                        <td><a class="btn btn-success" href="view.php?id=<?php echo $student_row['id'];?>">View</a>
                        <a class="btn btn-danger"href="delete.php?id=<?php echo $student_row['id']; ?>">Delete</a>
                        <a class="btn btn-primary"href="edit.php?id=<?php echo $student_row['id']; ?>">Edit</a></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>

</html>