<div class="container-fluid flex-wrap bg-light p-0 mb-4 col-md-12">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-3 container-fluid ">
        <div class="container p-0 m-0">
            <div class="row">
                <div class="col-md-1 ">
                    <a href="index.php"
                        class="d-flex justify-content-center mb- mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img src="images/Logo.png" alt="" width="100" class="">
                    </a>
                </div>

                <div class="col-md-5"></div>

                <div class="col-md-4">
                    <ul class=" nav nav-pills flex-wrap justify-content-end">
                        <li class="nav-item"><a href="index.php" class="ps-2 nav-link none" aria-current="#">Home</a>
                        </li>
                        <li class="nav-item"><a href="OrganInfo.php" class="nav-link none">Organ Info</a></li>
                        
                        <li class="nav-item"><a href="BasicInstruction.php" class="nav-link none">Instruction</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <div class="d-flex flex-wrap justify-content-center">
                        <?php
                        if (array_key_exists("user_email", $_SESSION)) {
                        ?>

                        <a href="./database/logout.php" class="nav-link none">
                            <button type="button" class="btn btn-signup me-2" text-decoration-none>Logout</button>
                        </a>

                        <?php } else { ?>
                        <a href="GetStarted.php" class="nav-link none">
                            <button type="button" class="btn btn-signup me-2" text-decoration-none>Authenticate</button>
                        </a>
                        <?php   }
                        ?>



                    </div>
                </div>

            </div>
    </header>
</div>