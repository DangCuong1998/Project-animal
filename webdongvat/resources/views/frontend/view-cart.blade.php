@extends('frontend.layouts.frontend')

@section('title','Danh Muc')

@section('main')
    <style type="text/css">
        /* ============================================================================

Theme Name: BetaDesign - A Premium HTML Template
Theme URI: http://webredox.com/demo/html/betadesign/
Author: webRedox
Version: 1.0

============================================================================= */

/*===========================================================================

    CONTENTS:

    1. CSS RESET
    2. TYPOGRAPHY
    3. HEADER
    4. NAVIGATION
        4.1 SUBMENU
    5. CONTENT SECTION
        5.1 SIDEBAR SECTION
    6. SHOP SECTION
        6.1 WOOCOMMERCE PRODUCT RATTING
        6.2 WOOCOMMERCE SINGEL ITEM
        6.3 BETA CART
    7. SEARCH FROM
        7.1 TWITTER
    8. BETA BANNER
    9. BETA PROMOBOX
    10. BETA INSTAGRAM
    11. BETA PRODUCTS DETAILS
        11.1 SINGLE ITEM
        11.2 RIBBON
    12. PRICE FILTER
    13. AUDIO
        13.1 ICON CIRCLE
    14. BLOG SECTION
        14.1 BETA PAGINATION
    15. BETA TESTIMONIALS
    16. BETA SLIDES TWITTER
    17. BETA MEDIA QUERY
    18. FOOTER SECTION
        

============================================================================= */

/* ==========================================================================
    1. CSS RESET
============================================================================= */

* {
margin:0;
padding:0;
outline:none
}

html{overflow-x:hidden;}
html,body {
height:100%;
-webkit-font-smoothing:antialiased;

}

body {
font:13px/20px "Open Sans",sans-serif;
color:black;
background:#fff;
font-weight:300;

}

div,form,fieldset,legend,label {
margin:0;
padding:0
}

form {
display:inline
}

table {
border-collapse:collapse;
border-spacing:0
}
p{font-size:14px;}
a {
border:none;
outline:none;
text-decoration:none;
color:#606366;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

i {
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

a:active,a:hover {
text-decoration:none;
color:#000
}

img {
border:none;
max-width:100%
}

textarea:focus,input:focus,select:focus,a:focus {
outline:none
}

h1,h2,h3,h4,h5,h6,td,caption {
font-weight:400
}

th,td {
text-align:left;
vertical-align:top
}

ul,ol {
list-style-position:inside;
margin:0;
padding:0
}

textarea,select,input {
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box
}

small {
font-size:11px
}
/* ==========================================================================
    2. TYPOGRAPHY
============================================================================= */
.clear {
clear:both
}

.hide {
display:none!important
}

.elastic {
width:1170px;
position:relative;
margin:0 auto;
display:block
}

.center {
text-align:center
}

.left {
float:left
}

.right {
float:right
}

.space5 {
line-height:5px
}

.space10 {
line-height:10px
}

.space {
line-height:15px
}

.space15 {
line-height:15px
}

.space20 {
line-height:20px
}

.space25 {
line-height:25px
}

.space30 {
line-height:30px
}

.space35 {
line-height:35px
}

.space40 {
line-height:40px
}

.space45 {
line-height:45px
}

.space50 {
line-height:50px
}

.space55 {
line-height:55px
}

.space60 {
line-height:60px
}

.space65 {
line-height:65px
}

.space70 {
line-height:70px
}

.space75 {
line-height:75px
}

.space80 {
line-height:80px
}

.space85 {
line-height:85px
}

.space90 {
line-height:90px
}

.space95 {
line-height:95px
}

.space100 {
line-height:100px
}

.strong {
font-weight:700
}

.boxsize {
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box
}

img.i100 {
width:100%;
height:auto
}

.animate {
-webkit-transition:all .3s ease-in-out;
-moz-transition:all .3s ease-in-out;
-o-transition:all .3s ease-in-out;
-ms-transition:all .3s ease-in-out;
transition:all .3s ease-in-out
}

.wrap-middle {
display:table
}

.middle {
display:table-cell;
vertical-align:middle
}

video {
max-width:100%;
height:auto
}

.video-elastic {
position:relative;
padding-bottom:56.25%;
height:0;
overflow:hidden
}

.video-elastic iframe,.video-elastic object,.video-elastic embed,.video-elastic video {
position:absolute;
top:0;
left:0;
width:100%;
height:100%
}

.ov {
overflow:visible!important
}

.abs-fullwidth {
width:100%;
position:absolute;
left:0;
right:0
}

.auto-center {
position:absolute;
top:50%;
left:50%;
-webkit-transform:translate(-50%,-50%);
transform:translate(-50%,-50%)
}

.m5 {
margin:5px
}

.m10 {
margin:10px
}

.m15 {
margin:15px
}

.m20 {
margin:20px
}

.m25 {
margin:25px
}

.m30 {
margin:30px
}

.mt5 {
margin-top:5px
}

.mt10 {
margin-top:10px
}

.mt15 {
margin-top:15px
}

.mt20 {
margin-top:20px
}

.mt25 {
margin-top:25px
}

.mt30 {
margin-top:30px
}

.mr5 {
margin-right:5px
}

.mr10 {
margin-right:10px
}

.mr15 {
margin-right:15px
}

.mr20 {
margin-right:20px
}

.mr25 {
margin-right:25px
}

.mr30 {
margin-right:30px
}

.mb5 {
margin-bottom:5px
}

.mb10 {
margin-bottom:10px
}

.mb15 {
margin-bottom:15px
}

.mb20 {
margin-bottom:20px
}

.mb25 {
margin-bottom:25px
}

.mb30 {
margin-bottom:30px
}

.mb40 {
margin-bottom:40px
}

.mb45 {
margin-bottom:45px
}

.mb50 {
margin-bottom:50px
}

.ml5 {
margin-left:5px
}

.ml10 {
margin-left:10px
}

.ml15 {
margin-left:15px
}

.ml20 {
margin-left:20px
}

.ml25 {
margin-left:25px
}

.ml30 {
margin-left:30px
}

.mtn {
margin-top:0
}

.mrn {
margin-right:0
}

.mbn {
margin-bottom:0
}

.mln {
margin-left:0
}

.p5 {
padding:5px
}

.p10 {
padding:10px
}

.p15 {
padding:15px
}

.p20 {
padding:20px
}

.p25 {
padding:25px
}

.p30 {
padding:30px
}

.pt5 {
padding-top:5px
}

.pt10 {
padding-top:10px
}

.pt15 {
padding-top:15px
}

.pt20 {
padding-top:20px
}

.pt25 {
padding-top:25px
}

.pt30 {
padding-top:30px
}

.pr5 {
padding-right:5px
}

.pr10 {
padding-right:10px
}

.pr15 {
padding-right:15px
}

.pr20 {
padding-right:20px
}

.pr25 {
padding-right:25px
}

.pr30 {
padding-right:30px
}

.pb5 {
padding-bottom:5px
}

.pb10 {
padding-bottom:10px
}

.pb15 {
padding-bottom:15px
}

.pb20 {
padding-bottom:20px
}

.pb25 {
padding-bottom:25px
}

.pb30 {
padding-bottom:30px
}

.pl5 {
padding-left:5px
}

.pl10 {
padding-left:10px
}

.pl15 {
padding-left:15px
}

.pl20 {
padding-left:20px
}

.pl25 {
padding-left:25px
}

.pl30 {
padding-left:30px
}

.ptn {
padding-top:0
}

.prn {
padding-right:0
}

.pbn {
padding-bottom:0
}

.pln {
padding-left:0
}

.l-inline {
list-style:none;
overflow:hidden
}

.l-inline li {
float:left
}

.dg {
margin-left:-5px;
margin-right:-5px;
overflow:hidden
}


.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11 {
position:relative;
min-height:1px;
padding-left:5px;
padding-right:5px;
float:left;
margin-top:5px;
margin-bottom:5px
}

.col-12 {
width:100%
}

.col-11 {
width:91.66666667%
}

.col-10 {
width:83.33333333%
}

.col-9 {
width:75%
}

.col-8 {
width:66.66666667%
}

.col-7 {
width:58.33333333%
}

.col-6 {
width:50%
}

.col-5 {
width:41.66666667%
}

.col-4 {
width:33.33333333%
}

.col-3 {
width:25%
}

.col-2 {
width:16.66666667%
}

.col-1 {
width:8.33333333%
}

.ratio-1x1 {
position:relative;
width:100%
}

.ratio-1x1:before {
content:"";
display:block;
padding-top:100%
}

.ratio-content {
position:absolute;
top:0;
left:0;
right:0;
bottom:0
}

.circle {
border-radius:50%
}

h1,.h1 {
color:#253951;
font-size:2.78231em;
line-height:39.78px;
font-family:"Open Sans",sans-serif;
font-weight:400;
margin-top:0
}

h2,.h2 {
color:#253951;
font-size:2.78231em;
line-height:39.78px;
font-family:"Open Sans",sans-serif;
font-weight:300;
margin-top:0
}

h3,.h3 {
color:#253951;
font-size:2.30769em;
line-height:39.78px;
font-family:"Open Sans",sans-serif;
font-weight:400;
margin-top:0
}

h4,.h4 {
color:#253951;
font-size:2.30769em;
line-height:39.78px;
font-family:"Open Sans",sans-serif;
font-weight:300;
margin-top:0
}

h5,.h5 {
color:#253951;
font-size:1.92308em;
line-height:39.78px;
font-family:"Open Sans",sans-serif;
font-weight:400;
margin-top:0
}

h6,.h6 {
color:#253951;
font-size:1.92308em;
line-height:39.78px;
font-weight:300;
margin-top:0
}

.title-decorator {
border-bottom:1px solid #e1e1e1;
width:100%;
height:1.61538em;
margin-bottom:1.61538em
}

.title-decorator h1,.title-decorator h2,.title-decorator h3,.title-decorator h4,.title-decorator h5,.title-decorator h6 {
background:#fff;
padding-right:17px;
display:inline-block
}

ul,ol,ul label,ol label {
font-weight:300
}

ul li:hover,ol li:hover {
color:#000
}

.beta-list {
list-style:none
}

.beta-list li {
margin-bottom:10px
}

.beta-list i {
color:#f90;
font-size:10px;
padding-right:10px
}

strong {
color:#000
}

input[type="text"],input[type="email"],input[type="url"],textarea {
width:100%;
border:1px solid #e1e1e1;
height:37px;
padding:0 12px
}

textarea {
height:260px;
padding:12px
}

.form-block {
margin-bottom:10px
}

input[type="checkbox"] {
display:none
}

input[type="checkbox"]+label {
position:relative;
padding-left:21px;
width:100%
}

input[type="checkbox"]+label span:first-child {
width:13px;
height:13px;
display:inline-block;
margin-right:8px;
border:1px solid #e1e1e1;
position:absolute;
left:0;
bottom:3px
}

input[type="checkbox"]:checked+label {
color:#000
}

input[type="checkbox"]:checked+label span:first-child:before {
content:"\f00c";
font-family:'FontAwesome';
position:absolute;
left:1px;
top:-4px;
font-size:10px
}

.beta-select {
position:relative
}

.beta-select select {
position:absolute;
top:0;
left:0;
width:100%;
opacity:0
}

.beta-select span {
display:inline-block
}

.beta-select .beta-select-title {
padding-left:20px
}

.beta-select .beta-select-value {
padding-left:5px;
color:#000
}

.beta-select i {
padding-left:15px;
padding-right:20px;
font-size:10px
}

select {
box-shadow:none;
border:1px solid #e1e1e1;
cursor:pointer;
width:100%
}

.beta-select-primary {
display:inline-block;
border:1px solid #e1e1e1;
width:180px;
padding:7px 12px
}

.beta-select-primary .beta-select-title {
padding-left:0
}

.beta-select-primary i {
float:right;
line-height:inherit;
padding-left:0;
padding-right:0
}

.beta-highlight {
color:#fff;
display:inline-block;
padding-left:2px;
padding-right:2px
}

.beta-dropcap:first-letter {
float:left;
font-weight:700;
font-size:30px
}

.beta-dropcap-a:first-letter {
padding-right:5px;
padding-bottom:5px;
padding-top:8px
}

.beta-dropcap-b:first-letter {
color:#fff;
background:#3a5c83;
width:40px;
height:40px;
display:inline-block;
text-align:center;
line-height:40px;
margin-top:6px;
margin-right:5px;
margin-bottom:5px
}

sup {
position:relative;
color:#58a7c6;
top:-28px;
font-size:30px
}

sub {
color:#000;
font-size:20px;
position:relative;
left:-35px;
top:0
}

.beta-form-checkout select {
line-height:37px;
height:37px
}

.beta-form-checkout input {
margin-bottom:5px
}

.form-block {
margin-bottom:20px;
overflow:hidden
}

.form-block>* {
float:left
}

.form-block label {
width:200px;
font-weight:lighter
}

.form-block input,.form-block select,.beta-form-checkout textarea {
width:60%;
overflow:hidden
}

.form-block #apartment {
margin-left:200px
}

.beta-form-checkout textarea {
height:140px
}

@font-face {
font-family:'star';
src:url(../fonts/star.eot);
src:url(../fonts/star.eot?#iefix) format("embedded-opentype"),url(../fonts/star.woff) format("woff"),url(../fonts/star.ttf) format("truetype"),url(../fonts/star.svg#star) format("svg");
font-weight:400;
font-style:normal
}

.white {
color:#fff
}

.beta-relative {
position:relative
}

.bg-gray {
background-color:#f6f6f6
}

.color-gray {
color:#a3a2a2
}

.color-black {
color:#000
}

.h164 {
height:164px
}

.font-large {
font-size:15px
}

a i {
color:#f90;
font-size:10px;
padding-left:5px;
padding-right:5px
}

.other-title {
line-height:30px;
font-size:23px;
color:#000
}

.ml85 {
margin-left:85px
}

.beta-circle {
width:75px;
height:75px;
text-align:center;
line-height:75px;
border-radius:50%;
background-color:#3a5c83;
color:#fff;
font-size:22px;
display:inline-block
}

.bg-color4 {
background-color:#f90
}

.bg-color11 {
background-color:#57a7c6
}



/* ==========================================================================
    3. HEADER SECTION
============================================================================= */

#logo img {
margin-bottom:13px
}

.slogan {
display:inline-block;
width:130px;
padding:16px 0 10px 20px;
border-left:1px solid #d3d3d3;
margin-left:25px
}

.header-bottom {
border-top:1px solid #e3e3e3;
border-bottom:1px solid #e3e3e3
}
.color-div{background:#353535!important;}
#footer.color-div input{background: #3f3f3f;border:1px solid gray;}
.color-div a{color:lightgray;}

.header-top {
border-bottom:1px solid #e3e3e3;
height:47px
}
/* ==========================================================================
    4. NAVIGATION
============================================================================= */
.menu-beta {
height:47px
}

.menu-beta li {
border-right:1px solid #d3d3d3
}

.menu-beta li:first-child {
border-left:1px solid #d3d3d3
}

.menu-beta li>a {
padding:0 20px;
line-height:47px;
height:47px;
display:block
}

.menu-beta li .beta-select {
line-height:47px;
height:47px;
display:block
}

.menu-beta li select {
border:none;
height:46px;
display:block;
padding:0 20px
}

.menu-beta li a>i {
margin-right:3px;
color:#999da0
}

.menu-beta li a:hover i {
color:#000
}

.header-body {
padding:20px 0 0px
}

.main-menu {
height:60px;
display:table-cell;
vertical-align:middle;
font-weight:400
}

.main-menu ul {
list-style:none
}

.main-menu li.current-menu-item {
background:#3a5c83
}

.main-menu li.current-menu-item>a {
color:#fff;
text-transform:uppercase
}

.main-menu a {
font-family:"Open Sans",sans-serif;
font-size:16px
}

.main-menu li:hover>.sub-menu {
display:block
}
/* ==========================================================================
    4.1 SUBMENU
============================================================================= */

.sub-menu,.children {
display:none;
position:absolute;
top:100%;
left:0;
z-index:100;
list-style:none;
background:#fff
}

.sub-menu li,.children li {
float:none;
width:100%;
padding:0 40px 0 20px !important;
border-bottom:1px solid #e6e6e6
}

.sub-menu li:last-child,.children li:last-child {
border-bottom:none
}

.sub-menu li a,.children li a {
color:#505050;
display:block;
white-space:nowrap;
line-height:40px;
height:40px;
padding:0
}

.sub-menu li:hover,.children li:hover {
background:#3a5c83
}

.sub-menu li:hover a,.children li:hover a {
color:#fff
}

ul.sub-menu ul.sub-menu,ul.children ul.children {
display:none;
left:100%;
top:0
}

ul.sub-menu ul.sub-menu li a,ul.children ul.children li a {
color:#505050
}

ul.sub-menu ul.sub-menu li:hover>a,ul.children ul.children li:hover>a {
color:#fff
}

/* ==========================================================================
    5. CONTENT SECTION
============================================================================= */

.inner-header {
background-color:#3a5c83;
padding:20px 0
}

.inner-title {
color:#fff;
line-height:100%;
margin-bottom:0;
text-transform:capitalize
}

.content {
padding:60px 0
}
#content2 {
padding:60px 0
}

.content.space-top-none {
margin-top:0;
padding-top:0
}

.content.space-bottom-none {
margin-bottom:0;
padding-bottom:0
}
#content {
padding:60px 0
}

