<?php

 require_once '../lib/vendor/WSDLInterpreter/WSDLInterpreter.php';
 $myWSDLlocation = 'http://ohnein.creativevolume.at/api/soap/mantisconnect.php?wsdl';
 
 $wsdlInterpreter = new WSDLInterpreter($myWSDLlocation);
 
 $wsdlInterpreter->savePHP(realpath(dirname(__FILE__) .  '../lib/'));
 