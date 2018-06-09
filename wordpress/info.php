<?php
phpinfo();
?>/*
Theme Name:     Naturelle
Theme URI:      https://themeisle.com/themes/naturelle/
Author:         Themeisle
Author URI:     https://www.themeisle.com/
Description:    Naturelle is a free and beautiful free themes focused on nature, eco, earthy or organic related businesses, but provides a simple and professional look that can be used for any kind of businesses or startups. Naturelle has a green & orange appearance, with buttons and icons promoting simplicity and elegance at their best. The theme provides a responsive blog section, is ecommerce ready (WooCommerce compatible), WPML and SEO friendly. You can use it for your business / startup, shops, corporate enviromental websites, or portfolios.
Template:       llorix-one-lite
Version:        1.0.5
Tags:           one-column, two-columns, right-sidebar, custom-header, custom-background, custom-colors, custom-menu, featured-images, full-width-template, rtl-language-support, sticky-post, threaded-comments, translation-ready
Text Domain:    naturelle
*/

/*
`* General
 */
body {
	font-family: 'Roboto', serif;
	font-size: 16px;
	line-height: 400%;
    background-color: #f8f7f3;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Montserrat, sans-serif;
}

.btn-primary {
    padding: 24px 55px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: 400;
}

.btn-primary:hover,
.btn-primary:focus {
	background: #90957a;
}

a {
    color: #f89f8b;
}

a:hover {
    text-decoration: none;
    color: #b6c4a6;
}

textarea {
    border-radius: 0;
}

blockquote {
    border: none;
    text-align: center;
    padding: 40px;
    position: relative;
    margin: 20px 0;
}

blockquote:before {
    content: '';
    width: 30px;
    height: 3px;
    background: #b6c4a6;
    margin: 0 auto;
    display: inline-block;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
}

blockquote:after {
    content: '';
    width: 30px;
    height: 3px;
    background: #b6c4a6;
    margin: 0 auto;
    display: inline-block;
    position: absolute;
    bottom: 10px;
    left: 0;
    right: 0;
}

blockquote.alignleft {
    float: left;
    max-width: 50%;
    margin-top: 0;
    margin-bottom: 0;
}

blockquote.alignright {
    float: right;
    max-width: 50%;
    margin-top: 0;
    margin-bottom: 0;
}

.entry-content ul,
.entry-content ol {
    margin: 15px 30px;
}

mark,
ins {
    background: none;
}

article td,
article th {
    padding: 7px;
}

p {
    margin: 0 0 20px;
}

.wp-caption-text {
    background: #f8f7f3;
    text-align: center;
}

/*
`* Header
 */
.very-top-header {
	background: #90957a;
}

.very-top-header .transparent-text-dark {
	background: none;
	color: #d3d3cc;
}

.very-top-header .transparent-text-dark:hover {
	background: none;
	color: #fff;
}

.navbar-inverse {
	background-color: #fff;
	border-color: #fff;
}

.sticky-navigation .main-navigation li a {
    font-size: 16px;
    color: #787977;
    letter-spacing: 1.8px;
    padding: 26px 20px;
    margin: 0;
}

h1.site-title a {
    color: #3d3d3d;
    font-size: 30px;
    font-weight: 700;
}

h1.site-title a:hover {
    color: #f89f8b;
    text-decoration: none;
}

.very-top-header .social-icons i:before {
    font-size: 16px;
}

.very-top-header .social-icons {
    display: inline-block;
}

.social-icons li {
    display: inline-block;
    margin-right: 10px;
    margin-left: 10px;
}

p.site-description {
    font-size: 14px;
    font-style: italic;
    margin-top: 10px;
    margin-bottom: 0;
}

.navbar-inverse .navbar-toggle .icon-bar,
.navbar-inverse .navbar-toggle:focus .icon-bar {
    background-color: #90957a;
}

.navbar-inverse .navbar-toggle:hover .icon-bar {
    background: #f89f8b;
}

.navbar-inverse .navbar-toggle,
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
    background: none;
    margin-top: 16px;
    margin-right: 0;
}

.navbar-inverse .navbar-toggle:hover .icon-bar,
.navbar-inverse .navbar-toggle:focus .icon-bar,
.navbar-inverse .navbar-toggle.toggled-on .icon-bar {
    background: #f89f8b;
}

.dropdown-toggle {
    background: #999999;
    color: #fff;
    line-height: 22px;
}

.dropdown-toggle.toggled-on:after {
    content: "\f107";
    display: inline-block;
    font: normal normal normal 14px/20px FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    transform: rotate(-180deg);
    margin-left: -2px;
}

.sticky-navigation .main-navigation li a:hover,
.sticky-navigation .login-register li.login a:hover,
.sticky-navigation .main-navigation li:hover > a{
    color: #f89f8b;
}

.sticky-navigation .main-navigation ul ul a {
    padding: 10px 20px;
}

/****
Search form Header
****/
.header-search {
    display: inline-block;
    vertical-align: top;
    margin-top: 20px;
    position: relative;
}

.header-search-button {
    font-size: 14px;
    color: #CBC7C2;
    line-height: 20px;
    cursor: pointer;
}

.header-search:hover .header-search-button {
    color: #fff;
}

.header-search-input {
    display: none;
    padding: 0 5px;
    width: 220px;
    position: absolute;
    right: 0;
    top: 38px;
    background: rgb(144, 149, 122);
    z-index: 9;
}

.header-search-input label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
    width: 100%;
    padding-right: 0;
}

.header-search.header-search-open .header-search-input {
    display: block;
}

.header-search.header-search-open .header-search-button {
    color: #fff;
}

.header-search-input input[type=submit] {
    position: absolute;
    background: none;
    border: none;
    text-indent: -9999999px;
    width: 33px;
    height: 37px;
    top: 0px;
    right: 5px;
    z-index: 9;
    padding: 5px;
}

.header-search-input input[type="search"] {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    letter-spacing: 2px;
    font-size: 12px;
    width: 100%;
    padding: 10px;
    border: none;
    line-height: 12px;
    padding-right: 28px;
    font-size: 14px;
    font-weight: 500;
    color: #666;
    letter-spacing: 0;
}

.header-search-input:after {
    position: absolute;
    color: #999;
    display: inline-block;
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 12px;
    line-height: 33px;
    top: 0px;
    right: 0px;
    width: 20px;
    z-index: 8;
    width: 43px;
    font: normal normal normal 14px/1 FontAwesome;
    content: "\f002";
    text-align: center;
    line-height: 37px;
}

.header-search .fa {
    top: 0;
    vertical-align: top;
    line-height: 20px;
    margin-right: 10px;
    margin-left: 10px;
}

