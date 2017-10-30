<?php

$link=$_GET['var'];

if($link==null){
  $response="Error!!!! Please contact technical Support";
  header("location:http://127.0.0.1/kifwa/index.php?Response=".$response);
}
?>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 06:46:06 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>KIFWA</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <link href="css/loader.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        
          $(window).load(function() {


    $(".loader").fadeOut("fast");

 
})
    
  
    </script>
  

    <script type="text/javascript">
function email() {
    var suggest = document.getElementById('email_reg').value;
    document.getElementById('email_display').value = suggest;
    document.getElementById('QueryLink').href = suggest;
}

function phone() {
    var suggest = document.getElementById('phone_reg').value;
    document.getElementById('phone_display').value = suggest;
    document.getElementById('QueryLink').href = suggest;
}

        $(window).load(function() {
    $(".loader").fadeOut("slow");
})


        function SetSuggestLink() {
    
    var suggest = document.getElementById('product_category').value;
 //   document.getElementById('innerSpan').value = suggest;
    var urlString ="q="+suggest;
   $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "loadsubcat.php?list=" + suggest ,             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#product_name").html(response); 
            //alert(response);
        }

    });
    
       $.ajax({
  type : "GET",
  url: "categoryDisplay.php?list=" + suggest,
  dataType : "html",
  success: function(response)
  {
  $("#productCategoryDiv").html(response); 
  }
  });

}
 function SetSuggestLink1() {
    var suggest = document.getElementById('product_name').value;
    document.getElementById('innerSpan2').value = suggest;
    document.getElementById('QueryLink').href = suggest;
}


  function SetSuggestLink2() {
    var suggest = document.getElementById('t_mode').value;
  //  document.getElementById('t_mode_display').value = suggest;

    if(suggest==2){
      document.getElementById('cl_mode').style.display='';
    }else{
       document.getElementById('cl_mode').style.display='none';
    }

   
     var urlString ="q="+suggest;
   $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "package.php?list=" + suggest ,             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#p_type").html(response); 
            //alert(response);
        }

    });

  
    
      $.ajax({
  type : "GET",
  url: "transportDisplay.php?list=" + suggest,
  dataType : "html",
  success: function(response)
  {
  $("#transportDiv").html(response); 
  }   
  });
  
}

 function SetSuggestLink3() {
    var suggest = document.getElementById('p_type').value;
    document.getElementById('p_type_display').value = suggest;
    document.getElementById('QueryLink').href = suggest;
}


function calculation(){
     var suggest = document.getElementById('id_step2-number_2').value;
    document.getElementById('trial').value = suggest;
    
}

function calculateA(){
    var suggest =document.getElementById('id_step2-number_2').value;
     document.getElementById('Premium premium_display').innerHTML = suggest;
  
}




function sendQuote(){


var firstName = document.getElementById('fname').value;

var lastName = document.getElementById('fname').value;

  var quoteId =  document.getElementById('gegege').value;

   var email =  document.getElementById('email_display').value;
   var pin =  document.getElementById('pin').value;
 var phone =  document.getElementById('phone_reg').value;
 var suggest = document.getElementById('product_category').value;
   
  var suggest1 = document.getElementById('innerSpan2').value;
 var suggest2 = document.getElementById('t_mode').value;

  if(suggest2 == 1){

    var suggest4 = "D";
  }
  else{
           var suggest4 = $('input:button[name=rate]:checked').val();


  }


 var suggest3 = document.getElementById('p_type_display').value;
 var suggest5 = document.getElementById('id_step2-number_2').value;

 var agent_name = document.getElementById('agent_name').value;
 var officer_name = document.getElementById('officer_name').value;
var email_officer = document.getElementById('email_officer').value;
 var mobile_agent = document.getElementById('mobile_agent').value;
 


 var num3 = suggest5.replace(/,/gi,"");



  var stringit = "category="+suggest+"&item="+suggest1+"&transport="+suggest2+"&package="+suggest3+"&iccClass="+suggest4+"&value="+num3+"&email="+email+"&phone="+phone+"&quoteId="+quoteId+"&fname="+firstName+"&pin="+pin+"&agent_name="+agent_name+"&officer_name="+officer_name+"&email_officer="+email_officer+"&mobile_agent="+mobile_agent;

  //alert(stringit);

   if(!/[A-Z][0-9]{9}[A-Z]/.test(pin) && !/(254)7(\d){8}/.test(phone) && suggest4==''){

    alert("Ensure your KRA pin is in the following formatt A123456789K && Phone number format 254700000000");
     document.getElementById('phone_reg').value='';
   }else if(/[A-Z][0-9]{9}[A-Z]/.test(pin) && /(254)7(\d){8}/.test(phone) && suggest4!=''){

   $('#showGIF').show();

   $.ajax({
  type : "GET",
  url: "cartInsert.php?" + stringit,
  dataType : "html",
  success: function(response)
  {
  $("#roy").html(response); 
  }
  });

  }

  
}

