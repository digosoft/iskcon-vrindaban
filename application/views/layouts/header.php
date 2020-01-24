
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title><?php echo ucfirst(str_replace('-', ' ',$this->uri->segment(2))) ." | "."ISKCON VRINDABAN" ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="ISKCON VRINDABAN" />
        <meta name="keywords" content="ISKCON VRINDABAN, ISKCONVRINDABAN, ISKCONVRINDAVAN, ISKCON VRINDAVAN" />
        <meta name="author" content="ISKCON" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <link rel="icon" href="https://iskconvrindavan.com/wp-content/uploads/2017/12/ywuqYuVc-100x100.png" sizes="32x32" />
        <link rel="icon" href="https://iskconvrindavan.com/wp-content/uploads/2017/12/ywuqYuVc-300x300.png" sizes="192x192" />


        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='<?=base_url()?>assets/resources/css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='<?=base_url()?>assets/resources/css/common.css' />
        <link rel="stylesheet" type="text/css"  href='<?=base_url()?>assets/resources/css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='<?=base_url()?>assets/resources/css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='<?=base_url()?>assets/resources/css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='<?=base_url()?>assets/resources/style.css' />


           <!-- Custome Menu Initilize -->

        <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

         <script>
            var slider1_speed = "500";
            var slider1_auto = "true";
            var slider1_pagination = "true";
            var slider1_hover = "true";
        </script>

<style type="text/css">  
#navigation {
  background-color: rgba(255, 117, 27, 1);
  border: 0 none;
  margin: 0;
  
    -webkit-transition: background-color 800ms linear;
       -moz-transition: background-color 800ms linear;
        -ms-transition: background-color 800ms linear;
         -o-transition: background-color 800ms linear;
            transition: background-color 800ms linear;
}

.navbar-toggle i {
    color: #fff;
}

.navbar-brand {
  padding: 0;
}

.navbar-nav li a {
    border-top: 1px solid transparent;
}

.navbar-nav li a.current,
.navbar-nav li a:focus,
.navbar-nav li a:hover {
    background-color: transparent;
    border-top: 1px solid #32B0EE;
    color: #fff;
}
.navbar-nav li a { 
    color: #fff;
}
.nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background-color: #000;
    border-color: #337ab7;
}
 
</style>
</head>

 <body class="about page page-template-default">
<!-- 
    <div class="fixed scroll-top" style="display: block;"> -->
        <header id="navigation" class="navbar-fixed-top navbar">       
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <a class="navbar-brand" href="http://iskconvrindaban.com"> 
                            <img src="<?= base_url()?>assets/img/logo.png" alt="ISKCON VRINDABAN" style="padding-top: 10px"> 
                    </a>
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="font-weight: 600">
                    <ul class="nav navbar-nav">
                        <li class="current"><a href="<?= base_url()?>">HOME</a></li>                     
                   <!--      <li><a href="#projects">Projects</a></li> -->
                        <li><a href="<?= base_url()?>about-us">ABOUT US</a></li>


                        <li  class="dropdown"><a href="<?= base_url()?>festivals" class="dropdown-toggle" data-toggle="dropdown">FESTIVALS</a>

                        <ul class="dropdown-menu" style="background: #ff751b">

                             <li><a href="<?= base_url()?>festival/ratha-yatra">  Ratha Yatra</a></li>
                            <li><a href="<?= base_url()?>festival/boat-festivel"> Boat Festivel</a></li>
                            <li><a href="<?= base_url()?>festival/nityananda-trayodasi">Nityananda Trayodasi</a></li>
                            <li><a href="<?= base_url()?>festival/vasanta-panchami">Vasanta Panchami</a></li>
                            <li><a href="<?= base_url()?>festival/gaura-purnima">Gaura Purnima</a></li>
                            <li><a href="<?= base_url()?>festival/ram-ravmi">Ram Navmi</a></li>

                            <li><a href="<?= base_url()?>festival/chandan-yatra">Chandan Yatra</a></li>
                            <li><a href="<?= base_url()?>festival/narsimha-caturdashi">Narsimha Caturdashi</a></li>
                            <li><a href="<?= base_url()?>festival/jhulan-yatra">Jhulan Yatra</a></li>
                            <li><a href="<?= base_url()?>festival/balaram-purnima">Balaram Purnima</a></li>


                            <li><a href="<?= base_url()?>festival/sri-krishna-janmastmi">Sri Krishna Janmastmi</a></li>
                            <li><a href="<?= base_url()?>festival/srila-prabhupada-vyasa-puja">Srila Prabhupada’s Vyasa Puja</a></li>
                            <li><a href="<?= base_url()?>festival/lalita-sasti">Lalita Sasti</a></li>
                            <li><a href="<?= base_url()?>festival/radhastmi">Radhastmi</a></li>
                            <li><a href="<?= base_url()?>festival/kartik-dipavali">Kartik & Dipavali</a></li> 

                        </ul>

                        </li>


                        <li><a href="<?= base_url()?>donation">DONATIONS</a></li> 
                         <li><a href="<?= base_url('news'); ?>">NEWS </a></li>

                  <li  class="dropdown"><a href="<?= base_url()?>csr" class="dropdown-toggle" data-toggle="dropdown">CSR ACTIVITIES</a>

                        <ul class="dropdown-menu" style="background: #ff751b">

                            <li><a href="<?=base_url()?>csr/plantation-environmental">Plantation / Environmental Prot..</a></li>
                            <li><a href="<?=base_url()?>csr/digital-india-kill-india-swachh-bharat">Digital india/ Swachh Bharat..</a></li>
                            <li><a href="<?=base_url()?>csr/education-women-empowerment-and-renovation"> Education/Women empow..</a></li> 
                            <li><a href="<?=base_url()?>csr/middayMeal-poverty-relief-programs">Midday Meal / Poverty Relief ..</a></li>  

                            <li><a href="<?=base_url()?>csr/ISKCON-tribal-care"> ISKCON Tribal Care</a></li> 
                            <li><a href="<?=base_url()?>csr/save-yamuna-save-braja">Save Yamuna, Save Braja</a></li>
                            <li><a href="<?=base_url()?>csr/cow-protection">Cow Protection</a></li> 
                        </ul>

                        </li>
                        <li><a href="<?= base_url()?>contact-us">CONTACT US</a></li>

                 



                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>


        <script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>  
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>