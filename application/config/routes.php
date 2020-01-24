<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'DefaultController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//DefaultController routes
$route['home-page'] 	= 'DefaultController/uptopprocess'; 
$route['subscribe'] 	= 'DefaultController/subscribe';
$route['contact-us'] 	= 'DefaultController/contactUs';

$route['contact-form-process'] 	= 'DefaultController/contactFormProcess';

$route['donation'] 		= 'DefaultController/donation';
$route['about-us'] 		= 'DefaultController/aboutus'; 




// News and Events routes 
$route['news'] = 'NewsController/defaultNews';




//Fastivel routes 
$route['festivals'] = 'FestivalController/defaultFestival';
$route['festival/nityananda-trayodasi'] 	= 'FestivalController/nityanandaTrayodasi';
$route['festival/vasanta-panchami'] 		= 'FestivalController/vasantaPanchami';
$route['festival/gaura-purnima'] 			= 'FestivalController/gauraPurnima';
$route['festival/ram-ravmi'] 				= 'FestivalController/ramRavmi';
$route['festival/chandan-yatra'] 			= 'FestivalController/chandanYatra';
$route['festival/narsimha-caturdashi'] 		= 'FestivalController/narsimhaCaturdashi';
$route['festival/jhulan-yatra'] 			= 'FestivalController/jhulanYatra';
$route['festival/ratha-yatra'] 				= 'FestivalController/rathaYatra';
$route['festival/balaram-purnima'] 			= 'FestivalController/balaramPurnima';
$route['festival/sri-krishna-janmastmi'] 	= 'FestivalController/sriKrishnaJanmastmi';
$route['festival/srila-prabhupada-vyasa-puja'] = 'FestivalController/srilaPrabhupadaVyasaPuja';
$route['festival/lalita-sasti'] 			= 'FestivalController/lalitaSasti';
$route['festival/radhastmi'] 				= 'FestivalController/radhastmi';
$route['festival/kartik-dipavali'] 			= 'FestivalController/kartikDipavali';
$route['festival/boat-festivel'] 			= 'FestivalController/boatFestivel';
$route['festival/ratha-yatra'] 				= 'FestivalController/rathaYatra';


//CSR routes 

$route['csr'] = 'CSRController/defaultCSR';  
$route['csr/digital-india-kill-india-swachh-bharat'] 			=	'CSRController/digitalIndiaKillIndiaSwachhBharat';
$route['csr/plantation-environmental'] 							=	'CSRController/plantationEnvironmental';

$route['csr/education-women-empowerment-and-renovation'] 		=	'CSRController/educationWomenEmpowermentAndRenovation';
$route['csr/middayMeal-poverty-relief-programs'] 		=	'CSRController/middayMealProgramChildProtection';   
$route['csr/ISKCON-tribal-care'] 						=	'CSRController/ISKCONTribalCare';
$route['csr/save-yamuna-save-braja'] 					=	'CSRController/saveYamunaSaveBraja';
$route['csr/cow-protection'] 							=	'CSRController/cowProtection';

   