function getinsuarence2(value){
    var id=value;
     document.getElementById('QVI').value = id;
     var idSent="id="+id;
    $.ajax({
    type : "GET",
    url: "cartId.php?" + idSent,
    dataType : "html",
    success: function(response)
    {
    $("#roy").html(response); 
    }
    });

}
  
    </script>

   
    
   <script type="text/javascript">
     function checkout(buttonid){
      var qid=document.getElementById('QVI').value;
        location.href = "shopping-cart-form.php?id="+qid;
      }
     function claim(){
        location.href = "claims.php";
      }
    //   var qid=document.getElementById('QVI').value;
    //   $.ajax({
    // type : "GET",
    // url: "tocheck,php?" + qid,
    // dataType : "html"
    // });
   </script>

    <script type="text/javascript">

 function getTransport(){

  var quoteViewId = document.getElementById('QVI').value;

  var quoteId =  document.getElementById('gegege').value;

  var name =  document.getElementById('VesselName').value;
  var country =  document.getElementById('countryOforigin').value;
  var number = document.getElementById('VesselNumber').value;
   
  var loading = document.getElementById('loadingPort').value;
  var destination=document.getElementById('destination').value;
  var offloading=document.getElementById('destinationport').value;
 var arrival = document.getElementById('arrivalDate').value;
 var depature = document.getElementById('depatureDate').value;
 
 var stringVog =  "Vesname="+name+"&Vesnumber="+number+"&countryOf="+country+"&loadingOf="+loading+"&Destination="+destination+"&Offloading="+offloading+"&arrivalday="+arrival+"&depatureday="+depature+"&quote="+quoteViewId+"&quoteId="+quoteId;

   //alert(stringVog);


 $('#showGIF1').show();
   $.ajax({
  type : "GET",
  url: "VoyageDetails.php?" + stringVog,
  dataType : "html",
  success: function(response)
  {
  $("#invoiceDetails").html(response); 
  }
  });

}


    </script>
    <script type="text/javascript">
      getInsuranceQuote(){
   //var quoteId =  document.getElementById('gegege').value;



     $.ajax({
  type : "GET",
  url: "getInsuranceQuotes.php?" + quoteId,
  dataType : "html",
  success: function(response)
  {
       $("#InsuranceDisplay").html(response); 
  }
  });
  
}


}

    </script>

                <style>
                .btn-info.btn-sm.qwerty:focus {
                    background-color: transparent;
                    color: black;

                }
                </style>


</head>

<body style="background-image:' 750867.jpg'; ">
<div class="loader"></div>
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="black" data-image="../../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                    Kifwa
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    K+
                </a>
            </div>
            <div class="sidebar-wrapper">
             
                <ul class="nav">
               
                    <li class="active">
                        <a data-toggle="collapse" href="#formsExamples" aria-expanded="true">
                            <i class="material-icons">content_paste</i>
                            <p>Quotes
                             <!--   <b class="caret"></b> -->
                            </p>
                        </a>
                    </li>

                      <li>
                        <a data-toggle="collapse" href='#' onClick="claim()">
                            <i class="material-icons">payment</i>
                            <p>Claims
                            <!--    <b class="caret"></b> -->
                            </p>
                        </a>
                  
                    </li> 

                     <!-- <li>
                        <a href="#">
                            <i class="material-icons">face
                            </i>
                            <p>My Profile</p>
                        </a>
                    </li> -->
                       
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i> 
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div> 
                   <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"> 
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Quote </a>
                    </div> 
                  
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="wizard-container">
                            <div class="card wizard-card" data-color="blue" id="wizardProfile">
                                <form action="#" method="" id="myForm">
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                         <strong>Marine Cargo Insurance</strong>   
                                        </h3>
                                    <!--    <h5>This information will let us know more about you.</h5> -->
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li>
                                                <a href="#about" data-toggle="tab">Quote</a>
                                            </li>
                                             <li>
                                                <a href="#account" data-toggle="tab">view quotes</a>
                                            </li>
                                            
                                           <li>
                                                <a href="#Voyage" data-toggle="tab">Voyage details</a>
                                            </li>
                                            
                                             <li>
                                                <a href="#address " data-toggle="tab">invoice</a>
                                            </li>
                                        </ul>
                                    </div>
                                 
