<?php


/*
     * Function to show an Alert type Message Box
     *
     * @param string $message   The Alert Message
     * @return string           The Alert Box
     */
    function alertBox($message) {
       // return "<div class=\"alert alert-dismissable $type\"><span>$icon</span> $message <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">x</a></div>";
       return  "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>$message</div>";
    }
    /*
     * Function to convert a number into readable Currency
     *
     * @param string $n   			The number
     * @param string $n_decimals	The decimal position
     * @return string           	The formatted Currency Amount
	 *
	 * Returns string type, rounded number - same as php number_format()):
	 *
	 * Examples:
	 *		format_amount(54.377, 2) 	returns 54.38
	 *		format_amount(54.004, 2) 	returns 54.00
	 *		format_amount(54.377, 3) 	returns 54.377
	 *		format_amount(54.00007, 3) 	returns 54.00
     */
	function format_amount($n, $n_decimals) {
        return ((floor($n) == round($n, $n_decimals)) ? number_format($n).'.00' : number_format($n, $n_decimals));
    }
    
    /*
     * Function to Encrypt user sensitive data for storing in the database
     *
     * @param string	$value		The text to be encrypted
	 * @param 			$encodeKey	The Key to use in the encryption
     * @return						The encrypted text
     */
	function encryptIt($plainValue) {
		// The encodeKey MUST match the decodeKey
		return trim( sha1( base64_encode(  md5($plainValue) ) ));
	}
	
	function clean($string) {
			return $string = str_replace(',', '', $string); // Replaces all spaces with hyphens.
	}
	
	function Percentage($value){
			return round($value * 100). "%";
		}
		
		function Percentages($value){
			return round($value * 100);
		}
    
?>
