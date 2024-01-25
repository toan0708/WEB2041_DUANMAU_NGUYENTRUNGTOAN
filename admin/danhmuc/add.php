<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <!-- Your content goes here -->
        <div class="container">
            <h2>Quản lý loại hàng</h2>
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
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
                    <?
                    foreach ($dsdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoadm&id=" . $id;
                        echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>
                           <a href = "' . $suadm . '" <button type="button" class="btn btn-warning btn-sm" >Sửa</button> </a>
                            <a href ="' . $xoadm . '"<button type="button" class="btn btn-danger btn-sm">Xóa</button> </a>
                        </td>
                    </tr>';
                    }
                    ?>

                    <!-- Thêm dòng dữ liệu mẫu cần thiết -->
                </tbody>
            </table>
        </div>
        <!-- Modal sửa -->
        

       
    </div>
    <!-- Modal Thêm loại hàng -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Thêm loại hàng mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form nhập thông tin loại hàng mới -->
                    <form method="post" action="index.php?act=adddm">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Mã loại:</label>
                            <input type="text" name="maloai" class="form-control" id="categoryName" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Tên loại hàng:</label>
                            <input type="text" name="tenloai" class="form-control" id="categoryName" placeholder="Nhập tên loại hàng">
                        </div>
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm loại hàng" />
                    </form>

                </div>
            </div>
            <?
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </div>
    </div>
</main>