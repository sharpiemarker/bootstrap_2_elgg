/*!
 * Bootstrap v2.3.1
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */


.clearfix {
  *zoom: 1;
}

.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}

.clearfix:after {
  clear: both;
}


article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
  display: block;
}


html {font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

a:hover,
a:active {
  outline: 0;
}

button,
input,
select,
textarea {
  margin: 0;
  font-size: 100%;
  vertical-align: middle;
}

button,
input {
  *overflow: visible;
  line-height: normal;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}

label,
select,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
input[type="radio"],
input[type="checkbox"] {
  cursor: pointer;
}

input[type="search"] {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
  -webkit-appearance: none;
}


textarea {
  overflow: auto;
  vertical-align: top;
}



@media print {
  * {
    text-shadow: none !important;
    color: #000 !important;
    background: transparent !important;
    box-shadow: none !important;
  }

  a,
  a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: " (" attr(href) ")";
  }

  abbr[title]:after {
    content: " (" attr(title) ")";
  }

  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }

  @page  {
    margin: 0.5cm;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

}

body {margin: 0; padding:0;}

a {}

a:hover,
a:focus {}



.row {margin-left: -20px; *zoom: 1;}

.row:before,
.row:after {
  display: table;
  content: "";
  line-height: 0;
}

.row:after {
  clear: both;
}

[class*="span"] {
  float: left;
  min-height: 1px;
  margin-left:0;
  margin-right:0;
}

.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
    width: 940px;
}


.span12 {width: 940px;}
.span11 {width: 860px;}
.span10 {width: 780px;}
.span9 {width: 700px;}
.span8 {width: 620px;}
.span7 {width: 540px;}
.span6 {width: 460px;}
.span5 {width: 380px;}
.span4 {width: 300px;}
.span3 {width: 220px;}
.span2 {width: 140px;}
.span1 {width: 60px;}

.offset12 {margin-left: 980px;}
.offset11 {margin-left: 900px;}
.offset10 {margin-left: 820px;}
.offset9 {margin-left: 740px;}
.offset8 {margin-left: 660px;}
.offset7 {margin-left: 580px;}
.offset6 {margin-left: 500px;}
.offset5 {margin-left: 420px;}
.offset4 {margin-left: 340px;}
.offset3 {margin-left: 260px;}
.offset2 {margin-left: 180px;}
.offset1 {margin-left: 100px;}


.row-fluid {
  width: 100%; *zoom: 1;
}

.row-fluid:before,
.row-fluid:after {
  display: table;
  content: "";
  line-height: 0;
}

.row-fluid:after {
  clear: both;
}

.row-fluid [class*="span"] {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  float: left;
  margin-left: 2.127659574468085%; *margin-left: 2.074468085106383%;
}

.row-fluid [class*="span"]:first-child {margin-left: 0;
}

.row-fluid .controls-row [class*="span"] + [class*="span"] {margin-left: 2.127659574468085%;
}

