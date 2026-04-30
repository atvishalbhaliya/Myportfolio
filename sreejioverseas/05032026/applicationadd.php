<?php
session_start(); 
		

	include("connect.php");
	if(!isset($_SESSION['linkarisecrm']))
	{
		header('Location: index.php');
		return;
	}
	$ftime=0;
	$ttime=23;
	$_SESSION['_token']=bin2hex(openssl_random_pseudo_bytes(16));
		//$linkarisecmpmid=$_SESSION['linkarisecmpmid'];

	$cmpmid=$_SESSION['linkarisecmpmid'];
				date_default_timezone_set("Asia/Kolkata");
				$mdate1= date('Y-m-d H:i:s');
				$mdate= date('d-m-Y');
				
				$par1 = $_SESSION['linkariseumobile'];
				$ipaddress = "";
	
				if (getenv('HTTP_CLIENT_IP'))
					$ipaddress = getenv('HTTP_CLIENT_IP');
				else if(getenv('HTTP_X_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
				else if(getenv('HTTP_X_FORWARDED'))
					$ipaddress = getenv('HTTP_X_FORWARDED');
				else if(getenv('HTTP_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_FORWARDED_FOR');
				else if(getenv('HTTP_FORWARDED'))
					$ipaddress = getenv('HTTP_FORWARDED');
				else if(getenv('REMOTE_ADDR'))
					$ipaddress = getenv('REMOTE_ADDR');
				else
					$ipaddress = 'UNKNOWN';
				
				$userserver=$_SERVER['HTTP_USER_AGENT'];
				/* $eve1 = "insert into res_user_log (lid,mobile,lastupdatedtime,pagename,taskname,ipaddress,useragentdetail) values(NULL,'$par1','$mdate1','User','Add User','$ipaddress','$userserver')";
				$re1 = mysqli_query($conn, $eve1); */
	
	$usermid=$_SESSION['linkariseumid'];
?>
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Application Add</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<?php include('header.php'); ?>
				
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
				<?php include('sidebar.php'); ?>
				<!--end::Sidebar-->
					<!--begin::Main-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add New Application</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="dashboard.php" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<li class="breadcrumb-item text-muted">				
											<a href="application.php" class="text-muted text-hover-primary">Application</a>	</li>											<!--end::Item-->											<!--begin::Item-->	
											<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Application Add</li>
									
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<style>
												input[type="text"] {
													
													transition: border-color 0.3s ease-in-out;
													padding: 10px;
													border-radius: 5px;
													padding: 10px;
													border: 1px solid #ccc;
													border-radius: 5px;
													
													color: #495057; 
												}
												 input[type="text"]:focus {
													border-color: #28a745; 
												    border-color: #007bff;
													box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
												}
												.form-select{
												
												</style>
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Contacts App- Add New Contact-->
									<div class="row g-15">
										
										<!--begin::Content-->
										<div class="col-xl-12">
											<!--begin::Contacts-->
											<div class="card card-flush h-lg-100" id="kt_contacts_main">
												<!--begin::Card header-->
												
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_form" class="form" action="applicationadd2.php" method="POST" enctype="multipart/form-data">
														<!--begin::Input group-->
														<b>Student Detail:</b>
													    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Student</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter student First Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select" data-control="select2"  name="partymid" id="skills1" for="skills1" onchange="skills1" required>
													<option value="">select</option>
														<?php 
														$tt="";
											if($_SESSION['linkariseutype']!="Admin")
											{
												$tt=" and partymid in(select partymid from res_partyallocation_detail where usermid=$usermid)";
											}
										$eve3 = "SELECT * FROM res_party_master WHERE partytype IN ('Student')  and cmpmid=$linkarisecmpmid $tt ";
											
										//$eve3 = "SELECT * FROM res_party_master WHERE partytype IN ('Student', 'Client', 'Expense', 'Lead')";


										$re3 = mysqli_query($conn, $eve3);
										
										while($rt3 = mysqli_fetch_assoc($re3))

										{											
											
											$partymid=$rt3['partymid'];
											$partytype=$rt3['partytype'];
											//$_SESSION['partymid']=$partymid;
											$partyfname=$rt3['partyfname'];
											$partymname=$rt3['partymname'];
											$partysname=$rt3['partysname'];
											$partymobile=$rt3['partymobile'];
											$interestedfieldname=$rt3['interestedfieldname'];
											$countryname=$rt3['countryname'];
											$partyfullname = trim($partyfname . ' ' . $partymname . ' ' . $partysname);
										echo "<option value='$partymid' data-country='$countryname'>
        $partyfullname ($partymobile) - $interestedfieldname - $partytype - $countryname
      </option>";

											
										  /*  echo "<option value='$partymid'>$partyfname($partymobile)</option>";
											 */
											 
										}
										
										?>     
													</select>
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<!--end::Col-->
													
														<!--begin::Col-->
														<div class="col" id="">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Purpose</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Country Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="purposename" class="form-select" data-control="select2" id="dcontact210">
    <option value="0">Select</option>
    <?php
    $sql = "SELECT purposename FROM res_purpose_master WHERE cmpmid = $linkarisecmpmid ORDER BY purposename";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        echo '<option value="' . htmlspecialchars($row['purposename']) . '">' . htmlspecialchars($row['purposename']) . '</option>';
    }
    ?>
</select>

    <!-- Options can be dynamically loaded here -->
	
</select>

													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
												
													</div> 
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Mobile</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Course Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control" name="partymobile" id="dcontact110" value="" >	
												
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<!--end::Col-->
													
														<!--begin::Col-->
														<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Email</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Email Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control" name="partyemail" id="dcontact111" value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
												
													</div>
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Address</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Course Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control" name="partyaddress" id="dcontact112" value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<!--end::Col-->
													
														<!--begin::Col-->
														<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Birthdate</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Birthdate."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													
													<input class="form-control form-control fw-bold" placeholder="Select date" name="partybirthdate" id="kt_daterangepicker_1" value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
												
													</div>
													
													<b>Course Detail:</b>
													<!--<a href="courseadd.php?page=a" class="btn btn-primary me-3">
    <i class="fas fa-plus"></i> Add 
</a>-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
											
														<!--begin::Input group-->
															
															<!--end::Input-->

														<!--end::Input group-->
													
													<!--<div class="col" id="countryField">-->
													<div class="col">
    <div class="fv-row mb-7">
        <label class="fs-6 fw-semibold form-label mt-3">
            <span class="required">Prefer Country</span>
            <i class="fas fa-exclamation-circle ms-1 fs-7"
               data-bs-toggle="tooltip"
               title="Select Country Name"></i>
        </label>

       <select name="appcountry"
        class="form-select"
        data-control="select2"
        id="country">

    <option value="">Select Country</option>

    <?php
    include("connect.php");
    $countryname = mysqli_query(
        $conn,
        "SELECT countrymid, countryname 
         FROM res_country_master 
         WHERE cmpmid = '$cmpmid'"
    );

    while ($d = mysqli_fetch_array($countryname)) {
    ?>
        <option 
            value="<?php echo $d['countryname']; ?>" 
            data-id="<?php echo $d['countrymid']; ?>">
            <?php echo $d['countryname']; ?>
        </option>
    <?php } ?>
</select>

    </div>
</div>

													<!--end::Col-->
													<div class="col" id="">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Course</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Course Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<select name="appcourse" class="form-select form-select" id="course" data-control="select2" required>
													<option value="">select </option>
															<?php
															/* include("connect.php");
															$coursename=mysqli_query($conn,"select * from res_degree_master where cmpmid=$linkarisecmpmid");
															while($d0=mysqli_fetch_array($coursename))
															{ */
														?>
														
														<option value="<?php// echo $d0['degreename']; ?>"><?php //echo $d0['degreename']; ?></option>
															<?php// } ?>
															</select>-->
															<input type="text" class="form-control form-control" name="appcourse" id="appcourse" value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
														<!--begin::Col-->
														
												
													</div>
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													
													<!--end::Col-->
													
														<!--begin::Col-->
<div class="col">
    <div class="fv-row mb-7">
        <label class="fs-6 fw-semibold form-label mt-3">
            <span>College</span>
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Select College Name."></i>
        </label>

        <select name="appcollege" id="college" class="form-select" >
            <option value="">Select College</option>
        </select>
    </div>
</div>

													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class=""> Course Duration</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter student email."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control" name="appcourseduration"  value="" >
													<!--<input type="text" class="form-control form-control" name="appcourseduration" id="duration" value="" required>-->
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
												
													</div>
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													
													<!--end::Col-->
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="">Fee</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter fee."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<input type="text" class="form-control form-control" name="fee" id="fees" value="" >-->
													<input type="text" class="form-control form-control" name="fee"  value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
														<!--begin::Col-->
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="">Remark</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Followup Remark."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<input type="text" class="form-control form-control" name="appremark" id="remark" value="" required>-->
													<input type="text" class="form-control form-control" name="appremark"  value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>	
												
													</div>
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="">Reference Portal</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Country Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select id="refportalname" name="referenceportal" class="form-select form-select" data-control="select2" >
													<option value="">select </option>
															<?php
															include("connect.php");
															//$referralportalname=mysqli_query($conn,"select * from res_referralportal_master");
															$referralportalname=mysqli_query($conn,"select * from res_party_master where partytype='Referral Portal'  and cmpmid=$linkarisecmpmid");
															while($d40=mysqli_fetch_array($referralportalname))
															{
														?>
														
														<option value="<?php echo $d40['partyfname']; ?>"><?php echo $d40['partyfname']; ?></option>
															<?php } ?>
															</select>
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="">Reference Portal Link</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Reference Portal ."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select id="refportallink" name="referenceportallink" class="form-select form-select" data-control="select2" >
													<option value="">select </option>
															<?php
															include("connect.php");
															$referenceportallink=mysqli_query($conn,"select * from res_party_master where partytype='Referral Portal'  and cmpmid=$linkarisecmpmid");
															while($d41=mysqli_fetch_array($referenceportallink))
															{
														?>
														
														<option value="<?php echo $d41['partypemail']; ?>"><?php echo $d41['partypemail']; ?></option>
															<?php } ?>
															</select>
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<!--end::Col-->
													
														<!--begin::Col-->
														
												
													</div>
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
													<!--<div class="col">
														<!--begin::Input group-->
														<!--	<div class="fv-row mb-7">
													<!--begin::Label-->
													<!--<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Intake Month</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter month."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<select name="intakemonth" class="form-select form-select" data-control="select2" id="dcontact410" disabled>
													<!--<option value="">select </option>
															<?php/* 
															include("connect.php");
															$planmonth=mysqli_query($conn,"select * from res_planmonth_master");
															while($d5=mysqli_fetch_array($planmonth))
															{ */
														?>
														
														<option value="<?php //echo $d5['planmonthname']; ?>"><?php// echo $d5['planmonthname']; ?></option>-->
															<?php// } ?>
															<!--</select>
													<!--end::Input-->
												<!--</div>
															<!--end::Input-->

														<!--end::Input group-->
													<!--</div>
													<!--<div class="col">
														<!--begin::Input group-->
															<!--<div class="fv-row mb-7">
													<!--begin::Label-->
													<!--<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Intake year</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Planyear Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<select name="intakeyear" class="form-select form-select" data-control="select2" id="dcontact510" disabled>
													<!--<option value="">select </option>
															<?php/* 
															include("connect.php");
															$planyear=mysqli_query($conn,"select * from res_planyear_master");
															while($d4=mysqli_fetch_array($planyear))
															{ */
														?>
														
														<option value="<?php// echo $d4['planyearname']; ?>"><?php// echo $d4['planyearname']; ?></option>-->
															<?php //} ?>
															<!--</select>
													<!--end::Input-->
											<!--	</div>
															<!--end::Input-->

														<!--end::Input group-->
													<!--</div>
													<!--end::Col-->
													
														<!--begin::Col-->
														
												
													</div>
													
												<!--end::Row-->
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required"> Application date</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Application date."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control fw-bold" placeholder="Select date" name="appdate" id="kt_daterangepicker_91" value="<?php echo $mdate;?>">
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<!--end::Col-->
													
														<!--begin::Col-->
														<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Application No</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Application No."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control" name="appnumber" value="" required>
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
												
													</div>
												<!--end::Row-->
												
													
													

													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													<!--<div class="col">
														<!--begin::Input group-->
															<!--<div class="fv-row mb-7">
													<!--begin::Label-->
													<!--<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">stage</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter stage."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<select name="appstage" class="form-select form-select">
													<option value="">select </option>
															<?php/* 
															include("connect.php");
															$stage=mysqli_query($conn,"select * from res_stage_master");
															while($d8=mysqli_fetch_array($stage))
															{ */
														?>
														
														<!--<option value="<?php// echo $d8['stagename']; ?>"><?php// echo $d8['stagename']; ?></option>
															<?php// } ?>
															</select>
													<!--end::Input-->
												<!--</div>
															<!--end::Input-->

														<!--end::Input group-->
													<!--</div>-->
													<!--end::Col-->
													
														<!--begin::Col-->
														<!--<div class="col">
    <div class="fv-row mb-7">
        <label class="fs-6 fw-semibold form-label mt-3">
            <span class="required">Application Stage</span>
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Stage Name."></i>
        </label>
        <select id="appstage" name="appstage" class="form-select form-select" data-control="select2" required>
            <option value="">Select</option>
            <?php
           /*  $Stage = mysqli_query($conn, "SELECT stagemid, stagename FROM res_stage_master WHERE stagetype='Application' and cmpmid=$linkarisecmpmid");
            while ($d9 = mysqli_fetch_array($Stage)) {
                echo "<option value='{$d9['stagename']}'>{$d9['stagename']}</option>";
            } */
            ?>
        </select>
    </div>
</div>-->

<div class="col">
    <div class="fv-row mb-7">
        <label class="fs-6 fw-semibold form-label mt-3">
            <span class="required">Application Status</span>
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Status Name."></i>
        </label>
        <!--<select id="appstatus" name="appstatus" class="form-select form-select" data-control="select2" required>-->
        <select name="appstatus" class="form-select form-select" data-control="select2" required>
            <option value="">Select</option>
			<?php
			$Stage = mysqli_query($conn, "SELECT statusname FROM res_status_master WHERE stage='Application' and cmpmid=$linkarisecmpmid");
            while ($d9 = mysqli_fetch_array($Stage)) {
                echo "<option value='{$d9['statusname']}'>{$d9['statusname']}</option>";
            }
			?>
        </select>
    </div>
</div>
<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Intake </span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Intake Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<select name="intakename" class="form-select form-select" data-control="select2" id="dcontact610" disabled>
													
															</select>-->
															<select name="intakename" class="form-select form-select" data-control="select2" required>
													<option value="">select </option>
															<?php
															include("connect.php");
															$country=mysqli_query($conn,"select * from res_intake_master where cmpmid=$linkarisecmpmid");
															while($d25=mysqli_fetch_array($country))
															{
																	$planyearmid=$d25['intakemid'];
																$planyearname=$d25['intakename'];
														?>
														
														<option value="<?php echo $d25['intakename']; ?>"><?php echo $d25['intakename']; ?></option>
															<?php } ?>
															</select>
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>


															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
												
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Admission Done</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Admission Done."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													 <select class="form-control select2" name="admissiondone" >
                        <option value="">Select</option>
                        <option value="1">Yes</option>
                        <option value="0" selected>No</option>
                    </select>
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
													<!--end::Col-->
													<div class="col">
														<!--begin::Input group-->
															<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="">Application Remark</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter Followup Remark."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<input type="text" class="form-control form-control" name="appremark" id="remark" value="" required>-->
													<input type="text" class="form-control form-control" name="applicationremark"  value="" >
													<!--end::Input-->
												</div>
															<!--end::Input-->

														<!--end::Input group-->
													</div>
														<!--begin::Col-->
														
												
													</div>
													<!--<div class="col">
														<!--begin::Input group-->
															<!--<div class="fv-row mb-7">
													<!--begin::Label-->
													<!--<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Application Type</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter status Name."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<!--<select name="apptype" id="apptype" class="form-select form-select" data-control="select2" required>
													<option value="">select</option>
													<option value="student visa" selected>student visa</option>
													<option value="Immigration" >Immigration</option>
															
															</select>
													<!--end::Input-->
												<!--</div>
															<!--end::Input-->

														<!--end::Input group-->
													<!--</div>-->
												
													</div>
													
														<!--begin::Row-->
											
													
													
													
												
														<!--begin::Input group-->
														
														<!--begin::Separator-->
														<div class="separator mb-6"></div>
														<!--end::Separator-->
														<!--begin::Action buttons-->
														<!--begin::Action buttons-->
												<div class="d-flex justify-content-end">
													<!--begin::Button-->
													<a type="reset" href="application.php"  class="btn btn-light me-3">Cancel</a>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit"  class="btn btn-primary">
														<span class="indicator-label">Save</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Contacts-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Contacts App- Add New Contact-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<?php include('footer.php'); ?>
					</div>
					<!--end:::Main--><!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--end::Drawers-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/contacts/edit-contact.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		

		
		<script type="text/javascript">
		$(document).ready(function(){
			
			
 $("#kt_daterangepicker_91").flatpickr({
        enableTime:!1,dateFormat:"d-m-Y"
    }
   
);
	$("#kt_daterangepicker_2").flatpickr({
        enableTime:!1,dateFormat:"d-m-Y"
    }
   
);
$("#kt_daterangepicker_3").flatpickr({
        enableTime:!1,dateFormat:"d-m-Y"
    }
   
);
$("#kt_daterangepicker_4").flatpickr({
        enableTime:!1,dateFormat:"d-m-Y"
    }
   
);
$("#kt_daterangepicker_1").flatpickr({
        enableTime:!1,dateFormat:"d-m-Y"
    }
   
);
		});
		</script>
		
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
		 <script>
	$(function() {
    $("#appcountry").autocomplete({
        source: 'countrysearch.php'
    });
    $("#appcourse").autocomplete({
        source: 'degreesearch.php'
    });
    $("#appcollege").autocomplete({
        source: 'collegessearch.php'
    });
});
  
 </script> 
		<script type="text/javascript">
	$(document).ready(function(){
		$("#followupdate").show();
		//$("#inqfremarks").show();

        $("#followup").change(function () {
            if ($(this).val() == "1") {
                $("#followupdate").show();
				//$("#inqfremarks").show();
            } else {
                $("#followupdate").hide();
				//$("#inqfremarks").hide();
            }
        });
    });
</script>
<script>
$(document).ready(function () {
    $('#appstage').on('change', function () {
        var selectedStage = $(this).val(); // Get the selected stage
        
        if (selectedStage) {
            $.ajax({
                url: 'fetch_statues.php', // PHP file to fetch statuses
                type: 'POST',
                data: { stage: selectedStage },
                success: function (response) {
                    $('#appstatus').html(response); // Populate status dropdown
                },
                error: function () {
                    alert('Error retrieving statuses. Please try again.');
                }
            });
        } else {
            $('#appstatus').html('<option value="">Select</option>'); // Reset status dropdown
        }
    });
});

</script>
<script>
$(document).ready(function () {
    $('#refportalname').on('change', function () {
        var selectedStage = $(this).val(); // Get the selected stage
        
        if (selectedStage) {
            $.ajax({
                url: 'fetch_refportal.php', // PHP file to fetch statuses
                type: 'POST',
                data: { stage: selectedStage },
                success: function (response) {
                    $('#refportallink').html(response); // Populate status dropdown
                },
                error: function () {
                    alert('Error retrieving statuses. Please try again.');
                }
            });
        } else {
            $('#refportallink').html('<option value="">Select</option>'); // Reset status dropdown
        }
    });
});

</script>
	<script>
//code for Onchange on Prefer Country.........				
				$('#dcontact310').on('change',function(){


				//make ajax call to action method to get the description for this value
				$.get("coursesearch.php", { skills1 : $(this).val() }, function(response) {
console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 $('#course').html(response).prop('disabled', false);
				});
				/* //make ajax call to action method to get the description for this value
				$.get("collegesearch.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 $('#college').html(response).prop('disabled', false);
				}); */
				//make ajax call to action method to get the description for this value
				/* $.get("remarksearch.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#remark').val( $.trim(response) );
				});
				//make ajax call to action method to get the description for this value
				$.get("durationsearch.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#duration').val( $.trim(response) );
				});
				//make ajax call to action method to get the description for this value
				$.get("feessearch.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#fees').val( $.trim(response) );
				}); */
				
				});
			</script>
			<script>
				//code for Onchange on Course.........
				$('#course').on('change',function(){


				
				$.get("collegesearchfromcourse.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 $('#college').html(response).prop('disabled', false);
				});
				/* //make ajax call to action method to get the description for this value
				$.get("remarksearchfromcourse.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#remark').val( $.trim(response) );
				});
				//make ajax call to action method to get the description for this value
				$.get("durationsearchfromcourse.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#duration').val( $.trim(response) );
				});
				//make ajax call to action method to get the description for this value
				$.get("feessearchfromcourse.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#fees').val( $.trim(response) );
				}); */
				
				});
			</script>
			<script>
				//code for Onchange on Course.........
				$('#college').on('change',function(){


				
				/* $.get("coursesearchfromcollege.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 $('#college').html(response).prop('disabled', false);
				}); */
				//make ajax call to action method to get the description for this value
				$.get("remarksearchfromcollege.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#remark').val( $.trim(response) );
				});
				//make ajax call to action method to get the description for this value
				$.get("durationsearchfromcollege.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#duration').val( $.trim(response) );
				});
				//make ajax call to action method to get the description for this value
				$.get("feessearchfromcollege.php", { skills1 : $(this).val() }, function(response) {
//console.log("hi"+$.trim(response));
				//alert(response);
				//set the value of description text box
			//	$('#course').val( $.trim(response) );
 
 $('#fees').val( $.trim(response) );
				});
				
				});
			</script>
			
