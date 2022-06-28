<div class="col-3 mt-4">
    <a href="/device/{{$device->id}}">
    <div class="card" style="width: 150px; height: 250px; cursor:pointer">
        <img src="images/devices/{{$device->img}}" width="150px" height="150px">
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <div class="text-black-50">{{$device->brand()->first()->name}}</div>
            <div class="d-flex align-items-center">
                <div>{{$device->rating}}</div>
                <img src="{{asset('images/star.png')}}"  width="18px" height="18px">
            </div>
        </div>
        <div>{{$device->name}}</div>
    </div>
    </a>
</div>
