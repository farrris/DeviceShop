<div class="row d-flex">
    @foreach($basketDevices as $device)
        <x-basket-device-item :device="$device"/>
    @endforeach
</div>
