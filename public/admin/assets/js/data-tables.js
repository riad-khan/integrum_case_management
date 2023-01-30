(function($) {
  'use strict';
var dataSet = [
	  [ "01" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Jón Jónsson", "608509-0710", "jon@leikbreytir.is", "8219458","21.02.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "02" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Kjartan Jónsson", "653209-0710", "jon@leikbreytir.is", "8218458","21.02.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "03" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Vilhjálmur Berg", "458712-1590",  "berg@leikbreytir.is","5454468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],  
	  [ "04" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Yngvi Tómasson", "605845-0710", "yngvi@leikbreytir.is", "8254458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "05" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Jón Jónsson", "600509-0710", "jon@leikbreytir.is", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "06" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Jóna Gunnarsdóttir", "450712-1590",  "jona@leikbreytir.is","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
	  [ "07" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Bjarni Gunnarsson", "600509-0710", "bjarni@leikbreytir.is", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "08" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Gunnhildur Jónsdóttir", "600509-0710", "jon@leikbreytir.is", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "09" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> elitesport Berg", "450712-1590",  "berg@leikbreytir.is","5481468","12.07.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "10" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Kjartan Jónsson", "600509-0710", "jon@leikbreytir.is", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "11" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Bjarni Gunnarsson", "600509-0710", "bjarni@leikbreytir.is", "8219458","20.09.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "12" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Jóna Gunnarsdóttir", "450712-1590",  "jona@leikbreytir.is","5481468","05.01.2021", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
	  [ "13" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Jón Jónsson", "600509-0710", "jon@leikbreytir.is", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],	  
      [ "14" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Bjarni Gunnarsson", "600509-0710", "gunnarsson@leikbreytir.is", "8219458","27.03.2021", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "15" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Yngvi Tómasson", "450712-1590",  "yngvi@leikbreytir.is","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "16" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Jón Jónsson", "6542509-0710", "jon@leikbreytir.is", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
  ];
  var dataSet1 = [
      [ "01" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "6078509-0710", "Kjartan Jónsson", "8252558","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "02" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Húsgagnahöllin", "450712-1590",  "Vilhjálmur Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "03" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> gjafakort.", "600509-0710", "gjafakort ht", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "04" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "05" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> dansport is", "450712-1590",  "dansportis Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "06" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> details hf.", "600509-0710", "details S3", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "07" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "08" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Egersund", "450712-1590",  "Egersund Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "09" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> elitesport hf.", "600509-0710", "Kjartan elitesport", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "10" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> felduris op.", "600509-0710", "JGH felduris", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "11" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Húsgagnahöllin", "450712-1590",  "Vilhjálmur Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "12" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "13" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "14" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Húsgagnahöllin", "450712-1590",  "Vilhjálmur Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "15" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "16" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "17" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Húsgagnahöllin", "450712-1590",  "Vilhjálmur Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "18" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "19" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "20" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> elitesport", "450712-1590",  "elitesport Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "21" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "22" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> S4S hf.", "600509-0710", "Kjartan Jónsson", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "23" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Húsgagnahöllin", "450712-1590",  "Vilhjálmur Berg","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "24" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> Egersund hf.", "600509-0710", "Egersund HGY", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "25" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> details uj.", "600509-0710", "details Tieo", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      [ "26" , "<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> dansportis", "450712-1590",  "dansportis .GH","5481468","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
	  [ "27" ,"<img src='assets/img/custom/snjallson_bola-64.png' style='width:50px; height:30px;'> gjafakort hf.", "6542509-0710", "Kjartan gjafakort", "8219458","25.03.2020", "<a href='#'><i class='fas fa-paper-plane ms-text-primary'></i> <i class='far fa-trash-alt ms-text-danger'></i></a>"],
      ];



    var dataSet2 = [
        [ "254452" ," S4S hf.", "25.03.2020", "5.000 kr."],
        [ "452424" ," Húsgagnahöllin.", "2012/04/30", "55783 kr."],
        [ "542455" ," Húsgagnahöllin.", "2012/04/30", "5453 kr."],
		[ "542275" ," S4S hf.", "25.03.2020", "5.000 kr."],
		[ "574787" ," Húsgagnahöllin.", "2012/04/30", "5453 kr."],


      ];
      var dataSet3 = [
        ["101" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321","Low Rider","$620.50", "2020/05/03"],
        [ "102" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Hennry", "Hennry@123gmail.com",  "2321","Hemp Oil","$450.50", "2020/05/03"],
        ["103" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525","Super Skunk","$850.50", "2017/10/05" ],
        ["104" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "3525","Ingrid","$650.50", "2017/10/05" ],
        ["105" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Jack", "Jack@123gmail.com",  "2321","Low Rider","$320.50", "2020/05/03"],
        [ "106" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Bella", "Bella@123gmail.com",  "2321","Hemp Oil","$520.50", "2020/05/03"],
        ["107" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Alice", "Alice@123gmail.com",  "3525","UK Cheese","$550.50", "2017/10/05" ],
        ["108" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "3525","Ingrid","$450.50", "2017/10/05" ],
        ["109" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "2321","Low Rider","$220.50", "2020/05/03"],
        [ "110" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Peter", "Peter@123gmail.com",  "2321","Hemp Oil","$720.50", "2020/05/03"],
        ["111" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Anny", "anny@123gmail.com",  "2321","Low Rider","$620.50", "2020/05/03"],
        [ "112" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Hennry", "Hennry@123gmail.com",  "2321","Hemp Oil","$450.50", "2020/05/03"],
        ["113" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Haris", "Haris@123gmail.com",  "3525","Super Skunk","$850.50", "2017/10/05" ],
        ["114" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Jhon", "Jhon@123gmail.com",  "3525","Ingrid","$650.50", "2017/10/05" ],
        ["115" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Jack", "Jack@123gmail.com",  "2321","Low Rider","$320.50", "2020/05/03"],
        [ "116" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Bella", "Bella@123gmail.com",  "2321","Hemp Oil","$520.50", "2020/05/03"],
        ["117" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Alice", "Alice@123gmail.com",  "3525","UK Cheese","$550.50", "2017/10/05" ],
        ["118" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Harry", "Harry@123gmail.com",  "3525","Ingrid","$450.50", "2017/10/05" ],
        ["119" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Moris", "Moris@123gmail.com",  "2321","Low Rider","$220.50", "2020/05/03"],
        [ "120" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Peter", "Peter@123gmail.com",  "2321","Hemp Oil","$720.50", "2020/05/03"],

        ];

		  var dataSet4= [
		  [ "01" ,"123456789123", "3211231235467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "gjafakort"],
		  [ "02" ,"123576789123", "3211751235467", "22.08.2020", "25.500 kr.","100.000 kr", "14.10.2022", "dansportis"],
		  [ "03" ,"12858755586", "54185781855445", "30.08.2021", "30.600 kr.","100.000 kr", "01.08.2022", "details"],
		  [ "04" ,"123458549123", "3211254555467", "05.08.2022", "08.500 kr.","100.000 kr", "02.11.2023", "Egersund"],
		  [ "05" ,"127854789123", "321157785467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "elitesport"],
		  [ "06" ,"524455677423", "5785231235748", "01.03.2021", "21.500 kr.","120.000 kr", "02.01.2022", "felduris"],
		  [ "07" ,"587542375456", "7854275775574", "04.10.2020", "250.900 kr.","200.000 kr", "05.12.2023", "gjafahus"],
		  [ "08" ,"123456789123", "3211231235467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "gjafakort"],
		  [ "09" ,"123576789123", "3211751235467", "22.08.2020", "25.500 kr.","100.000 kr", "14.10.2022", "dansportis"],
		  [ "10" ,"128587588586", "541857817857", "30.08.2021", "30.600 kr.","100.000 kr", "01.08.2022", "details"],
		  [ "11" ,"123458557723", "321125478587", "05.08.2022", "08.500 kr.","100.000 kr", "02.11.2023", "Egersund"],
		  [ "12" ,"127854529123", "321157785467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "elitesport"],
		  [ "13" ,"524453577423", "5785231235748", "01.03.2021", "21.500 kr.","120.000 kr", "02.01.2022", "felduris"],
		  [ "14" ,"587544524545", "7785875577557", "08.10.2020", "240.900 kr.","520.000 kr", "05.12.2023", "gjafahus"],
		  [ "15" ,"123456789123", "3211231235467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "gjafakort"],
		  [ "16" ,"123576789123", "3211751235467", "22.08.2020", "25.500 kr.","100.000 kr", "14.10.2022", "dansportis"],
		  [ "17" ,"12858755586", "54185781855445", "30.08.2021", "30.600 kr.","100.000 kr", "01.08.2022", "details"],
		  [ "18" ,"123458549123", "3211254555467", "05.08.2022", "08.500 kr.","100.000 kr", "02.11.2023", "Egersund"],
		  [ "19" ,"127854789123", "321157785467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "elitesport"],
		  [ "20" ,"524455677423", "5785231235748", "01.03.2021", "21.500 kr.","120.000 kr", "02.01.2022", "felduris"],
		  [ "21" ,"587542375456", "7854275775574", "04.10.2020", "250.900 kr.","200.000 kr", "05.12.2023", "gjafahus"],
		  [ "22" ,"123456789123", "3211231235467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "gjafakort"],
		  [ "23" ,"123576789123", "3211751235467", "22.08.2020", "25.500 kr.","100.000 kr", "14.10.2022", "dansportis"],
		  [ "24" ,"128587588586", "541857817857", "30.08.2021", "30.600 kr.","100.000 kr", "01.08.2022", "details"],
		  [ "25" ,"123458557723", "321125478587", "05.08.2022", "08.500 kr.","100.000 kr", "02.11.2023", "Egersund"],
		  [ "26" ,"127854529123", "321157785467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "elitesport"],
		  [ "27" ,"524453577423", "5785268865748", "01.03.2021", "21.500 kr.","120.000 kr", "02.01.2022", "felduris"],
		  [ "28" ,"56868524545", "7785875577557", "08.10.2020", "240.900 kr.","520.000 kr", "05.12.2023", "gjafahus"],
		  [ "29" ,"123456789123", "3211286885467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "gjafakort"],
		  [ "30" ,"123575558823", "3211755555467", "22.08.2020", "25.500 kr.","100.000 kr", "14.10.2022", "dansportis"],
		  [ "31" ,"12858755555", "54185551855445", "30.08.2021", "30.600 kr.","100.000 kr", "01.08.2022", "details"],
		  [ "32" ,"123458549123", "3211254555467", "05.08.2022", "08.500 kr.","100.000 kr", "02.11.2023", "Egersund"],
		  [ "33" ,"125255575252", "3211525555467", "28.02.2021", "28.500 kr.","100.000 kr", "25.12.2022", "elitesport"],
		  [ "34" ,"524455677423", "5785231235748", "01.03.2021", "21.500 kr.","120.000 kr", "02.01.2022", "felduris"],
		  [ "35" ,"587585255456", "7854588875574", "04.10.2020", "250.900 kr.","200.000 kr", "05.12.2023", "gjafahus"],
		  [ "36" ,"123456789123", "3211231235467", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "gjafakort"],
		  [ "37" ,"123576785253", "327554255467", "22.08.2020", "25.500 kr.","100.000 kr", "14.10.2022", "Jafnlaunastof"],
		  [ "38" ,"128587588586", "541857817857", "30.08.2021", "30.600 kr.","100.000 kr", "01.08.2022", "details"],
		  [ "39" ,"123455635535", "321155245587", "05.08.2022", "08.500 kr.","100.000 kr", "02.11.2023", "integrum"],
		  [ "40" ,"12785455223", "3211555555567", "25.07.2020", "23.500 kr.","50.000 kr", "25.12.2022", "elitesport"],
		  [ "41" ,"524453577423", "5785231235748", "01.03.2021", "54.500 kr.","180.000 kr", "02.01.2025", "s4s"],
		  [ "42" ,"585245544545", "774555577557", "02.10.2021", "80.900 kr.","90.000 kr", "09.12.2024", "Gjafakort"],			  

          ];
		  var dataSet9= [
		  [ "01" ,"20.05.2022", "02.06.2022", "16.07.2022", "05.10.2022","30.12.2022"],			  
		  [ "02" ,"28.05.2022", "02.06.2022", "16.07.2022", "05.10.2022","30.12.2022"],			  
		  [ "03" ,"25.05.2022", "02.06.2022", "16.07.2022", "05.10.2022","30.12.2022"],			  
		  [ "04" ,"02.05.2022", "02.06.2022", "16.07.2022", "05.10.2022","30.12.2022"],			  
		  [ "05" ,"05.05.2022", "02.06.2022", "16.07.2022", "05.10.2022","30.12.2022"]		  

          ];		  
		  
          var dataSet5 = [
              [ "101" ," <img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "Low Rider","25.03.2020", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "102" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Garrett Winters", "Ingrid", "2011/07/25",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "103" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Harry", "White Widow", "2011/02/2",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              ["104" , "<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Jhon", "Low Rider", "2011/11/03", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "105" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Henrry", "Super Skunk", "2012/07/25",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "106" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Moris", "Low Rider", "2014/02/25", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "107" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'> Jenny", "Super Skunk", "2014/02/25","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
              [ "108" , "<img src='assets/img/dashboard/rakhan-potik-1.jpg' style='width:50px; height:30px;'>Bella", "White Widow", "2016/08/15", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              ["109" , "<img src='assets/img/dashboard/rakhan-potik-2.jpg' style='width:50px; height:30px;'> Haris","Ingrid", "2017/10/05", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "110" , "<img src='assets/img/dashboard/rakhan-potik-3.jpg' style='width:50px; height:30px;'> Anny", "Low Rider", "2020/05/03", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "111" ,"<img src='assets/img/dashboard/rakhan-potik-4.jpg' style='width:50px; height:30px;'> Tiger Nixon",  "Low Rider","25.03.2020", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "112" , "<img src='assets/img/dashboard/rakhan-potik-5.jpg' style='width:50px; height:30px;'> Garrett Winters", "Ingrid", "2011/07/25","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ],
              [ "113" , "<img src='assets/img/dashboard/rakhan-potik-7.jpg' style='width:50px; height:30px;'> Harry", "White Widow", "2011/02/2", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
              ["114" , "<img src='assets/img/dashboard/rakhan-potik-8.jpg' style='width:50px; height:30px;'>Jhon", "Low Rider", "2011/11/03", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
              [ "115" , "<img src='assets/img/dashboard/rakhan-potik-9.jpg' style='width:50px; height:30px;'> Henrry","Super Skunk", "2012/07/25","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ]
            ];
            var dataSet6 = [
                [ "101" ," <img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider","Defective Product","25.03.2020", "25.03.2020", "25.03.2020", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "102" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Ingrid","Late Delivery", "25.03.2020", "25.03.2020", "2011/07/25",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "103" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> White Widow","Damaged Item","25.03.2020", "25.03.2020",  "2011/02/2",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                ["104" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Low Rider", "Wrong Product","25.03.2020", "25.03.2020", "2011/11/03", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "105" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Super Skunk","Defective Product","25.03.2020", "25.03.2020",  "2012/07/25",  "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "106" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Low Rider","Wrong Product","25.03.2020", "25.03.2020",  "2014/02/25", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "107" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'> Super Skunk","Late Delivery", "25.03.2020", "25.03.2020", "2014/02/25","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
                [ "108" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>White Widow","Damaged Item", "25.03.2020", "25.03.2020", "2016/08/15", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                ["109" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'> Ingrid","Defective Product", "25.03.2020", "25.03.2020", "2017/10/05", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "110" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'>Low Rider","Wrong Product", "25.03.2020", "25.03.2020", "2020/05/03", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "111" ,"<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'> Low Rider","Late Delivery","25.03.2020", "25.03.2020", "25.03.2020", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "112" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'>Ingrid", "Defective Product","25.03.2020", "25.03.2020", "2011/07/25","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ],
                [ "113" , "<img src='assets/img/dashboard/product-1.jpg' style='width:50px; height:30px;'>White Widow", "Damaged Item","25.03.2020", "25.03.2020", "2011/02/2", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>" ],
                ["114" , "<img src='assets/img/dashboard/product-2.jpg' style='width:50px; height:30px;'>Low Rider", "Defective Product","25.03.2020", "25.03.2020", "2011/11/03", "<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"],
                [ "115" , "<img src='assets/img/dashboard/product-3.jpg' style='width:50px; height:30px;'>Super Skunk","Late Delivery", "25.03.2020", "25.03.2020", "2012/07/25","<a href='#'><i class='far fa-trash-alt ms-text-danger ml-3'></i></a>"  ]
              ];

  var tableOne = $('#data-table-1').DataTable( {
    data: dataSet,
    columns: [
      { title: "Id" },
      { title: "Name of employee" },
      { title: "ID of partner" },
      { title: "Email" },
      { title: "Contact person phone " },
	  { title: "Member Since" },

      { title: "Action" }
    ],
  });
  var tableTwo = $('#data-table-2').DataTable( {
    data: dataSet3,
    columns: [
      { title: "Id" },
      { title: "User Name" },
      { title: "Email Id" },

      { title: "Order Id" },
      { title: "Product Name" },
          { title: "Price" },
      { title: "Date" }
    ],
  });
  var tableThree = $('#data-table-3').DataTable( {
    data: dataSet,
    columns: [
      { title: "Id" },
      { title: "Customer Name" },
      { title: "Email Id" },
      { title: "Product Id" },
      { title: "Product Name" },
      { title: "Date" },
    

    ],

  });

  var tableFour = $('#data-table-4').DataTable( {
    data: dataSet6,
    columns: [
      { title: "Id" },
      { title: "Product Name" },
      { title: "Return Issue" },
      { title: "Return Date" },
      { title: "Dispatch Date" },
      { title: "Date" },
      { title:"Action"}

    ],
  });
  var tableFive = $('#data-table-5').DataTable( {
    data: dataSet5,
    columns: [
      { title: "Id" },
      { title: "Customer Name" },

      { title: "Product Name" },
      { title: "Cancel Date" },
      { title: "Action" }
    ],
  });
  var tableThree = $('#data-table-6').DataTable( {
    data: dataSet1,
    columns: [
      { title: "Id" },
      { title: "Name of partner" },
      { title: "ID of partner" },
      { title: "Contact person" },
      { title: "Contact person phone " },
	  { title: "Member Since" },

      { title: "Action" }

    ],

  });

  var tableThree = $('#data-table-7').DataTable( {
    data: dataSet2,
    columns: [
      { title: "Transaction ID" },
      { title: "Gift Card holder" },
      { title: "Date of usage" },
      { title: "Price" }

    ],

  });
  var tableThree = $('#data-table-8').DataTable( {
    data: dataSet4,
    columns: [
      { title: "Id" },
      { title: "Card number" },
      { title: "Activation number" },
      { title: "Activation date" },
      { title: "Balance" },
	  { title: "Initial balance" },
	  { title: "Expiry date" },

      { title: "Type" }

    ],

  });
  
  var tableThree = $('#data-table-9').DataTable( {
    data: dataSet9,
    columns: [
      { title: "Id" },
      { title: "Mál stofnað" },
      { title: "Tjónsstilkynning send" },
      { title: "Lögregluskýrsla barst" },
      { title: "Áverkavottorð sent" },
	  { title: "Áverkavottorð sent" }

    ],

  });  
})(jQuery);
