<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alomo System v3 UI design</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="library/jquery-3.5.1.min.js"></script>
    <script src="library/tilt.jquery.min.js"></script>
</head>
<body>
    <main>
        <section left-main-menu scroll-bar>
            <div business-name-details>
                
            </div>
            <div main-menu>
                <span>
                    <i class="fa fa-home"></i> <label>My Dashboard</label>
                </span>
                <span class="active">
                    <i class="fa fa-file-invoice-dollar"></i> <label>Disbursements</label>
                </span>
                <span>
                    <i class="fa fa-credit-card"></i> <label>Repayments</label>
                </span>
                <span>
                    <i class="fa fa-sign-out-alt"></i> <label>Sign out</label>
                </span>
                <span>
                    <i class="fa fa-home"></i> <label>My Dashboard</label>
                </span>
                <span>
                    <i class="fa fa-file-invoice-dollar"></i> <label>Disbursements</label>
                </span>
                <span>
                    <i class="fa fa-credit-card"></i> <label>Repayments</label>
                </span>
                <span>
                    <i class="fa fa-sign-out-alt"></i> <label>Sign out</label>
                </span>
                <span>
                    <i class="fa fa-home"></i> <label>My Dashboard</label>
                </span>
                <span>
                    <i class="fa fa-file-invoice-dollar"></i> <label>Disbursements</label>
                </span>
                <span>
                    <i class="fa fa-credit-card"></i> <label>Repayments</label>
                </span>
                <span>
                    <i class="fa fa-credit-card"></i> <label>Repayments</label>
                </span>
                <span>
                    <i class="fa fa-sign-out-alt"></i> <label>Sign out</label>
                </span>
            </div>
        </section>
        <section top-main-header>
            
        </section>
        <section main-display-area>
            <section page-title flex space-between vertical-center>
                <h1>Disbursements</h1> 
                <span>
                    <span class="searchBox">
                        <input class="searchInput"type="search" placeholder="Search"  search-input>
                        <button class="searchButton" href="#" type="button">
                            <i class="fa fa-search">
                            </i>
                        </button>
                    </span>
                    <span>
                    
                    </span>
                </span>
            </section>
           <section full-width flex space-evenly row-wrap>
               <div basic-card in-flex>
                   Demo
               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>
                   Demo
               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>

               <div basic-card in-flex>
                   Demo
               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>
                   Demo
               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div><div basic-card in-flex>
                   Demo
               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>
                   Demo
               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
               <div basic-card in-flex>

               </div>
           </section>
        </section>
    </main>
    <footer>
        <div loader-section in-flex row>
            <code blink-content>Processing</code>
            <div class="lds-hourglass"></div>
        </div>
    </footer>
    <script>
        $(function(){
            $('[basic-card], [tilt-this]').tilt();
        });
    </script>
</body>
</html>