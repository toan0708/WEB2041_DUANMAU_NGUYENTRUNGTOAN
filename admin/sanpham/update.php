<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="content">
                    <!-- Your content goes here -->
                    <div class="container"></div>
                    <h2>Quản lý sản phẩm</h2>
                   
                <!-- Edit Modal -->
               
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
                                <form action="index.php?act=updatasp" method="post" enctype="multipart/from-data">
                                    <div class="mb-3">
                                        <label for="productName" class="form-label">Tên sản phẩm:</label>
                                        <input type="text" class="form-control" id="tensp"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productName" class="form-label">Hình ảnh:</label>
                                        <input type="file" class="form-control" id="hinhsp"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productPrice" class="form-label">Giá:</label>
                                        <input type="text" class="form-control" id="giasp"
                                            placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productName">Mo ta:</label>
                                        <textarea class="form-label" name="motasp" id="" cols="30" rows="10"></textarea>
                                        <!-- <input type="text" class="form-control" id="motasp"
                                            placeholder="Nhập tên sản phẩm"> -->
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Them sp">
                                    <!-- <button type="submit" class="btn btn-primary">Thêm sản phẩm</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        </main>