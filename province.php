<?php
$province = array('-- Seleziona Provincia --' => 0,
                  // lETTERA A
                  'Agrigento' => 'AG',
                  'Alessandria' => 'AL',
                  'Ancona' => 'AN',
                  'Aosta' => 'AO',
                  'Arezzo' => 'AR',
                  'Ascoli Piceno' => 'AP',
                  'Asti' => 'AT',
                  'Avellino' => 'AV',
                  // lETTERA B
                  'Bari' => 'BA',
                  'Barletta-Andria-Trani' => 'BT',
                  'Belluno' => 'BL',
                  'Benevento' => 'BN',
                  'Bergamo' => 'BG',
                  'Biella' => 'BI',
                  'Bologna' => 'BO',
                  'Bolzano' => 'BZ',
                  'Brescia' => 'BS',
                  'Brindisi' => 'BR',
                  // lETTERA C
                  'Cagliari' => 'CA',
                  'Caltanissetta' => 'CL',
                  'Campobasso' => 'CB',
                  'Carbonia-iglesias' => 'CI',
                  'Caserta' => 'CE',
                  'Catania' => 'CT',
                  'Catanzaro' => 'CZ',
                  'Chieti' => 'CH',
                  'Como' => 'CO',
                  'Cosenza' => 'CS',
                  'Cremona' => 'CR',
                  'Crotone' => 'KR',
                  'Cuneo' => 'CN',
                  // lETTERA E
                  'Enna' => 'EN',
                  // lETTERA F
                  'Fermo' => 'FM',
                  'Ferrara' => 'FE',
                  'Firenze' => 'FI',
                  'Foggia' => 'FG',
                  'Forl&igrave;-Cesena' => 'FC',
                  'Frosinone' => 'FR',
                  // lETTERA G
                  'Genova' => 'GE',
                  'Gorizia' => 'GO',
                  'Grosseto' => 'GR',
                  // lETTERA i
                  'Imperia' => 'IM',
                  'Isernia' => 'IS',
                  // lETTERA L
                  'La spezia' => 'SP',
                  'L\'aquila' => 'AQ',
                  'Latina' => 'LT',
                  'Lecce' => 'LE',
                  'Lecco' => 'LC',
                  'Livorno' => 'LI',
                  'Lodi' => 'LO',
                  'Lucca' => 'LU',
                  // lETTERA M
                  'Macerata' => 'MC',
                  'Mantova' => 'MN',
                  'Massa-Carrara' => 'MS',
                  'Matera' => 'MT',
                  'Medio Campidano' => 'VS',
                  'Messina' => 'ME',
                  'Milano' => 'MI',
                  'Modena' => 'MO',
                  'Monza e della Brianza' => 'MB',
                  // lETTERA N
                  'Napoli' => 'NA',
                  'Novara' => 'NO',
                  'Nuoro' => 'NU',
                  // lETTERA O
                  'Ogliastra' => 'OG',
                  'Olbia-Tempio' => 'OT',
                  'Oristano' => 'OR',
                  // lETTERA P
                  'Padova' => 'PD',
                  'Palermo' => 'PA',
                  'Parma' => 'PR',
                  'Pavia' => 'PV',
                  'Perugia' => 'PG',
                  'Pesaro e Urbino' => 'PU',
                  'Pescara' => 'PE',
                  'Piacenza' => 'PC',
                  'Pisa' => 'PI',
                  'Pistoia' => 'PT',
                  'Pordenone' => 'PN',
                  'Potenza' => 'PZ',
                  'Prato' => 'PO',
                  // lETTERA R
                  'Ragusa' => 'RG',
                  'Ravenna' => 'RA',
                  'Reggio di Calabria' => 'RC',
                  'Reggio nell\'Emilia' => 'RE',
                  'Rieti' => 'RI',
                  'Rimini' => 'RN',
                  'Roma' => 'RM',
                  'Rovigo' => 'RO',
                  // lETTERA S
                  'Salerno' => 'SA',
                  'Sassari' => 'SS',
                  'Savona' => 'SV',
                  'Siena' => 'SI',
                  'Siracusa' => 'SR',
                  'Sondrio' => 'SO',
                  // lETTERA T
                  'Taranto' => 'TA',
                  'Teramo' => 'TE',
                  'Terni' => 'TR',
                  'Torino' => 'TO',
                  'Trapani' => 'TP',
                  'Trento' => 'TN',
                  'Treviso' => 'TV',
                  'Trieste' => 'TS',
                  // lETTERA U
                  'Udine' => 'UD',
                  // lETTERA V
                  'Varese' => 'VA',
                  'Venezia' => 'VE',
                  'Verbano-Cusio-Ossola' => 'VB',
                  'Vercelli' => 'VC',
                  'Verona' => 'VR',
                  'Vibo valentia' => 'VV',
                  'Vicenza' => 'VI',
                  'Viterbo' => 'VT');

echo '<select id="province" name="province">';

foreach ($province as $nome => $sigla) {
  echo  '<option value="'.$sigla.'">'.$nome.'</option>';
}
?>
