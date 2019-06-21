<?php 
error_reporting(0);
function component($productname,$productprice,$productimg,$productid){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\"method=\"post\">
    <div class=\"card\">
     <div class=\"image\"><img src=\"$productimg\" alt=\"Image-1\"class=\"img-fluid card-img-top\"></div>
    <div class=\"card-body\">
    <h5 class=\"card-title\">$productname</h5>
    <h6>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    
    </h6>
    <p class=\"card-text\">
    Some quick example on the cart
    </p>
    <h5>
    <del>$599</del>
    <span class=\"price\">$productprice</span>
    
    </h5>
    <button type=\"submit\"name=\"add\"class=\"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
    <input type='hidden' name='product_id' value='$productid'>
    </div>
    </div>
    </form>
    </div>
    
    ";
    echo $element;
}
function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=delete&id=\"product_id\" method=\"post\" class=\"cart-items\">
    <div class=\"border rounded\">
      <div class=\"row bg-white\">
       <div class=\"col-md-3 pl-0\">
        <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-6\">
         <h5 class=\"pt-2\">$productname</h5>
            <small class=\"text-secondary\">Seller: dailytuition</small>
            <h5 class=\"pt-2\">$$productprice</h5>
            <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
          <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
            </div>
            <div class=\"col-md-3 py-5\">
            <div>
            <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
            <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
            <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                     </div>
                </div>
             </div>
        </div>
    </form>
    
    ";
    echo  $element;
}


?>


<!-- <//?php 
function component($productname,$productprice,$productimg){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\"method=\"post\">
    <div class=\"card\">
     <div class=\"image\"><img src=\"upload/laptop.jpg\" alt=\"Image-1\"class=\"img-fluid card-img-top\"></div>
    <div class=\"card-body\">
    <h5 class=\"card-title\">$productname</h5>
    <h6>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    <i class=\"fas fa-star\"></i>
    
    </h6>
    <p class=\"card-text\">
    Some quick example on the cart
    </p>
    <h5>
    <del>$599</del>
    <span class=\"price\">$519</span>
    
    </h5>
    <button type=\"submit\"name=\"add\"class=\"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
    </div>
    </div>
    </form>
    </div>
    
    ";
    echo $element;
}
<form action=\"cart.php\"method=\"get\"class=\"cart-items\">
    <div class=\"border-rounded\">
     <div class=\"row bg-white\">
      <div class=\"col-md-3\">
      <img src=\"upload/laptop.jpg\" alt=\"Image1\">
      
      </div>
      <div class=\"col-md-6\">
      <h5 class=\"pt-2\">Laptop</h5>
      <small>Seller:Techworld</small>
      <h5 class=\"pt-2\">$599</h5>
      <button type=\"submit\"class=\"btn btn-warning\">Save for later</button>
      <button type=\"submit\"class=\"btn btn-danger mx-2\"name=\"remove\">Remove</button>
      </div>
      <div class=\"col-md-3 py-5\">
      <button type=\"button\"class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-town\"></i></button>
      <input type=\"text\"value=\"1\"class=\"form-control w-25 d-inline\">
      <button type=\"button\"class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
      </div>
     </div>
  </div>
</form>
    ";
//My code
<form action=\"cart.php\"method=\"post\"class=\"cart-items\">
    <div class=\"border-rounded\">
     <div class=\"row bg-white\">
      <div class=\"col-md-3 pl-0\">
      <img src=\"$productimg\" alt=\"Image1\">
      
      </div>
      <div class=\"col-md-6\">
      <h5 class=\"pt-2\">$productname</h5>
      <small>Seller:Techworld</small>
      <h5 class=\"pt-2\">$productprice</h5>
      <button type=\"submit\"class=\"btn btn-warning\">Save for later</button>
      <button type=\"submit\"class=\"btn btn-danger mx-2\"name=\"remove\">Remove</button>
      </div>
      <div class=\"col-md-3 py-5\">
      <button type=\"button\"class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-town\"></i></button>
      <input type=\"text\"value=\"1\"class=\"form-control w-25 d-inline\">
      <button type=\"button\"class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
      </div>
     </div>
  </div>
</form>
    ";


?> -->