#content.space-top-none {
margin-top:0;
padding-top:0
}

#content.space-bottom-none {
margin-bottom:0;
padding-bottom:0
}

/* ==========================================================================
    5.1 SIDEBAR SECTION
============================================================================= */

.aside .widget {
margin-bottom:50px
}

.aside .widget-title {
font-size:16px;
text-transform:uppercase;
border:1px solid #e1e1e1;
padding-left:20px;
border-left:3px solid #606366;
color:#606366
}

.aside ul li {
padding:9px 20px;
border-bottom:1px dotted #e1e1e1
}

.aside ul li:last-child {
border-bottom:none
}

.widget-main {
margin-bottom:40px
}

.widget-main #searchform {
width:100%
}

.widget-main-body .tweet:first-child {
padding-top:0
}

.widget-main-title {
font-size:20px;
color:#979797;
margin-bottom:15px;
font-family:"Open Sans",sans-serif;
}


.widget-main-body ul {
list-style:none
}

.widget-main-body li {
margin-bottom:7px
}

.widget-main-body li:before {
content:"\f054";
color:#f90;
font-family:"FontAwesome";
padding-right:8px;
font-size:10px
}

.beta-lists>* {
padding:20px;
border-bottom:1px dotted #e1e1e1;
margin-top:0
}

.beta-lists>:last-child {
border-bottom:none;
padding-bottom:0
}

.recent-post {
margin-bottom:20px
}

.recent-post-title {
line-height:100%;
color:#000;
font-size:18px;
margin-bottom:0
}

.beta-checkout-help {
font-size:18px
}

.menu-underline a {
margin-left:25px;
text-decoration:underline
}
/* ==========================================================================
    6. SHOP SECTION
============================================================================= */

.your-order {
border:1px solid #e8e8e8;
padding-bottom:35px
}

.your-order>.your-order-head:first-child {
border-top:none
}

.your-order .beta-btn {
background-color:#3a5c83;
color:#fff!important
}

.your-order .beta-btn i {
color:#fff!important
}

.your-order-head {
height:55px;
background-color:#f8f8f8;
padding:0 40px;
border-top:1px solid #e8e8e8;
border-bottom:1px solid #e8e8e8
}

.your-order-head h5 {
font-size:24px;
color:#484747;
line-height:55px
}

.your-order-body {
padding:30px 40px
}

.your-order-item {
padding:10px 0;
border-bottom:1px solid #f8f8f8
}

.your-order-item.pbn {
padding-bottom:0
}

.your-order-item:last-child {
padding-bottom:0;
border-bottom:0
}

.your-order-body h5 {
margin-top:-10px
}

.your-order-info {
display:block;
margin-top:-5px;
margin-bottom:-2px
}

.payment_methods li {
margin-bottom:10px
}

.payment_methods li label {
font-size:15px;
color:#000
}

.payment_box {
background:#f8f8f8;
margin-left:17px;
margin-top:20px;
margin-bottom:30px;
padding:20px
}

.your-order-f18 {
font-size:18px;
margin-bottom:20px
}

.star-rating {
float:right;
overflow:hidden;
position:relative;
height:1em;
line-height:1em;
font-size:1em;
width:5.4em;
font-family:'star'
}

/* ==========================================================================
    6.1 WOOCOMMERCE PRODUCT RATTING
============================================================================= */


.star-rating:before {
content:"\73\73\73\73\73";
color:#c7c8c8;
float:left;
top:0;
left:0;
position:absolute
}

.star-rating span {
overflow:hidden;
float:left;
top:0;
left:0;
position:absolute;
padding-top:1.5em;
color:#f90
}

.star-rating span:before {
content:"\53\53\53\53\53";
top:0;
position:absolute;
left:0
}

.woocommerce-product-rating {
line-height:2em;
display:block
}

.woocommerce-product-rating .star-rating {
margin:.5em 4px 0 0;
float:left
}

/* ==========================================================================
    6.2 WOOCOMMERCE SINGEL ITEM
============================================================================= */

.single-item-options {
overflow:hidden
}

.single-item-options>* {
float:left
}

.single-item-options .add-to-cart {
margin-left:20px
}

.wc-select {
width:90px;
height:35px;
margin-right:10px
}

.beta-dropdown {
display:none
}

.beta-components {
overflow:hidden
}

.beta-components.space-right .beta-comp {
margin-right:7px
}

.beta-components.space-left .beta-comp {
margin-left:7px
}

.beta-comp {
float:left
}

/* ==========================================================================
    6.3 BETA CART
============================================================================= */
.cart {
border:1px solid #e1e1e1;
height:37px;
line-height:37px;
padding:0 10px;
cursor:pointer
}

.cart .beta-select {
position:static
}

.cart .beta-select i:first-child {
margin-right:3px;
color:#999da0;
padding-left:0;
padding-right:0;
font-size:16px
}

.cart .beta-select i:last-child {
margin-left:3px;
padding-left:0;
padding-right:0
}

.cart-body {
position:absolute;
right:15px;
z-index:100;
background:#fff;
border:1px solid #e1e1e1;
padding:0 10px 10px;
cursor:default
}

.cart-item {
position:relative;
padding:20px 0;
border-bottom:1px solid #e1e1e1
}

.cart-item-edit {
position:absolute;
top:20px;
right:16px;
background:#e1e1e1;
font-size:10px;
width:15px;
height:15px;
text-align:center;
line-height:15px
}

.cart-item-delete {
position:absolute;
top:20px;
right:0;
background:#e1e1e1;
font-size:10px;
width:15px;
height:15px;
text-align:center;
line-height:15px
}

.cart-item .media {
margin-top:0;
line-height:100%;
padding-right:70px
}

.cart-item .media .pull-left,.cart-item .media .pull-left .img {
width:50px
}

.cart-item .media-body>span {
display:block;
margin-bottom:5px
}

.cart-item-amount span {
color:#f90
}

.cart-total {
border-bottom:1px solid #e1e1e1;
font-size:15px;
height:50px;
line-height:50px
}

.cart-total-value {
color:#f90
}

.beta-tags {
margin-top:20px
}

.beta-tags a {
background:#f2f2f2;
display:inline-block;
padding:5px 10px;
margin-bottom:10px;
margin-right:6px
}

.beta-tags a:hover {
background:#3a5c83;
color:#fff
}

.beta-sales-item .pull-left {
margin-right:20px
}

.beta-sales-item img {
width:55px;
height:auto
}

.beta-sales-price {
font-size:20px;
color:#f90
}

/* ==========================================================================
    7. SEARCH FROM
============================================================================= */

#searchform {
position:relative;
width:218px;
display:inline-block
}

#searchform #s {
padding-right:25px
}
#searchform2 {
position:relative;
width:218px;
display:inline-block
}

#searchform2 #s {
padding-right:25px
}

#searchsubmit {
position:absolute;
right:6px;
top:0;
bottom:0;
border:none;
background:none
}
#searchsubmit2 {
position:absolute;
right:6px;
top:0;
bottom:0;
border:none;
background:none
}

/* ==========================================================================
    7.1 TWITTER
============================================================================= */

.tweet {
position:relative
}

.tweet i.fa {
position:absolute;
left:0;
top:20px;
font-size:17px;
line-height:27px;
color:#d1d1d1
}

.tweet-body {
padding-left:7px
}

.tweet-body a {
color:#f90
}

.tweet-body a:hover {
text-decoration:underline
}

.tweet-time {
color:#b0b0b0
}

.tweet-title {
line-height:110%;
font-size:18px;
margin-bottom:0
}

/* ==========================================================================
    8. BETA BANNER
============================================================================= */

