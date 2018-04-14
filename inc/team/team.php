<?php
$string = file_get_contents("inc/team/team.json");
$json_a=json_decode($string,true);
echo '<section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-1.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>'.
                            $json_a[0]["name"].
                            '</h4>
                            <p>'.
                            $json_a[0]["desitgnation"].
                            '</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-2.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>'.
                            $json_a[1]["name"].
                            '</h4>
                            <p>'.
                            $json_a[1]["desitgnation"].
                            '</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-3.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>'.
                            $json_a[2]["name"].
                            '</h4>
                            <p>'.
                            $json_a[2]["desitgnation"].
                            '</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-4.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>'.
                            $json_a[3]["name"].
                            '</h4>
                            <p>'.
                            $json_a[3]["desitgnation"].
                            '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
    ?>