<?php 
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
	include_once("includes/sidebar.php");
?>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
</li>
<li class="breadcrumb-item active"> Employees</li>
</ul>
<h3>Employees</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">All</a></li>
<li><a href="employee-team.php">Teams</a></li>
<li><a href="employee-office.php">Offices</a></li>
</ul>
<a class="btn-add" href="add-employee.php"><i data-feather="plus"></i> Add Person</a>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="row">
<div class="col-xl-10 col-sm-8 col-12 ">
<label class="employee_count">7 People</label>
</div>
<div class="col-xl-1 col-sm-2 col-12 ">
<a href="employee-grid.php" class="btn-view "><i data-feather="grid"></i> </a>
</div>
<div class="col-xl-1 col-sm-2 col-12 ">
<a href="#" class="btn-view active"><i data-feather="list"></i> </a>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="card">
<div class="table-heading">
<h2>Project Summery</h2>
</div>
<div class="table-responsive">
<table class="table  custom-table no-footer">
<thead>
<tr>
<th>Name</th>
<th>Line Manager</th>
<th>Team</th>
<th>Office</th>
<th>Permissions</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table" /><label>Arvin Villaluna
</label>
</a>
 </div>
</td>
<td>
<label class="action_label">Richard Wilson </label>
</td>
<td>
<label class="action_label2">Design </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Team Lead</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table" /><label>Graciella Relevo
</label>
</a>
</div>
</td>
<td>
<label class="action_label">Richard Wilson </label>
</td>
<td>
<label class="action_label2">IOS </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Team Lead</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table" />
</a>
<label>Jenni Sims</label>
</div>
</td>
<td>
<label class="action_label">Richard Wilson </label>
</td>
<td>
<label class="action_label2">Android </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Team Lead</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-19.jpg" alt="profile" class="img-table" />
</a>
<label>Stacey Linville</label>
</div>
</td>
<td>
<label class="action_label">Richard Wilson </label>
</td>
<td>
<label class="action_label2">Testing </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Team Lead</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table" />
</a>
<label>Maria Cotton</label>
</div>
</td>
<td>
<label class="action_label">Richard Wilson </label>
</td>
<td>
<label class="action_label2">PHP </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Team Lead</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="table-img">
 <a href="profile.php">
<img src="assets/img/profiles/avatar-18.jpg" alt="profile" class="img-table" />
</a>
<label>John Gibbs</label>
</div>
</td>
<td>
<label class="action_label">Richard Wilson </label>
</td>
<td>
<label class="action_label2">PHP </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Team Lead</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.php">
<img src="assets/img/profiles/avatar-10.jpg" alt="profile" class="img-table" />
</a>
<label>Richard Wilson</label>
</div>
</td>
<td>
<label class="action_label in_active">No </label>
</td>
<td>
<label class="action_label2">Business </label>
</td>
<td><label>Focus Technologies	</label></td>
<td><label>Super Admin</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="js/activePage.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>