.row-fluid .span12 {width: 100%; *width: 99.94680851063829%;}
.row-fluid .span11 {width: 91.48936170212765%; *width: 91.43617021276594%;}
.row-fluid .span10 {width: 82.97872340425532%; *width: 82.92553191489361%;}
.row-fluid .span9 {width: 74.46808510638297%; *width: 74.41489361702126%;}
.row-fluid .span8 {width: 65.95744680851064%; *width: 65.90425531914893%;}
.row-fluid .span7 {width: 57.44680851063829%; *width: 57.39361702127659%;}
.row-fluid .span6 {width: 48.93617021276595%; *width: 48.88297872340425%;}
.row-fluid .span5 {width: 40.42553191489362%; *width: 40.37234042553192%;}
.row-fluid .span4 {width: 31.914893617021278%; *width: 31.861702127659576%;}
.row-fluid .span3 {width: 23.404255319148934%; *width: 23.351063829787233%;}
.row-fluid .span2 {width: 14.893617021276595%; *width: 14.840425531914894%;}
.row-fluid .span1 {width: 6.382978723404255%; *width: 6.329787234042553%;}
.row-fluid .offset12 {margin-left: 104.25531914893617%; *margin-left: 104.14893617021275%;}
.row-fluid .offset12:first-child {margin-left: 102.12765957446808%; *margin-left: 102.02127659574467%;}
.row-fluid .offset11 {margin-left: 95.74468085106382%; *margin-left: 95.6382978723404%;}
.row-fluid .offset11:first-child {margin-left: 93.61702127659574%; *margin-left: 93.51063829787232%;}
.row-fluid .offset10 {margin-left: 87.23404255319149%; *margin-left: 87.12765957446807%;}
.row-fluid .offset10:first-child {margin-left: 85.1063829787234%; *margin-left: 84.99999999999999%;}
.row-fluid .offset9 {margin-left: 78.72340425531914%; *margin-left: 78.61702127659572%;}
.row-fluid .offset9:first-child {margin-left: 76.59574468085106%; *margin-left: 76.48936170212764%;}
.row-fluid .offset8 {margin-left: 70.2127659574468%; *margin-left: 70.10638297872339%;}
.row-fluid .offset8:first-child {margin-left: 68.08510638297872%; *margin-left: 67.9787234042553%;}
.row-fluid .offset7 {margin-left: 61.70212765957446%; *margin-left: 61.59574468085106%;}
.row-fluid .offset7:first-child {margin-left: 59.574468085106375%; *margin-left: 59.46808510638297%;}
.row-fluid .offset6 {margin-left: 53.191489361702125%; *margin-left: 53.085106382978715%;}
.row-fluid .offset6:first-child {margin-left: 51.063829787234035%; *margin-left: 50.95744680851063%;}
.row-fluid .offset5 {margin-left: 44.68085106382979%; *margin-left: 44.57446808510638%;}
.row-fluid .offset5:first-child {margin-left: 42.5531914893617%; *margin-left: 42.4468085106383%;}
.row-fluid .offset4 {margin-left: 36.170212765957444%; *margin-left: 36.06382978723405%;}
.row-fluid .offset4:first-child {margin-left: 34.04255319148936%; *margin-left: 33.93617021276596%;}
.row-fluid .offset3 {margin-left: 27.659574468085104%; *margin-left: 27.5531914893617%;}
.row-fluid .offset3:first-child {margin-left: 25.53191489361702%; *margin-left: 25.425531914893618%;}
.row-fluid .offset2 {margin-left: 19.148936170212764%; *margin-left: 19.04255319148936%;}
.row-fluid .offset2:first-child {margin-left: 17.02127659574468%; *margin-left: 16.914893617021278%;}
.row-fluid .offset1 {margin-left: 10.638297872340425%; *margin-left: 10.53191489361702%;}
.row-fluid .offset1:first-child {margin-left: 8.51063829787234%; *margin-left: 8.404255319148938%;}


[class*="span"].hide,
.row-fluid [class*="span"].hide {
  display: none;
}

[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
  float: right;
}

.container {
  margin-right: auto;
  margin-left: auto; *zoom: 1;
}

.container:before,
.container:after {
  display: table;
  content: "";
  line-height: 0;
}

.container:after {
  clear: both;
}

.container-fluid {
  padding-right: 20px;
  padding-left: 20px; *zoom: 1;
}

.container-fluid:before,
.container-fluid:after {
  display: table;
  content: "";
  line-height: 0;
}

.container-fluid:after {
  clear: both;
}



/* ***************************************
	STYLES
*************************************** */


p {
  margin: 0 0 10px;
}



/* ***************************************
	NAVIGATION
*************************************** */

.nav {margin-left: 0;
  margin-bottom: 20px;
  list-style: none;
}

.nav > li > a {
  display: block;
}

.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}

.nav > li > a > img {
  max-width: none;
}

.nav > .pull-right {
  float: right;
}

.nav-header {
  display: block;
  padding: 3px 15px;
  font-size: 11px;
  font-weight: bold;
  line-height: 20px;
  color: #999999;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
}

.nav li + .nav-header {
  margin-top: 9px;
}

.nav-list {
  padding-left: 15px;
  padding-right: 15px;
  margin-bottom: 0;
}

.nav-list > li > a,
.nav-list .nav-header {margin-left: -15px;
  margin-right: -15px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}

.nav-list > li > a {
  padding: 3px 15px;
}

.nav-list > .active > a,
.nav-list > .active > a:hover,
.nav-list > .active > a:focus {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
  background-color: #0088cc;
}

.nav-list [class^="icon-"],
.nav-list [class*=" icon-"] {
  margin-right: 2px;
}

.nav-list .divider {
  *width: 100%;
  height: 1px;
  margin: 9px 1px; *margin: -5px 0 5px;
  overflow: hidden;
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}

.nav-tabs,
.nav-pills {
  *zoom: 1;
}

.nav-tabs:before,
.nav-pills:before,
.nav-tabs:after,
.nav-pills:after {
  display: table;
  content: "";
  line-height: 0;
}

.nav-tabs:after,
.nav-pills:after {
  clear: both;
}

.nav-tabs > li,
.nav-pills > li {
  float: left;
}

.nav-tabs > li > a,
.nav-pills > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
}

.nav-tabs {
  border-bottom: 1px solid #ddd;
}

.nav-tabs > li {
  margin-bottom: -1px;
}

.nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
}

.nav-tabs > li > a:hover,
.nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #dddddd;
}

.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus {
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}

.nav-pills > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  margin-top: 2px;
  margin-bottom: 2px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.nav-pills > .active > a,
.nav-pills > .active > a:hover,
.nav-pills > .active > a:focus {
  color: #ffffff;
  background-color: #0088cc;
}

