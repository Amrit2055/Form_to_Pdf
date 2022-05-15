<?php
if($_POST)
{
    require('fpdf/fpdf.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $job=$_POST['job'];
    $title='User Report';

    $pdf=new FPDF();
    $pdf ->AddPage();
    $pdf ->SetTitle($title);
    //Arial bold 15
    $pdf ->SetFont('Arial', 'B', 15);

    //$pdf ->Cell(0,10,$title,1,1,'C');

    $w=$pdf ->GetStringWidth($title) + 6;
    $pdf ->SetX((210-$w)/2);
    //Color of frame,background and text
    $pdf ->SetDrawColor(221,221,221,1);
    $pdf ->SetFillColor(10,158,0,1);
    $pdf ->SetTextColor(255,255,255,1);
    //Thickness of frame(1 mm)
    $pdf ->SetLineWidth(1);

    $pdf ->Cell($w,9,$title,1,1,'C',true);
    
    //Line Break
    $pdf ->Ln(10);
    
    $pdf ->SetTextColor(0,0,0,1);
    $w=$pdf ->GetStringWidth($job)+6;

    $pdf -> SetX((170-$w) /2 );
    $pdf -> Cell(40,10, 'First Name:', 1, 0, 'C');
    $pdf -> Cell(60,10, $fname, 1, 1, 'C');

    $pdf -> SetX((170-$w) /2 );
    $pdf -> Cell(40,10, 'Last Name:', 1, 0, 'C');
    $pdf -> Cell(60,10, $lname, 1, 1, 'C');

    $pdf -> SetX((170-$w) /2 );
    $pdf -> Cell(40,10, 'DOB:', 1, 0, 'C');
    $pdf -> Cell(60,10, $dob, 1, 1, 'C');

    $pdf -> SetX((170-$w) /2 );
    $pdf -> Cell(40,10, 'Phone:', 1, 0, 'C');
    $pdf -> Cell(60,10, $phone, 1, 1, 'C');

    $pdf -> SetX((170-$w) /2 );
    $pdf -> Cell(40,10, 'Job:', 1, 0, 'C');
    $pdf -> Cell(60,10, $job, 1, 1, 'C');


    $pdf->Output();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="main-block">
        <div class="header">
            Add New User
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
                <input type="text" name="dob" placeholder="DOB" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <input type="text" name="job" placeholder="Current Job" required>

                <input type="submit" value="Add User">


            </form>
        </div>
        <div class="footer">
            <p>Develped by <a href="https://bhusalamrit.com.np" target="_blank">MRTBHUSAL</a></p>
        </div>

    </div>
    
</body>
</html>