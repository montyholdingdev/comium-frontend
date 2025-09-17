<?php

$countries = [
    "Afghanistan",
    "Algeria",
    "Angola",
    "Anguilla",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Australia",
    "Austria",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Benin",
    "Bermuda",
    "Bhutan",
    "Brazil",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cabo Verde",
    "Cameroon",
    "Canada",
    "Central African Republic",
    "Chad",
    "Congo",
    "Cote d'Ivoire",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czech Republic",
    "Dominica",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Estonia",
    "Eswatini",
    "Finland",
    "France",
    "Gabon",
    "Georgia",
    "Germany",
    "Ghana",
    "Greece",
    "Grenada",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Hong Kong",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iraq",
    "Ireland",
    "Israel",
    "Italy",
    "Jamaica",
    "Japan",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Korea",
    "Kuwait",
    "Kyrgyzstan",
    "Latvia",
    "Lebanon",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Macao",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Malta",
    "Mauritania",
    "Mauritius",
    "Mexico",
    "Mongolia",
    "Montenegro",
    "Morocco",
    "Mozambique",
    "Namibia",
    "Netherlands",
    "Netherlands Antilles",
    "Niger",
    "Nigeria",
    "Norway",
    "Oman",
    "Pakistan",
    "Palestine, State of",
    "Panama",
    "Papua New Guinea",
    "Philippines",
    "Poland",
    "Portugal",
    "Puerto Rico",
    "Qatar",
    "Romania",
    "Russian Federation",
    "Rwanda",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Vincent and the Grenadines",
    "Sao Tome and Principe",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Sierra Leone",
    "Singapore",
    "Slovenia",
    "South Africa",
    "South Sudan",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Sweden",
    "Switzerland",
    "Syrian Arab Republic",
    "Tanzania",
    "Thailand",
    "Togo",
    "Tunisia",
    "Turkey",
    "Turks and Caicos Islands",
    "Uganda",
    "Ukraine",
    "United Arab Emirates",
    "United Kingdom",
    "USA",
    "Uzbekistan",
    "Venezuela (Bolivarian)",
    "Viet Nam",
    "Virgin Islands (British)",
    "Zambia",
    "Zimbabwe"
];