.nav-stacked > li {
  float: none;
}

.nav-stacked > li > a {
  margin-right: 0;
}

.nav-tabs.nav-stacked {
  border-bottom: 0;
}

.nav-tabs.nav-stacked > li > a {
  border: 1px solid #ddd;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}

.nav-tabs.nav-stacked > li:first-child > a {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
}

.nav-tabs.nav-stacked > li:last-child > a {
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}

.nav-tabs.nav-stacked > li > a:hover,
.nav-tabs.nav-stacked > li > a:focus {
  border-color: #ddd;
  z-index: 2;
}

.nav-pills.nav-stacked > li > a {
  margin-bottom: 3px;
}

.nav-pills.nav-stacked > li:last-child > a {
  margin-bottom: 1px;
}

.nav-tabs .dropdown-menu {
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
}

.nav-pills .dropdown-menu {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}

.nav .dropdown-toggle .caret {
  border-top-color: #0088cc;
  border-bottom-color: #0088cc;
  margin-top: 6px;
}

.nav .dropdown-toggle:hover .caret,
.nav .dropdown-toggle:focus .caret {
  border-top-color: #005580;
  border-bottom-color: #005580;
}

/* move down carets for tabs */
.nav-tabs .dropdown-toggle .caret {
  margin-top: 8px;
}

.nav .active .dropdown-toggle .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}

.nav-tabs .active .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}

.nav > .dropdown.active > a:hover,
.nav > .dropdown.active > a:focus {
  cursor: pointer;
}

.nav-tabs .open .dropdown-toggle,
.nav-pills .open .dropdown-toggle,
.nav > li.dropdown.open.active > a:hover,
.nav > li.dropdown.open.active > a:focus {
  color: #ffffff;
  background-color: #999999;
  border-color: #999999;
}

.nav li.dropdown.open .caret,
.nav li.dropdown.open.active .caret,
.nav li.dropdown.open a:hover .caret,
.nav li.dropdown.open a:focus .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  opacity: 1;
  filter: alpha(opacity=100);
}



.tabs-stacked .open > a:hover,
.tabs-stacked .open > a:focus {
  border-color: #999999;
}

.tabbable {
  *zoom: 1;
}

.tabbable:before,
.tabbable:after {
  display: table;
  content: "";
  line-height: 0;
}

.tabbable:after {
  clear: both;
}

.tab-content {
  overflow: auto;
}

.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}

.tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}

.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius: 0 0 4px 4px;
  border-radius: 0 0 4px 4px;
}

.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
  border-bottom-color: transparent;
  border-top-color: #ddd;
}

.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
  border-color: transparent #ddd #ddd #ddd;
}

.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
  -moz-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd; *border-right-color: #ffffff;
}

.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}

.tabs-right > .nav-tabs > li > a {margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
  border-color: #ddd #ddd #ddd transparent; *border-left-color: #ffffff;
}


.nav > .disabled > a {
  color: #999999;
}

.nav > .disabled > a:hover,
.nav > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  cursor: default;
}

.navbar {
  overflow: visible;
  margin-bottom: 20px; *position: relative; *z-index: 2;
}

.navbar-inner {
  min-height: 40px;
  padding-left: 20px;
  padding-right: 20px;
}

.navbar-inner:before,
.navbar-inner:after {
  display: table;
  content: "";
  line-height: 0;
}

.navbar-inner:after {
  clear: both;
}

.navbar .container {width: auto;}

.nav-collapse.collapse {
  height: auto;
  overflow: visible;
}

.navbar .brand {
  float: left;
  display: block;
  padding: 10px 20px 10px;
  margin-left: -20px;
  font-size: 20px;
  font-weight: 200;
}

.navbar .brand:hover,
.navbar .brand:focus {
  text-decoration: none;
}

.navbar-text {
  margin-bottom: 0;
  line-height: 40px;
}

.navbar-link {
}

.navbar-link:hover,
.navbar-link:focus {
}

.navbar .divider-vertical {
  height: 40px;
  margin: 0 9px;
}

.navbar .btn,
.navbar .btn-group {
  margin-top: 5px;
}

.navbar .btn-group .btn,
.navbar .input-prepend .btn,
.navbar .input-append .btn,
.navbar .input-prepend .btn-group,
.navbar .input-append .btn-group {
  margin-top: 0;
}

.navbar-form {
  margin-bottom: 0; *zoom: 1;
}

.navbar-form:before,
.navbar-form:after {
  display: table;
  content: "";
  line-height: 0;
}

.navbar-form:after {
  clear: both;
}

.navbar-form input,
.navbar-form select,
.navbar-form .radio,
.navbar-form .checkbox {
  margin-top: 5px;
}

.navbar-form input,
.navbar-form select,
.navbar-form .btn {
  display: inline-block;
  margin-bottom: 0;
}

