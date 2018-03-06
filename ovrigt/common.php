<?php
// ========================================================
// common.php
// Description: Use of header and footer
// Author: Lars Weingartner
// --------------------------------------------------------
// Error handling
// --------------------------------------------------------
 error_reporting(E_ALL);

// Common header
// ========================================================
$header = <<<HeaderText

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
			<img id="logo" src="#" alt="Loggo"> </a>
			
        <!-- Loggo med länk till index.html -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Säkerhet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Miljö</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>

            </ul>
            <form id="search" class="form-inline my-2 my-md-2">
                <!-- my = marginal top-bottom -->
                <input class="form-control mr-md-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-md-2" type="submit">Search</button>
            </form>
        </div>
    </nav>

HeaderText;

// --------------------------------------------------------
// Common footer
// ========================================================
$footer = <<<FooterText
<div id='footer'>
<pre>
	&copy; Lars Weingartner, 2018
</pre>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
FooterText;

?>
