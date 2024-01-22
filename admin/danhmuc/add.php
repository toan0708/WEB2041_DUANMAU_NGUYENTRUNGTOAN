<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="content">
                    <!-- Your content goes here -->
                    <div class="container">
                        <h2>Quản lý loại hàng</h2>
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#addCategoryModal">
                            Thêm loại hàng
                        </button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên loại hàng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Trái cây</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Sửa</button>
                                        <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rau củ</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Sửa</button>
                                        <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Thịt</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Sửa</button>
                                        <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                                    </td>
                                </tr>
                                <!-- Thêm dòng dữ liệu mẫu cần thiết -->
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal sửa -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Chỉnh sửa loại hàng</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="editCategoryName" class="form-label">Tên loại hàng:</label>
                                            <input type="text" class="form-control" id="editCategoryName"
                                                placeholder="Nhập tên loại hàng">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Thêm loại hàng -->
                <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCategoryModalLabel">Thêm loại hàng mới</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form nhập thông tin loại hàng mới -->
                                <form>
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Tên loại hàng:</label>
                                        <input type="text" class="form-control" id="categoryName"
                                            placeholder="Nhập tên loại hàng">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm loại hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main> 