/*
`* Footer section
 */
.footer,
.footer a {
	display:none;
    background-color: #fff;
}

.footer {
    padding-bottom: 30px;
    float: left;
    width: 100%;
}

.powered-by {
    font-family: inherit;
    font-size: 16px;
    font-style: italic;
    color: #787977;
    border-top: 1px solid #e7e7e6;
    padding-top: 30px;
    margin-top: 40px;
	display: none;
}

.powered-by a {
    color: #787977;
}

.footer-bottom-wrap {
    color: #787977;
}

.footer-links li a {
    font-size: 14px;
    color: #787977;
}

footer.footer .social-icons i:before {
    color: #787977;
    background: none;
    margin: 0 10px;
    font-size: 30px;
}

footer.footer .social-icons i:hover:before {
    background: none;
    color: #f89f8b;
}

footer.footer .social-icons {
    padding-top: 15px;
    padding-bottom: 15px;
}

footer.footer .widget-title {
    color: #403f3c;
}

footer.footer .widget-title:after {
    display: none;
}

.footer,
.footer a {
    color: #787977 !important;
}

.footer a:hover {
    color: #f89f7b !important;
}

footer.footer #wp-calendar th {
    border: 1px solid #ffffff;
}

footer.footer #wp-calendar th {
    background-color: rgba(0, 0, 0, 0.1);
}

.member-pic img {
    width: 100% !important;
    height: auto !important;
}

.member-pic {
    width: auto !important;
    height: auto !important;
}

/*
`* Intro section
 */
h1.intro {
    font-family: Montserrat, sans-serif;
    font-size: 59px;
    font-weight: 700;
    line-height: 75px;
    letter-spacing: 5px;
    margin-bottom: 45px;
}

.header-style-one .intro-section {
    max-width: 960px;
    margin-left: auto;
    margin-right: auto;
}

.overlay-layer-wrap {
    background: rgba(61, 61, 61, 0.4);
}

.header-style-one .intro-section h5 {
    font-weight: 400;
    font-style: italic;
    font-size: 21px;
    letter-spacing: .75px;
    position: relative;
    font-family: inherit;
    margin-bottom: 45px;
    margin-top: -20px;
}

.very-top-left {
    font-size: 14px;
    font-weight: 500;
    font-family: inherit;
    font-style: italic;
    padding: 15px 0;
}

.very-top-left > span {
    font-style: normal;
}

.very-top-header ul.social-icons {
    margin-top: 20px;
}

.sticky-navigation .container {
    padding-top: 10px;
    padding-bottom: 10px;
}

.sticky-navigation .very-top-header .container {
    padding-top: 0;
    padding-bottom: 0;
}

.content-single-page .entry-content {
    width: 100%;
}

/*
`* Clients section
 */
.clients {
    padding: 120px 0 100px;
    border-bottom: 1px solid #f1f4f7;
}

.clients h2.dark-text {
    font-weight: 600;
    text-transform: uppercase;
    color: #3d3d3d;
    font-size: 21px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 100px;
}

.clients h2.dark-text:after {
    content: '';
    background: #d9dcd4;
    width: 30px;
    height: 3px;
    display: block;
    text-align: center;
    clear: both;
    margin: 0 auto;
    margin-top: 25px;
}

.client-logos {
    padding: 0;
}

.client-logos li {
    margin: 25px 50px 25px 50px;
    max-height: 80px;
}

.client-logos li img {
    max-height: 65px;
}

/*
`* Our services section
 */
.single-service {
    font-size: 17px;
    font-weight: 400;
    color: #787977;
    letter-spacing: 0.5px;
    border: none !important;
}

.section-header h2 {
    font-size: 38px;
    font-weight: 700;
    color: #3d3d3d;
    text-transform: uppercase;
}

.section-header {
    margin-bottom: 40px;
}

.sub-heading {
    color: #787977;
    font-weight: 400;
    font-style: italic;
    font-size: 18px;
    letter-spacing: .75px;
    position: relative;
}

.colored-line-left,
.colored-line-right,
.colored-line {
    display: none;
}

.single-service h3 {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 400;
    color: #3d3d3d;
    text-transform: uppercase;
    position: relative;
    margin-bottom: 60px !important;
}

.single-service h3:after {
    content: '';
    width: 30px;
    height: 3px;
    background: #b6c4a6;
    margin: 0 auto;
    display: inline-block;
    position: absolute;
    bottom: -30px;
    left: 0;
    right: 0;
}

.single-service .service-icon {
    font-size: 40px;
    color: #b6c4a6;
    margin-bottom: 20px;
}

/*
`* Our story section
 */
#story h2 {
    font-size: 38px;
    font-weight: 700;
    color: #3d3d3d;
    text-transform: uppercase;
}

#story .brief-content-text {
    color: #787977;
    font-size: 20px;
    font-weight: 400;
    line-height: 32px;
    margin-top: 25px;
}

.standard-button-story {
    margin-top: 30px;
}

#story .content-section {
    margin-top: 0;
}

#story .brief-image-right {
    margin-top: 0;
}

#story .section-overlay-layer {
    padding-top: 120px;
    padding-bottom: 120px;
}

#services .section-header {
    padding-top: 0;
    margin: 0;
 }

#services .section-overlay-layer {
    padding-top: 40px;
    padding-bottom: 30px;
}

.services-wrap > .service-box {
    margin-bottom: 0;
    margin-top: 40px;
}

#services .section-header h2 {
    margin-top: 80px;
}

/*
`* Our team Section
 */
.section-header h2 {
    font-size: 21px;
}

.team .section-header {
    position: relative;
    margin-bottom: 100px;
    margin-top: 0;
}

.team .section-header:after {
    content: '';
    width: 30px;
    height: 3px;
    background: #d9dcd4;
    margin: 0 auto;
    display: inline-block;
    position: absolute;
    bottom: -30px;
    left: 0;
    right: 0;
}

.team-member,
.team-member:hover {
    border: 5px solid #fff;
}

.team-member:hover .member-details {
    background: rgba(182, 196, 166, 0.9) !important;
    color: #3d3d3d;
}

.member-details h5 {
    color: #3d3d3d;
}

.team .section-overlay-layer {
    background: rgba(144, 149, 122, 0.9) !important;
}

.team .section-overlay-layer {
    padding-top: 120px;
}

.member-pic img {
    width: auto;
    height: auto;
}

.member-pic {
    width: auto;
    height: auto;
}

/*
`* Ribbon section
 */
.call-to-action {
    border: none;
}

.call-to-action h2 {
    font-size: 59px !important;
    letter-spacing: 4px;
    text-transform: uppercase;
    line-height: 75px !important;
}

