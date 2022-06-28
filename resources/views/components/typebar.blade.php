<div class="list-group">

  @foreach($types as $type)
  @if(!empty($_GET['type']) && $_GET['type'] == $type->name)
  <a href="?<?= http_build_query(array_merge($_GET, ['type' => $type->name])); ?>"><li type='button' class="list-group-item active" aria-current="true">{{ $type->name }}</li></a>
  @else
  <a href="?<?= http_build_query(array_merge($_GET, ['type' => $type->name])); ?>"><li type='button' class="list-group-item">{{ $type->name }}</li></a>
  @endif
  @endforeach
  <a href="?<?= http_build_query(array_merge($_GET, ['type' => ''])); ?>"><li type='button' class="list-group-item">Все</li></a>

</div>
