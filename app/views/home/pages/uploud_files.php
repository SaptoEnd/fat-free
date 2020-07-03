/*
Theme Name: Agronomics Pro
Theme URI: https://gracethemes.com/themes/organic-farm-wordpress-theme/
Author: Grace Themes
Author URI: https://www.gracethemes.com/
Description: Agronimics is a creative and unbounded, sophisticated and modern, colorful and youthful, beautiful and outspoken, highly customizable and readily responsive agriculture WordPress theme. This theme help you create an impressive website for agriculture, food, gardening, landscaping, lawn, organic and health stores. This amazingly flexible, fast loading and multipurpose theme well suited for fulfilling the needs of all kind of websites. It can be used to create a website for corporate, business, portfolio, product catalog, personal blog and services web pages. You can also use it for construction, real estate, traveling, tourism websites, eCommerce ventures, hotel projects and more. Demo: http://gracethemesdemo.com/agronomics/

Version: pro 1.0
License: GNU General Public License version 2
License URI: license.txt
Text Domain: agronomics-pro
Tags:one-column,two-columns,left-sidebar,right-sidebar,custom-background,custom-header,custom-menu,featured-images,theme-options,full-width-template,sticky-post,threaded-comments,translation-ready

Agronomics Pro WordPress Theme has been created by Grace Themes(gracethemes.com), 2019
Agronomics Pro WordPress Theme is released under the terms of GNU GPL
*/
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,600,900');
@import url('https://fonts.googleapis.com/css?family=Assistant:400,600,700');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700,800');
*{ margin:0; padding:0; outline:none;}
*, *:before, *:after{
margin: 0;
padding: 0;
-webkit-box-sizing: border-box;
-moz-box-sizing:border-box;
box-sizing: border-box;
}

