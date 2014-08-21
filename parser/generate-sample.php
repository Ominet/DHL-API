<?php echo '<?php'; ?>

/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        <?php echo $_SERVER['argv'][3]; ?>.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

use DHL\Entity\<?php echo $_SERVER['argv'][2]; ?>\<?php echo $_SERVER['argv'][3]; ?>;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../../init.php');

// Test a <?php echo $_SERVER['argv'][3]; ?>Request using DHL XML API
$sample = new <?php echo $_SERVER['argv'][3]; ?>();

// Set values of the request
$sample->MessageTime = '2013-08-04T11:28:56.000-08:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->SiteID = $config['id'];
$sample->Password = $config['pass'];
<?php

$file = $_SERVER['argv'][1];

$xml = simplexml_load_file($file);
process($xml);

function process($xml, $prefix = '$sample')
{
    foreach ($xml->children() as $child) 
    {
        if ($child->getName() == 'Request') 
                continue;

        if (!$child->children()) 
                echo $prefix . '->' . $child->getName() . " = '" . (string) $child . "';" . PHP_EOL;
        else
        {
            $newPrefix = $prefix . '->' . $child->getName();
            process($child, $newPrefix);
        }
    }
}
?>

// Call DHL XML API
echo $sample->toXML();
$client = new WebserviceClient();
echo $client->call($sample);
