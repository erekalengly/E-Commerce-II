<div>
    @include('livewire.empmodal')

    <div id="dashboardMainContainer" >
        <div class="dashboard_sidebar" id="sidebar" id="dashboard_sidebar" style="width: 20%;
        float: left;  position: sticky; top: 0; left: 0; right: 0; ">
            <h3 class="dashboard_logo" id="dashboard_logo">ITC</h3>
            <div class="dashboard_sidebar_user">
                <img src="Admin.png" alt="User image." id="userImage" />
                <span>Admin</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <ul class="dashboard_menu_lists">
                        <li>
                            <a href="{{url('Admindashboard')}}"><i class="fa fa-reorder"></i>&nbsp;&nbsp;<span class="menuText">Dashboard</span></a>
                        </li>
                        <li class="menuActive">
                            <a href="{{url('Employee')}}"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;<span class="menuText">Employees</span></a>
                        </li>
                        <li>
                            <a href="{{url('LecturerPayment')}}"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<span class="menuText">Lecturer Payment</span></a>
                        </li>
                    </ul>
            </div>
        </div>

        <div class="dashboard_content_container" id="dashboard_content_container" style="width: 80%;
        float: left; ">
            <div class="dashboard_topNav" style=" position: sticky; top: 0; left: 0; right: 0; ">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-bell"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-search"></i></a>
            </div>
            <div class="dashboard_content" >
                <div class="dashboard_content_main">
                        <div id="page-inner">
                                <div class="row">
                                    <div class="col-md-12" style=" position: sticky; top: 0; left: 0; right: 0; ">
                                        <h1 class="page-head-line" >Employees
                                            <a href="" class="btn btn-primary btn-sm pull-right">Back<i class="glyphicon glyphicon-arrow-right"></i></a><a href="" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>
                                        </h1>
                                        <nav>
                                            <div class="section__container nav__links"><p>


                                            </div>
                                        </nav>

                                    </div>
                                </div>

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="container-md text-left">
                                                <!-- Activation button -->
                                                 <br />
                                                 <action>
                                                    <select name="" id="" >
                                                        <option value="none">Academic Year</option>
                                                        <option value="none">2022-2023</option>
                                                        <option value="none">2023-2024</option>
                                                        <option value="none">2024-2025</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Month</option>
                                                        <option value="none">January</option>
                                                        <option value="none">February</option>
                                                        <option value="none">March</option>
                                                        <option value="none">April</option>
                                                        <option value="none">May</option>
                                                        <option value="none">June</option>
                                                        <option value="none">July</option>
                                                        <option value="none">August</option>
                                                        <option value="none">September</option>
                                                        <option value="none">October</option>
                                                        <option value="none">November</option>
                                                        <option value="none">December</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Degree</option>
                                                        <option value="none">Technician</option>
                                                        <option value="none">Engineering</option>
                                                        <option value="none">Master</option>
                                                        <option value="none">PHD</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Department</option>
                                                        <option value="GIC">GIC</option>
                                                        <option value="GIC">GCI</option>
                                                        <option value="GIC">GTR</option>
                                                        <option value="GIC">GAR</option>
                                                        <option value="GIC">GIM</option>
                                                        <option value="GIC">GGG</option>
                                                    </select>
                                                    <select name="" id="">
                                                        <option value="none">Year</option>
                                                        <option value="Fourth Year">First Year</option>
                                                        <option value="Fourth Year">Second Year</option>
                                                        <option value="Fourth Year">Third Year</option>
                                                        <option value="Fourth Year">Fourth Year</option>
                                                        <option value="Fourth Year">Fifth Year</option>
                                                    </select>
                                                    <select name="" id="">
                                                        <option value="none">Lectures</option>
                                                        <option value="TAL Tongsreng">TAL Tongsreng</option>
                                                        <option value="BOU Chhanna">BOU Chhanna</option>
                                                        <option value="HENG Rathpisey">HENG Rathpisey</option>
                                                        <option value="KHEANG Hongly">KHEANG Hongly</option>
                                                        <option value="HOK Tin">HOK Tin</option>
                                                        <option value="CHUN Thavorac">CHUN Thavorac</option>
                                                        <option value="CHEA Socheat">CHEA Socheat</option>
                                                        <option value="NOP Phearum">NOP Phearum</option>
                                                        <option value="YOU Vanndy">YOU Vanndy</option>
                                                        <option value="CHHEANG Vanny Ratanak">CHHEANG Vanny Ratanak</option>
                                                        <option value="RIN Vannat">RIN Vannat</option>
                                                    </select>
                                                 </action>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-sorting table-responsive">
                                                <div class="table table-striped table-bordered table-hover" id="tSortable22">
                                                        <div class="row">
                                                            <div class="container">

                                                                <header>
                                                                    <div class="filterEntries">
                                                                        <div class="entries">
                                                                            Show <select name="" id="table_size">
                                                                                <option value="10">10</option>
                                                                                <option value="20">20</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries
                                                                        </div>

                                                                        <div class="filter">
                                                                            <label for="search">Search:</label>
                                                                            <input type="text" name="" id="search" placeholder="Enter name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="addMemberBtn">
                                                                        <button>New member</button>
                                                                    </div>

                                                                </header>

                                                                <table id="PayrollTable" class="table table-striped table-hover text-info shadow">

                                                                    <thead>
                                                                        <tr class="heading">
                                                                            <th>No</th>
                                                                            <th>Lecturer Name</th>
                                                                            <th>Gender</th>
                                                                            <th>Department</th>
                                                                            <th>Course</th>
                                                                            <th>Position</th>
                                                                            <th>Email</th>
                                                                            <th>Phone number</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="userInfo">
                                                                        {{-- <td>1</td>
                                                                        <td>Tal Tongsreng</td>
                                                                        <td>Male</td>
                                                                        <td>GIC</td>
                                                                        <td>Software Engineering</td>
                                                                        <td>Professor</td>
                                                                        <td>Tongsreng@gmail.com</td>
                                                                        <td>070 123 456 </td>
                                                                        <th>
                                                                            <!--  <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">New User <i class="bi bi-people"> -->
                                                                            <button class="btn btn-primary newUser">View</button>
                                                                            <button class="btn btn-primary" >Edit</button>
                                                                            <button class="btn btn-danger" >Delete</button>
                                                                        </th> --}}

                                                                        <!-- <tr><td class="empty" colspan="11" align="center">No data available in table</td></tr> -->
                                                                        @foreach ( $employees as $employee )

                                                                        <tr>
                                                                            <td>{{$employee['id']}}</td>
                                                                            <td>{{$employee['name']}}</td>
                                                                            <td>{{$employee['gender']}}</td>
                                                                            <td>{{$employee['department_name']}}</td>
                                                                            <td>null</td>
                                                                            <td>{{$employee['type']}}</td>
                                                                            <td>{{$employee['email']}}</td>
                                                                            <td>{{$employee['phone']}}</td>
                                                                            <td>
                                                                            <button class="btn btn-primary newUser" onclick="">View</button>
                                                                            <button class="btn btn-primary edit" >Edit</button>
                                                                            <button class="btn btn-danger " onclick="deleteuser({{ $employee['id'] }})" >Delete</button>
                                                                            {{-- <a href="{{ url('delete_emp?emp_id='.$employee['id']) }}"><button class="btn btn-danger delete">Delete</button></a> --}}
                                                                            </td>
                                                                        </tr>


                                                                    @endforeach
                                                                                </tbody>

                                                                </table>

                                                                <footer>
                                                                    <span class="showEntries">Showing 1 to 10 of 50 entries</span>
                                                                    <div class="pagination">
                                                                        <button>Prev</button>
                                                                        <button class="active">1</button>
                                                                        <button>2</button>
                                                                        <button>3</button>
                                                                        <button>4</button>
                                                                        <button>5</button>
                                                                        <button>Next</button> 
                                                                    </div>
                                                                </footer>
                                                            </div>

                                                            <!--Popup Form-->

                                                            <div class="dark_bg" >
                                                                <div class="popup" style="background-color: #f2f2f2">
                                                                     <header>
                                                                        <h2 class="modalTitle">Fill the Form</h2>
                                                                        <button class="closeBtn">&times;</button>
                                                                     </header>
                                                                     <div class="body">
                                                                        <form action="{{url('create_employee')}}" id="myForm" method="POST">
                                                                            @csrf
                                                                            <div>
                                                                                <label>
                                                                                    <div type="file" name="" id="uploadimg">
                                                                                    <i class="fa-solid fa-plus"></i>
                                                                                </label>
                                                                            </div>
                                                                            <div class="inputFieldContainer">
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="fName">First Name</label>
                                                                                        <input type="text" name="firstname" id="fName" >
                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                        <label for="lName">Last Name</label>
                                                                                        <input type="text" name="lastname" id="lName" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="gender">Gender</label>
                                                                                        <input type="text" id="gender" name="gender">
                                                                                        {{-- <select name="gender" id="gender" >
                                                                                            <option value="none"></option>
                                                                                            <option value="none">F</option>
                                                                                            <option value="none">M</option>
                                                                                        </select> --}}
                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                        <label for="academic_year">Academic Year</label>
                                                                                        <select name="academic_year" id="academic_year" >
                                                                                            <option value=""></option>
                                                                                            @foreach($academic_year as $ay)
                                                                                            <option value="{{ $ay['id'] }}">{{ $ay['academic_year']}} {{ $ay['name'] }}</option>
                                                                                             @endforeach
                                                                                            {{-- <option value="none">2022-2023</option>
                                                                                            <option value="none">2023-2024</option>
                                                                                            <option value="none">2024-2025</option> --}}
                                                                                        </select>
                                    
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="degree">Degree</label>
                                                                                        <select name="degree" id="degree" >
                                                                                            <option value=""></option>
                                                                                            @foreach($degree as $dg)
                                                                                                <option value="{{ $dg['id'] }}">{{ $dg['degree']}}</option>
                                                                                            @endforeach
                                                                                            {{-- <option value="none">Technician</option>
                                                                                            <option value="none">Engineering</option>
                                                                                            <option value="none">Master</option>
                                                                                            <option value="none">PHD</option> --}}
                                                                                        </select>                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                            <label for="department">Department:</label>
                                                                                            <select name="department" id="department" >
                                                                                                <option value=""></option>
                                                                                                @foreach($department as $dp)
                                                                                                <option value="{{ $dp['id'] }}">{{ $dp['name']}}</option>
                                                                                                @endforeach
                                                                                                {{-- <option value="none">GIC</option>
                                                                                                <option value="none">GCI</option>
                                                                                                <option value="none">GTR</option>
                                                                                                <option value="none">GAR</option>
                                                                                                <option value="none">GIM</option>
                                                                                                <option value="none">GGG</option>
                                                                                                <option value="none">GRU</option>
                                                                                                <option value="none">GCA</option>
                                                                                                <option value="none">GEE</option>
                                                                                                <option value="none">GTI</option>
                                                                                                <option value="none">AMS</option> --}}
                                                                                                
                                                                                            </select>
                                                                                        </div>
    
    
                                                                                </div>

                                                                            <div class="nameField">
                                                                                <div class="form_control ">
                                                                                    <label for="course">Course:</label>
                                                                                    <select name="course" id="course" >
                                                                                        <option value=""></option>
                                                                                        @foreach($course as $cs)
                                                                                            <option value="{{ $cs['id'] }}">{{ $cs['name']}}</option>
                                                                                         @endforeach
                                                                                        {{-- <option value="none">Network I</option>
                                                                                        <option value="none">Network II</option> --}}
                                                                                        {{-- <option value="none">Internet Programming I</option>
                                                                                        <option value="none">Internet Programming II</option>
                                                                                        <option value="none">Sotfware Engineering I</option>
                                                                                        <option value="none">Sotfware Engineering II</option>
                                                                                        <option value="none">Advanced Database and DBMS</option>
                                                                                        <option value="none">Advanced Computer Architecture</option>
                                                                                        <option value="none">Operating Systems I</option>
                                                                                        <option value="none">Operating Systems II</option>
                                                                                        <option value="none">Telecommunications</option>
                                                                                        <option value="none">Human Computer Interaction</option>
                                                                                        <option value="none">Systems and Networks Administration</option>
                                                                                        <option value="none">Distributed Systems</option>
                                                                                        <option value="none">Compliation</option> --}}
                                                                                    </select>
                                                                                    
                                                                                </div>
                                                                                <div class="form_control">
                                                                                    <label for="position">Position:</label>
                                                                                    <select name="position" id="position" >
                                                                                        <option value=""></option>
                                                                                        @foreach($position as $pst)
                                                                                        <option value="{{ $pst['id'] }}">{{ $pst['status']}} {{ $pst['type'] }}</option>
                                                                                        @endforeach
                                                                                        {{-- <option value="none">Head department</option>
                                                                                        <option value="none">Vice department</option>
                                                                                        <option value="none">Professor</option>
                                                                                        <option value="none">Lecturer</option>
                                                                                        <option value="none">Secretary</option> --}}
                                                                                    </select>
                                                                                        
                                                                                </div>
                                                                            </div>

                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="main_salary">Main salary:</label>
                                                                                        <select name="main_salary" id="main_salary">
                                                                                            <option value=""></option>
                                                                                            @foreach($main_salary as $ms)
                                                                                            <option value="{{ $ms['id'] }}"> {{ $ms['amount'] }}</option>
                                                                                            @endforeach    
                                                                                            {{-- <option value=""></option>
                                                                                            <option value=""></option> --}}
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                        <label for="hour_salary">Hour salary:</label>
                                                                                        <select name="hour_salary" id="hour_salary">
                                                                                            <option value=""></option>
                                                                                            @foreach($hour_salary as $hs)
                                                                                            <option value="{{ $hs['id'] }}"> {{ $hs['amount'] }}</option>
                                                                                            @endforeach    
                                                                                            {{-- <option value=""></option>
                                                                                            <option value=""></option> --}}
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="email">Email:</label>
                                                                                        <input type="email" name="email" id="email" >
                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                        <label for="phone">Phone:</label>
                                                                                        <input type="number" name="phone" id="phone" >
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form_control">
                                                                                    <label for="sDate">Start Date:</label>
                                                                                    <input type="date" name="start_date" id="sDate" required>
                                                                                </div>
                                                                            <footer class="popupFooter">
                                                                                <button form="myForm" type="submit" class="submitBtn">Submit</button>
                                                                             </footer>

                                                                        </form>
                                                                     </div>
                                                                </div>

                                                            </div>

                                                            <script src="APP-JS/Employee.js"></script>

                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                        </div>
                        <!-- /. PAGE INNER  -->
                </div>
            </div>
        </div>
    </div>

</div>