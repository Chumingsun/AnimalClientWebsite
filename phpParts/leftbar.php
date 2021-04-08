<?
$filenameLink = basename($_SERVER['PHP_SELF']);
?>
<div class="app-sidebar sidebar-shadow bg-vicious-stance sidebar-text-light" style="margin:0px;padding:0px;">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <br>
                                <li>
                                    
                                        <h4 onclick="window.location = './dashboard.php';" style="text-align: center; background-color: #313539; padding: 10px; border-radius: 10px; color: white;cursor: pointer;">Admin Panel</h4>
                                </li>
                                <li>
                                    <a href="./dashboard.php" class="<?if($filenameLink=='dashboard.php'){echo 'mm-active';}?>">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="<?if($filenameLink=='spca_branches_search.php' || $filenameLink=='spca_branches_add.php' ||
                                $filenameLink=='spca_branches_details.php' ||
                                $filenameLink=='spca_branch_add_animal.php'||
                                $filenameLink=='spca_branches_animals_search.php'){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        SPCA Branches
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./spca_branches_add.php" class="<?if($filenameLink=='spca_branches_add.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                Add SPCA Branch
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./spca_branches_search.php" class="<?if($filenameLink=='spca_branches_search.php' || $filenameLink=='spca_branches_details.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View SPCA Branches
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./spca_branches_animals_search.php" class="<?if($filenameLink=='spca_branches_animals_search.php' || $filenameLink=='spca_branches_animals_search.php'){echo 'mm-active';}?>">Animals
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?if($filenameLink=='organizations_search.php' || $filenameLink=='organizations_add.php' ||
                                $filenameLink=='organizations_details.php' || $filenameLink=='organization_details.php'){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Organizations
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./organizations_add.php" class="<?if($filenameLink=='organizations_add.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                Add Organization
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./organizations_search.php" class="<?if($filenameLink=='organizations_search.php' || $filenameLink=='organizations_details.php' || $filenameLink=='organization_details.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View Organizations    
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                 <li class="<?if($filenameLink=='shelters_search.php' || $filenameLink=='shelters_add.php' ||
                                $filenameLink=='shelters_animals_search.php'||
                                $filenameLink=='shelter_animal_adopt_family.php'||
                                $filenameLink=='shelters_details.php'){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Shelters
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./shelters_add.php" class="<?if($filenameLink=='shelters_add.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                Add Shelter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./shelters_search.php" class="<?if($filenameLink=='shelters_search.php' || $filenameLink=='shelters_details.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View Shelters    
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./shelters_animals_search.php" class="<?if($filenameLink=='shelters_animals_search.php' || $filenameLink=='shelters_animals_search.php'||
                                $filenameLink=='shelter_animal_adopt_family.php'){echo 'mm-active';}?>">Shelter Animals
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?if($filenameLink=='donors_search.php' || $filenameLink=='donors_add.php'|| $filenameLink=='donor_details.php' ){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Donations
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./donors_add.php" class="<?if($filenameLink=='donors_add.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                Add Donation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./donors_search.php" class="<?if($filenameLink=='donors_search.php'|| $filenameLink=='donor_details.php' ){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View Donations    
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?if($filenameLink=='vet_search.php' || $filenameLink=='vet_add.php' ){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Vets
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./vet_add.php" class="<?if($filenameLink=='vet_add.php'){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                Initiate Vet Visit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./vet_search.php" class="<?if($filenameLink=='vet_search.php' ){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View Vet Visits    
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?if($filenameLink=='drivers_search.php' || $filenameLink=='drivers_add.php' ){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Drivers
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./drivers_add.php" class="<?if($filenameLink=='drivers_add.php'){echo 'mm-active';}?>">
                                               Add Driver
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./drivers_search.php" class="<?if($filenameLink=='drivers_search.php' ){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View Drivers
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?if($filenameLink=='employees_search.php' || $filenameLink=='employees_add.php' ){echo 'mm-active';}?>">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Employees
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="./employees_add.php" class="<?if($filenameLink=='employees_add.php'){echo 'mm-active';}?>">
                                               Add Employee
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./employees_search.php" class="<?if($filenameLink=='employees_search.php' ){echo 'mm-active';}?>">
                                                <i class="metismenu-icon"></i>
                                                View Employees
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div> 