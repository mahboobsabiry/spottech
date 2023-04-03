<?php
require_once './layout/header.php';
require_once './db/connection.php';

if (isset($_GET['portfolio_id'])) {
    $sql = "SELECT * FROM portfolios JOIN portfolios_images ON portfolios.id = portfolios_images.portfolio_id WHERE portfolios.id = " . $_GET['portfolio_id'];
    $result = $conn->query($sql);
    $result1 = $conn->query($sql);

    if($result1->num_rows > 0)
    $result_assoc = $result1->fetch_all();
}
?>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
                <h2>Portfolio Details</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <?php
                                if (isset($_GET['portfolio_id'])) {
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <div class="swiper-slide">
                                                <img src="assets/img/portfolio/<?php echo $row['path']; ?>" alt="">
                                            </div>
                                        <?php }
                                    }
                                } ?>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: <?php  echo $result_assoc[0][4]; ?></li>
                                <li><strong>Client</strong>: <?php  echo $result_assoc[0][5]; ?></li>
                                <li><strong>Project date</strong>: <?php  echo $result_assoc[0][6]; ?></li>
                                <li><strong>Project URL</strong>: <a target="_blank" href="<?php  echo $result_assoc[0][7]; ?>"><?php  echo $result_assoc[0][7]; ?></a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2><?php  echo $result_assoc[0][2]; ?></h2>
                            <p>
                                <?php  echo $result_assoc[0][3]; ?>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

<?php
require_once './layout/footer.php'
?>