.call-to-action .section-overlay-layer {
    background: rgba(248, 159, 123, 0.8);
    padding-top: 120px;
    padding-bottom: 120px;
}

.call-to-action .btn-primary {
    padding: 24px 40px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 16px;
    font-weight: 400;
    background: #3d3d3d !important;
}

.call-to-action .btn-primary:hover {
    background: #90957a;
}

.call-to-action h2 {
    font-size: 30px;
    line-height: 40px;
    margin-top: 0;
}

.ribbon-wrap .row > div {
    margin-left: 8.33333333%;
    width: 83.33333333%;
}

/*
`* Latest news section
 */
.brief.timeline {
    background-color: #f8f7f3;
    border-bottom: none;
}

.brief h2 {
    font-size: 28px;
}

.timeline-section {
    background: #fff;
}

.timeline-section {
    background: #fff;
    border-top: 5px solid #90957a;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

#llorix_one_slider {
    background: #fff;
    border-top: 5px solid #90957a;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

.timeline-text {
    padding: 0;
}

button.control_next,
button.control_prev{
    color: #90957a;
}

.timeline-box-wrap {
    border-left: none !important;
}

.timeline-box-wrap .info h1 a {
    color: #90957a;
    font-family: Montserrat, sans-serif;
    font-size: 21px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.75px;
}

.timeline-box-wrap .info h1 a:hover {
    color: #3d3d3d;
}

.timeline-box-wrap .info h1:after {
    display: none;
}

.timeline-box-wrap .info .entry-meta,
.timeline-box-wrap .info .entry-meta a {
    font-size: 18px;
    font-family: inherit;
    color: #3d3d3d;
    padding-top: 0;
    letter-spacing: 0.75px;
}

.timeline-box-wrap .info .entry-content p {
    font-family: inherit;
    color: #787977;
    margin-top: 15px;
    margin-bottom: 15px;
}

.timeline-box-wrap .info .entry-meta {
    margin-bottom: 0;
}

.timeline-box-wrap .read-more {
    font-family: Montserrat, sans-serif;
    color: #f89f7b;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.timeline-box-wrap .date {
    display: none;
}

.timeline-section {
    padding-left: 170px;
    padding-right: 70px;
}

.timeline-box-wrap .icon-container {
    margin-top: 10px;
    width: 200px;
    height: 200px;
}

.timeline-box-wrap {
    padding-top: 80px;
    padding-bottom: 80px;
}

#llorix_one_slider > ul > li .timeline-box-wrap:last-child {
    padding-bottom: 80px;
    padding-top: 0;
}

#llorix_one_slider > ul > li .timeline-box-wrap:first-child {
    padding-top: 80px;
    padding-bottom: 80px;
}

.brief.timeline .timeline-box-wrap .info {
    padding-left: 0;
    padding-right: 180px;
    float: right;
    margin-right: -180px;
    width: 100%;
}

.brief.timeline .info p {
    font-size: 17px;
    line-height: 26px;
}

.timeline.brief h2 {
    font-size: 38px;
    letter-spacing: 0.75px;
}

button.control_prev.fade-btn,
button.control_next.fade-btn {
    opacity: 0.3 !important;
}

#latestnews .dark-text {
    font-size: 38px;
    font-weight: 700;
    color: #3d3d3d;
    text-transform: uppercase;
}

#latestnews .entry-summary > a {
    display: none;
}

.read-more-wrap {
    width: 100%;
    float: left;
}

.read-more-wrap a {
    font-size: 16px;
    text-transform: uppercase;
    font-family: Montserrat, sans-serif;
    letter-spacing: 1px;
    margin-top: 15px;
    display: block;
}

/*
`* Contact info section
 */
.contact-info {
    text-align: center;
    background-color: #403f3c;
    border-bottom: none;
}

.contact-info .section-overlay-layer {
    padding-top: 90px;
    padding-bottom: 123px;
}

.icon-container .colored-text {
    color: #b6c4a6;
}

.contact-info .contact-links a {
    color: #fff;
    font-family: Montserrat, sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: 1px;
    padding-top: 95px;
}

.contact-info .contact-links a:hover {
    color: #f89f8b;
}

.contact-info .icon-container {
    margin-bottom: 60px;
}

.contact-link-box .fa {
    font-size: 34px;
}
/**
 * Frontpage content section
 */
.frontpage-content h2 {
    font-size: 38px;
    font-weight: 700;
    color: #3d3d3d;
    text-transform: uppercase;
}

/*
`* Contact page
 */
.page-template-template-contact-php #primary {
    margin: 0;
}

/*
`* Single
 */
#primary {
    margin-bottom: 100px;
}

#primary.full-width {
    width: 100%;
    padding-right: 0;
}

.inner-content-wrap {
    background: #FFf;
    float: left;
    width: 100%;
    padding: 60px 145px;
}

.post-navigation .nav-previous,
.post-navigation .nav-next {
    width: 50%;
    padding: 0 15px;
}

.post-navigation .nav-previous a {
    text-align: right;
    float: right;
}

.post-navigation .nav-next a {
    text-align: left;
    float: left;
}

.post-navigation .nav-previous a,
.post-navigation .nav-next a {
    font-family: Montserrat, sans-serif;
    color: #787977;
    font-size: 14px;
    line-height: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: bold;
    position: relative;
}

.post-navigation .nav-previous a:hover,
.post-navigation .nav-next a:hover {
    color: #f89f7b;
    text-decoration: none;
}

.post-navigation .nav-previous a:before {
    content: "\00ab";
    margin-right: 10px;
}

.post-navigation .nav-next a:after {
    content: "\00bb";
    margin-left: 10px;
}

.post-navigation h2 {
    display: none;
}

.post-navigation .nav-previous {
    border-right: 2px solid #cfcfcb;
}

.post-navigation,
.comments-area {
    border: none;
    padding-top: 0;
    margin-top: 100px;
}

header.single-header {
    margin-top: -50px;
    position: relative;
    min-height: 300px;
    max-height: 400px;
    overflow: hidden;
}

header.single-header img {
    min-width: 100%;
}

.single-header-overlay {
    position: absolute;
    background: rgba(61,61,61,0.4);
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}

.inner-title-wrap {
    position: absolute;
    left: 0;
    right: 0;
    z-index: 999;
    top: 0;
    bottom: 0;
}

.inner-title-wrap-inside {
    display: table;
    width: 100%;
    height: 100%;
}

.inner-title-wrap-inside-cell {
    display: table-cell;
    vertical-align: middle;
}

h1.single-title {
    text-align: center;
    color: #fff;
    font-size: 40px;
    line-height: 60px;
    font-weight: bold;
    letter-spacing: 4px;
    margin-bottom: 0;
}