<?php



include('mainurl.php');

$json_string = file_get_contents($api_url."/api/QuoteData");
$data = json_decode($json_string, true);

$array = $data;
$transmode=$data['transMode'];
$packageType= $data['packagingType'];
$itemCategory = $data['itemCategory'];
$productType = $data['productType'];
$cargoType = $data['cargoType'];





?>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>  

                                    <div class="tab-content">
                                        <div class="tab-pane" id="about">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Enter the product information </h4>
                                                </div>
                                                 <div class='col-sm-12'>
                                                 <p>All fields marked with <span style="color:#f44842;"> *</span> are Mandatory </P>
                                                 </div>
                                                 <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Insured Full Name<span style="color:#f44842;"> *</span></label>
                                                        <input type="text" class="form-control" required id="fname" name="fname">

                                                    </div>
                                                    </div>
                                              
                                               <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email adress <span style="color:#f44842;"> *</span></label>
                                                        <input type="email" class="form-control" required id="email_reg" name=email_reg onChange="email()">

                                                    </div>
                                                    </div>
                                              <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone number <span style="color:#f44842;"> *</span></label>
                                                        <input type="text" class="form-control" required id="phone_reg" name=phone_reg onChange="phone()" maxlength="12" pattern="(254)7(\d){8}" title="Phone number format 254700000000">

                                                    </div>
                                                </div>
                                                 <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">KRA Pin <span style="color:#f44842;"> *</span></label>
                                                        <input type="text" class="form-control" required id="pin" name=pin onChange="phone()" maxlength = "11" style='text-transform:uppercase' pattern="[A-Z][0-9]{9}[A-Z]" title="Ensure your KRA pin is in the following formatt A123456789K">

                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Clearing Agency Name <span style="color:#f44842;">*</span></label>
                                                        <!-- <input type="text" class="form-control"  id="agent_name"> -->



                                                         <select name="agent_name" class="form-control" required="required" id="agent_name" >
                                                         <option disabled="" selected=""></option>
                                                        <?php
                                                        include('conn.php');
                                                         $sql_sel22=sqlsrv_query($conn, "SELECT  *  from Agencies where Active='1' ");
        
                                     while($row22=sqlsrv_fetch_array($sql_sel22, SQLSRV_FETCH_ASSOC)){
                                                        ?>
                                                           
                                                           <option value="<?php echo $row22['Id']; ?>"><?php echo $row22['Name']; ?></option>
                                                            <?php } ?>
                                                      
                                                        </select>








                                                    </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Clearing Officer's Name</label>
                                                        <input type="text" class="form-control"  id="officer_name" name=officer_name >

                                                    </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Clearing Officer's Email address</label>
                                                        <input type="text" class="form-control"  id="email_officer" >

                                                    </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Clearing Officer's Mobile Number</label>
                                                        <input type="text" class="form-control"  id="mobile_agent">

                                                    </div>
                                                    </div>

                                               
                                                 <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Product Category <span style="color:#f44842;">*</span></label>
                                                        <select name="product_category" class="form-control" required="required" id="product_category"    OnChange="SetSuggestLink()">
                                                         <option disabled="" selected=""></option>
                                                        <?php  foreach ($itemCategory as $row) {
                                                            # code...
                                                        ?>
                                                           
                                                           <option value="<?php echo $row['Id']; ?>"><?php echo $row['Name']; ?></option>
                                                            <?php } ?>
                                                      
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Product name <span style="color:#f44842;">*</span></label>
                                                        <input name="product_name" class="form-control" required id="product_name" OnChange="SetSuggestLink1()">
                                                        
                                                            
                                                          
                                                           
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Transport mode <span style="color:#f44842;">*</span></label>
                                                        <select name="t_mode" class="form-control" required="required" id="t_mode" OnChange="SetSuggestLink2()">
                                                            <option disabled="" selected=""></option>
                                                            <?php 
                                                            foreach ($transmode as $row) {
                                                                # code...
                                                           
                                                            ?>
                                                            <option value="<?php echo $row['Id'] ?>"> <?php echo $row['Name'] ?></option>
                                                         <!--   <option value="Sea"> Sea </option>
                                                            <option value="Air"> Air </option> -->
                                                            <?php } ?>
                                                          
                                                            <option value="...">...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Package type <span style="color:#f44842;">*</span></label>
                                                        <select name="p_type" class="form-control" required="required" id="p_type" OnChange="SetSuggestLink3()">
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Value of your cargo(KES) <span style="color:#f44842;">*</span></label>
                                                        <input data-type="number" class="form-control" required id="id_step2-number_2" name="step2-number_2" onBlur="calculation()">

                                                        <input data-type="number" class="form-control" style="display: none" id="gegege" value="<?php echo $link ?>" "> 


                                                        <input data-type="number" class="form-control" style="display: none" id="productId" value=" "> 

                                                        <input data-type="number" class="form-control" style="display: none" id="packageId" value="" "> 

                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js">
                                                            
                                                        </script>
