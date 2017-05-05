<!-- add employee model code satart here  -->
<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-primary" id="myModalLabel"> Add Student </h4>
            </div>
            <div class="modal-body">
                <form id="addStudentForm" action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="id"> ID </label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="Roll No..">
                            </div>
                            <div class="col-md-6">
                                <label for="reg"> Registration </label>
                                <input type="text" name="reg" id="reg" class="form-control" placeholder="Registration No..">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name"> Name </label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="father_name"> Father Name </label>
                                <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Father's name">
                            </div>
                            <div class="col-md-6">
                                <label for="mother_name"> Mother Name </label>
                                <input type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Mother's name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="present_address"> Present Address </label>
                                <input type="text" name="present_address" id="present_address" class="form-control" placeholder="House, Road, City .....">
                            </div>
                            <div class="col-md-6">
                                <label for="permanent_address"> Permanent Address </label>
                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" placeholder="House, Road, UP, Zilla">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="picture"> Picture </label>
                                <input type="file" name="picture" id="picture" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="contact"> Contact </label>
                                <input type="text" name="contact" id="contact" class="form-control" placeholder="ex: 01712575784, 8801557225">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button form="addStudentForm" type="reset" class="btn btn-primary"> Clean </button>
                <button form="addStudentForm" type="submit" class="btn btn-primary">Save </button>
            </div>
        </div>
    </div>
</div> <!-- add employee model code satart here  -->