.single-entry-meta {
    text-align: center;
}

.single-entry-meta,
.single-entry-meta a {
    font-family: inherit;
    font-weight: 400;
    color: #fff;
    font-style: italic;
    font-size: 18px;
    line-height: 18px;
}

.single-entry-meta a:hover {
    color: #f89f8b;
}

.single-entry-meta .post-author {
    padding: 0;
    margin: 0;
}

.single-entry-meta .author-link {
    padding: 0 10px 0 0;
    margin-right: 10px;
}

.single-entry-meta .post-time {
    padding: 0;
    margin-left: 10px;
}

.content-inner-wrap {
    padding: 60px 145px;
    background: white;
    margin-top: 10px;
}

.author-details-img-wrap {
    float: left;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 35px;
    margin-bottom: 10px;
}

/*
`* Comments
 */
.comment-list {
    border-top: 5px solid #90957a;
    background: #fff;
    padding: 70px 145px 20px;
}

.comment-list .comment > article {
    border: none;
    margin-bottom: 50px;
}

.comment-respond {
    padding: 70px 145px;
    background: #fff;
    margin-bottom: 20px;
}

h2.comments-title {
    font-family: Montserrat, sans-serif;
    color: #3d3d3d;
    font-size: 20px;
    font-weight: bold;
}

.comment-form input {
    width: 100%;
    border-radius: 0;
    padding: 15px 10px;
}

.comment-form .form-submit input,
#recaptcha-submit-btn-area input {
    padding: 24px 55px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    width: auto;
    margin-top: 20px;
    line-height: 20px;
}

.comment-form .form-submit input:hover {
    border: none;
    background: #90957a;
    color: #fff;
}

.comment-reply-title {
    font-family: Montserrat, sans-serif;
    color: #3d3d3d;
    font-size: 20px;
    font-weight: bold;
    margin-top: 0;
    text-transform: uppercase;
}

.comment-form p.comment-notes,
.comment-form p.logged-in-as {
    margin-bottom: 40px;
    font-family: inherit;
    font-style: italic;
    color: #787977;
}

.comment-list  .comment-author .fn,
.comment-list  .comment-author .fn a {
    color: #aaaaaa;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.comment-list  .comment-author .fn a:hover {
    color: #f89f7b;
    text-decoration: none;
}

.comment-list .comment-author .says {
    color: #aaaaaa;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.comment-list .comment-metadata a {
    color: #aaaaaa;
    letter-spacing: 1px;
}

.comment-list .comment > article {
    margin-left: 125px;
}

.comment-list .comment-author img {
    border: none;
    left: -125px;
}

.comment-list .comment > article {
    padding-top: 0;
}

.comment-list .reply {
    position: relative;
    padding-left: 15px;
    font-family: Montserrat, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 1px;
}

.comment-list .reply a:hover {
    color: #90957a;
    text-decoration: none;
}

.comment-list .comment-content {
    font-size: 16px;
    line-height: 25px;
    color: #787977;
    margin-top: 20px;
}

.comment-author {
    display: inline-block;
}

.comment-list .comment-metadata {
    display: inline-block;
}

.comment-list .comment-author .says {
    display: none;
}

.comment-list  .comment-author .fn {
    border-right: 2px solid #aaaaaa;
    padding-right: 10px;
    margin-right: 7px;
    display: inline-block;
    line-height: 12px;
}

.comment-list .comment-author .fn a,
.comment-list .comment-metadata a,
.comment-list .comment-metadata a time {
    font-family: Montserrat, sans-serif;
    color: #aaaaaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-style: normal;
    font-size: 14px;
    font-weight: 600;
}

.comment-list .comment-metadata a:hover,
.comment-list .comment-metadata a time:hover {
    color: #f89f7b !important;
}

.comment-content p {
    margin-bottom: 0;
}

/*
`* Blog
 */
.archive-top .section-overlay-layer {
    background: rgba(61,61,61,0.4) !important;
}

.archive-top-big-title {
    text-align: center;
    color: #fff;
    font-size: 40px;
    line-height: 60px;
    font-weight: bold;
    letter-spacing: 4px;
    margin-bottom: 0;
    font-family: Montserrat, sans-serif;
}

.post-list article {
    border: none;
    background: #FFF;
    padding: 0;
}

.list-post-entry-meta {
    background: none;
}

.post-list h1.entry-title {
    text-align: center;
    padding: 40px 20px 0;
    margin: 0;
}

.entry-content:not(.vertical-timeline .entry-content) {
    padding: 40px;
    margin-top: 0;
    float: left;
}

.post-list h1.entry-title a {
    color: #3d3d3d;
    font-size: 25px;
    line-height: 30px;
    font-weight: bold;
    letter-spacing: 1px;
    margin-bottom: 0;
    margin-top: 0;
    text-align: center;
}

.post-list h1.entry-title a:hover {
    color: #f89f8b;
}

.post-comments {
    float: none;
}

.list-post-entry-meta {
    text-align: center;
    padding: 10px 0 50px 0;
}

.list-post-entry-meta,
.list-post-entry-meta a {
    font-family: inherit;
    color: #787977;
    font-weight: 400;
    font-style: italic;
    font-size: 16px;
    line-height: 18px;
    letter-spacing: .75px;
}

.list-post-entry-meta a:hover {
    color: #f89f8b;
    text-decoration: none;
}

.posts-navigation .nav-previous {
    text-align: right;
    width: 50%;
    padding: 0 15px;
    border-right: 2px solid #cfcfcb;
    position: relative;
    margin-left: 2px;
}

.posts-navigation .nav-previous a {
    font-family: Montserrat, sans-serif;
    color: #787977;
    font-size: 14px;
    line-height: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: bold;
    position: relative;
}

.posts-navigation .nav-previous a:before {
    content: "\00ab";
    margin-right: 10px;
}

.posts-navigation .nav-previous a:hover {
    text-decoration: none;
    color: #f89f8b;
}

.posts-navigation .nav-next {
    text-align: left;
    width: 50%;
    padding: 0 15px;
    border-left: 2px solid #cfcfcb;
    margin-left: -2px;
    position: relative;
    z-index: 2;
}

.posts-navigation .nav-next a {
    font-family: Montserrat, sans-serif;
    color: #787977;
    font-size: 14px;
    line-height: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: bold;
    position: relative;
}

.posts-navigation .nav-next a:hover {
    text-decoration: none;
    color: #f89f8b;
}

.posts-navigation .nav-next a:after {
    content: "\00bb";
    margin-left: 10px;
}

.post-list article.sticky {
    border: none;
    background: #f8f7f3;
}

