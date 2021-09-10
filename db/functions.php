
<?php
 // $date = date('D, dS F Y @ H:i:s A');
///////////////DACOMSOTAL ///////////////////




function QueryDB($query){
  global $db;
  return $db->query($query);
}

function QueryDBa($query){
  global $db2;
  return $db2->query($query);
}

function get_code(){

  global $conn;
  
  $alphabets ="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvvxyz";
  
  $shuffled = str_shuffle($alphabets);
  
  $serials = substr($shuffled, 0,5).rand(100,999);
  $final = str_shuffle($serials);
  return $final;
  
}

function d_code(){

  global $conn;
  $alphabets ="ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
  $shuffled = str_shuffle($alphabets);
  $serials = substr($shuffled, 0,3).rand(100,999);
  $final = str_shuffle($serials);
  return $final; 
}

function ans_code(){

  global $conn;
  $alphabets ="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvvxyz";
  $shuffled = str_shuffle($alphabets);
  $serials = substr($shuffled, 0,2).rand(100,999);
  $final = str_shuffle($serials);
  return $final;
}

function author_code(){

  global $conn;
  
  $alphabets ="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvvxyz";
  
  $shuffled = str_shuffle($alphabets);
  
  $serials = substr($shuffled, 0,5).rand(100,999);
  
  return $serials;
  
}

function validate($value){
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  $value = str_replace('"','&quot;', $value);
  $value = str_replace("'",'&apos;', $value);
  return $value;
}

function code_pics($count){
  $alphabets ='ABCDEFGHIJKLMNOPQRSTUVWXYZ'; $rCode = rand(10,99);
  $class_unique = rand(10,99).substr(str_shuffle($alphabets),0,$count).$rCode;
  return $class_unique;
}

function _greetin(){
  date_default_timezone_set('Africa/lagos');



// 24-hour format of an hour without leading zeros (0 through 23)

  $Hour = date('G');
  if ( $Hour >= 1 && $Hour <= 11 ) {
    $salute = 'Good Morning   ';

  } else if ( $Hour >= 12 && $Hour <= 16 ) {
    $salute = 'Good Afternoon  ';

  } else if ( $Hour >= 17 || $Hour <= 22 ) {
    $salute = 'Good Evening   ';

  }

  else if ( $Hour >= 23 || $Hour <= 24 ) {
    $salute = 'Keeping Late Night?   ';

  }

  return $salute;

}

function get_time_ago( $time )

{

  $time_difference = time() - $time;

  if( $time_difference < 1 ) { return 'less than 1 second ago'; }

  $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',

    30 * 24 * 60 * 60       =>  'month',

    24 * 60 * 60            =>  'day',

    60 * 60                 =>  'hour',

    60                      =>  'minute',

    1                       =>  'second'

  );



  foreach( $condition as $secs => $str )

  {

    $d = $time_difference / $secs;



    if( $d >= 1 )

    {

      $t = round( $d );

      return $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';

    }

  }

}

function get_ref_using_email($user_email){

  $start = QueryDB("SELECT user_id FROM users WHERE email ='$user_email'");

  $rows = $start->fetch(PDO::FETCH_ASSOC);

  return $rows['ref_id'];

}

function get_ad_name_from_code($code){
 $get = QueryDB("SELECT ad_name from ads where ad_code = '$code' ");
 $geter = $get->fetch(PDO::FETCH_ASSOC);
 return $geter['ad_name'];
}

function get_ad_code_from_name($code){
  $get = QueryDB("SELECT ad_code from ads where ad_name = '$code' ");
  $geter = $get->fetch(PDO::FETCH_ASSOC);
  return $geter['ad_code'];
}

function get_adtype_from_price($price, $code){
 $get = QueryDB("SELECT ad_type from ad_price where amount='$price' and ad_code='$code' ");
 $getter = $get->fetch(PDO::FETCH_ASSOC);
 return $getter['ad_type'];
}

