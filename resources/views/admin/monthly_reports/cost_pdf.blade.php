
<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>
<div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h4 class="page-title">Cost monthly Report of $month $yearSelected</h4>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <form action="">
                            <div class="row">
                                
                            </div>
                        </form>
                    </div>
                    <div class="dt-responsive table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                            <th>#</th>
                    <th>Project</th>
                    <th>Cost Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(!empty($costs))
                    @foreach($costs as $key => $cost)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $cost->project->project_title }}</td>
                            <td>{{ $cost->cost_type->category_name }}</td>
                            <td>{{ $cost->amount }}</td>
                            <td>{{ $cost->expense_date }}</td>
                        </tr>
                    @endforeach
                @endif
                            </tbody>
                            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th>Total Cost Of The Month</th>
                <th>{{ $total_cost }}</th>
                <th></th>
            </tr>
        </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
</body>
</html>


