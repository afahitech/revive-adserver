<?php
/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                                |
| =======${RELEASE_MAJOR_MINOR_DOUBLE_UNDERLINE}                                                                |
|                                                                           |
| Copyright (c) 2003-2008 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

/*
CREATE TABLE IF NOT EXISTS ox_data_bucket_request (
    interval_start DATETIME,
    creative_id    INT,
    zone_id        INT,
    count          INT,
    PRIMARY KEY (interval_start, creative_id, zone_id)
) ENGINE = MEMORY;
*/

// Dependencies
###START_STRIP_DELIVERY
$GLOBALS['_MAX']['pluginsDependencies']['deliveryLog:ox_requesty:ox_requesty'] = array(
    'deliveryDataPrepare:ox_core:ox_core',
);
###END_STRIP_DELIVERY

function OA_Plugins_deliveryBuckets_ox_request($data)
{
    $aQuery = array(
        'interval_start' => $data['interval_start'],
        'creative_id'    => $data['creative_id'],
        'zone_id'        => $data['zone_id'],
    );
    return MAX_bucket_updateTable('data_bucket_request', $aQuery);
}

?>