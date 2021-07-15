<?php
include("db.php");
?>
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F211792730512451" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F211792730512451" title="oEmbed Form">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1">
<meta name="HandheldFriendly" content="true">
<title>KARMA DONATION FORM</title>
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #ffffff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ffffff;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/.form-all {

  border: 10px solid;
  border-image-slice: 1;
  border-width: 8px;
  border-image-source: linear-gradient(to left, #CB563E, grey);

}
    /* Injected CSS Code */
</style>

</head>
<body>
<form class="jotform-form" action="https://submit.jotform.com/submit/211792730512451/" method="post" name="form_211792730512451" id="211792730512451" accept-charset="utf-8" autocomplete="on" novalidate="true">
  <input type="hidden" name="formID" value="211792730512451">
  <input type="hidden" id="JWTContainer" value="">
  <input type="hidden" id="cardinalOrderNumber" value="">
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_28" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_28" class="form-header" data-component="header">
              Become a Voluenteer
            </h1>
          </div>
        </div>
      </li>
      <?php

$t_name="";
$t_cno="";
$t_email="";
$t_image="";



if (isset($_POST["btn_sub"])) {
    $t_name=$_POST["t_name"];
    $t_cno=$_POST["t_cno"];
    $t_email=$_POST["t_email"];
    $t_image=$_POST["t_image"];
    




    $qry = "Insert into team (t_name,t_cno,t_email,t_image) values ('$t_name','$t_cno','$t_email','$t_image') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='index.php';</script>";



}


?>
      <li class="form-line jf-required" data-type="control_fullname" id="id_29">
        <label class="form-label form-label-top" id="label_29" for="first_29">
         Name
        </label>
        <div>
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="first_29"  size="100" value="<?php echo $t_name;?>" required="">
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_30">
        <label class="form-label form-label-top" id="label_30" for="input_30">
          E-mail
          
        </label>
        <div >
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="t_email" style="width:310px" size="310" data-component="email" value="<?php echo $t_email;?>" required="">
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_25">
        <label class="form-label form-label-top" id="label_25" for="input_25_full">
          Phone Number
        </label>
        <div>
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" style="width:310px" value="<?php echo $t_cno;?>">
          </span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_email" id="id_30">
        <label class="form-label form-label-top" id="label_30" for="input_30">
          Image
          <span class="form-required">
            *
          </span>
        </label>
        <div>
          <div>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" size="100" value="<?php echo $t_image;?>">
            </span>
          </div>
        </div>
      </li>
      
<?php

$qes_id="Select * from team;";
$qry_id=$conn->query($qes_id);


?>

      
     
        
      </ul>
     
     
     
            
            <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">
    </ul>
  </div>
  
  
  
  
</form>
</body></html>