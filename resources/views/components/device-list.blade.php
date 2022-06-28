<div class="row d-flex">
    @foreach($devices as $device)
        <x-device-item :device="$device"/>
    @endforeach
</div>
