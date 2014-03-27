<?php

$aircraftCategories = array(
	'BE40' => 1,
	'H25B' => 1,
	'BA11' => 1,
	'CNJ' => 1,

	'DH8A' => 2,
	'F50' => 2,
	'F60' => 2,
	'AT43' => 2,
	'AT72' => 2,
	'SB20' => 2,
	'ATP' => 2,

	'F70' => 3,
	'F100' => 3,
	'B732' => 3,
	'B733' => 3,
	'B734' => 3,
	'B735' => 3,
	'E145' => 3,
	'B461' => 3,
	'T134' => 3,

	'A319' => 4,
	'A320' => 4,
	'A321' => 4,
	'B736' => 4,
	'B737' => 4,
	'B738' => 4,
	'B722' => 4,
	'DC9' => 4,
	'MD80' => 4,
	'YK42' => 4,

	'B752' => 5,
	'MD90' => 5,
	'A310' => 5,
	'T154' => 5,
	'T204' => 5,

	'B753' => 6,
	'B762' => 6,
	'B763' => 6,
	'A300' => 6,
	'l101' => 6,
	'DC10' => 6,

	'MD11' => 7,
	'A330' => 7,
	'A340' => 7,
	'B741' => 7,
	'B742' => 7,
	'B743' => 7,
	'IL96' => 7,

	'B772' => 8,
	'B773' => 8,
	'B744' => 8,
	'A380' => 8
);

$airlinesDefaultGates = array(
	'ADR' => array('B'),
	'AEA' => array('C'),
	'AFL' => array('G'),
	'AFR' => array('C'),
	'AMC' => array('B'),
	'ASA' => array('E'),
	'AUA' => array('B'),
	'AUI' => array('D'),
	'AZA' => array('B', 'C'),
	'BAW' => array('D'),
	'BEE' => array('D'),
	'BTI' => array('B'),
	'CAI' => array('G'),
	'CAL' => array('F'),
	'CPE' => array('G'),
	'CSA' => array('D'),
	'CSN' => array('D', 'E', 'F'),
	'CTN' => array('D'),
	'CYP' => array('D', 'G'),
	'DAL' => array('B', 'C', 'E'),
	'DLH' => array('B'),
	'EAL' => array('G'),
	'EIN' => array('D'),
	'ELL' => array('B'),
	'ELO' => array('B'),
	'ELY' => array('G'),
	'ETD' => array('D'),
	'EXS' => array('H'),
	'EZY' => array('H'),
	'FBF' => array('D'),
	'FIN' => array('B'),
	'GAV' => array('H'),
	'IBS' => array('D'),
	'ICE' => array('C'),
	'IRA' => array('E'),
	'JAT' => array('D'),
	'KAL' => array('R'),
	'KLM' => array('B', 'C', 'D', 'E', 'F', 'G'),
	'KZR' => array('D'),
	'MAC' => array('D', 'G'),
	'MAS' => array('G'),
	'MSR' => array('G'),
	'NAX' => array('D', 'H'),
	'PGT' => array('G'),
	'RAM' => array('G'),
	'ROT' => array('D'),
	'SAS' => array('C'),
	'SIA' => array('G'),
	'SWR' => array('B'),
	'SXS' => array('D'),
	'TAP' => array('B'),
	'IBE' => array('B'),
	'TFL' => array('B', 'D', 'E', 'G'),
	'THY' => array('G'),
	'TRA' => array('C', 'D', 'E'),
	'UAE' => array('G'), # G09 due to A380!
	'UAL' => array('E', 'G'),
	'VLG' => array('B')
);