<script type="text/javascript">
                                                
            $(document).ready(function(){
    $("input[data-type='number']").keyup(function(event){
      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var $this = $(this);
      var num = $this.val().replace(/,/gi, "");
      var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
      console.log(num2);


  

       document.getElementById('trial').innerHTML = num2;
    
      // the following line has been simplified. Revision history contains original.
      $this.val(num2);
  });
});
                                            </script> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5" id='cl_mode'>
                                                     <label>ICC CLASS</label>
                                                     <div class="btn-group btn-group" role="group" required="required" id="rate" onClick="$(document).ready(function()">
                                                     <span><input type='button' class='btn btn-info btn-sm qwerty' name="rate" value='A' id="A" /></span>
                                                      <span><input type='button' class='btn btn-info btn-sm qwerty' name="rate" value='B' id="B" /></span>
                                                      <span><input type='button' class='btn btn-info btn-sm qwerty' name="rate" value='C' id="C" /></span>                                                                               
                                                     </div>
                                                    
                                                </div>
                                            <script type="text/javascript">

                                                  $(document).ready(function(){                                                    

                                                    $("#A").click(function () {

                                                    $('input:button[name=rate]:nth(0)').attr('checked',true);
                                                    //$('input:radio[name=sex]')[0].checked = true;
                                                      document.getElementById('icc_class').value = 'A';
                                                    });

                                                    $("#B").click(function () {

                                                    $('input:button[name=rate]:nth(1)').attr('checked',true);
                                                    //$('input:radio[name=sex]')[1].checked = true;
                                                      document.getElementById('icc_class').value = 'B';
                                                    });

                                                    $("#C").click(function () {

                                                    $('input:button[name=rate]:nth(2)').attr('checked',true);
                                                    //$('input:radio[name=sex]')[2].checked = true;
                                                      document.getElementById('icc_class').value = 'C';
                                                    });

                                                   
                                                      
                                                  });

                                                </script>
                                              </div>
                                                 
<!-- 
                                                       <div class="row">
                                                    
                                                     <div class="col-xs-12">
                                                     <div class="card">
                                                        
                                                        <div class="card-content">
                                                            
                                                             <div class="table-responsive" id="tableItem">

                                                              <table class="table">
      <thead class="text-primary">
            <tr>
                                                  
     <th>Product Category</th>
     <th>Product Name</th>
    <!--  <th>Transport Mode</th> -->
    <!--  <th>Package Type</th>
     <th>Value of your cargo(KES)</th>
     <th class="text-right">ICC</th>
     <th>Action</th>
     </tr>
     </thead>
    <tbody > -->
              
<!-- <?php


 $link=$_GET['var'];