$prepaid_headers = array("val0" => "Country", "val1" => "Operator", "val2" => "Local Call in Roaming Country", "val3" => "Call to Gambia", "val4" => "Call to ECOWAS Countries", "val5" => "Call to (Rest of World)", "val6" => "Incoming Call", "val7" => "Outgoing SMS", "val8" => "Incoming SMS", "val9" => "INTERNET 
Per MB");


$postpaid_headers = array("val0" => "Country", "val1" => "Operator", "val2" => "Local Call in Roaming Country", "val3" => "Call to Gambia", "val4" => "Call to ECOWAS Countries", "val5" => "Call to (Rest of World)", "val6" => "Incoming Call", "val7" => "Outgoing SMS", "val8" => "Incoming SMS", "val9" => "INTERNET 
Per MB");

$prepaid =  array(
    array("val0" => "Bulgaria", "val1" => "VIVACOM BULGARIA EAD", "val2" => "20", "val3" => "40", "val4" => "60", "val5" => "100", "val6" => "40", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Cote d'Ivoire", "val1" => "MOOV", "val2" => "14", "val3" => "45", "val4" => "45", "val5" => "400", "val6" => "Free", "val7" => "5", "val8" => "Free", "val9" => "2"),
    array("val0" => "Croatia", "val1" => "TELEMACH", "val2" => "20", "val3" => "40", "val4" => "60", "val5" => "100", "val6" => "40", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Cyprus", "val1" => "PRIMETEL PLC", "val2" => "60", "val3" => "60", "val4" => "70", "val5" => "100", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Cyprus", "val1" => "MTN CYPRUS LTD.", "val2" => "20", "val3" => "40", "val4" => "60", "val5" => "100", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Egypt", "val1" => "ORANGE", "val2" => "30", "val3" => "60", "val4" => "60", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Georgia ", "val1" => "Silknet", "val2" => "60", "val3" => "60", "val4" => "60", "val5" => "100", "val6" => "60", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Ghana", "val1" => "MTN", "val2" => "10", "val3" => "40", "val4" => "40", "val5" => "150", "val6" => "Free", "val7" => "10", "val8" => "Free", "val9" => "1"),
    array("val0" => "Ghana", "val1" => "Telecell GHANA TELECOM", "val2" => "10", "val3" => "40", "val4" => "40", "val5" => "100", "val6" => "Free", "val7" => "10", "val8" => "Free", "val9" => "1"),
    array("val0" => "Greece", "val1" => "NOVA", "val2" => "20", "val3" => "40", "val4" => "60", "val5" => "100", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Hong Kong", "val1" => "HUTCHISON", "val2" => "25", "val3" => "50", "val4" => "60", "val5" => "100", "val6" => "25", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Italy", "val1" => "Wind Tre", "val2" => "20", "val3" => "20", "val4" => "30", "val5" => "80", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Italy", "val1" => "Telecom Itali", "val2" => "30", "val3" => "30", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Latvia", "val1" => "TELE2 LATIVA", "val2" => "30", "val3" => "60", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Mauritania", "val1" => "MATTEL", "val2" => "20", "val3" => "60", "val4" => "80", "val5" => "100", "val6" => "60", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Mexico", "val1" => "AT & T", "val2" => "30", "val3" => "30", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Morocco", "val1" => "MAROC TELECOM", "val2" => "20", "val3" => "50", "val4" => "60", "val5" => "100", "val6" => "50", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Pakistan", "val1" => "ZONG", "val2" => "30", "val3" => "30", "val4" => "50", "val5" => "50", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Qatar", "val1" => "OOREDOO QATAR", "val2" => "20", "val3" => "30", "val4" => "40", "val5" => "50", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Romania", "val1" => "Digi Romania", "val2" => "20", "val3" => "40", "val4" => "50", "val5" => "100", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Russia", "val1" => "VimpelCom", "val2" => "30", "val3" => "30", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Saudi Arabia", "val1" => "ZAIN", "val2" => "30", "val3" => "40", "val4" => "50", "val5" => "100", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Saudi Arabia", "val1" => "ZAIN", "val2" => "20", "val3" => "40", "val4" => "50", "val5" => "100", "val6" => "40", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Senegal", "val1" => "YAS", "val2" => "30", "val3" => "60", "val4" => "100", "val5" => "150", "val6" => "60", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Slovenia", "val1" => "Telemach Slovenia", "val2" => "20", "val3" => "40", "val4" => "60", "val5" => "100", "val6" => "40", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Sri Lanka", "val1" => "HUTCHISON", "val2" => "20", "val3" => "20", "val4" => "20", "val5" => "50", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Switzerland", "val1" => "SUNRISE GMBH", "val2" => "40", "val3" => "40", "val4" => "40", "val5" => "50", "val6" => "50", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Thailand", "val1" => "AIS", "val2" => "30", "val3" => "30", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Tunisia", "val1" => "OOREDOO TUNISIA SA", "val2" => "60", "val3" => "60", "val4" => "60", "val5" => "100", "val6" => "60", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Turkey", "val1" => "Turkcel", "val2" => "30", "val3" => "40", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Turkey", "val1" => "AVEA ", "val2" => "30", "val3" => "30", "val4" => "50", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "United Arab Emirates", "val1" => "ETISALAT", "val2" => "25", "val3" => "25", "val4" => "25", "val5" => "50", "val6" => "25", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "United Kingdom", "val1" => "VODAFONE LIMITED", "val2" => "50", "val3" => "50", "val4" => "50", "val5" => "100", "val6" => "50", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "USA", "val1" => "AT&T", "val2" => "20", "val3" => "40", "val4" => "60", "val5" => "100", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Viet Nam", "val1" => "Vietnamobile Telecommunications", "val2" => "20", "val3" => "20", "val4" => "30", "val5" => "50", "val6" => "20", "val7" => "10", "val8" => "Free", "val9" => "2"),
    array("val0" => "Viet Nam", "val1" => "VIETTEL TELECOM", "val2" => "40", "val3" => "80", "val4" => "80", "val5" => "100", "val6" => "30", "val7" => "10", "val8" => "Free", "val9" => "2")
);

$postpaid =  array(
    array("val0" => "Afghanistan", "val1" => "AREEBA AFGHANISTAN", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => "N/A"),
    array("val0" => "Algeria", "val1" => "DJEZZY/OPTIMUM TELECOM ALGERIA", "val2" => " € 4.00 ", "val3" => " € 5.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 6.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => "#N/A"),
    array("val0" => "Anguilla", "val1" => "CABLE & WIRELESS, ANGUILLA", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Angola", "val1" => "UNITEL SA - ANGOLA", "val2" => " € 4.00 ", "val3" => " € 6.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 3.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "United Arab Emirates", "val1" => "Etisalat", "val2" => " € 0.18 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Argentina", "val1" => "TELEFONICA MOVILES", "val2" => " € 3.00 ", "val3" => " € 5.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 3.00 ", "val7" => " € 3.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Armenia", "val1" => "MTS ARMENIA", "val2" => " € 3.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 3.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Antigua and Barbuda", "val1" => "CABLE & WIRELESS, ANTIGUA", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Australia", "val1" => "TPG TELECOM LIMITED", "val2" => " € 0.10 ", "val3" => " € 0.10 ", "val4" => " € 0.10 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.03 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Austria", "val1" => "T-MOBILE", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.40 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Bahrain", "val1" => "Preferred", "val2" => " € 4.00 ", "val3" => " € 5.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " € 1.000 "),
    array("val0" => "Belgium", "val1" => "Telenet Group", "val2" => " € 0.35 ", "val3" => " € 0.35 ", "val4" => " € 0.35 ", "val5" => " Variable ", "val6" => " € 0.35 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Bangladesh", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 6.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 3.00 ", "val8" => " Free ", "val9" => "#N/A"),
    array("val0" => "Belarus", "val1" => "UNITARY ENTERPRISE A1", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Benin", "val1" => "Preferred", "val2" => " € 7.00 ", "val3" => " € 9.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 7.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Bulgaria", "val1" => "VIVACOM BULGARIA EAD", "val2" => " € 0.10 ", "val3" => " € 0.25 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Bermuda", "val1" => "AT&T PMN BMU01", "val2" => " € 6.00 ", "val3" => " € 8.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 6.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Brazil", "val1" => "VIVO", "val2" => " € 3.00 ", "val3" => " € 5.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 3.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Burkina Faso", "val1" => "Preferred", "val2" => " € 4.00 ", "val3" => " € 6.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Bhutan", "val1" => "Bhutan Telecom Limited (BTL)", "val2" => " € 0.60 ", "val3" => " € 0.60 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.07 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Burundi", "val1" => "U-COM BURUNDI", "val2" => " € 6.00 ", "val3" => " € 8.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 6.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Barbados", "val1" => "CABLE & WIRELESS, BARBADOS", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Cabo Verde", "val1" => "Preferred", "val2" => " € 4.00 ", "val3" => " € 6.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 3.00 ", "val8" => " Free ", "val9" => "#N/A"),
    array("val0" => "Canada", "val1" => "TELUS", "val2" => " € 0.10 ", "val3" => " € 0.15 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.08 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Switzerland", "val1" => "SUNRISE GMBH", "val2" => " € 0.70 ", "val3" => " € 0.70 ", "val4" => " € 0.70 ", "val5" => " Variable ", "val6" => " € 0.70 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Cote d'Ivoire", "val1" => "ATLANTIQUE TELECOM CÃ”TE D'IVOIRE", "val2" => " € 0.17 ", "val3" => " € 0.35 ", "val4" => " € 0.45 ", "val5" => " Variable ", "val6" => " Free ", "val7" => " € 0.07 ", "val8" => " Free ", "val9" => " € 0.005 "),
    array("val0" => "Cameroon", "val1" => "ORANGE", "val2" => " € 2.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " € 7.000 "),
    array("val0" => "Congo", "val1" => "VODACOM CONGO", "val2" => " € 0.30 ", "val3" => " € 0.30 ", "val4" => " € 0.35 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.007 "),
    array("val0" => "Central African Republic", "val1" => "Preferred", "val2" => " € 4.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Chad", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Congo", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 6.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 4.00 ", "val8" => " Free ", "val9" => "#N/A"),
    array("val0" => "Cayman Islands", "val1" => "CABLE & WIRELESS, CAYMAN", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Cyprus", "val1" => "PRIMETEL PLC", "val2" => " € 0.70 ", "val3" => " € 0.70 ", "val4" => " € 0.70 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Germany", "val1" => "TELEKOM DEUTSCHLAND GMBH", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.40 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Dominica", "val1" => "CABLE & WIRELESS, DOMINICA", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Cuba", "val1" => "ETECSA S.A. UNIDAD DE NEGOCIOS MOV", "val2" => " € 4.00 ", "val3" => " € 5.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 4.00 ", "val8" => " Free ", "val9" => "#N/A"),
    array("val0" => "Ecuador", "val1" => "OTECEL S.A.", "val2" => " € 4.00 ", "val3" => " € 5.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 3.00 ", "val8" => " Free ", "val9" => " € 7.000 "),
    array("val0" => "Egypt", "val1" => "ORANGE", "val2" => " € 0.20 ", "val3" => " € 0.60 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.008 "),
    array("val0" => "Spain", "val1" => "VODAFONE SPAIN", "val2" => " € 0.30 ", "val3" => " € 0.30 ", "val4" => " € 0.30 ", "val5" => " Variable ", "val6" => " € 0.50 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.007 "),
    array("val0" => "Estonia", "val1" => "TELE2 EESTI - ESTONIA", "val2" => " € 0.30 ", "val3" => " € 0.90 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Finland", "val1" => "ALANDS MOBILTELEFON AB", "val2" => " € 0.20 ", "val3" => " € 0.30 ", "val4" => " € 0.65 ", "val5" => " Variable ", "val6" => " € 0.35 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "France", "val1" => "SFR", "val2" => " € 0.50 ", "val3" => " € 0.50 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.25 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "France", "val1" => "FREE MOBILE S.A.S.", "val2" => " € 0.50 ", "val3" => " € 0.50 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.25 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.008 "),
    array("val0" => "El Salvador", "val1" => "TELEFONICA MOVILES EL SALVADOR SA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Jersey", "val1" => "JT (JERSEY) LIMITED", "val2" => " € 0.70 ", "val3" => " € 0.70 ", "val4" => " € 0.70 ", "val5" => " Variable ", "val6" => " € 1.00 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Isle of Man", "val1" => "MANX TELECOM LIMITED", "val2" => " € 0.05 ", "val3" => " € 0.30 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "United Kingdom", "val1" => "VODAFONE LIMITED", "val2" => " € 0.30 ", "val3" => " € 0.30 ", "val4" => " € 0.30 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Ghana", "val1" => "GHANA TELECOM CO LTD", "val2" => " € 0.06 ", "val3" => " € 0.30 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " Free ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.005 "),
    array("val0" => "Ghana", "val1" => "AREEBA GHANA (MTN)", "val2" => " € 0.06 ", "val3" => " € 0.30 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " Free ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.005 "),
    array("val0" => "Equatorial Guinea", "val1" => "MUNI SA", "val2" => " € 2.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " € 7.000 "),
    array("val0" => "Eswatini", "val1" => "MTN SWAZILAND", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Gabon", "val1" => "LIBERTIS GABON", "val2" => " € 2.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => "#N/A"),
    array("val0" => "Greece", "val1" => "NOVA", "val2" => " € 0.10 ", "val3" => " € 0.25 ", "val4" => " € 0.65 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Grenada", "val1" => "CABLE & WIRELESS, GRENADA", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Guinea", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Hong Kong", "val1" => "HUTCHISON 3G HK LTD", "val2" => " € 0.15 ", "val3" => " € 0.50 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Croatia", "val1" => "TELEMACH HRVATSKA D.O.O.", "val2" => " € 0.10 ", "val3" => " € 0.35 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Guinea-Bissau", "val1" => "Preferred", "val2" => " € 2.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " € 7.000 "),
    array("val0" => "Indonesia", "val1" => "PT INDOSAT TBK", "val2" => " € 0.10 ", "val3" => " € 0.50 ", "val4" => " € 0.50 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.07 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Guyana", "val1" => "U-MOBILE AKA DIGICEL GUYANA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Ireland", "val1" => "METEOR MOBILE COMMUNICATIONS LTD", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.40 ", "val5" => " Variable ", "val6" => " € 2.00 ", "val7" => " € 0.08 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Iraq", "val1" => "KOREK TELECOM COMPANY", "val2" => " € 0.10 ", "val3" => " € 0.60 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Iceland", "val1" => "SIMINN", "val2" => " € 0.10 ", "val3" => " € 0.25 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Hungary", "val1" => "YETTEL HUNGARY LTD.", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Italy", "val1" => "Wind Tre S.p.A (“Wind Tre Italy”)", "val2" => " € 0.10 ", "val3" => " € 0.15 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Jamaica", "val1" => "CABLE & WIRELESS, JAMAICA", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "India", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Israel", "val1" => "CELLCOM ISRAEL LTD", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Jamaica", "val1" => "DIGICEL JAMAICA", "val2" => " € 2.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " € 7.000 "),
    array("val0" => "Japan", "val1" => "SOFTBANK CORP.", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Jordan", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Kazakhstan", "val1" => "MOBILE TELECOM-SERVICE LLP", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Saint Kitts and Nevis", "val1" => "CABLE & WIRELESS, ST. KITTS", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Korea", "val1" => "KT - KOREA TELECOM", "val2" => " € 0.15 ", "val3" => " € 0.40 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.07 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Kuwait", "val1" => "STC KUWAIT", "val2" => " € 0.10 ", "val3" => " € 0.20 ", "val4" => " € 0.50 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Kenya", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Kuwait", "val1" => "OOREDOO KUWAIT", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Kyrgyzstan", "val1" => "NURTELECOM LLC", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Saint Lucia", "val1" => "CABLE & WIRELESS, ST. LUCIA", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Lebanon", "val1" => "Preferred", "val2" => " € 1.20 ", "val3" => " € 2.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 0.80 ", "val7" => " € 0.30 ", "val8" => " Free ", "val9" => " € 1.000 "),
    array("val0" => "Liechtenstein", "val1" => "ORANGE (LIECHTENSTEIN) AG", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.40 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.08 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Sri Lanka", "val1" => "HUTCHISON TELECOMMUNICATIONS - SRI", "val2" => " € 0.10 ", "val3" => " € 0.12 ", "val4" => " € 0.30 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Lithuania", "val1" => "UAB TELE2", "val2" => " € 0.30 ", "val3" => " € 0.90 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Luxembourg", "val1" => "POST LUXEMBOURG", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.40 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Latvia", "val1" => "TELE2 LATIVA", "val2" => " € 0.30 ", "val3" => " € 0.90 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Macao", "val1" => "HUTCHISON TELEPHONE (MACAU) COMPANY", "val2" => " € 0.15 ", "val3" => " € 0.50 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Morocco", "val1" => "MAROC TELECOM", "val2" => " € 0.10 ", "val3" => " € 0.50 ", "val4" => " € 0.65 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.008 "),
    array("val0" => "Libya", "val1" => "LIBYANA MOBILE PHONE", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Liechtenstein", "val1" => "TELECOM LIECHTENSTEIN", "val2" => " € 2.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 4.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " € 7.000 "),
    array("val0" => "Madagascar", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Malta", "val1" => "EPIC COMMUNICATIONS LIMITED", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.40 ", "val5" => " Variable ", "val6" => " € 0.40 ", "val7" => " € 0.08 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Montenegro", "val1" => "MTEL D.O.O. PODGORICA", "val2" => " € 0.55 ", "val3" => " € 0.55 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.35 ", "val7" => " € 0.07 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Malawi", "val1" => "TELEKOM NETWORKS MALAWI PLC", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Malaysia", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Mauritania", "val1" => "MATTEL", "val2" => " € 0.15 ", "val3" => " € 0.65 ", "val4" => " € 0.80 ", "val5" => " Variable ", "val6" => " € 0.60 ", "val7" => " € 0.20 ", "val8" => " Free ", "val9" => " € 0.005 "),
    array("val0" => "Montserrat", "val1" => "CABLE & WIRELESS, MONTSERRAT", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Mauritius", "val1" => "MAURITIUS TELECOM", "val2" => " € 0.15 ", "val3" => " € 0.20 ", "val4" => " € 0.50 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.08 ", "val8" => " Free ", "val9" => " € 0.009 "),
    array("val0" => "Mali", "val1" => "ORANGE - MALI", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Mexico", "val1" => "PEGASO PCS,", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Mongolia", "val1" => "UNITEL - MONGOLIA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Niger", "val1" => "ZAMANI TELECOM SA", "val2" => " € 0.25 ", "val3" => " € 0.55 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Nigeria", "val1" => "GLO MOBILE -NIGERIA", "val2" => " € 0.12 ", "val3" => " € 0.66 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 0.12 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.005 "),
    array("val0" => "Netherlands", "val1" => "KPN TELECOM B.V.", "val2" => " € 0.35 ", "val3" => " € 0.55 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.25 ", "val7" => " € 0.12 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Norway", "val1" => "TELIA NORWAY (NO07)", "val2" => " € 0.30 ", "val3" => " € 0.90 ", "val4" => " € 0.90 ", "val5" => " Variable ", "val6" => " € 0.90 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Mozambique", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Namibia", "val1" => "MTC - NAMIBIA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Netherlands Antilles", "val1" => "DIGICEL CURACAO", "val2" => " € 3.00 ", "val3" => " € 4.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 3.00 ", "val7" => " € 2.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Oman", "val1" => "OOREDOO OMAN", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Poland", "val1" => "T-MOBILE POLSKA SA", "val2" => " € 0.40 ", "val3" => " € 0.40 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Poland", "val1" => "P4 SP. Z O.O.", "val2" => " € 0.50 ", "val3" => " € 0.50 ", "val4" => " € 0.50 ", "val5" => " Variable ", "val6" => " € 0.15 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Puerto Rico", "val1" => "PUERTO RICO TELEPHONE", "val2" => " € 0.40 ", "val3" => " € 45.00 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.40 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.007 "),
    array("val0" => "Portugal", "val1" => "MEO - SERVICES DE COMM. MULTIMEDIA", "val2" => " € 0.50 ", "val3" => " € 0.50 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.25 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Palestine, State of", "val1" => "WATANIYA PALESTINE TELECOM", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Qatar", "val1" => "OOREDOO QATAR", "val2" => " € 0.18 ", "val3" => " ,18 ", "val4" => " € 0.40 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Panama", "val1" => "DIGICEL PANAMA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Papua New Guinea", "val1" => "DIGICEL PAPUA NEW GUINEA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Saudi Arabia", "val1" => "ZAIN", "val2" => " € 0.16 ", "val3" => " € 0.40 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.13 ", "val7" => " € 0.07 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Philippines", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Senegal", "val1" => "Yas", "val2" => " € 0.10 ", "val3" => " € 0.55 ", "val4" => " € 0.80 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => "€ 0.04", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Russian Federation", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Rwanda", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Sao Tome and Principe", "val1" => "CST-COMPANHIA SANTOMENSE DE TEL SA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Serbia", "val1" => "YETTEL D.O.O. BELGRADE", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Sierra Leone", "val1" => "ORANGE SIERRA LEONE", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Singapore", "val1" => "M1 LIMITED", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "South Sudan", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Slovenia", "val1" => "Telemach Slovenia SVNVG ", "val2" => " € 0.10 ", "val3" => " € 0.30 ", "val4" => " € 0.65 ", "val5" => " Variable ", "val6" => " € 0.35 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Sweden", "val1" => "TeliaSonera (COMVIQ)", "val2" => " € 0.30 ", "val3" => " € 0.90 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Sudan", "val1" => "MTN SUDAN LTD", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Sudan", "val1" => "SUDANESE MOBILE  (ZAIN) ", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Turks and Caicos Islands", "val1" => "CABLE & WIRELESS, TURKS/CAICOS", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Suriname", "val1" => "DIGICEL SURINAME N.V.", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Syrian Arab Republic", "val1" => "MTN SYRIA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Thailand", "val1" => "AWN", "val2" => " € 0.07 ", "val3" => " € 0.40 ", "val4" => " € 0.90 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Tunisia", "val1" => "OOREDOO TUNISIA SA", "val2" => " € 0.65 ", "val3" => " € 0.65 ", "val4" => " € 0.65 ", "val5" => " Variable ", "val6" => " € 0.65 ", "val7" => " € 0.06 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Turkey", "val1" => "AVEA ", "val2" => " € 0.06 ", "val3" => " € 0.35 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.001 "),
    array("val0" => "Turkey", "val1" => "TURKCELL - TURKEY", "val2" => " € 0.06 ", "val3" => " € 0.35 ", "val4" => " € 0.55 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.001 "),
    array("val0" => "Tanzania", "val1" => "VODACOM TANZANIA", "val2" => " € 0.30 ", "val3" => " € 0.30 ", "val4" => " € 0.30 ", "val5" => " Variable ", "val6" => " € 0.30 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Telenor Maritime", "val1" => "Telenor Martime", "val2" => " € 2.50 ", "val3" => " € 2.50 ", "val4" => " € 2.50 ", "val5" => " Variable ", "val6" => " € 1.00 ", "val7" => " € 0.40 ", "val8" => " Free ", "val9" => " € 3.100 "),
    array("val0" => "Togo", "val1" => "TOGOCEL", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "USA", "val1" => "AT&T", "val2" => " € 0.05 ", "val3" => " € 0.20 ", "val4" => " € 0.65 ", "val5" => " Variable ", "val6" => " € 0.03 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Uganda", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Saint Vincent and the Grenadines", "val1" => "CABLE & WIRELESS, ST. VINCENT", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Ukraine", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Virgin Islands (British)", "val1" => "CABLE & WIRELESS, BRITISH VIRGIN IS", "val2" => " € 0.20 ", "val3" => " € 0.20 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.10 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Viet Nam", "val1" => "VIETTEL TELECOM CORPORATION", "val2" => " € 0.25 ", "val3" => " € 0.70 ", "val4" => " € 0.70 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.004 "),
    array("val0" => "Viet Nam", "val1" => "Vietnamobile Telecommunications Joint Stock Company (“H3G Vietnam”)", "val2" => " € 0.10 ", "val3" => " € 0.10 ", "val4" => " € 0.20 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Uzbekistan", "val1" => "Preferred", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "South Africa", "val1" => "VODACOM SOUTH AFRICA", "val2" => " € 0.30 ", "val3" => " € 0.30 ", "val4" => " € 0.30 ", "val5" => " Variable ", "val6" => " € 0.20 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.006 "),
    array("val0" => "Venezuela (Bolivarian)", "val1" => "TELECOMUNICACIONES MOVILNET", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Zambia", "val1" => "CELTEL ZAMBIA", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Georgia ", "val1" => "Silknet (Geocell ) ", "val2" => " € 0.60 ", "val3" => " € 0.60 ", "val4" => " € 0.60 ", "val5" => " Variable ", "val6" => " € 0.25 ", "val7" => " € 0.05 ", "val8" => " Free ", "val9" => " € 0.003 "),
    array("val0" => "Zimbabwe", "val1" => "ECONET WIRELESS", "val2" => " € 5.00 ", "val3" => " € 7.00 ", "val4" => " Variable ", "val5" => " Variable ", "val6" => " € 5.00 ", "val7" => " € 1.00 ", "val8" => " Free ", "val9" => " N/A "),
    array("val0" => "Romania", "val1" => "Digi Romania", "val2" => " € 0.06 ", "val3" => " € 0.45 ", "val4" => " € 0.45 ", "val5" => " Variable ", "val6" => " € 0.10 ", "val7" => " € 0.04 ", "val8" => " Free ", "val9" => " € 0.003")
);
?>

<?php
function slugify($text)
{
    // Replace accented characters
    $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text); // replace non-alphanum with dash
    return trim($text, '-');
}


?>
<?php $m = 'Before traveling to Senegal, please dial *221# to activate free roaming service for Senegal'; ?>

<style>
    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }

    .marquee-content {
        display: inline-block;
        padding-left: 100%;
        /* starts outside the container */
        animation: marquee-scroll 30s linear infinite;
    }

    @keyframes marquee-scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>
<h3 class="red-title">Roaming Tariff</h3>
<h4>Freedom to Roam, Control in Your Hands</h4>

<div class="roaming-tariff-filters">
    <select id="country-select" style="width:100%;" class="custom-select" name="country">
        <option></option>
        <?php foreach ($countries as $country): ?>
            <option value="<?= $country ?>"><?= $country ?></option>
        <?php endforeach; ?>


    </select>
    <select style="width:100%" id="type-select" class="custom-select" name="type">
        <option></option>
        <option value="Prepaid">Prepaid</option>
        <option value="Postpaid">Postpaid</option>
    </select>
</div>

<div class="table-container">

    <div class="hidden data-table" id="Prepaid-table">
        <div class="table-wrapper">
            <div class="table-header">
                <?php foreach ($prepaid_headers as $key => $prh): ?>
                    <div class="cell"><?= $prh ?></div>
                <?php endforeach; ?>
            </div>
            <?php foreach ($prepaid as $key => $row): ?>
                <?php $normalizedVal1 = slugify($row['val0']); ?>
                <div class="table-row hidden row-<?= $normalizedVal1 ?>">
                    <?php foreach ($row as $key2 => $col): ?>
                        <div class="cell">
                            <span class="<?= $key2 == 'val9' ? 'red-text font-bold' : '' ?>"><?= $col ?></span>
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endforeach; ?>

        </div>
        <div class="hidden senegal-text">
            <div class="marquee-container mt-3">
                <div class="marquee-content red-text">
                    <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?>
                    <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h5 style="font-size:20px;">Instructions & Terms</h5>
            <ul>
                <li>Call charges are per Minute.</li>
                <li>All tariffs are stated in Gambian Dalasi (GMD) and are tax Inclusive.</li>
                <li>All tariffs are subject to change as per the change in the Roaming Operator is IOT.</li>
                <li>During roaming on any network outgoing calls would be dialed in international format i.e. +2206XXX , 002206XXXX.</li>
                <li>Outgoing Calls to Satellite - Premium rate - Toll-free numbers and Emergency numbers are charged at higher rates as charged by foreign operators.</li>
                <li>ECOWAS Countries contain: Benin, Burkina Faso, Cape Verde, Côte d'Ivoire, The Gambia, Ghana, Guinea, Guinea-Bissau, Liberia, Mali, Niger, Nigeria, Senegal, Sierra Leone, and Togo</li>
            </ul>
        </div>

    </div>

    <div class="hidden data-table" id="Postpaid-table">
        <div class="table-wrapper">
            <div class="table-header">
                <?php foreach ($postpaid_headers as $key => $pph): ?>
                    <div class="cell"><?= $pph ?></div>
                <?php endforeach; ?>
            </div>
            <?php foreach ($postpaid as $key => $row): ?>
                <?php $normalizedVal2 = slugify($row['val0']); ?>
                <div class="table-row hidden row-<?= $normalizedVal2 ?>">
                    <?php foreach ($row as $key2 => $col): ?>
                        <div class="cell">
                            <span class="<?= $key2 == 'val9' ? 'red-text font-bold' : '' ?>"><?= $col ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php endforeach; ?>
        </div>

        <div class="hidden senegal-text">
            <div class="marquee-container mt-3">
                <div class="marquee-content red-text">
                    <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?>
                    <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?> ★ <?= $m ?>
                </div>
            </div>
        </div>



        <div class="mt-5">
            <h5 style="font-size:20px;">Instructions & Terms</h5>
            <ul>
                <li>Call charges are per Minute.</li>
                <li>All tariffs are stated in EURO (EUR) and are tax exclusive.</li>
                <li>All tariffs are subject to change as per the change in the Roaming Operator is IOT.</li>
                <li>During roaming on any network outgoing calls would be dialed in international format i.e. +2206XXX , 002206XXXX.</li>
                <li>Tariff might vary up to 5% to 10% & will be charged up till 60 days of usage.</li>
                <li>Outgoing Calls to Satellite - Premium rate - Toll-free numbers and Emergency numbers are charged at higher rates as charged by foreign operators.</li>
                <li>Standard Roaming Tariffs are charged in GMD at the time of billing. The EUR to GMD exchange rate applied of repestive month</li>
            </ul>
        </div>
    </div>


</div>