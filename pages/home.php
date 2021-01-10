<section white-page-header full-width flex cols nowrap space-between>
    <span intros in-flex full-width space-between>
        <span>
            &nbsp;&nbsp;
            <h1 font1 grey small>&nbsp;&nbsp; Reports</h1>
        </span>
        <span>

        </span>
    </span>
    <span tabs>
        <nav bottom-tab-list flex in-full-width overflow-x font2 small>
            <span class="active">Accounts</span>
            <span>Operations</span>
            <span>System Diagnostics</span>
            <span>AlomoSystem</span>
        </nav>
    </span>
</section>
<section display-section full-width>
        <div in-flex full-width wrap space-evenly>
            <span accounts-card tilt-this>
                <div class="balance__body" flex cols space-between  bg-green>
                    <div class="balance__top" no-select>
                        <div class="balance__name-currency" >COLLECTIONS</div>
                        <div class="balance__icon-currency balance-item--usd">
                            $ <!-- currency-->
                        </div>
                    </div>
                    <div class="balance__middle">
                        <div class="balance__cache curr-USD">
                            <span class="curr fa fa-usd"></span>
                            <span class="int">100, 000, 000</span>
                            <small><span class="pr">.00</span></small>
                        </div>
                    </div>
                    <div class="balance__bottom" no-select>
                        <!-- <span card-in-actions>Deposit</span> -->
                        <span card-in-actions load-page source = "pages/remissions.php" title="Opens Remissions/ Collection history">View Data</span>
                    </div>
                </div>
            </span>
            <span accounts-card tilt-this>
                <div class="balance__body" flex cols space-between  bg-orange>
                    <div class="balance__top" no-select>
                        <div class="balance__name-currency">DEFAULTS</div>
                        <div class="balance__icon-currency balance-item--usd">
                            $ <!-- currency-->
                        </div>
                    </div>
                    <div class="balance__middle">
                        <div class="balance__cache curr-USD">
                            <span class="curr fa fa-usd"></span>
                            <span class="int">000</span>
                            <small><span class="pr">.00</span></small>
                        </div>
                    </div>
                    <div class="balance__bottom" no-select>
                        <!-- <span card-in-actions>Deposit</span> -->
                        <span card-in-actions load-page source = "pages/defaults.php" title="Opens Defaults">View Data</span>
                    </div>
                </div>
            </span>
            <span accounts-card tilt-this>
                <div class="balance__body" flex cols space-between bg-blue>
                    <div class="balance__top" no-select>
                        <div class="balance__name-currency">DISBURSED</div>
                        <div class="balance__extra-currency">
                                                </div>
                        <div class="balance__icon-currency balance-item--usd">
                            $ <!-- currency-->
                        </div>
                    </div>
                    <div class="balance__middle">
                        <div class="balance__cache curr-USD">
                            <span class="curr fa fa-usd"></span>
                            <span class="int">000</span>
                            <small><span class="pr">.00</span></small>
                        </div>
                    </div>
                    <div class="balance__bottom" no-select>
                        <!-- <span card-in-actions>Deposit</span> -->
                        <span card-in-actions load-page source = "pages/disbursements.php" title="Opens Disbursements">View Data</span>
                    </div>
                </div>
            </span>
        </div>
</section>