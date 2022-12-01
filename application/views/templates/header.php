<html>
	<head>
		<title>DiS Manangement System</title>
		<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <style>
      h2{
        text-transform: uppercase;
        font-size:1.8em;
      }
      a.job-num {font-family: monospace;font-size: 18px;background-color: #aeaeae;padding:3px 5px;text-decoration: none;font-weight:normal;margin-top:4px}
      input.error{border-color: red;}
    </style>
	</head>
	<body>

	<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt=""> EMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>customer">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>jobs">Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>material">Material Purchase</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-bottom:20px;">