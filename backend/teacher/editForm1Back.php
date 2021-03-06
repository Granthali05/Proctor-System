<?php
    session_start();
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    if(isset($_POST["editform1"])) {

    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dept = $_POST['dept'];
    $currentyear = $_POST['currentyear'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $monthaddm = $_POST['myad'];
    $hobbies = $_POST['hobbies'];
    $sports = $_POST['sports'];
    $health = $_POST['health'];

    
    $query2 = "UPDATE studentinfo SET std_rollno = '$rollno', name = '$name', mobile = '$mobile', dept = '$dept', currentyear = '$currentyear', address = '$address', bg = '$bg', email = '$email', birthdate = '$birthdate', monthaddm = '$monthaddm', hobbies = '$hobbies', sports = '$sports', health = '$health' WHERE std_rollno = '$rollno' ;";
    $query_run = mysqli_query($conn, $query2);
    if ($query_run) {
        header("location:editForm2.php?form1=completed");
    }else {
        header("location:editForm2.php?form1=notcompleted");
    }
   
}

if(isset($_POST["makepdf"])) {
    require_once __DIR__ . '/vendor/autoload.php';
    
        $rollno = $_POST['rollno']; 
        $mobile = $_POST['mobile'];
        $dept = $_POST['dept'];
        $currentyear = $_POST['currentyear'];
        $name = $_POST['name'];
        $bg = $_POST['bg'];
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];
        $monthaddm = $_POST['myad'];
        $hobbies = $_POST['hobbies'];
        $sports = $_POST['sports'];
        $health = $_POST['health'];
        $address = $_POST['address'];
    
        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Student Details</h1><br>';
        $data .= '<strong>Name : </strong>'.$name.'<br><br>';
        $data .= '<strong>ID Card No : </strong>'.$rollno.'<br><br>';
        $data .= '<strong>Department Name : </strong>'.$dept.'<br><br>';
        $data .= '<strong>Current Year : </strong>'.$currentyear.'<br><br>';
        $data .= '<strong>Mobile No : </strong>'.$mobile.'<br><br>';
        $data .= '<strong>Address : </strong>'.$address.'<br><br>';
        $data .= '<strong>Blood Group : </strong>'.$bg.'<br><br>';
        $data .= '<strong>Email : </strong>'.$email.'<br><br>';
        $data .= '<strong>Birthdate : </strong>'.$birthdate.'<br><br>';
        $data .= '<strong>Date Of Admission : </strong>'.$monthaddm.'<br><br>';
        $data .= '<strong>Hobbies : </strong>'.$hobbies.'<br><br>';
        $data .= '<strong>Sports : </strong>'.$sports.'<br><br>';
        $data .= '<strong>Health Problems : </strong>'.$health.'<br><br>';

        $mpdf->WriteHTML($data);
        $mpdf->Output('studentdetails.pdf', 'D');
    
    

}


?>