.post-list article.sticky h1.entry-title {
    padding-top: 0;
}


.page-header {
    border: none;
}

.page-title {
    font-size: 24px;
    line-height: 28px;
    text-transform: uppercase;
    color: #3d3d3d;
    margin-top: 0;
    letter-spacing: 1px;
}

h1.page-title {
    font-size: 21px;
    font-weight: 700;
    color: #3d3d3d;
    text-transform: uppercase;
}

.page-header {
    margin: 0px 0 20px;
}

.search-article .entry-content {
    padding-top: 0;
}

article.page {
    background: #FFF;
}

article.page h1.single-title {
    font-size: 21px;
    font-weight: 700;
    color: #3d3d3d;
    text-transform: uppercase;
    padding-top: 40px;
}

.post-img-wrap {
    float: left;
}

.archive-top-text {
    font-family: inherit;
    font-style: italic;
}

.archive .post .entry-content,
.blog .post .entry-content,
.search-article .entry-content,
.page .entry-content {
    float: left;
    padding: 40px;
    width: 100%;
}

.page .vertical-timeline .entry-content {
    padding: 0;
}

.woocommerce div.product .woocommerce-tabs .panel {
    padding: 40px;
}

.woocommerce div.product .woocommerce-tabs .panel h2 {
    margin-top: 0;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    border-bottom: 1px solid rgb(144, 149, 122);
    color: rgb(144, 149, 122);
    font-weight: 400;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li a {
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
}

.woocommerce .upsells.products h2:after, 
.woocommerce .upsells.products h2:after, 
.woocommerce-page .upsells.products h2:after, 
.woocommerce-page .upsells.products h2:after {
    display: none;
}

.woocommerce .products, .woocommerce-page .products {
    margin-top: 70px;
}

.woocommerce #reviews #comments ol.commentlist li .comment-text {
    border: none;
}

.woocommerce #reviews #comments ol.commentlist li .comment-text {
    border: none;
    padding-top: 0;
    padding-bottom: 25px;
}

.comment-form p {
    padding-left: 125px;
}

.woocommerce #review_form #respond .form-submit input {
    background: #f89f7b;
    border: 1px solid #f89f7b;
}

.woocommerce #reviews #comments h2 {
    font-size: 16px;
    text-transform: uppercase;
}

.woocommerce-cart article.page,
.woocommerce-checkout article.page,
.woocommerce-account article.page {
    background: none;
}

.woocommerce-cart .content-page {
    background: #fff;
}


.select2-container .select2-choice {
    border: 1px solid #E7E7E7;
    color: #666;
    -webkit-border-radius: 0;
    -moz-border-radius: 0px;
    border-radius: 0px;
    min-width: 50%;
    width: 100%;
    padding: 11px 10px;
    box-shadow: none;
    font-size: 14px;
    font-weight: 500;
    height: auto;
}

.select2-dropdown-open.select2-drop-above .select2-choice,
.select2-dropdown-open.select2-drop-above .select2-choices {
    border: 1px solid #E7E7E7;
    border-top-color: transparent;
}

.select2-drop.select2-drop-above.select2-drop-active {
    border-top: 1px solid #E7E7E7;
}

.select2-drop-active {
    border: 1px solid #E7E7E7;
    color: #666;
    font-size: 14px;
    line-height: 18px;
}

.select2-container .select2-choice>.select2-chosen {
    font-size: 14px;
}

.woocommerce form .form-row input.input-text,
.woocommerce form .form-row textarea,
.woocommerce form .form-row select {
    color: #666;
    -webkit-border-radius: 0;
    -moz-border-radius: 0px;
    border-radius: 0px;
    min-width: 50%;
    width: 100%;
    padding: 15px 10px !important;
    box-shadow: none;
    font-size: 14px;
    font-weight: 500;
    height: auto;
}

.select2-search input {
    margin-top: 5px;
    border-radius: 0 !important;
}

.woocommerce table.shop_table {
    border-radius: 0px;
}

.woocommerce-variation-price {
    float: left;
    width: 100%;
}

.woocommerce-account .content-page {
    background: #FFF;
}

.woocommerce form.login {
    border: none;
    padding: 0;
}

.woocommerce form .form-row label.inline {
    margin-left: 20px;
    padding-top: 14px;
    display: inline-block;
}

.woocommerce-MyAccount-navigation ul {
    padding: 0;
    margin-top: 0;
}

.woocommerce-MyAccount-navigation li {
    list-style: none;
}

.woocommerce-MyAccount-navigation li a {
    padding: 10px;
    background: #f8f7f3;
    display: block;
    color: #787977 !important;
    margin-bottom: 2px;
}

.woocommerce-MyAccount-navigation li a:hover {
    background-color: #fff;
}

.woocommerce form.checkout_coupon {
    padding: 0;
    border: none;
}

.woocommerce form.checkout_coupon .form-row-last {
    margin-top: 8px;
}

.woocommerce-checkout .content-page {
    background-color: #fff;
}

/*
`* Sidebar
 */
#sidebar-secondary {
    border: none;
}

input[type="search"] {
    border-radius: 0;
}

#sidebar-secondary .widget ul:not(.recentcomments) li a:hover {
    color: #f89f8b;
}

.widget_search .search-form:hover:before {
    color: #f89f8b;
}

.woocommerce div.product .woocommerce-tabs h2:after,
.woocommerce h3:after,
.woocommerce h2:after {
    display: none;
}

/*
`* Pro version
 */
.single-service,
.single-service:hover {
    border: none;
}

.single-stats .icon-container i {
    font-size: 40px;
}

.single-stats {
    border-right: none;
}

.long-transparent-line {
    background: rgba(255,255,255,0.3);
}

.single-stats h4 {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
}

.stats-footer .white-text a {
    font-weight: 400;
    font-style: italic;
}

.transparent-text {
    font-style: italic;
    font-weight: normal;
    text-transform: lowercase;
}

.overlay-layer-2 {
    background-color: rgba(64,63,60,0.9);
}

.portfolio-detail-hidden {
    background-color: rgba(64,63,60,0.7);
}

