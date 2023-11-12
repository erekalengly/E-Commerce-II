<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="index.css"> -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Employee</title>

	<link rel="stylesheet" type="text/css" href="css/Employee/style.css">
    <link rel="stylesheet" href="css/Employee/Employee-t.css">
    <link rel="stylesheet" href="delete.css">

     <!--Font Awesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    <style>
        header .addMemberBtn button, .popup header .close, .popup footer .submitBtn{
            padding: 9px 14px;
            color: white;
            background: transparent;
            font-size: 16px;
            cursor: pointer;
            pointer-events: auto;
            outline: none;
            border: 1px solid var(--dark6);
            background-color: #428bca;
            border-color: #357ebd;
            border-radius: 5px;
        }
        .popup-f {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            display: flex;
            justify-content:center ;!important
            align-items: center;!important
            display: none;
        
           
          }
        .pop{
            border-radius: 5px;
            box-shadow: 3px 3px 20px rgba(0,0,0,0.3);
            background:#f2f2f2;
            transition: 0.4s;
            user-select: none;
            transform: scale(0.7);
            width: 560px;
            position: absolute;
            left: 40%;
            top: 50%
            transform: translate(-50%, -50%)
        }
        .pop header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--dark7);
            padding: 10px 20px;
            
        }
        .pop header .close{
            font-size: 30px;
            font-weight: 300;
            padding: 0 15px;
            color: white;
            background-color: #428bca;
        }
        .pop header .close:hover, .pop footer .submitBtn:hover{
            border-color: var(--dark7);
            transition: 0.3s;
        }
        .pop footer{
            border-top: 1px solid var(--dark7);
            padding: 12px 20px;
            text-align: right;
        }
        .pop form{
            padding: 10px 20px;
            display: flex;
            align-items: flex-start;
        }
        form .inputField .name,
        form .inputField .ageCityField,
        form .inputField .postSalary{
         display: flex;
        justify-content: space-between;
         gap: 15px;
        }
        
        form .inputField .name input,
        form .inputField .ageCityField input,
        form .inputField .postSalary input{
         width: 200px;
        }
        .inputField .form_con{
            margin: 10px 0;
        }
        .inputField .form_con label{
            display: block;
            color: var(--dark8);
            margin-bottom: 5px;
        }
        .name .form_con input{
            padding: 10px;
            border: 1px solid var(--dark6);
            color: var(--dark8);
            background: white;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
            width: 220px;
        }
        .form_con input:focus,
        .form_con input:valid{
         border-color: var(--dark7);
        }
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button{
        display: none;
        }
        .active{
            transform: scale(1);
            opacity: 1;
            visibility: visible;
        }
        .name select{
            padding: 10px;
            border: 1px solid var(--dark6);
            color: var(--dark8);
            background: white;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
            width: 220px;
        }

        .position-view select{
            padding: 10px;
            border: 1px solid var(--dark6);
            color: var(--dark8);
            background: white;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
            width: 450px;

        }


    </style>
    {{-- style-edit --}}
        <style>
            header .addMemberBtn-edit button, .popup-edit header .closeBtn-edit, .popup-edit footer .submitBtn-edit{
                padding: 9px 14px;
                color: white;
                background: transparent;
                font-size: 16px;
                cursor: pointer;
                pointer-events: auto;
                outline: none;
                border: 1px solid var(--dark6);
                background-color: #428bca;
                border-color: #357ebd;
                border-radius: 5px;
            }
            .popup-form-edit{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.6);
                display: none;
                justify-content:center ;
                align-items: center;
            
               
              }
            .popup-edit{
                border-radius: 5px;
                box-shadow: 3px 3px 20px rgba(0,0,0,0.3);
                background:#f2f2f2;
                transition: 0.4s;
                user-select: none;
                transform: scale(0.7);
    
            }
            .popup-edit header{
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid var(--dark7);
                padding: 10px 20px;
                
            }
            .popup-edit header .closeBtn-edit{
                font-size: 30px;
                font-weight: 300;
                padding: 0 15px;
                color: white;
                background-color: #428bca;
            }
            .popup-edit header .closeBtn:hover, .popup-edit footer .submitBtn-edit:hover{
                border-color: var(--dark7);
                transition: 0.3s;
            }
            .popup-edit footer{
                border-top: 1px solid var(--dark7);
                padding: 12px 20px;
                text-align: right;
            }
            .popup-edit form{
                padding: 10px 20px;
                display: flex;
                align-items: flex-start;
            }
            form .inputFieldContainer-edit .nameField-edit,
            form .inputFieldContainer-edit .ageCityField-edit,
            form .inputFieldContainer-edit .postSalary-edit{
             display: flex;
            justify-content: space-between;
             gap: 15px;
            }
            
            form .inputFieldContainer-edit .nameField-edit input,
            form .inputFieldContainer-edit .ageCityField-edit input,
            form .inputFieldContainer-edit .postSalary-edit input{
             width: 200px;
            }
            .inputFieldContainer-edit .form_control-edit{
                margin: 10px 0;
            }
            .inputFieldContainer-edit .form_control-edit label{
                display: block;
                color: var(--dark8);
                margin-bottom: 5px;
            }
            .form_control-edit input{
                padding: 10px;
                border: 1px solid var(--dark6);
                color: var(--dark8);
                background: white;
                border-radius: 5px;
                outline: none;
                transition: 0.3s;
                width: 100%;
            }
            .form_control-edit input:focus,
            .form_control-edit input:valid{
             border-color: var(--dark7);
            }
            input::-webkit-inner-spin-button-edit,
            input::-webkit-outer-spin-button-edit{
            display: none;
            }
            .active{
                transform: scale(1);
                opacity: 1;
                visibility: visible;
            }
            select{
                padding: 10px;
                border: 1px solid var(--dark6);
                color: var(--dark8);
                background: white;
                border-radius: 5px;
                outline: none;
                transition: 0.3s;
                width: 220px;
            }
            #e-lastname{
                padding: 10px;
                border: 1px solid var(--dark6);
                color: var(--dark8);
                background: white;
                border-radius: 5px;
                outline: none;
                transition: 0.3s;
                width: 220px;
            }

            .position-edit select{
                padding: 10px;
                border: 1px solid var(--dark6);
                color: var(--dark8);
                background: white;
                border-radius: 5px;
                outline: none;
                transition: 0.3s;
                width: 450px;
    
            }
            .email-edit input{
                padding: 10px;
                border: 1px solid var(--dark6);
                color: var(--dark8);
                background: white;
                border-radius: 5px;
                outline: none;
                transition: 0.3s;
                width: 450px;
    
            }

    
    
        </style>
    


