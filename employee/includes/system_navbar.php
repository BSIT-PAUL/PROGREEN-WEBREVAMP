<?php
session_start();

include("database/dbcon.php");


?>
<div class="top-nav-search">
    <form>
        <input type="text" class="form-control" placeholder="">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>


<a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

    <li class="nav-item dropdown">
        <a href="#" class="dropdown-toggle nav-link pr-0" data-toggle="dropdown">
            <i data-feather="bell"></i> <span class="badge badge-pill"></span>
        </a>
        <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
            </div>
            <div class="noti-content">
                <ul class="notification-list">
                    <li class="notification-message">
                        <a href="activities.php">
                            <div class="media">
                                <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
                                </span>
                                <div class="media-body">
                                    <!-- This need backend -->
                                    <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the
                                        invoice <span class="noti-title">#DF65485</span></p>
                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="notification-message">
                        <a href="activities.php">
                            <div class="media">
                                <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg">
                                </span>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted
                                        your estimate
                                        <span class="noti-title">#GTR458789</span>
                                    </p>
                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="notification-message">
                        <a href="activities.php">
                            <div class="media">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="notification-message">
                        <a href="activities.php">
                            <div class="media">
                                <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg">
                                </span>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the
                                        invoice <span class="noti-title">#RDW026896</span></p>
                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="notification-message">
                        <a href="activities.php">
                            <div class="media">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">You have received a new
                                            message</span></p>
                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="activities.php">View all Notifications</a>
            </div>
        </div>
    </li>
    <?php // Replace 'userprofile' with your actual table name
    // Use prepared statement to prevent SQL injection
    $query = "SELECT `UserID`, `ProfilePicture` FROM `userprofile` WHERE `UserID` = ?";
    $employeeId = $_SESSION['employee_id'];

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $employeeId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        // Check if any rows were returned
        if ($row = mysqli_fetch_assoc($result)) {
            $userId = $row['UserID'];
            $profilePicture = $row['ProfilePicture'];
        } else {
            // Handle the case where no rows are returned
            echo "No user found with the provided ID.";
        }
    } else {
        // Handle the case where the query execution fails
        echo "Error executing the query: " . mysqli_error($con);
    } ?>

    <li class="nav-item dropdown has-arrow main-drop">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($profilePicture); ?>" alt="profile" />
                <span class="status online"></span>
            </span>
            <span><?php

                    // Get the name of the user from the session
                    $welcomeMessage = $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname'];
                    echo $welcomeMessage;

                    ?></span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="profile.php"><i data-feather="user" class="mr-1"></i> Profile</a>
            <a class="dropdown-item" href="settings.php"><i data-feather="settings" class="mr-1"></i> Settings</a>
            <a class="dropdown-item" href="login.php"><i data-feather="log-out" class="mr-1"></i> Logout</a>
        </div>
    </li>

</ul>
<div class="dropdown mobile-user-menu show">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right ">
        <a class="dropdown-item" href="profile.php">My Profile</a>
        <a class="dropdown-item" href="settings.php">Settings</a>
        <a class="dropdown-item" href="../../login.php">Logout</a>
    </div>
</div>

</div>