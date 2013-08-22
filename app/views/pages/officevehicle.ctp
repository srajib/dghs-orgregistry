  <style>

  html {overflow-y: scroll}
    body {color: #222;padding: 0}
    
	html,body {height:100%}
    /* fix for inputs inline shadow */
		input[type="text"], input[type="email"], input[type="search"], input[type="password"] {
			-webkit-appearance: none;
			-moz-appearance: none;
		}
    /* no borders for buttons (ie7) */
		button {*border: none !important;*border-color: transparent !important}
		
		a,button,input {outline:none !important}

	/* webkit extra margin fix */
		@media screen and (-webkit-min-device-pixel-ratio:0) {
			button {margin: 0px}
		}
    
	/* hide all elements & show preloader */
		.js, .js body {overflow:hidden}
		.js body > * {visibility:hidden}
		.js #loading_layer {visibility:visible;display:block !important;position:absolute;top:0;left:0;width:100%;height:100%;background:#fff;z-index:10000}
		.js #loading_layer img {position:fixed;top:50%;left:50%;width:64px;height:10px;margin:-5px 0 0 -32px}
		.js .tab-pane {display:block !important}
		.js .hide {display: inherit}
	
	
	/* external links */
		.external_link {background: url(../img/external_link.png) no-repeat right center;padding-right:12px}
	
	/* main headings*/
		.heading {border-bottom: 1px solid #dcdcdc;margin-bottom: 18px;padding-bottom: 5px}
		.heading h1,.heading h2,.heading h3,h1.heading,h2.heading,h3.heading,.modal-header h3 {font-family: 'PT Sans', sans-serif;font-weight:400}
		.heading .btn {vertical-align:bottom;margin-left:10px}
    
	/* fix for .label position */
		h1 + .label {margin:13px 10px 0 0}
		h2 + .label {margin:12px 10px 0 0}
		h3 + .label {margin:7px 10px 0 0}

    /* element separation */
		.sepH_a {margin-bottom:5px}.sepH_b {margin-bottom:10px}.sepH_c {margin-bottom:20px}
		.sepV_a {margin-right:5px}.sepV_b {margin-right:10px}.sepV_c {margin-right:20px}
		.sepH_a_line {padding-bottom:6px;margin-bottom:18px;border-bottom:1px solid #dcdcdc}
		.sepH_no {margin-bottom:0}
	
		.tac {text-align:center}
		.line_sep {border-bottom: 1px solid #dcdcdc;margin-bottom: 18px;padding-bottom: 5px}
		.sml_t {font-size:11px}
		.sml {font-size:11px;color:#9d9d9d}
    
    /* accordion background animation */
		.accordion-toggle {
			-webkit-transition:background-color 0.2s ease-in-out;  
			-moz-transition:background-color 0.2s ease-in-out;  
			-o-transition:background-color 0.2s ease-in-out;  
			transition:background-color 0.2s ease-in-out;
		}

	/* text-shadow */
		.ov_boxes .ov_text,.dshb_icoNav li a,.table th,.fc thead th{text-shadow: 1px 1px 0 #fff}
		.dataTables_wrapper .sorting_asc,.dataTables_wrapper .sorting_desc {text-shadow: 1px 1px 0 #eee}

	/* Bootstrap adjustments */
		.row-fluid div[class*="span"] {min-height:1px}
		form .row-fluid + .row-fluid {margin-top:10px !important}
		
		.main_content .row-fluid + .row-fluid {margin-top: 30px}
	
		.nav-pills + .nav-pills {margin-left: 10px;padding-left:10px;border-left: 1px solid #dcdcdc}
		.nav-pills > li > a {padding: 5px 8px}
		
		.navbar-fixed-top, .navbar-fixed-bottom {z-index:999}
		.navbar-fixed-top .nav-collapse i {opacity:0.8}
		.navbar-fixed-top .nav-collapse li:hover i {opacity:1}
		.nav-list > li > a,.dropdown-menu li a {-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px}
		.navbar-fixed-top .navHover:after {height:1px;width:100%;bottom:-1px;position:absolute;content:'';display:block}
		.navbar .nav > li > a.nav_condensed {padding-left:2px;padding-right:2px}
		
		.pagination {height:26px}
		.pagination a.active {background-color: #f5f5f5}
		.pagination a.active {color: #999;cursor: default}
		.pagination a {line-height: 24px;padding:0 10px}
		.pagination ul li>div.page {display:inline}
		
		.pager a {-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px;padding:4px 12px}
		
		.label {cursor:default}
		.label-important,.badge-error {background: #C62626}
		.label-success,.badge-success {background: #70A415}
		.label-warning,.badge-warning {background: #F5AA1A}
		.label-info,.badge-info {background: #058DC7}
	
		.alert .close {top:0}
		.alert-block p + p,.alert-block ul + p,.alert-block p + ul {margin-top:10px}
		.alert-block h4 + p,.alert-block h4 + ul {margin-top:5px}
		.icon-sw {width:16px;height:16px;display:inline-block;background-repeat: no-repeat;background-position: center center}
		
		.well {-webkit-box-shadow: none;-moz-box-shadow: none;-ms-box-shadow: none;box-shadow: none}
	
		.dropdown-menu li {padding:0 5px}
		.dropdown-menu li a {padding:3px 20px 3px 8px;position:relative}
		
		.modal-footer {padding:7px 15px 8px}
		.modal {border:8px solid rgba(0, 0, 0, 0.5);-webkit-box-shadow: none;-moz-box-shadow: none;-ms-box-shadow: none;box-shadow: none}
		.modal-header {background:#e4e4e4;border-color:#d4d4d4;padding:5px 15px}
		.modal-header .close {margin-top:5px}
		.modal-body{padding:20px 15px}
		.modal-backdrop, .modal-backdrop.fade.in {opacity:.1;background:#777}
	
		.popover.top .arrow {border-top: 5px solid rgba(0,0,0,.8)}
		.popover.bottom .arrow {border-bottom: 5px solid rgba(0,0,0,.8)}
		.popover.left .arrow {border-left: 5px solid rgba(0,0,0,.8)}
		.popover.right .arrow {border-right: 5px solid rgba(0,0,0,.8)}
		.popover-inner {padding:0;border:3px solid #000;border:3px solid rgba(0,0,0,.8);background:#fff;-webkit-box-shadow: none;-moz-box-shadow: none;-ms-box-shadow: none;box-shadow: none}
		.popover-title {padding:8px 15px;font-size:14px}
	
		.main_content .accordion-heading .accordion-toggle {background-color:#f5f5f5;color:#222;text-decoration:none;background-image: url(../img/acc_icons.png);background-position: 98% 12px;background-repeat:no-repeat}
		.main_content .accordion-heading .accordion-toggle:hover {background-color:#e5e5e5}
		.main_content .accordion-heading .acc-in {background-position:98% -34px}

        .btn-gebo {text-shadow: 0px -1px 0px #004f6f;color:#fff;background-color:#006d8d;background-image:-moz-linear-gradient(top, #1e8bab, #004f6f); background-image: -ms-linear-gradient(top, #1e8bab, #004f6f); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#1e8bab), to(#004f6f)); background-image: -webkit-linear-gradient(top, #1e8bab, #004f6f); background-image: -o-linear-gradient(top, #1e8bab, #004f6f); background-image: linear-gradient(top, #1e8bab, #004f6f); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e8bab', endColorstr='#004f6f', GradientType=0); border-color: #006D8D #004f6f #004f6f #006D8D; border-color: rgba(0, 0, 0, 0.25) rgba(0, 0, 0, 0.35) rgba(0, 0, 0, 0.35) rgba(0, 0, 0, 0.25); }
        .btn-gebo:hover, .btn-gebo:active, .btn-gebo.active, .btn-gebo.disabled, .btn-gebo[disabled] {background-color: #004f6f}
        .btn-gebo:hover {color:#fff;text-shadow: 0px -1px 0px #003151}
        .btn-gebo:focus {color: #fff;-webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);-moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05); border-color: #006D8D #004f6f #004f6f #006D8D; border-color: rgba(0, 0, 0, 0.25) rgba(0, 0, 0, 0.35) rgba(0, 0, 0, 0.35) rgba(0, 0, 0, 0.25); }
        .btn-gebo.active, .btn-gebo:active { background-image: none;-webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);-moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05); color: #64d1f1; }

		.table-striped tbody tr:nth-child(2n) td, .table-striped tbody tr:nth-child(2n) th {background: #fff}

		.modal_box {background: #fff;padding:20px}
		.modal_box form {background: #fff}
		#colorbox ~ .bootstrap-timepicker,#colorbox ~ .colorpicker,#colorbox ~ .datepicker {z-index:10000}
		textarea, input {outline: none}

	/* header */
		.navbar .brand {width: 200px;padding-bottom:0;padding-top:0;font: 100 18px/40px 'PT Sans', sans-serif;text-decoration:none;color: #fff}
		.navbar .brand i {margin-top:5px}
        .navbar .caret {opacity: .6;filter: alpha(opacity=60)}
		.navbar .user_menu {margin-left: 0}
		.navbar .user_menu .nb_boxes {margin:9px 0 0}
		.navbar .user_menu .nb_boxes .label {background: transparent;background:rgba(0,0,0,.2);padding:3px 4px}
		.navbar .user_menu .nb_boxes a {cursor:pointer;float:left;margin-right:8px}
		.navbar .user_menu .nb_boxes a:last-child {margin:0}
		.btn_menu {display:none}

	/* main content */
		#maincontainer {background-image: url(../img/main_bg.gif);background-repeat:repeat-y;min-height:100%}
        #contentwrapper{float: left;width: 100%}
		.main_content{padding:64px 30px 30px;background:#fff;border-left:1px solid transparent;margin-left:240px}
		.main_content li{line-height:22px}
	
	/* sidebar */
		.sidebar{margin-left:-100%;width:240px;float:left;position:relative}
		.sidebar_sep{background:#efefef;clear:both;float:none;height:5px;border-color:#ccc;border-style:solid;border-width:1px 0;margin:14px 0}
		.sidebar_switch{text-indent:-10000px;width:16px;position:fixed;left:220px;top:45px;height:14px;cursor:pointer;z-index:100;display:block;opacity:.5}
		.on_switch {background: url(../img/sidebar_switch.png) no-repeat 0 -19px}
		.off_switch {background: url(../img/sidebar_switch.png) no-repeat 0 -1px}
		.sidebar_inner form{padding:14px 0 9px 15px}
		.sidebar_inner form input{margin:0}
	
		.sidebar_hidden .sidebar {display:none}
		.sidebar_hidden .sidebar_switch {left:4px;}
		.sidebar_hidden .main_content {margin:0;border-left:none}
		.sidebar_hidden {background: #fff}
		
		.sidebar_hidden #maincontainer {background: #fff}
		.sidebar_info {width:180px;position:relative;left:30px;bottom:10px}
		.sidebar_info ul {padding:5px 10px;margin:20px 0 0 0;font-size:11px;background:#fafafa;border:1px solid #e5e5e5;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px}
        .sidebar_info ul li {line-height:26px;overflow:hidden;border-bottom:1px dashed #ccc}
        .sidebar_info ul li:last-child {border:none}
        .sidebar_info .act {float:right}
        
		.sidebar .accordion {border-top: 1px solid #ccc;margin-bottom: 20px;margin-right:1px}
        .sidebar .accordion-heading {text-shadow: 1px 1px 0 #efefef;background: #e0e0e0;-webkit-box-shadow: inset 0px 1px 0px 0px #ececec;box-shadow: inset 0px 1px 0px 0px #ececec}
        .sidebar .accordion-heading a:hover {background-color: #cfcfcf}
        .sidebar .accordion-group{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;margin-bottom:0;border-color:#ccc;border-style:solid;border-width:0 0 1px}
        .sidebar .accordion-group a{color:#222;text-decoration:none!important}
        .sidebar .accordion-group .active a{color:#fff}
        .sidebar .accordion-group .accordion-heading a{color:#222}
        .sidebar .accordion-inner{border-top:1px solid #ccc;background:#fafafa}	

		.sdb_h_active a {background: url("../img/bullet_green.png") no-repeat 98% center}

	/* login page */
		.login_page  {margin: 0px 20px 20px; padding-top:30px;}
		.login_page .login_box {width:380px;margin:0 auto;background:#fff;border:1px solid #ccc;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px;-webkit-box-shadow: 0 0 6px rgba(0,0,0,0.2);-moz-box-shadow: 0 0 6px rgba(0,0,0,0.2);-ms-box-shadow: 0 0 6px rgba(0,0,0,0.2);box-shadow: 0 0 6px rgba(0,0,0,0.2);margin-bottom:10px}
		.login_page .top_b {text-shadow:0 1px 0 rgba(255,255,255,.5);font: 100 18px/42px 'PT Sans', sans-serif;height:42px;padding:0 20px;background: #e0e0e0;border-bottom:1px solid #ccc;-moz-border-radius-topleft: 6px;-moz-border-radius-topright: 6px;-moz-border-radius-bottomright: 0px;-moz-border-radius-bottomleft: 0px;-webkit-border-radius: 6px 6px 0px 0px;border-radius: 6px 6px 0px 0px;font-size:15px}
		.login_page .cnt_b {padding:30px 0;width:66%;margin:0 auto}
		.login_page form {margin-bottom:0}
		.login_page .btm_b {padding:12px 20px;border-top:1px solid #e7e7e7;background:#f7f7f7;-moz-border-radius-topleft: 0px;-moz-border-radius-topright: 0px;-moz-border-radius-bottomright: 6px;-moz-border-radius-bottomleft: 6px;-webkit-border-radius: 0px 0px 6px 6px;border-radius: 0px 0px 6px 6px}
		.login_page .links_b {font-size:11px;text-align:center}
		.login_page .link_reg {font-size:11px;padding:5px 0 0;display:block}
		.alert-login {margin:10px 10px 0}
	   
	/* error pages */
		.error_page {background:#eee}
		.error_page,.error_page body,.error_page .error_box {height:100%}
		.error_page h1 {font-family: 'Jockey One', sans-serif;font-size: 52px;line-height:1.1;text-transform: uppercase;color: #067ead;text-shadow: 2px 2px 0px rgba(255,255,255,.5), 4px 4px 0px rgba(0,0,0,.1);margin-bottom:10px;padding:40px 0 0 300px}
		.error_page p {color:inherit;font-size:16px;line-height:24px;font-weight:200;margin-left:300px}
		.error_page .back_link {margin-left:300px}
		.error_page .error_box {background: url(../img/error_big.png) no-repeat 0 0;padding:0;width:72%;margin: 0 auto}

    /* search page */
        .search_page .well {padding:10px 20px;line-height:26px}
        .search_page .well select {margin:0;width:auto}
        .search_page .search_panel {border:1px solid #e0e0e0;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px;margin-bottom:20px}
        .search_page .search_item {border-bottom:1px solid #e0e0e0;padding:10px 20px 10px 30px;position:relative}
        .search_page .search_item:nth-child(even) {background:#f2f8fd}
        .search_page .search_item:last-child {border:none}
        .search_page .search_content {padding-left:110px}
        .search_page .search_content h4 {font-size:14px;margin-bottom:6px}
        .search_page .search_content h4 {vertical-align:text-top}
        .search_page .search_content strong {color:#666}
        .search_page .search_content small {color:#666;font-size:11px}
        .search_page .searchNb {position:absolute;top:10px;left:10px;color:#ccc;font-size:11px}
        .search_page .result_view a {opacity:0.3}
        .search_page .result_view a.active {opacity:1}
        
        .search_page .box_view {border:none;margin-left:-1%}
        .search_page .box_view .search_item {margin-left:1%;border:1px solid #e0e0e0;height:200px;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px;margin:0 0 1% 1%;float:left;width:32.333%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box}
        .search_page .box_view h4 {height:20px;overflow:hidden}
        .search_page .box_view .item_description {max-height:92px;overflow:hidden}
        .search_page .box_view .label {position:absolute;top:-9px;right:-6px}
        
        .sidebar_filters {padding:30px 30px 20px}
        .sidebar_filters h3 {font-size:13px;color:#067EAD}
        .sidebar_filters .filter_items {padding:5px 10px 10px;margin-bottom:10px;border-bottom:1px dashed #ccc}

	/* forms */
		.formRow:last-child input, .formRow:last-child textarea, .formRow:last-child select, .uneditable-input {margin-bottom: 0}
		.formRow small {display:block;font-size:11px;color:#999;line-height:14px}
		.formSep {margin-bottom:12px;padding-bottom:12px;border-bottom:1px dashed #dcdcdc}
		
		.stacked select, .stacked input[type="text"],.stacked textarea {display:block}
		
		.help-inline,.help-block {font-size:11px;margin:-4px 0 0 2px}
		
		.form-horizontal .help-block {margin-top:2px}
		.form-horizontal .control-group {margin-bottom:14px}
		
		input.focused {border-color: rgba(82,168,236,.8);-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,.1), 0 0 8px rgba(82,168,236,.6);-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,.1), 0 0 8px rgba(82,168,236,.6);box-shadow: inset 0 1px 3px rgba(0,0,0,.1), 0 0 8px rgba(82,168,236,.6);outline: 0;z-index:2;position:relative}
		
		.f_warning > label,.f_warning .help-block,.f_warning .help-inline{color:#c09853}
		.f_warning input,.f_warning select,.f_warning textarea{color:#c09853;border-color:#c09853}
		.f_warning input:focus,.f_warning select:focus,.f_warning textarea:focus{-webkit-box-shadow:0 0 6px #dbc59e;-moz-box-shadow:0 0 6px #dbc59e;box-shadow:0 0 6px #dbc59e;border-color:#a47e3c}
		.f_warning .input-prepend .add-on,.f_warning .input-append .add-on{color:#c09853;background-color:#fcf8e3;border-color:#c09853}
		
		.f_error input,.f_error select,.f_error textarea{color:#b94a48;border-color:#b94a48}
		.f_error input:focus,.f_error select:focus,.f_error textarea:focus{-webkit-box-shadow:0 0 6px #d59392;-moz-box-shadow:0 0 6px #d59392;box-shadow:0 0 6px #d59392;border-color:#953b39}
		.f_error .input-prepend .add-on,.f_error .input-append .add-on{color:#b94a48;background-color:#f2dede;border-color:#b94a48}
		.f_error label.error {display:block;font-size:11px;font-weight:700;color:#C62626}
		input[type="text"] + label.error,input[type="password"] + label.error, select + label.error, textarea + label.error {margin-top:-6px}
		.f_error label.radio + label.error,.f_error label.checkbox + label.error {margin-top:5px}
		.input-prepend.f_error label.error,.input_append.f_error  label.error {margin-top:4px}
		.control-group.f_error label.error {margin-top:2px}
		
		.f_success > label,.f_success .help-block,.f_success .help-inline{color:#468847}
		.f_success input,.f_success select,.f_success textarea{color:#468847;border-color:#468847}
		.f_success input:focus,.f_success select:focus,.f_success textarea:focus{-webkit-box-shadow:0 0 6px #7aba7b;-moz-box-shadow:0 0 6px #7aba7b;box-shadow:0 0 6px #7aba7b;border-color:#356635}
		.f_success .input-prepend .add-on,.f_success .input-append .add-on{color:#468847;background-color:#dff0d8;border-color:#468847}
		
		.ui-tooltip label {margin-bottom:0}
		.f_legend {font-size:16px;line-height:16px;padding-bottom:10px;margin-bottom:22px;border-bottom:1px solid #dcdcdc}
		.radio.inline, .checkbox.inline {margin-left:0 !important;margin-right:10px}
		
        .f_req {font-size:13px;color:#ff0000;font-family: helvetica, arial, sans-serif}
		.form-horizontal .controls.text_line {line-height:25px}
		
		.row-fluid input[class*="span"],.row-fluid textarea[class*="span"],.row-fluid select[class*="span"] {display:inline-block}
		.row-fluid input[class*="span"] + input[class*="span"], .row-fluid textarea[class*="span"] + textarea[class*="span"], .row-fluid select[class*="span"] + select[class*="span"] {display:block}
		
		textarea {resize: none}
    /* file upload */
        .btn.btn-file{overflow:hidden;position:relative;vertical-align:middle}
        .btn.btn-file > input[type=file]{width:100%;position:absolute;left:0;top:0;opacity:0;cursor:pointer}
        .fileupload{margin-bottom:9px}
        .fileupload .uneditable-input{display:inline-block;margin-bottom:0;vertical-align:middle;height:28px !important;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box}
        .fileupload .thumbnail{overflow:hidden;display:inline-block;margin-bottom:5px;vertical-align:middle;text-align:center}
        .fileupload .thumbnail > img{display:block;vertical-align:middle;max-height:100%}
        .fileupload .btn{vertical-align:middle}
        .fileupload-exists .fileupload-new,.fileupload-new .fileupload-exists{display:none}
        .fileupload-inline .fileupload-controls{display:inline}
        .fileupload-new .input-append .btn-file{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}
        .fileupload .fileupload-preview {vertical-align:middle}
        .fileupload .close.fileupload-exists {vertical-align:middle}
        
	/* multiselect 2-col */
		#multi_search {width:152px;margin:4px}
		.ms-container {margin-bottom:10px}
		.ms-container .ms-optgroup li.ms-elem-selectable {padding-left:20px}
		.ms-container h4 {font-weight:100;padding:4px 6px;background:#efefef;border-bottom:1px solid #ccc;-webkit-border-radius: 4px 4px 0px 0px;border-radius: 4px 4px 0px 0px}
		.ms-container #multi_search + .ms-list {height:196px}
		#sForm_deselect {margin:2px;display:block}
		
	/* input spinner */
		.ui-spinner button {height:14px;position:absolute;background:none;border:none;width:18px;padding:0;background: url(../img/spinner_arrows.gif) no-repeat 0 -100px;cursor:pointer}
		.ui-spinner .ui-spinner-up {top:0;right:0;background-position:0 0}
		.ui-spinner .ui-spinner-down {top:14px;right:0;background-position:0 -14px}
		.ui-spinner .ui-spinner-up:hover {background-position:-18px 0}
		.ui-spinner .ui-spinner-down:hover {background-position:-18px -14px}
		.ui-spinner input,.ui-spinner input:focus {display:block !important;margin:0 !important;padding:0;min-height:28px !important;height:28px !important;-webkit-box-shadow:none;-moz-box-shadow:none;-ms-box-shadow:none;box-shadow:none}
		.ui-spinner ul {margin:0}
		.ui-spinner li {line-height:28px}
		.ui-spinner{-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);position:relative;margin-bottom:10px;font-size:13px;height:28px;line-height:28px;color:#555;background-color:#fff;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;overflow:hidden;padding:0 24px 0 8px}
		.ui-spinner .ui-spinner-box {background: none;border: none !important}	
		
	/* animated progresbars */
		.pbar .ui-progressbar-value {display:block !important}
		.pbar {overflow: hidden}
		.percent,.elapsed {position:relative;text-align: right; font-size: 12px}

		
	/* ul list styles */
		.list_a,.list_b,.list_c,.list_d {margin-left:0;list-style:none}
		.list_a li {background: url(../img/bullet_blue.png) no-repeat 3px 4px;padding-left:25px}
		.list_b li {background: url(../img/bullet_green.png) no-repeat 3px 4px;padding-left:25px}
		.list_c li {background: url(../img/bullet_orange.png) no-repeat 3px 4px;padding-left:25px}
		.list_d li {background: url(../img/bullet_red.png) no-repeat 3px 4px;padding-left:25px}		
		
	/* prettyprint <pre> block */
		.lit{color:#195f91}
		.fun{color:#dc322f}
		.str,.atv{color:#D14}
		.kwd,.linenums .tag{color:#1e347b}
		.typ,.atn,.dec,.var{color:teal}
		.pln{color:#48484c}
		.prettyprint{background-color:#f7f7f9;border:1px solid #e1e1e8;padding:8px}
		.prettyprint.linenums{-webkit-box-shadow:inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;-moz-box-shadow:inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;box-shadow:inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0}
		ol.linenums{margin:0 0 0 33px}
		ol.linenums li{padding-left:12px;color:#bebec5;line-height:18px;text-shadow:0 1px 0 #fff}
		.com,.pun,.opn,.clo{color:#93a1a1}		
		
	/* rowlink plugin */
		[data-rowlink] td, td[data-rowlink],[data-msg_rowlink] td, td[data-msg_rowlink] {cursor: pointer}	
		[data-rowlink] td.nohref, td.nohref[data-rowlink], [data-msg_rowlink] td.nohref, td.nohref[data-msg_rowlink] {cursor:default}
	
	/* actions links */
		.act{background:inherit;border:none;display:inline;color:#555;font-weight:700;-webkit-transition:text-shadow .1s linear;-moz-transition:text-shadow .1s linear;-ms-transition:text-shadow .1s linear;-o-transition:text-shadow .1s linear;transition:text-shadow .1s linear;padding:0}
		a.act:hover{color:#333;text-decoration:none;text-shadow:1px 1px 3px rgba(85,85,85,0.5)}
		.act-primary{color:#006dcc}
		a.act-primary:hover{color:#04c;text-shadow:1px 1px 3px rgba(0,109,204,0.5)}
		.act-info{color:#49afcd}
		a.act-info:hover{color:#2f96b4;text-shadow:1px 1px 3px rgba(75,175,206,0.5)}
		.act-success{color:#70A415}
		a.act-success:hover{color:#468847;text-shadow:1px 1px 3px rgba(81,164,81,0.5)}
		.act-warning{color:#F5AA1A}
		a.act-warning:hover{color:#f89406;text-shadow:1px 1px 3px rgba(192,152,84,0.5)}
		.act-danger{color:#C62626}
		a.act-danger:hover{color:#bd362f;text-shadow:1px 1px 3px rgba(185,72,70,0.5)}
		.act.disabled,.act[disabled]{color:#AAA;cursor:not-allowed}
		a.act.disabled:hover,.act[disabled]:hover{color:#AAA;text-shadow:none}
		.form-actions .act{line-height:30px}
		
	/* tabs */
		.tabbable-bordered{-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}
		.tabbable-bordered > .nav-tabs {margin: 0}
		.tabbable-bordered .tab-content {border-color: #ddd;border-style:solid;border-width:0;overflow:auto;padding:18px 0 0}
		.tabbable-bordered > .tab-content{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px;border-width:0 1px 1px;padding:20px 20px 10px}
	
	/* dashboard icon navigation*/
		.dshb_icoNav {margin:0;text-align:center}
		.dshb_icoNav li {-webkit-box-shadow: inset 0px 1px 0px 0px #fff;box-shadow: inset 0px 1px 0px 0px #fff;text-align:center;list-style:none;display:inline-block;margin:0 5px 10px;background: #f9f9f9;background: -moz-linear-gradient(top, #f9f9f9 0%, #efefef 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f9f9f9), color-stop(100%,#efefef));background: -webkit-linear-gradient(top, #f9f9f9 0%,#efefef 100%);background: -o-linear-gradient(top, #f9f9f9 0%,#efefef 100%);background: -ms-linear-gradient(top, #f9f9f9 0%,#efefef 100%);background: linear-gradient(top, #f9f9f9 0%,#efefef 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9f9f9', endColorstr='#efefef',GradientType=0 );border:1px solid #e2e2e2;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px}
		.dshb_icoNav li:hover {border-color:#d2d2d2;-moz-box-shadow: 0 0 6px #ccc;-webkit-box-shadow: 0 0 6px #ccc;box-shadow: 0 0 6px #ccc}
		.dshb_icoNav li a {position:relative;display:block;padding:42px 8px 8px;width:88px;height:22px;font-size:12px;color:#222;background-repeat:no-repeat;background-position: center 10px}
		.dshb_icoNav li a:hover {text-decoration:none}
		.dshb_icoNav .label {position:absolute;right:-5px;top:-5px}
		.iconNav_left {text-align:left}
		.iconNav_right {text-align:right}
	
	/* overview boxes (+small charts) */
		.ov_boxes {list-style: none;display: inline-block;margin:0 0 -20px;text-align:center}
		.ov_boxes li {-webkit-box-shadow: inset 0px 1px 0px 0px #fff;box-shadow: inset 0px 1px 0px 0px #fff;line-height:18px;background: #f9f9f9;background: -moz-linear-gradient(top, #f9f9f9 0%, #ededed 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f9f9f9), color-stop(100%,#ededed));background: -webkit-linear-gradient(top, #f9f9f9 0%,#ededed 100%);background: -o-linear-gradient(top, #f9f9f9 0%,#ededed 100%);background: -ms-linear-gradient(top, #f9f9f9 0%,#ededed 100%);background: linear-gradient(top, #f9f9f9 0%,#ededed 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9f9f9', endColorstr='#ededed',GradientType=0 );border: 1px solid #e2e2e2;display: inline-block;margin:0 10px 10px;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px;padding: 0 10px}
		.ov_boxes .p_canvas{margin-right:12px;float:left;border-right:1px solid #dcdcdc;-webkit-box-shadow:1px 0 0 0 #fff;-moz-box-shadow:1px 0 0 0 #fff;box-shadow:1px 0 0 0 #fff;padding:10px 14px 6px 4px}
		.ov_boxes .ov_text{text-align:left;width:150px;font-size:12px;float:left;padding:9px 10px 7px 0}
		.ov_boxes .ov_text strong{font-size:16px;display:block}
		.p_canvas {width:50px}

	/* widgets */
        .w-box {-webkit-box-shadow:  0px 1px 2px 0px #efefef;box-shadow:  0px 1px 2px 0px #efefef}
        .w-box + .w-box {margin-top:20px}
        .w-box-header {height:32px;line-height:32px;border:1px solid #ddd;padding:0 10px;background: #fbfbfb;background: -moz-linear-gradient(top,  #fbfbfb 0%, #f1f1f1 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#f1f1f1));background: -webkit-linear-gradient(top,  #fbfbfb 0%,#f1f1f1 100%);background: -o-linear-gradient(top,  #fbfbfb 0%,#f1f1f1 100%);background: -ms-linear-gradient(top,  #fbfbfb 0%,#f1f1f1 100%);            background: linear-gradient(top,  #fbfbfb 0%,#f1f1f1 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#f1f1f1',GradientType=0 );font-weight:700;color:#666;font-size:11px}
        .w-box-header .btn-group {margin-top:5px}
        .w-box-header .dropdown-menu {font-size:12px}
        .w-box-header input {padding:2px;margin:-2px 0 0}
        .w-box-content {border:1px solid #ddd;border-top:none}
        .w-box-content.cnt_a {padding:10px}
        .w-box-content table,.w-box-content pre {margin-bottom:0}
        .w-box-content pre {-webkit-border-radius: 0 0 0 0;-moz-border-radius: 0 0 0 0;-ms-border-radius: 0 0 0 0;border-radius: 0 0 0 0;border:none}
        .w-box-content .no-th tr:first-child td {border-top:none}
        .w-box-content .gebo-upload {margin:0}
        .w-box-content .gebo-upload .plupload_filelist_header {border-top:none}
        .w-box-content .gebo-upload .plupload_filelist_footer {border-bottom:none}
        .w-box-content .tabbable {position:relative;top:-28px;margin-bottom:-28px}
        .w-box-content .nav-tabs {border-bottom:none}
        .w-box-content .nav-tabs {float:right;clear:both}
        .w-box-content .nav-tabs > li > a {padding:4px 6px;font-size:11px}
        .w-box-content .nav-tabs > li.active > a {background:#fff !important}
        .w-box-content .nav-tabs > li > a:hover {border-color:#ddd #ddd transparent;background: transparent}
        .w-box-content .tab-content {clear:both}
        .w-box-content .tab-pane {padding:0 10px 10px}
        .w-box-footer {border:1px solid #ddd;padding:8px 10px;background: #fdfdfd;border-top:none}
        .w-box-footer .pagination {margin:0; font-size:11px;height:22px}
        .w-box-footer .pagination a {line-height:20px}

    /* sortable/searchable list */
		.user_list {list-style: none;margin:0}
		.user_list li {padding:0 8px 8px;margin-bottom:8px;border-bottom: 1px dashed #dcdcdc;line-height:normal }
		.user_list small {font-size: 11px;color:#9b9b9b}
	
	/* file manager */
        #kcfinder_iframe {height:500px;margin-bottom:30px;border:1px solid #adaba9}

	/* icon list */
		.icon_list_a,.icon_list_b,.icon_list_c,.icon_list_d {list-style: none;margin:0 0 30px}
		.icon_list_a li,.icon_list_b li,.icon_list_d li {padding:4px 0;width:30px;text-align:center;border:1px solid #dcdcdc;float:left;margin:4px;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px}
		.icon_list_c li {padding:4px 0;width:40px;text-align:center;border:1px solid #dcdcdc;float:left;margin:4px;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px}
	
    /* aditional icons */
        .icon-adt_trash,.icon-adt_atach,.icon-adt_enter {background: url(../img/adt-icons.png) no-repeat 0 0;width:16px;height:16px}
        .icon-adt_atach {background-position:0 0}
        .icon-adt_trash {background-position:0 -24px}
        .icon-adt_enter {background-position:0 -47px;width:12px;height:12px}
    
	/* google maps */    
		.company_add_form legend {margin-bottom:10px;font-size:15px}
		#g_map img { max-width: none; }
		#g_map label {display:inline;margin:0;color:#000;font-size: 11px;line-height:normal}
		
	/* gallery grid */
		.wmk_grid ul {list-style: none;margin:0;position:relative}
		.wmk_grid ul li {background-color: #fff;display: none;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box}
		.wmk_grid ul li>a,.wmk_grid ul li>a img {display: block}
		.wmk_grid ul li>a img {width:100%}
		.wmk_grid ul li p {color: #666;font-size: 12px;margin: 8px 4px 2px;overflow:hidden}
		.wmk_grid ul li p a {display:inline-block;margin-left:10px;float:right;opacity:.6}
		.wmk_grid ul li p a:hover {opacity:1}
		.wmk_grid ul li p span {overflow:hidden;white-space:nowrap;text-overflow:ellipsis;display:block}
		.wmk_grid li.thumbnail:hover {border-color:#0088CC}
		.wmk_grid .thumbnail>a {position:relative}
		.wmk_grid .thumbnail>a .vid_ico {position:absolute;top:10px;right:10px;display:block;width:16px;height:16px}
		.wmk_grid .self_vid .vid_ico {background: url(../img/vid_local.png) no-repeat 0 0}
		.wmk_grid .yt_vid .vid_ico {background: url(../img/vid_yt.png) no-repeat 0 0}
		.wmk_grid .vimeo_vid .vid_ico {background: url(../img/vid_vimeo.png) no-repeat 0 0}
        
		/* small gallery grid */
			.small_grid ul li p {line-height:1.3}
			.small_grid ul li p span {font-size:11px}
		/* large gallery grid */
			.large_grid ul li p span {width:70%}
	
		.video-container {position: relative;padding-bottom: 55.75%;height: 0;overflow: hidden;background: rgba(0,0,0,.3)}
		.video-container iframe,.video-container object,.video-container embed {position: absolute;top: 0;left: 0;width: 100%;height: 100%}
		#cboxContent .video-js {width:640px !important;height:360px !important}
		
	/* datatables */
		div.dataTables_length label{float:left;text-align:left}
		div.dataTables_length select{width:75px}
		div.dataTables_filter label{float:right}
		div.dataTables_info{padding-top:8px}
		div.dataTables_paginate{float:right;margin:0}
		.dataTables_wrapper{position:relative;overflow:hidden}
		.dataTables_wrapper table.table {clear:both;margin-bottom:6px!important;max-width:inherit}
		.dataTables_wrapper table.table thead .sorting,table.table thead .sorting_asc,table.table thead .sorting_desc,table.table thead .sorting_asc_disabled,table.table thead .sorting_desc_disabled{cursor:hand;cursor:pointer}
		.dataTables_wrapper table.table thead .sorting{background: #e9f3f8 url(../lib/datatables/images/sort_both.png) no-repeat center right}
		.dataTables_wrapper table.table thead .sorting_asc{background: #e9f3f8 url(../lib/datatables/images/sort_asc.png) no-repeat center right}
		.dataTables_wrapper table.table thead .sorting_desc{background: #e9f3f8 url(../lib/datatables/images/sort_desc.png) no-repeat center right}
		.dataTables_wrapper table.table thead .sorting_asc_disabled{background: #e9f3f8 url(../lib/datatables/images/sort_asc_disabled.png) no-repeat center right}
		.dataTables_wrapper table.table thead .sorting_desc_disabled{background: #e9f3f8 url(../lib/datatables/images/sort_desc_disabled.png) no-repeat center right}
		.dataTables_wrapper table.dataTable th:active{outline:none}
		.dataTables_wrapper .row{margin:0 0 5px}
		.dataTables_wrapper select{min-height:inherit}
		.dataTables_wrapper table + .row{margin-bottom:0;margin-top:10px}
		.dataTables_scrollBody{-webkit-overflow-scrolling:touch}
		.dataTables_wrapper .top,.dataTables_wrapper .bottom{background-color:#f5f5f5;border:1px solid #CCC;padding:15px}
		.top .dataTables_info{float:none}
		.dataTables_empty{text-align:center!important;font-size:15px;background:#fff!important;padding:20px 0!important}
		.dataTables_scroll{clear:both;margin-bottom:10px}
		.dataTables_scrollHeadInner table.table-bordered{-webkit-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0;border-bottom:none}
		.dataTables_scrollHeadInner table.table-bordered,.dataTables_scrollHeadInner table.table-bordered thead{border-bottom:none}
		.dataTables_scrollBody table{border-top:none}
		.dataTables_processing{position:absolute;top:50%;margin-top:-24px;z-index:100;left:50%;width:250px;margin-left:-125px;border:1px solid #ddd;text-align:center;color:#000;background:#fff;font-size:15px!important;-webkit-box-shadow:0 0 4px rgba(0,0,0,0.2);-moz-box-shadow:0 0 4px rgba(0,0,0,0.2);-ms-box-shadow:0 0 4px rgba(0,0,0,0.2);box-shadow:0 0 4px rgba(0,0,0,0.2);padding:10px 0}
		.dataTables_wrapper .center{text-align:center}
		.dataTables_wrapper .details,.dataTables_wrapper .details:hover{background:#ddd!important}
		.dataTables_wrapper .details table td{background:#fff!important}
		.dataTables_scrollHeadInner table.table,.dataTables_wrapper .details table.table{margin:0!important}
		.dataTables_wrapper .dt_actions {float:left;margin-right:20px}
		.dataTables_empty {cursor:default}
		.dTableR {width:100% !important}

	/* floating header list */
		.-list-container {height:400px}
		.-list-container dd,.-list-container li,.-list-container .-list-fakeheader {list-style:none;margin:0;padding:0 10px;line-height:34px;height:34px;border-bottom:1px solid #efefef;margin:0;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
		.-list-container dt,.-list-container .list_heading,.-list-container .-list-fakeheader {line-height:34px;height:34px;padding:0 10px;border-bottom:none;background: #f9f9f9;background: -moz-linear-gradient(top,  #f9f9f9 0%, #ececec 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f9f9f9), color-stop(100%,#ececec));background: -webkit-linear-gradient(top,  #f9f9f9 0%,#ececec 100%);background: linear-gradient(top,  #f9f9f9 0%,#ececec 100%);border-bottom: 1px solid #d6d6d6}
		.-list-container .list_heading h3 {font-size:13px;line-height:36px}
		.-list-container {border:1px solid #ccc;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px;margin:0;overflow-x:hidden}
		.ui-list {overflow:hidden}
		.ui-list ul {margin:0}
		#list-buttons {margin:0 0 6px}
		#list-buttons .btn {margin:0 4px 4px 0}
        .list-outer {position:relative;padding:30px 0}
        .slide-nav {cursor:pointer;position:absolute;left:50%;margin-left:-28px;height:14px;border-style:solid;border-color:#ccc;background:#f9f9f9;padding:5px 20px}
        .slide-up {top:5px;border-width:1px 1px 0;-webkit-border-radius: 4px 4px 0px 0px;border-radius: 4px 4px 0px 0px}
        .slide-down {bottom:5px;border-width:0px 1px 1px;-webkit-border-radius: 0px 0px 4px 4px;border-radius: 0px 0px 4px 4px}
        .slide-nav i {opacity:.6}
		.slide-nav:hover {background:#f0f0f0}
		.slide-nav:hover i {opacity:1}
		
	/*  responsive table */
		.mediaTableWrapper{position:relative}
		.mediaTableWrapperWithMenu{padding-top:48px}
		.mediaTableMenu li,.tableMenu li {padding:0 10px}
		.mediaTableMenu{position:absolute;top:0;left:0}
		.activeMediaTable th.optional,.activeMediaTable td.optional{display:none}
		@media (min-width: 1280px) {
			.activeMediaTable th.optional,.activeMediaTable td.optional{display:table-cell;_display:block}
			*+html .activeMediaTable th.optional,*+html .activeMediaTable td.optional{display:block}
		}
		@media (min-width: 980px) {
			.sidebar_hidden .activeMediaTable th.optional,.sidebar_hidden  .activeMediaTable td.optional{display:table-cell;_display:block}
			*+html .sidebar_hidden .activeMediaTable th.optional,*+html .sidebar_hidden .activeMediaTable td.optional{display:block}
		}
		@media (min-width: 480px) and (max-width: 767px) {
			.activeMediaTable th.optional,.activeMediaTable td.optional{display:table-cell;_display:block}
			*+html .activeMediaTable th.optional,*+html .activeMediaTable td.optional{display:block}
		}

	/* tables */
		.table_checkbox {width:13px}
		.table_vam th, .table_vam td {vertical-align: middle}
		.tab-content table.table {margin-bottom: 0 !important}
	/* mailbox */
		.mbox .heading {padding-bottom:0}
		.mbox .heading .nav-tabs {margin-bottom:0;border-bottom:none}
		
		.mbox .dataTables_wrapper .row {-webkit-box-shadow: inset 0px 1px 0px 0px #fefefe;box-shadow: inset 0px 1px 0px 0px #fefefe;margin:0;padding-bottom:10px;padding:8px 5px;border-width:1px 0;border-style:solid;border-color:#ddd;background:#f3f3f3}
		.mbox .dataTables_wrapper .row label {margin-bottom:0;line-height:28px}
		.mbox .dataTables_wrapper .row div.dataTables_info {padding-top:0;line-height:26px;color:#404040}
		.dataTables_wrapper table.mbox_table {margin:0 !important}
		.mbox_table tbody {color:#404040}
		.mbox_table .select_msg {margin-top:-2px;position:relative}
		.mbox_table .rowChecked td {background:#fffeed}
		.mbox .unread {font-weight:700}
		.js .mbox_star {display:none}
		.mbox_star {visibility:hidden;cursor:pointer}
		.mbox_star.splashy-star_full {visibility:visible}
		.mbox .pagination a {background:#fff}
		.mbox .pagination .disabled span, .pagination .disabled a, .pagination .disabled a:hover {background: transparent}
		.mbox .pagination .active a {background:#f5f5f5}

    /* chat */
        .chat_box select {margin:0}
		.chat_box .chat_content {border:1px solid #ddd;-webkit-border-radius:6px;border-radius:6px}
		.chat_box .chat_message {margin-bottom:10px}
		.chat_box .chat_editor_box {margin:10px;border:1px solid #ddd;-webkit-border-radius:6px;border-radius:6px;min-height:40px}
		.chat_box .chat_editor_heading {height:20px;line-height:20px;padding:2px 8px 0}
		.chat_box .chat_editor_box textarea {border:none;margin:0;-webkit-box-shadow:none;box-shadow:none;-webkit-border-radius: 0px 0px 6px 6px;border-radius: 0px 0px 6px 6px}
		.chat_box .chat_editor_box .send_btns {margin:5px}
		.chat_box .chat_heading {-webkit-box-shadow: inset 0px 1px 0px 0px #fefefe;box-shadow: inset 0px 1px 0px 0px #fefefe;font-size:12px;font-weight:700;color:#444;padding:6px 12px;font-size:13px;height:21px;line-height:22px;background:#f4f4f4;border-bottom:1px solid #ddd;-webkit-border-radius: 6px 6px 0px 0px;border-radius: 6px 6px 0px 0px} 
        .chat_box .chat_heading .chat_close {opacity:.8;cursor:pointer}
		.chat_box .msg_window {height:300px;overflow-y:auto;margin:5px 10px}
		.chat_box .chat_msg {margin:10px 5px}
		.chat_box .chat_msg .chat_msg_heading {font-size:11px;padding:0 5px}
		.chat_box .chat_msg .chat_msg_body {padding:4px 8px;border:1px solid #ddd;background:#fafafa;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px}
		.chat_box .chat_msg .chat_msg_date {float:right}
		.chat_box .chat_msg .chat_user_name {color:#CC333F;font-weight:700}
		.chat_box .chat_msg p {margin:0}
		.chat_box .chat_sidebar {border:1px solid #ddd;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px} 
		.chat_box .chat_sidebar .chat_user_list {margin:0}
        .chat_box .chat_sidebar .chat_user_list li {list-style:none;border-bottom:1px solid #e6e6e6;overflow:hidden} 
        .chat_box .chat_sidebar .chat_user_list li:last-child {border:none}
		.chat_box .chat_sidebar .chat_user_list li input {float:left;margin:15px 0 0 6px}
		.chat_box .chat_sidebar .chat_user_list li a {display:block;margin-left:16px;padding:5px 20px 5px 12px;line-height:32px}
        .chat_box .chat_sidebar .chat_user_list li a:hover {text-decoration:none}
		.chat_box .chat_sidebar .chat_user_list li img {vertical-align:top;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px;margin-right:5px;border:1px solid #ddd}
		.chat_box .chat_sidebar .chat_user_list li.online a {background: url(../img/bullet_green.png) no-repeat 98% center} 
        .chat_box .chat_sidebar .chat_user_list li.offline a {background: url(../img/bullet_red.png) no-repeat 98% center;cursor:default} 
		.chat_box .chat_sidebar .chat_user_list li.active {background-color:#ffffef}
		.chat_box .chat_sidebar .chat_user_list li a span {color:#888;font-size:11px}

	/*  Calculator */
		#calc {padding:10px 0 0}
		#calc input.btn {width:44px;text-align:center}
		#calc .control-group {padding-left:12px}
		
	/* vcard */	
		.vcard .thumbnail {float:left}
		.vcard > ul {list-style:none;margin:10px 0 0 120px;overflow:hidden}
		.vcard > ul > li:first-child {border-top:1px dashed #dcdcdc}
		.vcard > ul > li {padding:8px;border-bottom:1px dashed #dcdcdc}
		.vcard .item-key {float:left;color:#888}
		.vcard .vcard-item {margin-left:120px}
		.vcard .v-heading {background:#F0F9FF;font-weight:700}
		.vcard .v-heading span {font-weight:100;font-size:11px;color:#666}
		.vcard .item-list-more,.vcard .thumbnail.item-list-more {display:none}
		
		
	/* sidebar scroll */ 
		.antiScroll{display:inline-block;position:relative;overflow:hidden}
		.antiscroll-scrollbar{background:#bbb;background:rgba(0,0,0,0.5);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;-webkit-box-shadow:0 0 1px #fff;-moz-box-shadow:0 0 1px #fff;box-shadow:0 0 1px #fff;position:absolute;opacity:0;filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);-webkit-transition:linear 300ms opacity;-moz-transition:linear 300ms opacity;-o-transition:linear 300ms opacity}
		.antiscroll-scrollbar-shown{opacity:1;filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=100)}
		.antiscroll-scrollbar-horizontal{height:7px;margin-left:2px;bottom:2px;left:0}
		.antiscroll-scrollbar-vertical{width:7px;margin:2px 0;left:2px;top:0}
		.antiscroll-inner{overflow-y:scroll}
		.antiScroll,.antiscroll-content,.antiscroll-inner{width:240px}
		.antiscroll-inner::-webkit-scrollbar,.antiscroll-inner::scrollbar{width:0;height:0}

    /* document view */
        .doc_view {border:1px solid #ddd;-webkit-border-radius: 6px;-moz-border-radius: 6px;-ms-border-radius: 6px;border-radius: 6px;margin-bottom:10px}
        .doc_view .doc_view_header dl {margin-bottom:0;-webkit-background-clip:border;-moz-background-clip:border-box;background-clip:border-box;background-color:#f8f8f8;padding:10px 10px 6px;margin-top:0;border-bottom:1px solid #ddd;-webkit-border-radius: 6px 6px 0 0;-moz-border-radius: 6px 6px 0 0;-ms-border-radius: 6px 6px 0 0;border-radius: 6px 6px 0 0}
        .doc_view .doc_view_header dd {margin-bottom:4px}
        .doc_view .doc_view_header dd,.doc_view .doc_view_header dt {line-height:20px}
		.doc_view .doc_view_content {padding:20px}
		.doc_view .doc_view_footer {line-height:28px;-webkit-background-clip:border;-moz-background-clip:border-box;background-clip:border-box;background-color:#f8f8f8;padding:8px 20px;border-top:1px solid #ddd;-webkit-border-radius: 0 0 6px 6px;-moz-border-radius: 0 0 6px 6px;-ms-border-radius: 0 0 6px 6px;border-radius: 0 0 6px 6px}
	
	/* sortable elements */
        .ui-sortable-placeholder { border: 2px dashed #aaa;background:transparent;visibility: visible !important; height: 50px !important;margin-bottom:20px}
		.ui-sortable-helper {z-index:2100 !important}
		.ui-sortable .w-box-header {cursor:move}
		.sort-disabled .w-box-header {cursor:default}	
		.sort_ph {min-height:80px !important;background:#f8f8f8;padding-bottom:20px}

    /* submenus */
        
		.caret-right {display: inline-block;position:absolute;top: 8px;right: 10px;width: 0;height: 0;vertical-align: top;border-left: 4px solid #000;border-top: 4px solid transparent;border-bottom: 4px solid transparent;content: "";opacity: 0.6;filter: alpha(opacity=60)}
		.dropdown-menu .sub-menu {left: 100%;position: absolute;top: 0;visibility: hidden;margin-top: -1px}
        .dropdown-menu li {position:relative}
        .dropdown-menu .sub-open {visibility: visible;display: block}
        .navbar .sub-menu:before {border-bottom: 7px solid transparent;border-left: none;border-right: 7px solid rgba(0, 0, 0, 0.2);border-top: 7px solid transparent;left: -7px;top: 5px}
        .navbar .sub-menu:after {
            border-top: 6px solid transparent;
            border-left: none;
            border-right: 6px solid #fff;
            border-bottom: 6px solid transparent;
            left: 10px;
            top: 6px;
            left: -6px;
        }
		
		.sub-dropdown > a:hover .caret-right, .sub-dropdown.active > a .caret-right, .sub-dropdown.active > a:hover .caret-right {border-left: 4px solid #fff;opacity:1;filter: alpha(opacity=100);}
		.navHover .dropdown-menu {display:block}


	/* backgrounds */
		.ptrn_a .main_content {background-image: url(../img/bg_a.png)}
		.ptrn_b .main_content {background-image: url(../img/bg_b.png)}
		.ptrn_c .main_content {background-image: url(../img/bg_c.png)}
		.ptrn_d .main_content {background-image: url(../img/bg_d.png)}
		.ptrn_e .main_content {background-image: url(../img/bg_e.png)}

	/* Style switcher */
		.ssw_trigger{position:fixed;top:62px;right:-1px;z-index:1001;text-decoration: none;font-size: 12px;color:#fff;width:15px;padding: 2px 3px;background:#333;display: block;-webkit-border-top-left-radius: 8px;-webkit-border-bottom-left-radius: 8px;-moz-border-radius-topleft: 8px;-moz-border-radius-bottomleft: 8px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;border:1px solid transparent}
		.ssw_trigger.active {border-color:#555}
		.style_switcher {font-size:12px;z-index:1000;position:fixed;top:54px;right:0;display:none;background:#000;background: rgba(0,0,0,.8);border:1px solid #111;-moz-border-radius-topright: 12px;-webkit-border-top-right-radius: 12px;-moz-border-radius-bottomright: 12px;-webkit-border-bottom-right-radius: 12px;width: 180px;height: auto;padding: 30px 30px 30px 50px;color:#f5f5f5}
		.style_switcher p {margin:0 0 6px;font-weight:700}
		.style_item {display:block;margin-right:6px;height:20px;width:20px;border:2px solid #fff;float:left;text-indent:-9999px}
		.style_switcher .ptrn_def {background: #fff }
		
		.style_switcher .ssw_ptrn_a {background: #fff url(../img/bg_a.png)}
		.style_switcher .ssw_ptrn_b {background: #fff url(../img/bg_b.png)}
		.style_switcher .ssw_ptrn_c {background: #fff url(../img/bg_c.png)}
		.style_switcher .ssw_ptrn_d {background: #fff url(../img/bg_d.png)}
		.style_switcher .ssw_ptrn_e {background: #fff url(../img/bg_e.png)}
		
		.style_switcher .dark_theme {background:#000}
		.style_switcher .blue_theme {background:#067ead}
		.style_switcher .brown_theme {background:#b47f44}
		.style_switcher .green_theme {background:#8da452}
		.style_switcher .eastern_blue_theme {background:#1294af}
		.style_switcher .tamarillo_theme {background:#af2c36}
		.style_active {border-color:#6fd05b}
		.style_switcher label {color:#fff}
		
		
	/* media queries */

		@media (min-width: 980px) {
			.sidebar {position:fixed;top:40px;left:0;margin-left:0}
			.navbar-fixed-top .nav-collapse {height:40px !important}
			.navbar .nav > li > a {padding-top:10px}
			/* fixed layout */ 
			.gebo-fixed {max-width:940px;margin:0 auto}
			.gebo-fixed header .container-fluid {max-width:940px;margin:0 auto}
			.gebo-fixed #maincontainer {border-right:1px solid #ccc;border-left:1px solid #ccc}
			.gebo-fixed .sidebar {left:50%;margin-left:-469px}
			.gebo-fixed .sidebar_switch {left:50%;margin-left:-250px}
			.gebo-fixed.sidebar_hidden .sidebar_switch {margin-left:-465px;left:50%}
			.gebo-fixed .search_page .box_view .search_item {width:48%;height:210px;margin:0 0 2% 2%}
            .gebo-fixed .activeMediaTable th.optional,.gebo-fixed .activeMediaTable td.optional{display:none}
			.gebo-fixed .brand {width:120px}
			
			.sidebar_right #maincontainer {background-image: url(../img/main_bg_right.gif);background-position: right 0 }
			.sidebar_right .sidebar {left:auto;right:-1px}
			.sidebar_right .sidebar_switch {left:auto;right:6px}
			.sidebar_right .main_content {margin-right:240px;margin-left:0;border-left:none}
			.sidebar_right.sidebar_hidden #maincontainer {background: #fff}
			.sidebar_right.sidebar_hidden .main_content {margin:0}
			
			.gebo-fixed.sidebar_right .sidebar {left:auto;right:50%;margin-left:0;margin-right:-470px}
			.gebo-fixed.sidebar_right .sidebar_switch {left:auto;right:50%;margin-left:0;margin-right:-465px}
			.gebo-fixed.sidebar_hidden.sidebar_right .sidebar_switch {laeft:auto;margin-left:0;margin-right:-465px;right:50%}
			
		}
			
		@media (max-width: 1279px) {
			.search_page .box_view .search_item {width:49%}
		}
		
		@media (max-width: 979px) {
			#maincontainer {background: #fff}
			.row > [class*="span"],.navbar-fixed-top {margin:0 !important}
			.navbar-fixed-top .container-fluid {padding:0 !important}
			.navbar .brand {width:auto;line-height:18px;margin:3px 0 6px 34px}
			.navbar .user_menu {padding-top:5px}
			.navbar .user_menu .dropdown-menu {margin:8px 10px 0 0}
			.navbar .user_menu > li > a {padding:0 10px 0 0}
			.navbar-inner {position:relative;z-index:990;min-height:28px}
			.nav-collapse a {color:#fff !important}
			.nav-collapse .dropdown-menu li {padding:0}
			.nav-collapse .dropdown-menu li a {font-weight:400}
			.nav-collapse .sub-menu {display:block;left:0;right:auto;position:relative;visibility:visible}
			.nav-collapse .caret-right {display:none}
			.btn-navbar {margin-top:2px !important;padding:2px 8px !important}
			.user_menu .dropdown {margin-left:10px}
			.main_content {margin:0 !important;border:none !important;padding:28px 14px 20px}
			.main_content .row-fluid + .row-fluid {margin-top:20px}
			.sidebar {height: 400px;position:absolute;top:39px;left:0;background:#f1f1f1;border-width:0 1px;border-style:solid;border-color:#ccc;margin:0;-webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.2);-moz-box-shadow: 1px 1px 4px rgba(0,0,0,0.2);box-shadow: 1px 1px 4px rgba(0,0,0,0.2);z-index:1000;-webkit-border-radius: 0px 5px 5px 0px;border-radius: 0px 5px 5px 0px}
			.sidebar:after {border-bottom: 6px solid #fff;border-left: 6px solid transparent;border-right: 6px solid transparent;content: "";display: inline-block;left: 15px;position: absolute;top: -6px}
            .sidebar_hidden .sidebar {border:none}
			.sidebar_switch {position:absolute;z-index:1000;left:5px !important;top:14px;padding:0 10px}
			.off_switch {background-position:center 1px}
			.on_switch {background-position:center -17px}
            .sidebar_inner {padding-bottom:0 !important}
			div.sticky-queue {z-index:10000;top:0}
			.ms-container {background-position: 160px 83px}
			.ms-container ul.ms-list {width:152px;}
			#multi_search {width:136px}
			.btn_menu {display:block;clear:both;padding:8px 0 6px;border-top:1px solid rgba(255,255,255,.2);box-shadow: 0 -1px 0 rgba(0,0,0,.2);text-align:center;position:relative;top:4px;cursor:pointer}
            .btn_menu span {opacity:.8}
			.ssw_trigger {display:none}
		}
		
		@media (max-width: 767px) {
			.row-fluid > [class*="span"] + [class*="span"] {margin-top:20px}
			.row-fluid input[class*="span"],.row-fluid textarea[class*="span"],.row-fluid select[class*="span"] {width:80%}
			.input-prepend, .input-append {margin-bottom:10px}
			form .row-fluid > [class*="span"] + [class*="span"] {margin-top:0}
			.login_page {margin-top:10px}
			.login_page .content_b {margin: 0 20px}
			.search_page .box_view .search_item {width:99%;margin-bottom:3%}
			.error_page .error_box {background:none;width:100%}
			.error_page .error_box h1 {padding:40px 20px 0}
			.error_page .error_box p {margin:0 20px 10px}
			.error_page .error_box .back_link {margin:0 20px}
			.style_switcher {display:none}
			.dshb_icoNav {text-align:center}
			.dshb_icoNav li {float:none;display:inline-block}
			#cboxContent .video-js {width:100% !important;height:100% !important}
			.vcard > .thumbnail {display:none}
			.vcard > ul {margin:0}
			.item-list .thumbnail {float:none;display:inline-block;margin:0 10px 10px 0}
			
		}
		
		@media (max-width: 479px) {
			.login_page .login_box {width:100%}
			.login_page .cnt_b {padding:20px 0;width:68%;margin:0 auto}
            .-list-container {height:300px}
		}
		
		@media (min-width: 1681px) {
			body {max-width:1680px;margin:0 auto}
			header .container-fluid {max-width:1640px;margin:0 auto}
			#maincontainer {border-right:1px solid #ccc}
			.main_content {border-left:none}
			.sidebar {left:50%;margin-left:-841px;border-left:1px solid #ccc}
			.sidebar_switch {left:50%;margin-left:-620px}
			.sidebar_hidden .main_content {border-left:1px solid #ccc}
			.sidebar_hidden .sidebar_switch {margin-left:-832px;left:50%}
		}
</style>

<?php  
	$db_host="10.10.10.5";
	$db_name="dghs_hrm";
    $db_user="dghshrmDB";
	$db_pswd="dghshrmDB@2012";
	
	//error_reporting(E_ALL);
    //ini_set('display_errors','On');
	//$db_host="103.247.238.173";
	//$db_name="orgnew";
	//$db_user="root";
	//$db_pswd="mistestdb";
	//mysql_connect("103.247.238.173","root","mistestdb");
    //mysql_select_db("orgnew");

	$dbh_connection=MYSQL_CONNECT($db_host, $db_user, $db_pswd) OR DIE("Can't connected to database server. Please Contact with WebAdmin.");
	@mysql_select_db($db_name) or die("Can't select database. Please Contact with WebAdmin.");
	
	
		
?>
<div>                          <a href="http://app.dghs.gov.bd/orgregistry/pages/officevehicleprint/<?php echo $id;?>">Print</a>
<?php 
$facility_info = mysql_query("SELECT * FROM lhb_ans_2013 WHERE org_iid='$id'");
if(mysql_num_rows($facility_info)<1)
{
echo 'No Record found';
}

while($rowfac= mysql_fetch_array($facility_info))
        { 
		
		  //print_r($rowfac); exit;
		?>
<p class="f_legend">Sanctioned Vehicles & Office Equipment</p>	
                                        <table class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th rowspan="3">Equipment</th>
                                            <th colspan="3">&nbsp;</th>
                                            <th rowspan="3">Not installed (No.)</th>
                                          </tr>
                                          <tr>
                                            <th rowspan="2">Fanctional (No.)</th>
                                            <th colspan="2">Non-functional</th>
                                          </tr>
                                          <tr>
                                            <th>Repairable (No.)</th>
                                            <th>Non-Repairable (No.)</th>
                                          </tr>
                                                                                      
                                            <tr>
                                              <th colspan="5">Radiology equipment</th>
                                            </tr>
                                          </thead>
                                            <tbody><tr>
                                              <td>X-ray machine (100 mA)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a451'];?>" name="a451" class="span12 onlynumber ui-spinner-box" id="a295" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a452'];?>" name="a452" class="span12 onlynumber ui-spinner-box" id="a296" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a453'];?>" name="a453" class="span12 onlynumber ui-spinner-box" id="a297" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a454'];?>" name="a454" class="span12 onlynumber ui-spinner-box" id="a" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (300 mA)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a455'];?>" name="a455" class="span12 onlynumber ui-spinner-box" id="a299" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a456'];?>" name="a456" class="span12 onlynumber ui-spinner-box" id="a300" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a457'];?>" name="a457" class="span12 onlynumber ui-spinner-box" id="a301" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a458'];?>" name="a458" class="span12 onlynumber ui-spinner-box" id="a3" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (500 mA)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a459'];?>" name="a459" class="span12 onlynumber ui-spinner-box" id="a303" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a460'];?>" name="a460" class="span12 onlynumber ui-spinner-box" id="a304" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a461'];?>" name="a461" class="span12 onlynumber ui-spinner-box" id="a305" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a462'];?>" name="a462" class="span12 onlynumber ui-spinner-box" id="a270" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (digital)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a463'];?>" name="a463" class="span12 onlynumber ui-spinner-box" id="a307" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a464'];?>" name="a464" class="span12 onlynumber ui-spinner-box" id="a308" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a465'];?>" name="a465" class="span12 onlynumber ui-spinner-box" id="a309" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a466'];?>" name="a466" class="span12 onlynumber ui-spinner-box" id="a294" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (portable)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a467'];?>" name="a467" class="span12 onlynumber ui-spinner-box" id="a311" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a468'];?>" name="a468" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a469'];?>" name="a469" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a470'];?>" name="a470" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Dental X-ray unit</td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a471'];?>" name="a471" class="span12 onlynumber ui-spinner-box" id="a306" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a472'];?>" name="a472" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a473'];?>" name="a473" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a474'];?>" name="a474" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Spiral CT Scan</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a475'];?>" name="a475" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a476'];?>" name="a476" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a477'];?>" name="a477" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a478'];?>" name="a478" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>C-arm</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a479'];?>" name="a479" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a480'];?>" name="a480" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a481'];?>" name="a481" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a482'];?>" name="a482" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Mamogram machine</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a483'];?>" name="a483" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a484'];?>" name="a484" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a485'];?>" name="a485" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a486'];?>" name="a486" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Dehumidifier</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a487'];?>" name="a487" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a488'];?>" name="a488" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a489'];?>" name="a489" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a490'];?>" name="a490" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                              <tr>
                                                <td>MRI machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a491'];?>" name="a491" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a492'];?>" name="a492" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a493'];?>" name="a493" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a494'];?>" name="a494" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Ultrasonogram machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a495'];?>" name="a495" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a496'];?>" name="a496" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a497'];?>" name="a497" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a498'];?>" name="a498" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Anesthesiology/surgical equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Anesthesia machine with ventilator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a499'];?>" name="a499" class="span12 onlynumber ui-spinner-box" id="a295" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a500'];?>" name="a500" class="span12 onlynumber ui-spinner-box" id="a296" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a501'];?>" name="a501" class="span12 onlynumber ui-spinner-box" id="a297" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a502'];?>" name="a502" class="span12 onlynumber ui-spinner-box" id="a" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Anesthesia machine without ventilator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a503'];?>" name="a503" class="span12 onlynumber ui-spinner-box" id="a299" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a504'];?>" name="a504" class="span12 onlynumber ui-spinner-box" id="a300" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a505'];?>" name="a505" class="span12 onlynumber ui-spinner-box" id="a301" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a506'];?>" name="a506" class="span12 onlynumber ui-spinner-box" id="a3" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Autoclave</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a507'];?>" name="a507" class="span12 onlynumber ui-spinner-box" id="a303" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a508'];?>" name="a508" class="span12 onlynumber ui-spinner-box" id="a304" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a509'];?>" name="a509" class="span12 onlynumber ui-spinner-box" id="a305" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a510'];?>" name="a510" class="span12 onlynumber ui-spinner-box" id="a270" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Electric cautery machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a511'];?>" name="a511" class="span12 onlynumber ui-spinner-box" id="a307" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a512'];?>" name="a512" class="span12 onlynumber ui-spinner-box" id="a308" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a513'];?>" name="a513" class="span12 onlynumber ui-spinner-box" id="a309" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a514'];?>" name="a514" class="span12 onlynumber ui-spinner-box" id="a294" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Diathermy machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a515'];?>" name="a515" class="span12 onlynumber ui-spinner-box" id="a311" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a516'];?>" name="a516" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a517'];?>" name="a517" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a518'];?>" name="a518" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Operating microscope</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a519'];?>" name="a519" class="span12 onlynumber ui-spinner-box" id="a306" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a520'];?>" name="a520" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a521'];?>" name="a521" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a522'];?>" name="a522" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Ceiling mounting OT Light</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a523'];?>" name="a523" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a524'];?>" name="a524" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a525'];?>" name="a525" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a526'];?>" name="a526" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Portable OT Light</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a527'];?>" name="a527" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a528'];?>" name="a528" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a529'];?>" name="a529" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a530'];?>" name="a530" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Fracture table</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a531'];?>" name="a531" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a532'];?>" name="a532" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a533'];?>" name="a533" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a534'];?>" name="a534" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Hydrolic OT Table</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a535'];?>" name="a535" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a536'];?>" name="a536" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a536'];?>" name="a537" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a538'];?>" name="a538" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Sterilizer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a539'];?>" name="a539" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a540'];?>" name="a540" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a541'];?>" name="a541" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a542'];?>" name="a542" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Sucker machine (electric)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a543'];?>" name="a543" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a544'];?>" name="a544" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a545'];?>" name="a545" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a546'];?>" name="a546" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Ventilator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a547'];?>" name="a547" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a548'];?>" name="a548" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a549'];?>" name="a549" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a550'];?>" name="a550" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Cardiology equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Coronary angiogram machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a551'];?>" name="a551" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a552'];?>" name="a552" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a553'];?>" name="a553" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a554'];?>" name="a554" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Debrililator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a555'];?>" name="a555" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a556'];?>" name="a556" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a557'];?>" name="a557" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a558'];?>" name="a558" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>ECG machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a559'];?>" name="a559" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a560'];?>" name="a560" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a561'];?>" name="a561" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a562'];?>" name="a562" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Echocardiogram machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a563'];?>" name="a563" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a564'];?>" name="a564" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a565'];?>" name="a565" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a566'];?>" name="a566" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Cardiac monitor</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a567'];?>" name="a567" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a568'];?>" name="a568" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a569'];?>" name="a569" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a570'];?>" name="a570" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Holter monitor</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a571'];?>" name="a571" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a572'];?>" name="a572" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a573'];?>" name="a573" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a574'];?>" name="a574" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Nebulizer machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a575'];?>" name="a575" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a576'];?>" name="a576" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a577'];?>" name="a577" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a578'];?>" name="a578" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Pulse oximeter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a579'];?>" name="a579" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a580'];?>" name="a580" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a581'];?>" name="a581" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a582'];?>" name="a582" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Dental equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Dental unit</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a583'];?>" name="a583" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a584'];?>" name="a584" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a585'];?>" name="a585" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a586'];?>" name="a586" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Gastroeneterology equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Endoscopy machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a587'];?>" name="a587" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a588'];?>" name="a588" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a589'];?>" name="a589" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a590'];?>" name="a590" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Laparoscopic machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a591'];?>" name="a591" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a592'];?>" name="a592" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a593'];?>" name="a593" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a594'];?>" name="a594" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Lab equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Biochemical auto-analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a595'];?>" name="a595" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a596'];?>" name="a596" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a597'];?>" name="a597" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a598'];?>" name="a598" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Centrifuge machine (electric)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a599'];?>" name="a599" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a600'];?>" name="a600" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a601'];?>" name="a601" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a602'];?>" name="a602" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Colorimeter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a603'];?>" name="a603" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a604'];?>" name="a604" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a605'];?>" name="a605" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a606'];?>" name="a606" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Electrolyte analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a607'];?>" name="a607" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a608'];?>" name="a608" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a609'];?>" name="a609" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a610'];?>" name="a610" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>ELISA machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a611'];?>" name="a611" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a612'];?>" name="a612" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a613'];?>" name="a613" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a614'];?>" name="a614" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Gas analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a615'];?>" name="a615" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a616'];?>" name="a616" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a617'];?>" name="a617" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a618'];?>" name="a618" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Hormone analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a619'];?>" name="a619" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a620'];?>" name="a620" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a621'];?>" name="a621" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a622'];?>" name="a622" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Blood cell counter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a623'];?>" name="a623" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a624'];?>" name="a624" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a625'];?>" name="a625" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a626'];?>" name="a626" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Microscope (binocular)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a627'];?>" name="a627" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a628'];?>" name="a628" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a629'];?>" name="a629" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a630'];?>" name="a630" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Obstetric equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Fetal monitor</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a631'];?>" name="a631" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a632'];?>" name="a632" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a633'];?>" name="a633" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a634'];?>" name="a634" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Ophthalmic equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>FACO machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a635'];?>" name="a635" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a636'];?>" name="a636" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a637'];?>" name="a637" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a638'];?>" name="a638" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Retinoscope</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a639'];?>" name="a639" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a640'];?>" name="a640" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a641'];?>" name="a641" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a642'];?>" name="a642" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Pediatric equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Baby incubator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a643'];?>" name="a643" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a644'];?>" name="a644" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a645'];?>" name="a645" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a646'];?>" name="a646" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Phototherapy unit</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a647'];?>" name="a647" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a648'];?>" name="a648" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a649'];?>" name="a649" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a650'];?>" name="a650" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Blood bank equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Blood bag centrifuge</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a651'];?>" name="a651" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a652'];?>" name="a652" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a653'];?>" name="a653" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a654'];?>" name="a654" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Laminar flow hood</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a655'];?>" name="a655" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a656'];?>" name="a656" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a657'];?>" name="a657" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a658'];?>" name="a658" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>pH meter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a659'];?>" name="a659" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a660'];?>" name="a660" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a661'];?>" name="a661" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a662'];?>" name="a662" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Hemoglobin photometer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a663'];?>" name="a663" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a664'];?>" name="a664" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a665'];?>" name="a665" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a666'];?>" name="a666" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Blood bank refrigerator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a667'];?>" name="a667" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a668'];?>" name="a668" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a669'];?>" name="a669" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a670'];?>" name="a670" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Blood plasma separating machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a671'];?>" name="a671" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a672'];?>" name="a672" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a673'];?>" name="a673" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a674'];?>" name="a674" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Platelet separating machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a675'];?>" name="a675" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a676'];?>" name="a676" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a677'];?>" name="a677" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a678'];?>" name="a678" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Deep freeze (plasma)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a679'];?>" name="a679" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a680'];?>" name="a680" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a681'];?>" name="a681" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a682'];?>" name="a682" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Deep freeze (RBC)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a683'];?>" name="a683" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a684'];?>" name="a684" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a685'];?>" name="a685" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a686'];?>" name="a686" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Refrigerator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a687'];?>" name="a687" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a688'];?>" name="a688" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a689'];?>" name="a689" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a690'];?>" name="a690" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Psychiatry equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>ECT machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a691'];?>" name="a691" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a692'];?>" name="a692" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a693'];?>" name="a693" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a694'];?>" name="a694" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>EEG machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a695'];?>" name="a695" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a696'];?>" name="a696" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a697'];?>" name="a697" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a698'];?>" name="a698" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Urology equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Cystoscopic machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a699'];?>" name="a699" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a700'];?>" name="a700" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a701'];?>" name="a701" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a702'];?>" name="a702" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Vehicles</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Ambulance</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a703'];?>" name="a703" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a704'];?>" name="a704" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a705'];?>" name="a705" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a706'];?>" name="a706" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Bus</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a707'];?>" name="a707" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a708'];?>" name="a708" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a709'];?>" name="a709" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a710'];?>" name="a710" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Jeep</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a711'];?>" name="a711" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a712'];?>" name="a712" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a713'];?>0" name="a713" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a714'];?>" name="a714" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Microbus</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a715'];?>" name="a715" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a716'];?>" name="a716" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a717'];?>" name="a717" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a718'];?>" name="a718" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Pickup</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a719'];?>" name="a719" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a720'];?>" name="a720" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a721'];?>" name="a721" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a722'];?>" name="a722" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Air conditioner</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Air conditioner (split type)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a723'];?>" name="a723" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a724'];?>" name="a724" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a725'];?>" name="a725" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a726'];?>" name="a726" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Air conditioner (window)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a727'];?>" name="a727" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a728'];?>" name="a728" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a729'];?>" name="a729" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a730'];?>" name="a730" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Generator</th></tr></thead>
                                              <tbody><tr>
                                                <td>Generator (diesel/petrol)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a731'];?>" name="a731" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a732'];?>" name="a732" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a733'];?>" name="a733" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a734'];?>" name="a734" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Generator (Gas)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a735'];?>" name="a735" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a736'];?>" name="a736" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a737'];?>" name="a737" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a738'];?>" name="a738" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Solar panel</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a739'];?>" name="a739" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a740'];?>" name="a740" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a741'];?>" name="a741" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a742'];?>" name="a742" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>IPS</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a743'];?>" name="a743" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a744'];?>" name="a744" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a745'];?>" name="a745" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a746'];?>" name="a746" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">ICT equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Computer (desktop)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a747'];?>" name="a747" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a748'];?>" name="a748" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a749'];?>" name="a749" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a750'];?>" name="a750" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Laptop</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a751'];?>" name="a751" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a752'];?>" name="a752" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a753'];?>" name="a753" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a754'];?>" name="a754" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (dot matrix)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a755'];?>" name="a755" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a756'];?>" name="a756" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a757'];?>" name="a757" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a758'];?>" name="a758" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (inkjet)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a759'];?>" name="a759" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a760'];?>" name="a760" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a761'];?>" name="a761" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a762'];?>" name="a762" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (laser)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a763'];?>" name="a763" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a764'];?>" name="a764" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a765'];?>" name="a765" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a766'];?>" name="a766" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Scanner</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a767'];?>" name="a767" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a768'];?>" name="a768" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a769'];?>" name="a769" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a770'];?>" name="a770" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>UPS</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a771'];?>" name="a771" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a772'];?>" name="a772" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a773'];?>" name="a773" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a774'];?>" name="a774" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Fax</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a775'];?>" name="a775" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a776'];?>" name="a776" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a777'];?>" name="a777" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a778'];?>" name="a778" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Intercom</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a779'];?>" name="a779" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a780'];?>" name="a780" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a781'];?>" name="a781" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a782'];?>" name="a782" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Internet fixed line</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a783'];?>" name="a783" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a784'];?>" name="a784" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a785'];?>" name="a785" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a786'];?>" name="a786" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Internet wireless line (Modem)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a787'];?>" name="a787" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a788'];?>" name="a788" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a789'];?>" name="a789" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a790'];?>" name="a790" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Multimedia</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a791'];?>" name="a791" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a792'];?>" name="a792" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a793'];?>" name="a793" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a794'];?>" name="a794" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">OHP</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>PA system</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a795'];?>" name="a795" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a796'];?>" name="a796" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a797'];?>" name="a797" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a798'];?>" name="a798" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Land phone</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a799'];?>" name="a799" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a800'];?>" name="a800" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a801'];?>" name="a801" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a802'];?>" name="a802" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Mobile phone</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a803'];?>" name="a803" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a804'];?>" name="a804" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a805'];?>" name="a805" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a806'];?>" name="a806" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Photocopier machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a807'];?>" name="a807" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a808'];?>" name="a808" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a809'];?>" name="a809" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a810'];?>" name="a810" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Digital camera</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a811'];?>" name="a811" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a812'];?>" name="a812" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a813'];?>" name="a813" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a814'];?>" name="a814" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Video camera</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a815'];?>" name="a815" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a816'];?>" name="a816" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a817'];?>" name="a817" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a818'];?>" name="a818" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
											  
											  </table>
											  <?php } ?>
											  </div>