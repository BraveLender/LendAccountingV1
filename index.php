<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alomo System v3 UI design</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
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
            <div business-name-details>
                
            </div>
            <div main-menu id="system-menu">
                <span>
                    <i class="fa fa-home"></i> <label>My Dashboard</label>
                </span>
                <span class="active" source="test">
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
           <section full-width flex space-evenly row-wrap>
               <div basic-card in-flex cols space-between>
                   <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-completed center title="Completed"> <i class="fa fa-check-square"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card  in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-pending center title="Pending Completion"> <i class="fa fa-clock"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card  in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-default center title="Default"> <i class="fa fa-times-circle"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card  in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-completed center title="Completed"> <i class="fa fa-check-square"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card in-flex cols space-between>
                   <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-completed center title="Completed"> <i class="fa fa-check-square"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card  in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-pending center title="Pending Completion"> <i class="fa fa-clock"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card  in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-default center title="Default"> <i class="fa fa-times-circle"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               <div basic-card  in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">John Doe</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-completed center title="Completed"> <i class="fa fa-check-square"></i></span>
                        </span>
                   </span>
                   <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">$000, 000, 000</h3>
                        </span>
                        <span title="open">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                   </span>
               </div>
               
           </section>
        </section>
    </main>
    <footer>
        <div loader-section in-flex row processing_loader vertical-center>
            <code blink-content>Processing</code>
            <div class="lds-hourglass"></div>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script>
        // $('[basic-card], [tilt-this]').tilt();
        $("header").prepend("<style></style>");
        // $("style").append(".notification-popup{left:10px !important}")
    </script>
</body>
</html>