.navbar-form input[type="image"],
.navbar-form input[type="checkbox"],
.navbar-form input[type="radio"] {
  margin-top: 3px;
}

.navbar-form .input-append,
.navbar-form .input-prepend {
  margin-top: 5px;
  white-space: nowrap;
}

.navbar-form .input-append input,
.navbar-form .input-prepend input {
  margin-top: 0;
}

.navbar-search {
  position: relative;
  float: left;
  margin-top: 5px;
  margin-bottom: 0;
}

.navbar-search .search-query {
  margin-bottom: 0;
  padding: 4px 14px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}

.navbar-static-top {
  position: static;
  margin-bottom: 0;
}

.navbar-static-top .navbar-inner {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}

.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
  margin-bottom: 0;
}

.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
  border-width: 0 0 1px;
}

.navbar-fixed-bottom .navbar-inner {
  border-width: 1px 0 0;
}

.navbar-fixed-top .navbar-inner,
.navbar-fixed-bottom .navbar-inner {
  padding-left: 0;
  padding-right: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}

.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {width: 940px;
}

.navbar-fixed-top {
  top: 0;
}

.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
  -webkit-box-shadow: 0 1px 10px rgba(0,0,0,.1);
  -moz-box-shadow: 0 1px 10px rgba(0,0,0,.1);
  box-shadow: 0 1px 10px rgba(0,0,0,.1);
}

.navbar-fixed-bottom {
  bottom: 0;
}

.navbar-fixed-bottom .navbar-inner {
  -webkit-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
  -moz-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
  box-shadow: 0 -1px 10px rgba(0,0,0,.1);
}

.navbar .nav {
  position: relative;
  left: 0;
  display: block;
  float: left;
  margin: 0 10px 0 0;
}

.navbar .nav.pull-right {
  float: right;
  margin-right: 0;
}

.navbar .nav > li {
  float: left;
}

.navbar .nav > li > a {
  float: none;
  padding: 10px 15px 10px;
  text-decoration: none;
}

.navbar .nav .dropdown-toggle .caret {
  margin-top: 8px;
}

.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
  background-color: transparent;
  text-decoration: none;
}

.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
  text-decoration: none;
  background-color: #e5e5e5;
  -webkit-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
  -moz-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
}

.navbar .btn-navbar {
  float: right;
  padding: 7px 10px;
  margin-left: 5px;
  margin-right: 5px;
}

.navbar .btn-navbar:hover,
.navbar .btn-navbar:focus,
.navbar .btn-navbar:active,
.navbar .btn-navbar.active,
.navbar .btn-navbar.disabled,
.navbar .btn-navbar[disabled] {
  color: #ffffff;
  background-color: #e5e5e5; *background-color: #d9d9d9;
}

.navbar .btn-navbar:active,
.navbar .btn-navbar.active {
  background-color: #cccccc \9;
}

.navbar .btn-navbar .icon-bar {
  display: block;
  width: 18px;
  height: 2px;
  background-color: #f5f5f5;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}

.btn-navbar .icon-bar + .icon-bar {
  margin-top: 3px;
}

.navbar .nav > li > .dropdown-menu:before {
  content: '';
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  top: -7px;
  left: 9px;
}

.navbar .nav > li > .dropdown-menu:after {
  content: '';
  display: inline-block;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  position: absolute;
  top: -6px;
  left: 10px;
}

.navbar-fixed-bottom .nav > li > .dropdown-menu:before {
  border-top: 7px solid #ccc;
  border-top-color: rgba(0, 0, 0, 0.2);
  border-bottom: 0;
  bottom: -7px;
  top: auto;
}

.navbar-fixed-bottom .nav > li > .dropdown-menu:after {
  border-top: 6px solid #ffffff;
  border-bottom: 0;
  bottom: -6px;
  top: auto;
}

.navbar .nav li.dropdown > a:hover .caret,
.navbar .nav li.dropdown > a:focus .caret {
  border-top-color: #333333;
  border-bottom-color: #333333;
}

.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
  background-color: #e5e5e5;
  color: #555555;
}

.navbar .nav li.dropdown > .dropdown-toggle .caret {
  border-top-color: #777777;
  border-bottom-color: #777777;
}

.navbar .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}

.navbar .pull-right > li > .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right {
  left: auto;
  right: 0;
}

.navbar .pull-right > li > .dropdown-menu:before,
.navbar .nav > li > .dropdown-menu.pull-right:before {
  left: auto;
  right: 12px;
}

.navbar .pull-right > li > .dropdown-menu:after,
.navbar .nav > li > .dropdown-menu.pull-right:after {
  left: auto;
  right: 13px;
}

.navbar .pull-right > li > .dropdown-menu .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
  left: auto;
  right: 100%;
  margin-left: 0;
  margin-right: -1px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}




