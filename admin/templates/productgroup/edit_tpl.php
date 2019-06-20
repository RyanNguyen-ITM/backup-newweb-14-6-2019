<div class="content container">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <h4 class="page-title"><small><b>Cập nhật</b></small> Danh mục sản phẩm</h4>
                </div>
                <div class="col-lg-6">
                    <div class="input-group-btn">
                        <button style="float: right; background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                        <a style="color: #000" href="index.php?com=danhmucsanpham&act=back">
                                                <i class="fa fa-undo"></i> Trở về
                                        </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                          <a style="color: #fff" href="index.php?com=danhmucsanpham&act=saveandback">
                                                <i class="fa fa-plus"></i> Lưu và quay lại
                                          </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                <a style="color: #fff" href="index.php?com=danhmucsanpham&act=save">
                                  <i class="fa fa-save"></i> Lưu
                                </a>                
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="widget">
                        <header>
                            <h2><i class="fa fa-file-alt"></i> Thông tin <small>Danh mục sản phẩm</small></h2>
                        </header>
                        <hr style="border: 1px solid gray;" />
                        <div class="body">
                            <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate" data-parsley-priority-enabled="false">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Thông tin danh mục</h3>
                                            <p>Nhập tên danh mục<span class="required">*</span></p>
                                        </label>
                                        <div class="col-sm-9">
                                            <label>Tên danh mục</label>
                                            <input type="text" id="name-product" name="name-product" class="form-control input-transparent" required="required">
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Cấp trên</h3>
                                            <p>Phân loại danh mục theo cấu trúc thư mực</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <section>
                                                <label>Cấp trên</label>
                                                <label class="select" style="width: 100%; height: 30px;">
                                                    <select class="ng-pristine ng-valid ng-touched" style="background-color: rgba(51,51,51,0.4); width: 100%; height: 100%; border: none; border-radius: 3px;">
                                                        <option value="number:0" label="Toàn bộ danh mục" selected="selected">Toàn bộ thư mục</option>
                                                        <option value="number:157051" label="TOYOTA">TOYOTA</option>
                                                        <option value="number:157058" label="├──Camry">├──Camry</option>
                                                        <option value="number:157060" label="├──Fortuner">├──Fortuner</option>
                                                        <option value="number:157059" label="├──Vios">├──Vios</option>
                                                        <option value="number:157052" label="KIA">KIA</option>
                                                        <option value="number:157054" label="HONDA">HONDA</option>
                                                        <option value="number:157053" label="FORD">FORD</option>
                                                        <option value="number:157055" label="AUDI">AUDI</option>
                                                        <option value="number:157061" label="├──A">├──A</option>
                                                        <option value="number:157062" label="├──Q">├──Q</option>
                                                        <option value="number:157056" label="BMW">BMW</option>
                                                        <option value="number:157057" label="Lamborghini">Lamborghini</option>
                                                    </select>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Hình ảnh</h3>
                                            <p>Upload và chỉnh sửa hình ảnh đại diện của danh mục sản phẩm. <a style="color: #24ACF2;" href="javascript:void(0)" class="hover-underline hover-blue">Thêm hình ảnh từ website khác</a>. Kéo để sắp xếp thứ tự hình ảnh.</p>
                                            <div class="form-group" style="position: relative; text-align: center;">
                                                <a class="btn btn-primary" href="javascript:void(0);" id="btnSelectImg">Chọn hình</a>
                                            </div>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="product-images-view image-collector" style="text-align: center;background-color: rgba(51,51,51,0.4); border-radius: 5px; height: 200%;;">
                                                <div class="image-collector-body" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                                    <div class="image-collector-container">
                                                        <!-- ngIf: ProductImages.length<=0 -->
                                                        <div style="height: 250px; display: flex; align-items: center;" class="image-collector-empty-outer ng-scope" ng-if="ProductImages.length<=0">
                                                            <div class="image-collector-empty-inner">
                                                                <div class="image-collector-empty">
                                                                    <span>Kéo và thả vào đây</span>
                                                                    <div class="separator"><span>hoặc</span></div>
                                                                    <a href="javascript:UploadImage()">
                                                                        <img src="./img/icon-upload.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end ngIf: ProductImages.length<=0 -->
                                                        <div class="image-collector-gallery-outer">
                                                            <div class="image-collector-gallery-inner">
                                                                <ul class="image-collector-gallery ui-sortable sortable-image">
                                                                    <!-- ngRepeat: item in ProductImages -->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Icon</h3>
                                            <p>Cập nhật Icon hoặc Icon ảnh cho danh mục sản phẩm</p>
                                            <div class="form-group" style="position: relative; text-align: center;">
                                                <a class="btn btn-primary" href="javascript:void(0);" id="btnSelectImg">Chọn hình</a>
                                            </div>
                                        </label>
                                        <div style="text-align: center; cursor: pointer;" class="col-sm-9">
                                            <section>
                                                <img class="img-upload" ng-src="img/icon-upload.png" ng-init="IconImage='img/icon-upload.png'" onclick="UploadIconImage()" src="img/icon-upload.png">
                                            </section>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Mô tả</h3>
                                            <p>Bạn có thể nhập thông tin mô tả chung về danh mục sản phẩm</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <textarea rows="10" class="form-control input-transparent ckeditor" id="ckeditor-describe"></textarea>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Tùy chọn</h3>
                                            <p>Thiết lập các trạng thái của nhóm sản phẩm</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <label>Tùy chọn nhóm sản phẩm</label>
                                            </div>
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <div class="checkbox" style="padding-top: 10px;">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6">Nổi bật</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Nâng cao</h3>
                                            <p>Bạn có thể sắp xếp danh mục sản phẩm theo thứ tự</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <label>Sắp xếp</label>
                                                <input type="text" id="sort" name="sort" class="form-control input-transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Tags</h3>
                                            <p>Tag có thể được dùng để phân loại các sản phẩm.</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <label>Tags</label>
                                                <input type="text" id="tags" name="tags" class="form-control input-transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Tối ưu SEO</h3>
                                            <p>Thiết lập các thẻ mô tả giúp khách hàng dễ dàng tìm thấy sản phẩm trên công cụ tìm kiếm như Google.</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <label>Tiêu đề trang (Meta Tilte)</label>
                                                <input type="text" id="meta-tilte" name="meta-tilte" class="form-control input-transparent">
                                                <label><small>0 / 70 ký tự</small></label>
                                            </div>
                                            <div class="col-sm-12" style="padding: 10px 0px;">
                                                <label>Mô tả trang (Meta Description)</label>
                                                <input type="text" id="meta-description" name="meta-description" class="form-control input-transparent">
                                                <label><small>0 / 160 ký tự</small></label>
                                            </div>

                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Trạng thái</h3>
                                            <p>Bạn có thể ngưng dùng Danh mục khỏi hệ thống</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <label>Ngưng dùng</label>
                                            </div>
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <div class="checkbox" style="padding-top: 10px;">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6">Ngưng dùng</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                </fieldset>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-sm-12 col-sm-offset-4">
                                            <div class="btn-toolbar">
                                                <div class="input-group-btn">
                                                    <button style="background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                                            <a style="color: #fff" href="index.php?com=danhmucsanpham&act=save">
                                                            <i class="fa fa-save"></i> Lưu
                                                            </a>                
                                                    </button>
                                                    <button style="background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                                                    <a style="color: #fff" href="index.php?com=danhmucsanpham?act=saveandback">
                                                                            <i class="fa fa-plus"></i> Lưu và quay lại
                                                                    </a>
                                                    </button>
                                                    
                                                    <button style=" background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                                                    <a style="color: #000" href="index.php?com=danhmucsanpham&act=back">
                                                                            <i class="fa fa-undo"></i> Trở về
                                                                    </a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>