$url= 'http://kifwaapi.azurewebsites.net/api/QuoteDetails/Quote/'.$link;
$json_string = file_get_contents($url);
$data2 = json_decode($json_string, true);

$array = $data2;

foreach ($data2 as $row) {
    $cargotype= $row['CargoType'];
    $cart=$row['ItemsCategories'];
    $package=$row['PackagingType'];
    $trans=$row['TransportMode'];




?>
 --><!-- 
       <tr>
       <td> <?php  echo $cart['Name'];  ?></td> 
       <td> <?php   echo $cargotype['Name']; ?></td>
      <!--  <td> <?php    ?></td> -->
      <!--  <td> <?php echo $package['Name']; ?></td>
       <td> <?php echo $row['Value']; ?></td>
       <td class="text-right"> <?php   echo $row['Icc']; ?></td>
        <td>  <a href="deleteItem.php?var=<?php echo $row['Id'];  ?>&quoteId=<?php echo $link; ?>">
       <button type="button" rel="tooltip" class="btn btn-danger">
        <i class="material-icons">delete</i>
            </button></a> <td>



         </tr>

         <?php } ?> -->
    <!--   </tbody>
      </table>
    
                                       
                                    </div>
                                                       
                                                    </div> 

                                                    </div>
                                                   
                                                </div>
                                            </div>   -->

                                             <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' onClick="sendQuote()"/>
                                            
                                        </div>
                                        </div>


                                       <div class="tab-pane" id="Voyage">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Enter the Transport information </h4>
                                                </div>
                                            <div class='col-sm-12'>
                                            <p>All fields marked with <span style="color:#f44842;"> *</span> are Mandatory</p>
                                            </div>
                                                  <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Vessel Name</label>
                                                        <input type="text" class="form-control"  id="VesselName" name="VesselName"
                                                        onChange="getVesselName()">
                                                   </div>
                                                   </div>
                                                    <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Vessel Number </label>
                                                        <input type="text" class="form-control"  id="VesselNumber" name="VesselNumber" onChange="getVesselNumber()">
                                                    </div>

                                                
                                                      
                          

                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Country of Origin <span style="color:#f44842;"> *</span></label>
                                                        <select name="countryOforigin" class="form-control" required="required" id="countryOforigin"    OnChange="selectCountry()">
                                                            <option disabled="" selected=""></option>
                                                             <option value="">Country...</option>
                                                                <option value="Afganistan">Afghanistan</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire">Bonaire</option>
                                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                <option value="Brunei">Brunei</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Canary Islands">Canary Islands</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Channel Islands">Channel Islands</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos Island">Cocos Island</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Curaco">Curacao</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="East Timor">East Timor</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Ter">French Southern Ter</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Great Britain">Great Britain</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Hawaii">Hawaii</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran">Iran</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea North">Korea North</option>
                                                                <option value="Korea Sout">Korea South</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libya">Libya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macau">Macau</option>
                                                                <option value="Macedonia">Macedonia</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Midway Islands">Midway Islands</option>
                                                                <option value="Moldova">Moldova</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Nambia">Nambia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                <option value="Nevis">Nevis</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau Island">Palau Island</option>
                                                                <option value="Palestine">Palestine</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Phillipines">Philippines</option>
                                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russia">Russia</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="St Barthelemy">St Barthelemy</option>
                                                                <option value="St Eustatius">St Eustatius</option>
                                                                <option value="St Helena">St Helena</option>
                                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                <option value="St Lucia">St Lucia</option>
                                                                <option value="St Maarten">St Maarten</option>
                                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                <option value="Saipan">Saipan</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="Samoa American">Samoa American</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syria">Syria</option>
                                                                <option value="Tahiti">Tahiti</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania">Tanzania</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States of America">United States of America</option>
                                                                <option value="Uraguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Vatican City State">Vatican City State</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                <option value="Wake Island">Wake Island</option>
                                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zaire">Zaire</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>    
                                                        </select>
                                                    </div>

                                                </div>  

                                                
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Country of Destination <span style="color:#f44842;"> *</span></label>
                                                        <select name="destination" class="form-control" required="required" id="destination"    OnChange="selectCountry()">
                                                            <option disabled="" selected=""></option>
                                                             <option value="">Country...</option>
                                                        <option value="Afganistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Canary Islands">Canary Islands</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Channel Islands">Channel Islands</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Island">Cocos Island</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaco">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Great Britain">Great Britain</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya" selected="">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea North">Korea North</option>
                                                        <option value="Korea Sout">Korea South</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Midway Islands">Midway Islands</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nambia">Nambia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                        <option value="Nevis">Nevis</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Phillipines">Philippines</option>
                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                        <option value="St Eustatius">St Eustatius</option>
                                                        <option value="St Helena">St Helena</option>
                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                        <option value="St Lucia">St Lucia</option>
                                                        <option value="St Maarten">St Maarten</option>
                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                        <option value="Saipan">Saipan</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Samoa American">Samoa American</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tahiti">Tahiti</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uraguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                        <option value="Wake Island">Wake Island</option>
                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                 
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Port of Loading <span style="color:#f44842;"> *</span></label>
                                                        <input type="text" class="form-control" required id="loadingPort" name="loadingPort"
                                                        onChange="getLoadingPort()">
                                                    </div>

                                                </div>

                                                 <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Port of Destination<span style="color:#f44842;"> *</span></label>
                                                        <input type="text" class="form-control"  id="destinationport" name="destinationport" onChange="getVesselNumber()" required>
                                                    </div>

                                                </div>

                                                 <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <span class="control-label">Date of Departure <span style="color:#f44842;"> *</span></span>
                                                        <input type="date" class="form-control" required id="depatureDate" name="depatureDate" onChange="getDepatureDate()">
                                                    </div>

                                                </div>

                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                    <span class="control-label">Date of Arrival <span style="color:#f44842;"> *</span></span>
                                                      <!--   <label class="control-label">Enter date of arrival</label> -->
                                                        <input type="date" class="form-control" required id="arrivalDate" name="arrivalDate"
                                                        onChange="getArrivalDate()">
                                                    </div>

                                                </div>
                                               
                                                        <input data-type="number" class="form-control" style="display: none" id="gegege" value="<?php echo $link ?>" "> 
                                            
                                               
                                            </div>

                                             <div class="pull-right">
                                            <input type="button" onClick="getTransport()" class="btn btn-next btn-fill btn-info btn-wd" name="Invoice" value="Invoice"  />
                                        </div>
                                   <!--     <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                        </div> -->
                                        <div class="clearfix"></div>
                                        </div> 

                                        <div class="tab-pane" id="account">
                                       <!--     <h4 class="info-text"> What are you doing? (checkboxes) </h4> -->
                                            <div class="row">
                                        
                                    
                                           
                                                 
                                                      <div id="roy">
                                                      
                                                <!-- <?php

