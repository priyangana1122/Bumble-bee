<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../Restaurant/css/footerstyle.css">
    <link rel="stylesheet" href="../Restaurant/css/headerstyle.css">

    <style>

    </style>
    <title>Bumble Bee/Register</title>
  </head>
  <body>
  <div class="pc-version">
    <nav class="navbar">
      <!-- LOGO -->
      <div class="pc-header" style="width:40%; padding:0px 20px;">
        <h1>The Bumble Bee Technologies</h1>
      </div>
      <!-- NAVIGATION MENU -->
      <ul class="nav-links" style="width:60%;">
        <!-- NAVIGATION MENUS -->
        <table>
          <colgroup>
            <col width="auto">
            <col width="auto">
            <col width="auto">
            <col width="auto">
            <col width="auto">
            <col width="auto">
          </colgroup>
          <tr>
            <td> <a href="../bumble bee/Home.php">Home </a> </td>
            <td> <a href="../bumble bee/About.php">About </a> </td>
            <td> <a href="../bumble bee/Electronics.php">Electronics</a> </td>
            <td> <a href="../bumble bee/Furniture.php">Furnitures</a> </td>
            <td> <a href="../bumble bee/Register.php">Register</a> </td>
            <td style="border-right: 0px;"> <a href="../bumble bee/Cart.php">Cart</a> </td>
          </tr>
        </table>
      </ul>
    </nav>
  </div>

  <div class="mobile-version">
    <div class="menu-container">

      <input type="checkbox" id="openmenu" class="men-check">
      <div class="menu-icon">
        <label for="openmenu" id="hamburger-label">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>

      <div class="menu-pane">
        <nav>
          <ul class="menu-links">
            <li><a href="../bumble bee/Home.php">Home </a></li>
            <li><a href="../bumble bee/About.php">About </a></li>
            <li><a href="../bumble bee/Electronics.php">Electronics</a></li>
            <li><a href="../bumble bee/Furniture.php">Furnitures</a></li>
            <li><a href="../bumble bee/Register.php">Register</a></li>
            <li><a href="../bumble bee/Cart.php">Cart</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
    
    <form id="form_id" action="">
      <div class="content menu-page" style="display:block;">
        <div class="menu">
          <div class="heading">
              <h1>Take Away Menu</h1>
              <p>After choosing products, Click Here!</p>
              <input type="submit" class="passSubmit" onclick="changeAction()" value="Check Out"> 
          </div>

          <div class="sub-heading">
            <h3>&mdash; Entrée &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/vegetable-samosa.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Vegetable Samosa</h5>
                    <h5 class="price"> $8 </h5>
                </div>
                <p>Deep fried pastry stuffed with lightly spiced potatoes and green peas</p>

            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_1" name="qty_1" value="1">
              <input type="hidden" value="8" id="price_1" name="price_1">
              <input type="hidden" value="Vegetable Samosa" id="name_1" name="name_1">
              <input type="submit" class="btn" onclick="passValues(1)" value="Add to Cart"> 
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/onion-bhaji.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Onion Bhaji</h5>
                    <h5 class="price"> $8 </h5>
                </div>
                <p>Coriander flavoured onion fritters</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_2" name="qty_2" value="1">
              <input type="hidden" value="8" id="price_2" name="price_2">
              <input type="hidden" value="Onion Bhaji" id="name_2" name="name_2">
              <input type="submit" class="btn" onclick="passValues(2)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/hara-bhara.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Hara Bhara Kebab</h5>
                    <h5 class="price"> $12 </h5>
                </div>
                <p>Shallow fried vegetable and spinach patties</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_3" name="qty_3" value="1">
              <input type="hidden" value="8" id="price_3" name="price_3">
              <input type="hidden" value="Hara Bhara Kebab" id="name_3" name="name_3">
              <input type="submit" class="btn" onclick="passValues(3)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/chicken-tikka.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Tikka</h5>
                    <h5 class="price"> $12 </h5>
                </div>
                <p>Boneless marinated chicken grilled in tandoor</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_4" name="qty_4" value="1">
              <input type="hidden" value="8" id="price_4" name="price_4">
              <input type="hidden" value="Chicken Tikka" id="name_4" name="name_4">
              <input type="submit" class="btn" onclick="passValues(4)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Seekh-kebab.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Seekh Kebab</h5>
                    <h5 class="price"> $12 </h5>
                </div>
                <p>Spiced and skewed lamb mince cooked in tandoor</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_5" name="qty_5" value="1">
              <input type="hidden" value="8" id="price_5" name="price_5">
              <input type="hidden" value="Seekh Kebab" id="name_5" name="name_5">
              <input type="submit" class="btn" onclick="passValues(5)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Chicken &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/chicken-tikka.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Tikka Masala (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Unique combination of spices cooked with onion, capsicum and tomato</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_6" name="qty_6" value="1">
              <input type="hidden" value="8" id="price_6" name="price_6">
              <input type="hidden" value="Chicken Tikka Masala (medium)" id="name_6" name="name_6">
              <input type="submit" class="btn" onclick="passValues(6)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/chicken-balti.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Balti (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Boneless chicken cooked in medium spiced sauce with onion, capsicum and tomato</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_7" name="qty_7" value="1">
              <input type="hidden" value="8" id="price_7" name="price_7">
              <input type="hidden" value="Chicken Balti (medium)" id="name_7" name="name_7">
              <input type="submit" class="btn" onclick="passValues(7)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/chicken-korma.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Korma (mild)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Chicken cooked in creamy cashew nut gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_8" name="qty_8" value="1">
              <input type="hidden" value="8" id="price_8" name="price_8">
              <input type="hidden" value="Chicken Korma (mild)" id="name_8" name="name_8">
              <input type="submit" class="btn" onclick="passValues(8)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/kadai-chicken.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Kadai Chicken (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Chicken cooked in kadai gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_9" name="qty_9" value="1">
              <input type="hidden" value="8" id="price_9" name="price_9">
              <input type="hidden" value="Kadai Chicken (medium)" id="name_9" name="name_9">
              <input type="submit" class="btn" onclick="passValues(9)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/chicken-vindaloo.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Vindaloo (HOT)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Spicy curry prepared in goan style</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_10" name="qty_10" value="1">
              <input type="hidden" value="8" id="price_10" name="price_10">
              <input type="hidden" value="Chicken Vindaloo (HOT)" id="name_10" name="name_10">
              <input type="submit" class="btn" onclick="passValues(10)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/mysore-chilli.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Mysore Chicken (HOT)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Chicken cooked with fresh chillies in coconut creamy sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_11" name="qty_11" value="1">
              <input type="hidden" value="8" id="price_11" name="price_11">
              <input type="hidden" value="Mysore Chicken (HOT)" id="name_11" name="name_11">
              <input type="submit" class="btn" onclick="passValues(11)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Lamb &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/Lamb-Rogan-Josh.JPG">
            <div class="details">
                <div class="details-sub">
                    <h5>Lamb Rogan Josh (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Lamb cooked in traditional north Indian style</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_12" name="qty_12" value="1">
              <input type="hidden" value="8" id="price_12" name="price_12">
              <input type="hidden" value="Lamb Rogan Josh (medium)" id="name_12" name="name_12">
              <input type="submit" class="btn" onclick="passValues(12)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/lamb-korma.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Lamb Korma (mild)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Blend of creamy cashew nut gravy cooked with lamb</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_13" name="qty_13" value="1">
              <input type="hidden" value="8" id="price_13" name="price_13">
              <input type="hidden" value="Lamb Korma (mild)" id="name_13" name="name_13">
              <input type="submit" class="btn" onclick="passValues(13)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/lamb-madras.jfif">
            <div class="details">
                <div class="details-sub">
                    <h5>Lamb Madras (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Creamy coconut based delicacy cooked to perfection</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_14" name="qty_14" value="1">
              <input type="hidden" value="8" id="price_14" name="price_14">
              <input type="hidden" value="Lamb Madras (medium)" id="name_14" name="name_14">
              <input type="submit" class="btn" onclick="passValues(14)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/lamb-madras.jfif">
            <div class="details">
                <div class="details-sub">
                    <h5>Saag Lamb (mild to medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Diced lamb cooked with spinach sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_15" name="qty_15" value="1">
              <input type="hidden" value="8" id="price_15" name="price_15">
              <input type="hidden" value="Saag Lamb (mild to medium)" id="name_15" name="name_15">
              <input type="submit" class="btn" onclick="passValues(15)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/lamb-masala.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Lamb Masala (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Lamb cooked in onion, tomato masala gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_16" name="qty_16" value="1">
              <input type="hidden" value="8" id="price_16" name="price_16">
              <input type="hidden" value="Lamb Masala (medium)" id="name_16" name="name_16">
              <input type="submit" class="btn" onclick="passValues(16)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/lamb-vindaloo.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Lamb Vindaloo (HOT)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Spicy lamb curry prepared in Goan style</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_17" name="qty_17" value="1">
              <input type="hidden" value="8" id="price_17" name="price_17">
              <input type="hidden" value="Lamb Vindaloo (HOT)" id="name_17" name="name_17">
              <input type="submit" class="btn" onclick="passValues(17)" value="Add to Cart">
            </div>
          </div>
          
          <div class="sub-heading">
            <h3>&mdash; Beef &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/beef-rogan-josh.jpeg">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Rogan Josh (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Diced beef cooked in north Indian style</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_18" name="qty_18" value="1">
              <input type="hidden" value="8" id="price_18" name="price_18">
              <input type="hidden" value="Beef Rogan Josh (medium)" id="name_18" name="name_18">
              <input type="submit" class="btn" onclick="passValues(18)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/beef-masala.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Masala (medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Meat cooked with onion, tomato, capsicum in masala gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_19" name="qty_19" value="1">
              <input type="hidden" value="8" id="price_19" name="price_19">
              <input type="hidden" value="Beef Masala (medium)" id="name_19" name="name_19">
              <input type="submit" class="btn" onclick="passValues(19)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/beef-krma-curry.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Korma (mild)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Diced beef cooked in creamy cashew nut gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_20" name="qty_20" value="1">
              <input type="hidden" value="8" id="price_20" name="price_20">
              <input type="hidden" value="Beef Korma (mild)" id="name_20" name="name_20">
              <input type="submit" class="btn" onclick="passValues(20)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/beef-madras.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Madras (mild to medium)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Combination of creamy coconut sauce cooked to perfection</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_21" name="qty_21" value="1">
              <input type="hidden" value="8" id="price_21" name="price_21">
              <input type="hidden" value="Beef Madras (mild to medium)" id="name_21" name="name_21">
              <input type="submit" class="btn" onclick="passValues(21)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/beef-vindaloo-hot.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Vindaloo (HOT)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Spicy Goan style curry cooked to perfection</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_22" name="qty_22" value="1">
              <input type="hidden" value="8" id="price_22" name="price_22">
              <input type="hidden" value="Beef Vindaloo (HOT)" id="name_22" name="name_22">
              <input type="submit" class="btn" onclick="passValues(22)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/Black-Pepper-Beef.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Pepper Fry (HOT)</h5>
                    <h5 class="price"> $20 </h5>
                </div>
                <p>Spicy beef curry cooked with black pepper</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_23" name="qty_23" value="1">
              <input type="hidden" value="8" id="price_23" name="price_23">
              <input type="hidden" value="Beef Pepper Fry (HOT)" id="name_23" name="name_23">
              <input type="submit" class="btn" onclick="passValues(23)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Seafood &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/prawn-malabari.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Prawn Malabari (mild)</h5>
                    <h5 class="price"> $22 </h5>
                </div>
                <p>Prawn cooked with onion, capsicum in coconut gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_24" name="qty_24" value="1">
              <input type="hidden" value="8" id="price_24" name="price_24">
              <input type="hidden" value="Prawn Malabari (mild)" id="name_24" name="name_24">
              <input type="submit" class="btn" onclick="passValues(24)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/prawn-fish-masala.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Prawn / Fish Masala (medium)</h5>
                    <h5 class="price"> $22 </h5>
                </div>
                <p>Combination of spices cooked with onion, tomato and capsicum</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_25" name="qty_25" value="1">
              <input type="hidden" value="8" id="price_25" name="price_25">
              <input type="hidden" value="Prawn / Fish Masala (medium)" id="name_25" name="name_25">
              <input type="submit" class="btn" onclick="passValues(25)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/prawn-vindaloo.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Prawn Vindaloo (HOT)</h5>
                    <h5 class="price"> $22 </h5>
                </div>
                <p>Spicy curry cooked in Goan style</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_26" name="qty_26" value="1">
              <input type="hidden" value="8" id="price_26" name="price_26">
              <input type="hidden" value="Prawn Vindaloo (HOT)" id="name_26" name="name_26">
              <input type="submit" class="btn" onclick="passValues(26)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/butter-prawn.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Butter Prawn (mild)</h5>
                    <h5 class="price"> $22 </h5>
                </div>
                <p>Blend of creamy tomato gravy with prawn</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_27" name="qty_27" value="1">
              <input type="hidden" value="8" id="price_27" name="price_27">
              <input type="hidden" value="Butter Prawn (mild)" id="name_27" name="name_27">
              <input type="submit" class="btn" onclick="passValues(27)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/goan-fishc-urry.JPG">
            <div class="details">
                <div class="details-sub">
                    <h5>Goan Fish Curry (mild)</h5>
                    <h5 class="price"> $22 </h5>
                </div>
                <p>Fish cooked with creamy coconut gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_28" name="qty_28" value="1">
              <input type="hidden" value="8" id="price_28" name="price_28">
              <input type="hidden" value="Goan Fish Curry (mild)" id="name_28" name="name_28">
              <input type="submit" class="btn" onclick="passValues(28)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Vegetarian &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/butter-paneer.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Butter Paneer (mild)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Indian cottage cheese cooked in creamy tomato gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_29" name="qty_29" value="1">
              <input type="hidden" value="8" id="price_29" name="price_29">
              <input type="hidden" value="Butter Paneer (mild)" id="name_29" name="name_29">
              <input type="submit" class="btn" onclick="passValues(29)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Paneer-Tikka-Masala.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Paneer Tikka Masala (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Cottage cheese with onion, tomato, capsicum and spiced gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_30" name="qty_30" value="1">
              <input type="hidden" value="8" id="price_30" name="price_30">
              <input type="hidden" value="Paneer Tikka Masala (medium)" id="name_30" name="name_30">
              <input type="submit" class="btn" onclick="passValues(30)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/kadar-paneer.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Kadai Paneer (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Cottage cheese cooked in kadai Gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_31" name="qty_31" value="1">
              <input type="hidden" value="8" id="price_31" name="price_31">
              <input type="hidden" value="Kadai Paneer (medium)" id="name_31" name="name_31">
              <input type="submit" class="btn" onclick="passValues(31)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/Paneer-Bhurji.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Paneer Bhurji (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Gratted Cottage cheese cooked with onion, capsicum in tomato sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_32" name="qty_32" value="1">
              <input type="hidden" value="8" id="price_32" name="price_32">
              <input type="hidden" value="Paneer Bhurji (medium)" id="name_32" name="name_32">
              <input type="submit" class="btn" onclick="passValues(32)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/palak-paneer.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Palak Paneer (mild to medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Cottage cheese cooked in mild spiced spinach sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_33" name="qty_33" value="1">
              <input type="hidden" value="8" id="price_33" name="price_33">
              <input type="hidden" value="Palak Paneer (mild to medium)" id="name_33" name="name_33">
              <input type="submit" class="btn" onclick="passValues(33)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/achari-paneer.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Achari Paneer (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Cottage cheese cooked in pickle sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_34" name="qty_34" value="1">
              <input type="hidden" value="8" id="price_34" name="price_34">
              <input type="hidden" value="Achari Paneer (medium)" id="name_34" name="name_34">
              <input type="submit" class="btn" onclick="passValues(34)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/Vegetable-Korma.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Vegetable Korma (mild)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Mix vegetable cooked in creamy cashew nut gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_35" name="qty_35" value="1">
              <input type="hidden" value="8" id="price_35" name="price_35">
              <input type="hidden" value="Vegetable Korma (mild)" id="name_35" name="name_35">
              <input type="submit" class="btn" onclick="passValues(35)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/fresh-vegetable.jfif">
            <div class="details">
                <div class="details-sub">
                    <h5>Mix vegetable (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Fresh vegetable cooked in medium spiced gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_36" name="qty_36" value="1">
              <input type="hidden" value="8" id="price_36" name="price_36">
              <input type="hidden" value="Mix vegetable (medium)" id="name_36" name="name_36">
              <input type="submit" class="btn" onclick="passValues(36)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Palak-Chole.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chole Masala/Chole Palak (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Chickpeas cooked in onion tomato gravy or spinach sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_37" name="qty_37" value="1">
              <input type="hidden" value="8" id="price_37" name="price_37">
              <input type="hidden" value="Chole Masala/Chole Palak (medium)" id="name_37" name="name_37">
              <input type="submit" class="btn" onclick="passValues(37)" value="Add to Cart">
            </div>
          </div>
          
          <div class="food-items">
            <img src="images/malai-kofta.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Malai Kofta (mild)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Mashed potato, dry fruit and cottage cheese dumpling cooked in rich cashew nut gravy</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_38" name="qty_38" value="1">
              <input type="hidden" value="8" id="price_38" name="price_38">
              <input type="hidden" value="Malai Kofta (mild)" id="name_38" name="name_38">
              <input type="submit" class="btn" onclick="passValues(38)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Aloo-Matar.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Aloo Gobi / Aloo Mutter (medium)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Potatoes cooked with cauliflower or green peas in spiced sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_39" name="qty_39" value="1">
              <input type="hidden" value="8" id="price_39" name="price_39">
              <input type="hidden" value="Aloo Gobi / Aloo Mutter (medium)" id="name_39" name="name_39">
              <input type="submit" class="btn" onclick="passValues(39)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Saag-aloo.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Saag Aloo (mild)</h5>
                    <h5 class="price"> $17 </h5>
                </div>
                <p>Potatoes cooked in mild spiced spinach sauce</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_40" name="qty_40" value="1">
              <input type="hidden" value="8" id="price_40" name="price_40">
              <input type="hidden" value="Saag Aloo (mild)" id="name_40" name="name_40">
              <input type="submit" class="btn" onclick="passValues(40)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/dal-tadka.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Dal Tadka (mild to medium)</h5>
                    <h5 class="price"> $16 </h5>
                </div>
                <p>Yellow split lentil tempered with garlic, tomato and onion</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_41" name="qty_41" value="1">
              <input type="hidden" value="8" id="price_41" name="price_41">
              <input type="hidden" value="Dal Tadka (mild to medium)" id="name_41" name="name_41">
              <input type="submit" class="btn" onclick="passValues(41)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Dal-makhani.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Dal Makhani (medium)</h5>
                    <h5 class="price"> $16 </h5>
                </div>
                <p>Black lentil & kidney beans cooked with tomato, cream and butter</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_42" name="qty_42" value="1">
              <input type="hidden" value="8" id="price_42" name="price_42">
              <input type="hidden" value="Dal Makhani (medium)" id="name_42" name="name_42">
              <input type="submit" class="btn" onclick="passValues(42)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Tandoori Bread &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/Naan.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Plain Naan</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p>Leavened refined flour bread</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_43" name="qty_43" value="1">
              <input type="hidden" value="8" id="price_43" name="price_43">
              <input type="hidden" value="Plain Naan" id="name_43" name="name_43">
              <input type="submit" class="btn" onclick="passValues(43)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/garlic-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Garlic Naan</h5>
                    <h5 class="price"> $4 </h5>
                </div>
                <p>Garlic flavoured Naan</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_44" name="qty_44" value="1">
              <input type="hidden" value="8" id="price_44" name="price_44">
              <input type="hidden" value="Garlic Naan" id="name_44" name="name_44">
              <input type="submit" class="btn" onclick="passValues(44)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/cheese-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cheese Naan</h5>
                    <h5 class="price"> $5 </h5>
                </div>
                <p>Naan stuffed with cheese</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_45" name="qty_45" value="1">
              <input type="hidden" value="8" id="price_45" name="price_45">
              <input type="hidden" value="Cheese Naan" id="name_45" name="name_45">
              <input type="submit" class="btn" onclick="passValues(45)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/cheese-garlic-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cheese & Garlic Naan</h5>
                    <h5 class="price"> $6 </h5>
                </div>
                <p>Naan stuffed with cheese and smeared with garlic</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_46" name="qty_46" value="1">
              <input type="hidden" value="8" id="price_46" name="price_46">
              <input type="hidden" value="Cheese & Garlic Naan" id="name_46" name="name_46">
              <input type="submit" class="btn" onclick="passValues(46)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/peshawari-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Peshawari Naan</h5>
                    <h5 class="price"> $5 </h5>
                </div>
                <p>Naan stuffed with Nuts and Dry fruits</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_47" name="qty_47" value="1">
              <input type="hidden" value="8" id="price_47" name="price_47">
              <input type="hidden" value="Peshawari Naan" id="name_47" name="name_47">
              <input type="submit" class="btn" onclick="passValues(47)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Aloo-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Aloo Naan</h5>
                    <h5 class="price"> $5 </h5>
                </div>
                <p>Naan stuffed with spiced mashed potatoes</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_48" name="qty_48" value="1">
              <input type="hidden" value="8" id="price_48" name="price_48">
              <input type="hidden" value="Aloo Naan" id="name_48" name="name_48">
              <input type="submit" class="btn" onclick="passValues(48)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/kheema-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Kheema Naan / Paneer Naan</h5>
                    <h5 class="price"> $5 </h5>
                </div>
                <p>Naan stuffed with spiced lamb mince or spiced cottage cheese</p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_49" name="qty_49" value="1">
              <input type="hidden" value="8" id="price_49" name="price_49">
              <input type="hidden" value="Kheema Naan / Paneer Naan" id="name_49" name="name_49">
              <input type="submit" class="btn" onclick="passValues(49)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Chilli-Naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chilli Naan</h5>
                    <h5 class="price"> $4 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_50" name="qty_50" value="1">
              <input type="hidden" value="8" id="price_50" name="price_50">
              <input type="hidden" value="Chilli Naan" id="name_50" name="name_50">
              <input type="submit" class="btn" onclick="passValues(50)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/spinach-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Spinach Naan</h5>
                    <h5 class="price"> $4 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_51" name="qty_51" value="1">
              <input type="hidden" value="8" id="price_51" name="price_51">
              <input type="hidden" value="Spinach Naan" id="name_51" name="name_51">
              <input type="submit" class="btn" onclick="passValues(51)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/cheese-chili-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cheese & Chilli Naan</h5>
                    <h5 class="price"> $5 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_52" name="qty_52" value="1">
              <input type="hidden" value="8" id="price_52" name="price_52">
              <input type="hidden" value="Cheese & Chilli Naan" id="name_52" name="name_52">
              <input type="submit" class="btn" onclick="passValues(52)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/cheese-naan.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cheese & Spinach Naan</h5>
                    <h5 class="price"> $5 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_53" name="qty_53" value="1">
              <input type="hidden" value="8" id="price_53" name="price_53">
              <input type="hidden" value="Cheese & Spinach Naan" id="name_53" name="name_53">
              <input type="submit" class="btn" onclick="passValues(53)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Roti.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Roti</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> Wholemeal bread </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_54" name="qty_54" value="1">
              <input type="hidden" value="8" id="price_54" name="price_54">
              <input type="hidden" value="Roti" id="name_54" name="name_54">
              <input type="submit" class="btn" onclick="passValues(54)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Rice &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/steamed-rice.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Steamed Rice</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_55" name="qty_55" value="1">
              <input type="hidden" value="8" id="price_55" name="price_55">
              <input type="hidden" value="Steamed Rice" id="name_55" name="name_55">
              <input type="submit" class="btn" onclick="passValues(55)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/saffron-rice.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Saffron Rice</h5>
                    <h5 class="price"> $6 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_56" name="qty_56" value="1">
              <input type="hidden" value="8" id="price_56" name="price_56">
              <input type="hidden" value="Saffron Rice" id="name_56" name="name_56">
              <input type="submit" class="btn" onclick="passValues(56)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/coconut-rice.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Coconut Rice</h5>
                    <h5 class="price"> $6 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_57" name="qty_57" value="1">
              <input type="hidden" value="8" id="price_57" name="price_57">
              <input type="hidden" value="Coconut Rice" id="name_57" name="name_57">
              <input type="submit" class="btn" onclick="passValues(57)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/jeera-rice.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Jeera Peas Rice</h5>
                    <h5 class="price"> $6 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_58" name="qty_58" value="1">
              <input type="hidden" value="8" id="price_58" name="price_58">
              <input type="hidden" value="Jeera Peas Rice" id="name_58" name="name_58">
              <input type="submit" class="btn" onclick="passValues(58)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/biriyani-rice.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Biryani Rice</h5>
                    <h5 class="price"> $6 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_59" name="qty_59" value="1">
              <input type="hidden" value="8" id="price_59" name="price_59">
              <input type="hidden" value="Biryani Rice" id="name_59" name="name_59">
              <input type="submit" class="btn" onclick="passValues(59)" value="Add to Cart">
            </div>
          </div>

          <div class="sub-heading">
            <h3>&mdash; Sides &mdash; </h3>
          </div>

          <div class="food-items">
            <img src="images/papadam.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Papadams</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_60" name="qty_60" value="1">
              <input type="hidden" value="8" id="price_60" name="price_60">
              <input type="hidden" value="Papadams" id="name_60" name="name_60">
              <input type="submit" class="btn" onclick="passValues(60)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/cucumber-raita.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cucumber Raita</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_61" name="qty_61" value="1">
              <input type="hidden" value="8" id="price_61" name="price_61">
              <input type="hidden" value="Cucumber Raita" id="name_61" name="name_61">
              <input type="submit" class="btn" onclick="passValues(61)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/mango-chutney.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Sweet Mango Chutney</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_62" name="qty_62" value="1">
              <input type="hidden" value="8" id="price_62" name="price_62">
              <input type="hidden" value="Sweet Mango Chutney" id="name_62" name="name_62">
              <input type="submit" class="btn" onclick="passValues(62)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/Mint-Sause.webp">
            <div class="details">
                <div class="details-sub">
                    <h5>Mint Sauce</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_63" name="qty_63" value="1">
              <input type="hidden" value="8" id="price_63" name="price_63">
              <input type="hidden" value="Mint Sauce" id="name_63" name="name_63">
              <input type="submit" class="btn" onclick="passValues(63)" value="Add to Cart">
            </div>
          </div>

          <div class="food-items">
            <img src="images/pickles.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Pickles</h5>
                    <h5 class="price"> $3 </h5>
                </div>
                <p> </p>
            </div>
            <div class="other_details">
              <input type="number" min="0" id="qty_64" name="qty_64" value="1">
              <input type="hidden" value="8" id="price_64" name="price_64">
              <input type="hidden" value="Pickles" id="name_64" name="name_64">
              <input type="submit" class="btn" onclick="passValues(64)" value="Add to Cart">
            </div>
          </div>

        </form>
        
        <div class="sub-heading">
          <p>Phone: (03) 9568 1486</p>
          <p>Licenced and BYO Wine only</p>
          <p>All curries Gluten Free & Halal</p>
          <p>Conferences and group bookings accepted</p>
          <p>All prices include GST. Prices are subject to change without notice</p>
        </div>

      </div>

    
      <!-- This footer is added inside the div. Otherwise it will come in the middle of the page -->
      <footer class="footer">
        <table>
          <tr>
            <td style="vertical-align:middle"><h2>The Garden Indian Restaurant</h2></td>
            <td>
              <h2><u>Contact Us</u></h2>
              <br/>
              Chadstone Shopping Centre<br>
              1341 Dandenong Rd., Malvern East Vic., 3148<br>
              Phone: (03) 9568 1486<br><br>
                  
              <a class="footer__btn" href="mailto:thegardenrest@web.com">Email Us</a>
            </td>
            <td>
              <h2><u>We are Accepting</u></h2>
              <br>
              <img style="height: 50px;" src="../Restaurant/images/visa.png" alt="Visa"/>
              <img style="height: 50px;" src="../Restaurant/images/master.png" alt="Master"/>
              <img style="height: 50px;" src="../Restaurant/images/ae.png" alt="American Express"/> 
            </td>
            <td>
              <h2><u>Follow Us On</u></h2>
              <br>
              <a href="https://www.facebook.com/"></i>Facebook</a> <br>
              <a href="https://twitter.com/"></i>Twitter</a> <br>
              <a href="https://www.whatsapp.com/"></i>Whats App</a><br><br><br>
              <a href="../Restaurant/Report.html"></i>Report</a>
              <br><br><br><p>Upeksha Saparamadu - U1134218</p>
            </td>
          </tr>
        </table>
        
      </footer>
    </div>
  </body>
</html>
