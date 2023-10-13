<!DOCTYPE html>
<?php
    $langs = session('lang');
    if($langs=="ar"){
      $dir="rtl";
    }
    else{
      $dir="ltr";
    }
?>

<html lang="<?php echo $langs;?>" dir = "<?php echo $dir;?>">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SABIHA || ABDULKADER_LMS</title>

    <!-- ===================FONTAWSOME  FILE LINK================== -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- ===================BOOTSTRAP CSS FILE LINK================== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

<!-- faq page links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    />
    <!--  -->
    
<!-- language translator cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <!-- ===================  CUSTOME FILE LINK START HERE================== -->


   <link href="{{ URL::asset('home/css/style.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/about_sabiha_page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/terms-and-condition-page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/checkout-page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/contact_us_page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/course-overview-page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/course-detail-review-page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/courses.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/payment-method-page.css') }}"  rel="stylesheet">
   <link href="{{ URL::asset('home/css/review-your-order-page.css') }}"  rel="stylesheet">
   
   <link href="{{ URL::asset('home/css/faq-page.css') }}"  rel="stylesheet">



  </head>