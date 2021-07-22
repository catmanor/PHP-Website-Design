<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tea Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/fortea.css">
</head>

<body>
    <?php
        require('db.php'); //connection to db code
        //include("pa_sessionActiveCheck.php");
        ?>

        <!-- Navigation bar -->
        <?php
            session_start();
            include("nav_bar.php");
        ?>

    <section class="outline">
    <form method="post" action="tea.php">
        <h2>Filter: </h2>
        <label>By tea type:  </label>
        <select name="teatype" id="teatype">
            <option value="">[Choose Below]</option>
            <option>Green</option>
            <option>Black</option>
            <option>White</option>
            <option>Oolong</option>
        </select>

        <label>By tea ingredient:  </label>
        <select name="teafavor" id="teafavor">
            <option value="">[Choose Below]</option>
            <option>Ginger</option>
            <option>Lemon</option>
        </select>

        <input type="button" name="searchorder" value="Search Teas" class="searchButton">
    </form>
    </section>

    <!-- For the first entering the page -->
    <h2 class="original-heading">Products: </h2>
    <section id="original-product">
    <?php
            $query = "SELECT * FROM `product`";

                $result = mysqli_query($connect, $query);

                echo '<div><table class="orginal-sample-table">';
                while ($row = mysqli_fetch_assoc($result)) {
                    $tempArr = array();
                    foreach($row as $value) {
                        array_push($tempArr, stripslashes($value));
                    }
                    echo '
                    
                        <tr><td><img src="img/'. $tempArr[4]. '" alt="Tea sample images"></td></tr>                 
                        <tr><td><p>'. $tempArr[1]. '</p></tr></td>
                        <tr><td><a href="detail.php?imgName='. urlencode($tempArr[4]). '&teaName='. urlencode($tempArr[1]). '&teaType='. urlencode($tempArr[2]). '&ingredient='. urlencode($tempArr[3]). '&caffeineLevel='. urlencode($tempArr[5]). '&productindex='. urlencode($tempArr[0]). '"> Detail</a></td></tr>
                    
                    ';
                }
                echo '</div></table>';
    ?>
    </section>


    <section class="outline">
    <!-- <h2>Products: </h2> -->
    <div id="result" style="text-align:center;"></div>
    <div id="page" style="text-align:right;"></div>

    <script>
    var offset = 5;

    function displayResult(index) {
        console.log(index);        
        
        // For the bottom number for products
        var start = index * offset;
        var stop = (index + 1) * offset > result.length ? result.length : index * offset + offset;
        console.log(start + "  " + stop);

        var productlist = "";

        for (i = start; i < stop; i++) {
            productlist += "<div><table class='sample-table'>";
            productlist += "<tr><td><img src='img/" + result[i].image + "' alt='Tea sample image'></td></tr>";
            productlist += "<tr><td>" + result[i].name + "</td></tr>";
            // productlist += "<tr><td>" + result[i].teaLeaf + "</td></tr>";
            // productlist += "<tr><td>" + result[i].teaFavor + "</td></tr>";
            productlist += "<tr><td><a href=" + "'detail.php?imgName=" + result[i].image + "&teaName=" + result[i].name + "&teaType=" + result[i].teaLeaf + "&ingredient=" + result[i].teaFavor + "&caffeineLevel=" + result[i].caffine + "&productindex=" + result[i].product_id + "'>Detail</a></td></tr>";
            productlist += "</table></div>"
        }

        
        $("#result").html(productlist);

        // For deciding which part of products can be seen
        var pages = "";
        for (i = 0; i < Math.ceil(result.length / offset); i++) {
            if (index == i) {
                pages += " <a href='javascript:void(0)' class='currentPage' onclick='displayResult(" + i + ");'>" + (i + 1) + "</a>";
            } else {
                pages += " <a href='javascript:void(0)' onclick='displayResult(" + i + ");'>" + (i + 1) + "</a>";
            }

        }
        $("#page").html(pages);
    }

    $(".searchButton").on("click", function() {
        document.getElementById("original-product").style.display = "none"; 
        $.ajax({
            method: "GET",
            url: "getData.php",
            data: { teatype: $("#teatype").val(), teafavor: $("#teafavor").val() },
        }).done(function(data) {
            //console.log(data);
            result = $.parseJSON(data);
            // console.log(result);
            if (result.length > 0) {
                displayResult(0);
            } else {
                $("#result").html("There is no matched result");
            }
        });


    });
    </script>
    </section>
</body>

</html>