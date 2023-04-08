<div class="container modal-content container-modal-small">
    <div class="modal-body p-5">
        <div class="custom-icon pb-3 custom-header-modal">
            <h2 class="main-title text-center text-uppercase mt-2 m-auto">Chỉnh sửa màu sắc</h2>
            <button type="button" class="close custom-btn-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-edit" action="?route=edit-color">
            <div validation-summary="ModelOnly" class="text-danger"></div>
            <input type="hidden" for="ColorID" />
            <div class="form-group">
                <label for="Color" class="control-label"></label>
                <input for="Color" class="form-control form-modal-input" />
                <span validation-for="Color" class="text-danger"></span>
            </div>
            <div class="text-center">
                <input type="submit" value="Lưu" class="mt-2 col-lg-6 btn btn-primary" />
            </div>
        </form>
    </div>
</div>