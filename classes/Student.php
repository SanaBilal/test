<?php

class Student
{
    public $conn;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "majestic";
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    public function create_student($student_data,$file_path)
    {
        $full_name = $student_data['full_name'];
        $dob = $student_data['dob'];
        $enrollment_date = $student_data['enrollment_date'];
        $current_school_year = $student_data['current_school_year'];
        $home_phone = $student_data['home_phone'];
        $mobile = $student_data['mobile'];
        $email = $student_data['email'];
        $first_contact_name = $student_data['first_contact_name'];
        $first_contact_phone = $student_data['first_contact_phone'];
        $second_contact_name = $student_data['second_contact_name'];
        $second_contact_phone = $student_data['second_contact_phone'];
        $profile_photo_path = $file_path;

        $sql = "INSERT INTO students (full_name, dob, enrollment_date, current_school_year, home_phone, mobile, email,first_contact_name,first_contact_phone,second_contact_name,second_contact_phone,profile_photo_path)
                VALUES ('$full_name', '$dob', '$enrollment_date','$current_school_year','$home_phone','$mobile','$email','$first_contact_name','$first_contact_phone','$second_contact_name','$second_contact_phone','$profile_photo_path')";

        if (mysqli_query($this->conn, $sql)) {
            return 'New Student added with name:' . $full_name;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

    public function update_student($student_data,$id)
    {
        $full_name = $student_data['full_name'];
        $dob = $student_data['dob'];
        $enrollment_date = $student_data['enrollment_date'];
        $current_school_year = $student_data['current_school_year'];
        $home_phone = $student_data['home_phone'];
        $mobile = $student_data['mobile'];
        $email = $student_data['email'];
        $first_contact_name = $student_data['first_contact_name'];
        $first_contact_phone = $student_data['first_contact_phone'];
        $second_contact_name = $student_data['second_contact_name'];
        $second_contact_phone = $student_data['second_contact_phone'];
        $sql = "UPDATE students SET full_name='$full_name',dob='$dob',enrollment_date='$enrollment_date',current_school_year='$current_school_year',home_phone='$home_phone',mobile='$mobile',email='$email',first_contact_name='$first_contact_name',first_contact_phone='$first_contact_phone',second_contact_name='$second_contact_name',second_contact_phone='$second_contact_phone' WHERE id=$id";
        if (mysqli_query($this->conn, $sql)) {
            return 'User updated with name:' . $full_name;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }
    public function view_all_students()
    {
        $sql = "SELECT id,full_name,current_school_year,email FROM students ORDER BY current_school_year,full_name ";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    public function fetch_user_details($id)
    {
        $sql = "SELECT * FROM students WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    public function delete_user($id)
    {
        $sql = "DELETE FROM students WHERE id=$id";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        }
        return false;
    }
    public function fetch_report_data() {
        $sql = "SELECT COUNT(*) as total_num, `current_school_year` from `students` GROUP BY `current_school_year`";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
