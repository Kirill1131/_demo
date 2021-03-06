<?php



?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>приложение ASP.NET</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/Site.css" rel="stylesheet" />
    <script src="Scripts/MyUtils.js"></script>
</head>
<body>
    <div class="c-header" id="header">
        <div class="c-header-container">
            <div class="c-header-app-name-box" id="c_header_app_name_box">
                <div class="flex-column-center">
                    <div id="PixelText" class="pixel-container"></div>
                </div>
            </div>
            <div class="c-header-nav">
                <ul class="nav c-navbar-nav">
                  <li><a href="#">Home</a> </li>
                  <li><a href="#">Antistress</a> </li>
                  <li><a href="#">Instruction</a> </li>
                  <li><a href="#">About</a> </li>
                  <li><a href="#">Contact</a> </li>
                </ul>
            </div>
            <!--


                -->
            <div class="c-header-signup-box" id="sign_up_box">
                <ul class="nav c-navbar-nav">
                  <li><a href="#">Sign Up</a></li>
                  <li><a href="#">Sign In</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container body-content">
        <div class="pseudo-fixed">
            <div class="pseudo bg-black">

            </div>
            <div class="pseudo bg-dark-img">

            </div>

            <div class="pseudo-fixed" style="overflow:hidden" id="cut_section">
                <div class="pseudo" style="overflow:hidden" id="scroll_bg">
                    <div class="pseudo">

                        <div class="pseudo-relative">
                            <div class="rotated-container" id="rotated_container">
                                <div class="pseudo-relative" id="canvas_container">
                                    <canvas id="bg_cvs" width="1500" height="1500"></canvas>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>


        <div id="relative_crutch_1">

        </div>
        <div class="big-section">


            <div class="pseudo bg-shadow">

            </div>
            <div class="big-section-content">
                <h1> Welcome to Quarda</h1>
                <p class="lead">Quarda is a web-platform where you can find various board games</p>
            </div>
            <!--p><a href="https://asp.net" class="btn btn-primary btn-lg">Learn more &raquo;</a></p-->
        </div>

        <!--div>
            id =
            @ViewBag.cookieId;
        </div>
        <div>
            name =
            @ViewBag.cookieName;
        </div-->
        <div id="relative_crutch_0">

        </div>
        <div class="bg-dark-blue-grad-90-100 " id="games_bar_section">
            <h1 class="white-text h1-type-1">Classic games</h1>
            <!--
            <h1 class="blue-transparent-text h1-type-1">Classic games</h1>
                bd-bottom-black-dashed
            -->
            <div class="games-bar" id="classic_games_bar">
                <!--
                <div class="games-bar-item">
                </div>



                <div class="games-bar-item">
                    <!--h2>Shogi</h2>
                    <h2>Chess</h2>
                    <div>
                        <object typeof="image/svg+xml" data="../Content/Media/Icons/Shogi_icon1.svg" class="svg-to-handle">
                        </object>
                    <h2>Checkers</h2>
                    </div
                    <!--
                    <img src="../Content/Media/Icons/Chess.png" alt="Chess" />
                    <img src="../Content/Media/Icons/Shogi.png" alt="Shogi" />
                    <img src="../Content/Media/Icons/Checkers.png" alt="Checkers" />

                    --
                </div>
                <div class="games-bar-item">
                </div>
                <div class="games-bar-item">
                    <canvas id="inputbox" style="width:200px;height:200px" width="31" height="31"></canvas>
                </div>
                <div class="games-bar-item" id="putbox">

                </div>
                    -->
            </div>

        </div>

        <div class="big-section">
            <div class="pseudo bg-shadow">

            </div>
            <div class="pseudo" id="appear_anim_bg">

            </div>
            <div class="big-section-content">
                <h1>Play against the computer</h1>
            </div>
        </div>
        <div class="big-section bg-shadow">
            <div class="big-section-content">
                <h1>Play with friends</h1>
            </div>
        </div>
        <div class="big-section bg-dark-blue" id="rating_sec">
            <div class="big-section-content">
                <h1>Participate in the rating</h1>
            </div>
        </div>
        <!--
            background: linear-gradient(0deg, #000 0%,#0000 10%,#0000 90%,#000 100%);
        -->

        <div class="" style="padding: 50px 0px; background: radial-gradient(closest-side, #0000, #0000, #000); ">
            <div class="flex-line">
                <div class="form-container" style="flex-grow:5;">
                    <h2>Registry</h2>
                    <p>Create your account. It takes only a minute</p>
                    <form class="form-registry" id="reg_form" name="reg" action="../Home/RegistryUser" method="post" onsubmit="CheckForm(this);return false;">
                        <ul>
                            <li>
                                <div id="err_name" class="error-label"></div>
                                <input type="text" name="name" placeholder="Nick Name" value="" required autocomplete="off" />
                            </li>
                            <li>
                                <div id="err_email" class="error-label"></div>
                                <input type="text" name="email" placeholder="Email" value="" required autocomplete="off" />
                            </li>
                            <li>
                                <div id="err_pass" class="error-label"></div>
                                <input type="password" name="password" placeholder="Password" value="" required autocomplete="off" />
                            </li>
                            <li>
                                <input type="password" name="pass_confirm" placeholder="Confirm Password" value="" required autocomplete="off" />
                            </li>
                            <li class="form-check-label">
                                <div style="display:flex;">
                                    <input type="checkbox" required="required">
                                    <div style="display:flex;flex-direction:column;justify-content:center; min-width:400px;">
                                        <div>
                                            I accept the<a href="#">Terms of Use</a> &amp;<a href="#">Privacy Policy</a>
                                        </div>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <input type="submit" value="Sign Up" required />
                            </li>
                        </ul>
                    </form>
                </div>

                <!--
                background: linear-gradient(90deg, #0008 0%, #0009 20%, #000 50%, #000 100%);
            -->

                <div class="form-container" style="flex-grow:8; ">
                    <h2>Login</h2>
                    <p>Already have an account? Sign In</p>

                    <form class="form-registry" id="log_form" name="log" action="../Home/LoginUser" method="post" onsubmit="CheckLogForm(this);return false;">
                        <ul>
                            <li>
                                <div id="err_email_login" class="error-label"></div>
                                <input type="text" name="email" value="" placeholder="Email" required autocomplete="off" />
                            </li>
                            <li>
                                <div id="err_pass_login" class="error-label">.</div>
                                <input type="password" name="password" value="" placeholder="Password" required />
                            </li>
                            <li>
                                <input type="submit" value="Sign In" required />
                            </li>
                        </ul>
                    </form>
                </div>
                <!--
                            <label>nickname</label>
                            <label>email</label>
                            <label>password</label>
                            <label>confirm password</label>

                            <label>email</label>
                            <label>password</label>
                    wffr
                wgge
            -->
            </div>
        </div>

        <script src="Scripts/particle_animation.js"></script>
        <script src="Scripts/bg_cvs_checkers.js"></script>
        <script src="Scripts/svg_handler.js"></script>
        <script src="Scripts/game_bar.js"></script>
        <script src="Scripts/all_handler_index.js"></script>

        <script>
            let form = document.forms.reg;
            console.log(form.elements);
            let pass = form.elements.password;
            let pass_confirm = form.elements.pass_confirm;
            pass.onclick = disablePassWordError;
            pass_confirm.onclick = disablePassWordError;
            form.elements.email.onclick = disableEmailError;
            form.elements.name.onclick = disableNicknameError;


            disablePassWordError
            function disablePassWordError() {
                pass.style.outline = "none";
                //pass.style.background = "#fff9";
                pass.style.color = "#000";

                //pass.style.border = "1px solid #000";
                pass_confirm.style.outline = "none";
                //pass_confirm.style.background = "#fff9";
                pass_confirm.style.color = "#000";

                //pass_confirm.style.border = "1px solid #000";
                document.getElementById("err_pass").innerHTML = "";
                document.getElementById("err_pass").style.display = "none";

            }
            function disableNicknameError() {
                dgebi("err_name").innerHTML = "";
                dgebi("err_name").style.display = "none";
                form.elements.name.style.outline = "none";
                form.elements.name.style.color = "#000";
            }
            function disableEmailError() {
                dgebi("err_email").innerHTML = "This email address is already registered";
                dgebi("err_email").style.display = "none";
                form.elements.email.style.outline = "none";
                form.elements.email.style.color = "#000";
            }

            function CheckForm() {
                var alowed = true;

                var geter = new WaitSync(function () {
                    if (form.elements.password.value != form.elements.pass_confirm.value) {
                        //alert("err");
                        //pass.style.outline = "2px solid #f00";
                        pass.style.outline = "1px solid #f009";
                        //pass.style.background = "#fff";
                        pass.style.color = "#900";

                        //pass_confirm.style.outline = "2px solid #f00";
                        pass_confirm.style.outline = "1px solid #f009";
                        pass_confirm.style.color = "#900";

                        //pass_confirm.style.background = "#fff";

                        document.getElementById("err_pass").innerHTML = "The entered passwords do not match";
                        document.getElementById("err_pass").style.display = "block";

                        return;
                    }

                    //console.debug('Start eating: ', arguments);
                    //form.submit();
                    if (alowed) {
                        form.submit();
                    }
                });
                console.log(form.elements.name.value);

                $ajax.send("../Home/CheckUserName?name=" + form.elements.name.value, {

                    onSuccess: geter.wrap(function (data) {
                        console.log("3");
                        console.log(data);

                        if (data) {
                            dgebi("err_name").innerHTML = "This nickname is already in use";
                            dgebi("err_name").style.display = "block";
                            form.elements.name.style.outline = "1px solid #f009";
                            form.elements.name.style.color = "#900";
                            alowed = false;
                            //return;
                        }
                    }.bind(this)),
                    onError: function () {
                        console.log("Error");
                    },
                    onTimeout: function () {
                        console.log("Timeout");
                    },
                    timeout: 10000
                });

                $ajax.send("../Home/CheckUserEmail?email=" + form.elements.email.value, {
                    onSuccess: geter.wrap(function (data) {
                        console.log(data);
                        if (data) {
                            dgebi("err_email").innerHTML = "This email address is already registered";
                            dgebi("err_email").style.display = "block";
                            form.elements.email.style.outline = "1px solid #f009";
                            form.elements.email.style.color = "#900";


                            alowed = false;
                            //return;

                        }
                    }.bind(this)),
                    onError: function () {
                        console.log("Error");
                    },
                    onTimeout: function () {
                        console.log("Timeout");
                    },
                    timeout: 10000
                });


                //form.submit();
            }


        </script>

        <script>
            let log_form = document.forms.log;
            log_form.elements.email.onclick = disableLoginEmailError;
            log_form.elements.password.onclick = disableLoginPasswordError;
            function disableLoginEmailError() {
                dgebi("err_email_login").innerHTML = "";

                dgebi("err_email_login").style.display = "none";
                log_form.elements.email.style.outline = "none";
                log_form.elements.email.style.color = "#000";
            }
            function disableLoginPasswordError() {
                dgebi("err_pass_login").innerHTML = "";

                dgebi("err_pass_login").style.display = "none";
                log_form.elements.password.style.outline = "none";
                log_form.elements.password.style.color = "#000";
            }

            function CheckLogForm() {

                $ajax.send("../Home/CheckUserEmail?email=" + log_form.elements.email.value, {
                    onSuccess: function (data) {
                        if (!data) {
                            dgebi("err_email_login").innerHTML = "This email address is not registered";
                            dgebi("err_email_login").style.display = "block";

                            log_form.elements.email.style.outline = "1px solid #f009";
                            log_form.elements.email.style.color = "#900";

                            return;
                        }
                        $ajax.send("../Home/CheckUser?email=" + log_form.elements.email.value + "&password=" + log_form.elements.password.value, {
                            onSuccess: function (data) {
                                if (data) {

                                    console.log(data);
                                    log_form.submit();
                                }
                                if (!data) {
                                    dgebi("err_pass_login").innerHTML = "It seems like the password is incorrect";
                                    dgebi("err_pass_login").style.display = "block";

                                    log_form.elements.password.style.outline = "1px solid #f009";
                                    log_form.elements.password.style.color = "#900";


                                }
                            }.bind(this),
                            onError: function () {
                                console.log("Error");
                            },
                            onTimeout: function () {
                                console.log("Timeout");
                            },
                            timeout: 10000
                        });


                    }.bind(this),
                    onError: function () {
                        console.log("Error");
                    },
                    onTimeout: function () {
                        console.log("Timeout");
                    },
                    timeout: 10000
                });
            }
        </script>


        <footer>
            <div class="flex-line space-between">
                <div>
                    <div class="" id="footer_pix_text_container">
                        <div class="flex-column-center">
                            <div id="footer_pix_text" class="" style="display:flex;"></div>
                        </div>
                    </div>

                    <div class="social mt-2 mb-3">
                        <i class="fa fa-facebook-official fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-linkedin-square fa-lg"></i>
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>

                <div>
                    <h3>Popular games</h3>
                    <div>
                        <ul class="">
                          <li><a href="#">Shogi</a> </li>
                          <li><a href="#">Chess</a> </li>
                          <li><a href="#">Dominoes</a> </li>
                          <li><a href="#">Checkers</a> </li>
                          <li><a href="#">Hnefatafl</a> </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h3>Navigation</h3>
                    <div>
                        <ul class="">
                          <li><a href="#">Home</a> </li>
                          <li><a href="#">Antistress</a> </li>
                          <li><a href="#">Instruction</a> </li>
                          <li><a href="#">About</a> </li>
                          <li><a href="#">Contact</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
            <div class="flex-line space-between">
                <div>&copy; 2021 Quarda</div>
                <div class="flex-line">
                    <div>
                        <a href="#">Terms of use</a>
                    </div>
                    <div>
                        <a href="#">Privacy policy</a>
                    </div>
                    <div>
                        <a href="#">Cookie policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="Scripts/PixelText.js"></script>


    <script>

        window.addEventListener("load", function () {
            let pixelText = new PixelText(dgebi("footer_pix_text"), "QUARDA", dgebi("footer_pix_text_container"),"#d8d8d8", "fullOpacity");
        }, false);
    </script>
</body>
</html>
