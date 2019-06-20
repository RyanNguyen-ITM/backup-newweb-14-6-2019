<div class="content container">
            <div class="col-lg-12">
                <div class="col-lg-6" style="float: left;">
                    <h4 class="page-title"><small><b>Cập nhật</b></small> Danh mục tin tức</h4>
                </div>
                <div class="col-lg-6">
                    <div class="input-group-btn">
                        <button style="float: right; background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                        <a style="color: #000" href="index.php?com=nhomtintuc&act=back">
                                                <i class="fa fa-undo"></i> Trở về
                                        </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                          <a style="color: #fff" href="index.php?com=nhomtintuc&act=saveandback">
                                                <i class="fa fa-plus"></i> Lưu và quay lại
                                          </a>
                        </button>
                        <button style="float: right; background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                <a style="color: #fff" href="index.php?com=nhomtintuc&act=save">
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
                            <h2><i class="fa fa-file-alt"></i> Thông tin <small>Danh mục tin tức</small></h2>
                        </header>
                        <hr style="border: 1px solid gray;" />
                        <div class="body">
                            <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate" data-parsley-priority-enabled="false">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Thông tin danh mục tin tức</h3>
                                            <p>Nhập tên danh mụcc<span class="required">*</span></p>
                                        </label>
                                        <div class="col-sm-9">
                                            <label>Tên danh mục tin tức</label>
                                            <input type="text" id="name-product" name="name-product" class="form-control input-transparent" required="required">
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                                <h3>Cấp trên</h3>
                                                <p>Phân loại danh mục theo cấu trúc thư mục</p>
                                            </label>
                                        <div class="col-sm-9">
                                            <section>
                                                <label>Cấp trên</label>
                                                <label class="select" style="width: 100%; height: 30px;">
                                                    <select class="ng-pristine ng-valid ng-touched" style="background-color: rgba(51,51,51,0.4); width: 100%; height: 100%; border: none; border-radius: 3px;">
                                                        <option value="number:0" label="Toàn bộ danh mục" selected="selected">Toàn bộ danh mục</option>
                                                        <option value="number:157051" label="Thời trang">Thời trang</option>
                                                    </select>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid gray;" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="title" style="text-align: left;">
                                            <h3>Nâng cao</h3>
                                            <p>Bạn có thể nhập thông tin và sắp xếp thông tin theo thứ tự</p>
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
                                            <h3>Tối ưu SEO</h3>
                                            <p>Thiết lập các thẻ mô tả giúp khách hàng dễ dàng tìm thấy tin tức trên công cụ tìm kiếm như Google.</p>
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
                                            <p>Bạn có thể ngưng dùng tin tức khỏi hệ thống</p>
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
                                                            <a style="color: #fff" href="index.php?com=nhomtintuc&act=save">
                                                            <i class="fa fa-save"></i> Lưu
                                                            </a>                
                                                    </button>
                                                    <button style="background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                                            <a style="color: #fff" href="index.php?com=nhomtintuc&act=saveandback">
                                                                    <i class="fa fa-plus"></i> Lưu và quay lại
                                                            </a>
                                                        </button>
                                                    <button style=" background-color: #f9f9f9; padding: 5px 10px; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" type="button" class="btn btn-default btn-sm" id="back">
                                                                    <a style="color: #000" href="index.php?com=nhomtintuc&act=back">
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