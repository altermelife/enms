<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
    @foreach($actions as $row)
        <div class="row" style="padding-bottom: 5px">
            @foreach($row as $action)
                @include('device.action-icon', $action)
            @endforeach
        </div>
    @endforeach
</div>
