<?php
session_id() == '' ? session_start() : null;
$branch_info = [
    "currency" => "K"
];
$_SESSION["branch_info"] = $branch_info;
$feature_sources = [
    "disbursements-cards" => "inner-pages/disbursements-cards.php",
    "disbursements-tables" => "inner-pages/disbursements-table.php",
    "disbursement-overview" => "popup-pages/disbursement-overview.php",

];
$_SESSION["feature_extension"] = $feature_sources;
$main_menu = '
        <span source="pages/disbursements.php">
            <i class="fa fa-file-invoice"></i> <label>Disbursements</label>
        </span>
        <span>
            <i class="fa fa-credit-card"></i> <label>Collections</label>
        </span>
        <span>
            <i class="fa fa-people-arrows"></i> <label>Agents</label>
        </span>
        <span>
            <i class="fa fa-users"></i> <label>Customers</label>
        </span>
        <span>
            <i class="fa fa-user-times"></i> <label>Defaults</label>
        </span>
        <span>
            <i class="fa fa-dollar-sign"></i> <label>Expenses</label>
        </span>
        <span>
            <i class="fa fa-folder-open"></i> <label>Documents</label>
        </span>
        <span>
            <i class="fa fa-chart-bar"></i> <label>Reports</label>
        </span>
        <span>
            <i class="fa fa-user-shield"></i> <label>Employees</label>
        </span>
        <span>
            <i class="fa fa-cogs"></i> <label>System Settings</label>
        </span>