.portfolio-detail-hidden h3 {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.portfolio-read-more {
    padding: 12px 20px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: 400;
}

.portfolio-read-more:hover {
    background: #90957a;
}

.portfolio-single,
.portfolio-single:hover {
    border: none !important;
}

.home-add-to-cart-wrap a {
    padding: 2px 12px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: 400;
    box-shadow: none;
}

.home-add-to-cart-wrap a:hover {
    background: #90957a;
}

.home-shop-product-title h3 {
    color: #000;
}

.home-shop-product-price del {
    font-weight: 400;
}

.home-shop-product,
.portfolio-wrap {
    padding-top: 40px;
}

body {
    background-color: #f8f7f3 !important;
}

body {
    color: #313131 !important;
}

.entry-content a,
.cat-links a,
.tags-links a,
.author-details-title a {
    color: #f89f8b !important;
}

.entry-content a:hover,
.cat-links a:hover,
.tags-links a:hover,
.author-details-title a:hover {
    color: #b6c4a6 !important;
}

.services .section-overlay-layer,
.services,
.navbar-inverse,
.clients,
.services .single-service,
.testimonials .testimonials-box .feedback,
.brief.timeline .timeline-box-wrap .info {
    background: #FFF !important;
}

.services {
    border-bottom: 1px solid #eaebec !important;
}

p.site-description {
    color: #333;
}

.intro-section h1.intro,
.intro-section h5.white-text,
.intro-section button.btn-primary,
.stats h4.white-text, .stats h4.white-text a,
.stats .stats-footer p.white-text,
.stats .stats-footer p.white-text a,
.portfolio .portfolio-detail-hidden h3,
.portfolio .portfolio-read-more,
.team .section-header .dark-text,
.team .section-header .sub-heading,
.call-to-action h2.white-text,
.call-to-action button.btn,
.contact-links a,
.comment-form .form-submit input {
    color: #fff !important;
}

.stats .stats-footer p.white-text a:hover,
.contact-links a:hover,
.powered-by a:hover {
    color: #90957a !important;
}

.btn-primary,
.shop .home-add-to-cart-wrap a,
.portfolio .portfolio-read-more {
    background: #f89f7b !important;
}

.portfolio .portfolio-read-more {
    padding: 10px 15px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 400;
    box-shadow: none;
    color: #FFF !important;
    border: none !important;
    opacity: 1 !important;
}

.portfolio-detail-inner h3 {
    font-size: 14px !important;
}

.brief.timeline .info .entry-header h3.entry-title a:hover,
.list-post-entry-meta a:hover,
.post-list h1.entry-title a:hover {
    color: #f89f7b !important;
}

.btn-primary:hover,
.btn-primary:focus,
.shop .home-shop-product .home-shop-product-info a:hover,
.portfolio-read-more:hover,
.comment-form .form-submit input:hover {
    background: #90957a !important;
}

.single-service h3,
.section-header h2,
.brief.brief-design-one .content-section h2,
.testimonials .testimonials-box .feedback h5.colored-text,
.brief.timeline .timeline-text h2.dark-text,
.post-list h1.entry-title a {
    color: #3d3d3d !important;
}

.sub-heading,
.services .sub-heading,
.shop .section-header .sub-heading,
.portfolio .section-header .sub-heading,
.testimonials .section-header .sub-heading,
.single-service,
.services .single-service p,
.brief-content-text,
.stats .transparent-text,
.testimonials .testimonials-box .feedback p,
.powered-by a,
.brief.timeline .info p, .brief.timeline .info,
.list-post-entry-meta, .list-post-entry-meta a {
    color: #787977 !important;
}

.shop .home-shop-product .home-shop-product-info a, .shop .home-shop-product-info p,
.shop .home-shop-product-price {
    color: #313131 !important;
}

.services .single-service .service-icon,
.stats .icon-container .colored-text, .stats .stats-footer p.white-text a,
.contact-info .contact-link-box .icon-container .colored-text {
    color: #b6c4a6 !important;
}

.long-transparent-line {
    background: rgba(255,255,255,0.3) !important;
}

.shop .home-shop-product-info {
    background: rgba(255, 255, 255, 0.75) !important;
}

.team .team-member {
    border-color: #FFF !important;
}

.member-details h5,
.team .team-member .member-details .small-text {
    color: #3d3d3d !important;
}

.testimonials .testimonials-box .feedback .small-text {
    color: #889678 !important;
}

.testimonials .testimonials-box .feedback .pic-container-inner {
    box-shadow: none !important;
    border: none;
}

.powered-by {
    border-color: #e7e7e6 !important;
    color: #b1afae;
}

.powered-by a {
    color: #b1afae !important;
}

.vertical-timeline h3 a {
    color: #90957a !important;
}

.timeline-box-wrap .info .entry-meta a {
    color: #3d3d3d !important;
}

.timeline-box-wrap .info .entry-meta a:hover {
    color: #f89f8b !important;
}

.timeline-box-wrap .read-more {
    color: #f89f7b !important;
}

.timeline-box-wrap .read-more:hover {
    color: #90957a !important;
}

.cat-links > i.fa,
.tags-links > i.fa {
    display: none;
}

.cat-links a,
.tags-links a {
    font-size: 15px;
    font-family: Montserrat, sans-serif;
    text-transform: uppercase;
    font-style: normal;
}

.cat-links,
.tags-links {
    font-size: 14px;
    text-transform: lowercase;
    font-style: italic;
    color: #787977;
}

.author-details-content {
    color: #aaaaaa
}

.author-details-title {
    padding-bottom: 15px;
}

.author-details-title a {
    color: #b6c4a6 !important;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat, sans-serif;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 15px;
}

.author-details-title a:hover {
    color: #f89f8b !important;
}

.comment-form p {
    padding-left: 0;
}

.comment-form label {
    display: none;
}

/*
`* Testimonials section
 */
.feedback p {
    font-size: 17px;
    font-weight: 400;
    color: #787977;
    letter-spacing: 0.5px;
}

.feedback h5 {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 400;
    color: #3d3d3d;
    text-transform: uppercase;
    position: relative;
}

.feedback .small-text {
    font-size: 14px;
    color: #889678;
}

.feedback .pic-container {
    position: relative;
    top: 0;
    margin-bottom: 20px;
}

.testimonials-box .feedback {
    padding-top: 0;
}

.feedback .pic-container-inner {
    border: none;
    box-shadow: none;
}

.team-member-wrap .team-member-box {
    padding-right: 82px !important;
    padding-left: 82px !important;
}

.member-details {
    height: 216px !important;
    width: 216px !important;
}

.member-pic img {
    width: 100%;
}

.team-member-box {
    width: 33.33333333%;
}

.member-details {
    height: 225px;
    width: 225px;
}

.team .section-header .sub-heading {
    color: #e7e7e6 !important;
}

.team .team-member .member-details .small-text {
    font-family: 'Roboto', serif;
    font-style: italic;
}

.team {
    border-bottom: none;
}

/*
`* Woocommerce
 */
.woocommerce ul.products li.product:hover,
.woocommerce-page ul.products li.product:hover,
.woocommerce .products .product:hover,
.woocommerce-page .products .product:hover {

}

.woocommerce ul.products li.product,
.woocommerce-page ul.products li.product,
.woocommerce .products .product,
.woocommerce-page .products .product {
    border: none;
    border-radius: 0;
}

.woocommerce ul.products li.product .button,
.woocommerce .products .product .button,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
.woocommerce .cart .button, .woocommerce .cart input.button,
.woocommerce #payment #place_order,
.woocommerce-page #payment #place_order,
.woocommerce input.button:disabled[disabled],
.woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button {
    padding: 4px 15px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 400;
    box-shadow: none;
    color: #FFF !important;
    border: none !important;
    opacity: 1 !important;
}

.woocommerce ul.products li.product .button:hover,
.woocommerce .products .product .button:hover,
.woocommerce div.product form.cart .button:hover,
.woocommerce div.product .single_add_to_cart_button:hover,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
.woocommerce .cart .button:hover,
.woocommerce .cart input.button:hover,
.woocommerce #payment #place_order:hover,
.woocommerce-page #payment #place_order:hover,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover {
    background: #90957a !important;
    opacity: 1;
}

