<?php
/**
 * enetek.inc.php
 *
 * eNMS OS sensor power module for Enetek Power
 *
 * @link       http://enms.ionlotus.com *
 * @copyright  2021 iONLOTUS IT Solutions
 * @author     Ben Diaz <ben@ionlotus.com>
 */
foreach ($pre_cache['cooling_unit_analog'] as $index => $data) {
    $cur_oid = '.1.3.6.1.4.1.53318.' . $index;
    $descr = $data['coolingUnitStatusAnalogDescription'];
    $scale = $data['coolingUnitStatusAnalogScale'];
    $value = $data['coolingUnitStatusAnalogValue'];
    if (preg_match('/Cool/', $descr) && $data['coolingUnitStatusAnalogUnits'] == 'kW' && $value >= 0) {
        discover_sensor($valid['sensor'], 'power', $device, $cur_oid, $cur_oid, 'apc', $descr, $scale, 1, null, null, null, null, $value);
    }
}
