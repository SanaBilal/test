<?php
include('./classes/Student.php');
$student = new Student();
$students = $student->fetch_report_data();
?>
<?php include_once('./header.php') ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Year</th>
                <th>Number Of Students</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($students) > 0) : ?>
                <?php while ($student_row = mysqli_fetch_assoc($students)) : ?>
                    <tr>
                        <td><?php echo $student_row['current_school_year'] ?></td>
                        <td><?php echo $student_row['total_num'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>

</html>