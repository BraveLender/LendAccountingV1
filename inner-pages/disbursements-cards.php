<?php
try {
    session_id() == '' ? session_start() : null;
    $feature =  "disbursement";
    $overview_page = $_SESSION["feature_extension"][$feature.'-overview'];
    $currency = $_SESSION["branch_info"]["currency"];
    function displayLoanCard($loan_number, $status, $client_names, $amount, $currency, $overview_page){
        $status = $status == "pending" ? "active" : $status;
        try {
            switch ($status) {
                case 'settled':
                    $status = "completed";
                    $title = "Loan was settled";
                    $icon = "check-square";
                    break;
                case 'active':
                    $status = "pending";
                    $title = "Pending Completion";
                    $icon = "clock";
                    break;
                default:
                    $status = "default";
                    $title = "Default";
                    $icon = "times-circle";
                    break;
            };
            return $card = '
                <div basic-card in-flex cols space-between>
                    <span full-width in-flex space-between>
                        <span in-flex cols nowrap space-between>
                            <h4 mg0 title="Client name">'.$client_names.'</h4>
                        </span>
                        <span  in-flex cols nowrap space-between>
                            <span status-icon status-'.$status.' center title="'.$title.'"> <i class="fa fa-'.$icon.'"></i></span>
                        </span>
                    </span>
                    <span full-width in-flex space-between>
                        <span in-flex vertical-center>
                            <h3 mg0 grey hover-dark title="Amount obtained">'.$currency.number_format($amount).'</h3>
                        </span>
                        <span title="open" onclick="urlPopUp(\''.$overview_page.'?loan_number='.$loan_number.'\')">
                            <button title="open"><i class="fa fa-chevron-right"></i></button>
                        </span>
                    </span>
                </div>                
            ';
        } catch (\Throwable $th) {
            echo '<script>
            console.error(`'.$th.'`);
            </script>';
            return "something went wrong. please try again";
        }
    }
    //LOAN STATES [active, settled, default]
    echo displayLoanCard('12345', "settled", "Jane Doe", "100231000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "123100000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1003876000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1012000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "pending", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "100012000", $currency, $overview_page);
    echo displayLoanCard('12345', "default", "Jane Doe", "110000", $currency, $overview_page);
    echo displayLoanCard('12345', "default", "Jane Doe", "10210000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "pending", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "10023130", $currency, $overview_page);
    echo displayLoanCard('12345', "pending", "Jane Doe", "1009900000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "default", "Jane Doe", "10120000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "pending", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "pending", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "default", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);
    echo displayLoanCard('12345', "settled", "Jane Doe", "1000000000", $currency, $overview_page);

} catch (\Throwable $th) {
    echo "something went wrong. please try again";
    echo '<script>
    console.error(`'.$th.'`);
    </script>';
}
?>