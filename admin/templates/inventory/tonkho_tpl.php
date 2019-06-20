<div class="content container">
            <h2 class="page-title">Quản lý - <span class="fw-semi-bold">Tồn kho</span></h2>
            <div class="widget-body-toolbar margin-top-10 form-horizontal">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Nhóm sản phẩm</label>
                            <div class="col-md-12">
                                <select class="form-control" id="ProductGroupId" name="ProductGroupId"><option value="0">Toàn bộ danh mục</option>
                                    <option value="157051">TOYOTA</option>
                                    <option value="157058">├──Camry</option>
                                    <option value="157060">├──Fortuner</option>
                                    <option value="157059">├──Vios</option>
                                    <option value="157052">KIA</option>
                                    <option value="157054">HONDA</option>
                                    <option value="157053">FORD</option>
                                    <option value="157055">AUDI</option>
                                    <option value="157061">├──A</option>
                                    <option value="157062">├──Q</option>
                                    <option value="157056">BMW</option>
                                    <option value="157057">Lamborghini</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Tag sản phẩm</label>
                            <div class="col-md-12">
                                <select class="form-control" id="ProductTag" name="ProductTag"><option value="0">----------Tất cả----------</option>
    </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="widget">
                <header>
                    <h4>Danh sách <span class="fw-semi-bold">Tồn kho</span></h4>
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
                                    <th class="width-200">Mẫu sản phẩm</th>
                                    <th class="no-sort hidden-xs width-100">Hình ảnh</th>
                                    <th class="no-sort hidden-xs width-200">Mã sản phẩm / SKU</th>
                                    <th class="no-sort width-200">Chính sách tồn kho</th>
                                    <th class="">Số lượng</th>
                                    <th class="no-sort width-200">Cập nhật tồn kho</th>
                                    <th class="width-50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <!--Chọn-->
                                    <td><input type="checkbox"></td>
                                    <!--Mẫu SP-->
                                    <td><span class="width-200"><a href="index.php?com=sanpham&act=edit&id=id">Algerd</a></span></td>
                                    <!--Hình ảnh-->
                                    <td class="hidden-xs width-100"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--Mã sản phẩm-->
                                    <td class="hidden-xs width-200">SKU24987353450943</td>
                                    <!--Chính sách tồn kho-->
                                    <td class="width-200">Không cho phép đặt hàng khi hết hàng</td>
                                    <!--Số lượng-->
                                    <td class="">12</td>
                                    <!--Cập nhật-->
                                    <td class="width-200">
                                        <div class="input-group-btn">
                                            <button style=" background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                                <a style="color: #fff" href="index.php?com=sanpham&act=save">
                                                    Thêm <i class="fa fa-plus"></i>
                                                </a>                
                                            </button>
                                            <button style=" background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                                <a style="color: #fff" href="index.php?com=sanpham&act=saveandback">
                                                    Đặt
                                                </a>
                                            </button>
                                            <div style="width: 50px; display: inline-block">
                                                <input style="width: 50px;" class="form-control" type="number" value="0">
                                            </div>
                                        </div>
                                    </td>
                                    <!--Lưu-->
                                    <td class="width-50">
                                        <button style="background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                                    <a style="color: #fff" href="index.php?com=sanpham&act=save">
                                                    <i class="fa fa-save"></i> Lưu
                                                    </a>                
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                          <!--Chọn-->
                                          <td><input type="checkbox"></td>
                                    <!--Mẫu SP-->
                                    <td><span class="width-200"><a href="index.php?com=sanpham&act=edit&id=id">Blgerd</a></span></td>
                                    <!--Hình ảnh-->
                                    <td class="hidden-xs width-100"><img class="img-jqgrid-thumbnail" src="./img/1.jpg" alt=""></td>
                                    <!--Mã sản phẩm-->
                                    <td class="hidden-xs width-200">SKU24987353450943</td>
                                    <!--Chính sách tồn kho-->
                                    <td class="width-200">Không cho phép đặt hàng khi hết hàng</td>
                                    <!--Số lượng-->
                                    <td class="">12</td>
                                    <!--Cập nhật-->
                                    <td class="width-200">
                                        <div class="input-group-btn">
                                            <button style="background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                                <a style="color: #fff" href="index.php?com=sanpham&act=save">
                                                        Thêm  <i class="fa fa-plus"></i> 
                                                </a>                
                                            </button>
                                            <button style="background-color: #286090; padding: 5px 10px;" type="button" class="btn btn-default btn-sm" id="saveandback">
                                                <a style="color: #fff" href="index.php?com=sanpham&act=saveandback">
                                                        Đặt
                                                </a>
                                            </button>
                                            <div style="width: 50px; display: inline-block">
                                                <input style="width: 50px;" class="form-control" type="number" value="0">
                                            </div>
                                        </div>
                                    </td>
                                    <!--Lưu-->
                                    <td class="width-50">
                                        <button style=" background-color: #286090; padding: 5px 10px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" type="button" class="btn btn-default btn-sm" id="save">
                                                    <a style="color: #fff" href="index.php?com=sanpham&act=save">
                                                    <i class="fa fa-save"></i> Lưu
                                                    </a>                
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>