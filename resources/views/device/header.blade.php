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
        <a href="{{ url('/devices/location=' . urlencode($device->location)) }}">{{ $device->location }}</a>
    </div>
    <div class="pull-right">
        <div class="box-left">
            <iframe src="http://{{ $device->hostname }}/cgi-bin/currentfault_info" frameborder="0" scrolling="no" width="100%" height="500" align="left"></iframe>
         </div>
         <div class="box-right">
            System Status:<br/>
            <iframe src="http://{{ $device->hostname }}/cgi-bin/home" frameborder="0" scrolling="no" width="100%" height="500" align="right"></iframe>
         </div>
     </div>
</x-panel>
