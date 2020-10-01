<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'student');

    
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $mobile = $_POST['phone_no'];
    $dept = $_POST['dept'];
    $currentyear = $_POST['currentyear'];
    $currentsem = $_POST['currentsem'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $birthdate = $_POST['bdate'];
    $monthaddm = $_POST['myad'];
    $year = $_POST['year'];
    $hobbies = $_POST['hobbies'];
    $hobbie2 = $_POST['hobbie2'];
    $hobbie3 = $_POST['hobbie3'];
    $sports = $_POST['sports'];
    $sport2 = $_POST['sport2'];
    $health = $_POST['health'];

    // For Storing the Student's Data
    if(isset($_POST["subForm1"])){
        $query1 = "SELECT * FROM studentinfo WHERE std_rollno = '$rollno';";
        $result = mysqli_query($conn, $query1);
        $rowcount = mysqli_num_rows($result);   
        if($rowcount == 1) {
            $query2 = "UPDATE studentinfo SET std_rollno = '$rollno', name = '$name', m_name = '$m_name', l_name = '$l_name', mobile = '$mobile', dept = '$dept', currentyear = '$currentyear', currentsem = '$currentsem', address = '$address', bg= '$bg', email = '$email', birthdate = '$birthdate', monthaddm = '$monthaddm', year = '$year', hobbies = '$hobbies', hobbie2 = '$hobbie2', hobbie3 = '$hobbie3', sports = '$sports', sport2 = '$sport2', health = '$health' WHERE std_rollno = '$rollno';";
            mysqli_query($conn, $query2);
            header("location:form1.php?form1=completed");
        }else {
            $query3 = "INSERT INTO studentinfo (std_rollno, name, m_name, l_name, mobile, dept, currentyear, currentsem, address, bg, email, birthdate, monthaddm, year, hobbies, hobbie2, hobbie3, sports, sport2, health) VALUES ('$rollno', '$name', '$m_name', '$l_name', '$mobile', '$dept', '$currentyear', '$currentsem', '$address', '$bg', '$email', '$birthdate', '$monthaddm', '$year', '$hobbies', '$hobbie2', '$hobbie3', '$sports', '$sport2', '$health');";
            mysqli_query($conn, $query3);
            header("location:form1.php?form1=completed");
        }
    }    

    // For PDF 
    if(isset($_POST["mkpdf1"])){
        require_once __DIR__ . '/vendor/autoload.php';

        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Student Details</h1>';
        $data .= '<h4>Contact Information</h4>';
        $data .= '<strong>&#8226; Name : </strong>'.$name.'&nbsp;'.$m_name.'&nbsp;'.$l_name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; ID Card No : </strong>'.$rollno.'<br><br>';
        $data .= '<strong>&#8226; Email : </strong>'.$email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Mobile No : </strong>'.$mobile.'<br><br>';
        $data .= '<strong>&#8226; Address : </strong>'.$address.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Admission Information</h4>';
        $data .= '<strong>&#8226; Admission Date : </strong>'.$monthaddm.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Department : </strong>'.$dept.'<br><br>';
        $data .= '<strong>&#8226; Admined To : </strong>'.$year.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Currently in : </strong>'.$currentyear.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Currently in Sem : </strong>'.$currentsem.'<br><br>';
        $data .= '<hr><br><br>';
        
        $data .= '<h4>Personal Information</h4>';
        $data .= '<strong>&#8226; Birth Date : </strong>'.$birthdate.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Blood Group : </strong>'.$bg.'<br><br>';
        $data .= '<strong>&#8226; Health Problems : </strong>'.$health.'<br><br>';
        $data .= '<strong>&#8226; Hobbies : </strong>'.$hobbies.'&nbsp;&nbsp;&nbsp;'.$hobbie2.'&nbsp;&nbsp;&nbsp;'.$hobbie3.'<br><br>';
        $data .= '<strong>&#8226; Sport Activites : </strong>'.$sports.'&nbsp;&nbsp;&nbsp;'.$sport2.'<br><br>';
        $data .= '<hr><br><br>';

        $mpdf->WriteHTML($data);
        $mpdf->Output('StudentDetails.pdf', 'D');
    
        }
    
?>
