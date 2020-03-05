<form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo isset($student_detail)? $student_detail['full_name']:''?>" required />
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of birth:</label>
            <input type="date" class="form-control" id="dob" name="dob" value="<?php echo isset($student_detail)? $student_detail['dob']:''?>" required />
        </div>
        <div class="form-group">
            <label for="enrollment_date">Enrollment Date:</label>
            <input type="date" class="form-control" id="enrollment_date" name="enrollment_date" value="<?php echo isset($student_detail)? $student_detail['enrollment_date']:''?>" required />
        </div>
        <div class="form-group">
            <label for="school_year">Current School Year:</label>
            <input type="number" class="form-control" min="1900" max="2099" step="1" name="current_school_year" value="<?php echo isset($student_detail)? $student_detail['current_school_year']:''?>" required />
        </div>
        <div class="form-group">
            <label for="home_phone">Home Phone:</label>
            <input type="tel" class="form-control" name="home_phone" value="<?php echo isset($student_detail)? $student_detail['home_phone']:''?>" required />
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" class="form-control" name="mobile" value="<?php echo isset($student_detail)? $student_detail['mobile']:''?>" required />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo isset($student_detail)? $student_detail['email']:''?>" required />
        </div>
        <div class="form-group">
            <label for="first_contact_name">First Contact Name</label>
            <input type="text" class="form-control" id="first_contact_name" name="first_contact_name" value="<?php echo isset($student_detail)? $student_detail['first_contact_name']:''?>" required />
        </div>
        <div class="form-group">
            <label for="first_contact_phone">First Contact Phone:</label>
            <input type="tel" class="form-control" name="first_contact_phone" value="<?php echo isset($student_detail)? $student_detail['first_contact_phone']:''?>" required />
        </div>
        <div class="form-group">
            <label for="second_contact_name">Second Contact Name</label>
            <input type="text" class="form-control" id="second_contact_name" name="second_contact_name" value="<?php echo isset($student_detail)? $student_detail['second_contact_name']:''?>" required />
        </div>
        <div class="form-group">
            <label for="second_contact_phone">Second Contact Phone:</label>
            <input type="tel" class="form-control" name="second_contact_phone" value="<?php echo isset($student_detail)? $student_detail['second_contact_phone']:''?>" required />
        </div>
        <?php if(sizeof($_GET)==0):?>
        <div class="form-group">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" name="profile" id="profile" required>
        </div>
        <?php endif;?>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>