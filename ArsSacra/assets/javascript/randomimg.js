window.onload = choosePic;

var myPix = new Array(
      "assets/images/shop/products/product1.png"
    , "assets/images/shop/products/product2.png"
    , "assets/images/shop/products/product3.png"
);
var otherPix = new Array(
    "assets/images/shop/products/product3.png"
  , "assets/images/shop/products/product1.png"
  , "assets/images/shop/products/product2.png"
); 

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture1").src = myPix[randomNum];
     document.getElementById("myPicture2").src = otherPix[randomNum];
     randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture3").src = myPix[randomNum];
}