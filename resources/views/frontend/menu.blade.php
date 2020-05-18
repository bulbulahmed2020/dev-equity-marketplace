<?php

$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>



<ul class="left hide-on-med-and-down">

							        	<li><a href="index.php" class="waves-effect waves-light <?= ($activePage == 'index') ? 'active':''; ?>">How it works</a></li>

							        	<!-- <li><a class="dropdown-trigger waves-effect waves-light" href="#!" data-target="dropdown1" data-beloworigin="true">Marketplace <i class="material-icons">arrow_drop_down</i></a></li> -->

							        	<li><a href="marketplace.php" class="dropdown-trigger waves-effect waves-light <?= ($activePage == 'marketplace') ? 'active':''; ?>">Marketplace &nbsp; <i class="material-icons">arrow_drop_down</i></a></li>

							            <li><a class="waves-effect waves-light <?= ($activePage == 'Knowledge') ? 'active':''; ?>" href="#!">Knowledge Center</a></li>

							            <li><a class="waves-effect waves-light <?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About Us</a></li>

							        </ul>

							        <ul class="right">

							        	<li>

											<a href="#" class="waves-effect waves-light btn uppercase btn-login"><span>Login</span></a>

										</li>

										<li>

											<a href="#modal1" class="waves-effect waves-light btn uppercase btn-signup modal-trigger"><span>Sign in</span></a>

										</li>

							        </ul>