$schengen = array(
	'EB', # Belgium
	'EK', # Denmark
	'ED', # Germany (Civil)
	'ET', # Germany (Military)
	'EE', # Estonia
	'EP', # Poland
	'EF', # Finland
	'LF', # France
	'LG', # Greece
	'LH', # Hungary
	'LJ', # Slovenia
	'BI', # Iceland
	'LI', # Italy
	'EL', # Luxembourg
	'EV', # Latvia
	'LZ', # Slovakia
	'EH', # Netherlands
	'EN', # Norway
	'LO', # Austria
	'EY', # Lithuania
	'LK', # Czech Republic
	'LP', # Portugal
	'LE', # Spain
	'ES', # Sweden
	'LM', # Malta
	'LS'  # Switzerland
);

$schengenGatesToApron = array(
	'Z02' => 'D02',
	'D60' => 'D04',
	'D62' => 'D08',
	'Z10' => 'D10',
	'D66' => 'D12',
	'D68' => 'D14',
	'D74' => 'D46',
	'D78' => 'D52',
	'D84' => 'D56',

	'D61' => 'D03',
	'D63' => 'D05',
	'Z07' => 'D07',
	'D73' => 'D41',
	'D77' => 'D43',
	'D79' => 'D47',
	'D81' => 'D49',
	'D83' => 'D51',
	'D85' => 'D53',
	'D87' => 'D55',
	'D86' => 'D57'
);

$gates = array(
	'A31' => 8,
	'A32' => 8,
	'A33' => 3,
	'A34' => 8,
	'A35' => 3,
	'A36' => 3, # not sure
	'A37' => 3, # not sure

	'A41' => 3,
	'A43' => 3,
	'A45' => 3,
	'A46' => 3,
	'A48' => 3,
	'A49' => 3,

	'B51' => 2,
	'B52' => 2,
	'B53' => 2,
	'B54' => 2,
	'B55' => 2,
	'B56' => 2, # but only small ones

	'B61' => 2,
	'B62' => 2,
	'B63' => 2,
	'B64' => 2,
	'B65' => 2,
	'B66' => 2,

	'B71' => 2,
	'B72' => 2,
	'B73' => 2,
	'B74' => 2,
	'B75' => 2,
	'B76' => 2,

	'B81' => 2,
	'B82' => 2,
	'B83' => 2,
	'B84' => 2,
	'B85' => 2,

	# Not completely true, but 2++ rounds to 3 :p
	'B91' => 3,
	'B92' => 3,
	'B93' => 3,
	'B94' => 3,
	'B95' => 3,

	'B13' => 4,
	'B15' => 4,
	'B17' => 4,
	'B23' => 4,
	'B27' => 4,
	'B31' => 4,
	'B35' => 4,

	'B16' => 3,
	'B20' => 3,
	'B24' => 3,
	'B28' => 3,
	'B32' => 3,
	'B36' => 3,

	'C04' => 4,
	'C06' => 4,
	'C08' => 4,
	'C10' => 4,
	'C12' => 4,
	'C14' => 4,
	'C16' => 4,
	'C18' => 4,

	'C05' => 4, # plus B752
	'C07' => 4, # plus B752
	'C09' => 4, # plus B752
	'C11' => 4,
	'C13' => 4,
	'C15' => 4,

	'D02' => 6, # plus MD11
	'D04' => 6,
	'D08' => 6,
	'D10' => 5,
	'D12' => 5,
	'D14' => 3,
	'D16' => 4, # plus MD90
	'D18' => 4, # plus MD90
	'D22' => 4, # plus MD90
	'D24' => 4, # plus MD90
	'D26' => 4, # plus MD90
	'D28' => 4, # plus MD90

	'D23' => 4,
	'D27' => 4,
	'D31' => 4,
	'D46' => 4,
	'D52' => 4,
	'D56' => 4,

	'D03' => 7,
	'D05' => 4,
	'D07' => 7,
	'D41' => 4,
	'D43' => 7, # plus B774/B772
	'D47' => 7, # plus B772
	'D49' => 4,
	'D51' => 6, # plus MD11
	'D53' => 6, # plus MD11
	'D55' => 4,
	'D57' => 6




);

?>