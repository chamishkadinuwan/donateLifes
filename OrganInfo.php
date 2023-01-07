<html lang="en">

<head>
    <title>Organ Information</title>
    <?php include("./header.php"); ?>
</head>

<body class="m-0 border-0">

    <?php include("./navigation.php"); ?>



    <!-- OrganInformation -->
    <div class="d-flex container justify-content-center pt-4 pb-2 mb-4 red mt-3 h1"> Organ Information </div>

    <!-- Search bar -->
    <div class="container search input-group-text input-group w-40 p-0">
        <span class="ps-3" id="basic-addon1">
            <i class="fi fi-bs-search"></i>
        </span>
        <input type="text" class="search size" placeholder="Search Here" aria-label="Input group example"
            aria-describedby="basic-addon1" id="search_data">
    </div>

    <!-- Table -->
    <div class="container flex-wrap justify-content-center col-9 mt-4 py-1">
        <table>

            <tr class="thead">
                <td class="heart col-1 c-fst" scope="col"></td>
                <td class="col-1" scope="col-">Organ</td>
                <td class="col-3" scope="col">Organ Type</td>
                <td class="c-lst col-6" scope="col">Organ Details</td>
            </tr>

            <tr>
                <td class="heart c-fst" scope="row"><i class="bi bi-heart-fill"></i></th>
                <td>Pancreas</td>
                <td class=" c-orgt">Digestive</td>
                <td class="tdetails c-lst">The liver is the largest solid organ in the body.It removes toxins from the
                    body's blood
                    supply,maintains healthy blood sugar levels,regulates blood clotting and performs hund -reds of
                    other vital functions.</td>
            </tr>

            <tr>
                <td class="heart c-fst" scope="row"><i class="bi bi-heart-fill"></i></th>
                <td>Pancreas</td>
                <td class=" c-orgt">Digestive</td>
                <td class="tdetails c-lst">The liver is the largest solid organ in the body.It removes toxins from the
                    body's blood
                    supply,maintains healthy blood sugar levels,regulates blood clotting and performs hund -reds of
                    other vital functions.</td>
            </tr>

            <tr>
                <td class="heart c-fst" scope="row"><i class="bi bi-heart-fill"></i></th>
                <td>Pancreas</td>
                <td class=" c-orgt">Digestive</td>
                <td class="tdetails c-lst">The liver is the largest solid organ in the body.It removes toxins from the
                    body's blood
                    supply,maintains healthy blood sugar levels,regulates blood clotting and performs hund -reds of
                    other vital functions.</td>
            </tr>
        </table>
    </div>


    <div class="container col-9 d-flex flex-wrap justify-content-end p-0">
        <a href="AvailableOfOrgan.php" class="nav-link none">
            <button class="btn form">Available Organ List</button>
        </a>
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
                    <li class="nav-item mb-3"><a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> +94 77 1234 567</a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link p-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                            organlife@gmail.com</a>
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