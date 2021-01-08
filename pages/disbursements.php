<?php
session_id() == '' ? session_start() : null;
$page_feature =  "disbursements";
$cards_url = $_SESSION["feature_extension"][$page_feature.'-cards'];
$tables_url = $_SESSION["feature_extension"][$page_feature.'-tables'];
$default_display_url = $cards_url;
?>
<section page-title flex space-between vertical-center overflow-x>
    <div in-flex>
        <span nowrap>
            <center><label grey small>Date Range</label></center>
            <span>
                <input from value = "<?php echo date('Y-m');?>-01" type="date" title="Start Date (From)"> <b>:</b>
                <input from value = "<?php echo date('Y-m-d');?>" to type="date" title="End Date (To)">
            </span>
        </span>
        <span nowrap>
            <center><label grey small>#. Records</label></center>
            <center>
                <span>
                    &nbsp;
                    <input max-records type="number" step="10" min="10" value="20" w80  h20>
                    &nbsp;
                </span>
            </center>
        </span>
        <span nowrap>
            <center><label grey small>Display</label></center>
            <select  h30 display-type>
                <option value="<?php echo $cards_url;?>" selected>Cards</option>
                <option value="<?php echo $tables_url;?>">Tables</option>
            </select>
        </span>
        &nbsp;
        <span nowrap>
            <center><label grey small>Status</label></center>
            <select status  h30>
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
    <em grey style="margin-top: 15px;  ">or <i class="fa fa-arrow-right" smaller style="opacity: .5;"></i></em>
    <span nowrap>
        <center><label>&nbsp;</label></center>
        <span class="searchBox">
            <input class="searchInput"type="search" placeholder="Search" search-input>
            <select search-display-type style="height: 28px;"> 
                <option value=""  selected>Display</option>
                <option value="<?php echo $cards_url;?>">Cards</option>
                <option value="<?php echo $tables_url;?>">Tables</option>
            </select>
            <button class="searchButton" role="button" style="padding: auto 10px;" type="button" title="Search">
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
        $("input, select").change(function(){
            UpdateFilters();
            console.log(UpdateFilters());
        });
        // TODO
        // Complete Filtering function
        function UpdateFilters(){
            let from = $("[from]").val(),
            to = $("[to]").val(),
            max = $("[max-records]").val(),
            status = $("[status]").val();
            let response =  {
                "from": from,
                "to": to,
                "max": max,
                "status": status,
            }
            return $.param(response);
        };
        let filters = UpdateFilters();
        let defaultDisplayType = "<?php echo $default_display_url;?>";
        if(loadInnerPage(`${defaultDisplayType}?${filters}`, "[disbursements-records]")){
            $('[basic-card], [tilt-this]').tilt();
        }
        $("[filter-records]").click(function(){
            let displayType = $("[display-type]").val();
            loadInnerPage(`${displayType}?${filters}` , "[disbursements-records]");
        });
        // TODO
        // Add search functionality
    });

</script>