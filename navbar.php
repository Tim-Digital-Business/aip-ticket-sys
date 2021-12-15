<?php
include_once('modal.php');
include_once 'inc/head.php'
?>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">Ticket System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/faq/faq.php">FAQ</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/tickets/ticket-list.php" tabindex="-1">Tickets</a>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#myModal" type="button">Ticket erfassen</button>
            </form>
            <!-- <i class="far fa-user-circle"></i> -->
            <div style="margin-left: 15px;">

                <a href="/login/profile.php">
                    <img src="/assets/account.svg" width="25" height="25"></a>
            </div>

        </div>
    </nav>
</body>