.pull-right {
  float: right;
}

.pull-left {
  float: left;
}

.hide {
  display: none;
}

.show {
  display: block;
}

.invisible {
  visibility: hidden;
}

.affix {
  position: fixed;
}

.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -moz-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}

.fade.in {
  opacity: 1;
}

.collapse {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -moz-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease;
}

.collapse.in {
  height: auto;
}






/* ***************************************
	DEVICES
*************************************** */

@-ms-viewport {width: device-width;}

/* bootstrap sets display to none and visibility to hidden */
/* this class has been removed because it conflicts with */
/* elggs use of the same class name */
.hidden {
}

.visible-phone {display: none !important;}
.visible-tablet {display: none !important;}
.hidden-desktop {display: none !important;}
.visible-desktop {display: inherit !important;}



@media (min-width: 768px) and (max-width: 979px) {
	.hidden-desktop {display: inherit !important;}
	.visible-desktop {display: none !important;}
	.visible-tablet {display: inherit !important;}
	.hidden-tablet {display: none !important;}
}

@media (max-width: 767px) {
	.hidden-desktop {display: inherit !important;}
	.visible-desktop {display: none !important;}
	.visible-phone {display: inherit !important;}
	.hidden-phone {display: none !important;}
}


.visible-print {display: none !important;}

@media print {
  .visible-print {display: inherit !important;}
  .hidden-print {display: none !important;}
}


@media (max-width: 767px) {
	body {}

	.navbar-fixed-top,
	.navbar-fixed-bottom,
	.navbar-static-top {margin-left: -20px; margin-right: -20px;}

	.container-fluid {padding: 0;}
	.container {width: auto;}
	.row-fluid {width: 100%;}

	.row, .thumbnails {margin-left: 0;}

	[class*="span"],
	.uneditable-input[class*="span"],
	.row-fluid [class*="span"] {
		float: none;
		display: block;
		width: 100%;
		margin-left: 0;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.span12,
	.row-fluid .span12 {
		width: 100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row-fluid [class*="offset"]:first-child {margin-left: 0;}

}

@media (max-width: 480px) {
  .nav-collapse {-webkit-transform: translate3d(0, 0, 0);}
	.elgg-layout-one-column.container,
	.elgg-layout-one-sidebar.container {
		margin-left:6px;
	}
}

@media (min-width: 768px) and (max-width: 979px) {
  .row {margin-left: -20px; *zoom: 1;}


  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }

  .row:after {
    clear: both;
  }

  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }

  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {width: 724px;}

  .span12 {width: 724px;}
  .span11 {width: 662px;}
  .span10 {width: 600px;}
  .span9 {width: 538px;}
  .span8 {width: 476px;}
  .span7 {width: 414px;}
  .span6 {width: 352px;}
  .span5 {width: 290px;}
  .span4 {width: 228px;}
  .span3 {width: 166px;}
  .span2 {width: 104px;}
  .span1 {width: 42px;}

  .offset12 {margin-left: 764px;}
  .offset11 {margin-left: 702px;}
  .offset10 {margin-left: 640px;}
  .offset9 {margin-left: 578px;}
  .offset8 {margin-left: 516px;}
  .offset7 {margin-left: 454px;}
  .offset6 {margin-left: 392px;}
  .offset5 {margin-left: 330px;}
  .offset4 {margin-left: 268px;}
  .offset3 {margin-left: 206px;}
  .offset2 {margin-left: 144px;}
  .offset1 {margin-left: 82px;}

  .row-fluid {width: 100%; *zoom: 1;}

  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }

  .row-fluid:after {
    clear: both;
  }

  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.7624309392265194%; *margin-left: 2.709239449864817%;
  }

  .row-fluid [class*="span"]:first-child {margin-left: 0;}


  .row-fluid .span12 {width: 100%; *width: 99.94680851063829%;}
  .row-fluid .span11 {width: 91.43646408839778%; *width: 91.38327259903608%;}
  .row-fluid .span10 {width: 82.87292817679558%; *width: 82.81973668743387%;}
  .row-fluid .span9 {width: 74.30939226519337%; *width: 74.25620077583166%;}
  .row-fluid .span8 {width: 65.74585635359117%; *width: 65.69266486422946%;}
  .row-fluid .span7 {width: 57.18232044198895%; *width: 57.12912895262725%;}
  .row-fluid .span6 {width: 48.61878453038674%; *width: 48.56559304102504%;}
  .row-fluid .span5 {width: 40.05524861878453%; *width: 40.00205712942283%;}
  .row-fluid .span4 {width: 31.491712707182323%; *width: 31.43852121782062%;}
  .row-fluid .span3 {width: 22.92817679558011%; *width: 22.87498530621841%;}
  .row-fluid .span2 {width: 14.3646408839779%; *width: 14.311449394616199%;}
  .row-fluid .span1 {width: 5.801104972375691%; *width: 5.747913483013988%;}
  .row-fluid .offset12 {margin-left: 105.52486187845304%; *margin-left: 105.41847889972962%;}
  .row-fluid .offset12:first-child {margin-left: 102.76243093922652%; *margin-left: 102.6560479605031%;}
  .row-fluid .offset11 {margin-left: 96.96132596685082%; *margin-left: 96.8549429881274%;}
  .row-fluid .offset11:first-child {margin-left: 94.1988950276243%; *margin-left: 94.09251204890089%;}
  .row-fluid .offset10 {margin-left: 88.39779005524862%; *margin-left: 88.2914070765252%;}
  .row-fluid .offset10:first-child {margin-left: 85.6353591160221%; *margin-left: 85.52897613729868%;}
  .row-fluid .offset9 {margin-left: 79.8342541436464%; *margin-left: 79.72787116492299%;}
  .row-fluid .offset9:first-child {margin-left: 77.07182320441989%; *margin-left: 76.96544022569647%;}
  .row-fluid .offset8 {margin-left: 71.2707182320442%; *margin-left: 71.16433525332079%;}
  .row-fluid .offset8:first-child {margin-left: 68.50828729281768%; *margin-left: 68.40190431409427%;}
  .row-fluid .offset7 {margin-left: 62.70718232044199%; *margin-left: 62.600799341718584%;}
  .row-fluid .offset7:first-child {margin-left: 59.94475138121547%; *margin-left: 59.838368402492065%;}
  .row-fluid .offset6 {margin-left: 54.14364640883978%; *margin-left: 54.037263430116376%;}
  .row-fluid .offset6:first-child {margin-left: 51.38121546961326%; *margin-left: 51.27483249088986%;}
  .row-fluid .offset5 {margin-left: 45.58011049723757%; *margin-left: 45.47372751851417%;}
  .row-fluid .offset5:first-child {margin-left: 42.81767955801105%; *margin-left: 42.71129657928765%;}
  .row-fluid .offset4 {margin-left: 37.01657458563536%; *margin-left: 36.91019160691196%;}
  .row-fluid .offset4:first-child {margin-left: 34.25414364640884%; *margin-left: 34.14776066768544%;}
  .row-fluid .offset3 {margin-left: 28.45303867403315%; *margin-left: 28.346655695309746%;}
  .row-fluid .offset3:first-child {margin-left: 25.69060773480663%; *margin-left: 25.584224756083227%;}
  .row-fluid .offset2 {margin-left: 19.88950276243094%; *margin-left: 19.783119783707537%;}
  .row-fluid .offset2:first-child {margin-left: 17.12707182320442%; *margin-left: 17.02068884448102%;}
  .row-fluid .offset1 {margin-left: 11.32596685082873%; *margin-left: 11.219583872105325%;}
  .row-fluid .offset1:first-child {margin-left: 8.56353591160221%; *margin-left: 8.457152932878806%;}

}





