@extends('admin.layouts.app')

@section('content')
    <section id="dash">
        <div class="container">
            <div class="row">
                <!-- left navigation code start -->
                <div class="col-md-3">
                    @include('admin.layouts.partials.left-sidebar')
                </div> <!-- left navigation code end -->
                <!-- body section code start -->
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title"> Invoice </h1>
                        </div>
                        <div class="panel-body">
                            <form class="" action="#" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="product_name"> Product Name </label>
                                            <select class="form-control" name="product_name" id="product_name">
                                                <option value=""> Halim </option>
                                                <option value=""> Shik Kabab </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="price"> Price </label>
                                            <select class="form-control" name="price" id="price">
                                                <option value=""> 150 </option>
                                                <option value=""> 250 </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="quantity"> Quantity </label>
                                            <input type="text" name="quantity" id="quantity" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <p> <b> Amount </b> </p>
                                            <b> $ 120 </b>
                                        </div>
                                        <div class="col-md-2">
                                            <p> <b> Select </b> </p>
                                            <input type="checkbox" id="select">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>  Remove List </button>
                                                <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-plus"></i> Add More </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="panel-footer text-right">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#saleModal"> Sale </button>
                        </div>
                        <div class="modal fade" id="saleModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-success"> Product Invoice </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p> <b> Shik Kabab </b> </p>
                                                         <p> <b> Cocacula </b> </p>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <p> <b> 5 x 80  </b> </p>
                                                        <p> <b> 1 x 80 </b> </p>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <p> <b> $400 </b> </p>
                                                        <p> <b> $80 </b> </p>
                                                    </div>
                                                </div> <hr/>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p> <b> Total Amount = </b> </p>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <p> <b> $480 </b> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal"> Close </button>
                                        <button type="button" class="btn btn-success"> Print Memo </button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                    </div>
                </div> <!-- body section code end  -->
            </div>
        </div>
    </section>
@endsection
