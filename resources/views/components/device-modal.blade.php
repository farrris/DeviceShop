<div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить устройство</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/admin/device/create" method="POST" enctype="multipart/form-data">
            @csrf
            <select name="type">
            <option disabled>Выберите тип</option>
            @foreach($types as $type)
                <option value="{{$type->name}}">{{$type->name}}</option>
            @endforeach
            </select>

            <br>

            <select name="brand" class="mt-3">
            <option disabled>Выберите бренд</option>
            @foreach($brands as $brand)
                <option value="{{$brand->name}}">{{$brand->name}}</option>
            @endforeach
            </select>

            <input type="text" class="mt-3" placeholder="Введите название устройства" style="width:100%;" name="name">
            <input type="number" class="mt-3" placeholder="Введите стоимость устройства" style="width:100%;" name="price">
            <input type="file" class="mt-3" style="width:100%;" name="img">

            <hr class="mt-3">

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success">Save changes</button>
      </div>

    </form>
    </div>
  </div>
</div>
