<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php'); 
//require_once "Mail.php"; // PEAR Mail package
//require_once ('Mail/mime.php'); // PEAR Mail_Mime packge
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Call for Paper - Lokoja Journal of Applied Sciences</title>
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
                <h1 class="page-title">Call for Paper</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">Call for Paper</li>
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
                  <h2>Call for Papper. Volume 3 Number 2 </h2>
                </div>
              </div>
              <div class="container-fluid ">


               <p>During online Submission, ensure that all Co-Authors details are added</p>
               <p>Submissions are to be accompanied with the Manuscript Submission Fee. Manuscript
                Submission fee is a non-refundable fee in case the manuscript is not accepted for publication.
                Meanwhile, Publication fee will only be made after the manuscript has been accepted for
              publication. </p>
              <h3>Manuscript Submission Fee (Non-Refundable)</h3>
              <h4>Five Thousand Naira (₦5,000.00) only</h4>
              <h3>Publication Fee (After manuscript is accepted)</h3>
              <h4>Ten Thousand Naira ((₦10,000.00) only</h4>
              <h3>Hard Copy after Publication: On request</h3>

              <h3>All paymens should be made online or into the account of the Journal, detailed below:</h3>
              <h2><b>Account Name:</b> LOJAS<br><b>Account Number:</b> 2096067251<br><b>Bank Name:</b> UBA Plc.<br><b>Account Type:</b> CURRENT
              </h2>
              <h3>Evidence of payment should be emailed to <a href="mailto:lojaspapersubmit@gmail.com">lojaspapersubmit@gmail.com</a>
              </h3>

              <h3>For inquiries, please contact:<br>
                Dr. Ayodele O. S<br>
                Editor<br>
                Department of Computer Science,<br>
                Kogi State Polytechnic, Lokoja, Kogi State, Nigeria.<br></h3>

              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main_heading text_align_center">
                  <h2>Guide to Authors</h2>
                </div>
                <div class="text-center">
                  <a href="Lojas2021 online pub.pdf" download="" class="btn btn-success"><i class="fa fa-download"></i> Download Guide</a>
                  <a href="Lojas2021 online pub.pdf" class="btn btn-primary"><i class="fa fa-file"></i> View Guide</a>
                </div>
                <div class="">
                  <h3>Editorial Policy </h3>
                  <h4>Our Policy are as follows </h4>
                  <ul class="list">
                    <li><i class="fa fa-caret-right"></i> Manuscript submitted to this Journal must neither be published nor submitted for
                    publication elsewhere either in part or whole. </li>
                    <li><i class="fa fa-caret-right"></i> The authors agree that the copyright of their article is totally transferred to the
                    Editorial Board of this Journal once the article is accepted. </li>
                    <li><i class="fa fa-caret-right"></i> Article(s) submitted will be peer-reviewed before accepted for publication. </li>
                    <li><i class="fa fa-caret-right"></i> No part of this publication may be reproduced, stored or transmitted electronically or
                    in any form without the permission and consent in writing from the copyright holder.  </li>
                    <li><i class="fa fa-caret-right"></i> The Editorial office shall make every effort to ensure that no misleading information
                      or statement appears in this Journal. It is however, the sole responsibility of the author
                      for all data and information provided with regards to accuracy. The Editorial Board
                      and its agents shall accept no responsibility or liability whatsoever for the
                      consequences of any misleading data and/or information provided by the authors
                    which shall be published. </li>
                  </ul>
                  <h4>Manuscripts preparation<br>
                    Text: Microsoft Word<br>
                    Font: Times New Roman<br>
                    Font Size: 12<br>
                  No Columns </h4>
                </div>
                <div class="">
                  <h3>Main Headings and Manuscript Presentation </h3>
                  <h4>Manuscripts should be prepared under the following headings without numbering: </h4>

                  <ul class="list">
                    <li><i class="fa fa-caret-right"></i> Article Title </li>
                    <li><i class="fa fa-caret-right"></i> Authors and their full addresses </li>
                    <li><i class="fa fa-caret-right"></i> Abstract (250 words maximum)  </li>
                    <li><i class="fa fa-caret-right"></i> Keywords  </li>
                    <li><i class="fa fa-caret-right"></i> Materials and Methods </li>
                    <li><i class="fa fa-caret-right"></i> Results and Discussion</li>
                    <li><i class="fa fa-caret-right"></i> Conclusion</li>
                    <li><i class="fa fa-caret-right"></i> Acknowledgement (If Any) </li>
                    <li><i class="fa fa-caret-right"></i> References </li>
                  </ul>
                  <h4>Title</h4>
                  <p>This should be concise and explain the nature of the paper. If the paper was given, wholly or
                  in part, at a scientific meeting, this should be stated in a footnote</p>
                  <h4>Authors' names</h4>
                  <p>These should include with one surname followed by initials of authors and the address where
                    the work was carried out. The name, address, and email address of the corresponding author
                  should be indicated clearly. Authors should not be more than three (3).</p>
                  <h4>Abstract</h4>
                  <p>Abstract of 250 words (maximum) should be provided abridging, concise introduction,
                  methods used, results, significance of results and conclusion of the study. </p>
                  <h4>Introduction</h4>
                  <p>This should state the problem investigated, the aim of the work and previous relevant work
                    with appropriate references, and must indicate clearly the advance in knowledge or
                  contribution to knowledge. </p>
                  <h4>Materials and Method </h4>
                  <p>Clear and sufficient detail to permit the work to be repeated by others, if desired. Only new
                  techniques need be described in detail; known methods must have adequate references.</p>
                  <h4>Results</h4>
                  <p>These should be presented concisely, with tables or illustrations for clarity. </p>
                  <h4>Figures</h4>
                  <p>Good quality and clearly readable figures will only be accepted. Graphs should be drawn in
                    CorelDraw or Microsoft Excel. A resolution of 300 DPI (Dots Per Inch) or higher, for good
                  quality Picture printing.</p>
                  <h4>References</h4>
                  <p>The American Psychology Association (APA) system (6th edition) of referencing should be
                  used.</p>
                  <h4>Copyright and Permissions</h4>
                  <p>By submitting a manuscript to the editor or publisher it is regarded that you have given
                    permission to publish the manuscript and distribute it electronically or in any other form to
                    different databases and abstracting services including libraries, polytechnics, universities and
                  anywhere else. </p>
                  <h4>Submission format</h4>

                  <ul class="list">
                    <li><i class="fa fa-caret-right"></i> All manuscripts must be submitted in A4 format, single column, using double spacing
                      and leaving adequate margins. Each page should be numbered individually. Text lines
                    should be numbered, with the numbers restarting on each page.  </li>
                    <li><i class="fa fa-caret-right"></i> Tabular material must be clearly set out with the number of columns in each table
                      kept to a minimum. Tables must have concise headings that enable them to be
                      comprehensible without reference to the main text. Please ensure that the data in
                    columns are consistent in the number of significant figures.  </li>
                    <li><i class="fa fa-caret-right"></i> Number illustrations with Arabic numerals consecutively, in order of appearance in
                      the text. Keep lettering on illustrations to a minimum and include essential details in
                      the legend. Illustrations should be submitted in black and white, with no background
                    color. Figures should be placed on separate sheets after the main body of the text.  </li>
                    <li><i class="fa fa-caret-right"></i> Save each figure as a separate file and include the source file (i.e. a file in the program
                      in which the image was originally created). The figures should be of high resolution
                      (300 dpi minimum for photos, 800 dpi minimum for graphs, drawings, etc., at the size the figure will be printed). Numbers and symbols incorporated in the figure must be
                    large enough to be legible after reduction in figure size.  </li>
                    <li><i class="fa fa-caret-right"></i> Appropriate file types include Joint Photographic Experts Group (JPEG), Tagged Image
                    File Format (TIFF) and Microsoft Word (doc) files </li>
                    <li><i class="fa fa-caret-right"></i> Symbols, formulae and equations must be written with great care. The symbols
                      recommended in the various parts of the British Standard 1991 should be used. SI
                      units should be used; these are described in, for example, the British Standards
                    Publication PD 5686, The Use of SI Units.</li>

                  </ul>

                </div>
              </div>
              <div class="text-center">
                <a href="submit_publications" class="btn btn-success">Proceed to Submission</a>
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
