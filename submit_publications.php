<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php'); 
//require_once "Mail.php"; // PEAR Mail package
//require_once ('Mail/mime.php'); // PEAR Mail_Mime packge
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Submit Publications - Lokoja Journal of Applied Sciences</title>
  <?php include('nav/head.php'); ?>
</head>
<body id="default_theme" class="contact_us_2">
  <!-- loader -->
  <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
  <!-- end loader -->
  <?php include('nav/header.php'); ?>
  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Submit Publications</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">Submit Publications</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="full">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main_heading text_align_center">
                  <h2>SUBMIT YOUR PUBLICATIONS TO LOJAS</h2>
                </div>
              </div>
              <div class="container-fluid ">
                <h3>All paymens should be made online on this site or into the Bank account of the Journal, detailed below:</h3>
                <h2><b>Account Name:</b> LOJAS<br><b>Account Number:</b> 2096067251<br><b>Bank Name:</b> UBA Plc.<br><b>Account Type:</b> CURRENT
                </h2>
                <h3>Evidence of payment should be emailed to <a href="mailto:lojaspapersubmit@gmail.com">lojaspapersubmit@gmail.com</a>
                </h3>



              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                <h2 class="text_align_center">SUBMIT PUBLICATION</h2>
                <div class="form_section">
                  <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <?php if(isset($_POST['sub_pub'])){
                      $full_name = $_POST['full_name']; 
                      $email = $_POST['email'];
                      $phone = $_POST['phone'];
                      $title = $_POST['title']; $q0 = str_replace('?', '', $title);  $q1 = str_replace('-', '',$q0);  $q2 = str_replace('.', '', $q1);  $q3 = str_replace("'", "", $q2);  $q7 = str_replace(' ', '-', $q3); $q9 = str_replace('!', '', $q7);  $q10 = str_replace('(', '', $q9); $q11 = str_replace(')','', $q10);   $q5 = str_replace(":","",$q11);   $q4 = str_replace("&apos;", "", $q5); $link = strtolower(str_replace(",", "", $q4));
                      $cat = $_POST['cat'];
                      $note = $_POST['note'];
                      $sub_id = $_POST['sub_id'];



                      $file = basename($_FILES['file']['name']);
                      $path = "master/submissions/".$cat."/";
                      $targetfolder = $path . $file ;
                      $file_type=$_FILES['file']['type'];
                      $fileType = strtolower(pathinfo($targetfolder,PATHINFO_EXTENSION));
                      $uploadOk = 1;
// Check if image file is a actual image or fake image
// Check if file already exists

                        //check if file directory exist
                      if(!file_exists($path)){
                        mkdir($path, 0777, true);
                      }
                      if($fileType != "docx" && $fileType != "doc" && $fileType != "pdf" && $fileType != "ppt"  ) {
                        print "<script>swal({text:'Format Not Known! Sorry, only PDF, DOC, DOCX & PPT files are allowed.', type:'error', title:'Error'}, function(){window.location='';}); </script>";
                        $uploadOk = 0;
                      } 
                      if($uploadOk ==0){
                       print "<script>swal({text:'Check The Journal Cover size and the Journal type you are trying to upload', type:'error', title:'Error'}, function(){window.location='';}); </script>";
                     } else{
                      if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfolder)){
                        if(QueryDB("INSERT INTO submission (subm_id, subm_title, subm_link, subm_email, subm_phone, subm_note,  subm_pdf, subm_author,  subm_cat, subm_date) VALUES('$sub_id','$title' ,'$link','$email' ,'$phone','$note','$targetfolder','$full_name','$cat','".time()."') ")){
                          print "<script>swal({text:'Publication Submitted Successfully. Check your email for Submission Status', type:'success', title:' Successful'}, function(){ window.location = ''}); </script>";



                          $url = 'https://lojas.org.ng/';

 $from = "info@lojas.org.ng"; //enter your email address
 $to = $email; //enter the email address of the contact your sending to
 $subject = "Lokoja Journal Of Applied Sciences"; // subject of your email

 $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
//$html = "<html><body>Name: $name <br> Email: $email <br>Message: $message <br></body></html>"; // html versions of email.
$html = '<html><head><style type="text/css"></style></head><body>
<div style="width:410px;background-color:#10A3E4; margin:auto;color:white;">
<center><br><img src="'.$url.'images/lojas.jpg" style="width:130px;"></center>
<h1 style="padding:10px;text-align: center;">Publication Submitted Successfully</h1></div>
<div style="width:410px;margin:auto;">


<h4 style="padding:10px;">Dear '.$full_name.',</h4>

<p style="padding:10px;font-size:20px;">Your publication has been submitted successfully and is under review. Please ensure to check your mail regularly for update status.</p>



<p style="font-weight: bold;"><br><br> If you did not make this request Kindly contact the admin.</p>
<p style="font-weight: bold;"><br><br> Admin, <br><br><br> Lokoja Journal of Applied Sciences.</p>
<p style="font-style: italic;margin-top: 30px;border-top: 1px solid #09a0da">This email was automatically generated, please do not reply. Kindly send your enquires to info@lojas.org.ng
<br>'.date('l d M,Y',time()).'</p></div></body></html>';

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "info@lojas.org.ng"; //  your email address (same as webmail username)
 $password = "CT!lf7nnx(6U"; // your password (same as webmail password)

 $smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
  'username' => $username,'password' => $password));

 $mail = $smtp->send($to, $headers, $body);

 if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
}
else {
  echo("<p>Message successfully sent!</p>");
// header("Location: http://www.example.com/");
}



}

}

} 




}?>
<fieldset>
  <div class="row">

    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <label>Full Name</label>

      <input class="field_custom" required="" placeholder="Your name" name="full_name" type="text">
      <input type="hidden" required="" value="<?php echo d_code(); ?>" name="sub_id" >
    </div>
    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <label>Email Address</label>

      <input class="field_custom" required="" placeholder="Email address" name="email" type="email">
    </div>
    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <label>Phone Number</label>

      <input class="field_custom" required="" placeholder="e.g 08012345678" name="phone" maxlength="11" type="text">
    </div>
    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <label>Publication Title</label>

      <input class="field_custom" name="title" required="" placeholder="Publication Title" type="text">
    </div>
    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <label>Publication Category</label>

      <select name="cat" required="" class="form-control">
        <option  value="">Choose Category</option><?php foreach(QueryDB("SELECT * FROM subm_cat ") as $rows){extract($rows); ?><option value="<?php echo $subm_code; ?>"><?php echo $subm_name; ?></option><?php  } ?>
      </select>
    </div>
    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <label>Attach Publication</label>
      <input type="file" name="file" required="" class="field_custom" value="">
    </div>
    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <textarea class="field_custom" name="note" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="center"><input type="submit" name="sub_pub" class="form-control btn btn-success" value="SUBMIT NOW"></div>

</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="images/isbn.jpg" alt="#" width="100%" /></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->


<?php include('nav/footer.php'); ?>  
<?php include('nav/scripts.php'); ?>  
</body>
</html>
