<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice V1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/pdf1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <section id="invoice">
        <div class="container my-5 py-5">
            <div class="text-center">
                <img src="images/logo_dark.png" alt="">
            </div>
            <div class="text-center border-top border-bottom my-5 py-3">
                <h2 class="display-5 fw-bold">Invoice V1 </h2>
                <p class="m-0">Invoice No: 12345</p>
                <p class="m-0">Invoice Date: 20 May, 2024</p>
            </div>

            <div class="d-md-flex justify-content-between">
                <div>
                    <p class="text-primary">Invoice To</p>
                    <h4>Roger Y. Will</h4>
                    <ul class="list-unstyled">
                        <li>XYZ Company</li>
                        <li>info@xyzcompany.com</li>
                        <li>123 Main Street</li>
                    </ul>
                </div>
                <div class="mt-5 mt-md-0">
                    <p class="text-primary">Invoice From</p>
                    <h4>William Peter</h4>
                    <ul class="list-unstyled">
                        <li>ABC Company</li>
                        <li>info@abccompany.com</li>
                        <li>456 Main Street</li>
                    </ul>
                </div>
            </div>

            <table class="table border my-5">
                <thead>
                    <tr class="bg-primary-subtle">
                        <th scope="col">No.</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Brand Designing</td>
                        <td>$350.00</td>
                        <td>2</td>
                        <td>$700.00</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Website Development</td>
                        <td>$250.00</td>
                        <td>1</td>
                        <td>$250.00</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Blog Writing</td>
                        <td>$100.00</td>
                        <td>4</td>
                        <td>$400.00</td>
                    </tr>
                    <th scope="row">4</th>
                    <td>Logo Designing</td>
                    <td>$350.00</td>
                    <td>2</td>
                    <td>$700.00</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Wordpress Theme Development</td>
                        <td>$250.00</td>
                        <td>2</td>
                        <td>$500.00</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Website Advertisement</td>
                        <td>$100.00</td>
                        <td>4</td>
                        <td>$400.00</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td class="">Sub-Total</td>
                        <td>$2,350.00</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td class="">TAX 20%</td>
                        <td>$470.00</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td class="text-primary fw-bold">Grand-Total</td>
                        <td class="text-primary fw-bold">$1,880.00</td>
                    </tr>
                </tbody>
            </table>

            <div class="d-md-flex justify-content-between my-5">
                <div>
                    <h5 class="fw-bold my-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><iconify-icon class="social-icon text-primary fs-5 me-2" icon="mdi:location"
                                style="vertical-align:text-bottom"></iconify-icon> 30 E Lake St, Chicago, USA</li>
                        <li><iconify-icon class="social-icon text-primary fs-5 me-2" icon="solar:phone-bold"
                                style="vertical-align:text-bottom"></iconify-icon> (510) 710-3464</li>
                        <li><iconify-icon class="social-icon text-primary fs-5 me-2" icon="ic:baseline-email"
                                style="vertical-align:text-bottom"></iconify-icon> info@worldcourse.com</li>
                    </ul>
                </div>
                <div>
                    <h5 class="fw-bold my-4">Payment Info</h5>
                    <ul class="list-unstyled">
                        <li><span class="fw-semibold">Account No: </span> 102 3345 56938</li>
                        <li><span class="fw-semibold">Account Name: </span> William Peter</li>
                        <li><span class="fw-semibold">Branch Name: </span> XYZ </li>

                    </ul>
                </div>


            </div>

            <div class="text-center my-5">
                <p class="text-muted"><span class="fw-semibold">NOTICE: </span> A finance charge of 1.5% will be made on
                    unpaid balances after 30 days.</p>
            </div>

            <div id="footer-bottom">
                <div class="container border-top">
                    <div class="row mt-3">
                        <div class="col-md-6 copyright">
                            <p>© 2024 Invoice. <a href="#" target="_blank"
                                    class="text-decoration-none text-black-50">Terms & Conditions</a> </p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p>Free HTML Template by: <a href="https://templatesjungle.com/" target="_blank"
                                    class="text-decoration-none text-black-50">
                                    TemplatesJungle</a> </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>