</head>
<body>
  
  <!-- ** -->

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
                                                                        @foreach ( $employees1 as $employee1 )

                                                                        <tr>
                                                                            <td>{{$employee1['id']}}</td>
                                                                            <td>{{$employee1['name']}}</td>
                                                                            <td>{{$employee1['gender']}}</td>
                                                                            <td>{{$employee1['department_name']}}</td>
                                                                            <td>{{$employee1['course_name']}}</td>
                                                                            <td>{{$employee1['status']}} {{$employee1['type']}}</td>
                                                                            <td>{{$employee1['email']}}</td>
                                                                            <td>{{$employee1['phone']}}</td>
                                                                            <td>
                                                                            <button type="button" onclick="edituser(this)" class="btn btn-primary edit">Edit</button>
                                                                            {{-- <button class="btn btn-primary edit" >Edit</button> --}}
                                                                            <button class="btn btn-danger " onclick="deleteuser({{ $employee1['id'] }})" >Delete</button>
                                                                            {{-- <a href="{{ url('delete_emp?emp_id='.$employee1['id']) }}"><button class="btn btn-danger delete">Delete</button></a> --}}
                                                                            </td>
                                                                        </tr>


                                                                    @endforeach
                                                                        @foreach ( $employees as $employee1 )

                                                                        <tr>
                                                                            <td>{{$employee1['id']}}</td>
                                                                            <td>{{$employee1['name']}}</td>
                                                                            <td>{{$employee1['gender']}}</td>
                                                                            <td>{{$employee1['department_name']}}</td>
                                                                            <td>Unknown</td>
                                                                            <td>{{$employee1['type']}}</td>
                                                                            <td>{{$employee1['email']}}</td>
                                                                            <td>{{$employee1['phone']}}</td>
                                                                            <td>
                                                                            {{-- <button type="button" wire:click"btn btn-primary newUser" onclick="">View</button> --}}
                                                                            <button onclick="edituser(this)" class="btn btn-primary edit" >Edit</button>
                                                                            <button class="btn btn-danger " onclick="deleteuser({{ $employee1['id'] }})" >Delete</button>
                                                                            {{-- <a href="{{ url('delete_emp?emp_id='.$employee1['id']) }}"><button class="btn btn-danger delete">Delete</button></a> --}}
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
                                                                        <form action="{{url('update_employee')}}" id="myForm" method="POST">
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

                                                                                <!-- <div class="form_control">
                                                                                    <label for="sDate">Start Date:</label>
                                                                                    <input type="date" name="start_date" id="sDate" required>
                                                                                </div> -->
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
<!--Popup Form-->
  
    <!-- *Delete* -->
