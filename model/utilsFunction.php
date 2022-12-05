<?php 
class UtilsFunction {
    function getRupiah($nominal){
        $result_rupiah = "Rp. " . number_format($nominal, 0,'.','.');
        return $result_rupiah;
    }
    function getUniqueCode($payment_method){
        if ($payment_method == "Debit") {
            $keyMethod = "DEB";
        } else if ($payment_method == "Credit") {
            $keyMethod = "CRE";
        } else {
            return "Unknown payment method!!!";
        }
        $keyDDMMYY = date("dmY");
        $keyRandomNumber = rand(1000,9999);
        return $keyMethod . $keyDDMMYY . $keyRandomNumber;
    }
}
?>