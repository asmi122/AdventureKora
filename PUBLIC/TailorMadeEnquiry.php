    * {
        box-sizing: border-box;
    }
    
    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    /*************CSS for top-bar*******/
    
    .top-bar {
        background: #ebeef5;
        color: #999;
        font-size: 15px;
        padding-bottom: 1px;
        height: 35px;
    }
    
    .top-bar .contact-info {
        margin-right: 20px;
    }
    
    .top-bar ul {
        margin-bottom: 0;
    }
    
    .top-bar .contact-info a {
        font-size: 0.8rem;
    }
    
    .top-bar ul.social-custom {
        margin-left: 20px;
    }
    
    .top-bar ul {
        margin-bottom: 0;
    }
    
    .top-bar ul.social-custom a:hover {
        background: #000000;
        color: #FFF333;
    }
    
    .top-bar ul.social-custom a {
        text-decoration: none !important;
        font-size: 17px;
        width: 26px;
        height: 26px;
        line-height: 26px;
        color: #999;
        text-align: center;
        border-radius: 50%;
        margin: 0;
    }
    
    a:focus,
    a:hover {
        color: #348e7b;
        text-decoration: underline;
    }
    /*****************CSS forCompany Logo****************/
    
    .company-logo img {
        padding: 10px;
        width: 30%;
    }
    
    .company-logo img:hover {
        box-shadow: 1px 1px 3px 1px rgba(238, 238, 11, 1);
    }
    /***********CSS for Navigation Bar***************/
    
    .navbar {
        padding-top: 0px;
        padding-bottom: 0px;
        position: relative;
    }
    /* The sticky class is added to the navbar with JS when it reaches its scroll position*/
    
    .content {
        padding: 16px;
    }
    
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }
    /*Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) 
    */
    
    .sticky+.content {
        padding-top: 60px;
    }
    
    .navbar-nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        color: #ebeef5;
        position: fixed;
        background-color: #333;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    .navbar-nav li {
        float: left;
        color: rgb(248, 226, 226);
        /*border-right:1px solid #bbb;*/
    }
    
    .navbar-nav li:last-child {
        border-right: none;
    }
    
    .navbar-nav li a {
        display: block;
        color: rgb(59, 59, 59);
        text-align: left;
        padding: 10px 30px;
        text-decoration: none;
        font-weight: bold;
    }
    
    .navbar-nav li a:hover {
        background-color: #111;
        color: yellow;
    }
    
    .navbar-nav li a:active {
        color: rgb(236, 236, 167);
    }
    /* Style the search box inside the navigation bar */
    
    .navbar .search-container {
        float: right;
        padding-left: 250px;
        margin-left: 90px;
        position: relative;
    }
    
    .navbar input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }
    
    .navbar .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: yellow;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }
    
    .navbar .search-container button:hover {
        background: #ccc;
    }
    
    @media screen and (max-width: 600px) {
        .navbar .search-container {
            float: none;
        }
        .navbar a,
        .navbar input[type=text],
        .navbar .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }
        .navbar input[type=text] {
            border: 1px solid #ccc;
        }
    }
    /**********************************************/
    /************* CSS for Carousel****************/
    
    .carousel-inner {
        width: 1200px;
        height: 500px;
    }
    
    .carousel-inner .carousel-item img {
        width: 1500px;
        height: 500px;
    }
    
    .carousel-inner .carousel-item h3 {
        color: white;
        font-size: 25px;
    }
    
    .carousel-inner .carousel-item p {
        color: white;
        font-size: 25px;
    }
    
    .carousel-caption {
        height: 180px;
        width: 800px;
        align-items: center;
        margin-bottom: 200px;
        margin-left: 90px;
        margin-top: 30px;
        background: rgba(0, 0, 0, 0.2);
    }
    
    .carousel-caption button {
        background-color: yellow;
        color: black;
    }
    /********************************************/
    /************compny intro section************/
    
    .company-intro h2 {
        font-size: 25px;
        color: #bbb;
        text-align: center;
    }
    
    .company-intro intro-text p {
        text-align: justify;
    }
    
    .company-intro intro-image img {
        width: 400;
        height: 400;
        padding-left: 100px;
    }
    
    .company-intro intro-image img:hover {
        box-shadow: 0 0 2px 1px rgba(238, 238, 11, 1);
    }
    /*********************************************/
    /***********divider*****************/
    
    .divider {
        background-color: #424040;
        height: 60px;
        width: 100%;
        text-align: center;
        position: relative;
    }
    
    .divider h3 {
        font-family: Georgia;
        margin: 10px;
        font-size: 30px;
        font-weight: 500;
        text-align: center;
        padding-left: 32%;
        padding-right: 30%;
        color: yellow;
        position: relative;
    }
    /************featured packages *******************/
    
    .card {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.2s ease-in-out;
        box-sizing: border-box;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #FFF;
    }
    
    .card:hover {
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }
    
    .card.card-inner {
        padding: 10px;
    }
    
    .card .header h2,
    h3 {
        margin-bottom: 0px;
        margin-top: 0px;
    }
    
    .card .header {
        margin-bottom: 5px;
    }
    
    .card img {
        width: 100%;
    }
    
    .card button {
        background-color: yellow;
        color: black;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        align-items: right;
        margin: 10px;
    }
    
    .card button:hover {
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }
    /************CustomiseTrip*************/
    /* Action style box */
    
    .call-to-action-box {
        margin: auto;
        padding: 10px;
    }
    
    .call-to-action-box .action-style-box {
        background: #20201ccb;
        padding: 10px;
        border-radius: 10px;
    }
    
    .action-title {
        color: #fff;
        margin: auto;
        line-height: 20px;
        font-size: 15px;
        text-transform: uppercase;
    }
    
    .find_form {
        width: 100%;
        height: 100%;
        margin-left: 70px;
    }
    
    .find_input {
        width: 100%;
        height: 56px;
        border: none;
        outline: none;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 13px;
        font-weight: 400;
        line-height: 25px;
        color: #FFFFFF;
        border: solid 2px rgba(255, 255, 255, 0.5);
        background: transparent;
    }
    
    .find_item:first-child {
        width: 18%;
    }
    
    .find_item:nth-child(2) {
        width: 18%;
    }
    
    .find_item:nth-child(3) {
        width: 18%;
    }
    
    .find_item:nth-child(4) {
        width: 18%;
    }
    
    .find_item:nth-child(5) {
        width: 18%;
    }
    
    .find_item div {
        font-size: 14px;
        font-weight: 400;
        color: #FFFFFF;
        margin-bottom: 7px;
    }
    
    .dropdown_item_select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
        -webkit-user-select: none;
        background-position: center right;
        background-repeat: no-repeat;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        font-size: 14px;
        font-weight: 400;
        font-style: italic;
        color: #939393 !important;
    }
    
    .dropdown_item_select::-ms-expand {
        display: none;
    }
    
    .find_input:hover {
        border: solid 2px rgba(230, 250, 47, 0.5);
        border-radius: 10px;
    }
    
    .find_input:focus {
        outline-color: rgba(228, 224, 21, 0.5);
        border: solid 2px rgba(254, 67, 91, 0.5);
        border-radius: 10px;
    }
    
    .find_button {
        width: 20%;
        height: 56px;
        margin: 14px;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        font-size: 16px;
        text-align: center;
        font-weight: bold;
        color: #FFFFFF;
        background: #f5203c !important;
        border: rosybrown;
        outline: none;
        cursor: pointer;
    }
    
    .find_button:hover {
        opacity: 0.8;
    }
    
    .find_input::-webkit-input-placeholder {
        font-size: 14px !important;
        font-weight: 400 !important;
        font-style: italic;
        color: #939393 !important;
    }
    
    .find_input:-moz-placeholder {
        font-size: 14px !important;
        font-weight: 400 !important;
        font-style: italic;
        color: #939393 !important;
    }
    
    .find_input::-moz-placeholder {
        font-size: 14px !important;
        font-weight: 400 !important;
        font-style: italic;
        color: #939393 !important;
    }
    
    .find_input:-ms-input-placeholder {
        font-size: 14px !important;
        font-weight: 400 !important;
        font-style: italic;
        color: #939393 !important;
    }
    
    .find_input::input-placeholder {
        font-size: 14px !important;
        font-weight: 400 !important;
        font-style: italic;
        color: #939393 !important;
    }
    /*******************enquiryForm***********************/
    
    .section {
        position: relative;
        height: 170vh;
    }
    
    .section-center {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    
    #booking {
        font-family: 'Josefin Sans', sans-serif;
        background-image: url('../images/form-bg.jpg');
        background-size: cover;
        background-position: center;
    }
    
    #booking::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.2);
    }
    
    .booking-form {
        width: 70%;
        margin: auto;
        padding: 30px;
        border-radius: 3px solid black;
    }
    
    .booking-form transparent-input {
        background-color: rgba(255, 255, 255, 0);
        border: none;
    }
    
    .booking-form .form-header {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .booking-form .form-header h1 {
        font-family: 'Cardo', serif;
        font-weight: 700;
        text-transform: capitalize;
        font-size: 38px;
        color: #c99552;
        margin-top: 0;
        margin-bottom: 0px;
    }
    
    .booking-form .form-group {
        position: relative;
        margin-bottom: 30px;
    }
    
    .booking-form .form-control {
        background-color: #fff;
        height: 30px;
        padding: 0px 20px;
        border: 1px solid #e1e1e1;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 3px;
        color: #6b6b6d;
        font-size: 14px;
    }
    
    .booking-form .form-control::-webkit-input-placeholder {
        color: #e1e1e1;
    }
    
    .booking-form .form-control:-ms-input-placeholder {
        color: #e1e1e1;
    }
    
    .booking-form .form-control::placeholder {
        color: #e1e1e1;
    }
    
    .booking-form .form-control:focus {
        border-color: #c99552;
    }
    
    .booking-form input[type="date"].form-control:invalid {
        color: #e1e1e1;
    }
    
    .booking-form select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    
    .booking-form select.form-control+.select-arrow {
        position: absolute;
        right: 0px;
        bottom: 0px;
        width: 24px;
        text-align: center;
        pointer-events: none;
        background: #e1e1e1;
        height: 40px;
        line-height: 50px;
        color: rgba(107, 107, 109, 0.3);
        font-size: 14px;
        border-radius: 0px 3px 3px 0px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }
    
    .booking-form select.form-control+.select-arrow::after {
        content: '\279C';
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    
    .booking-form select.form-control:focus+.select-arrow {
        background: #c99552;
        color: #fff;
    }
    
    .booking-form .form-label {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 3px;
        display: inline-block;
        color: #c99552;
        text-transform: capitalize;
    }
    
    .booking-form .in-out {
        position: absolute;
        font-size: 24px;
        color: #c99552;
        right: -15px;
        width: 30px;
        height: 30px;
        line-height: 30px;
        z-index: 20;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        bottom: 25px;
    }
    
    .booking-form .form-btn {
        margin-top: 23px;
    }
    
    .booking-form .submit-btn {
        color: #fff;
        background-color: #c99552;
        font-weight: 700;
        height: 50px;
        border: none;
        display: block;
        font-size: 14px;
        width: 100%;
        text-transform: capitalize;
        border-radius: 3px;
    }
    /*-------FOOTER---------*/
    
    .company-partners>div:nth-child(1)>div:nth-child(1) {
        padding-bottom: 10px;
        padding-top: 4px;
        letter-spacing: 40px;
        background-color: #d2d3d4;
    }
    
    #footer {
        background: #0c0c0c;
        padding: 0 0 30px 0;
        color: #fff;
        font-size: 14px;
    }
    
    #footer .footer-top {
        padding: 60px 0 30px 0;
    }
    
    #footer .footer-top .footer-info {
        margin-bottom: 15px;
        background: #191919;
        color: #fff;
        border-top: 4px solid yellow;
        text-align: center;
        padding: 30px 20px;
    }
    
    #footer .footer-top .footer-info h3 {
        font-size: 25px;
        margin: 0 0 20px 0;
        padding: 2px 0 2px 0;
        line-height: 1;
        font-weight: 700;
    }
    
    #footer .footer-top .footer-info p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0;
        font-family: "Raleway", sans-serif;
    }
    
    #footer .footer-top .social-links a {
        font-size: 18px;
        display: inline-block;
        background: black;
        color: yellow;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
        margin-top: 37px;
    }
    
    #footer .footer-top .social-links a:hover {
        background: yellow;
        color: #fff;
        text-decoration: none;
    }
    
    #footer .footer-top h4 {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        position: relative;
        padding-bottom: 12px;
    }
    
    #footer .footer-top .footer-links {
        margin-bottom: 30px;
    }
    
    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    #footer .footer-top .footer-links ul i {
        padding-right: 2px;
        color: #ed5b5b;
        font-size: 18px;
        line-height: 1;
    }
    
    #footer .footer-top .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
    }
    
    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
    }
    
    #footer .footer-top .footer-links ul a {
        color: #fff;
        transition: 0.3s;
        display: inline-block;
        line-height: 1;
    }
    
    #footer .footer-top .footer-links ul a:hover {
        color: yellow;
    }
    
    #footer .copyright {
        border-top: 1px solid #262626;
        text-align: center;
        padding-top: 30px;
    }
    
    #footer .credits {
        padding-top: 5px;
        text-align: center;
        font-size: 13px;
        color: #fff;
    }
    
    #footer .credits a {
        color: #e82d2d;
    }
    
    @media (max-width: 575px) {
        #footer .footer-top .footer-info {
            margin: -20px 0 30px 0;
        }
    }
    /*-------contactUs---------*/
    /*contact us page*/
    
    .contact {
        text-align: center;
        margin: 10px;
        padding: 10px;
    }
    
    .contact .text {
        margin: 40px;
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
    }
    
    .contact .contact-form {
        margin: auto;
    }
    
    .contact .contact-form label {
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
    }
    
    .contact .contact-form input,
    .contact .contact-form textarea {
        width: 50%;
        height: 50px;
        border: 1px solid black;
        background: none;
        outline: none;
        font-size: 16px;
        margin-top: 5px;
        border-radius: 10px;
    }
    
    .contact .button {
        display: inline-block;
        background-color: #484B4F;
        padding: 14px;
        color: white;
        cursor: pointer;
        margin-top: 8px;
        font-weight: bold;
        border-radius: 10px;
        text-decoration: none;
        margin-left: 40px;
    }
    /*******************embendded video youtube***********************/
    
    .videoSection {
        height: 420px;
        width: 100%;
        padding: 10px;
        margin: 10px;
        position: relative;
    }
    
    .videoTextcontainer {
        float: left;
        width: 30%;
        height: auto;
        position: relative;
    }
    
    .videoTextcontainer h4 {
        text-align: center;
        margin: 40px 30px 10px 30px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
    }
    
    .videoTextcontainer button {
        align-items: left;
        text-align: center;
        font-weight: bolder;
        outline-color: black;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        background-image: linear-gradient(to right, #ffff00, #ffff00);
        line-height: 20px;
        margin: 10px 600px 300px 50px;
        font-size: 17px;
        color: rgb(8, 8, 8);
        border: none!important;
    }
    
    .iframe-container {
        float: right;
        width: 70%;
        height: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20%;
        padding-right: 20%;
        align-content: center;
        position: relative;
    }
    
    .iframe-container .iframe {
        position: relative;
        margin: 10px;
    }
    /*******************terms& conditions***********************/
    
    .terms-conditions {
        text-align: center;
        margin: 10px;
        padding: 10px;
    }
    
    .terms-conditions .terms-text {
        margin: 40px;
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
    }
    /*******************enquiryForm***********************/
    
    .enquiry-contact {
        text-align: left;
        margin: 10px;
        padding: 10px;
    }
    
    .enquiry-contact h1 {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bolder;
        color: rgb(156, 143, 26);
        margin: 10px;
        padding: 10px;
    }
    
    .enquiry-contact p {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        color: rgb(196, 178, 46);
        font-size: 20px;
        margin: 10px;
        padding: 10px;
    }
    
    .section {
        position: relative;
        height: 1090px;
    }
    
    .section-center {
        position: relative;
        margin: 10px;
        padding: 10px;
    }
    
    #booking {
        font-family: 'Times New Roman', Times, serif;
        font-size: 15px;
        font-weight: bolder;
    }
    
    #booking::before {
        position: relative;
        background: rgba(228, 196, 196, 0.2);
    }
    
    .booking-form {
        width: 70%;
        margin: auto;
        padding: 30px;
        border-radius: 3px solid black;
    }
    
    .booking-form transparent-input {
        background-color: rgba(255, 255, 255, 0);
        border: none;
    }
    
    .booking-form .form-header h1 {
        font-family: 'Times New Roman', Times, serif;
        font-weight: 700;
        text-transform: capitalize;
        font-size: 38px;
        color: #f5de11;
        margin-top: 0;
        margin-bottom: 0px;
    }
    
    .booking-form .form-group {
        position: relative;
        margin-bottom: 30px;
    }
    
    .booking-form .form-control {
        background-color: #fff;
        height: 30px;
        padding: 0px 20px;
        border: 1px solid #e1e1e1;
        box-shadow: none;
        border-radius: 3px;
        color: #6b6b6d;
        font-size: 14px;
    }
    
    .booking-form .form-control::-webkit-input-placeholder {
        color: #f5de11;
    }
    
    .booking-form .form-control:-ms-input-placeholder {
        color: #e1e1e1;
    }
    
    .booking-form .form-control::placeholder {
        color: #e1e1e1;
    }
    
    .booking-form .form-control:focus {
        border-color: #bff347;
    }
    
    .booking-form input[type="date"].form-control:invalid {
        color: #e1e1e1;
    }
    
    .booking-form select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    
    .booking-form select.form-control+.select-arrow {
        position: absolute;
        right: 0px;
        bottom: 0px;
        width: 24px;
        text-align: center;
        pointer-events: none;
        background: #e1e1e1;
        height: 40px;
        line-height: 50px;
        color: rgba(107, 107, 109, 0.3);
        font-size: 14px;
        border-radius: 0px 3px 3px 0px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }
    
    .booking-form select.form-control+.select-arrow::after {
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    
    .booking-form select.form-control:focus+.select-arrow {
        background: #c99552;
        color: #fff;
    }
    
    .booking-form .form-label {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 3px;
        display: inline-block;
        color: #ebe6e1;
        text-transform: capitalize;
    }
    
    .booking-form .in-out {
        position: absolute;
        font-size: 24px;
        color: #f5de11;
        right: -15px;
        width: 30px;
        height: 30px;
        line-height: 30px;
        z-index: 20;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        bottom: 25px;
    }
    
    .booking-form .form-btn {
        margin-top: 23px;
    }
    
    .booking-form .submit-btn {
        color: rgb(248, 95, 95);
        background-color: #f5de11;
        font-weight: bolder;
        height: 50px;
        font-size: 25px;
        width: 100%;
        border-radius: 3px;
    }
    /*******************Blog section***********************/
    
    .blog-container {
        height: 480px;
        width: 100%;
        padding: 10px;
        margin: 10px;
        position: relative;
    }
    
    .blog-container .single-blog {
        box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.2);
        padding: 10px;
        margin: 8px;
        background-color: #fff;
    }
    
    .blog-container .single-blog img {
        width: 100%;
        height: 230px;
    }
    
    .blog-meta {
        font-size: 14px;
        margin-bottom: 2px;
    }
    
    .blog-container .single-blog span {
        float: right;
        font-size: 12px;
        color: cornflowerblue;
    }
    
    .blog-text {
        font-size: 14px;
        text-align: justify;
    }
    
    .blog-container .single-blog h2 {
        margin-top: 10px;
        font-size: 16px;
        color: #4d5a07;
    }
    
    .blog-container .single-blog h2 a {
        text-decoration: none;
    }
    
    .read-more-button {
        background-image: linear-gradient(to right, #1c03b5, #5c8bef);
        padding: 5px 5px 8px;
        border-radius: 20px;
        line-height: 20px;
        font-size: 17px;
        color: #fff;
        border: none!important;
    }
    
    .read-more-button:hover {
        background-image: linear-gradient(to right, #ecf83d, #41b100);
        text-decoration: none;
        color: #fff;
    }
