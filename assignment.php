<?php 

$fee=15000;

$commission=$fee<7000?"Invalid Data":($fee<10000&&$fee>7000?0.15*$fee:($fee<20000&&$fee>10000?0.20*$fee:0.25*$fee));
 echo "The Commission we give $commission";