body{ margin:0; padding:0; -ms-word-wrap:break-word; word-wrap:break-word; line-height:24px; margin:0; padding:0;  font-size:16px; font-family: 'Assistant', sans-serif; background-color:#efefef; color:#5c5c5c;
}
.siteinnerpage{

}
img{ margin:0; padding:0; border:none; max-width:100%;}
section img, img{max-width:100%; height:auto;}
h1,h2,h3,h4,h5,h6{ margin:0 0 20px; padding:0; line-height:1; font-weight:400; }
h1{ font-size:36px; }
h2{ font-size:30px;}
h3{ font-size:18px; }
h4{ font-size:22px;}
h5{ font-size:20px; }
h6{ font-size:14px;}
.left{float:left;}
.right{float:right;}
blockquote{ background:url(images/icon_quote.png) no-repeat 20px 22px; padding:15px 15px 15px 60px !important; font-style:italic; color:#888; line-height:1.5;}
.hr{border-bottom:1px solid #333; height:15px; clear:both;}
p{ margin:0; padding:0;}
a{ text-decoration:none; outline:none;}
a:hover{ text-decoration:none !important; outline:none !important;}
ul{ list-style:none; margin:0; padding:0;}
article ul, article ol{ margin:0 0 15px 15px;}
article ul li{ list-style: disc;}
.custom-height{ min-height:20px;}
.clear{ clear:both;}
.textwidget select{ width:100%;}
table{ width:100%}
iframe{ width:100%;}
.middle-align{ margin:0 auto; padding:0;}
.wp-caption{ margin:0; padding:0; font-size:13px; max-width:100% !important;}
.wp-caption-text{ margin:0; padding:0;}
.sticky{ margin:0; padding:0;}
.gallery-caption{ margin:0; padding:0;}
.alignleft, img.alignleft {display: inline; float: left; margin-right:25px; margin-top:4px; margin-bottom:6px; padding:0; height:auto;}
.alignright, img.alignright { display: inline; float: right; margin-left:25px; height:auto;}
.aligncenter, img.aligncenter { clear: both; display: block; margin-left: auto; margin-right: auto; margin-top:0;  height:auto;}
.comments-area{ margin-bottom:15px;}
.comment-list .comment-content ul { list-style:none; margin-left:15px;}
.comment-list .comment-content ul li{margin:5px;}
.main-container ol{list-style-position:outside; margin-left:20px;}
.main-container ol li{margin:5px 0;}
.lastcols{ margin-right:0 !important;}
.last{ margin-right:0 !important;}
.space40{ height:40px; clear:both;}
.subtitle{ text-align:left; color:#fff; margin-bottom:40px; text-align:center; padding:0 110px;}
.toggleMenu{display:none;}

/* = Default search form css
----------------------------------------------------- */
.searchbox{position:relative; min-width:35px; width:0%; height:40px; float:right; overflow:hidden;padding-left:20px; -webkit-transition: width 0.3s;    -moz-transition: width 0.3s; -ms-transition: width 0.3s; -o-transition: width 0.3s; transition: width 0.3s;}
.searchbox-input{top:0; right:0; border:0;outline:0;background:#ece8e8;width:100%;height:40px;margin:0;padding:0px 55px 0px 20px;font-size:13px;color:#7f7f7f;}
.searchbox-input::-webkit-input-placeholder{color:#7f7f7f;}
.searchbox-input:-moz-placeholder{color:#7f7f7f;}
.searchbox-input::-moz-placeholder{color:#7f7f7f;}
.searchbox-input:-ms-input-placeholder{color:#7f7f7f;}
.searchbox-icon, .searchbox-submit{width:35px;height:40px;display:block;position:absolute;top:0;font-size:22px;right:0;padding:0 !important;margin:0 !important;border:0 !important;outline:0;line-height:40px;text-align:center;cursor:pointer;color:#dcddd8;background:url(images/search-icon.png) no-repeat center center #34c6f6;}
.searchbox-open{ width:40%;}

/* = Default Button css
----------------------------------------------------- */
.custombtn{ margin-top:30px;}
.btnstyle2{ font-size:14px; border:1px solid #959595; color:#959595 ; padding:10px 40px; display:inline-block;  border-radius:25px; font-weight:600;}
.btnstyle2:hover{ border-color:#7abf17; color:#7abf17; }

.btnstyle1 { font-size:14px; margin: 10px 10px 10px 0; padding:12px 40px; text-align: center; background-color:#7abf17; color: #fff; border-radius:25px; display: inline-block; font-weight:600;}
.btnstyle1:hover {background-color: #303030; color:#fff;}

.button{ font-size:14px; background-color:#fff; color:#111; font-weight:400; padding:11px 30px; display:inline-block; border-radius:25px; }
.button:hover{ color:#fff; }

/*Main style*/
body.home section{ padding:80px 0; position:relative;}
h2.section_title{ font-weight:800; font-size:38px; margin-bottom:50px; position:relative; text-align:center; padding-bottom:25px; }
h2.section_title span{ color:#7abf17;}
h2.section_title::after {
border-bottom: 2px solid #333740;
bottom: 0;
content: "";
left: 0;
right:0;
margin: auto;
position: absolute;
width:50px;
}

.sitewrapper .header.fixed{ width:100%;}
.boxlayout{ width:1210px; margin:0 auto; box-shadow:0 5px 10px #000; position:relative; overflow:hidden; }
.boxlayout .site-header.fixed{ overflow:hidden;}
.boxlayout .footer{ padding:60px 20px 10px;}
.boxlayout .site-header.fixed{ width:auto;}
.header.fixed .header-top{ display:none;}
.boxlayout #teampanel .owl-prev{left:-2%;}
.boxlayout #teampanel .owl-next{right:-2%;}

/*Header Info Bar CSS*/

.infobox{ display:inline-block; margin:0 0 0 5%; text-align:right; }
.infobox span{ float:right;}
.infobox span b{ display:block; text-align:left; font-weight:bold; }
.infobox i{ float:left; margin:3px 10px 0 0; width:40px; height:40px; line-height:36px; text-align:center; color:#7abf17; border:1px solid #7abf17; border-radius:50%; font-size:16px;}
.infobox .addbx{ font-weight:400;}

.sitewrapper {position:relative;}
.headerinfo { font:600 14px/22px; padding:10px 0; }
#slider{ width:100%; margin:0; padding:0; position:relative;}
.logo {
float: left;
padding: 10px 0;
width: 22%;
position: relative;
text-align: left;
}
.logo h1 {
margin: 0;
}
.logo a {
color: #fff;
}
.logo::after {
left: -99999px;
position: absolute;
width: 99999px;
background-color: white;
}
.logo::before {
bottom: 0;
content: "";
background-color: white;

}
.logo, .logo::after, .logo::before {
background-color: white;
height:54px; /*EDIT SAPTO*/
}
/*EDIT SAPTO*/
div, a img{
margin-top:-4px !important;
}
/*SELESAI*/
.logo::before {
position: absolute;
right: -21px;
top: 0;
transform: skew(24deg);
width: 45px;
display: block;
background-color: white;
}
.logo::after {
bottom: 0;
content: "";
top: 0;
background-color: white;
}

.tagline{ font-size:13px; color:#828181; display:block; letter-spacing:1px;}
.header_contactbx{ width:70%; float:right; text-align:right; padding:13px 0 5px;}
.header-top{ color:#fff; border-bottom:1px solid #eeeeee; }



/* = social icons css
-------------------------------------------------------------- */
.site-header .social-icons{ position: absolute; right:17%; top:30%;}
.social-icons { display:inline-block;}
.social-icons a{ width:35px; height:30px; line-height:25px; text-align:center;  vertical-align:middle; display:inline-block; padding:0; transition:0.6s; -moz-transition:0.6s; -webkit-transition:0.6s; -o-transition:0.6s; font-size:16px; color:#888888; }
.social-icons a:hover{ color:#fff; }

a.booknow{ padding:10px 30px; line-height:normal;position:absolute; right:0; top:20%; color:#ffffff; background:#7abf17; font-weight:bold; -webkit-border-radius: 30px; -moz-border-radius: 30px; border-radius: 30px; }

.social-icons br{ display:none;}
.container{ width:1170px; margin:0 auto; position:relative;}

.site-header.fixed{ position: fixed; top:0; z-index:999999; width:100%;}
.site-header.fixed .sitenav ul li ul li a{ padding-top:7px; padding-bottom:7px; }
.site-header.fixed .header-top{ display:none;}
.site-header.fixed .header-mainmenu{ margin:0 auto; width:100%; box-shadow: 0 1px 3px rgba(95, 95, 95, 0.1); }
.site-header{width:100%; z-index:9999; box-sizing:border-box; position: relative; }

.header-mainmenu{ background-color:#fff; position:relative; padding:0; }

/*header menu css*/
.toggle{display: block;}
.toggle a{width:auto; color:#ffffff; background:url(images/mobilenav.png) no-repeat right center #3e3e3e; padding:10px 25px; margin-top:5px; font-size:16px; text-align:left;}
.toggle a:hover{color:#ffffff !important;}

.sitenav{ padding:0; position:relative; z-index:9999; display:inline-block; }
.sitenav ul {margin:0; padding:0; font-family:'Roboto', sans-serif; font-size:16px; font-weight:400; }
.sitenav ul li{display:inline-block; position:relative;}
.sitenav ul li:last-child{border-right:none;}
.sitenav ul li a{ padding:20px 15px; display:block; text-align:center;}
.sitenav ul li ul li{ display:block; position:relative; float:none; top:1px; border-bottom:1px solid #007849;}
.sitenav ul li ul li a{ display:block; padding-top:7px; padding-bottom:7px; position:relative; top:1px; text-align:left;}
.sitenav ul li ul{ display:none; z-index:9999999; position:relative;}
.sitenav ul li:hover > ul{ display:block; width:200px; position:absolute; left:0; text-align:left; }
.sitenav ul li:hover ul li ul{display:none; position:relative;}
.sitenav ul li:hover ul li:hover > ul{display:block; position:absolute; left:200px; top:0;}

/* = Header style 2 css
-------------------------------------------------------------- */
.hdrstyle2{ position: absolute; top:0px ; } /* defaut top= 30px */
.hdrstyle2 .logo{ background-color:white; }

.hdrstyle2 .logo h1{ font-weight:600;}
.hdrstyle2 .header-top .left{ padding-left:0; width:80%;}
.hdrstyle2 .sitenav{ float:right;}
.hdrstyle2 .sitenav ul li a{ padding:25px 25px;}
.hdrstyle2 .sitenav ul li ul li a{ padding-top:7px; padding-bottom:7px; background-color: #037584;
color: white;}

.site-header.hdrstyle2.fixed .sitenav ul li a{ padding:25px 15px;}
.site-header.hdrstyle2.fixed .sitenav ul li ul li a{ padding-top:7px; padding-bottom:7px;}


/* = Header style 3 css
-------------------------------------------------------------- */
.hdrstyle3{ position:relative;}
.hdrstyle3 .header-mainmenu, .hdrstyle3 .sitenav ul li:hover > ul{ background-color:#fff;}
.hdrstyle3 .sitenav ul li ul li{ border-color:#e5e4e4;}
.hdrstyle3 .header-top{ background-color:#7abf17; padding:10px 0;}
.hdrstyle3 .social-icons{ float:left; width:25%; margin-top:18px;}
.hdrstyle3 .logocenter{ width:50%; float: left; text-align:center; padding:10px 0; }
.hdrstyle3 .logocenter h1{ font-weight:600; color:#fff; margin:0;}
.hdrstyle3 a.booknow{ float:right; position:relative; background-color:#fff !important; color:#111; top:10px; transform:none; }
.hdrstyle3 .sitenav{ display:inherit; text-align:center;}
.hdrstyle3 .sitenav ul li a{ color:#111111;}
.hdrstyle3 .header-top .left{ padding-left:0;}
.hdrstyle3 .onelinemenu{ background-color:rgba(0,0,0,0.4); text-align:center; position:absolute; width:100%;}
.site-header.hdrstyle3.fixed .logocenter{ padding:20px 0;}
.site-header.hdrstyle3.fixed .logocenter{ display:none;}



/* = innerbanner css
-------------------------------------------------------------- */

.innerbanner{ text-align:center; }
.innerbanner img{ position: relative; background-size:cover; width:100%; height:150px; display:block;}

/* = Features page services on slider CSS
-------------------------------------------------------------- */
.pagefeaturecolumn{ position:relative;  border-radius:0px;  margin:-100px auto 0 auto; z-index:9999;}
.features_column{ width:33.333%; margin:0; float:left; text-align:center; padding:30px; }
.features_column .imagebox{ width:54px; height:50px; overflow:hidden; margin:0 auto 20px auto; transform: scale(1); transition: all 0.35s ease-in-out 0s;}
.features_column .imagebox img{ height:auto; min-height:50px; }
.features_column h3{ font-size:18px; margin-bottom:20px; font-weight:600;}
.features_column h3 a{ color:#353535;}
.features_column p{ margin-bottom:0;}
.features_column:hover{ background-color:#7abf17; color:#fff;}
.features_column:hover h3 a{ color:#fff;}
.features_column.rdbx1:hover{
-webkit-border-top-left-radius: 200px;
-webkit-border-bottom-left-radius: 200px;
-moz-border-radius-topleft: 200px;
-moz-border-radius-bottomleft: 200px;
border-top-left-radius: 15px;
border-bottom-left-radius: 15px;
}

.features_column.two_column{ width:50%;}
.features_column.one_column{ width:100%; display:inline-block; float:none;}

.features_column.one_column.rdbx1:hover,
.features_column.two_column.rdbx2:hover,
.features_column.rdbx3:hover{
-webkit-border-top-right-radius: 200px;
-webkit-border-bottom-right-radius: 200px;
-moz-border-radius-topright: 200px;
-moz-border-radius-bottomright: 200px;
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}



/* = Welcome Section css
-------------------------------------------------------------- */
#agro_welcome_section{ position:relative; background-color:#ffff; padding-top:100px; margin-top:-60px; }
.welcome_imgcolumn{ width:42%; margin:0 0 0 0; float:right; box-shadow: 15px 15px 0 0 #7abf17;}
.welcome_imgcolumn img{ width:100%; display:block; box-shadow: 5px 5px 0 0 #fff; }
.welcome_contentcolumn h3{ font-size:33px; color:#111; font-weight:800; margin-bottom:40px;}
.welcome_contentcolumn{ width:52%; margin:0; padding:0 0 10px; float:left; }
.welcome_contentcolumn p{ margin-bottom:35px; line-height:28px;}

/* = Our Services Section css
-------------------------------------------------------------- */
#servicespanel{ position:relative;}
.services_page_box{ background-color:#fff; width:48.5%; margin:0 3% 30px 0; padding:30px; float:left; box-sizing:border-box; }
.services_page_box .thumbbx{ width:40%; height:190px; float:left; overflow:hidden; margin:0 3% 0 0; position:relative; }
.services_page_box .thumbbx img{ width:100%; height:auto; min-height:190px; display:block;  backface-visibility: hidden; transition: opacity 1s ease 0s, transform 2s ease 0s; }
.services_page_box h3{ font-size:20px; margin-bottom:20px; }
.services_page_box h3 a{ color:#111;}
.services_page_box p{ margin-bottom:30px;}
.services_page_box .pagemore{ margin:0; padding:8px 25px; text-align: center; color: #7abf17; display: inline-block; border:2px solid #7abf17; border-radius:2px;  }
.services_page_box:hover .pagemore{background-color: #7abf17; color:#fff;}
.services_page_box:hover h3 a {color:#7abf17;}
.services_page_box:hover .thumbbx img { transform: rotate(3deg) scale(1.2, 1.2); opacity:0.7;}
.last_column{ margin-right:0 !important;}

/* = Section 1 Gardening & Agriculture
---------------------------------------------------- */
#section1{ position:relative; }
h3.content_title{ font-size:33px; color:#353535; font-weight:800; margin:0 0 40px 0; position:relative; padding-bottom:20px;}
h3.content_title::after {
border-bottom: 2px solid #353535;
bottom: 0;
content: "";
left: 0;
position: absolute;
width:50px;
}



.agro_services{position:relative; width:45%; display:inline-block; margin:0 8% 0 0; clear:both; transition-duration: 0.5s; -moz-transition-duration: 0.5s; -ms-transition-duration: 0.5s; -o-transition-duration: 0.5s; -webkit-transition-duration: 0.5s;}
.agro_services .icon-thumb{ width:60px; height:60px; line-height:60px; display:block; margin:40px 0 25px 0; }
.agro_services h6{ font-size:18px; margin:0 0 15px 0; font-weight:700; color:#353535; }
.agro_services p{margin:0}
.agro_services.last{ margin-right:0;}
.agro-imagebx{ width:90%; height:590px; overflow:hidden; -webkit-box-shadow:0px 0px 0px 0px #7abf17 ,60px 0px 0px -30px #7abf17 ;
-moz-box-shadow:0px 0px 0px 0px #7abf17 ,60px 0px 0px -30px #7abf17 ;
box-shadow:0px 0px 0px 0px #7abf17 ,60px 0px 0px -30px #7abf17 ;}
.agro-imagebx img{ width:100%; height:auto; display:block; }

/* = Section 2 Gardner Need & Landscaping
----------------------------------------------------- */
#section2{ position:relative; color:#fff; font-size:20px; padding-bottom:40px;}
#section2 h3.content_title{ color:#fff; }
#section2 h3.content_title span{ color:#fff;}
#section2 a.button{ background-color:#fff; color:#111; padding:12px 35px; font-size:16px; font-weight:bold;}
#section2 h6{ color:#fff; font-size:16px; margin:40px 0;}

#section2::after {
left: -99999px;
position: absolute;
width: 99999px;
}
#section2::before {
bottom: 0;
content: "";
}
#section2, #section2::after, #section2::before {
background-color: #71b002;
}
#section2::before {
position: absolute;
left: -200px;
top: 0;
transform: skew(24deg);
display: block;
width:70%;
}

/* = Section 3 Gardening Services CSS
-------------------------------------------------------------- */
.gardening_services{position:relative;  margin:30px 0 0 0; }
.gardening_services i{ background-color:#7abf17; color:#fff; font-size:22px; float:left; width:60px; height:60px; line-height:60px; margin:0 20px 0 0; text-align:center; border-radius:50%; }
.gardening_services h6{ font-size:18px; margin:0 0 15px 0; font-weight:700; color:#353535; }
.gardening_services p{margin:0}

.gardening-imagebox{ width:90%; height:477px; overflow:hidden;}
.gardening-imagebox img{ width:100%; height:auto; display:block; }

.videobox{ position:relative; text-align:center; width:340px; height:290px; display:block; overflow:hidden; box-shadow:1px 0 10px 0 #888; margin:-260px 0 0 0; float:right; border:8px solid #fff;}
.videobox .playbtn{ background:url(images/playerbtn.png) no-repeat center top; position: absolute; width:48px; height:48px;  left:42%; top:42%;}


/* = Section 4 Latesr news section CSS
-------------------------------------------------------------- */
.news-box{ width:48.99%; float:left; margin:0 2% 25px 0; position:relative; text-align:left; background-color:#fff;}
.news-box .news-thumb{ float:right; width:50%; height:300px; overflow:hidden; box-sizing:border-box; position:relative; background-color:#7abf17;}
.news-box .news-thumb img{ display:block; width:100%; height: auto; min-height:300px; display:block; }
.news-box:hover img { opacity:0.3;}
.newsimg_shape{ width:0;height:0;border-top:300px solid #fff;border-right:50px solid transparent;position:absolute;top:0;left:0;z-index:3}
.news-box h5{ font-size:17px; margin:5px 0 20px 0; line-height:22px; }
.news-box h5 a{ color:#303030; }
.news-box .newsdesc{ float:left; width:50%; padding:30px 10px 30px 30px;}
.news-box .newsdesc p{ margin-bottom:25px;}
.news-box .postdate, .news-box .postauthor{ color:#c3c2c2; display:inline-block; text-align:left; text-transform:uppercase; font-size:13px;}
.news-box .postdate a, .news-box .postauthor a{ color:#c3c2c2; }
.news-box .catbox{ color:#7abf17; float:right; text-align:right;}
.news-box:hover h5 a{ color:#7abf17;}
.news-box.last { border-bottom:0 ; margin:0 ; padding:0 ;}
.news-box .commontbutton{ margin:0; padding:8px 25px; text-align: center; color: #7abf17; display: inline-block; border:2px solid #7abf17; border-radius:2px;  }
.news-box:hover .commontbutton{background-color: #7abf17; color:#fff;}

/* Shine */
.news-box figure {
position: relative;
}
.news-box figure::before {
position: absolute;
top: 0;
left: -75%;
z-index: 2;
display: block;
content: '';
width: 50%;
height: 100%;
background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
-webkit-transform: skewX(-25deg);
transform: skewX(-25deg);
}
.news-box:hover figure::before {
-webkit-animation: shine .75s;
animation: shine .75s;
}
@-webkit-keyframes shine {
100% {
left: 125%;
}
}
@keyframes shine {
100% {
left: 125%;
}
}

/* = Section 5 Counter CSS
-------------------------------------------------------------- */
#section5 h3.content_title{ font-weight:600;}
#section5 h3.content_title span, #section2 h3.content_title span{ color:#353535;}
.mycounterbox{ background-color:#f4f3f3; width:46%; padding:40px 5px; color:#111; float:left; margin:0 0 4% 4%; text-align:center; box-sizing:border-box; border-radius:5px; }
.mycounterbox .counter{ font-family:'Roboto', sans-serif; display:block; font-size:50px; color:#111; line-height:50px; font-weight:600; margin:0 0 20px 0;}
.mycounterbox h6{ font-size:16px; color:#353535; margin:0; font-weight:600; }

/* = Section 6 Teammember CSS
-------------------------------------------------------------- */
.teammember-list{ width:100%; float:left; margin:0 3% 0 0; position:relative; box-sizing:border-box; text-align:center; }
.teammember-list:hover{ cursor:pointer;}
.teammember-list .thumnailbx{ height:490px; overflow:hidden;}
.teammember-list img{ vertical-align:middle; width:100%; height:auto;}
.teammember-list span.title{ font-weight:800; color:#fff; font-size:30px; margin-bottom:10px; position:relative; display:block;}
.teammember-list cite{ display:block; font-style:normal; margin:15px 0 5px 0; color:#fff; }
.titledesbox{ text-align:center; padding:10px 0; overflow:visible; }
.member-social-icon{ text-align:center; margin-bottom:20px;}
.member-social-icon a{  margin:0 10px; text-align:center; display:inline-block; color:#fff; width:25px; height:25px; line-height:25px;}
.member-social-icon a:hover{ color:#111; }
.team_content_fixer{ background-color:rgba(104,56,180, 0.8); position:absolute; bottom:0; width:100%; padding:30px; color:#fff; }
.team_content_btn{ display:none;}
.teammember-list:hover .team_content_btn{ display:block;}
.teammember-list .team_content_btn p{ margin-bottom:20px;}

.teamreadmore{ background-color:#fff; color:#111; font-weight:600; padding:10px 30px; display:inline-block; border-radius:25px; font-size:14px; }
.teamreadmore:hover{ color:#111; }


#teampanel .owl-prev, #teampanel .owl-next{ position: absolute; width:40px; height:40px; font-size:0; top:42%; border-radius:4px;}
#teampanel .owl-prev{ left:-4%; }
#teampanel .owl-next{ right:-4%;}
#teampanel .owl-prev:hover, #teampanel .owl-next:hover{ background-color:#7abf17;}


/* = Section7 Counter
-------------------------------------------------------------- */
#section7{ text-align:center; }


/* = Testimonials CSS
-------------------------------------------------------------- */
#section8 h2.section_title{ text-align:left; color:#fff; margin-bottom:30px;}
#section8 h2.section_title::after {  border-bottom: 2px solid #fff; right:auto; left:27%;}

#clienttestiminials{ position:relative; }
#clienttestiminials h6{ margin:0px; font-size:20px; color:#fff; position:relative; text-align:right;}
#clienttestiminials h6 a{color:#ffffff;}
#clienttestiminials cite{ color:#fff; display:block; margin-top:5px; text-align:right; font-style:normal;}
#clienttestiminials .tmthumb{ float:left; margin:0 50px 0 0; width:260px; height:280px;  overflow:hidden; border:5px solid #fff; border-radius:5px; }
#clienttestiminials .tmthumb img{ width:100%; height:auto; min-height:280px; }
#clienttestiminials .item{ width:100%; margin:0 auto; position:relative; }
#clienttestiminials .item p{ background:url(images/icon_quote.png) no-repeat left 5px; margin-bottom:35px; padding:0 0 0 45px;font-size:18px;font-style:italic; line-height:26px;}


/* = Homepage Contact CSS
-------------------------------------------------------------- */
#section9, #section7{ padding-bottom:30px;}
.contactpanel .m-add-info{margin:0 0 10px 0;}
.contactpanel .m-add-info p{margin:0;}
.contactpanel .m-add-info i{ float:left; font-size:18px; margin:5px 0 0 0;}
.contactpanel .m-add-info h5{ display:block; font-weight:600; font-size:15px; margin:0 0 5px 0}
.contactpanel .m-addbox{ padding-left:35px; font-size:18px;}

.contactpanel .wpcf7{ background-color:#fff; border:10px solid #f7f7f9; box-shadow:0 0 1px #9c9c9c; padding:25px;}
.contactpanel .wpcf7 form input[type="text"],
.contactpanel .wpcf7 form input[type="email"],
.contactpanel .wpcf7 form input[type="tel"],
.contactpanel .wpcf7 form textarea{ background-color:#fff; color:#111; width:100%; border:1px solid #eaeaea;  }
.contactpanel .wpcf7 form input[type="submit"] { width:auto; padding:15px 40px; border-radius:25px; font-weight:600; }


/* = Homepage client logo CSS
-------------------------------------------------------------- */
#clientlogo{ margin:50px 0 0 0; padding:0;}
#clientlogo li{ list-style:none;  display:inline-block; margin:0 25px 20px 0; padding:0; border-radius:5px;}

/* = Page Layout CSS
-------------------------------------------------------------- */
.content-area{ padding:50px 0 30px;}
.site-main{ width:100%; margin:0; padding:50px; float:left;}
.sitefull{ width:100% !important;}
#sidebar{ width:300px; float:right; }
.sidebar-left{ float:left !important;}
.flotRight{ float:right !important;}
/*sidebar css*/
aside.widget{ margin-bottom:30px;}
aside.widget ul{ list-style:disc; }
h3.widget-title{ font-weight:600; padding:0 0 15px; margin:0 0 20px; color:#7abf17; font-size:24px; position:relative;display:none; }

#sidebar #contactform_main input[type=text], #sidebar #contactform_main input[type=email], #sidebar #contactform_main input[type=tel],#sidebar #contactform_main input[type=url], #sidebar #contactform_main textarea{width:90%; }
#sidebar #contactform_main p{ margin-bottom:10px;}
#sidebar ul li{ list-style:none; margin-bottom:2px; padding:7px 10px 7px 25px; background-color:#f5f5f4; -webkit-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out; display:none; }
#sidebar ul li:hover, #sidebar ul li:first-child{border-left:4px solid #7abf17;}
#sidebar ul li a{ color:#3b3b3b; }
#sidebar ul li a:hover{ color:#34c6f6;}
.nosidebar{ float:none !important; margin:0 auto;}

#sidebar .search-form input.search-field{ background-color:#fff; width:80%; padding: 11px 15px; box-sizing:border-box;}
#sidebar .search-form input.search-submit{ background:url(images/search-icon.png) no-repeat center center #f56c6d; padding: 12px 0 12px 0; font-size:0; width:20%; height:41px; float:right;}

.innerpagehdr{ background-color:#fff; margin:-90px 0 50px 0; padding:25px; position:relative; z-index:9; box-shadow:0 0px 8px rgba(0, 0, 0, 0.08);}

.innerpagehdr h1{ margin-bottom:0 !important;}
/* = skill bar css
-------------------------------------------------------------- */
.skillbar {position:relative; display:block; margin-bottom:30px; width:100%; height:30px; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; -webkit-transition:0.4s linear; -moz-transition:0.4s linear; -ms-transition:0.4s linear; -o-transition:0.4s linear; transition:0.4s linear; -webkit-transition-property:width, background-color; -moz-transition-property:width, background-color; -ms-transition-property:width, background-color; -o-transition-property:width, background-color; transition-property:width, background-color;}
.skillbar-title { font-size:16px;color:#6e6d6d;}
.skillbar-title span { /*display:block;*/ color:#6e6d6d; padding:0; height:35px; line-height:35px; text-align:left;}
.skillbar-bar { height:8px; width:0px; background:#65676a;}
.skill-bar-percent { /*position:absolute;*/ right:0; top:0; font-size:15px; height:35px; line-height:35px; color:#6e6d6d; padding-left:15px !important}
.skill { width:46.98%; float:left;}
.skill-bar { margin:60px 0 0 0;}
.skill-bg{ width:100%; background-color:#f6f6f6;}

/* = Contact Form css
-------------------------------------------------------------- */
.wpcf7{ margin:0; padding:0; }
.wpcf7 form{ margin:0; padding:0;}
.wpcf7 form span.last{ float:none !important;}
.wpcf7 form input[type="url"], .wpcf7 form input[type="date"], .wpcf7 form select{ background-color:#f1f1f1; border:1px solid #eed2bb; padding:5px 3px; margin-top:10px; font:13px arial; color:#777777;}
.wpcf7 form input[type="checkbox"], .wpcf7 form input[type="radio"], .wpcf7 form input[type="file"]{ margin-top:10px; padding:0;}
span.wpcf7-list-item{ margin:0 15px 0 0 !important;}
#contactform_main input[type=text], #contactform_main input[type=email], #contactform_main input[type=tel], #contactform_main input[type=url], #contactform_main textarea{width:100%; border:1px solid #E8E8E8; padding:15px; margin:0 0 8px 0;}
#contactform_main textarea{ width:100%; margin-right:0; height:130px;}
#contactform_main span.capcode{ float:left; padding:13px; padding:13px; margin:0 8px 8px 0;}
#contactform_main input[type=submit], .wpcf7 form input[type="submit"] { font:400 20px/24px; text-transform:uppercase; cursor:pointer; border-radius:5px; }
.wpcf7 form input[type="text"], .wpcf7 form input[type="email"], .wpcf7 form input[type="tel"], .wpcf7 form textarea{ border:1px solid #e8e8e8; padding:15px; margin:0 8px 8px 0;  }
.wpcf7 form textarea{ margin-right:0; height:130px;}

/*Reservation form css*/
.wpcf7 form input[type="text"], .wpcf7 form input[type="email"], .wpcf7 form input[type="tel"], .wpcf7 form textarea{ width:90%; background-color:#fff; color:#a0a0a0; padding:10px 15px; }
.wpcf7 form{ margin-bottom:6px;}
.wpcf7 form input[type="submit"] { font:400 20px/24px; text-transform:uppercase; cursor:pointer; width:30%; }

.contact_left{ float:left; width:65%; }
.contact_right{ float:right; width:30%;}
.contact_right h3{ margin-bottom:15px;}
h3.post-title{ margin-bottom:0px; font-weight:600; font-size:20px;}
h3.post-title a{ color:#777777;}
h3.post-title a:hover{ color:#7abf17;}

.blog-post-repeat {  margin-bottom:50px;  }


.blog-post-repeat .postmeta{margin-bottom:0; display:table; font-size:14px;}
p.read-more a{font:600 12px/22px;background-color:#ff6565; color:#fff; text-align:center; padding:5px 15px; display:inline-block; border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px;}
p.read-more a:hover { background-color:#34c6f6;}
.blog-post-repeat .post-thumb img{ margin-bottom:15px; height:auto;}
.single .blog-post-repeat .post-thumb img{ float:left; margin:0 30px 10px 0;}

/*Blog Right Sidebar*/
.blogrightsidebar{ position:relative;}
.blogrightsidebar .post-thumb{  background-color:#7abf17; width:35%; float: left; margin:0 30px 0 0; height:230px; overflow:hidden;}
.blogrightsidebar .post-thumb img{ width:100%; height:auto; min-height:230px;}
.blogrightsidebar .post-thumb:hover img{opacity:0.3;}
.blog-post-repeat .blogfooter{ display:block;}

/*Blog Grid Layout CSS*/
.bloggridlayout{ position:relative; width:100% !important; float:none;}
.bloggridlayout .blog-post-repeat{ background-color:transparent; padding:0; border:0; width:30%; float:left; display:inline-block; margin:0 3% 35px 0; box-shadow:0 2px 5px rgba(0, 0, 0, 0.5);border:1px solid rgba(0, 0, 0, 0.04); vertical-align:top;}
.bloggridlayout .post-thumb{ background-color:#7abf17; width:100%; float: none; margin:0; height:230px; overflow:hidden;}
.bloggridlayout .post-thumb:hover img{opacity:0.3;}
.bloggridlayout .post-thumb img{ width:100%; height:auto;}
.bloggridlayout .blogfooter{ display:block;}
.bloggridlayout .blog-post-repeat .postmeta{ margin-bottom:0;}
.bloggridlayout .entry-header{ padding:20px;}
.bloggridlayout .entry-summary{ padding:0 20px;}
.bloggridlayout h3.post-title a{ color:#555; font-weight:400;}

/*default css*/
.error_msg{padding:10px; background:#ffd3ce; color:#e00; border:1px #e00 solid; margin:15px 0;}
.success_msg{padding:10px; background:#dcffc5; color:#070; border:1px #070 solid; margin:15px 0;}
.spacer20{height:20px; clear:both;}
.pagination{display:table; clear:both;}
.pagination ul{list-style:none; margin:20px 0;}
.pagination ul li{display:inline; float:left; margin-right:5px;}
.pagination ul li span, .pagination ul li a{background:#303441; color:#fff; padding:5px 10px; display:inline-block;}
.pagination ul li .current, .pagination ul li a:hover{background:#34c6f6;}
article.tag-sticky-2{background:#f6f6f6; padding:10px;}

h1.entry-title{font-weight:600; font-size:30px; margin-bottom:40px; position:relative;}
article p{margin:0 0 20px 0;}
.post-date{display:inline;}
.post-comment{display:inline;}
.post-categories{display:inline;}
.post-tags{display:inline;}
form.search-form{margin-bottom:10px;}
input.search-field, .post-password-form input[type=password], .wpcf7 form input[type="submit"]{border:1px #eee solid; padding:7px 15px;}
input.search-submit, .post-password-form input[type=submit], .wpcf7 form input[type="submit"]{border:none; color:#ffffff; padding:7px 15px; cursor:pointer; }
#contactform_main p{ margin-bottom:0;}
.nav-previous{float:left; margin-top:10px; margin-bottom:10px;}
.nav-next{float:right; margin-top:10px; margin-bottom:10px;}
nav.post-navigation{padding:10px 0 20px;}
.comment-list, ol.comment-list{list-style:none; margin-left:0; margin-top:20px; margin-bottom:20px;}
.comment-list ul, ol.comment-list ul{list-style:none;}
.comment-list li.comment{margin-top:20px;}
.comment-list .comment-content h1, .comment-list .comment-content h2, .comment-list .comment-content h3, .comment-list .comment-content h4, .comment-list .comment-content h5, .comment-list .comment-content h6{margin-top:15px;}


/* Text meant only for screen readers. */
.screen-reader-text {clip: rect(1px, 1px, 1px, 1px);position: absolute !important;	height: 1px;width: 1px;	overflow: hidden;}
.screen-reader-text:focus {	background-color: #f1f1f1;	border-radius: 3px;	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);	clip: auto !important;	color: #21759b;	display: block;
font-size: 14px;font-size: 0.875rem;font-weight: bold;	height: auto;left: 5px;	line-height: normal;padding: 15px 23px 14px;text-decoration: none;	top: 5px;	width: auto;
z-index: 100000; /* Above WP toolbar. */
}

/* woocommerce CSS
================================================*/
a.added_to_cart{background:#e1472f; padding:5px; display:inline-block; color:#fff; line-height:1;}
a.added_to_cart:hover{background:#000000;}
a.button.added:before{content:'' !important;}
#bbpress-forums ul li{padding:0;}
#subscription-toggle a.subscription-toggle{padding:5px 10px; display:inline-block; color:#e1472f; margin-top:4px;}
textarea.wp-editor-area{border:1px #ccc solid;}
.woocommerce input[type=text], .woocommerce textarea{border:1px #ccc solid; padding:4px;}
form.woocommerce-ordering select{ padding:5px; color:#777777;}
.woocommerce table.shop_table th, .woocommerce-page table.shop_table th{ font-family:'Roboto Condensed',san-serif; color:#ff8a00;}
.woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price{ color:inherit !important; font-size:15px; text-align:center; padding-bottom:25px; margin-bottom:0 !important}
h1.product_title, p.price{margin-bottom:10px;}
.woocommerce table.shop_table th, .woocommerce-page table.shop_table th{ font-family:'Roboto Condensed',san-serif; color:#ff6d84;}
.woocommerce table.shop_table th, .woocommerce table.shop_table td{ border-bottom:0px !important}
.woocommerce ul.products li.product .price del{ display:inline-block;}
.woocommerce ul.products li.product h3{ font-size:18px; position:relative; padding-bottom:15px; margin-bottom:10px;}
.woocommerce ul.products li.product h3::after{ content:""; position:absolute; width:50px; height:1px; background-color:#555; bottom:0; left:0; right:0; margin:auto;}
.woocommerce ul.products li.product{ background-color:#f5f5f5; border-radius:5px; position:relative; height:320px; overflow:hidden;}
.woocommerce ul.products li.product:hover{ background-color: rgba(0,0,0,0.5) }
.woocommerce ul.products li.product:hover img{ position:relative !important; z-index:-99999 !important; opacity:0.5;}
.woocommerce .quantity .qty{ padding:7px;}
.woocommerce-Price-amount.amount{ font-size:18px !important; }
.woocommerce ul.products li.product:hover .woocommerce-Price-amount.amount{ color:#111;}
.home .woocommerce ul.products li.product .price ins{ text-decoration:none !important}
.woocommerce div.product .product_title{ padding-bottom:20px !important;}
.woocommerce div.product form.cart{ margin-top:15px !important;}

.woocommerce ul.products li .product_type_simple{ position:absolute; opacity:0; top:40%; left:50%; transform:translateX(-50%);  margin:0 auto !important; text-align:center; color:#161616 !important;  background:#ffffff !important; -webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px; padding:15px  25px!important; display:table!important; }
.woocommerce ul.products li:hover .product_type_simple{opacity:1; transition:all .5s ease 0; }
.woocommerce ul.products li.product a img { min-height:223px; margin:0;}
.woocommerce ul.products li .woocommerce-loop-product__title{ font:600 17px/24px 'Roboto'; text-align:center; padding:0 !important; position: relative; color:#1f1f1f;}
.home .woocommerce ul.products li.product .onsale, .woocommerce ul.products li.product .price del{ display:none;}
.woocommerce ul.products li.product .price{ position:absolute; bottom:0%; left:0; right:0;}
.woocommerce ul.products li.product .woocommerce-loop-product__title{ position:absolute;  bottom:16% !important; left:0; right:0; }

.woocommerceright{float:left;}
.woocommerceleft{float:right;}
.woocommercesitefull{ width:100%;}
.woocommerce .panel{ height:auto}


/*post nav css*/
.post-nav{ clear:left; margin-top:40px;}
.prev-page, .next-page{ margin:0; padding:0;}
.prev-page a{ float:left;}
.next-page a{ float:right;}
.prev-page a, .next-page a{background-color:#515151; padding:5px 10px; color:#ffffff; font-size:15px;}
.prev-page a:hover, .next-page a:hover{ color:#ffffff; background-color:#34c6f6;}
.singleright { float:left; }
.singleleft { float:right; }

.space{ clear:both; min-height:10px;}
.themefeatures{ text-align:center;}
.skills-wrap{ width:60%; margin:0 auto; text-align:center;}


.sitefull .fourcol .entry{ width:24%;}
.slider-main{ min-height:260px; overflow:hidden; position:relative; background:url(images/loading.gif) no-repeat center center #fff;}


/* = Footer css
-------------------------------------------------------------- */
#footer-wrapper{ background-color:#2b2a28; position:absolute; color:#ababab; bottom:0px; margin-top:100px;

}
.footer{ padding:50px 0 50px;}
.footer h5{ font-weight:600; margin-bottom:35px; }
.footer ul li{ list-style:none;  }
.footer ul li:last-child{ border:none; }
.footer ul li a{ padding:5px 0 5px 0; display:block; color:#ababab; position:relative; }
.footer ul li a:hover, .footer ul li.current_page_item a{ color:#f56c6d;}
.footer ul li:last-child a{ border-bottom:none;}


.contactdetail{ line-height:22px; margin-top:30px; }
.contactdetail i { margin-right:20px; font-size:16px;}
.contactdetail p{ margin-bottom:10px;}
.contactdetail span{ display:inline-block; color:#fff; padding-bottom:5px; width:80px; }


.ftr_textlogo{ position:relative; margin-bottom:35px; text-align:center;}
.ftr_textlogo h2{ color:#fff; text-align:center; font-size:60px; font-weight:900; margin:0 auto 35px; padding:0;}
.ftr_textlogo img{ height:80px; width:auto;}


/*Footer Manageable css*/
.cols-1 .widget-column-1{ width:100%; float:none; text-align:center;}
.cols-1 .widget-column-1 ul li{ display:inline-block; border:none;}
.cols-1 .widget-column-1 ul li a{ padding:0 15px; height:12px; line-height:10px; display:block; background:none;}
.cols-1 .widget-column-1 ul li:last-child a{border:none;}

.cols-2 .widget-column-1{width:45%; float:left; margin:0 10% 0% 0; }
.cols-2 .widget-column-2{width:45%; float:left; margin-right:0px; }

.cols-3 .widget-column-1{width:29%; float:left; margin:0 6% 0 0;}
.cols-3 .widget-column-2{width:29%; float:left; margin:0 6% 0 0; }
.cols-3 .widget-column-3{width:29%; float:left; margin-right:0px;}

/* footer 4 column css*/
.cols-4 .widget-column-1{ width:25%;  float:left; margin:0 3% 0 0; }
.cols-4 .widget-column-2{ width:15%;  float:left; margin:0 3% 0 0;}
.cols-4 .widget-column-3{ width:28%;  float:left; margin:0 3% 0 0; }
.cols-4 .widget-column-4{ width:23%;  float:left; margin-right:0;}

/*footer recent post*/
ul.recent-post{ margin:0px; padding:0px; list-style:none;}
ul.recent-post li{ display:block; line-height:18px; margin-bottom:20px; list-style:none; min-height:65px; }
ul.recent-post .footerthumb{ width:20%; height:auto; overflow:hidden; float:left; margin:0 5% 0 0;}
ul.recent-post .footerthumb a{ padding:0;}
ul.recent-post li img { width:100%; height:auto; margin-top:4px;}
ul.recent-post li h6 {font-size:15px; line-height:18px; margin-bottom:10px; }
ul.recent-post li h6 a {color:#fff; padding:0; margin:0; background:none; }
ul.recent-post li a:hover { text-decoration:none;}
ul.recent-post li:last-child { border-bottom:0; padding-bottom:0; margin-bottom:0;}
ul.recent-post span{ color:#7abf17;}
p.shortdesc{ margin-bottom:40px;}

.copyright-wrapper { color:#fff; position:relative; text-align:center; background-color:#222120; padding:30px 0; bottom:0px; } /*default padding 30px, bottom:0*/
.design-by{ text-align:center;}


/*EDIT SAPTO*/

td.imgdik{
width:100px;
padding-left:30px;
}
td.copydik{
text-align:left;
font-size:10px;
padding-left:10px;
line-height:1.9em;

}


.fourcolumn-news, .news-box, .news-box.last  {
height:350px;
}

figure a img{
height:100%;
}
.container.fadeInUp{
margin-top:-120px !important;
}
.fourcolumn-news{margin-top:-60px !important;}

h2.section_title::after {
border-bottom:none !important;
}
/*.current-menu-item a,
.current-page-ancestor a,
.current-post-ancestor a { background: red; }*/


/*.site-main.nosidebar{
margin-left:-5px !important;
}*/

div#sitemain.site-main{
position:relative;

font-family: "Assistant";
}
div#sitemain.site-main h1{
font-family: "Assistant";
}
div.welcome_wrap.fadeInLeft{
font-family: "Assistant";
}
div.newsdesc a{
font-family: "Assistant";
}
div.container.pagefeaturecolumn p{
font-family: "Assistant";
}
div.custominfo p{
font-family: "Assistant";
}

.site-main.singleright{
width:100%; margin-left:-11px; padding:50px; margin-top:-20px !important;
}
.sitenav .menu-menu-1-container{
font-family: "Assistant";


}
.site-main.singleright h3{
font-size:30px;
font-family: "Assistant";
}
.site-main.singleright{
font-family: "Assistant";
}
.site-main.nosidebar{
font-family: "Assistant";
width:100%; padding:50px;

}
.site-main.nosidebar h1{
font-family: "Assistant";
}

li ul.sub-menu li a{
color: white !important;
background-color:#007849 !important;
font-family: "Assistant";
font-style:bold;
}

li ul.sub-menu li a:hover{
color: white !important;
background-color:#FFCE00 !important;
font-family: "Assistant"; height:60px;
}
/*edited*/
.hdrstyle2 .sitenav ul li a:hover ul li a{background-color: #ed852e ;
color: white !important; height:60px; }

.hdrstyle2 .sitenav ul li a:hover{background-color: #ed852e;
color: white !important; height:60px;}

.hdrstyle2 .sitenav ul li ul li a:hover{background-color: #ed852e !important ;
color: white !important; height:60px;}


div.post-comment{
display:none;
}
/*Kategori*/
div.post-categories{
display:none;
}
/*Kategori*/
div.newsdesc .postauthor{
display:none;
}

/*footer edited*/

@media screen and (min-width: 768px) {
ul#clientlogo.logofooter{
max-height:5px;
}

}

@media screen and (max-width: 768px) {
.hdrstyle2 .sitenav .menu-menu-1-container ul li a{
background:#007849;
font-family: "Assistant";
}

div.copyright-wrapper{

}
div#footer-wrapper{

margin-top:190%;
}
div.copyright-wrapper{
height:450%;
}
section#agro_welcome_section{
margin-top:5%;
margin-bottom:10%;
}
div.welcome_contentcolumn h3{
padding-top:5%;
}
div.features_column.three_column.rdbx1{
margin-bottom:2%;
}
div.features_column.three_column.rdbx2{
margin-bottom:2%;
}
div.container.fadeInUp h2{
margin-bottom:10%;
}
div.news-box.last {
margin-top:70% !important;
}


}
@media only screen and (max-width: 433px){
div#footer-wrapper{
margin-top:220%;
}

}
@media only screen and (max-width: 1300px) {
div.copyright-wrapper ul li{
width:74px!important;
}
}


/*Selesai*/

.hdrstyle2 .sitenav ul li a{
color:white !important;
font-family: "Assistant";
margin-top:-3px;
}
div.header-mainmenu{
height:50px;
}

.hdrstyle2 .sitenav ul li a.parent{
color:white !important;
font-family: "Assistant"; height:60px;
}
.hdrstyle2 .sitenav ul li a.parent:hover{
color:white !important; height:60px;
font-family: "Assistant";
}

.hdrstyle2 .sitenav .sub-menu li a{
color:white ;
font-family: "Assistant";
}




#linkfooter a:hover{
color: #FFCE00;
padding:5px 7px;
}

#linkfooter a{
color:white;
}

.cols-1 ul{
display:none;
}

#footer-wrapper .footertoparea{
/*border:100px;*/
border-color:white;

}
#footer-wrapper {

position:relative;
display:inline-block;
width:100%;
height:100px;
bottom:fixed;
top:30px;
}

#footer-wrapper .container.footer{
display:none ;
}

.entry-content p a{
color:black;

}
.entry-content p a:hover{
color:#FFCE00;
}

#footer-wrapper .container, .footer {
width:100%;
}

.hdrstyle2 .logo::before {background-color:white;}
.hdrstyle2 .logo::after {background-color:white;}

.siteinnerpage::after{}

/*.card, .container, .content-area{
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
transition: 0.3s;
border-radius:5px;
padding:15px;
}*/

.features_column{
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
transition: 0.3s;
}

.rdbx1, .rdbx2, .rdbx3{
height : 250px;
width:380px;
max-height:300px;
margin:5px;
background:white;
border-radius:15px;

}
.container.content-area{
box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
transition: 0.3s;
border-radius:15px;
padding:25px;
margin-bottom:relative;
top:100px;
height:100%;
background-color:white;
}

.container.pagefeaturecolumn{background-color:transparent;}

#agro_welcome_section .container{
box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
transition: 0.3s;
border-radius:15px;
padding:25px;
background-color:#ffff;
}

.news-box, .news-box.last{
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
transition: 0.3s;
border-radius:15px;
padding:0px;

}


.tooltip {
position: relative;
display: inline-block;

}

.tooltip .tooltiptext {
visibility: hidden;
width: 120px;
background-color: black;
color: #fff;
text-align: center;
border-radius: 6px;
padding: 5px 0;
font-size:12px;

/* Position the tooltip */
position: absolute;
z-index: 1;
top: 100%;
left: 50%;
margin-left: -60px;
}

.tooltip:hover .tooltiptext {
visibility: visible;
}

.copyright-wrapper .container{
top:-60px;
height:110px;
}
.copyright-wrapper .container{

}
/*selesai*/


/*footer top area css*/
.footertoparea{ position:relative; padding:0 0 30px; border-bottom:1px solid #454545; margin-bottom:40px; bottom:30px; } /*default margin-bottom:40*/
.footertoparea .footerlogo, .footertoparea .footershortinfo, .footertoparea .social-icons{ float:left; width:33%;}
.footertoparea .footerlogo{ width:22%; border-right:1px solid #454545;}
.footertoparea .footerlogo h2{ color:#fff; margin:0;}
.footertoparea .footershortinfo{ display:inline-block; padding-left:5%; width:45%;}
.footertoparea .social-icons{ text-align:right;}

#footer-wrapper .social-icons{ margin-top:0;}
#footer-wrapper .social-icons a{ width:45px; height:45px; line-height:45px; margin:0 5px 5px 0; padding:0; color:#fff; display:inline-block; background-color:#3a3a3a; border-radius:5px; }
#footer-wrapper .social-icons a:hover{ background-color:#fff;  color:#fff; }


/*time table css*/
.officehours{ padding-bottom:15px; border-bottom:1px solid #454545; margin-bottom:15px;}
.officehours:last-child{ border:none;}
.officehours .day{float:left; width:50%; }
.officehours .time{ float:left; }
.officehours i{ font-size:14px;  float:left; margin:4px 10px 0 0 }

/*back to top css*/
#top{ position:relative;}
#back-top {	position: fixed; bottom: 15px; right:50px;}
#back-top a {width:64px;	display: block;	text-align: center;	font: 11px/100% Arial, Helvetica, sans-serif;	text-decoration: none;color: #bbb;	/* background color transition */
-webkit-transition: 1s;
-moz-transition: 1s;
transition: 1s;
}



#back-top span {width:42px;height:42px;	display: block;	margin-bottom: 7px;	background: url(images/up-arrow.png) no-repeat center center;
-webkit-transition: 1s;
-moz-transition: 1s;
transition: 1s;opacity:0.5;
}