<script>
				/* $(function() {
					$( "#skills" ).autocomplete({
						source: 'customersearch.php'
					});
				}); */
				$('#skills1').on('change',function(){


				//make ajax call to action method to get the description for this value
				$.get("partysearch21.php", { skills1 : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#skills').val( $.trim(response) );

				});
				$.get("partysearch22.php", { skills1 : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#dcontact110').val( $.trim(response) );

				});
						
/* $.get("partysearch32.php", { skills1: $(this).val() }, function(response) {
    // Replace the options in #dcontact210
    $('#dcontact310').html(response).prop('disabled', false);
}); */
$.get("partysearch33.php", { skills1: $(this).val() }, function(response) {
    // Replace the options in #dcontact210
    $('#dcontact410').html(response).prop('disabled', false);
});
$.get("partysearch34.php", { skills1: $(this).val() }, function(response) {
    // Replace the options in #dcontact210
    $('#dcontact510').html(response).prop('disabled', false);
});
$.get("partysearch36.php", { skills1: $(this).val() }, function(response) {
    // Replace the options in #dcontact210
    $('#dcontact610').html(response).prop('disabled', false);
});
$.get("partysearch37.php", { skills1: $(this).val() }, function(response) {
    // Replace the options in #dcontact210
    $('#dcontact210').html(response).prop('disabled', false);
});

				//partytype start
				$.get("partysearch221.php", { skills1 : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#dcontact1101').val( $.trim(response) );

				});
				//partytype end
				$.get("partysearch23.php", { skills1 : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#dcontact111').val( $.trim(response) );

				});
				$.get("partysearch24.php", { skills1 : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#dcontact112').val( $.trim(response) );

				});
				$.get("partysearch25.php", { skills1 : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#kt_daterangepicker_1').val( $.trim(response) );

				});
				$.get("customersearch28.php", { skills : $(this).val() }, function(response) {

				//alert(response);
				//set the value of description text box
				$('#dcontact12').val( $.trim(response) );

				});
				});
			</script>
			
			<script>
		
 $('#skills1').on('change', function() {
  
    var customerType = $('#skills1 option:selected').text(); // Get the text of the selected option

    // Show the fields initially
    $('#collegeField, #countryField, #courseField').show();

    // Check if Application Type is "Immigration" and Party Type (Customer) includes "Client"
    if (customerType.toLowerCase().includes('client')) {
       
        $('#collegeField, #countryField, #courseField').hide(); // Hide the fields if conditions are met
    } else {
        
        $('#collegeField, #countryField, #courseField').show(); // Show the fields if conditions are not met
    }
});


		


		</script>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if($_SESSION['linkariseutype']=="User"){ ?>
		$("#allocate").hide();
		<?php } ?>
		//$("#inqfremarks").show();

       
    });
</script>
<script>
$(document).ready(function () {

    $('#skills1').on('change', function () {

        var country = $(this).find(':selected').data('country');

        if (country) {
            $('#country').val(country).trigger('change');
        }

    });

});
</script>

<script>
$("#country").change(function () {

    var country_id = $(this).find(':selected').data('id');

    if (country_id != "") {
        $.ajax({
            url: "get_college.php",
            type: "POST",
            data: { country_id: country_id },
            success: function (data) {
                $("#college").html(data);
            }
        });
    } else {
        $("#college").html('<option value="">Select College</option>');
    }
});
</script>

		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>