'; // MUST BE FETCHED FROM CLIENT PACKAGES



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendAccounting System</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link async="" href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="library/DataTables/datatables.min.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/fh-3.1.7/r-2.2.6/sl-1.3.1/datatables.min.css"/> -->

    <!-- <script src="library/jquery-3.5.1.min.js"></script> -->
    <script async src="library/sweetalertall.js"></script>
     
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <section admin-profile-menu tilt-this cols>
            <span menu-item load_page>
                <i class="fa fa-envelope-open-text"></i> <label>Personal Messages</label>
            </span>
            <span menu-item load_page>
                <i class="fa fa-tasks"></i> <label>Scheduled Tasks</label>
            </span>
            <span menu-item load_page>
                <i class="fa fa-user-cog"></i> <label>Account Settings</label>
            </span>
            <span menu-item load_page>
                <i class="fa fa-bug"></i> <label>Report Problem</label>
            </span>
            <span menu-item>
                <i class="fa fa-user-lock"></i> <label>Lock</label>
            </span>
            <span menu-item>
                <i class="fa fa-sign-out-alt"></i> <label>Sign Out</label>
            </span>
            <span menu-item in-flex center style="justify-content:center!important; background:#fff" close-admin-profile-menu>
                <center><i class="fa fa-chevron-up"></i></center>
            </span>
        </section>
    </header>
    <main>
        <section left-main-menu scroll-bar>
            <div in-flex business-name-details  full-width cols >
                <span system-brand in-flex full-width space-between vertical-center>
                    <img src="system_images/icons/Icon-64x64.png" alt="LendAccounting" no-select no-drag>
                    <label  no-select no-drag>LendAccounting</label>
                </span>
                <span user-brand in-flex full-width cols space-evenly >
                        <span business-name full-width nowrap font2>
                            <i class="fa fa-bars" business-icon title="toggle menu" cursor-pointer></i>
                            <label white title="Your Corporate">Lender business Name</label>
                        </span>
                        <span in-flex full-width row space-between branch-name>
                            <span title="You're currently logged in to this branch"><i class="fa fa-code-branch" style="opacity: .47;padding-right: 25px;"></i></span>
                            <label nowrap font1 small title="You're currently logged in to this branch"> Branch Name</label>
                            <i class="fa fa-exchange-alt" branches-toggle cursor-pointer title="Open branches"></i>
                                <span branch-selector  row>
                                    <span branch-list>
                                        <span branch in-flex full-width cursor-pointer title="Click to Switch to this branch">
                                            <i  class="fa fa-code-branch"></i><label> Branch Name</label>
                                        </span>
                                        <span branch in-flex full-width cursor-pointer title="Click to Switch to this branch">
                                            <i  class="fa fa-code-branch"></i><label> Branch Name</label>
                                        </span>
                                        <span branch in-flex full-width cursor-pointer title="Click to Switch to this branch">
                                            <i  class="fa fa-code-branch"></i><label> Branch Name</label>
                                        </span>
                                        <span branch in-flex full-width cursor-pointer title="Click to Switch to this branch">
                                            <i  class="fa fa-code-branch"></i><label> Branch Name</label>
                                        </span>
                                        <span branch in-flex full-width cursor-pointer title="Click to Switch to this branch">
                                            <i  class="fa fa-code-branch"></i><label> Branch Name</label>
                                        </span>
                                    </span>
                                    <span title="Hide panel" close-branch-list in-flex cols center style="justify-content:center!important; background:#fff">
                                    <i class="fa fa-chevron-left"></i>
                                    </span>
                                </span>
                        </span>
                </span>
            </div>
            <div main-menu id="system-menu">
                <span class="active" home-page source="pages/home.php">
                    <i class="fa fa-home"></i> <label>My Dashboard</label>
                </span>
                    <?php echo $main_menu;?>
                <span>
                    <i class="fa fa-sign-out-alt"></i> <label>Sign out</label>
                </span>
            </div>
        </section>
        <section top-main-header flex space-between>
            <span in-flex  vertical-center>
                <span icon-menu load_page>
                    <i class="fa fa-hand-holding-usd"></i>
                </span>
                <span icon-menu load_page>
                    <i class="fa fa-file-invoice-dollar"></i>
                </span>
                <span icon-menu load_page>
                    <i class="fa fa-search-dollar"></i>
                </span>
            </span>
            <!--  -->
            <span in-flex  vertical-center>
                <span icon-menu load_page>
                    <i class="fa fa-user-check"></i>
                </span>
                <span icon-menu load_page>
                    <i class="fa fa-user-plus"></i>
                </span>
            </span>
            <!--  -->
            <span in-flex  vertical-center>
                <span icon-menu load_page>
                    <i class="fa fa-calculator"></i>
                </span>
                <span icon-menu load_page>
                    <i class="fa fa-mail-bulk"></i>
                </span>
                <span icon-menu load_page>
                    <i class="fa fa-bell"></i>
                </span>
                
                <span in-flex row nowrap vertical-center top-admin-profile-holder >
                    <img src="system_images/bg/admin.jpg" alt="" home-admin-thumb-img>
                    <span in-flex cols nowrap>
                        <label small  font2 toggle-admin-profile-menu cursor-pointer> <span>John Doe</span> &nbsp; <i class="fa fa-chevron-down" grey smaller cursor-pointer hover-b transition hover-dark></i></label>
                        <label smaller grey font2 position>Loan Officer</label>
                    </span>
                </span>
            </span>
        </section>
        <section main-display-area>
        
        </section>
    </main>
    <footer>
        <div loader-section in-flex row processing_loader vertical-center>
            <code blink-content>Processing</code>
            <div class="lds-hourglass"></div>
        </div>
    </footer>
    <!-- DATATABLES -->
    <script src="library/jquery-2.2.4.js"></script>
    <script src="library/tilt.jquery.min.js"></script>
    <!-- <script type="text/javascript" src="library/DataTables/datatables.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/fh-3.1.7/r-2.2.6/sl-1.3.1/datatables.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function(){
           
            // $("[home-page]").triggerHandler("click");
            // urlPopUp("popup-pages/disbursement-overview.php");
            prompt("Confirm Action?").then(function(response){
                // console.log(response);
                // prompt(response);
                // showBottomLoader();
                bottomLeftNotification("Processing your request..."+circle_loader);
                response && setTimeout(() => {
                    bottomLeftNotification(checkIcon+"&nbsp; Operation completed successfully.");
                }, 2000);
                
            });
            $("[loader-section]").css("display", "none");
        });
        
    </script>
</body>
</html>