<div class="content-delete">
    <div class="container-delete">
        <div>
            <img class="delete-pic" src="delete_pic.jpg" alt="">
        </div>
        <div>
            <p class="you">Are you sure?</p>
        </div>
        <div>
            <button class="cancel btn btn-primary">Cancel</button>
            <button class="btn btn-danger confirm-delete">Delete</button>
        </div>
   </div>
  </div>

{{-- edit --}}
<div class="popup-form-edit" id="pop-up-edit">
    <div class="popup-edit">
        <header>
            <h2 class="modalTitle-edit">Edit Information</h2>
            <button class="closeBtn-edit">&times;</button>
         </header>
    <div class="body-edit">
        <form action="{{url('update_employee')}}" id="myForm-edit" method="POST">
            @csrf
            <div>
                <label>
                    <div type="file" name="">
                    <i class="fa-solid fa-plus"></i>
                </label>
            </div>
            <div class="inputFieldContainer-edit">
                                                        
                <input type="text" name="employee_id" id="employee_id" hidden>
                <div class="nameField-edit">
                    <div class="form_control-edit">
                        <label for="fName">First Name:</label>
                        <input type="text" name="firstname" id="e-firstname">
                    </div>
                    <div class="form_control-edit">
                        <label for="lName">Last Name:</label>
                        <input type="text" name="lastname" id="e-lastname">
                    </div>
                </div>
                <div class="nameField-edit">
                    <div class="form_control-edit">
                        <label for="gender">Gender:</label>
                        <input type="text" id="e-gender" name="gender">
                        {{-- <select name="gender" id="e-gender" >
                            <option value="none"></option>
                            <option value="none">F</option>
                            <option value="none">M</option>
                        </select> --}}
                        <!-- <input type="text" name="gender"> -->
                    </div>

                    <div class="form_control-edit">
                        <label for="department">Department:</label>
                        <select name="department" id="e-department" >
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
                        <!-- <input type="text" name="dept"> -->
                    </div>
                </div>
                <div class="nameField-edit">
                    <div class="form_control-edit">
                        <div class="form_control-edit">
                            <label for="phone">Phone:</label>
                            <input type="number" name="phone" id="e-phone" >
                        </div>
                        <!-- <input type="text" name="degree"> -->
                    </div>

                    <div class="form_control-edit">
                        <label for="course">Course:</label>
                        <select name="course" id="e-course" >
                            <option value=""></option>
                            @foreach($course as $cs)
                            <option value="{{ $cs['id'] }}">{{ $cs['name']}}</option>
                         @endforeach
                            {{-- <option value="none">Network I</option>
                            <option value="none">Network II</option>
                            <option value="none">Telecommunications</option>
                            <option value="none">Internet Programming I</option>
                            <option value="none">Internet Programming II</option>
                            <option value="none">Sotfware Engineering I</option>
                            <option value="none">Sotfware Engineering II</option>
                            <option value="none">Advanced Database and DBMS</option>
                            <option value="none">Advanced Computer Architecture</option>
                            <option value="none">Operating Systems I</option>
                            <option value="none">Operating Systems II</option>
                            <option value="none">Human Computer Interaction</option>
                            <option value="none">Systems and Networks Administration</option>
                            <option value="none">Distributed Systems</option>
                            <option value="none">Compliation</option> --}}
                        </select>
                    </div>
                </div>
                <div class="form_control-edit email-edit" style="width:95%;">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="e-email">
                </div>
                <div class="form_control-edit position-edit" style="width:95%;">
                    <label for="position">Position:</label>
                    <select name="position" id="e-position" >
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
            <footer class="popupFooter-edit">
                <button type="submit" class="submitBtn-edit">Update</button>
             </footer>
        </form>
     
    </div>    
    </div>
    </div>
   
</div>

{{-- end --}}