.beta-banner {
position:relative;
overflow:hidden
}

.beta-banner-layer {
position:absolute;
opacity:0
}

.beta-banner h1,.beta-banner h2,.beta-banner h3,.beta-banner h4,.beta-banner h5,.beta-banner h6 {
color:#444
}

.beta-banner-a h1,.beta-banner-a h2,.beta-banner-a h3,.beta-banner-a h4,.beta-banner-a h5,.beta-banner-a h6,.beta-banner-a {
color:#8299af
}

.view-layer {
top:0;
left:0;
opacity:1
}

.beta-banner .banner-color {
color:#444
}

.beta-banner .banner-color:hover {
color:#444
}

.beta-banner-white {
color:#fff!important
}

/* ==========================================================================
    9. BETA PROMOBOX
============================================================================= */

.beta-promobox {
padding:35px 40px 25px;
background:#234
}

.beta-promobox h1,.beta-promobox h2,.beta-promobox h3,.beta-promobox h4,.beta-promobox h5,.beta-promobox h6 {
color:#818992
}

.beta-promobox-b {
background:#f90;
color:#fff
}

.beta-promobox-b h1,.beta-promobox-b h2,.beta-promobox-b h3,.beta-promobox-b h4,.beta-promobox-b h5,.beta-promobox-b h6 {
color:#fff
}

/* ==========================================================================
    10. BETA INSTAGRAM
============================================================================= */

#beta-instagram-feed {
overflow:hidden;
margin-left:-5px;
margin-right:-5px
}

#beta-instagram-feed a {
width:80px;
height:80px;
display:block;
float:left;
margin:0 5px 10px
}

#beta-instagram-feed a img {
width:80px
}

/* ==========================================================================
    11. BETA PRODUCTS DETAILS
============================================================================= */

.beta-products-details {
font-size:15px;
margin-bottom:17px
}

.beta-products-details .pull-left {
margin-top:10px
}

.beta-products-details a {
color:#3a5c83
}

.beta-products-details a:hover {
text-decoration:underline
}

.beta-products-details .sort-by {
display:inline-block;
padding-right:10px
}

.beta-products-details .beta-select {
font-size:13px
}

/* ==========================================================================
    11.1 SINGLE ITEM
============================================================================= */

.single-item {
position:relative
}

.single-item-header {
margin-bottom:20px
}

.single-item-title {
font-size:15px;
margin-bottom:5px
}

.single-item-price {
font-size:20px;
color:#000
}

.add-to-cart {
background-color:#3a5c83;
height:35px;
width:40px;
text-align:center;
display:inline-block;
margin-right:2px
}

.add-to-cart i {
font-size:22px;
color:#fff;
line-height:35px
}

.flash-del {
text-decoration:line-through;
margin-right:10px
}

.flash-sale {
color:#f90
}

/* ==========================================================================
    11.2 RIBBON
============================================================================= */

.ribbon-wrapper {
width:60px;
height:60px;
overflow:hidden;
position:absolute;
top:-3px;
right:-3px
}

.ribbon {
color:#fff;
text-align:center;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-ms-transform:rotate(45deg);
-o-transform:rotate(45deg);
position:relative;
padding:4px 0;
left:1px;
top:4px;
width:80px;
text-transform:uppercase;
background-color:#3a5c83
}

.ribbon:before,.ribbon:after {
content:"";
border-top:3px solid #6e8900;
border-left:3px solid transparent;
border-right:3px solid transparent;
position:absolute;
bottom:-3px
}

.ribbon:before {
left:0
}

.ribbon:after {
right:0
}

.ribbon.sale {
background-color:#f90
}

/* ==========================================================================
    12. PRICE FILTER
============================================================================= */

.price-filter {
margin-top:30px
}

#price-filter-range {
margin-bottom:20px;
border:none;
background:#e7e7e7;
height:3px;
position:relative
}

#price-filter-range .ui-slider-range {
background:#c1c1c1;
position:absolute;
display:block;
height:inherit
}

#price-filter-range .ui-slider-handle {
background:#3a5c83;
width:11px;
height:11px;
border-radius:50%;
border:none;
display:block;
top:-4px;
position:absolute
}

.tp-banner-container {
position:relative
}
/* ==========================================================================
    13. AUDIO
============================================================================= */