@media (min-width: 1200px) {

  .row {margin-left: -30px; *zoom: 1;}

  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }

  .row:after {
    clear: both;
  }

  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 0px;
  }

  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {width: 1170px;
  }

  .span12 {width: 1170px;}
  .span11 {width: 1070px;}
  .span10 {width: 970px;}
  .span9 {width: 870px;}
  .span8 {width: 770px;}
  .span7 {width: 670px;}
  .span6 {width: 570px;}
  .span5 {width: 470px;}
  .span4 {width: 370px;}
  .span3 {width: 270px;}
  .span2 {width: 170px;}
  .span1 {width: 70px;}
  .offset12 {margin-left: 1230px;}
  .offset11 {margin-left: 1130px;}
  .offset10 {margin-left: 1030px;}
  .offset9 {margin-left: 930px;}
  .offset8 {margin-left: 830px;}
  .offset7 {margin-left: 730px;}
  .offset6 {margin-left: 630px;}
  .offset5 {margin-left: 530px;}
  .offset4 {margin-left: 430px;}
  .offset3 {margin-left: 330px;}
  .offset2 {margin-left: 230px;}
  .offset1 {margin-left: 130px;}

  .row-fluid {width: 100%; *zoom: 1;}

  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }

  .row-fluid:after {
    clear: both;
  }

  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.564102564102564%; *margin-left: 2.5109110747408616%;
  }

  .row-fluid [class*="span"]:first-child {margin-left: 0;
  }

  .row-fluid .controls-row [class*="span"] + [class*="span"] {margin-left: 2.564102564102564%;
  }

  .row-fluid .span12 {width: 100%; *width: 99.94680851063829%;}
  .row-fluid .span11 {width: 91.45299145299145%; *width: 91.39979996362975%;}
  .row-fluid .span10 {width: 82.90598290598291%; *width: 82.8527914166212%;}
  .row-fluid .span9 {width: 74.35897435897436%; *width: 74.30578286961266%;}
  .row-fluid .span8 {width: 65.81196581196582%; *width: 65.75877432260411%;}
  .row-fluid .span7 {width: 57.26495726495726%; *width: 57.21176577559556%;}
  .row-fluid .span6 {width: 48.717948717948715%; *width: 48.664757228587014%;}
  .row-fluid .span5 {width: 40.17094017094017%; *width: 40.11774868157847%;}
  .row-fluid .span4 {width: 31.623931623931625%; *width: 31.570740134569924%;}
  .row-fluid .span3 {width: 23.076923076923077%; *width: 23.023731587561375%;}
  .row-fluid .span2 {width: 14.52991452991453%; *width: 14.476723040552828%;}
  .row-fluid .span1 {width: 5.982905982905983%; *width: 5.929714493544281%;}
  .row-fluid .offset12 {margin-left: 105.12820512820512%; *margin-left: 105.02182214948171%;}
  .row-fluid .offset12:first-child {margin-left: 102.56410256410257%; *margin-left: 102.45771958537915%;}
  .row-fluid .offset11 {margin-left: 96.58119658119658%; *margin-left: 96.47481360247316%;}
  .row-fluid .offset11:first-child {margin-left: 94.01709401709402%; *margin-left: 93.91071103837061%;}
  .row-fluid .offset10 {margin-left: 88.03418803418803%; *margin-left: 87.92780505546462%;}
  .row-fluid .offset10:first-child {margin-left: 85.47008547008548%; *margin-left: 85.36370249136206%;}
  .row-fluid .offset9 {margin-left: 79.48717948717949%; *margin-left: 79.38079650845607%;}
  .row-fluid .offset9:first-child {margin-left: 76.92307692307693%; *margin-left: 76.81669394435352%;}
  .row-fluid .offset8 {margin-left: 70.94017094017094%; *margin-left: 70.83378796144753%;}
  .row-fluid .offset8:first-child {margin-left: 68.37606837606839%; *margin-left: 68.26968539734497%;}
  .row-fluid .offset7 {margin-left: 62.393162393162385%; *margin-left: 62.28677941443899%;}
  .row-fluid .offset7:first-child {margin-left: 59.82905982905982%; *margin-left: 59.72267685033642%;}
  .row-fluid .offset6 {margin-left: 53.84615384615384%; *margin-left: 53.739770867430444%;}
  .row-fluid .offset6:first-child {margin-left: 51.28205128205128%; *margin-left: 51.175668303327875%;}
  .row-fluid .offset5 {margin-left: 45.299145299145295%; *margin-left: 45.1927623204219%;}
  .row-fluid .offset5:first-child {margin-left: 42.73504273504273%; *margin-left: 42.62865975631933%;}
  .row-fluid .offset4 {margin-left: 36.75213675213675%; *margin-left: 36.645753773413354%;}
  .row-fluid .offset4:first-child {margin-left: 34.18803418803419%; *margin-left: 34.081651209310785%;}
  .row-fluid .offset3 {margin-left: 28.205128205128204%; *margin-left: 28.0987452264048%;}
  .row-fluid .offset3:first-child {margin-left: 25.641025641025642%; *margin-left: 25.53464266230224%;}
  .row-fluid .offset2 {margin-left: 19.65811965811966%; *margin-left: 19.551736679396257%;}
  .row-fluid .offset2:first-child {margin-left: 17.094017094017094%; *margin-left: 16.98763411529369%;}
  .row-fluid .offset1 {margin-left: 11.11111111111111%; *margin-left: 11.004728132387708%;}
  .row-fluid .offset1:first-child {margin-left: 8.547008547008547%; *margin-left: 8.440625568285142%;}

  input,
  textarea,
  .uneditable-input {margin-left: 0;
  }

  .controls-row [class*="span"] + [class*="span"] {margin-left: 30px;
  }

  input.span12,
  textarea.span12,
  .uneditable-input.span12 {width: 1156px;
  }

  input.span11,
  textarea.span11,
  .uneditable-input.span11 {width: 1056px;
  }

  input.span10,
  textarea.span10,
  .uneditable-input.span10 {width: 956px;
  }

  input.span9,
  textarea.span9,
  .uneditable-input.span9 {width: 856px;
  }

  input.span8,
  textarea.span8,
  .uneditable-input.span8 {width: 756px;
  }

  input.span7,
  textarea.span7,
  .uneditable-input.span7 {width: 656px;
  }

  input.span6,
  textarea.span6,
  .uneditable-input.span6 {width: 556px;
  }

  input.span5,
  textarea.span5,
  .uneditable-input.span5 {width: 456px;
  }

  input.span4,
  textarea.span4,
  .uneditable-input.span4 {width: 356px;
  }

  input.span3,
  textarea.span3,
  .uneditable-input.span3 {width: 256px;
  }

  input.span2,
  textarea.span2,
  .uneditable-input.span2 {width: 156px;
  }

  input.span1,
  textarea.span1,
  .uneditable-input.span1 {width: 56px;
  }

  .thumbnails {margin-left: -30px;}

  .thumbnails > li {margin-left: 30px;}

  .row-fluid .thumbnails {margin-left: 0;}

}

