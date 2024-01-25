<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <!-- Your content goes here -->
        <div class="container">
            <h2>Sửa danh mục</h2>
        </div>
        <!-- Modal sửa -->
        <div class="" id="" tabindex="" aria-labelledby="" aria-hidden="">
            <div >
                <div >
                    
                    <div class="">
                       <?
                       if(is_array($dm)){
                        extract($dm);
                       }
                       ?>
                        <form method="post" action="index.php?act=updatedm">
                            <div class="mb-3">
                                <label for="editCategoryName" class="form-label">Tên loại hàng:</label>
                                <input type="hidden" name="id" value="<?if(isset($id)&& ($id >0))echo $id; ?>">
                                <input name="tenloaisua" type="text" class="form-control" id="editCategoryName" placeholder="Nhập tên loại hàng" value="<?if(isset($name)&& ($name!=""))echo $name; ?>">
                            </div>
                            <input type="submit" name="capnhat" class="btn btn-primary" value="Lưu thây đổi" />
                        </form>
                    </div>
                </div>
            </div>
        </div>


       
    </div>
    <!-- Modal Thêm loại hàng -->
</main>