.mejs-audio .mejs-controls{background:#fafafa !important;width:100%}
.mejs-audio .mejs-controls .mejs-duration,.mejs-audio .mejs-controls .mejs-currenttime{background:#fafafa !important;color:#9f9f9f !important}
.mejs-audio .mejs-controls{height:44px !important}
.mejs-audio .mejs-controls div{margin-top:6px!important;}
.mejs-audio .mejs-controls .mejs-button button{background:none !important;font-size:12px !important}
.mejs-audio .mejs-controls .mejs-button button:focus{outline:none !important}
.mejs-audio .mejs-controls .mejs-play button:before{content:"\f04b" !important;color:#505050 !important;font-family:"fontawesome"}
.mejs-audio .mejs-controls .mejs-pause button:before{content:"\f04c" !important;color:#505050 !important;font-family:"fontawesome"}
.mejs-audio .mejs-controls .mejs-mute button:before{content:"\f028" !important;color:#505050 !important;font-family:"fontawesome";font-size:15px !important}.mejs-audio .mejs-controls .mejs-unmute button:before{content:"\f026" !important;color:#505050 !important;font-family:"fontawesome";font-size:15px !important}.mejs-audio .mejs-controls .mejs-time-total{background:white !important;height:4px;margin-top:8px !important}
.mejs-audio .mejs-controls .mejs-time-total span:not(.mejs-time-float){height:4px}
.mejs-audio .mejs-controls .mejs-time-loaded,.mejs-audio .mejs-controls .mejs-horizontal-volume-total{background:#e9e9e9 !important}
.mejs-audio .mejs-controls .mejs-time-current,.mejs-audio .mejs-controls .mejs-horizontal-volume-current{background:#58a7c6 !important}
.mejs-audio .mejs-controls .mejs-time-rail span,.mejs-audio .mejs-controls .mejs-horizontal-volume-slider div{border-radius:0 !important}
.mejs-audio .mejs-controls .mejs-horizontal-volume-slider{margin-top:1px !important;float: right;
margin-top: -31px!important;
}
.mejs-audio .mejs-controls .mejs-horizontal-volume-slider div{height:4px !important}

/* ==========================================================================
    13.1 ICON CIRCLE
============================================================================= */

.icon-circle {
position:relative;
width:100%;
height:0;
padding-bottom:99%;
border-radius:50%;
color:#57a7c6;
border:1px solid #57a7c6;
font-size:50px;
margin-bottom:10px
}

.icon-circle i {
position:absolute;
left:0;
right:0;
top:50%;
margin-top:-25px;
text-align:center
}

/* ==========================================================================
    14. BLOG SECTION
============================================================================= */


.blog-item-date {
font-size:15px;
margin:20px 0 10px
}

.blog-item-b .blog-item-title {
line-height:110%;
margin-bottom:5px
}

.blog-item-b .blog-item-small-date {
margin-bottom:15px;
display:block
}

.beta-blog {
padding-bottom:40px;
margin-bottom:40px;
border-bottom:1px solid #e1e1e1
}

.beta-blog img {
width:100%
}

.beta-blog-header {
position:relative;
margin-bottom:5px
}

.beta-blog-type {
display:block;
color:#fff;
background:#f90;
text-align:center;
line-height:48px;
width:48px;
height:48px;
font-size:15px
}

.beta-blog-date {
display:block;
width:48px;
height:48px;
background-color:#3a5c83;
color:#fff;
text-align:center
}

.beta-blog-month {
text-transform:uppercase;
display:block;
line-height:100%;
padding-top:7px
}

.beta-blog-day {
display:block;
font-size:22px;
font-weight:400;
}
.media-body p a{font-weight:400;}
.color-blg-title {color:#008ed0;}

.beta-blog-title {
line-height:100%;
margin-bottom:5px
}

.beta-blog-title a {
color:#484747
}

.beta-blog-title a:hover {
color:#3a5c83
}

.beta-blog-2cols,.beta-blog-3cols,.beta-blog-4cols {
border-bottom:none;
padding-bottom:0
}

.beta-blog-2cols .beta-blog-content>a:first-child {
margin-bottom:20px;
display:block
}

.beta-blog-4cols .beta-blog-title {
margin-bottom:20px
}

.beta-blog-content-preview {
position:relative;
margin-bottom:20px
}

.beta-blog-content-details {
position:absolute;
top:0;
left:0
}

.beta-audio {
margin-bottom:10px;
margin-top:20px
}

.beta-blog-b-preview-container-all {
position:relative
}

.beta-blog-b-preview-container {
position:absolute;
top:0;
left:0
}

.beta-blog-b-preview {
margin-left:70px
}

.beta-blog-c-preview-container-all {
position:relative;
margin-bottom:20px
}

.beta-blog-c-preview-container {
position:absolute;
top:0;
left:0
}

.beta-blog-c-preview {
margin-left:70px
}

.beta-blog-d-preview-container-all {
position:relative;
margin-bottom:20px
}

.beta-blog-d-preview-container {
position:absolute;
top:0;
left:0
}

.beta-blog-d-preview {
margin-left:70px
}

.beta-blog.beta-blog-single {
border-bottom:none
}

.beta-blog-from {
padding:30px 20px
}

.blog-item-white {
background:rgba(255,255,255,0.3);
border:1px solid rgba(255,255,255,0.5);
color:#fff;
padding:25px 20px
}

.blog-item-white-date {
font-size:15px;
padding-bottom:10px
}

.blog-item-white .other-title {
color:#fff
}

.blog-item-white i {
color:#fff
}

.beta-pagination a {
display:inline-block;
width:40px;
height:40px;
border:1px solid #e1e1e1;
text-align:center;
line-height:40px
}

/* ==========================================================================
    14.1 BETA PAGINATION
============================================================================= */

.beta-pagination a i {
color:#606366
}

.beta-pagination a:hover,.beta-pagination a:hover i {
color:#3a5c83
}

.beta-pagination .is-active {
background:#fafafa;
border:1px solid #fafafa
}

/* ==========================================================================
    15. BETA TESTIMONIALS
============================================================================= */

.beta-testimonials .beta-arrow-left,.beta-testimonials .beta-arrow-right {
top:70px
}

.beta-testimonials-slider {
font-family:"Open Sans";
background:#58a7c6;
padding:40px 90px 40px 35px;
font-size:20px;
color:#fff;
line-height:30px
}

.beta-slides-quote {
text-align:center
}

.beta-slides-quote .beta-arrow-left,.beta-slides-quote .beta-arrow-right {
margin-top:30px;
display:inline-block;
position:relative;
width:38px;
height:38px;
border:1px solid #e1e1e1;
line-height:36px
}

.beta-slides-quote .beta-arrow-left i,.beta-slides-quote .beta-arrow-right i {
font-size:10px
}

.beta-slides-quote .beta-arrow-left:hover i,.beta-slides-quote .beta-arrow-right:hover i {
color:#f90
}

/* ==========================================================================
    16. BETA SLIDES TWITTER
============================================================================= */


.beta-slides-twitter {
text-align:center;
color:#fff
}

.beta-slides-twitter h5 {
color:#fff;
line-height:110%
}

.beta-slides-twitter h5 a {
color:#3a5c83
}

.beta-slides-twitter h5 a:hover {
text-decoration:underline
}

.beta-slides-twitter .beta-arrow-left,.beta-slides-twitter .beta-arrow-right {
margin-top:30px;
display:inline-block;
position:relative;
width:38px;
height:38px;
border:1px solid #3a5c83;
line-height:36px
}

.beta-slides-twitter .beta-arrow-left i,.beta-slides-twitter .beta-arrow-right i {
font-size:10px;
color:#3a5c83
}

.beta-slides-twitter .beta-arrow-left:hover i,.beta-slides-twitter .beta-arrow-right:hover i {
color:#fff
}

.beta-filter a {
display:inline-block;
padding:5px 15px
}

.beta-filter a.is-active {
border:1px solid #61acc9
}

.beta-filter-body {
margin-top:25px
}

.beta-filter-body li {
display:inline-block;
float:left;
height:320px;
position:relative;
overflow:hidden;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

/* ==========================================================================
    17. BETA MEDIA QUERY
============================================================================= */

@media only screen and (min-width: 0px) {
.beta-filter-body li {
width:100%
}
}

@media only screen and (min-width: 768px) {
.beta-filter-body li {
width:33.33333%
}
}

@media only screen and (min-width: 940px) {
.beta-filter-body li {
width:20%
}
}

.beta-filter-body a {
width:100%;
height:100%;
display:block
}

.beta-filter-body img {
width:100%;
min-height:100%
}

.beta-filter-body.latest-works li {
height:270px
}

.is-item-hidden {
opacity:.3
}

.beta-filter-body.portfolio-page li {
width:24%;
margin:.5%;
border-radius:50%;
height:273px
}

.beta-filter-body.portfolio-page .work-item-over {
border-radius:50%
}

.beta-filter-body.portfolio-page .work-item-actions {
position:absolute;
top:50%;
left:50%;
-webkit-transform:translate(-50%,-50%);
transform:translate(-50%,-50%)
}

.portfolio-type-b {
border-radius:0!important
}

.portfolio-type-b img {
height:auto!important;
min-height:inherit!important
}

.portfolio-type-b .work-item-over {
border-radius:0!important
}

.portfolio-page a.beta-btn {
width:auto!important;
display:inline-block
}

.portfolio-table tr:first-child th,.portfolio-table tr:first-child td {
border-top:none
}

.portfolio-table tr:last-child th,.portfolio-table tr:last-child td {
border-bottom:none
}

.portfolio-table tr th {
color:#3d3d3d
}

.beta-block {
position:relative
}

.beta-block:hover .beta-block-over {
opacity:1
}

.beta-block-over {
opacity:0;
position:absolute;
z-index:10;
width:100%;
height:100%;
opacity:0;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

.beta-block .over-img-active {
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

.beta-block:hover .over-img-active {
-webkit-transform:scale(1.3,1.3) rotate(15deg);
transform:scale(1.3,1.3) rotate(15deg)
}

.over-a {
background-color:rgba(255,255,255,0.7)
}

.over-a .over-details {
text-align:center;
position:absolute;
left:0;
right:0;
top:50%;
-webkit-transform:translateY(-50%);
transform:translateY(-50%)
}

.over-a .over-details h5 {
line-height:100%;
margin-bottom:0
}

.over-a .over-more {
position:absolute;
bottom:0;
left:0;
width:35px;
height:35px;
display:block;
background:#f90;
text-align:center
}

.over-a .over-more i {
color:#fff;
font-size:13px;
line-height:35px
}

.over-b {
background-color:rgba(255,255,255,0.7)
}

.over-b .over-details {
position:absolute;
top:20px;
left:20px
}

.over-b .over-details h5 {
line-height:100%;
margin-bottom:0
}

.over-b .over-more {
position:absolute;
bottom:10px;
right:10px;
display:inline-block
}

#beta-map {
height:640px
}

.beta-form input,.beta-form textarea {
text-align:center;
width:100%
}

.beta-breadcrumb,.beta-breadcrumb a {
color:#fff
}

.beta-breadcrumb a:hover {
text-decoration:underline
}

.beta-calendar .ui-datepicker-header {
border:1px solid #e1e1e1;
height:38px;
line-height:38px;
overflow:hidden;
margin-bottom:10px
}

.beta-calendar .ui-datepicker-prev {
float:left;
padding-left:10px;
cursor:pointer
}

.beta-calendar .ui-datepicker-next {
float:right;
padding-right:10px;
cursor:pointer
}

.beta-calendar .ui-datepicker-title {
text-align:center
}

.beta-calendar .ui-datepicker-calendar {
width:100%
}

.beta-calendar .ui-datepicker-calendar thead {
margin-bottom:15px
}

.beta-calendar .ui-datepicker-calendar th {
text-align:center
}

.beta-calendar .ui-datepicker-calendar a {
margin:1px;
line-height:35px;
text-align:center;
display:block;
background:#f7f7f7;
width:35px;
height:35px
}

.beta-calendar .ui-datepicker-calendar a.ui-state-active {
background-color:#e8e8e8
}

.beta-calendar .ui-datepicker-calendar a:hover {
background-color:#3a5c83;
color:#fff
}

.beta-author-social i {
font-size:16px;
color:#999da0
}

.beta-author-social a:hover i {
color:#f90
}

.comment.depth-1 {
margin-left:0
}

.comment.depth-2 {
margin-left:60px
}

.comment.depth-3 {
margin-left:120px
}

.comment.depth-4 {
margin-left:180px
}

.comment.depth-5 {
margin-left:240px
}

.aside-menu {
list-style:none;
background:#f8f8f8;
border:1px solid #e5e4e4;
padding:25px
}

.aside-menu li {
padding:10px 0;
border-bottom:1px solid #e5e4e4
}

.aside-menu li:last-child {
border-bottom:none
}

.aside-menu li a {
color:#3d3d3d
}

.aside-menu li a:hover {
color:#909090
}

.aside-menu li.is-active a {
color:#909090
}

.history-navigation {
position:relative;
margin-bottom:55px
}

.history-navigation:before {
content:"";
height:1px;
background:#e1e1e1;
position:absolute;
width:100%;
top:50%
}

.history-navigation a {
display:inline-block;
width:100px;
height:100px;
position:relative;
background-color:#fff;
margin-right:69px;
border:2px solid #57a7c6;
color:#000
}

.history-navigation a.active {
background-color:#57a7c6;
color:#fff
}

.history-navigation a:last-child {
margin-right:0
}

.history-navigation a span {
font-size:23px
}

.beta-partners img {
margin:0 32px
}

.woocommerce-tabs ul.tabs {
list-style:none;
padding-left:5px;
margin-bottom:-1px;
overflow:hidden;
position:relative;
z-index:1
}

.woocommerce-tabs ul.tabs li {
border:1px solid #e1e1e1;
display:inline-block;
position:relative;
z-index:0;
margin:0 -5px;
background-color:#f6f6f6;
border:1px solid #f6f6f6
}

.woocommerce-tabs ul.tabs li a {
display:inline-block;
text-decoration:none;
padding:15px 35px
}

.woocommerce-tabs ul.tabs li.active {
background:#fff;
z-index:2;
border-bottom:1px solid #fff
}

.woocommerce-tabs .panel {
margin:0 0 2em;
padding:30px 30px 20px;
border:1px solid #f6f6f6;
border-radius:0
}

table.shop_attributes {
border:0;
border-top:1px dotted #f1f1f1;
margin-bottom:1.618em;
width:100%
}

table.shop_attributes th {
width:150px;
font-weight:700;
padding:8px;
border-top:0;
border-bottom:1px dotted #eee;
margin:0;
line-height:1.5em
}

table.shop_attributes td {
font-style:italic;
padding:0;
border-top:0;
border-bottom:1px dotted #f1f1f1;
margin:0;
line-height:1.5em
}

table.shop_attributes td p {
margin:0;
padding:8px 0
}

table.shop_attributes .alt td,table.shop_attributes .alt th {
background:rgba(0,0,0,0.025)
}

table.shop_table {
border:1px solid #f1f1f1;
margin:0 -1px 24px 0;
text-align:left;
width:100%;
border-collapse:separate
}

table.shop_table th {
line-height:55px;
text-align:center;
height:55px;
background-color:#f6f6f6;
font-size:18px;
font-family:Open Sans;
border-right:1px solid #eee
}

table.shop_table td {
border-top:1px solid #f1f1f1;
border-right:1px solid #f1f1f1;
padding:38px;
text-align:center;
vertical-align:middle
}

table.shop_table td small {
font-weight:400
}

table.shop_table td select {
width:80px;
height:40px
}

table.shop_table td .amount {
font-size:22px;
color:#000;
font-family:Open Sans
}

table.shop_table th:last-child,table.shop_table td:last-child {
border-right:none
}

table.shop_table td.product-status {
color:#000
}

table.shop_table td.product-price .amount {
color:#a3a2a2
}

table.shop_table tfoot td,table.shop_table tfoot th {
border-top:1px solid #f1f1f1;
text-align:left
}

table.shop_table tfoot td .coupon,table.shop_table tfoot th .coupon {
overflow:hidden;
margin:15px 0
}

table.shop_table tfoot td .coupon input,table.shop_table tfoot th .coupon input {
width:190px
}

table.shop_table tfoot td .coupon>*,table.shop_table tfoot th .coupon>* {
float:left
}

table.shop_table tfoot td .coupon label,table.shop_table tfoot th .coupon label {
font-size:22px;
margin-right:35px;
font-family:Open Sans;
font-weight:inherit
}

table.shop_table tfoot td .coupon input,table.shop_table tfoot th .coupon input {
margin-right:5px
}

table.shop_table tfoot td .beta-btn,table.shop_table tfoot th .beta-btn {
height:37px;
background-color:#3a5c83;
color:#fff
}

table.shop_table tfoot td .beta-btn i,table.shop_table tfoot th .beta-btn i {
color:#fff
}

table.shop_table tfoot td .coupon+.beta-btn,table.shop_table tfoot th .coupon+.beta-btn {
margin-left:100px
}

table.my_account_orders {
font-size:.85em
}

table.my_account_orders th,table.my_account_orders td {
padding:4px 8px;
vertical-align:middle
}

table.my_account_orders .button {
white-space:nowrap
}

table.my_account_orders .order-actions {
text-align:right
}

table.my_account_orders .order-actions .button {
margin:.125em 0 .125em .25em
}

td.product-name .media-body {
text-align:left
}

.table-title {
margin-bottom:5px;
color:#000;
line-height:100%
}

.table-option {
margin-bottom:-5px;
color:#070707
}

.table-edit {
color:#009cd5;
margin-top:10px;
display:inline-block
}

.table-edit:hover {
text-decoration:underline;
color:#009cd5
}

td.product-quantity {
min-width:80px
}

table.beta-shopping-cart-table .product-thumbnail {
min-width:32px
}

table.beta-shopping-cart-table th,table.beta-shopping-cart-table td {
vertical-align:middle
}

table.beta-shopping-cart-table a.remove i {
color:#6a6a6a;
font-size:17px
}

table.beta-shopping-cart-table a.remove:hover i {
color:#f90
}

table.beta-shopping-cart-table td.actions .coupon .input-text {
float:left;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
padding:6px 6px 5px;
margin:0 4px 0 0;
outline:0;
line-height:1em
}

table.beta-shopping-cart-table input {
margin:0;
vertical-align:middle;
line-height:1em
}

.checkout .col-2 h3#ship-to-different-address {
float:left;
clear:none
}

.checkout .col-2 .notes {
clear:left
}

.checkout .col-2 .form-row-first {
clear:left
}

.checkout .create-account small {
font-size:11px;
line-height:13px;
font-weight:400
}

.checkout div.shipping-address {
padding:0;
clear:left;
width:100%
}

.checkout .shipping_address {
clear:both
}

#payment ul.payment_methods {
text-align:left;
padding:1em;
margin:0;
list-style:none outside
}

#payment ul.payment_methods li {
line-height:2em;
text-align:left;
margin:0;
font-weight:400
}

#payment ul.payment_methods li input {
margin:0 1em 0 0
}

#payment ul.payment_methods li img {
vertical-align:middle;
margin:-2px 0 0 .5em;
position:relative
}

#payment div.form-row {
padding:1em
}

#payment div.payment_box {
position:relative;
width:96%;
padding:1em 2%;
margin:1em 0;
font-size:.92em;
line-height:1.5em
}

#payment div.payment_box .wc-credit-card-form-card-number,#payment div.payment_box .wc-credit-card-form-card-expiry,#payment div.payment_box .wc-credit-card-form-card-cvc {
font-size:1.5em;
padding:8px;
background-repeat:no-repeat;
background-position:right
}

#payment div.payment_box .wc-credit-card-form-card-number.visa,#payment div.payment_box .wc-credit-card-form-card-expiry.visa,#payment div.payment_box .wc-credit-card-form-card-cvc.visa {
background-image:url(../images/icons/credit-cards/visa.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.mastercard,#payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,#payment div.payment_box .wc-credit-card-form-card-cvc.mastercard {
background-image:url(../images/icons/credit-cards/mastercard.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.laser,#payment div.payment_box .wc-credit-card-form-card-expiry.laser,#payment div.payment_box .wc-credit-card-form-card-cvc.laser {
background-image:url(../images/icons/credit-cards/laser.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.dinersclub,#payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,#payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub {
background-image:url(../images/icons/credit-cards/diners.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.maestro,#payment div.payment_box .wc-credit-card-form-card-expiry.maestro,#payment div.payment_box .wc-credit-card-form-card-cvc.maestro {
background-image:url(../images/icons/credit-cards/maestro.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.jcb,#payment div.payment_box .wc-credit-card-form-card-expiry.jcb,#payment div.payment_box .wc-credit-card-form-card-cvc.jcb {
background-image:url(../images/icons/credit-cards/jcb.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.amex,#payment div.payment_box .wc-credit-card-form-card-expiry.amex,#payment div.payment_box .wc-credit-card-form-card-cvc.amex {
background-image:url(../images/icons/credit-cards/amex.png)
}

#payment div.payment_box .wc-credit-card-form-card-number.discover,#payment div.payment_box .wc-credit-card-form-card-expiry.discover,#payment div.payment_box .wc-credit-card-form-card-cvc.discover {
background-image:url(../images/icons/credit-cards/discover.png)
}

#payment div.payment_box span.help {
font-size:11px;
line-height:13px;
font-weight:400
}

#payment div.payment_box .form-row {
margin:0 0 1em
}

#payment div.payment_box p:last-child {
margin-bottom:0
}

#payment div.payment_box:after {
content:"";
display:block;
border-right-color:transparent;
border-left-color:transparent;
border-top-color:transparent;
position:absolute;
top:-3px;
left:0;
margin:-1em 0 0 2em
}

.order_details {
margin:0 0 1.5em;
list-style:none
}

.order_details li {
float:left;
margin-right:2em;
text-transform:uppercase;
font-size:.715em;
line-height:1em;
padding-right:2em
}

.order_details li strong {
display:block;
font-size:1.4em;
text-transform:none;
line-height:1.5em
}

.order_details li:last-of-type {
border:none
}

ul.payment_methods,.woocommerce-page #payment ul.payment_methods {
*zoom:1;
text-align:left;
padding:1em;
margin:0;
list-style:none outside
}

.woocommerce #payment ul.payment_methods:before,.woocommerce #payment ul.payment_methods:after,.woocommerce-page #payment ul.payment_methods:before,.woocommerce-page #payment ul.payment_methods:after {
content:" ";
display:table
}

