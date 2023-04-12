<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet"></link>
        <title>WasteConnect | Add Product</title>
    </head>
    <body>
        <!-- page header -->
        <div class="cathegory_wrapper bg-success">
            <img class="returnarrow_img" src="img/circle-arrow-left.svg" width="30" height="30">
            <img class="userprofile_img" src="img/man.png" width="50" height="50">
        </div>

        <!-- button to add card -->
        <a onclick="createCard()"><img class="add-icon" src="img/add-plus.svg" alt="" width="50" height="50"><span class="add-product-text">tambah produk</span></a>
    
        <div class="popup" id="popup1"></div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            var display = document.getElementById('popup1');

            function createCard() {
                let divWrapper = document.createElement("div");
                divWrapper.classList.add("recomendationslider_wrapper");

                let imageWrapper = document.createElement("div");
                imageWrapper.classList.add("recomendation_img_wrapper");

                let image = document.createElement("img");
                image.classList.add("recomendationslider_img");
                image.setAttribute("src","img/limbah sampah.jpg");

                let heading = document.createElement("h6");
                let headingText = document.createTextNode("Sampah Rumah Tangga");
                let myBreak = document.createElement("br");
                let priceText = document.createTextNode("Rp. 3.000/Kg");
                heading.appendChild(headingText);
                heading.appendChild(myBreak);
                heading.appendChild(priceText);

                imageWrapper.appendChild(image);

                divWrapper.appendChild(imageWrapper);
                divWrapper.appendChild(heading);

                document.getElementById("popup1").appendChild(divWrapper);
            }
        </script>
    </body>
</html>