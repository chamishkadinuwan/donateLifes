<html lang="en">

<head>
    <title>Organ Form</title>
    <?php include("./header.php"); ?>
</head>

<body style="background-image: url(Images/BGPic.jpg); background-size: cover;" class=" m-0 border-0">

    <!-- Header -->
    <div class="container-fluid flex-wrap bg-light p-0 mb-4 col-md-12">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-3 container-fluid ">
            <div class="container p-0 m-0">
                <div class="row">
                    <div class="col-md-1 ">
                        <a href="HomePage.php"
                            class="d-flex justify-content-center mb- mb-md-0 me-md-auto text-dark text-decoration-none">
                            <img src="images/Logo.png" alt="" width="100" class="">
                        </a>
                    </div>

                    <div class="col-md-5"></div>

                    <div class="col-md-4">
                        <ul class=" nav nav-pills flex-wrap justify-content-center">
                            <li class="nav-item"><a href="HomePage.php" class="ps-2 nav-link none"
                                    aria-current="#">Home</a>
                            </li>
                            <li class="nav-item"><a href="OrganInfo.php" class="nav-link none">Organ Info</a></li>
                            <li class="nav-item"><a href="HospitalInfo.php" class="nav-link none">Hospital Info</a>
                            </li>
                            <li class="nav-item"><a href="BasicInstruction.php" class="nav-link none">Instruction</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2">
                        <div class="d-flex flex-wrap justify-content-center">
                            <a href="Login.php" class="nav-link none">
                                <button type="button" class="btn btn-login me-2" text-decoration-none>Login</button>
                            </a>
                            <a href="GetStarted.php" class="nav-link none">
                                <button type="button" class="btn btn-signup me-2" text-decoration-none>Signup</button>
                            </a>
                            <!--</div>-->
                        </div>
                    </div>

                </div>
        </header>
    </div>



    <!--Beneficiary form-->
    <div class="d-flex justify-content-center pt-3 pb-0 mb-0 red mt-3 h1"> Organ Form</div>
    <div class="container-fluid card beneficiaryform mt-4 w-50">
        <div class="container pt-0 pb-0 my-1 text-white ">
            <div class="form-group">
                <form action="./database/function.php" method="post">
                    <!--Name & Telephone-->
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM auth_beneficiary WHERE email='" . $_SESSION["user_email"] . "'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                        <div class="w-50 input-group flex-nowrap form-group col-md-6  pt-3 ">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" class="form-control" name="fname" placeholder="Full Name" id="fname"
                                disabled value="<?php echo $row["name"]; ?>">
                        </div>
                        <div class="w-50 input-group flex-nowrap form-group col-md-6 pt-3 ">
                            <span class="input-group-text">
                            <i class="bi bi-person-fill"></i>                            </span>
                            <select class="text-center form-control" name="DonorType" placeholder="Donor Type"
                                id="DonorType" required>
                                <option value="registered">Registered</option>
                                <option value="unregistered">unregistered</option>
                                                                
                            </select>
                        </div>
                    </div>

                    <!-- NIC & DOB-->
                    <div class=" row ">
                        <div class=" w-50 input-group flex-nowrap form-group col-md-6 pt-3 ">
                            <span class=" input-group-text">
                                <i class="bi bi-person-badge-fill"></i>
                            </span>
                            <input type="Text" class="form-control" name="NIC" placeholder="NIC" id="nic" required>
                        </div>
                        <div class="w-50 input-group flex-nowrap form-group col-md-6 pt-3 ">
                            <span class="input-group-text">
                                <i class="bi bi-droplet-fill"></i>
                            </span>
                            <select class="text-center form-control" name="OrganType" placeholder="Organ Type"
                                id="OrgaType" required>
                                <option value="Liver">Liver</option>
                                <option value="Heart">Heart</option>
                                <option value="Lung">Lung</option>
                                <option value="Kidney">Kidney</option>
                                <option value="Pancreas">Pancreas</option>
                                
                            </select>
                        </div>
                    </div>

                    <!--Gender & Blood Broup-->
                    <div class="row">
                        <div class="w-50 input-group flex-nowrap form-group col-md-6  pt-3 ">
                            <span class="input-group-text">
                                <i class="fi fi-sr-venus-mars"></i>
                            </span>
                            <div class="form-control">
                                <input type="radio" value="Male" name="gender" placeholder="Male"> Male
                                <input type="radio" value="Female" name="gender" placeholder="Female"> Female
                            </div>
                        </div>


                        <div class="w-50 input-group flex-nowrap form-group col-md-6 pt-3 ">
                            <span class="input-group-text">
                                <i class="bi bi-droplet-fill"></i>
                            </span>
                            <select class="text-center form-control" name="BloodGroup" placeholder="Blood Group"
                                id="BloodGroup" required>
                                <option value="Liver">O+</option>
                                <option value="Heart">O-</option>
                                <option value="Lung">A+</option>
                                <option value="Kidney">A-</option>
                                <option value="Intestine">B+</option>
                                <option value="">B-</option>
                                <option value="">AB+</option>
                                <option value="">AB-</option>
                            </select>
                        </div>



                    </div>


                                        <!-- Comment -->
                                        <div class="row">
                        <div class="w-20 input-group flex-nowrap form-group  col-md-6  pt-3 ">
                            <span class="input-group-text">
                                <i class="fi fi-sr-comment-alt"></i>
                            </span>
                            <textarea placeholder="Comments" name="comments" class="form-control"
                                id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                    </div>
                    <!-- Clear & Submit Button -->
                    <div class="row ">

                        <div class="form-group col-md-6 pt-3">
                            <div class="container w-50 p-0 d-flex flex-wrap justify-content-center">
                                <button type="reset" class="btn form1">Cancel</button>
                            </div>
                        </div>

                        <div class="form-group col-md-6 pt-3 ">
                            <div class="container w-50 p-0 d-flex flex-wrap justify-content-center">
                                <button type="submit" class="btn form2" name="b_fill_form">Submit</button>
                            </div>
                        </div>

                    </div>




                </form>
            </div>
        </div>
    </div>











    <!-- Footer -->
    <div class="container-fluid">
        <footer class="row flex-wrap row-cols-1 row-cols-sm-2 row-cols-md-3 pt-3 mt-5 px-5 border-top footer">

            <div class="col mb-3 pt-2 ps-5">
                <ul class="nav flex-column">

                    <li class="nav-item mb-3">
                        <a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> UOC, Faculty of Technology</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> +94 77 1234 567</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg> organlife@gmail.com
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col mb-3 ps-5">
                <ul class="nav flex-column">
                    <h6>Quick Links</h6>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>

                </ul>
            </div>

            <div class="col ps-5 pt-3">
                <a href="/"
                    class="d-flex align-items-center mb-3 link-dark text-decoration-none d-flex align-items-center justify-content-center">
                    <img src="Images/Logo.png" class="bi" height="100" style="mix-blend-mode: luminosity;">
                </a>

            </div>

        </footer>
    </div>

</body>

</html>