.woocommerce #payment ul.payment_methods:after,.woocommerce-page #payment ul.payment_methods:after {
clear:both
}

.woocommerce #payment ul.payment_methods li,.woocommerce-page #payment ul.payment_methods li {
line-height:2em;
text-align:left;
margin:0;
font-weight:400
}

.woocommerce #payment ul.payment_methods li input,.woocommerce-page #payment ul.payment_methods li input {
margin:0 1em 0 0
}

.woocommerce #payment ul.payment_methods li img,.woocommerce-page #payment ul.payment_methods li img {
vertical-align:middle;
margin:-2px 0 0 .5em;
position:relative
}

.cart-totals {
width:270px;
text-align:center;
border:1px solid #e8e8e8;
margin-top:25px
}

.cart-totals-row {
height:55px;
line-height:55px;
border-top:1px solid #e8e8e8;
font-size:18px;
text-align:left
}

.cart-totals .cart-totals-row:first-child {
background-color:#fdfdfd;
border-top:none
}

.cart-totals-row span:first-child {
padding:0 20px
}

.cart-totals-row span:last-child {
color:#a3a2a2
}

.cart-total-title {
background-color:#fdfdfd;
color:#000;
font-size:22px;
line-height:55px;
margin-bottom:0;
text-align:center
}

.shipping-calculator-button {
font-size:13px;
text-transform:uppercase;
color:#000
}

.beta-btn {
color:#fff;
border:1px solid  #57a7c6;
display:inline-block;
padding:6px 20px
}

.beta-btn:hover {
color:#fff
}

.beta-btn i.shift-left {
margin-left:-5px
}

.beta-btn.primary {
color:#606366;
padding:10px 20px;
line-height:100%
}

.beta-btn.primary:hover {
color:#fff;
background:#3a5c83
}

.beta-btn.primary i {
font-size:10px;
padding-left:5px;
color:#f90
}

.beta-btn-white {
border:none;
background:#fff
}

.beta-btn-asparagus {
border:none;
background:#465945
}

.beta-btn-dim {
border:none;
background:dimgrey
}

.beta-btn-dodger {
border:none;
background:#1e90ff
}

.beta-btn-denim {
border:none;
background:#1560bd
}

.beta-btn-dark-turquoise {
border:none;
background:#00ced1
}

.beta-btn-prussian {
border:none;
background:#003153
}

.beta-btn-puce {
border:none;
background:#c89
}

.beta-btn-rosy {
border:none;
background:#bc8f8f
}

.beta-btn-mauve {
border:none;
background:#966
}

.beta-btn-mountbatten {
border:none;
background:#997a8d
}

.beta-btn-medium-turquoise {
border:none;
background:#48d1cc
}

.beta-btn-medium-sea {
border:none;
background:#3cb371
}

.beta-btn-light-sea {
border:none;
background:#20b2aa
}

.beta-btn-slate {
border:none;
background:#789
}

.beta-btn-3d.beta-btn-asparagus {
border-bottom:3px solid #2f3c2f
}

.beta-btn-3d.beta-btn-dim {
border-bottom:3px solid #4f4f4f
}

.beta-btn-3d.beta-btn-dodger {
border-bottom:3px solid #0077ea
}

.beta-btn-3d.beta-btn-denim {
border-bottom:3px solid #10498f
}

.beta-btn-3d.beta-btn-dark-turquoise {
border-bottom:3px solid #009c9e
}

.beta-btn-3d.beta-btn-prussian {
border-bottom:3px solid #001320
}

.beta-btn-3d.beta-btn-puce {
border-bottom:3px solid #bd647a
}

.beta-btn-3d.beta-btn-rosy {
border-bottom:3px solid #a96f6f
}

.beta-btn-3d.beta-btn-mauve {
border-bottom:3px solid #7a5252
}

.beta-btn-3d.beta-btn-mountbatten {
border-bottom:3px solid #7f6173
}

.beta-btn-3d.beta-btn-medium-turquoise {
border-bottom:3px solid #2eb8b3
}

.beta-btn-3d.beta-btn-medium-sea {
border-bottom:3px solid #2f8d59
}

.beta-btn-3d.beta-btn-light-sea {
border-bottom:3px solid #188781
}

.beta-btn-3d.beta-btn-slate {
border-bottom:3px solid #5f6e7e
}

.beta-btn-3d {
position:relative;
bottom:0
}

.beta-btn-3d:active {
border-bottom:0;
bottom:-3px
}

.beta-btn-2d:hover {
opacity:.8
}

.beta-btn-asparagus i,.beta-btn-dim i,.beta-btn-dodger i,.beta-btn-denim i,.beta-btn-dark-turquoise i,.beta-btn-prussian i,.beta-btn-puce i,.beta-btn-rosy i,.beta-btn-mauve i,.beta-btn-mountbatten i,.beta-btn-medium-turquoise i,.beta-btn-medium-sea i,.beta-btn-light-sea i,.beta-btn-slate i {
color:#fff
}

.beta-btn-small {
padding:8px 20px;
font-size:14px
}

.beta-btn-medium {
padding:10px 20px;
font-size:16px
}

.beta-btn-large {
padding:12px 20px;
font-size:19px
}

.icon-box h5 {
line-height:100%;
margin-bottom:20px
}

.icon-box .pull-left {
color:#57a7c6
}

.icon-box-a .pull-left {
font-size:25px;
margin-right:17px
}

.icon-box-b {
text-align:center
}

.icon-box-b .pull-left {
float:none!important;
font-size:64px;
width:160px;
height:160px;
line-height:160px;
border-radius:50%;
margin:0 auto;
background-color:#fff
}

.icon-box-b .media-body {
background-color:#fff;
padding:80px 40px 40px;
margin-top:-80px
}

.icon-box-c {
text-align:center
}

.icon-box-c .pull-left {
float:none!important;
font-size:64px;
margin:0 auto 35px
}

.icon-box-c .media-body {
padding:0 40px 40px
}

.icon-box-d {
text-align:center
}

.icon-box-d .pull-left {
float:none!important;
font-size:25px;
margin:0 auto 30px
}

.icon-box-d .media-body {
padding:0 40px 40px
}

.icon-box-d h5 {
font-size:23px
}

.icon-box-e {
text-align:center
}

.icon-box-e .pull-left {
float:none!important;
font-size:100px;
margin:0 auto 35px
}

.icon-box-e .pull-left i {
top:50%;
margin-top:-50px
}

.icon-box-f .icon-box-icon {
width:105px;
height:105px;
position:relative;
background-color:#fff
}

.icon-box-f .icon-box-icon i {
font-size:30px;
color:#57a7c6
}

.icon-box-g {
border:1px solid #f6f6f6;
text-align:center
}

.icon-box-g .icon-box-icon {
font-size:30px;
color:#cacaca;
margin-bottom:20px
}

.icon-box-body {
padding:50px 35px 0
}

.icon-box-caption {
position:relative;
background-color:#f6f6f6
}

.icon-box-caption h5 {
margin-bottom:0;
padding:20px 0
}

.icon-box-g:hover .icon-box-icon {
color:#57a7c6
}