function get_all_aff_book($code){
  return QueryDB("SELECT COUNT(*) FROM aff_pay where aff_type='Book' and aff_id='$code'  ")->fetchColumn();

}

function get_all_author_book($code){
  return QueryDB("SELECT COUNT(*) FROM books where author_id='$code'  ")->fetchColumn();
}

function question_count($code){
  return QueryDB("SELECT COUNT(*) FROM questions where asker='$code' and que_stat=1 ")->fetchColumn();
}

function get_question($code){
  $get = QueryDB("SELECT question from questions where que_id='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['question'];
}

function get_all_book_bought($code){
  return QueryDB("SELECT COUNT(*) FROM author_pay WHERE  author_status='Approved' and author_code ='$code' ")->fetchColumn();
}
function get_free_book($code){
  return QueryDB("SELECT COUNT(*) FROM author_pay WHERE  amt=0 and author_status='Approved' and author_code ='$code' ")->fetchColumn();
}

function get_all_aff_ads($code){
  return QueryDB("SELECT COUNT(*) FROM aff_pay where aff_type='Ads' and aff_id='$code'  ")->fetchColumn();
}

function get_books_aff_earnings($code){
  $total_points = 0;
  foreach(QueryDB("SELECT * FROM aff_pay WHERE aff_type='Book' and aff_status='Approved' and aff_id ='$code'") as $rows){
    $total_points += $rows['aff_com'];
  }
  return $total_points;
}

function get_author_earnings($code){
  $total_points = 0;
  foreach(QueryDB("SELECT * FROM author_pay WHERE  author_status='Approved' and author_code ='$code'") as $rows){
    $total_points += $rows['author_com'];
  }
  return $total_points;
}

function total_aff_earnings($code){
  $total_points = 0;
  foreach(QueryDB("SELECT * FROM aff_pay WHERE aff_id ='$code' and aff_status='Approved' ") as $rows){
    $total_points += $rows['aff_com'];
  }
  return $total_points;
}
function total_cashout($code){
  $total_points = 0;
  foreach(QueryDB("SELECT * FROM cashout WHERE username ='$code' and status=1 ") as $rows){
    $total_points += $rows['amount'];
  }
  return $total_points;
}

function pending_cashout($code){ 
  $get = QueryDB("SELECT amount FROM cashout WHERE username ='$code' and status=0 ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['amount'];
}

function get_affcode_by_name($code){ 
  $get = QueryDB("SELECT aff_code FROM affiliate WHERE user_name ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['aff_code'];
}

function get_username_by_affcode($code){ 
  $get = QueryDB("SELECT user_name FROM affiliate WHERE aff_code ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['user_name'];
}


function user_count(){
  return QueryDB("SELECT COUNT(*) FROM f_users ")->fetchColumn();

}

function get_books_ads_earnings($code){
  $total_points = 0;
  foreach(QueryDB("SELECT * FROM aff_pay WHERE aff_type='Ads' and aff_status='Approved' and aff_id ='$code'") as $rows){
    $total_points += $rows['aff_com'];
  }
  return $total_points;
}


function get_admin_info($admin_id){
  $start = QueryDB("SELECT * FROM admin WHERE admin_id ='$admin_id' ");
  return $row = $start->fetch(PDO::FETCH_ASSOC);
}


function get_question_com_count($code){
  return QueryDB("SELECT COUNT(*) FROM answer where que_id='$code' and ans_stat=1  ")->fetchColumn();
}

function poster($code){
  $get = QueryDB("SELECT admin_name from admin where admin_id = '$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['admin_name'];
}

//////////FEPFL ACADEMY STUDENTS//////////////

function get_stud_info($email){
 $start = QueryDB("SELECT * FROM users WHERE email ='$email'");
 return $row = $start->fetch(PDO::FETCH_ASSOC);
}

function get_stud_details($user_id){
 $start = QueryDB("SELECT * FROM details WHERE user_id ='$user_id'");
 return $row = $start->fetch(PDO::FETCH_ASSOC);
}

function get_stud_email($user_id){
 $get = QueryDB("SELECT email FROM users WHERE code = '$user_id' ");
 $getter = $get->fetch(PDO::FETCH_ASSOC);
 return $getter['email'];
}

function get_stud_code($email){
  $get = QueryDB("SELECT * FROM users WHERE email = '$email' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['code'];
}
function get_stud_form_fill($ucode){
  $get = QueryDB("SELECT status FROM details WHERE user_id = '$ucode' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['status'];
}


////////////////////////////////////////////////
function _date($da){

// 24-hour format of an hour without leading zeros (0 through 23)

  if ( $da == '01' ) {
    $salute = 'Jan';

  } else if ( $da == '02') {
    $salute = 'Feb';

  }  else if ( $da == '03') {
    $salute = 'Mar';
  }
  else if ( $da == '04') {
    $salute = 'Apr';
  }else if ( $da == '05') {
    $salute = 'Mar';
  }else if ( $da == '06') {
    $salute = 'Jun';
  }else if ( $da == '07') {
    $salute = 'Jul';
  }else if ( $da == '08') {
    $salute = 'Aug';
  }else if ( $da == '09') {
    $salute = 'Sept ';
  }else if ( $da == '10') {
    $salute = 'Oct';
  }else if ( $da == '11') {
    $salute = 'Nov';
  } if ( $da == '12') {
    $salute = 'Dec';
  } 
  return $salute;

}


///////////// FUNCTIONS FOR BOOKS//////////////////////


function book_code(){
  global $conn;
  
  $serials = rand(1000000,9999999);
  
  return $serials;
  
}



function get_all_books(){
  return QueryDB("SELECT * FROM books where book_avail=1 ");
}

function get_journal_count(){
  return QueryDB("SELECT COUNT(*) FROM journals  ")->fetchColumn();
}

function get_article_count(){
  return QueryDB("SELECT COUNT(*) FROM articles  ")->fetchColumn();
}

function get_likes($code){
  return QueryDB("SELECT COUNT(*) FROM likes where answer_id='$code'  ")->fetchColumn();
}


function cat_code(){
  global $conn;
  
  $alphabets ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  
  $shuffled = str_shuffle($alphabets);
  
  $serials = substr($shuffled, 0,5).rand(100,999);
  
  return $serials;
  
}

function post_id(){
  global $conn;
  $code = rand(100000,999999);
  return $code;
}

function pay_id(){
  global $conn;
  $code = rand(100000,999999);
  return $code;
}


function get_user_using_ref_code($aff_code){
  $start = QueryDB("SELECT aff_code FROM affiliate  WHERE user_name ='$aff_code' ");
  $rows = $start->fetch(PDO::FETCH_ASSOC);
  return $rows['aff_code'];
}

function get_author_using_ref_code($aff_code){
  $start = QueryDB("SELECT user_name FROM author WHERE author_id ='$aff_code' ");
  $rows = $start->fetch(PDO::FETCH_ASSOC);
  return $rows['user_name'];
}



function get_post_details(){
  return QueryDB("SELECT * FROM posts ");
}


function get_cat_by_code($code){
  $get = QueryDB("SELECT cat_name from category where cat_id ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['cat_name'];
}

function get_que_cat_by_code($code){
  $get = QueryDB("SELECT cat_name from que_category where cat_id ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['cat_name'];
}

function get_cat_by_name($code){
  $get = QueryDB("SELECT cat_id from category where cat_name ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['cat_id'];
}

function get_journa_name($code){
  $get = QueryDB("SELECT jo_name,jo_vol,jo_num from journals where jo_code ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['jo_name'].' '.$getter['jo_vol'].' '.$getter['jo_num'];
}

function get_subm_name($code){
  $get = QueryDB("SELECT subm_name from subm_cat where subm_code ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['subm_name'];
}

function get_journal(){
  return QueryDB("SELECT * FROM journals ");
}

function pay_cat(){
  return QueryDB("SELECT * FROM pay_cat ");
}

function get_pay_name($code){
  $get = QueryDB("SELECT pay_name from pay_cat where pay_code ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['pay_name'];
}

function get_call(){
  $get = QueryDB("SELECT call_vol, call_num from call_ ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['call_vol'].' '.$getter['call_num'];
}

function get_pay_amt($code){
  $get = QueryDB("SELECT pay_amt from pay_cat where pay_code ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['pay_amt'];
}

function paystack($code){
  $fin = 0;
  $fin = (get_pay_amt($code)*0.015534)+100;
  return $fin;
}

function paystack_total($code){
  $fin =0;
  $fin = paystack($code) + get_pay_amt($code);
  return $fin;
}

function post_cat_counter($code){
 return  QueryDB("SELECT COUNT(*) FROM  posts where post_cat ='$code' ")->fetchColumn();

}

function book_cat_counter($code){
  return  QueryDB("SELECT COUNT(*) FROM  books where book_cat ='$code' ")->fetchColumn();

}

function get_book_details(){
  return QueryDB("SELECT * from journals ");
}

function get_subm_details(){
  return QueryDB("SELECT * from submission ");
}

function get_articles(){
  return QueryDB("SELECT * from articles ");
}



function get_cat_details(){
  return QueryDB("SELECT * from category ");
}

function get_spef_book($code){
  $get = QueryDB("SELECT * FROM books where book_id ='$code' ");
  return $get->fetch(PDO::FETCH_ASSOC);
}

function bookCount(){
  return QueryDB("SELECT COUNT(*) from books ")->fetchColumn();
}

/////////////////////////////////////////////////////


 //NORMAL USERS LOGGEN IN ON THE PORTAL//

function get_user_details($email){
  $get = QueryDB("SELECT * FROM f_users WHERE email = '$email' ");
  return $get->fetch(PDO::FETCH_ASSOC);
  
}

function get_book_path($ref){
 $get = QueryDB("SELECT item_location from 
  where pay_ref ='$ref' ");
 $getter = $get->fetch(PDO::FETCH_ASSOC);
 return $getter['item_location'];
}

function get_author_name_from_code($code){
 $get = QueryDB("SELECT author_name from author where author_id ='$code' ");
 $getter = $get->fetch(PDO::FETCH_ASSOC);
 return $getter['author_name'];
}

function get_user_name($email){
  $get = QueryDB("SELECT fname from f_users where email ='$email' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['fname'];
}

function get_user_name_from_code($email){
  $get = QueryDB("SELECT fname from f_users where ucode ='$email' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['fname'];
}

function get_user_photo_from_code($email){
  $get = QueryDB("SELECT passport from f_users where ucode ='$email' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['passport'];
}

function get_user_by_code($code){
  $get = QueryDB("SELECT fname from f_users where ucode ='$code' ");
  $getter = $get->fetch(PDO::FETCH_ASSOC);
  return $getter['fname'];
}





////////////////////////////////////////////

/////FEPFL ADMIN ////////

function get_all_stud(){
  return QueryDB("SELECT COUNT(*) from users ")->fetchColumn();
}

function get_all_post(){
  return QueryDB("SELECT COUNT(*) from blog ")->fetchColumn();
}

function get_all_cat(){
  return QueryDB("SELECT COUNT(*) from category ")->fetchColumn();
}

function get_all_paid_book(){
  return QueryDB("SELECT COUNT(*) from payment where pay_status ='Approved' ")->fetchColumn();
}

function get_all_students(){
  return QueryDB("SELECT * from details ");
}

function get_f_users(){
  return QueryDB("SELECT * FROM f_users ");
}

function get_all_f_users(){
  return QueryDB("SELECT COUNT(*) FROM f_users ")->fetchColumn();
}
///////////////////////////////////////