<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Academic Management
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('students.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Student </a>
                    <a href="{{ route('courses.index') }}" class="list-group-item list-group-item-info"> <i class="fa fa-users fa-lg"></i> Course </a>
                    <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-warning"> <i class="fa fa-users fa-lg"></i> Department </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Final Result Entry
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('results.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Regular Result Entry </a>
                    <a href="{{ route('results.custom') }}" class="list-group-item list-group-item-warning"> <i class="fa fa-users fa-lg"></i> Custom Result Entry </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Sessonal+Midterm Result Entry
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('sessonals.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Regular </a>
                    <a href="{{ route('sessonals.custom') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Custom </a>
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    Result View
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('resultview.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Regular </a>
                    <a href="{{ route('resultview.custom') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Custom </a>
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Admin Management
                </a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('admins.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Admin </a>
                    <a href="{{ route('admins.settings') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Settings </a>
                </div>
            </div>
        </div>
    </div>

</div>
