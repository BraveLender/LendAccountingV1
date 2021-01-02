<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alomo System v3 UI design</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link async="" href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
    <!-- <link rel="stylesheet" type="text/css" href="library/DataTables/datatables.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/fh-3.1.7/r-2.2.6/sl-1.3.1/datatables.min.css"/>
 
    <link rel="stylesheet" href="css/main.css">
    <!-- <script src="library/jquery-3.5.1.min.js"></script> -->
    <script src="library/jquery-2.2.4.js"></script>
    <script src="library/tilt.jquery.min.js"></script>
    <script src="library/sweetalertall.js"></script>
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
                <i class="fa fa-user-lock"></i> <label>Sign out</label>
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
                    <img src="system_images/icons/Icon-64x64.png" alt="AlomoSystem" no-select no-drag>
                    <label  no-select no-drag>AlomoSystem</label>
                </span>
                <span user-brand in-flex full-width cols space-evenly >
                        <span business-name full-width nowrap font2>
                            <i class="fa fa-building" business-icon></i>
                            <label white>Lender business Name</label>
                        </span>
                        <span in-flex full-width row space-between branch-name>
                            <span><i class="fa fa-code-branch" style="opacity: .47"></i></span>
                            <label nowrap font1 small> Branch Name</label>
                            <i class="fa fa-exchange-alt" branches-toggle cursor-pointer></i>
                        </span>
                </span>
            </div>
            <div main-menu id="system-menu">
                <span class="active">
                    <i class="fa fa-home"></i> <label>My Dashboard</label>
                </span>
                <span source="pages/disbursements.php">
                    <i class="fa fa-file-invoice"></i> <label>Disbursements</label>
                </span>
                <span>
                    <i class="fa fa-credit-card"></i> <label>Repayments</label>
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
                    <i class="fa fa-user-shield"></i> <label>Administrators</label>
                </span>
                <span>
                    <i class="fa fa-cogs"></i> <label>System Settings</label>
                </span>
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
        <section page-title flex space-between vertical-center overflow-x>
            <span nowrap>
                <center><label>Date Range</label></center>
                <span>
                    <input type="date" title="Start Date (From)"> <b>:</b>
                    <input type="date" title="End Date (To)">
                    <button title="Fetch Records">
                        <i class="fa fa-filter"></i><span font2> Filter</span>
                    </button>
                </span>
            </span>
            <span nowrap>
                <center><label>&nbsp;</label></center>
                <select name="" id="">
                    <option value="">Display Type</option>
                    <option value="cards">Cards</option>
                    <option value="table">Tables</option>
                </select>
                <select name="" id="">
                    <option value=""> Status</option>
                    <option value="all">All</option>
                    <option value="active">Active</option>
                    <option value="completed">Completed</option>
                    <option value="defaulted">Defaulted</option>
                </select>
                <button>
                    <i class="fa fa-filter" title="Fetch Records"></i><span font2> Filter</span>
                </button>
            </span>
            <span nowrap>
                <center><label>&nbsp;</label></center>
                <span class="searchBox">
                    <input class="searchInput"type="search" placeholder="Search"  search-input>
                    <button class="searchButton" href="#" type="button" title="Search">
                        <i class="fa fa-search">
                        </i>
                    </button>
                </span>
            </span>
        </section>
        <hr hr>
        <section full-width overflow-x>
            <table transform-table small id="disbursementsTable" font2 >
                <thead>
                    <th>name</th>
                    <th>Principle</th>
                    <th >Principle Covered</th>
                    <th nowrap>Principle Balance</th>
                    <th >Interest Covered</th>
                    <th nowrap>Interest Balance</th>
                    <th nowrap>Amount Due</th>
                    <th nowrap>Due Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u  load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-done>Settled</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-active>Active</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-default>Default</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-active>Active</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u  load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-done>Settled</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u  load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-done>Settled</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-active>Active</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-default>Default</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span in-flex space-between vertical-center>
                                <img src="system_images/bg/admin.jpg" alt="Client image">
                                <span in-flex cols>
                                    <label nowrap b cursor-pointer hover-u load-page> John Doe</label>
                                    <code badge title="Progress">90%</code>
                                </span>
                            </span>
                        </td>
                        <td>$000, 000, 000</td>
                        <td>80%</td>
                        <td>$000, 000, 000</td>
                        <td>10%</td>
                        <td>$000, 000, 000</td>
                        <td>$000, 000, 000</td>
                        <td>13/12/2021</td>
                        <td status-text-default>Default</td>
                        <td nowrap>
                            <code badge cursor-pointer hover  title="Client Profile" load-page> &nbsp; <i class="fa fa-info-circle"></i> &nbsp; </code>
                            &nbsp;
                            <code badge cursor-pointer hover title="Client Profile" load-page> &nbsp; <i class="fa fa-user-circle"></i> &nbsp; </code>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        </section>
    </main>
    <footer>
        <div loader-section in-flex row processing_loader vertical-center>
            <code blink-content>Processing</code>
            <div class="lds-hourglass"></div>
        </div>
    </footer>
    <!-- DATATABLES -->
    <!-- <script type="text/javascript" src="library/DataTables/datatables.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/fh-3.1.7/r-2.2.6/sl-1.3.1/datatables.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // $('[basic-card], [tilt-this]').tilt();
        $("header").prepend("<style></style>");
        // $("style").append(".notification-popup{left:10px !important}")
        let table_id = $("[transform-table]").attr("id");
        $('#'+table_id).DataTable();
    </script>
</body>
</html>