<script>
    var sideBarIsOpen = true;

    toggleBtn.addEventListener( 'click', (event)  => {
        event.preventDefault();

        if(sideBarIsOpen){
            dashboard_sidebar.style.width = '10%';
            dashboard_sidebar.style.transition = '0.3s all';
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.fontSize = '60px';


            menuIcons = document.getElementsByClassName('menuText');
            for (var i = 0; i < menuIcons.length; i++) {
                menuIcons[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sideBarIsOpen = false;
        } else {
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.fontSize = '80px';


            menuIcons = document.getElementsByClassName('menuText');
            for (var i = 0; i < menuIcons.length; i++) {
                menuIcons[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
            sideBarIsOpen = true;
        }

    });
    let pop_up2 = document.querySelector(".content-delete")
    let delete_button = document.querySelector(".delete")
    let cancel_button = document.querySelector(".cancel")
    let confirm_delete = document.querySelector(".confirm-delete")

    let pop_up3 = document.querySelector(".popup-f")
    let view_button = document.querySelector(".newUser")
    let close_button = document.querySelector(".close")
    // pop_up3.style.display = "none"

    let pop_up4 = document.querySelector('.popup-form-edit')
    // let edit_button = document.querySelector('#edit-button')
    let closeBtn_edit = document.querySelector('.closeBtn-edit')

    // view_button.onclick = () => {
    //         pop_up3.style.display = "block"
    //         // console.log("hi")
    //         close_button.onclick = () => pop_up3.style.display = "none"
    //       }
    function edituser(element){
        let pop_up4 = document.querySelector('.popup-form-edit')
        let closeBtn_edit = document.querySelector('.closeBtn-edit')
        

        let parent_element = element.parentNode.parentNode.querySelectorAll('td')
        let id = parent_element[0].innerHTML

        let name = parent_element[1].innerHTML
        let split_name = name.split(' ')
        let firstname = split_name[0]
        let lastname = split_name[1]

        let gender = parent_element[2].innerHTML
        let department = parent_element[3].innerHTML
        let course = parent_element[4].innerHTML
        let position = parent_element[5].innerHTML
        let email = parent_element[6].innerHTML
        let phone = parent_element[7].innerHTML
    
        let employee_id = document.querySelector('#employee_id')
        let e_firstname = document.querySelector('#e-firstname')
        let e_lastname = document.querySelector('#e-lastname')
        let e_gender = document.querySelector('#e-gender')
        let e_department = document.querySelector('#e-department')
        let e_course = document.querySelector('#e-course')
        let e_position = document.querySelector('#e-position')
        let e_email = document.querySelector('#e-email')
        let e_phone = document.querySelector('#e-phone')
        
        employee_id.value = id
        e_firstname.value = firstname
        e_lastname.value = lastname
        e_email.value = email
        e_phone.value = phone
        e_gender.value = gender
        // e_gender.querySelectorAll('option').forEach((op, index) => {
        //     if(op.innerHTML === gender){
        //         e_gender.selectedIndex = index;
        //     } 
        // })
        e_department.querySelectorAll('option').forEach((op, index) => {
            if(op.innerHTML === department){
                e_department.selectedIndex = index;
            } 
        })
        e_course.querySelectorAll('option').forEach((op, index) => {
            if(op.innerHTML === course){
                e_course.selectedIndex = index;
            } 
        })
        e_position.querySelectorAll('option').forEach((op, index) => {
            if(op.innerHTML === position){
                e_position.selectedIndex = index;
            } 
        })
        

        pop_up4.style.display = "flex"
        closeBtn_edit.onclick = () => pop_up4.style.display = "none"
    }


    // edit_button.onclick = () => {
    //     console.log("hi")
    //     pop_up4.style.display = "flex"
    //     closeBtn_edit.onclick = () => pop_up4.style.display = "none"
    // }

    // function updateuser(emp_id){
    //     pop_up3.style.display = "block"

    // }


    function deleteuser(emp_id){
        pop_up2.style.display = "block"
        confirm_delete.onclick = () => window.location.href = "/delete_emp?emp_id=" + emp_id
        console.log(emp_id)
        cancel_button.onclick = () => {
            pop_up2.style.display = "none"
          }

    }

        //     confirm_delete.onclick = () => {
        //         console.log(delete_button.value)
        //     }

        //   delete_button.onclick = () => {
        //     pop_up2.style.display = "block"
        //     // console.log("hi")
        //   }
          cancel_button.onclick = () => {
            pop_up2.style.display = "none"
          }



</script>
</body>
</html>