.icon-box-g:hover .icon-box-caption {
background-color:#57a7c6;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

.icon-box-g:hover .icon-box-caption h5 {
color:#fff;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

.icon-box-g:hover .indicator-top-small {
border-color:transparent transparent #57a7c6;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

.beta-person {
background:#fff
}

.beta-person-body {
padding:20px 20px 25px;
position:relative
}

.beta-person-body h5 {
line-height:100%;
margin-bottom:0
}

.media-body.beta-person-body {
padding-top:0!important
}

.about-person {

display:block;
position:relative
}

.about-person:hover .about-person-over {
opacity:1
}

.about-person-over {
background:rgba(255,255,255,0.7);
width:100%;
height:100%;
position:absolute;
top:0;
left:0;
opacity:0;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

.about-details {
position:absolute;
left:0;
right:0;
bottom:5px
}

.about-details h5 {
margin-bottom:0;
line-height:100%
}

.beta-slider {
position:relative
}

.beta-arrow-left {
position:absolute;
left:0;
z-index:10
}

.beta-arrow-right {
position:absolute;
right:0;
z-index:10
}

.beta-arrow-left i,.beta-arrow-right i {
font-size:30px;
color:#444
}

.bx-viewport {
height:auto!important
}

.beta-pager {
width:10px;
position:absolute;
top:50%;
right:20px;
-webkit-transform:translateY(-50%);
transform:translateY(-50%);
z-index:9;
text-align:center
}

.beta-pager a {
display:inline-block;
margin-bottom:0
}

.beta-pager-item {
display:block;
border-radius:50%;
width:8px;
height:8px;
background:#fff
}

.beta-pager .active .beta-pager-item {
background:rgba(255,255,255,0.7);
border:1px solid #fff;
width:10px;
height:10px
}

.beta-pager-gallery {
margin-left:-6px;
margin-right:-6px;
display:inline-block
}

.beta-pager-gallery a {
display:inline-block;
width:148px;
height:110px;
margin:5px;
border:2px solid transparent;
position:relative
}

.beta-pager-gallery a.active {
border:2px solid #f90
}

.beta-pager-gallery a img {
position:absolute;
width:auto;
height:auto;
min-width:100%;
min-height:100%;
left:0;
top:0
}

.work-item {
position:relative
}

.work-item:hover .work-item-over {
opacity:1
}

.work-item-over {
position:absolute;
width:100%;
height:100%;
background-color:rgba(87,167,198,0.8);
color:#fff;
text-align:center;
opacity:0;
-webkit-transition:all .6s ease-out;
transition:all .6s ease-out
}

.work-item-over:before {
content:"";
width:0;
height:0;
border-style:solid;
border-width:180px 320px 0 0;
border-color:rgba(255,255,255,0.3) transparent transparent;
position:absolute;
top:0;
left:0
}

.work-item-title {
margin-top:30%
}

.work-item-categories {
text-transform:uppercase;
margin-bottom:15px
}

.work-item-actions {
overflow:hidden
}

.work-item-actions a {
width:55px;
height:55px;
display:inline-block;
background:#fff
}

.work-item-actions a i {
font-size:22px;
color:#555;
line-height:55px
}

.work-item-actions a:hover {
background:#57a7c6
}

.work-item-actions a:hover i {
color:#fff
}

.panel-default {
border-radius:0!important;
border:1px solid #e1e1e1!important
}

.panel-default>.panel-heading {
background:none;
padding:0
}

.panel-default>.panel-heading .panel-title {
font-size:18px;
line-height:20px;
padding:0
}

.panel-default>.panel-heading .panel-title a {
padding:13px 40px 13px 15px;
width:100%;
height:100%;
display:block;
position:relative
}

.panel-default>.panel-heading .panel-title a:hover .accordion-circle {
border:1px solid #3a5c83
}

.panel-default>.panel-heading .panel-title a>i {
font-size:20px;
color:#999da0
}

.panel-default>.panel-heading .panel-title a:hover i {
color:#3a5c83
}

.accordion-circle {
display:block;
width:30px;
height:30px;
border-radius:50%;
border:1px solid #e1e1e1;
position:absolute;
right:5px;
top:50%;
margin-top:-15px;
text-align:center
}

.accordion-circle i {
color:#e1e1e1;
line-height:30px
}

.panel-default>.panel-heading.beta-active-tab {
background-color:#3a5c83;
color:#fff!important
}

.panel-default>.panel-heading.beta-active-tab .panel-title {
color:#fff!important
}

.panel-default>.panel-heading.beta-active-tab .panel-title a:hover {
color:#fff!important
}

.panel-default>.panel-heading.beta-active-tab .accordion-circle {
border:1px solid #fff!important
}

.panel-default>.panel-heading.beta-active-tab i {
color:#fff!important
}

.panel-group.beta-accordion-b .panel-default {
border:none!important;
border-bottom:1px solid #e1e1e1!important
}

.panel-group.beta-accordion-b .panel-default>.panel-heading.beta-active-tab,.panel-group.beta-accordion-b .panel-default>.panel-heading.beta-active-tab .panel-title,.panel-group.beta-accordion-b .panel-default>.panel-heading.beta-active-tab .accordion-circle,.panel-group.beta-accordion-b .panel-default>.panel-heading.beta-active-tab i {
background:none!important;
color:#3a5c83!important
}

.panel-group.beta-accordion-b .panel-default>.panel-heading.beta-active-tab .panel-title a:hover {
color:#000!important
}

.beta-roundabout-container {
width:100%;
height:200px;
margin-top:200px;
margin-bottom:50px
}

.beta-roundabout {
list-style:none
}

.beta-roundabout li {
width:75%;
height:400px;
overflow:hidden
}

.beta-roundabout li img {
width:100%;
height:auto
}

.circliful {
position:relative
}

.circle-text,.circle-info,.circle-text-half,.circle-info-half {
width:100%;
position:absolute;
text-align:center;
display:inline-block;
top:50%;
-webkit-transform:translateY(-50%);
transform:translateY(-50%)
}

.circle-info,.circle-info-half {
color:#999
}

.circliful .fa {
margin:-10px 3px 0;
position:relative;
bottom:4px
}

.beta-blockquote {
padding:40px;
margin:10px 0
}

.beta-blockquote-b {
border:1px solid #e1e1e1;
padding-left:100px;
position:relative
}

.beta-blockquote-b .quote-icon {
position:absolute;
top:50px;
left:40px;
font-size:30px;
color:#999da0
}

.beta-quote {
margin-top:10px;
margin-bottom:10px
}

.beta-quote-left {
border-left:3px solid #57a7c6;
padding-left:20px
}

.beta-quote-right {
border-right:3px solid #57a7c6;
padding-right:20px
}

.beta-callout-box {
background:#f6f6f6
}

.beta-callout-box-a .pull-left {
width:270px;
height:240px;
line-height:240px;
background-color:#e8e8e8;
text-align:center;
font-size:100px;
color:#3a5c83
}

.beta-callout-box-a .media-body {
padding:45px 25px
}

.beta-callout-box-b .pull-left {
font-size:100px;
color:#f90;
float:none!important;
text-align:center
}

.beta-callout-box-b {
padding:30px 100px;
text-align:center
}

.beta-callout-box-c {
padding:65px 65px 30px
}

.beta-callout-box-d {
text-align:center;
padding:55px 140px;
color:#fff
}

.beta-callout-box-d h1 {
color:#fff
}

.beta-callout-box-d .beta-btn {
background:#fff
}

.beta-testimonial-body {
padding:30px;
border:1px solid #e1e1e1;
background:#f6f6f6;
position:relative;
margin-bottom:10px
}

.beta-testimonial-triangle {
position:absolute;
width:0;
height:0;
border-style:solid;
border-width:30px 33px 0 0;
border-color:#f6f6f6 transparent transparent;
left:38px;
bottom:-29px
}

.beta-testimonial-title {
font-size: 25px;
margin-bottom: 0;

}
.beta-testimonial-position{font-size: 16px;
line-height: 34px;}

.beta-testimonial.abs-testimonial {
color:#fff
}

.beta-testimonial.abs-testimonial .beta-testimonial-body {
background-color:rgba(255,255,255,0.3);
border:1px solid rgba(225,225,225,0.5)
}

.beta-testimonial.abs-testimonial .beta-testimonial-triangle {
border-color:rgba(255,255,255,0.3) transparent transparent;
bottom:-31px
}

.beta-features {
background:#f6f6f6;
position:relative
}

.beta-features i {
color:#3a5c83;
font-size:100px;
text-align:center;
vertical-align:middle
}

.indicator-bottom {
position:absolute;
bottom:-26px;
left:50%;
-webkit-transform:translateX(-50%);
-ms-transform:translateX(-50%);
transform:translateX(-50%);
width:0;
height:0;
border-style:solid;
border-width:26px 26px 0;
border-color:#f6f6f6 transparent transparent
}

.indicator-top {
position:absolute;
top:-26px;
left:50%;
-webkit-transform:translateX(-50%);
-ms-transform:translateX(-50%);
transform:translateX(-50%);
width:0;
height:0;
border-style:solid;
border-width:0 26px 26px;
border-color:transparent transparent #f6f6f6
}

.indicator-top-small {
position:absolute;
top:-10px;
left:50%;
-webkit-transform:translateX(-50%);
-ms-transform:translateX(-50%);
transform:translateX(-50%);
width:0;
height:0;
border-style:solid;
border-width:0 10px 10px;
border-color:transparent transparent #f6f6f6
}

.beta-pricing {
border:1px solid #e1e1e1
}

.beta-pricing th {
text-align:center
}

.beta-pricing td {
text-align:center;
padding:15px 0!important
}

.beta-pricing.table>thead>tr>th {
border-bottom:none
}

.beta-pricing thead {
font-family:Open Sans
}

.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td {
border-bottom:1px solid #e1e1e1
}

.beta-pricing thead td {
background-color:#f6f6f6;
padding:25px 0 20px!important
}

.beta-pricing thead td span.price-currency {
color:#58a7c6;
font-size:35px
}

.beta-pricing thead td span.price-amount {
color:#58a7c6;
font-size:65px
}

tfoot {
background-color:#f6f6f6
}

.beta-pricing.table tfoot>tr>td {
padding:30px 0!important
}

tfoot td a {
background-color:#3a5c83;
color:#fff
}

tfoot td a i {
color:#fff
}

.beta-pricing.beta-pricing-b {
border-collapse:separate;
border-spacing:10px 0;
border:none
}

.beta-pricing.beta-pricing-b thead tr>th {
border-top:1px solid #e1e1e1!important
}

.beta-pricing.beta-pricing-b.table>tbody>tr>td,.beta-pricing.beta-pricing-b.table>thead>tr>td {
border-bottom:none!important
}

.beta-pricing.beta-pricing-b td,.beta-pricing.beta-pricing-b th {
border-left:1px solid #e1e1e1;
border-right:1px solid #e1e1e1
}

.beta-pricing.beta-pricing-b th h4 {
color:#fff
}

.beta-pricing.beta-pricing-b th:nth-child(1) {
background:#5c92cf
}

.beta-pricing.beta-pricing-b th:nth-child(2) {
background:#406590
}

.beta-pricing.beta-pricing-b th:nth-child(3) {
background:#24466e
}

.beta-pricing.beta-pricing-b th:nth-child(4) {
background:#1e2f43
}

.beta-pricing.beta-pricing-b tfoot td:nth-child(1) a {
background:#5c92cf
}

.beta-pricing.beta-pricing-b tfoot td:nth-child(2) a {
background:#406590
}

.beta-pricing.beta-pricing-b tfoot td:nth-child(3) a {
background:#24466e
}

.beta-pricing.beta-pricing-b tfoot td:nth-child(4) a {
background:#1e2f43
}

.beta-counter {
position:relative;
text-align:center
}

.beta-counter i {
font-size:45px;
color:#3a5c83
}

.beta-counter-value {
font-size:40px;
border-bottom:1px solid #e1e1e1;
line-height:75px;
font-family: "Open Sans",sans-serif;
}

.beta-counter-title {
font-size:20px;
margin-top:20px;
font-family: "Open Sans",sans-serif;
}

.beta-progress .progress {
box-shadow:none;
height:11px;
border-radius:5px;
margin-bottom:10px
}

.beta-progress .progress-bar {
background-color:#008ed0
}

.beta-progress p {
margin-bottom:5px
}

.beta-message {
background:#3a5c83;
padding:12px 25px;
color:#fff
}

.beta-message i {
font-size:40px;
color:#fff
}

.beta-message-text {
line-height:40px
}





.contact-info {
position:relative;
padding-left:35px
}

.contact-info i {
font-size:35px;
color:#f90;
position:absolute;
top:0;
left:0
}

.copyright {
background:#1a1a1a;
height:50px;
color:#fff;
line-height:50px;
overflow:hidden
}

.pay-options a {
display:inline-block;
margin-left:5px
}

.contact-title {
line-height:100%;
font-size:20px;
color:#000
}

.contact-form input {
width:60%
}

.contact-form textarea {
width:80%
}



@media (max-width: 1200px) {
.beta-banner-layer.beta-btn {
display:none
}

.history-navigation a {
margin-right:10px
}

.history-navigation:before {
background:none
}
}

@media (max-width: 993px) {
.beta-sales-item .pull-left {
float:none!important
}

.beta-person .pull-left {
float:none!important
}

.media-body.beta-person-body {
padding:20px 0!important
}
}

@media (max-width: 767px) {
.space {
line-height:5px
}

.space10 {
line-height:5px
}

.space15 {
line-height:5px
}

.space20 {
line-height:6px
}

.space25 {
line-height:7px
}

.space30 {
line-height:8px
}

.space35 {
line-height:9px
}

.space40 {
line-height:10px
}

.space45 {
line-height:11px
}

.space50 {
line-height:12px
}

.space55 {
line-height:13px
}

.space60 {
line-height:14px
}

.space65 {
line-height:15px
}

.space70 {
line-height:16px
}

.space75 {
line-height:17px
}

.space80 {
line-height:18px
}

.space85 {
line-height:19px
}

.space90 {
line-height:20px
}

.space95 {
line-height:25px
}

.space100 {
line-height:25px
}

.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11 {
width:100%
}

.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12 {
margin-bottom:10px
}

.container {
width:400px;
}

.content {
padding:15px 0
}

.main-content.pull-right {
float:none!important
}

.main-content.pull-left {
float:none!important
}

.beta-menu-toggle {
overflow:hidden;
height:40px;
line-height:40px
}

.beta-menu-toggle i {
font-size:25px;
color:#e1e1e1;
line-height:40px
}

.beta-menu-toggle-text {
float:left;
margin-top:13px;
line-height:100%;
margin-right:10px;
display:inline-block
}

.main-menu {
position:absolute;
z-index:1010;
width:79%
}

.main-menu>ul {
border:1px solid #e1e1e1;
box-shadow:0 1px 1px rgba(225,225,225,0.3);
display:none
}

.main-menu ul {
width:100%;
background:#fff
}

.main-menu ul li {
float:none;
width:100%
}

.main-menu ul.sub-menu {
display:block;
position:relative
}

.main-menu ul.sub-menu ul.sub-menu {
display:block;
position:relative;
left:0
}

.main-menu li.current-menu-item {
background-color:#fff!important;
color:#000!important
}

.main-menu li.current-menu-item>a {
color:#3a5c83;
font-weight:700
}

.sub-menu li:hover,.children li:hover {
background:#fff!important
}

.sub-menu li:hover a,.children li:hover a {
color:#000!important
}



.history-navigation {
display:block;
padding-bottom: 35px;
width: 65%;
margin: 0 auto;

}
.history-navigation a{width:20px; height:20px;color:transparent;
}
.history-navigation a.active span{position: absolute;
top: 35px;
color: #000;
left: 22px;}

.beta-blog {
padding-bottom:10px;
margin-bottom:10px
}

.form-block #apartment {
margin-left:0
}

.form-block input,.form-block select,.beta-form-checkout textarea {
width:100%
}

.contact-form textarea {
width:100%
}

.beta-callout-box-a .pull-left {
float:none!important;
width:100%
}

.beta-callout-box-a .media-body {
padding:10px
}

.beta-callout-box-b,.beta-callout-box-c,.beta-callout-box-d {
padding:10px
}

.beta-callout-box-c .pull-right,.beta-callout-box-c .pull-left {
float:none!important
}

.beta-callout-box-c .media {
width:100%
}

.beta-roundabout-container {
height:10px
}

.beta-person-body {
padding:20px 0
}

.abs-fullwidth .beta-person {
text-align:center;
padding:10px
}

.beta-person-full img {
width:100%
}

.beta-person-full .beta-person-body {
padding:10px
}

.xs-margin-top-150 {
margin-top:150px
}

.beta-filter-body.portfolio-page li {
width:100%
}

.col-sm-9.pull-right {
float:none!important
}

.widget-main {
margin-bottom:15px
}


hr {
margin-top:10px;
margin-bottom:10px
}

.mb50 {
margin-bottom:20px
}

.beta-btn {
margin-bottom:5px
}

.abs-fullwidth {
overflow:hidden
}

.comment.depth-1 {
margin-left:0
}

.comment.depth-2 {
margin-left:10px
}

.comment.depth-3 {
margin-left:20px
}

.comment.depth-4 {
margin-left:30px
}

.comment.depth-5 {
margin-left:40px
}

.beta-sales-item .pull-left {
float:left!important
}
}

@media (max-width: 450px) {
.main-menu{width:88%;}
}

/* ==========================================================================
    18. FOOTER SECTION
============================================================================= */

#footer {
background:#172431;
color:#7b8fa3;
padding:40px 0 50px
}

#footer a {
color:#7b8fa3
}
#footer.color-div a {color:gray}
#footer a:hover {
color:#f90
}
.color-div p{color:gray;}