.woocommerce div.product form.cart .button,
.woocommerce div.product .single_add_to_cart_button {
    padding: 11px 55px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: 400;
    box-shadow: none;
}

.woocommerce ul.products li.product h3:hover,
.woocommerce .products .product h3:hover {
    color: #f89f7b;
}

.woocommerce ul.products li.product .onsale,
.woocommerce .products .product .onsale,
.woocommerce span.onsale {
    background-color: rgba(144, 149, 122, 0.9);
}

.woocommerce div.product .product_title:after,
.woocommerce .cart_totals h2:after,
.woocommerce .cart-collaterals .cross-sells h2:after,
#add_payment_method #payment div.payment_box:before, .woocommerce-checkout #payment div.payment_box:before {
    display: none;
}

.woocommerce div.product p.price ins,
.woocommerce div.product span.price ins {
    font-size: 24px;
    color: #000;
    font-weight: 400;
}

.woocommerce .quantity .qty {
    font-weight: 400;
}

.woocommerce .woocommerce-message {
    background-color: #90957a;
    border-bottom: none;
    color: #FFF;
}

.woocommerce .woocommerce-message a {
    color: #fff !important;
}

.woocommerce .woocommerce-message .button {
    font-size: 11px;
    padding: 7px 10px;
    background: #90957a;
    border-color: #90957a;
    font-family: Montserrat, sans-serif;
}

.woocommerce .woocommerce-message .button:hover {
    background: #f89f7b;
    color: #FFF;
    border-color: #f89f7b;
}

.woocommerce ul.products li.product .price {
    color: #787977;
}

.woocommerce ul.products li.product a.added_to_cart,
.woocommerce .products .product a.added_to_cart {
    box-shadow: none;
    border: none;
    color: #90957a;
}

.woocommerce-cart table.cart td.actions .coupon .input-text {
    line-height: 16px;
    padding: 9px;
    width: 115px;
}

.woocommerce .woocommerce-info:before {
    color: #90957a;
}

.woocommerce .woocommerce-error {
    background-color: #f89f7b;
}

.woocommerce-shipping-fields h3 {
    padding-left: 0;
}

#add_payment_method #payment .payment_method_paypal .about_paypal,
.woocommerce-checkout #payment .payment_method_paypal .about_paypal {
    float: right;
    line-height: 30px;
    font-size: .83em;
    padding-left: 15px;
}

.woocommerce-checkout #payment div.payment_box {
    border: none;
}

.woocommerce-Price-amount {
    font-size: 16px;
    color: #000;
    font-weight: 400;
}

.entry-summary ins .woocommerce-Price-amount {
    font-size: 20px;
}

.woocommerce ul.products li.product a.added_to_cart,
.woocommerce .products .product a.added_to_cart {
    padding: 10px 15px;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 400;
    box-shadow: none;
}

.woocommerce #reviews #comments ol.commentlist li img.avatar {
    background: none;
    padding: 0;
    border: none;
}

.woocommerce-review-link {
    color: #90957a;
}

.woocommerce-review-link:hover {
    color: inherit;
}

.home-shop-product-price del,
.home-shop-product-price del .woocommerce-Price-amount,
.home-shop-product-price del .woocommerce-Price-amount span {
    color: #787977 !important;
}

.shop .home-shop-product .home-shop-product-info .home-add-to-cart-wrap a {
    padding: 4px 15px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 400;
    box-shadow: none;
    color: #FFF !important;
    border: none !important;
    opacity: 1 !important;
}

.home-shop-product-info p {
    font-size: 15px;
    line-height: 24px;
}

.home-shop-product-price ins .woocommerce-Price-amount {}

.home-shop-product-price del .woocommerce-Price-amount {}

.woocommerce-checkout .checkout .col-2 h3#ship-to-different-address {
    padding-left: 25px;
}

.woocommerce .woocommerce-shipping-fields input[type="checkbox"] {
    top: 10px;
    margin-left: 0;
}

/*
`* Pirate Forms Plugin
 */
.pirate_forms_wrap input:not([type=submit]),
.pirate_forms_wrap textarea {
    color: #666;
    border: 1px solid #dedede;
    -webkit-border-radius: 0;
    -moz-border-radius: 0px;
    border-radius: 0px;
    min-width: 50%;
    width: 100%;
    padding: 15px 10px !important;
    box-shadow: none;
    font-size: 14px;
    font-weight: 500;
    height: auto;
}

.pirate-forms-submit-button {
    padding: 24px;
    background: #f89f7b;
    font-family: Montserrat, sans-serif;
    border: none;
    margin-top: 20px;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 20px;
    text-transform: uppercase;
    color: #fff;
    width: 100%;
    margin-left: 0;
    margin-top: 0;
}

.pirate-forms-submit-button:hover {
    background: #90957a;
}

.pirate_forms_wrap label {
    float: left;
}

.widget .pirate_forms_wrap .pirate_forms_three_inputs  ,
.widget .pirate_forms_wrap .contact_message_wrap,
.widget .pirate_forms_wrap .contact_submit_wrap {
    padding-left: 0;
    padding-right: 0;
}

.widget_calendar th {
    border: none;
}

/*
`* Responsive
 */

@media (min-width: 768px) {

    .main-navigation ul ul {
        width: 200px;
    }

}

@media (max-width: 1200px) {
    .client-logos li img {
        max-width: 200px;
    }
    .client-logos li {
        margin: 25px 30px 25px 30px;
    }
    .team-member-wrap .team-member-box {
        padding-right: 50px;
        padding-left: 50px;
    }
    .member-details {
        height: 215px;
        width: 215px;
    }
    .team-member-wrap .team-member-box {
        padding-right: 49px !important;
        padding-left: 49px !important;
    }

}

