<div class="list-group list-group-horizontal">

  @foreach($brands as $brand)
  @if(!empty($_GET['brand']) && $_GET['brand'] == $brand->name)
  <a href="?<?= http_build_query(array_merge($_GET, ['brand' => $brand->name])); ?>"><li type='button' class="list-group-item active" aria-current="true">{{ $brand->name }}</li></a>
  @else
  <a href="?<?= http_build_query(array_merge($_GET, ['brand' => $brand->name])); ?>"><li type='button' class="list-group-item">{{ $brand->name }}</li></a>
  @endif
  @endforeach
  <a href="?<?= http_build_query(array_merge($_GET, ['brand' => ''])); ?>"><li type='button' class="list-group-item">Все</li></a>

</div>