#footer h4.widget-title {
color:#adbac8;
margin-bottom:22px
}
#footer.color-div h4.widget-title{color:gray;}

#footer ul {
list-style:none
}

#footer ul li {
margin-bottom:10px
}

#footer ul li i {
color:#f90;
margin-right:5px;
font-size:10px
}

#footer input {
background:#232f3c;
border:1px solid #4e5862;
margin-bottom:10px
}

#footer button {
background:none;
border:1px solid #4e5862;
color:#adbac8;
height:37px;
padding:0 15px
}
#footer.color-div button {border:1px solid gray;}

#footer button:hover {
color:#f90;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
transition:all .2s ease-in-out
}

#footer button i {
margin-left:5px;
font-size:10px;
color:#f90
}


.clear{clear:both;}
@media (max-width: 767px) and (min-width: 100px){
html{overflow-x:hidden;}
#content{padding: 12px 0;}
}
@media (max-width: 400px) and (min-width: 100px){
.container{width:100%}
body{padding:0px!important; margin:0px!important; border:0px!important;}
html{overflow-x:hidden;}
}
@media (max-width: 416px) and (min-width: 100px){
.container{width:100%}
body{padding:0px!important; margin:0px!important; border:0px!important;}
html{overflow-x:hidden;}
}
@media (max-width: 406px) and (min-width: 100px){
.auto-width-left{width:59%;}
.auto-width-left ul li{width:50%;}
.auto-width-left ul li a{padding:0px;}
.auto-width-right{width:41%;}
.auto-width-right ul li a{padding:0px 4px;}
.pull-left.auto-width:{width:auto!important;}
.beta-comp from{width:70%!important;}
a#logo img{max-width:45%!important;}
.beta-rotator canvas{width:98%!important;}
}
@media (max-width: 570px) and (min-width: 100px){
.beta-relative .pull-right{float:left!important;width:100%;}
.beta-components.space-left .beta-comp{margin-left:0px;}
.pull-right .beta-comp #searchform{width:100%;}
.beta-comp{width:100%;}
.beta-select i.fa-chevron-down{padding-top:10px; float:right;}
.cart{margin-top: 10px;}


}
@media (max-width: 1000px) and (min-width: 100px){

h2.beta-banner-layer.text-right{font-size: 1.78231em;}
p.beta-banner-layer.text-right{font-size:10px;top: 58px!important;}
}
@media (max-width: 1195px) and (min-width: 1000px){
.round-portfolio #portfolioitems{margin-left: 5%!important;}
}
@media (max-width: 999px) and (min-width: 996px){
.round-portfolio #portfolioitems{margin-left: 6%!important;}
}
@media (max-width: 995px) and (min-width: 400px){
.round-portfolio #portfolioitems{margin-left: 11%!important;}
}
@media (max-width: 399px) and (min-width: 332px){
.round-portfolio #portfolioitems{margin-left: 4.5%!important;}
}
@media (max-width: 331px) and (min-width: 100px){
.round-portfolio #portfolioitems{margin-left: 1%!important;}
}

@media (max-width: 990px) and (min-width: 767px){
#beta-instagram-feed a{width:25%!important; height:25%!important}
}

@media (max-width: 348px) and (min-width: 100px){
.slogan{width:100%; padding:0px; border:none; margin:0px; text-align:center;}
a#logo img{margin-left: 81px;}
}

@media (max-width: 400px) and (min-width: 100px){
.single-item-options select.wc-select{margin-bottom: 10px;}
}

@media (max-width: 989px) and (min-width: 100px){
.media, .media-body{overflow: visible!important;}
}


/**product**/
@media (max-width: 767px) and (min-width: 100px){
.single-item{width:100%;}
.single-item img{width:100%;}
.beta-banner img{width:100%;}
.blog-item-b img{width:100%;}
}
/**product**/
@media (max-width: 1021px) and (min-width: 774px){
.beta-about-person{width:120px!important; float:left!important;height:120px;}
.beta-about-person img{width:120px;}
span.about-person-over{width:120px; height:120px;}
}
@media (max-width: 773px) and (min-width: 100px){
.beta-about-person{width:45%!important; float:left!important;}
.beta-about-person img{width:100%;}

}
@media (max-width: 1700px) and (min-width: 1000px){
.isotope-item.col-sm-4{ width:33%;}
.isotope-item.col-sm-3{ width:24.8%;}

}
@media (max-width: 1700px) and (min-width: 769px){
ul.l-inline.ov{display:block!important;}

}
@media (max-width: 1199px) and (min-width: 100px){
.form-block #apartment {
margin-left: 0px;}
}
@media (max-width: 764px) and (min-width: 700px){
.work-item-title {
margin-top: 11%;
}
.portfolioitems-holder .work-item-actions a{left: 43%!important;}
}
@media (max-width: 699px) and (min-width: 422px){
.page-port .work-item-title {
margin-top: 11%;}
.page-port  .portfolioitems-holder .work-item-actions a{left: 40%!important;}
}
@media (max-width: 421px) and (min-width: 100px){
.page-port  .work-item-title {
margin-top: 11%;}
.page-port  .portfolioitems-holder .work-item-actions a{left: 35%!important;}
}



.icon-box-e:hover i{color:#f90;
-moz-transition: all 0.8s ease-out;
-o-transition: all 0.8s ease-out;
-ms-transition: all 0.8s ease-out;
transition: all 0.8s ease-out;}
.icon-box-e i {color:#57a7c6;
-moz-transition: all 0.10s ease-out;
-o-transition: all 0.10s ease-out;
-ms-transition: all 0.10s ease-out;
transition: all 0.10s ease-out;}
.icon-box-b:hover i{color:#f90;
-moz-transition: all 0.8s ease-out;
-o-transition: all 0.8s ease-out;
-ms-transition: all 0.8s ease-out;
transition: all 0.8s ease-out;}
.icon-box-b i {color:#57a7c6;
-moz-transition: all 0.10s ease-out;
-o-transition: all 0.10s ease-out;
-ms-transition: all 0.10s ease-out;
transition: all 0.10s ease-out;}
.icon-box-c:hover i{color:#f90;
-moz-transition: all 0.8s ease-out;
-o-transition: all 0.8s ease-out;
-ms-transition: all 0.8s ease-out;
transition: all 0.8s ease-out;}
.icon-box-c i {color:#57a7c6;
-moz-transition: all 0.10s ease-out;
-o-transition: all 0.10s ease-out;
-ms-transition: all 0.10s ease-out;
transition: all 0.10s ease-out;}
.icon-box-a:hover i{color:#f90;
-moz-transition: all 0.8s ease-out;
-o-transition: all 0.8s ease-out;
-ms-transition: all 0.8s ease-out;
transition: all 0.8s ease-out;}
.icon-box-a i {color:#57a7c6;
-moz-transition: all 0.10s ease-out;
-o-transition: all 0.10s ease-out;
-ms-transition: all 0.10s ease-out;
transition: all 0.10s ease-out;}
.ratio-1x1:hover i{color:#f90;
-moz-transition: all 0.8s ease-out;
-o-transition: all 0.8s ease-out;
-ms-transition: all 0.8s ease-out;
transition: all 0.8s ease-out;}
.ratio-1x1 i {color:#57a7c6;
-moz-transition: all 0.10s ease-out;
-o-transition: all 0.10s ease-out;
-ms-transition: all 0.10s ease-out;
transition: all 0.10s ease-out;}

.beta-person-full:hover img{-webkit-transition: all 0.4s ease-in-out;
   -moz-transition: all 0.4s ease-in-out;
   -o-transition: all 0.4s ease-in-out;
   -ms-transition: all 0.4s ease-in-out;
   transition: all 0.4s ease-in-out;
-webkit-transform: scale(1.8);
-moz-transform: scale(1.8);
-o-transform: scale(1.8);
-ms-transform: scale(1.8);
transform: scale(1.8);
-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
filter: alpha(opacity=100);}
.beta-person-full img{-moz-transition: all 0.4s ease-in-out;
   -o-transition: all 0.4s ease-in-out;
   -ms-transition: all 0.4s ease-in-out;
   transition: all 0.4s ease-in-out;}
.bets-img-hover{width:100%; overflow:hidden;}


.blog-item:hover img{-webkit-transition: all 0.4s ease-in-out;
   -moz-transition: all 0.4s ease-in-out;
   -o-transition: all 0.4s ease-in-out;
   -ms-transition: all 0.4s ease-in-out;
   transition: all 0.4s ease-in-out;
-webkit-transform: scale(1.8);
-moz-transform: scale(1.8);
-o-transform: scale(1.8);
-ms-transform: scale(1.8);
transform: scale(1.8);
-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
filter: alpha(opacity=100);}
.blog-item img{-moz-transition: all 0.4s ease-in-out;
   -o-transition: all 0.4s ease-in-out;
   -ms-transition: all 0.4s ease-in-out;
   transition: all 0.4s ease-in-out;}
   
.beta-timer{background: white;
float: left;
padding: 10px 14px;
position: absolute;
top: 31px;
left:0px;
font-family: "Open Sans",sans-serif;font-size:15px;}
.beta-timer span{font-size:20px;}
.beta-timer:after{position: absolute;
top: 23px;
right: -20px;
content: '';
border-left: 10px solid white;
border-right: 10px solid transparent;
border-top: 10px solid transparent;
border-bottom: 10px solid transparent;}
.blog-item-title .other-title a{color:#000;}

.isotope-item {
    z-index: 2;
}

.isotope-hidden.isotope-item {
    pointer-events: none;
    z-index: 1;
}

.isotope,
.isotope .isotope-item {
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -ms-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    transition-duration: 0.8s;
}

.isotope {
    -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
    -ms-transition-property: height, width;
    -o-transition-property: height, width;
    transition-property: height, width;
}

.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property:    -moz-transform, opacity;
    -ms-transition-property:     -ms-transform, opacity;
    -o-transition-property:      -o-transform, opacity;
    transition-property:         transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -ms-transition-duration: 0s;
    -o-transition-duration: 0s;
}
#portfolioitems{width:101%;}
.portfolioitems-holder{overflow:hidden;}
.beta-filter ul#filters li{list-style:none; display: inline;}
.beta-filter ul#filters li.active a{display: inline-block;
padding: 5px 15px;border: 1px solid #61acc9;}

.portfolioitems-holder .work-item-actions a{display: block;
position: relative;
float: left;
left: 82px;}

.beta-portfolio-slider a.beta-arrow-left{top: -45px;}
.beta-portfolio-slider a.beta-arrow-right{top: -45px;}

.portfolioitems-holder.beta-overflow .work-item-actions a{display: block;
position: relative;
float: left;
left: 0px;}
.beta-filter-body.portfolio-page li{width: 270px;height: 270px;}
li.box-port-filter {display:inline;}

