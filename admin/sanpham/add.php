<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="content">
                    <!-- Your content goes here -->
                    <div class="container"></div>
                    <h2>Quản lý sản phẩm</h2>
                    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                        data-bs-target="#addProductModal">
                        Thêm sản phẩm
                    </button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Mô tả</th>
                                <th>Số lược xem</th>

                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cam</td>
                                <td><img src="../img/best-product-1.jpg" style="width: 80px;" alt="" srcset=""></td>
                                <td>200000đ / kg</td>
                                <td>cc</td>
                                <td>cc</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal">Sửa</button>
                                    <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Cam</td>
                                <td><img src="../img/best-product-1.jpg" style="width: 80px;" alt="" srcset=""></td>
                                <td>200000đ / kg</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal">Sửa</button>
                                    <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cam</td>
                                <td><img src="../img/best-product-1.jpg" style="width: 80px;" alt="" srcset=""></td>
                                <td>200000đ / kg</td>
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
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Chỉnh sửa sản phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="editProductName" class="form-label">Tên sản phẩm:</label>
                                        <input type="text" class="form-control" id="editProductName"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="editProductName" class="form-label">Hình ảnh:</label>
                                        <input type="file" class="form-control" id="editProductImg"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="editProductPrice" class="form-label">Giá:</label>
                                        <input type="text" class="form-control" id="editProductPrice"
                                            placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Thêm Sản phẩm -->
                <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProductModalLabel">Thêm Sản phẩm mới</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form nhập thông tin sản phẩm mới -->
                                <form>
                                    <div class="mb-3">
                                        <label for="productName" class="form-label">Tên sản phẩm:</label>
                                        <input type="text" class="form-control" id="productName"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productName" class="form-label">Hình ảnh:</label>
                                        <input type="file" class="form-control" id="productImg"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productPrice" class="form-label">Giá:</label>
                                        <input type="text" class="form-control" id="productPrice"
                                            placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        </main>