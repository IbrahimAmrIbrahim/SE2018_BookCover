<!DOCTYPE html>
<html lang= "en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="./images/book-solid.ico">

        <title>Book Cover</title>

        <!-- Bootstrap core CSS -->
        <link href="./css/Bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="./css/Font Awesome/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="./css/CustomStyle.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Aguafina+Script|Charm|Dancing+Script|Great+Vibes|Lusitana|Parisienne|Pinyon+Script|Rouge+Script" rel="stylesheet">
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" style="padding-left: 10px" href="./index.php"><i class="fas fa-book"></i> Book Cover</a>
        </nav>

        <main role="main" class="container">
            <div class="row" style="margin: 0px; padding-left: 15px; padding-right: 15px;">
                <div class="col" id="DataCol">
                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Book title</span>
                        </div>
                        <input class="form-control" id="BookTitle" type="text" maxlength="20" placeholder="Book title" onkeyup="changeBookTitle();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Book subtitle</span>
                        </div>
                        <input class="form-control" id="BookSubTitle" type="text" maxlength="25" placeholder="Book subtitle" onkeyup="changeBookSubTitle();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Author name</span>
                        </div>
                        <input class="form-control" id="AutherName" type="text" maxlength="20" placeholder="Author name" onkeyup="changeAutherName();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Background color</span>
                        </div>
                        <input class="form-control" id="color" type="color" name="keywords" value="#330033" onchange="changeColor();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Font color</span>
                        </div>
                        <input class="form-control" id="fontColor" type="color" name="keywords" value="#ffcc00" onchange="changeFontColor();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Font Size</span>
                        </div>
                        <input class="form-control" id="fontSize" type="range" min="45" max="55" value="45" onchange="changeFontSize();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Publisher</span>
                        </div>
                        <input class="form-control" id="PublisherName" type="text" maxlength="25" placeholder="Publisher" onkeyup="changePublisherName();">
                    </div>

                    <div class="input-group" style="width: 100%">
                        <div class="input-group-prepend">
                            <span class="input-group-text input-text">Publishing year</span>
                        </div>
                        <input class="form-control" id="PublishingYear" type="month" onchange="changePublishingYear();">
                    </div>
                    <div class="input-group" style="width: 100%">
                        <input class="btn btn-success" type="button" value="Change Layout" onclick="changeLayout();">
                        <input class="btn btn-success" style="margin-left: 20px" type="button" value="Change Font" onclick="changeFontFamily();">
                    </div>
                </div>
                <div class="col" id="CoverCol">
                    <div id="BackgroundDiv" style="background-color: #330033">
                        <table id="CoverTable" style="width:95%; height:100%; margin-left:11.825px; margin-right:11.825px; table-layout: fixed;">
                            <tr style="height: 232px">
                                <td style="text-align: center; word-wrap: break-word;">
                                    <span id="BookTitleText" style="font-size: 45pt;color: #ffcc00;">Book Title</span>
                                </td>
                            </tr>
                            <tr style="height: 154px">
                                <td style="text-align: center;word-wrap: break-word;">
                                    <span id="BookSubTitleText" style="font-size: 30pt;color: #ffcc00;">Book Subtitle</span>
                                </td>
                            </tr>
                            <tr style="height: 77px">
                                <td style="text-align: center;">
                                    <span id="AutherNameText" style="font-size: 20pt;color: #ffcc00;">Auther Name</span>
                                </td>
                            </tr>
                            <tr style="height: 39px">
                                <td style="text-align: right;">
                                    <span id="PublisherNametext" style="color: #ffcc00;">Publisher name</span>
                                </td>
                            </tr>
                            <tr style="height: 38px">
                                <td style="text-align: right;">
                                    <span id="PublishingDateText" style="color: #ffcc00;">Publishing Date</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">Designed by: Ibrahim Amr Ibrahim.</div>
    </footer>   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
                            var font = [];
                            var color = "#990099";
                            var colorRand = 0;
                            var fontRand = 0;
                            font[1] = "'Charm', cursive";
                            font[2] = "'Aguafina Script', cursive";
                            font[3] = "'Dancing Script', cursive";
                            font[4] = "'Rouge Script', cursive";
                            font[5] = "'Great Vibes', cursive";
                            font[6] = "'Parisienne', cursive";
                            font[7] = "'Lusitana', serif";


                            function changeColor() {
                                color = $('#color').val();
                                document.getElementById("BackgroundDiv").style.backgroundColor = color;
                                colorRand = 0;
                            }
                            function changeBookTitle() {
                                var text = $('#BookTitle').val();
                                if (text == "") {
                                    $("#BookTitleText").text("Book Title");
                                } else {
                                    $("#BookTitleText").text(text);
                                }
                            }
                            function changeAutherName() {
                                var text = $('#AutherName').val();
                                if (text == "") {
                                    $("#AutherNameText").text("Auther Name");
                                } else {
                                    $("#AutherNameText").text(text);
                                }
                            }
                            function changeBookSubTitle() {
                                var text = $('#BookSubTitle').val();
                                if (text == "") {
                                    $("#BookSubTitleText").text("Book Subtitle");
                                } else {
                                    $("#BookSubTitleText").text(text);
                                }
                            }
                            function changePublisherName() {
                                var text = $('#PublisherName').val();
                                if (text == "") {
                                    $("#PublisherNametext").text("Publisher Name");
                                } else {
                                    $("#PublisherNametext").text(text);
                                }
                            }
                            function changePublishingYear() {
                                var text = $('#PublishingYear').val();
                                if (text == "") {
                                    $("#PublishingDateText").text("Publishing Year");
                                } else {
                                    $("#PublishingDateText").text(text);
                                }
                            }
                            function changeFontSize() {
                                var size = $('#fontSize').val();
                                document.getElementById("BookTitleText").style.fontSize = size + "pt";
                                document.getElementById("BookSubTitleText").style.fontSize = (size - 15) + "pt";
                                document.getElementById("AutherNameText").style.fontSize = (size - 25) + "pt";
                            }
                            function changeFontColor() {
                                var color = $('#fontColor').val();
                                document.getElementById("BookTitleText").style.color = color;
                                document.getElementById("BookSubTitleText").style.color = color;
                                document.getElementById("AutherNameText").style.color = color;
                                document.getElementById("PublisherNametext").style.color = color;
                                document.getElementById("PublishingDateText").style.color = color;
                            }
                            function changeLayout() {
                                if (colorRand == 0) {
                                    document.getElementById("BackgroundDiv").style.background = "linear-gradient(to bottom, rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.25),rgba( " + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5), rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.25))";
                                    colorRand += 1;
                                } else if (colorRand == 1) {
                                    document.getElementById("BackgroundDiv").style.background = "linear-gradient(to bottom, rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5),rgba( " + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.40), rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5))";
                                    colorRand += 1;
                                } else if (colorRand == 2) {
                                    document.getElementById("BackgroundDiv").style.background = "linear-gradient(to right, rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.25),rgba( " + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5), rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.25))";
                                    colorRand += 1;
                                } else if (colorRand == 3) {
                                    document.getElementById("BackgroundDiv").style.background = "linear-gradient(to right, rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5),rgba( " + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.40), rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5))";
                                    colorRand += 1;
                                } else if (colorRand == 4) {
                                    document.getElementById("BackgroundDiv").style.background = "radial-gradient(rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5),rgba( " + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.25), rgba(" + hexToRgb(color).r + "," + hexToRgb(color).g + "," + hexToRgb(color).b + ",0.5))";
                                    colorRand += 1;
                                } else if (colorRand == 5) {
                                    document.getElementById("BackgroundDiv").style.background = color;
                                    colorRand = 0;
                                }
                            }
                            function changeFontFamily() {
                                fontRand = Math.floor((Math.random() * 7) + 1);
                                document.getElementById("BookTitleText").style.fontFamily = font[fontRand];
                                fontRand = Math.floor((Math.random() * 7) + 1);
                                document.getElementById("BookSubTitleText").style.fontFamily = font[fontRand];
                                document.getElementById("AutherNameText").style.fontFamily = "'Pinyon Script', cursive";
                            }
                            function hexToRgb(hex) {
                                var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                                return result ? {
                                    r: parseInt(result[1], 16),
                                    g: parseInt(result[2], 16),
                                    b: parseInt(result[3], 16)
                                } : null;
                            }
    </script>
</html>
