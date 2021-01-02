<section page-title flex space-between vertical-center overflow-x>
    <div in-flex>
        <span nowrap>
            <center><label grey small>Date Range</label></center>
            <span>
                <input type="date" title="Start Date (From)"> <b>:</b>
                <input type="date" title="End Date (To)">
            </span>
        </span>
        <span nowrap>
            <center><label grey small>#. Records</label></center>
            <center>
                <span>
                    &nbsp;
                    <input type="number" step="10" min="10" value="20" w80  h20>
                    &nbsp;
                </span>
            </center>
        </span>
        <span nowrap>
            <center><label grey small>Display</label></center>
            <select name="" id=""  h30 display-type>
                <option value="cards" selected>Cards</option>
                <option value="table">Tables</option>
            </select>
        </span>
        &nbsp;
        <span nowrap>
            <center><label grey small>Status</label></center>
            <select name="" id=""  h30>
                <option value="all" selected>All</option>
                <option value="active">Active</option>
                <option value="completed">Completed</option>
                <option value="defaulted">Defaulted</option>
            </select>
        </span>
        <span nowrap>
            <center><label grey small>Action</label></center>
            <button style="margin-top: -1px;" h30 filter-records>
                    <i class="fa fa-filter" title="Fetch Records" on></i><span font2> Filter</span>
            </button>
        </span>
    </div>
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
<section full-width flex space-evenly row-wrap disbursements-records>
                   
</section>
<script>
    $(function(){
        // TODO
        // Complete Filtering function
        let filters = {
            "from": "YY-MM-DD",
            "to": "YY-MM-DD",
            "max": "20",
            "status": "all"
        };
        let encoded_filters = $.param(filters);
        if(loadInnerPage("inner-pages/disbursements-cards.php?"+encoded_filters, "[disbursements-records]")){
            $('[basic-card], [tilt-this]').tilt();
        }
        $("[filter-records]").click(function(){
            let displayType = $("[display-type]").val();
            if(displayType == "table"){
                loadInnerPage("inner-pages/disbursements-table.php", "[disbursements-records]");
            }else if(displayType == "cards"){
                loadInnerPage("inner-pages/disbursements-cards.php", "[disbursements-records]");
            }else{
                AlertPageLoadFailed(400400);
            }
        });
        // TODO
        // Add search functionality
    });

</script>