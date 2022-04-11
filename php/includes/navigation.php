<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<div id="header">
    <div class="container">
        <div class="navbar green navbar-default yamm">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="" /></a>
            </div>
            <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                <ul class="nav green navbar-nav">
                    <li><a href="index.php" class="dropdown-toggle <?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="aboutus.php" class="dropdown-toggle <?= ($activePage == 'aboutus') ? 'active' : ''; ?>">About Us</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($activePage == 'realestate' ||
                                                                $activePage == 'facilitymanagement' ||
                                                                $activePage == 'brokerage' ||
                                                                $activePage == 'advisory') ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="realestate.php">Real Estate Development</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="facilitymanagement.php">Facilities Management</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="brokerage.php">Brokerage</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="advisory.php">Real Estate Advisory</a>
                        </div>
                    </li>

                    <!-- <li><a href="listings.php" class="dropdown-toggle">Listing</a></li>
                    <li><a href="gallery.php" class="dropdown-toggle">Gallery</a></li> -->
                    <li><a href="properties.php" class="dropdown-toggle <?= ($activePage == 'properties') ? 'active' : ''; ?>">Properties</a></li>
                    <li><a href="team.php" class="dropdown-toggle <?= ($activePage == 'team') ? 'active' : ''; ?>">Team</a></li>
                    <li><a href="contact.php" class="dropdown-toggle <?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end menu-->
<div class="clearfix"></div>