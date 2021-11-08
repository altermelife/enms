<x-panel body-class="{{ $alert_class }}">
    <img src="{{ url($device->logo()) }}" title="{{ $device->logo() }}" class="device-icon-header pull-left" style="max-height: 100px">
    <div class="pull-left" style="margin-top: 5px;">
        @if($parent_id)
            <a href="{{ route('device', $parent_id) }}" title="@lang('VM Host')"><i class="fa fa-server fa-fw fa-lg"></i></a>
        @endif
        @if($device->isUnderMaintenance())
            <span title="@lang('Scheduled Maintenance')" class="fa fa-wrench fa-fw fa-lg"></span>
        @endif
        <span style="font-size: 20px;"><x-device-link :device="$device" /></span><br/>
        <a href="{{ url('/devices/location=' . urlencode($device->location)) }}">{{ $device->location }}</a> &nbsp;&nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/home" target="rFrame">Overview</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/dc_info" target="rFrame">DC Info</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/lvd_info" target="rFrame">LVD Info</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/running_info" target="rFrame">AC &amp; Temperature Info</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/battery_info" target="rFrame">Battery Info</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/bms_info" target="rFrame">BMS Info</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/dcdb03_info" target="rFrame">DC Monitor</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/di_info" target="rFrame">DI Status</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/do_info" target="rFrame">DO Status</a> &nbsp;
        &middot; <a href="http://{{ $device->hostname }}/cgi-bin/gen_info" target="rFrame">Generator Info</a> &nbsp;
        <br/>
    </div>
    <div class="pull-right">
        <div class="box-left">
            <iframe src="http://{{ $device->hostname }}/cgi-bin/currentfault_info" frameborder="0" scrolling="no" width="100%" height="500" align="left" name="lFrame"></iframe>
         </div>
         <div class="box-right">
            <iframe src="http://{{ $device->hostname }}/cgi-bin/home" frameborder="0" scrolling="no" width="100%" height="500" align="right" name=rFrame></iframe>
         </div>
     </div>
</x-panel>