@media (max-width: 979px) {


  body {
    padding-top: 0;
  }

  .navbar-fixed-top,
  .navbar-fixed-bottom {
    position: static;
  }

  .navbar-fixed-top {
    margin-bottom: 20px;
  }

  .navbar-fixed-bottom {
    margin-top: 20px;
  }

  .navbar-fixed-top .navbar-inner,
  .navbar-fixed-bottom .navbar-inner {
    padding: 5px;
  }

  .navbar .container {width: auto;
    padding: 0;
  }

  .navbar .brand {
    padding-left: 10px;
    padding-right: 10px;
    margin: 0 0 0 -5px;
  }

  .nav-collapse {
    clear: both;
  }

  .nav-collapse .nav {
    float: none;
    margin: 0 0 10px;
  }

  .nav-collapse .nav > li {
    float: none;
  }

  .nav-collapse .nav > li > a {
    margin-bottom: 2px;
  }

  .nav-collapse .nav > .divider-vertical {
    display: none;
  }

  .nav-collapse .nav .nav-header {
    color: #777777;
    text-shadow: none;
  }

  .nav-collapse .nav > li > a,
  .nav-collapse .dropdown-menu a {
    padding: 9px 15px;
    font-weight: bold;
    color: #777777;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }

  .nav-collapse .btn {
    padding: 4px 10px 4px;
    font-weight: normal;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }

  .nav-collapse .dropdown-menu li + li a {
    margin-bottom: 2px;
  }

  .nav-collapse .nav > li > a:hover,
  .nav-collapse .nav > li > a:focus,
  .nav-collapse .dropdown-menu a:hover,
  .nav-collapse .dropdown-menu a:focus {
    background-color: #f2f2f2;
  }

  .navbar-inverse .nav-collapse .nav > li > a,
  .navbar-inverse .nav-collapse .dropdown-menu a {
    color: #999999;
  }

  .navbar-inverse .nav-collapse .nav > li > a:hover,
  .navbar-inverse .nav-collapse .nav > li > a:focus,
  .navbar-inverse .nav-collapse .dropdown-menu a:hover,
  .navbar-inverse .nav-collapse .dropdown-menu a:focus {
    background-color: #111111;
  }

  .nav-collapse.in .btn-group {
    margin-top: 5px;
    padding: 0;
  }

  .nav-collapse .dropdown-menu {
    position: static;
    top: auto;
    left: auto;
    float: none;
    display: none;
    max-width: none;
    margin: 0 15px;
    padding: 0;
    background-color: transparent;
    border: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }

  .nav-collapse .open > .dropdown-menu {
    display: block;
  }

  .nav-collapse .dropdown-menu:before,
  .nav-collapse .dropdown-menu:after {
    display: none;
  }

  .nav-collapse .dropdown-menu .divider {
    display: none;
  }

  .nav-collapse .nav > li > .dropdown-menu:before,
  .nav-collapse .nav > li > .dropdown-menu:after {
    display: none;
  }

  .nav-collapse .navbar-form,
  .nav-collapse .navbar-search {
    float: none;
    padding: 10px 15px;
    margin: 10px 0;
    border-top: 1px solid #f2f2f2;
    border-bottom: 1px solid #f2f2f2;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
  }

  .navbar-inverse .nav-collapse .navbar-form,
  .navbar-inverse .nav-collapse .navbar-search {
    border-top-color: #111111;
    border-bottom-color: #111111;
  }

  .navbar .nav-collapse .nav.pull-right {
    float: none;
    margin-left: 0;
  }

  .nav-collapse,
  .nav-collapse.collapse {
    overflow: hidden;
    height: 0;
  }

  .navbar .btn-navbar {
    display: block;
  }

  .navbar-static .navbar-inner {
    padding-left: 10px;
    padding-right: 10px;
  }

}

@media (min-width: 980px) {
  .nav-collapse.collapse {
    height: auto !important;
    overflow: visible !important;
  }

}










/* ***************************************
	CUSTOM
*************************************** */
.elgg-layout {}

.elgg-page-default .elgg-page-body > .elgg-inner {}

.elgg-layout-one-column.container,
.elgg-layout-one-sidebar.container {}

.elgg-layout-one-sidebar .elgg-sidebar {}

.span12, .span11, .span10, .span9, .span8, .span7, .span6, .span5, .span4, .span3, .span2, .span1 {}

.elgg-layout-one-sidebar.container .elgg-body{}
