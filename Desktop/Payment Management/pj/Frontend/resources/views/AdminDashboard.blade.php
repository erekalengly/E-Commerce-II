
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Inventory Management System</title>
  <link rel="stylesheet" type="text/css" href="css/Admindashboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
     <!--Font Awesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link ref="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
    <style>
    .news{
        background-color: #fff;
    }
    </style>
    </head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">ITC</h3>
            <div class="dashboard_sidebar_user">
                <img src="Admin.png" alt="User image." id="userImage" />
                <span>Admin</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li class="menuActive">
                        <a href="{{url('Admindashboard')}}"><i class="fa fa-reorder"></i>&nbsp;&nbsp;<span class="menuText">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{url('Employee')}}"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;<span class="menuText">Employees</span></a>
                    </li>
                    <li >
                        <a href="{{url('LecturerPayment')}}"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<span class="menuText">Lecturer Payment</span></a>
                    </li>


</ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-bell"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-search"></i></a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <div class="content">
                        <div class="container">
                            <div>
                                <p class="p1">Admin Dashboard</p>
                            </div>
                             
                            <table class="table table-striped-columns"> 
                            <div class="Images card-body text-center" style="align-items: center;">
                                <img src="Admin.png" id="profileImage" alt="avatar"
                                class="rounded-circle img-fluid"/>
                            <div>
                               <br>
                                <br>
                             <div class="d-flex flex-column mb-3" id="Employees-table">
                                  <div class="card mb-4 news">
                                     <div class="card-body" style="justify-content:center;">
                                        <div class="row">
                                        <div class="col-sm-3"  class="p-2">
                                            <p class="mb-0" style="justify-content:center;">Username</p>
                                        </div>
                                        
                                        <div class="col-sm-9">
                                            
                                        </div>
                                        </div>
                                        <hr>
                                        <div class="row" class="p-2">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            
                                        </div>
                                     
                                     </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </table>
                    
                </div>
            </div>
</div>
            
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
</script>
</body>
</html>