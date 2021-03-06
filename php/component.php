<?php

function component($productname, $productprice, $productimg, $productid){
    $price=$productprice+100;
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"cindex.php\" method=\"post\">
                    <div class=\"card shadow my-3\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">Rs.$price.00</s></small>
                                <span class=\"price text-success\">Rs.$productprice.00</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-success my-3 shadow\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
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
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"shadow border rounded\">
                        <div class=\"row bg-white my-2 mx-2\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: chikuu98</small>
                                <h5 class=\"pt-2\">Rs.$productprice.00</h5>
                                <button type=\"submit\" class=\"btn btn-success my-1 shadow\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2 my-1 shadow\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5 shadow\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle shadow\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline shadow\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle shadow\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}