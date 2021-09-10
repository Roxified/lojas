 <div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if($link== 1){echo 'active'; } ?>" href="index"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if($link== 2){echo 'active'; } ?>" href="#setCall" data-toggle="modal"><i class="fa fa-fw fa-user-circle"></i>Set Call </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($link== 3){echo 'active'; } ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-money-bill"></i> Payments </a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#addPay" data-toggle="modal">Add Payment Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 3){echo 'active'; } ?>" href="payType"> Manage Pay Type </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 3){echo 'active'; } ?>" href="payment?pay=0"> Payments </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link <?php if($link== 5){echo 'active'; } ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-file"></i> Journals </a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#addJournal" data-toggle="modal">Add Journal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="addArticle">Add Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 5){echo 'active'; } ?>" href="manageJournals">Manage Journals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 5){echo 'active'; } ?>" href="manageArticles">Manage Articles</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($link== 9){echo 'active'; } ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-file"></i> Publication Submission </a>
                        <div id="submenu-9" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#addSubCat" data-toggle="modal">Add Pub. Sub. Cat</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 9){echo 'active'; } ?>" href="submittedPub?suber=0">Submitted Publications</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($link== 6){echo 'active'; } ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Blog Post </a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="makePost">Add Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 6){echo 'active'; } ?>" href="managePosts">Manage Post</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link <?php if($link== 8){echo 'active'; } ?>" href="manageQuestions?forum=0"><i class="fa fa-fw fa-user-circle"></i>Forum </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link <?php if($link== 10){echo 'active'; } ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-fw fa-file"></i> Users </a>
                        <div id="submenu-10" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#addCat" data-toggle="modal">Add Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($link== 10){echo 'active'; } ?>" href="manageUsers">Manage Users</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if($link== 12){echo 'active'; } ?>" href="#"><i class="fa fa-fw fa-user-circle"></i>FAQ </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>