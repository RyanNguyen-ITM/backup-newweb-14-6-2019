<div class="content container">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <h4 class="page-title"><small><b>Cập nhật</b></small> Sản phẩm</h4>
                </div>
                <div class="col-lg-6">
                    <div class="input-group-btn">
                        <button style="float: right; background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                        <a style="color: #000" href="index.php?com=sanpham&act=back">
                                                <i class="fa fa-undo"></i> Trở về
                                        </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                          <a style="color: #fff" href="index.php?com=sanpham&act=saveandback">
                                                <i class="fa fa-plus"></i> Lưu và quay lại
                                          </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                <a style="color: #fff" href="index.php?com=sanpham&act=save">
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
                            <h2><i class="fa fa-file-alt"></i> Thông tin <small>Sản phẩm</small></h2>
                        </header>
                        <hr style="border: 1px solid gray;" />
                        <div class="body">
                            <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate" data-parsley-priority-enabled="false">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Thông tin sản phẩm</h3>
                                            <p>Nhập tên, giá sản phẩm <span class="required">*</span></p>
                                        </label>
                                        <div class="col-sm-9">
                                            <label>Tên sản phẩm</label>
                                            <input type="text" id="name-product" name="name-product" class="form-control input-transparent" required="required">
                                        </div>
                                        <div class="col-sm-9" style="padding-top: 10px;">
                                            <div class="col-sm-6" style="padding-left: 0px;">
                                                <label>Giá</label>
                                                <input type="text" id="price-product" name="price-product" class="form-control input-transparent" required="required">
                                            </div>
                                            <div class="col-sm-6" style="padding-right: 0px;">
                                                <label>Giá khuyến mãi</label>
                                                <input type="text" id="price-discount" name="price-discount" class="form-control input-transparent" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Hình ảnh</h3>
                                            <p>Upload và chỉnh sửa hình ảnh của sản phẩm. Bạn cũng có thể <a href="javascript:void(0)" class="hover-underline hover-blue">thêm hình ảnh từ website khác</a>. Kéo để sắp xếp thứ tự hình ảnh.</p>
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
                                                <h3>Nhóm sản phẩm</h3>
                                                <p>Phân loại sản phẩm theo nhóm để quản lý</p>
                                            </label>
                                        <div class="col-sm-9">
                                            <section>
                                                <label>Nhóm sản phẩm</label>
                                                <label class="select" style="width: 100%; height: 30px;">
                                                    <select class="ng-pristine ng-valid ng-touched" style="background-color: rgba(51,51,51,0.4); width: 100%; height: 100%; border: none; border-radius: 3px;">
                                                        <option value="number:0" label="Chọn nhóm sản phẩm" selected="selected">Chọn nhóm sản phẩm</option>
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
                                        <div class="col-sm-9" style="padding-top: 10px;">
                                            <div class="col-sm-6" style="padding-left: 0;">
                                                <section>
                                                    <label>Thêm sản phẩm vào nhóm khác</label>
                                                    <label class="select" style="width: 100%; height: 30px;">
                                                                <select class="ng-pristine ng-valid ng-touched" style="background-color: rgba(51,51,51,0.4); width: 100%; height: 100%; border: none; border-radius: 3px;color: #47AED9;">
                                                                    <option value="number:0" label="Chọn nhóm sản phẩm" selected="selected">Chọn nhóm sản phẩm</option>
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
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Mô tả</h3>
                                            <p>Bạn có thể nhập thông tin hình ảnh mô tả chi tiết sản phẩm</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <textarea rows="10" class="form-control input-transparent ckeditor" id="ckeditor-describe"></textarea>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                                <h3>Tùy chọn</h3>
                                                <p>Thiết lập các trạng thái của sản phẩm</p>
                                            </label>
                                        <div class="col-sm-9">
                                            <section>
                                                <label style="width: 100%;">Tùy chọn sản phẩm</label>
                                                <div class="inline-group">
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">Bán chạy</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">Mới</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3">Hot</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4">Khuyến mãi</label>
                                                    </div>
                                                </div>
                                                <p style="padding-top: 10px;" class="note"><small> Chú ý: Khi chọn khuyến mãi thì giá của sản phẩm được tính theo giá khuyến mãi</small></p>
                                            </section>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <!--------------------------------------------------->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                                <h3>Tồn kho</h3>
                                                <p>Bạn có thể nhập số lượng để quản lý lượng tồn kho của sản phẩm</p>
                                        </label>
                                        <div class="col-sm-9" style="padding-top: 10px;">
                                            <div class="col-sm-6" style="padding-left: 0px;">
                                                <label>Mã sản phẩm / SKU</label>
                                                <input type="text" id="price-product" name="price-product" class="form-control input-transparent" required="required">
                                            </div>
                                            <div class="col-sm-6" style="padding-right: 0px;">
                                                <label>Mã vạch / BarCode</label>
                                                <input type="text" id="price-discount" name="price-discount" class="form-control input-transparent" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-9" style="padding-top: 10px;">
                                            <div class="col-sm-6" style="padding-left: 0;">
                                                <section>
                                                    <label>Chính sách tồn kho</label>
                                                    <label class="select" style="width: 100%; height: 30px;">
                                                                        <select class="ng-pristine ng-valid ng-touched" style="background-color: rgba(51,51,51,0.4); width: 100%; height: 100%; border: none; border-radius: 3px;color: #47AED9;">
                                                                            <option value="number:0" label="Không quản lý tồn kho" selected="selected">Không quản lý tồn kho</option>
                                                                            <option value="number:157051" label="Quản lý tồn kho">Quản lý tồn kho</option>
                                                                        </select>
                                                        </label>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Vận chuyển</h3>
                                            <p>Bạn có thể nhập thông tin khối lượng sản phẩm để tính chi phí vận chuyển</p>
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <label>Khối lượng (grams)</label>
                                                <input type="text" id="price-discount" name="price-discount" class="form-control input-transparent" required="required">
                                            </div>
                                            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0;">
                                                <div class="checkbox" style="padding-top: 10px;">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">Giao hàng</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                             <h3>Phiên bản sản phẩm</h3>
                                        </label>
                                        <div class="col-sm-9">
                                            <label style="padding-top: 10px; width: 100%;">Sản phẩm có các phiên bản dựa theo thuộc tính như kích thước, màu sắc ?</label>
                                            <button type="button" class="btn btn-primary text-right" ng-click="toggleAutoGenerate()">Thêm phiên bản</button>

                                            <div ng-show="IsShowOption==true" class="">
                                                <div class="product-option">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-3">Tên thuộc tính</th>
                                                                <th class="col-sm-6">Giá trị thuộc tính (Các giá trị cách nhau bởi dấu phẩy)</th>
                                                                <th class="col-sm-3">Kiểu hiển thị</th>
                                                                <th class=""></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- ngRepeat: item in ProductOptions -->
                                                            <tr class="ng-scope">
                                                                <td class="none-border-row">
                                                                    <label class="input">
                                                                            <input type="text" id="price-discount" name="price-discount" class="form-control input-transparent" required="required">   
                                                                        </label>
                                                                </td>
                                                                <td class="none-border-row">
                                                                    <div class="bootstrap-tagsinput">
                                                                        <!-- ngRepeat: it in item.ProductOptionValues -->
                                                                        <input type="text" id="price-discount" name="price-discount" class="form-control input-transparent" required="required">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <label class="select">
                                                                                <select class="form-control input-transparent">
                                                                        <option value="number:1" label="Dropdown" selected="selected">Dropdown</option>
                                                                        <option value="number:2" label="Màu sắc">Màu sắc</option><option value="number:3" label="Radio">Radio</option>
                                                                    </select>
                                                                                        <i></i>
                                                                            </label>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0)" class="btn btn-default" ng-click="removeProductOption($index)">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <!-- end ngRepeat: item in ProductOptions -->
                                                            <!-- ngIf: ProductOptions.length<3 -->
                                                            <tr class="ng-scope" ng-if="ProductOptions.length<3">
                                                                <td colspan="4">
                                                                    <a href="javascript:void(0)" ng-click="addProductOption()" class="btn btn-default">Thêm option</a>
                                                                </td>
                                                            </tr>
                                                            <!-- end ngIf: ProductOptions.length<3 -->

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product-variant">
                                                    <p style="margin-top: 10px;">Chỉnh sửa mẫu sản phẩm để khởi tạo</p>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="">&nbsp;</th>
                                                                <th class="col-sm-2">Tùy chọn</th>
                                                                <th class="col-sm-3">Giá</th>
                                                                <th class="col-sm-3">Mã sản phẩm</th>
                                                                <th class="col-sm-3">Barcode</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- ngRepeat: item in ProductVariants -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">

                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <div class="col-md-3 ">
                                            <h3>Tab thông tin</h3>
                                            <p>Bạn có thể thêm các tab thông tin về sản phẩm. Kéo để sắp xếp thứ tự thông tin.</p>
                                            <p>
                                                <button class="btn btn-primary" id="add_tab">
                                                            Thêm Tab
                                                        </button>
                                            </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <section>
                                                <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                                                    <ul>
                                                        <li style="width: max-content; padding: 5px 15px ;background-color: white; border-top-left-radius: 3px; border-top-right-radius: 3px; border: none;">
                                                            <span>
                                                                <button style="background-color: white; border: none;">
                                                                    <a href="">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </button>
                                                            </span>
                                                            <a href="" style=""> Thông tin chi tiết</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </section>
                                            <textarea id="description" rows="3" name="text" class="form-control input-transparent ckeditor"></textarea>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Sắp xếp</h3>
                                            <p>Bạn có thể nhập thông tin và sắp xếp sản phẩm theo thứ tự</p>
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
                                            <p>Bạn có thể ngưng dùng sản phẩm khỏi hệ thống</p>
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
                                                            <a style="color: #fff" href="index.php?com=sanpham&act=save">
                                                            <i class="fa fa-save"></i> Lưu
                                                            </a>                
                                                    </button>
                                                    <button style="background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                                                    <a style="color: #fff" href="index.php?com=sanpham?act=saveandback">
                                                                            <i class="fa fa-plus"></i> Lưu và quay lại
                                                                    </a>
                                                    </button>
                                                    
                                                    <button style=" background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                                                    <a style="color: #000" href="index.php?com=sanpham&act=back">
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