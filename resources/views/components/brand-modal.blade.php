<div class="modal fade" id="brandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить бренд</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="admin/brand/create" method="POST">
        @csrf
        <div class="modal-body">
            <input type="text" placeholder="Введите название бренда" style="width:100%;" name="name">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-success">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


