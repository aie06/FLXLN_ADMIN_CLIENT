
        <!-- Sidebar  -->
        <nav id="sidebar">

            <ul >
            <li class="brand">
                    <a href="dashboard.php"   >
                    <span class="icon"><i class="icons fas fa-globe"></i></span>
                    <span class="title">FLUXLINE</span>
                    </a>
                
            </li>
            <li>
                    <a href="dashboard.php"   >
                    <span class="icon"><i class="icons fas fa-home"></i></i></span>
                    <span class="title">Dashboard</span>
                    </a>
                
                </li>

                <li>
                    <a href="#usersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span class="icon"><i class="icons fas fa-user"></i></span>
                    <span class="title">Manage Users</span>
                    </a>
                    <ul class="collapse list-unstyled" id="usersSubmenu">
                        <li>
                            <a href="usersView2.php">All Users</a>
                        </li>
                        <li>
                            <a href="Users.php">Add Users</a>
                        </li>
                    </ul>
                </li>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <span class="icon"><i class="icons fas fa-building"></i></span>
                    <span class="title">Company</span>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="CompanyDetails.php">Company Details</a>
                        </li>
                      
                    </ul>
                </li>

                <li>
                    <a href="#businessSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span class="icon"><i class="icons fas fa-briefcase"></i></span>
                    <span class="title">Business Associate</span>
                    </a>
                    <ul class="collapse list-unstyled" id="businessSubmenu">
                        <li>
                            <a href="BusinessAsso.php">Add New</a>
                        </li>
                        <li>
                            <a href="BusinessAssoView.php">View Details</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#productsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span class="icon"><i class=" icons fas fa-shopping-cart"></i></span>
                    <span class="title">Products</span>
                    </a>
                    <ul class="collapse list-unstyled" id="productsSubmenu">
                        <li>
                            <a href="Products.php">Add New</a>
                        </li>
                        <li>
                            <a href="ProductsView.php">View Details</a>
                        </li>  
                    </ul>
                </li>

                <li>
                    <a href="#SalesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span class="icon"><i class="icons fas fa-chart-bar"></i></span>
                    <span class="title">Sales</span>
                    </a>
                    <ul class="collapse list-unstyled" id="SalesSubmenu">
                        <li>
                            <a href="SalesQuotationView.php">Sales Quotation</a>
                        </li>
                      
                        <li>
                            <a href="SalesView.php">Sales Order</a>
                        </li>
                        <li>
                            <a href="SalesInvoiceView.php">Sales Invoice</a>
                        </li> 
                    </ul>
                </li>

                <li>
                    <a href="#purchaseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span class="icon"><i class="icons fas fa-money-check"></i></span>
                    <span class="title">Purchase</span>
                    </a>
                    <ul class="collapse list-unstyled" id="purchaseSubmenu">
                        <li>
                            <a href="PurchaseOrderView.php">Purchase Order</a>
                        </li>
                       
                    </ul>
                </li>

                <li>
                    <a href="#ReportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span class="icon"><i class="icons fas fa-clipboard-list"></i></span>
                    <span class="title">Reports</span>
                    </a>
                    <ul class="collapse list-unstyled" id="ReportsSubmenu">
                        <li>
                            <a href="SalesReport.php">Sales Reports</a>
                        </li>
                        <li>
                            <a href="PurchaseReports.php">Purchase Reports</a>
                        </li> 
                    </ul>
                </li>

                    <li>
                    <a href="register.php">
                    <span class="icon"><i class="icons fas fa-project-diagram"></i></span>
                    <span class="title">Forecast</span>
                    </a>
                    </li>   
                </ul>   
        </nav>

 <!-- Toggle Button  -->
        <div class="main">
            <div class="topbar">
                    <div class="toggle">
                    <i class="tog fas fa-bars"></i>
                    </div>
                 <!-- Search Bar  -->
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search Here">
                            <i class="pic fas fa-search"></i>
                        </label>
                    
                    </div>
                       <!-- User Image  -->
                  
                    <div class="logout">
                        <div class="user">
                            <img src="icon.jpg" alt="">   
                        </div>  
                       <!-- Notification Button  -->
                       <div class="notif-btn">
                            <a  class="button "href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class=" fas fa-bell"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="login.php">Notification here</a>       
                            </div>   
                        </div>
                         <!-- Logout Button  -->
                         <div class="logout-btn">
                            <a  class="button "href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class=" log-icon fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="login.php">Log out</a>       
                            </div> 
                        </div>   
                        
                    </div>
               
            </div>
       
         
        

      
          