@media (max-width: 992px) {

    .main-navigation ul ul {
        width: 200px;
    }
    .client-logos li img {
        max-width: 120px;
    }
    .client-logos li {
        margin: 25px;
    }
    .team-member-wrap .team-member-box {
        padding-right: 40px;
        padding-left: 40px;
    }
    .member-details {
        height: 160px;
        width: 160px;
    }
    .team-member-wrap .team-member-box {
        padding-right: 30px !important;
        padding-left: 30px !important;
    }
    .member-details {
        height: 180px !important;
        width: 180px !important;
    }

}

@media (max-width: 767px) {

    header .navbar-brand {
        padding: 7px;
    }

    .sticky-navigation .main-navigation li a {
        margin: 0;
        padding: 5px 18px 5px 8px;
    }

    #menu-primary {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #e7e7e6;
    }

    .sticky-navigation .main-navigation ul {
        border-bottom: none;
    }

    .inner-content-wrap {
        padding: 60px 15px;
    }

    h1.single-title {
        font-size: 24px;
        letter-spacing: 1px;
        line-height: 24px;
    }

    .comment-list {
        padding: 70px 15px 20px;
    }

    .comment-list .comment-author img {
        left: -50px;
    }

    .comment-list .comment > article {
        margin-left: 50px;
    }

    #menu-primary {
        padding-left: 0;
    }

    button.dropdown-toggle,
    button.dropdown-toggle:hover,
    button.dropdown-toggle:active {
        right: -5px;
        width: 35px;
        height: 35px;
        padding: 5px;
    }

    .dropdown-toggle.toggled-on .dropdown-toggle-inner:after {
        content: "\f107";
        margin-left: -2px;
    }

    button.dropdown-toggle.toggled-on .dropdown-toggle-inner,
    button.dropdown-toggle.toggled-on:hover .dropdown-toggle-inner,
    button.dropdown-toggle.toggled-on:focus .dropdown-toggle-inner,
    button.dropdown-toggle:hover .dropdown-toggle-inner,
    button.dropdown-toggle:focus .dropdown-toggle-inner {
        background-color: #f89f8b;
    }

    .header .overlay-layer {
        padding-top: 85px !important;
    }

    header.single-header img {
        min-width: initial;
        max-width: 300%;
        height: auto;
        width: 100%;
    }

    .comment-respond {
        padding: 70px 15px;
    }

    .author-details-img-wrap {
        margin: 0 auto;
        float: none;
        width: 100px;
        margin-bottom: 35px;
    }

    .author-details-title {
        display: block;
        width: 100%;
        text-align: center;
        clear: left;
    }

    .author-details-content {
        display: block;
        width: 100%;
        text-align: center;
    }

    .content-inner-wrap {
        padding: 60px 15px;
        background: white;
        margin-top: 10px;
    }

    .timeline-section {
        padding-left: 30px;
        padding-right: 30px;
    }

    .timeline-box-wrap .info {
        padding-left: 180px;
    }

    .timeline-box-wrap .icon-container {
        margin-left: 0;
        margin: 0 auto;
        float: none;
    }

    .timeline-text {
        padding: 0 15px;
    }

    blockquote.alignleft,
    blockquote.alignright {
        max-width: 100%;
    }

    .brief.timeline .timeline-box-wrap .info {
        text-align: center;
        padding: 0;
        margin: 0;
    }
    .brief.timeline .info p {
        text-align: center;
    }
    .timeline.brief h2 {
        font-size: 28px;
    }
    #latestnews .timeline-text .text-left {
        text-align: center;
        margin-bottom: 0;
    }
    .controls-wrap {
        text-align: center;
        margin: 0 auto;
        width: 110px;
        float: none;
        height: 44px;
        position: relative;
    }
    button.control_next,
    button.control_prev {
        top: -10px;
    }
    .call-to-action h2 {
        font-size: 39px !important;
        line-height: 55px !important;
    }
    .ribbon-wrap .row > div {
        width: 100%;
        margin: 0;
    }
    .call-to-action .section-overlay-layer {
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .brief .section-overlay-layer {
        padding-bottom: 40px;
        padding-top: 40px;
    }

    .clients {
        padding: 60px 0 50px;
    }

    .clients h2.dark-text {
        margin-bottom: 50px;
    }

    #story h2 {
        font-size: 28px;
    }

    .services-wrap > .service-box {
        margin-bottom: 0;
    }

    .single-service {
        padding: 20px;
    }

    #story .section-overlay-layer {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    #services .section-header {
        padding-top: 0;
    }

    #services .section-overlay-layer {
        padding-top: 60px;
    }

    .team-member-wrap .team-member-box {
        padding-right: 40px;
        padding-left: 40px;
        width: 100%;
    }

    .member-details {
        height: 210px;
        width: 210px;
    }

    .team .section-overlay-layer {
        padding-top: 50px;
        padding-bottom: 20px;
    }

    .contact-info .section-overlay-layer {
        padding-top: 35px;
        padding-bottom: 65px;
    }

    .timeline-box-wrap {
        padding: 1em 1em 1em 1em;
    }

    .contact-info .icon-container {
        margin-bottom: 30px;
    }

    .comment-list .comment-author img {
        width: 50px;
        height: 50px;
    }

    .post-navigation, .comments-area {
        margin-top: 50px;
    }

    h2.comments-title {
        margin-top: 0;
    }
    .member-details {
        height: 230px !important;
        width: 230px !important;
    }

}

@media (max-width: 580px) {

    .post-author {
        float: none;
    }

    .single-stats {
        width: 100%;
    }

    .timeline-box-wrap .info {
        padding-left: 180px;
    }

    .timeline-box-wrap .icon-container {
        margin-left: 0;
    }

    .timeline-text {
        padding: 0 15px;
    }

    .timeline-section li .icon-container {
        margin-bottom: 0;
    }

    .very-top-left,
    .very-top-right {
        text-align: center;
        width: 100%;
    }

    .very-top-header ul.social-icons {
        margin-top: 0;
    }

    header .navbar-brand {
        padding: 7px;
    }

    h1.intro {
        font-size: 40px;
        line-height: 50px;
    }

    .archive-top-big-title {
        font-size: 28px;
        line-height: 40px;
    }

    #respond .comment-form p {
        padding-left: 0;
    }

    .pirate_forms_wrap .form_field_wrap {
        padding: 0;
    }

    .pirate-forms-submit-button {
        margin-left: 0;
    }

    header.single-header {
        min-height: 200px;
    }

    .header-search {
        margin-top: 0;
    }

}