//$quoteId =$_GET['quoteId'];
 //$quote = '23';
$url= 'http://kifwaapi.azurewebsites.net/api/QuoteViews/Quote/'.$link;

 $json_string = file_get_contents($url);
$data = json_decode($json_string, true);

?> -->

 <div class="table-responsive">


                                           
                                      </div>
                                            <div id="showGIF" style='display:none;' class="col-xs-2">
                                              <img src='loader2.gif'/>
                                            </div>

                                            </div>

                                     
                                        <!-- notice modal -->
                    

                                  
                             
                                            </div>

                                      <!--  <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                        </div> -->
                                        <div class="clearfix"></div>
                                        </div>
                                           
                                  
                                            <div class="tab-pane" id="address" >
                                      

                                      


                                    <div id="invoiceDetails">
                                       <div id="showGIF1" style='display:none;' class="col-xs-2">
                                              <img src='loader2.gif'/>
                                            </div> 
                                    </div>
                                        <div class="pull-left">
                                            
                                            <!--  <a href="http://flag42.com/client/kifwa1/invoice/invoice.php?var=<?php echo $link;?>"><input type="button" class="btn btn-success" value="GET INVOICE"> </a> -->
                                                        <!--<a href="login.php?var=<?php echo $link;?>"><input type="button" class="btn btn-warning" value="GET CERTIFICATE ON CREDIT"></a>-->    
                                             
                                        </div>
                                        <div class="pull-right"><input type="button" class="btn btn-info" value=" Proceed to Payment" id='checkout-b' onclick="checkout()">
                                          
                                        </div>
                                        <div class="clearfix"></div>
                                    </div> 
                                       <!-- <div class="tab-pane" id="payment">

                                       <div class="card">
                                         <div class="card-content">
                                               <div class="row">
      
                                               
                                                        <input data-type="number" class="form-control" style="display: none" id="gegege" value="<?php echo $link ?>"> 
                                            
                                               
                                            
                                         <input type="button" class="btn btn-warning" value="Proceed to Payment" onclick="checkout()">
                                                </div> 


                                         </div>
                                       </div>
                                               

                                             <div class="pull-right">
                                            <input type="button" onClick="getTransport()" class="btn btn-next btn-fill btn-info btn-wd" name="Invoice" value="Invoice"  />
                                        </div>     
                                        </div>  -->
                                
                                    </div>
                                   <div class="wizard-footer">
                                        <div class="pull-right">
                                         <!--   <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' /> 
                                            <input type='button' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Finish'/>-->


                                        </div>
                                     <!--   <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                        </div> -->
                                        <div class="clearfix"></div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                        <!-- wizard container -->
                            </div>
                        </div>
                       <div class="col-md-4">
                            <div class="card">
                                <form id="LoginValidation" action="#" method="">
                                    <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="material-icons">contacts</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title"><strong>Quote Information</strong></h4>

                                        <div class="form-group label-floating">

                                            <label class="control-label">Email
                                                <star>*</star>
                                            </label>
                                             <input id="email_display" class="form-control" value=" " disabled></input>
                                           
                                        </div>

                                        <div class="form-group label-floating">

                                            <label class="control-label">Phone number
                                                <star>*</star>
                                            </label>
                                             <input id="phone_display" class="form-control" value=" " disabled></input>
                                           
                                        </div>

                                         <div class="form-group label-floating">

                                            <label class="control-label">Value of goods(KES)
                                                <star>*</star>
                                            </label>
                                           <input id="trial" class="form-control" value=" " disabled></input>
                                           </div>
                                       <div >
                                       
                                       <div >
                                       
                                         

                                       </div>
                                          <div class="form-group label-floating">

                                            <input  class="form-control" style="display:none" id="QVI" > 
                                        </div> 

                                         <div class="form-group label-floating">

                                            <input id="innerSpan2" class="form-control" value=" " style="display: none" ></input>
                                        </div>

                                        
                                         <div class="form-group label-floating">

                                            <input id="p_type_display" class="form-control" value=" " style="display: none" ></input>
                                        </div>
                                        
                                        

                                        </form>
                                    </div>


                                     <div class="card">
                              
                                    <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="material-icons">call</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title"><strong>Contact Information</strong></h4>

                                       
                                        <H6><strong>Customer Support</strong></H6>
                                        <p><strong>Mobile:</strong> +254 720 498 001</p>
                                        <p><strong>Telephone:</strong> +254 20 22 111 52</p>
                                        <p><strong>Email:</strong> underwriting@kenbright.co.ke</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>

                                         <H6><strong>Technical Support</strong></H6>
                                       <p><strong>Mobile:</strong> +254 702 990 831</p>
                                        <p><strong>Telephone:</strong> +254 20 22 111 52</p>
                                        <p><strong>Email:</strong> info@flag42.com</p>


                                       
                                        
                                    </div>
                               
                               
                            </div>
                       
                 
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                    <nav class="pull-left">
                    </nav>
                    <p class="copyright pull-left">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.flag42.com/">POWERED BY Flag 42</a>
                    </p>
                    </div>
                    </div>
                </div>
            </footer>
            <!-- <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.flag42.com/">POWERED BY Flag 42</a>
                    </p>
                </div>
            </footer> -->
        </div>
    </div>
   

      
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/js/material.min.js" type="text/javascript"></script>
<script src="../../assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../../assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="../../assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="../../assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="../../assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../../assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../../assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../../assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="../../assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../../assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../../assets/js/sweetalert2.js"></script>
<!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../../assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../../assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

<script type="text/javascript">
    $().ready(function() {
        demo.initMaterialWizard();
        
    });
</script>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 06:46:07 GMT -->
</html>