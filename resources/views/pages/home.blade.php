             <!-- start widget -->
             <div class="row">
                <div class="state-overview">
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel blue">
                        <div class="symbol">
                            <i class="fa fa-users usr-clr"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23">0</p>
                            <p>APPOINTMENTS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel green-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
                            <p>NEW PATIENTS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel grey">
                        <div class="symbol">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
                            <p>TODAY'S OPT</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel orange">
                        <div class="symbol">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">0</p><span>$</span>
                            <p>Hospital Earning</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <!-- end widget -->
         <!-- chart start -->
        <div class="row">
            <div class="col-md-8">
                <div class="card card-topline-aqua">
                    <div class="card-head">
                        <header>HOSPITAL SURVEY</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">
                                <canvas id="chartjs_line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card card-topline-aqua">
                    <div class="card-head">
                        <header>HOSPITAL SURVEY</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">
                                <canvas id="chartjs_polar"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Chart end -->
         <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card  card-topline-green">
                    <div class="card-head">
                        <header>BOOKED APPOINTMENT</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row table-padding">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="btn-group">
                                    <button id="addRow" class="btn btn-info">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                            <span></span>
                                        </label>
                                    </th>
                                    <th>Patient Name</th>
                                    <th>Assigned Doctor</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> Jayesh Patel </td>
                                    <td>
                                        <a href="mailto:shuxer@gmail.com"> Dr.Rajesh </a>
                                    </td>
                                    <td class="center"> 12/05/2016 </td>
                                    <td class="center"> 10:45 </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-warning dropdown-toggle center no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> Pooja Patel </td>
                                    <td>
                                        <a href="mailto:looper90@gmail.com"> Dr.Sarah Smith </a>
                                    </td>
                                    <td class="center"> 12/05/2016 </td>
                                    <td class="center"> 10:55 </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-info dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> Pankaj Singh </td>
                                    <td>
                                        <a href="mailto:userwow@yahoo.com"> Dr.Rajesh </a>
                                    </td>
                                    <td class="center"> 12/05/2016 </td>
                                    <td class="center"> 11:15 </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-success dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> Raj Malhotra </td>
                                    <td>
                                        <a href="mailto:doctormail@gmail.com"> Dr.Megha Trivedi </a>
                                    </td>
                                    <td class="center"> 12/05/2016 </td>
                                    <td class="center"> 11:25 </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-primary dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> Sneha Pandya </td>
                                    <td>
                                        <a href="mailto:doctormail@gmail.com"> Dr.Sarah Smith </a>
                                    </td>
                                    <td class="center"> 12/05/2016 </td>
                                    <td class="center"> 11:35 </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-warning dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                  <li>
                                                    <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd gradeX ">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> Sameer Jain </td>
                                    <td>
                                        <a href="mailto:doctormail@gmail.com"> Dr.Megha Trivedi </a>
                                    </td>
                                    <td class="center"> 12/05/2016 </td>
                                    <td class="center"> 11:45 </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-danger dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card  card-topline-red">
                    <div class="card-head">
                        <header>DOCTORS LIST</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">
                            <ul class="docListWindow">
                                <li>
                                    <div class="prog-avatar">
                                        <img src="img/doc/doc1.svg" alt="" width="40" height="40">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                        </div>
                                            <div>
                                                <span class="clsAvailable">Available</span>
                                            </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="img/doc/doc2.svg" alt="" width="40" height="40">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                        </div>
                                        <div>
                                            <span class="clsAvailable">Available</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="img/doc/doc3.svg" alt="" width="40" height="40">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                        </div>
                                        <div>
                                            <span class="clsNotAvailable">Not Available</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="img/doc/doc4.svg" alt="" width="40" height="40">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Dr.Jay Soni</a> - (BHMS)
                                        </div>
                                        <div>
                                            <span class="clsOnLeave">On Leave</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="img/doc/doc5.svg" alt="" width="40" height="40">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                        </div>
                                        <div>
                                            <span class="clsNotAvailable">Not Available</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="img/doc/doc6.svg" alt="" width="40" height="40">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                        </div>
                                        <div>
                                            <span class="clsAvailable">Available</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- start admited patient list -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card  card-topline-yellow">
                    <div class="card-head">
                        <header>ADMIT PATIENT LIST</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                      <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table display product-overview mb-30" id="support_table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Assigned Doctor</th>
                                            <th>Date Of Admit</th>
                                            <th>Diseases</th>
                                            <th>Room No</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jens Brincker</td>
                                            <td>Dr.Kenny Josh</td>
                                            <td>27/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success">Influenza</span>
                                            </td>
                                            <td>101</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mark Hay</td>
                                            <td>Dr. Mark</td>
                                            <td>26/05/2017</td>
                                            <td>
                                                <span class="label label-sm label-warning"> Cholera </span>
                                            </td>
                                            <td>105</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Anthony Davie</td>
                                            <td>Dr.Cinnabar</td>
                                            <td>21/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">Amoebiasis</span>
                                            </td>
                                            <td>106</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>David Perry</td>
                                            <td>Dr.Felix </td>
                                            <td>20/04/2016</td>
                                            <td>
                                                <span class="label label-sm label-danger">Jaundice</span>
                                            </td>
                                            <td>105</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Anthony Davie</td>
                                            <td>Dr.Beryl</td>
                                            <td>24/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">Leptospirosis</span>
                                            </td>
                                            <td>102</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Alan Gilchrist</td>
                                            <td>Dr.Joshep</td>
                                            <td>22/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-warning ">Hepatitis</span>
                                            </td>
                                            <td>103</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Mark Hay</td>
                                            <td>Dr.Jayesh</td>
                                            <td>18/06/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">Typhoid</span>
                                            </td>
                                            <td>107</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Sue Woodger</td>
                                            <td>Dr.Sharma</td>
                                            <td>17/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-danger">Malaria</span>
                                            </td>
                                            <td>108</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- end admited patient list -->