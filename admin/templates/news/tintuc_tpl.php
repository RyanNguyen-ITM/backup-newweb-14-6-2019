<div class="content container">
            <h2 class="page-title">Quản lý - <span class="fw-semi-bold">Tin tức</span></h2>
            <div class="widget-body-toolbar margin-top-10 form-horizontal">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Nhóm tin tức</label>
                            <div class="col-md-12">
                                <select class="form-control" id="ProductGroupId" name="ProductGroupId"><option value="0">Toàn bộ danh mục</option>
                                    <option value="157051">Thời trang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="float: right; height: 72px; display: flex; align-items: center;">
                    <div class="input-group" style="width: 100%;">
                            <div class="input-group-btn">
                                <button style="float: right; background-color: #286090;" type="button" class="btn btn-default" id="btnRefresh">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                <button style="float: right; background-color: red;" type="button" class="btn btn-default" id="btnDelete">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                <button style="float: right; background-color: green;" type="button" class="btn btn-default" id="btnAdd">
                                <a style="color: #fff;" href="index.php?com=tintuc&act=add">
                                  <i class="fa fa-plus"></i> Thêm mới
                                </a>                
                                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="widget">
                <header>
                    <h4>Danh sách <span class="fw-semi-bold">Tin tức</span></h4>
                    <div class="widget-controls">
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                    </div>
                </header>
                <div class="body">
                    <p>
                        Column sorting, live search, pagination. Built with
                        <a href="http://www.datatables.net/" target="_blank">jQuery DataTables</a>
                    </p>
                    <div class="mt">
                        <table id="datatable-table" class="table table-striped table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="no-sort"></th>
                                    <th class="width-200">Tên tin tức</th>
                                    <th class="no-sort hidden-xs width-100">Danh mục</th>
                                    <th class="hidden-xs width-100">Ngày tạo</th>
                                    <th class="no-sort width-100">Hình ảnh</th>
                                    <th class="no-sort">Mới</th>
                                    <th class="no-sort">Hot</th>
                                    <th class="">Thứ tự</th>
                                    <th class="no-sort width-200">Tác giả</th>
                                    <th class="no-sort">Ngưng dùng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--Tên tin tức-->
                                    <td><span class="width-200"><a href="index.php?com=tintuc&act=edit&id=id">Tin động trời</a></span></td>
                                    <!--Danh mục-->
                                    <td class="width-100">Tin mới nhất</td>
                                    <!--Ngày tạo-->
                                    <td class="width-100">24-03-1998</td>
                                    <!--Hình ảnh-->
                                    <td class="hidden-xs width-100"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--Mới-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                    <!--Hot-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                    <!--Thứ tự-->
                                    <td class="">12</td>
                                    <!--Tác giả-->
                                    <td class="width-200">Nguyễn Đức Hoàng Huy</td>
                                    <!--Ngưng dùng-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--Tên tin tức-->
                                    <td><span class="width-200"><a href="index.php?com=tintuc&act=edit&id=id">Bán nhà mua chòi</a></span></td>
                                    <!--Danh mục-->
                                    <td class="width-100">Giật gân</td>
                                    <!--Ngày tạo-->
                                    <td class="width-100">25-6-2019</td>
                                    <!--Hình ảnh-->
                                    <td class="hidden-xs width-100"><img class="img-jqgrid-thumbnail" src="./img/10.jpg" alt=""></td>
                                    <!--Mới-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                    <!--Hot-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                    <!--Thứ tự-->
                                    <td class="">31</td>
                                    <!--Tác giả-->
                                    <td class="width-200">Ryan Nguyen</td>
                                    <!--Ngưng dùng-->
                                    <td class="">
                                        <input type="checkbox">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>