<div class="col-3 mt-4">
    <a href="/device/{{$device[0]->id}}">
    <div class="card" style:{width: 150, cursor:pointer}>
        <img src="images/devices/{{$device[0]->img}}" width="150px" height="150px">
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <div class="text-black-50">{{$device[0]->brand()->first()->name}}</div>
            <div class="d-flex align-items-center">
                <div>{{$device[0]->rating}}</div>
                <img src="{{asset('images/star.png')}}"  width="18px" height="18px">
            </div>
        </div>
        <div>{{$device[0]->name}}</div>
    </div>
    </a>
</div>
