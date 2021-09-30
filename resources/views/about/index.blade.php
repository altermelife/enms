@extends('layouts.librenmsv1')

@section('title', __('About'))

@section('content')
<div class="modal fade" id="git_log" tabindex="-1" role="dialog" aria-labelledby="git_log_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">@lang('Local git log')</h4>
            </div>
            <div class="modal-body">
                <pre>{!! $git_log !!}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@Lang('Close')</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">

            <h3 style="font-weight:400; font-size:20px;">@lang('Remote / Network Management System')</h3>
            <table class='table table-condensed table-hover'>
                <tr>
                    <td><b>@lang('Version')</b></td>
                    <td>{{ $version_local }}<span id='version_date' style="display: none;">{{ $git_date }}</span></td>
                </tr>
                <tr>
                    <td><b>@lang('Database Schema')</b></td>
                    <td>{{ $db_schema }}</td>
                </tr>
                <tr>
                    <td><b>@lang('Web Server')</b></td>
                    <td>{{ $version_webserver }}</td>
				</tr>
                <tr>
                    <td><b>@lang('PHP')</b></td>
                    <td>{{ $version_php }}</td>
                </tr>
                <tr>
                    <td><b>@lang('Python')</b></td>
                    <td>{{ $version_python }}</td>
                </tr>
                <tr>
                    <td><b>@lang('MySQL')</b></td>
                    <td>{{ $version_mysql }}</td>
                </tr>
                                <tr>
                    <td><b>@lang('Laravel')</b></td>
                    <td>{{ $version_laravel }}</td>
                </tr>
                <tr>
                    <td><b>@lang('RRDtool')</b></td>
                    <td>{{ $version_rrdtool }}</td>
                </tr>
            </table>

          <h3 style="font-weight:400; font-size:20px;">@lang('Deployment on Google Cloud')</h3>
          &middot; Compute Engine specifications depend on number of sites to manage<br>
          &middot; Full turn-key solution includes:<br>
          &nbsp; &nbsp; &nbsp; &middot; Cloud VPN Service<br>
          &nbsp; &nbsp; &nbsp; &middot; Sites and Users to connect remotely via VPN<br>
          &nbsp; &nbsp; &nbsp; &middot; Industrial 4G Routers

          <h3 style="font-weight:400; font-size:20px;">@lang('Deployment on Private Network')</h3>
          &middot; Utilize Physical or Virtual Server on LAN<br>
          &middot; Server, Sites and Users must be connected to the same LAN<br>
          &middot; Network Design can be discussed and assisted, free-of-charge
      </div>
      <div class="col-md-6">
        by: <a href="https://www.enetek-power.com" target="_blank"><img src="images/enetek-logo.png" style="height:75px;" border="0"></a>
		
		
        <h3 style="font-weight:400; font-size:20px;">@lang('Statistics')</h3>

        <table class='table table-condensed'>

            <tr>
                <td><i class='fa fa-fw fa-server fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Devices')</b></td>
                <td class='text-right'>{{ $stat_devices }}</td>
                <td><i class='fa fa-fw fa-link fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Ports')</b></td>
                <td class='text-right'>{{ $stat_ports }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-battery-empty fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('IPv4 Addresses')</b></td>
                <td class='text-right'>{{ $stat_ipv4_addy }}</td>
                <td><i class='fa fa-fw fa-battery-empty fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('IPv4 Networks')</b></td>
                <td class='text-right'>{{ $stat_ipv4_nets }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-battery-full fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('IPv6 Addresses')</b></td>
                <td class='text-right'>{{ $stat_ipv6_addy }}</td>
                <td><i class='fa fa-fw fa-battery-full fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('IPv6 Networks')</b></td>
                <td class='text-right'>{{ $stat_ipv6_nets }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-cogs fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Services')</b></td>
                <td class='text-right'>{{ $stat_services }}</td>
                <td><i class='fa fa-fw fa-cubes fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Applications')</b></td>
                                <td class='text-right'>{{ $stat_apps }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-microchip fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Processors')</b></td>
                <td class='text-right'>{{ $stat_processors }}</td>
                <td><i class='fa fa-fw fa-braille fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Memory')</b></td>
                <td class='text-right'>{{ $stat_memory }}</td>
				</tr>
            <tr>
                <td><i class='fa fa-fw fa-database fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Storage')</b></td>
                <td class='text-right'>{{ $stat_storage }}</td>
                <td><i class='fa fa-fw fa-hdd-o fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Disk I/O')</b></td>
                <td class='text-right'>{{ $stat_diskio }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-cube fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('HR-MIB')</b></td>
                <td class='text-right'>{{ $stat_hrdev }}</td>
                <td><i class='fa fa-fw fa-cube fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Entity-MIB')</b></td>                <td class='text-right'>{{ $stat_entphys }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-clone fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Syslog Entries')</b></td>
                <td class='text-right'>{{ $stat_syslog }}</td>
                <td><i class='fa fa-fw fa-bookmark fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Eventlog Entries')</b></td>
                <td class='text-right'>{{ $stat_events }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-dashboard fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('sensors.title')</b></td>
                <td class='text-right'>{{ $stat_sensors }}</td>
                <td><i class='fa fa-fw fa-wifi fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Wireless Sensors')</b></td>
                <td class='text-right'>{{ $stat_wireless }}</td>
            </tr>
            <tr>
                <td><i class='fa fa-fw fa-print fa-lg icon-theme' aria-hidden='true'></i> <b>@lang('Toner')</b></td>
                <td class='text-right'>{{ $stat_toner }}</td>
                <td></td>
                <td></td>
            </tr>
        </table>
		
        <h3 style="font-weight:400; font-size:20px;">@lang('Development &amp; Support')</h3>
        Enetek Power Group Pte Ltd, Singapore<br>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $("[name='statistics']").bootstrapSwitch('offColor','danger','size','mini');
    $('input[name="statistics"]').on('switchChange.bootstrapSwitch',  function(event, state) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'ajax_form.php',
            data: { type: "callback-statistics", state: state},
            dataType: "json",
            success: function(data){},
            error:function(){
                return $("#switch-state").bootstrapSwitch("toggle");
            }
        });
    });
    $('#clear-stats').on("click", function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'ajax_form.php',
            data: { type: "callback-clear"},
            dataType: "json",
            success: function(data){
                location.reload(true);
            },
            error:function(){}
        });
    });

    var ver_date = $('#version_date');
	if (ver_date.text()) {
        ver_date.text(' - '.concat(moment.unix(ver_date.text()))).show();
    }
</script>
@endsection