.box-port-filter p.work-item-actions{position: absolute;
top: 40%;
left: 35%;}
.nivo-prevNav {     
    text-indent: -9999px;
    width: 40px;
    height: 40px;
    right: 46px;
    background-color: #f6f6f6;
    background-image: url('../images/nivo-left.png');
    background-repeat: no-repeat;
    background-position: center;
    
    -webkit-transition: all 0.2s ease 0s;
    -moz-transition: all 0.2s ease 0s;
    -o-transition: all 0.2s ease 0s;
    -ms-transition: all 0.2s ease 0s;
    transition: all 0.2s ease 0s;
}

.nivo-nextNav {    
    text-indent: -9999px;
    width: 40px;
    height: 40px;
    right: 3px;
    background-color: #f6f6f6;
    background-image: url('../images/nivo-right.png');
    background-repeat: no-repeat;
    background-position: center;
    
    -webkit-transition: all 0.2s ease 0s;
    -moz-transition: all 0.2s ease 0s;
    -o-transition: all 0.2s ease 0s;
    -ms-transition: all 0.2s ease 0s;
    transition: all 0.2s ease 0s;
}

.nivo-prevNav:hover{
    background-image: url('../images/nivo-left-hover.png');
    background-color:#f90;
}

.nivo-nextNav:hover{
    background-image: url('../images/nivo-right-hover.png');
    background-color:#f90;
}
.nivoSlider{
    position: relative;  
    margin: 0 auto;
    height: auto;
    z-index: 100;
    overflow: hidden;
    float: left;
    background: #eee url('../images/loading.gif') no-repeat center;
    width: 100%;
    min-height: 180px;
}
.beta-related-port a{position:relative;}
.beta-related-port .work-item-actions{top: 40%;
position: relative;}
.abs-fullwidth{position:relative!important;}
.abs-fullwidth-height{display:none;}

/*********************/
/*menu*/
/*********************/

.main-menu>ul.l-inline> li> a{padding: 10px 22px;

    -webkit-font-smoothing: antialiased;
    transition: all 0.17s ease-in-out;
    -moz-transition: all 0.17s ease-in-out;
    -webkit-transition: all 0.17s ease-in-out;
    -o-transition: all 0.17s ease-in-out;
}
.main-menu li{position: relative;}
.main-menu ul.l-inline> li> a:hover{background: #3a5c83;color:white;
transition: all 0.17s ease-in-out;
    -moz-transition: all 0.17s ease-in-out;
    -webkit-transition: all 0.17s ease-in-out;
    -o-transition: all 0.17s ease-in-out;
    -webkit-backface-visibility: hidden;}
.sub-menu{z-index:999;top: 31px;
transition: all 0.17s ease-in-out;
    -moz-transition: all 0.17s ease-in-out;
    -webkit-transition: all 0.17s ease-in-out;
    -o-transition: all 0.17s ease-in-out;}
.main-menu li:hover>.sub-menu{-webkit-transform: rotateX(0deg);
      -moz-transform: rotateX(0deg);
      -ms-transform: rotateX(0deg);
      -o-transform: rotateX(0deg);
      transform: rotateX(0deg);
      -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
      -moz-transition: -moz-transform 0.4s, opacity 0.1s;
      -mos-transition: -mos-transform 0.4s, opacity 0.1s;
      -o-transition: -o-transform 0.4s, opacity 0.1s;
      transition: transform 0.4s, opacity 0.1s;
      -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.12);
-moz-box-shadow:    0px 0px 20px 0px rgba(0, 0, 0, 0.12);
box-shadow:         0px 0px 20px 0px rgba(0, 0, 0, 0.12);}




.single-item-header{position:relative; overflow:hidden;}
.ribbon{z-index:999;}
.single-item:hover a.add-to-cart{background: #f90;}
.single-item:hover img{-webkit-transform: scale(1.3, 1.3) ;
transform: scale(1.3, 1.3) ;}


.single-item img{-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
-o-transition: all 0.2s ease-in-out;
-ms-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;}

/*********/
/**price table**/
/*********/

.col-sm-3.beta-pricing{padding:0px;}
.pri-title{background: #5c92cf;
width: 100%;
float: left;
color:white;
text-align:center;
}
.pri-title h4{color:white; padding: 8px 0px;
line-height: 39px;}
.beta-pricing span.pri-title h4{color:white;padding: 8px 0px 8px 0px;}
.beta-pricing span.pri-amo{padding: 60px 0px 35px 0px;
float: left;
width: 100%;
text-align: center;
background-color: #f6f6f6;
font-family: Open Sans;
}
.beta-pricing span.price-amount{color: #58a7c6;
font-size: 65px;}
.beta-pricing span.price-currency{color: #58a7c6;
font-size: 35px;}
.beta-pricing span.beta-price-list{float:left;width:100%;background:white;text-align:center;border-top: 1px solid #e1e1e1;border-left: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1;padding: 15px 0; float:left;}
.beta-pricing span.beta-price-button{float:left;width:100%;background:white;text-align:center;border-top: 1px solid #e1e1e1;padding: 30px 0;background-color: #f6f6f6; float:left;border-left: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1;border-bottom: 1px solid #e1e1e1;}
.beta-pricing span.beta-price-button a{background: #406590;}

.main-menu ul li.active> a{background:#3a5c83; color:white!important;}
.sub-menu li.active, .children li.active{background:#3a5c83; color:white!important;}
.sub-menu li a, .children li a{font-size:14px;}
.sub-menu{width:240px;}
#logo{padding-right: 7px;}
.beta-highlight{background-color:#3a5c83;}
.bg-color10{background-color:#58a7c6;}
.parent-active>a{background:#3a5c83; color:white;}
.sub-menu li.parent-active, .children li.parent-active{background:#3a5c83; }
.sub-menu li.parent-active>a, .children li.parent-active>a{color:white!important;}
.tp-bullets.simplebullets.navbar{top: 40%;
width: 100%; left:0px!important; bottom:0px!important; margin-left:0px!important;
}
.tp-bullets.simplebullets.navbar{background:transparent!important; border:none;height:0px!important;display:none;}
.tp-bullets.simplebullets.navbar .bullet{display:none;}
.bullet{display:none;}
.fullwidthbanner-container:hover .tp-bullets.simplebullets.navbar{display:block;}
.beta-banner:hover .tp-bullets.simplebullets.navbar{display:block;}

.tp-leftarrow.navbar{background: url(../vendors/revolution-slider/assets/large_left.png) no-Repeat 0px 9px;
width: 40px;
height: 40px;}
.tp-rightarrow.navbar{background: url(../vendors/revolution-slider/assets/large_right.png) no-Repeat -1px 9px;
width: 40px;
height: 40px;
position:absolute; right:15px;top:0px;}
.tp-leftarrow.default{display:none;}
.tp-rightarrow.default{display:none;}
.fullwidthbanner-container:hover .tp-leftarrow.default{display:block;}
.fullwidthbanner-container:hover .tp-rightarrow.default{display:block;}
.beta-banner:hover .tp-leftarrow.default{display:block;top:40%!important; margin-top:0px!important;}
.beta-banner:hover .tp-rightarrow.default{display:block;}
.beta-map iframe{width:100%; height:550px;}
.beta-calendar{overflow:auto;}

.beta-paralex{background:url(../images/abs_img1.jpg) repeat-y center bottom; }
.beta-paralex2{background:url(../images/about1.jpg) repeat-y center bottom; }
.beta-paralex3{background:url(../images/abs_img3.jpg) repeat-y center top; }
.beta-paralex4{background:url(../images/abs_img2.jpg) repeat-y center bottom; }
.beta-paralex5{background:url(../images/abs_img4.jpg) repeat-y center bottom; }
.beta-paralex6{background:url(../images/abs_img5.jpg) repeat-y center bottom; }
.beta-paralex7{background:url(../images/abs_img6.jpg) repeat-y center bottom; }
.beta-paralex-back{background-attachment: fixed;background-size: cover;}

.beta-map iframe{border:none;}
.panel-group .panel+.panel{margin-top: 1px;}
.button-body{background-color:#58a7c6;}
.beta-bt2{border:1px solid white;}
.beta-bt2 i{color:white;}
.beta-subscribers input{width:43%;margin-right:0px;margin-bottom: 20px;}



.uc-body2{border: 1px solid #fff;padding: 80px 80px 90px;
background: rgba(255,255,255,0.7);text-align:center;}
.beta-coming{float:none; margin: 0 auto;}
.beta-subscribers button{height:35px;border:none;background:#3a5c83;color:#fff;width:110px}
.beta-subscribers button i{color:#fff;font-size:10px}
.beta-subscribers{margin-top:40px;}
.countdown-amount{font-family: "Open Sans",sans-serif;}

.beta-pager-gallery.port-gallery a{width: 161px;
height: 110px;
margin: 3px 0px 0px 0px;
border:none;}

.elastic-construction2{float:none; margin: 0 auto; padding:100px 0px;}

.beta-rotator canvas{width:100%;}
.beta-rotator {font-family: "Open Sans",sans-serif;}
.history-slider span {font-family: "Open Sans",sans-serif;}
    </style>
<div class="" id="z1">
        <img style="width: 100%;height: 550px;min-width: 768px;padding: none;margin-top: -100px;" src="{{url('../uploads')}}/17.png" alt="">

    </div>
<div class="header-body">
    <div class="container beta-relative">
        <div class="pull-left">
            <a href="{{route('home')}}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
        </div>
        <div class="pull-right beta-components space-left ov">
            

            <div class="beta-comp">
                <div class="cart" id="cart">
                   
                    
                </div> <!-- .cart -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .header-body -->


<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Shopping Cart</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('home')}}">Home</a> / <span>Shopping Cart</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">

        <div class="table-responsive">
            <!-- Shop Products Table -->
            <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-status">Status</th>
                        <th class="product-quantity">Qty.</th>
                        <th class="product-subtotal">Total</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>

  @foreach($products as $product)
                    <tr class="cart_item">
                        <td class="product-name">
                            <div class="media">
                                <img class="pull-left" src="assets/dest/images/shoping3.jpg" alt="">
                                <div class="media-body">
                                    <p class="font-large table-title">{{ $product->name }}</p>
                                    <p class="table-option">Color: Red</p>
                                    <p class="table-option">Size: M</p>
                                    <a class="table-edit" href="#">Edit</a>
                                </div>
                            </div>
                        </td>

                        <td class="product-price">
                            <span class="amount">{{number_format($product->price)}}.VND</span>
                        </td>

                       

                        <td class="product-quantity">
                               
            <form action="{{ url('update-cart') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="row_id" value="{{ $product->rowId }}">
                <input style="height: 35px; text-align: center;" type="number" name="quantity" min="1" value="{{$product->qty}}">
                
                            <button type="submit" class="beta-btn primary" name="update_cart" style="margin-top: 20px">Update Cart <i class="fa fa-chevron-right"></i></button> 
            </form>
                        </td>

                        <td class="product-subtotal">
                            <span class="amount">{{ number_format($product->qty * $product->price) }}.VND</span>
                        </td>

                        <td class="product-remove">
                            <a href="{{ url('delete-product/'.$product->rowId) }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                       @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="6" class="actions">
 <div style="float: right;margin-right: 260px"><h2>Total Price : {{$total}}</h2></div>
                            <div class="coupon">
                                <button type="submit" class="beta-btn primary" name="apply_coupon">Apply Coupon <i class="fa fa-chevron-right"></i></button>
                            </div>

 
                            <div colspan="6" class="actions">
                               <button type="submit" class="beta-btn primary" name="proceed"><a href="{{route('order')}}">Đặt Hàng</a><i class="fa fa-chevron-right"></i></button>
                            </div>

                        </td>
                    </tr>
                </tfoot>
            </table>
            <!-- End of Shop Table Products -->
        </div>

        <!-- .container -->
        <script type="text/javascript">
            $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
                $(this).parents('li').addClass('parent-active');
            }
        });
    });   


</script>
<script>
   jQuery(document).ready(function($) {
    'use strict';

// color box

//color
jQuery('#style-selector').animate({
  left: '-213px'
});

jQuery('#style-selector a.close').click(function(e){
  e.preventDefault();
  var div = jQuery('#style-selector');
  if (div.css('left') === '-213px') {
    jQuery('#style-selector').animate({
      left: '0'
  });
    jQuery(this).removeClass('icon-angle-left');
    jQuery(this).addClass('icon-angle-right');
} else {
    jQuery('#style-selector').animate({
      left: '-213px'
  });
    jQuery(this).removeClass('icon-angle-right');
    jQuery(this).addClass('icon-angle-left');
}
});
});
</script>


@stop