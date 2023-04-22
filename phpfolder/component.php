<?php
  function component($productname, $productprice, $productimg, $productid, $productlink, $productmsg, $prdQty){
    $element= "   
    <a href=\"$productlink\" class=\"linking\" style=\"cursor: pointer; text-decoration: none;\">
    <form action=\"playstation.php\" method=\"post\">
      <div class=\"card\">
        <div class=\"imgBx\">
          <img src=\"$productimg\">
        </div>
        <div class=\"details\">
          <h4>$productname</h4>
          <div class=\"rating\">
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
          </div>
          <p>$productmsg</p>
          
          <p style=\"font-size: 13px; font-weight: 600;\">Price: $productprice FCFA</p>
          <button name=\"add\" type=\"submit\"><i class=\"fas fa-cart-arrow-down\" ></i>Add to chart</button>
          <input type='hidden' name='product_id' value='$productid'>
          <input type='hidden' name='qty' value='$prdQty'>
          <input type='hidden' name='pprice' value='$productprice'>
        </div> 
      </div>
    </form>

   </a>";
   echo $element;
  }

  function consoleDescription($productname, $productprice, $productimg, $productid, $productlink, $productmsg){
    $element= "   
    <a href=\"$productlink\" class=\"linking\" style=\"cursor: pointer; text-decoration: none;\">
    <form action=\"consoles.php\" method=\"post\">
      <div class=\"card\">
        <div class=\"imgBx\">
          <img src=\"$productimg\">
        </div>
        <div class=\"details\">
          <h4>$productname</h4>
          <div class=\"rating\">
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
          </div>
          <p>$productmsg</p>
          <p style=\"font-size: 13px; font-weight: 600;\">Price: $productprice FCFA</p>
          <button name=\"add\" type=\"submit\"><i class=\"fas fa-cart-arrow-down\" ></i>Add to chart</button>
          <input type='hidden' name='product_id' value='$productid'>
        </div> 
      </div>
    </form>

   </a>";
   echo $element;
  }  

  //Search Result Components
  function searchResult($productname, $productprice, $productimg, $productid, $productlink, $productmsg){
    $element = "
    <form action=\"details.php\" method=\"post\">
      <div class=\"game\">
        <a style=\"text-decoration: none; color: inherit;\" href=\"$productlink\">
          <div class=\"game_bg\">
            <div class=\"game_photo\">
              <img src=\"$productimg\" alt=\"\">
            </div>
            <div class=\"game_message\">
              <h4>$productname</h4>
              <p class=\"price\">$productprice Fcfa</p>
              <p class=\"message\">$productmsg</p>
              <button type=\"submit\" name=\"add\" class=\"btn btn-warning\">Add To Cart <i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>
          </div>
        </a>
      </div>
    </form>";
    echo $element;
  }

  //Itmes for sale Description
  function items($productname, $productprice, $productimg, $productid, $productlink, $productmsg){
    $element= "   
    <a href=\"$productlink\" class=\"linking\" style=\"cursor: pointer; text-decoration: none;\">
    <form action=\"items.php\" method=\"post\">
      <div class=\"card\">
        <div class=\"imgBx\">
          <img src=\"$productimg\">
        </div>
        <div class=\"details\">
          <h4>$productname</h4>
          <div class=\"rating\">
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
          </div>
          <p>$productmsg</p>
          <p style=\"font-size: 13px; font-weight: 600;\">Price: $productprice FCFA</p>
          <button name=\"add\" type=\"submit\"><i class=\"fas fa-cart-arrow-down\" ></i>Add to chart</button>
          <input type='hidden' name='product_id' value='$productid'>
        </div> 
      </div>
    </form>

   </a>";
   echo $element;
  }  

  //Ninyendo Description
  function nintendo($productname, $productprice, $productimg, $productid, $productlink, $productmsg){
    $element= "   
    <a href=\"$productlink\" class=\"linking\" style=\"cursor: pointer; text-decoration: none;\">
    <form action=\"nintendo.php\" method=\"post\">
      <div class=\"card\">
        <div class=\"imgBx\">
          <img src=\"$productimg\">
        </div>
        <div class=\"details\">
          <h4>$productname</h4>
          <div class=\"rating\">
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
          </div>
          <p>$productmsg</p>
          <p style=\"font-size: 13px; font-weight: 600;\">Price: $productprice FCFA</p>
          <button name=\"add\" type=\"submit\"><i class=\"fas fa-cart-arrow-down\" ></i>Add to chart</button>
          <input type='hidden' name='product_id' value='$productid'>
        </div> 
      </div>
    </form>

   </a>";
   echo $element;
  }

  function xbox($productname, $productprice, $productimg, $productid, $productlink, $productmsg){
    $element= "   
    <a href=\"$productlink\" class=\"linking\" style=\"cursor: pointer; text-decoration: none;\">
    <form action=\"xbox.php\" method=\"post\">
      <div class=\"card\">
        <div class=\"imgBx\">
          <img src=\"$productimg\">
        </div>
        <div class=\"details\">
          <h4>$productname</h4>
          <div class=\"rating\">
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px; \" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
          </div>
          <p>$productmsg</p>
          <p style=\"font-size: 13px; font-weight: 600;\">Price: $productprice FCFA</p>
          <button name=\"add\" type=\"submit\"><i class=\"fas fa-cart-arrow-down\" ></i>Add to chart</button>
          <input type='hidden' name='product_id' value='$productid'>
        </div> 
      </div>
    </form>

   </a>";
   echo $element;
  }


  function cartElement($id,$productimg,$productname,$productprice,$productid, $prdQty, $prdTotal){
    $element = "            
    <div class=\"cart-items\">
      <div class=\"border rounded classification\">
       <div class=\"main_div row bg-white\">
          <div class=\"col-md-3\">
            <input type='hidden' class=\"pid\" name='product_id' value='$productid'>
            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid\">
         </div>
          <div class=\"col-md-6 quantity-total\">
            <h5 class=\"pt-2\">$productname</h5>
            <small class=\"text-secondary\">Seller: PatrickJr</small>
            <h5 class=\"pt-2\">$productprice Fcfa</h5>
            <h6 class=\"pt-2 bool\">Total Price: <span class=\"total\">$prdTotal</span> Fcfa</h6>
            <!---<h6 class=\"pt-2\">Total Price: <input class=\"\" readonly type=\"text\" style=\"background-color: none; font-weight: 500; width:; cursor: default;  outline: none; border: none; \" value=\" Fcfa\" name=\"ptoal\" id=\"\"></h6>---->
            <input type=\"hidden\" class=\"pprice\" value=\"$productprice\">
            <button style=\" type=\"submit\" onclick=\"myButton()\" class=\"btn btn-warning\">Refresh Total</button>
           
            <form style=\"display: inline; margin-bottom: 5px;\" action=\"cart.php?action=remove&id= $productid\" method=\"post\" class=\"cart-items\">
              <button id=\"pushbutton\" style=\" margin-top: 0px;\" type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
            </form>  
          </div>
          <div class=\"col-md-3 p py-5 pr-6\">
            <div class=\"d-inline\">
              <!----<button id=\"subtraction\" type=\"button\" class=\"ball-sub btn bg-light my-1 border rounded-circle\"><i
                 class=\"fas fa-minus\"></i></button>---->
                 <input id=\"\" type=\"number\" min=\"1\" name=\"qty\" value=\"$prdQty\" class=\"form-control  w-75 d-inline itemQty\">
             <!-----<button id=\"addition\"  type=\"button\" class=\" btn bg-light border my-1 rounded-circle\"><i
                 class=\"fas fa-plus\"></i></button>---->
           </div>
         </div>
       </div>
      </div>
   </div>";
   echo $element;
  }



  //Dragon Ball Fighter Z review page
  function cartDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Fighting & Combat</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">January 26, 2018</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\"> Dragon Ball Fighter Z is a 3D fighting game, simulation 2D, developed by Arc System
              Work and Published
              by Namdia Banco Entertainment. Based on the DragonBaall franchise, it was released for the PlayStation
              4, Xbox One and Microsoft Windows in most regions in January 2018, and in Japan the following month and
              was released worldwide for the Nintendo Switch in September 2018.</p>
            <h5>Award: Best Fighting Game 2018</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }
  //spiderma review
  function spiderDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review9.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>	Action-adventure</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">September 7, 2018</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Marvel's Spider-Man is a 2018 action-adventure game developed by Insomniac Games 
            and published by Sony Interactive Entertainment. Based on the Marvel Comics superhero Spider-Man, it is 
            inspired by the long-running comic book mythology and adaptations in other media. In the main storyline, 
            the super-human crime lord Mister Negative orchestrates a plot to seize control of New York City's criminal 
            underworld. When Mister Negative threatens to release a deadly virus, Spider-Man must confront him and protect 
            the city while dealing with the personal problems of his civilian persona, Peter Parker.  </p>
            <h5>Award: PlayStation Game Of The Year 2018</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }    

  //God Of War Review 
  function godDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review10.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Action-adventure, hack and slash</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">April 20, 2018</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">God of War is an action-adventure game developed by Santa Monica Studio and 
            published by Sony Interactive Entertainment (SIE). Released on April 20, 2018, for the PlayStation 4 (PS4), 
            it is the eighth installment in the God of War series, the eighth chronologically, and the sequel to 2010's 
            God of War III. Unlike previous games, which were loosely based on Greek mythology, this installment is rooted 
            in Norse mythology, with the majority of it set in ancient Norway in the realm of Midgard.  </p>
            <h5>Award: Game Of The Year 2018</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }    

  //LOU2 Review 
  function lastDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review11.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Action-adventure</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">June 19, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog 
            and published by Sony Interactive Entertainment for the PlayStation 4. Set five years after The Last of Us 
            (2013), players control two characters in a post-apocalyptic United States whose lives intertwine: Ellie, who 
            sets out for revenge after suffering a tragedy, and Abby, a soldier who becomes involved in a conflict with a cult. 
            The game is played from the third-person perspective. Players can use firearms, improvised weapons, and stealth to 
            fight human enemies and cannibalistic creatures created from people who are infected by a mutated strain of the 
            Cordyceps fungus.  </p>
            <h5>Award: 	Most Anticipated Game </h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }   

  //RDR2 Review 
  function redDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review12.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Action-adventure</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">November 19, 2019</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Red Dead Redemption 2 is a 2018 action-adventure game developed and published 
            by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game 
            Red Dead Redemption. The story is set in 1899 in a fictionalized representation of the Western, Midwestern, 
            and Southern United States and follows outlaw Arthur Morgan, a member of the Van der Linde gang. Arthur must 
            deal with the decline of the Wild West whilst attempting to survive against government forces, rival gangs, 
            and other adversaries. The story also follows fellow gang member John Marston, the protagonist of Red Dead Redemption. </p>
            <h5>Award: PlayStaion Game Of The Year 2019</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //CyberPunk Review Page review page
  function cyberDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review2.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Role Playing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">November 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Cyberpunk 2077 is an upcoming role-playing video game developed and published by CD Projekt.
             It is scheduled to be released for PlayStation 4, Windows, and Xbox One and Stadia by the end of the year
             and PlayStation 5 and Xbox Series X/S in 2021. Adapted from the Cyberpunk franchise, the story takes place in dystopian Night City,
             an open world with six distinct regions. Players assume the first-person perspective of a customisable mercenary known as V,
             who can acquire skills in hacking and machinery, an arsenal of ranged weapons, and options for melee combat. </p>
            <h5>Award: Gamers' Choice Awards</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //Assassins Creed Valhalla Review Page review page
  function assassinDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review3.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Action role-playing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">November 10, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Assassin's Creed Valhalla is an upcoming action role-playing video game developed by Ubisoft Montreal and published by Ubisoft. 
            It is the twelfth major installment and the twenty-second release in the Assassin's Creed series, and a successor to the 2018 game Assassin's 
            Creed Odyssey. Set in 873 AD, the game recounts an alternative history of the Viking invasion of Britain. The player controls Eivor, 
            a Viking raider who becomes embroiled in the conflict between the Brotherhood of Assassins and the Templar Order. </p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //Marvel Review Page review page
  function marvelDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review4.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Action role-playing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">4 September 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Marvel's Avengers is an action role-playing brawler video game co-developed by Crystal Dynamics and published 
            by Square Enix. Based on the Marvel Comics superhero team the Avengers, the game is mainly inspired by the Marvel Cinematic 
            Universe's iteration of the group, as well as the long-running comic book mythology. The game's main storyline takes 
            place five years after A-Day, a celebratory day for the Avengers wherein a tragedy resulted in death and destruction, 
            and the Avengers were blamed. The team is forced to reassemble to save the world from peril in the form of A.I.M., 
            led by George Tarleton / MODOK, which threatens to end the world of superpowered individuals. </p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }    

  //JumpForce Review Page review page
  function jumpDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review5.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Fighting & Combat</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">August 28, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Jump Force (Japanese: ジャンプフォース, Hepburn: Janpu Fōsu) is a crossover fighting game developed 
            by Spike Chunsoft and published by Bandai Namco Entertainment featuring characters from various manga series featured in 
            Shueisha's Weekly Shōnen Jump anthology in celebration of the magazine's 50th anniversary.The game was released 
            on February 15, 2019 for Windows, PlayStation 4, and Xbox One, with a Nintendo Switch port was released worldwide 
            on August 28, 2020.</p>
            <h5>Award:Nominee For Best Fighting Game </h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>
          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }    

  //Tekken 7 Review Page review page
  function tekkenDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review6.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Fighting & Combat</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">March 18, 2015</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Tekken 7 is a fighting game developed and published by Bandai Namco Entertainment. 
            It is the ninth overall installment in the Tekken series. Tekken 7 had a limited arcade release in March 2015. 
            An updated arcade version, Tekken 7: Fated Retribution, was released in July 2016, and features expanded content including new stages, 
            costumes, items and characters.The home versions released for PlayStation 4, Xbox One and Microsoft Windows in June 2017 were 
            based on Fated Retribution</p>
            <h5>Award:Nominee For Best Fighting Game 2017</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>
          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  
  
  //Tony Hawks Review Page review page
  function tonyDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review7.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Extreme sports</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">September 4, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Tony Hawk's Pro Skater 1 + 2 is a skateboarding video game developed by Vicarious Visions 
            and published by Activision, which was released on Windows, PlayStation 4, and Xbox One on September 4, 2020. 
            It is a remaster of the first two games in the Tony Hawk's series: Tony Hawk's Pro Skater (1999) and Tony Hawk's 
            Pro Skater 2 (2000) which were originally developed by Neversoft. It is the first major game in the series since 
            Tony Hawk's Pro Skater 5 (2015).</p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>
          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }        

  //StarWars Review Page review page
  function starDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"review8.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Single Role Playing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">May 21, 2019</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\"> 
            Vader Immortal: A Star Wars VR Series is a three-part VR experience created by ILMxLAB that involves Darth Vader. 
            It was written by David S. Goyer, who had previously acted as a writer for the The Dark Knight trilogy. 
            According to Tim Alexander, the supervisor of ILMxLAB, they came up with the idea when deciding how to best expand 
            the Star Wars universe, with Vader being the first one to come up.The first episode, Vader Immortal: A Star Wars VR Series
            – Episode I, launched on May 21, 2019 on the Oculus Quest. </p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>
          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }        






  //Mario Kart 8 Review Page
  function mariokartDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"nin-review1.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Kart Racing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">April 2017</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Mario Kart 8 Deluxe is an enhanced version for the Nintendo Switch. It retains Mario Kart series
            game mechanics, where players control Mario Franchise characters in Kart Racinng, collecting a variety of items to hinder 
            opponents or gain advantages in the race. It introduces anti-gravity driving on walss or ceiling and allows players to bump 
            each another for a short boost. It has a Single and Multiplayer mode, including online via the Nintendo Network.</p>
            <h5>Award:Switch Best Selling Game</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }
  
  //Animal Crossing Review Page
  function animalDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"nin-review2.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Adventure & Pet</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">March 20, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Animal Crossing: New Horizons is a 2020 life simulation video game developed and published by Nintendo 
            for the Nintendo Switch. It is the fifth main series title in the Animal Crossing series. New Horizons was released in all 
            regions on March 20, 2020. The player assumes the role of a customizable character who moves to a deserted island after 
            purchasing a deserted island package from Tom Nook, a tanuki character who is a staple of the series</p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }

  //brosU Crossing Review Page
  function brosDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"nin-review3.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>	Platform</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">January 11, 2019</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">New Super Mario Bros U is a 2.5D side-scrolling platform video game developed and published in 
            2012 by Nintendo as a launch game for the Wii U. It is the fourth in the New Super Mario Bros. series. It is a sequel 
            to New Super Mario Bros. Wii (2009) and a follow-up to New Super Mario Bros. 2 (2012). As part of the Year of Luigi campaign, 
            a downloadable expansion to the game, New Super Luigi U, was released in June 2013. A standalone retail version was released 
            the following month and later copies of the base game included the expansion on disc. This is the first Mario game to be 
            released in high-definition graphics. </p>
            <h5>Award:Game of the Year 2012</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }

  //Arms Crossing Review Page
  function armsDescription($productimg,$productname,$productprice,$productid){
    $element = " 
    <form action= \"nin-review4.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Combat & Fighting</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">June 16, 2017</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Arms(styled as ARMS) is a fighting game developed and published by Nintendo for the Nintendo Switch
            . The game differentiates itself from standard fighting games with its unconventional 
            fighting system where every playable character fights with long range attacks, and up to four players can choose a 
            fighter and battle using a variety of extendable, customizable arms to knock out opponents in a three-dimensional arena. 
            By July 2018, the game had sold over two million copies, making it one of the best-selling games on the Switch. </p>
            <h5>Award:One Of Switch Best Selling Game</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half\"></i>
              
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }

  //Paper Mario Crossing Review Page
  function paperDescription($productimg,$productname,$productprice,$productid){
    $element = " 
    <form action= \"nin-review5.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>	Role-playing, action-adventure, puzzle</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">July 17, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Paper Mario: The Origami King is a 2020 cross-genre video game developed by Intelligent 
            Systems and published by Nintendo for the Nintendo Switch console. It is the sixth game in the Paper Mario series, 
            part of the larger Mario franchise, and the sequel to Paper Mario: Color Splash (2016).
            The story follows Mario and his friends as he sets on a journey to prevent the Mushroom Kingdom
             from being transformed into origami. To do so, Mario must free the castle from five streamers across all the Kingdom.  </p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>

              
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //Mario Maker Crossing Review Page
  function makerDescription($productimg,$productname,$productprice,$productid){
    $element = " 
    <form action= \"nin-review6.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Level editor, platform</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">June 28, 2019</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Super Mario Maker 2 is a side-scrolling platform game and game creation system developed 
            and published by Nintendo for the Nintendo Switch. It is the sequel to Super Mario Maker. The gameplay is largely retained
            from that of its predecessor, in which players create their own custom 
            courses using assets from various games across the Super Mario franchise and share them online. Super Mario Maker 2 introduces 
            new features and course assets, including a new course style and assets based on Super Mario 3D World.  </p>
            <h5>Award:Family Game of the Year 2020</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half\"></i> 
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //Mario Odyssey Crossing Review Page
  function odysseyDescription($productimg,$productname,$productprice,$productid){
    $element = " 
    <form action= \"nin-review7.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>	Platform, action-adventure</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">October 27, 2017</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Super Mario Odyssey is a platform game developed and published by Nintendo for 
            the Nintendo Switch. An entry in the Super Mario series, it follows Mario and Cappy, 
            a sentient hat that allows Mario to control other characters and objects, as they journey across various 
            worlds to save Princess Peach from his nemesis Bowser, who plans to forcibly marry her. In contrast to the 
            linear gameplay of prior entries, the game returns to the primarily open-ended, 3D platform gameplay featured 
            in Super Mario 64 and Super Mario Sunshine.</p>
            <h5>Award:Best Console Game 2017</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i> 
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //Smash Bros Crossing Review Page
  function smashDescription($productimg,$productname,$productprice,$productid){
    $element = " 
    <form action= \"nin-review8.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Fighting & Combat</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">December 7, 2018</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Super Smash Bros. Ultimate[b] is a 2018 crossover fighting game developed by Bandai Namco Studios 
            and Sora Ltd. and published by Nintendo for the Nintendo Switch. It is the fifth installment in the Super Smash Bros. 
            series, succeeding Super Smash Bros. for Nintendo 3DS and Wii U. The game follows the series' traditional style of gameplay: 
            controlling one of the various characters, players must use differing attacks to weaken their opponents and knock them 
            out of an arena</p>
            <h5>Award:Best Fighting Game 2019</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i> 
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  



  //Borderland Review Page
  function borderDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review1.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Action & Shoot</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">13 September, 2019</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Borderlands 3 is an Action Role-Playing First Person Shooter video game devloped by Gearbox Software 
              and published by 2K Games. It is sequell to 2012's Borderlands 2, and the fourth entry in the main Borderlands Series. It has a Single 
              and Multiplayer mode also compatible in the Xbox Games Pass Network.<p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }

  //Forza 4 Review Page
  function forzaDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review2.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>	Racing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">September 28, 2018</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Forza Horizon 4 is a 2018 racing video game developed by Playground Games and published 
            by Microsoft Studios. It was released on 2 October 2018 on Xbox One and Microsoft Windows after being announced 
            at Xbox's E3 2018 conference. The game is set in a fictionalised representation of areas of Great Britain.<p>
            <h5>Award:Best Sports/Racing Game 2018</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //PUBG Review Page
  function pubgDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review3.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Battle royale</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">December 20, 2017</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed 
            and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. 
            The game is based on previous mods that were created by Brendan \"PlayerUnknown\" Greene for other 
            games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under 
            Greene's creative direction. In the game, up to one hundred players parachute onto an island 
            and scavenge for weapons and equipment to kill others while avoiding getting killed themselves.<p>
            <h5>Award:Best Multiplayer Game 2017</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  

  //COD Review Page
  function codDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review4.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>First-person shooter, battle royale</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">October 12, 2018</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Call of Duty: Black Ops 4 (stylized as Call of Duty: Black Ops IIII) 
            is a 2018 multiplayer first-person shooter developed by Treyarch and published by Activision. 
            It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 12, 2018. 
            It is a sequel to the 2015 game Call of Duty: Black Ops III, the fifth entry in the Black Ops sub-series, 
            and the 15th installment in the Call of Duty series overall. <p>
            <h5>Award:Gamescom's Best Social/Online Game </h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }
  
  //COD Review Page
  function nfsDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review5.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Racing</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">November 8, 2019</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Need for Speed Heat (stylized as NFS Heat) is a racing video game developed 
            by Ghost Games and published by Electronic Arts for Microsoft Windows, PlayStation 4 and Xbox One. 
            It is the twenty-fourth installment in the Need for Speed series and commemorates the series' 25th anniversary. 
            The game received mixed reviews from critics, who mostly found the game to be an 
            improvement over the 2015 Need for Speed reboot and Payback but not enough to be a full return to form for the franchise.<p>
            <h5>Award:Nothing Yet</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }     

  //halo5 Review Page
  function haloDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review6.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>First-person shooter</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">October 27, 2015</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Halo 5: Guardians is a first-person shooter video game developed by 343 
            Industries and published by Microsoft Studios for the Xbox One. The fifth mainline entry and tenth 
            overall in the Halo series. The game's plot follows two 
            fireteams of human supersoldiers: Blue Team, led by Master Chief, and Fireteam Osiris, led by Spartan 
            Locke. When the former goes absent without leave to track down the artificial intelligence construct Cortana, 
            Master Chief's loyalty is called into question, and Fireteam Osiris is sent to retrieve him.<p>
            <h5>Award:Best Online Multiplayer 2015</h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }       

  //halo5 Review Page
  function forceDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review7.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Fighting & Combat</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">August 28, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Jump Force (Japanese: ジャンプフォース, Hepburn: Janpu Fōsu) is a crossover fighting game developed 
            by Spike Chunsoft and published by Bandai Namco Entertainment featuring characters from various manga series featured in 
            Shueisha's Weekly Shōnen Jump anthology in celebration of the magazine's 50th anniversary.The game was released 
            on February 15, 2019 for Windows, PlayStation 4, and Xbox One, with a Nintendo Switch port was released worldwide 
            on August 28, 2020.<p>
            <h5>Award:Nominee For Best Fighting Game </h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }    
  
  //halo5 Review Page
  function cupDescription($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"xbox-review8.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"\" src=\"$productimg\" alt=\"\"></div>
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Run and Gun</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">August 28, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">Cuphead is a run and gun video game developed and published by the Canadian video 
            game developer StudioMDHR in 2017. The game was inspired by the rubber hose style of animation used in 
            cartoons of the 1930s, such as the work of Fleischer Studios and Walt Disney Animation Studios, and sought to emulate 
            their subversive and surrealist qualities. <p>
            <h5>Award: Best Independent Game </h5>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }    
  
  //PS5 Review Page
  function ps5review($productimg,$productname,$productprice,$productid){
    $element = "    
    <form action= \"ps5.php\" method=\"post\">
      <div class=\"game-rating\">
        <div class=\"image-view\"><img class=\"shadow p-3 mb-1  \" src=\"./Homepics/ps5.jpg\" alt=\"\"></div>
        <input type='hidden' name='' value='$productimg'>
        
        <div class=\"text-rating\">
          <div class=\"text-rating-container\">
            <p>Play Has No Limits</p>
            <h3>$productname</h3>
            <h5>Initial Release: <span class=\"release-date\">November 12, 2020</span></h5>
            <h5>Price: FCFA $productprice</h5>

            <p class=\"DB-history\">The PlayStation 5 (PS5) is a home video game console developed by Sony Interactive Entertainment. 
            Announced in 2019 as the successor to the PlayStation 4, the PS5 was released on November 12, 2020 in North America, Australia, 
            New Zealand, Japan, Singapore, and South Korea, and is set to launch on November 19, 2020 for the rest of the world.
            The platform launched in two varieties: a base model with an Ultra HD Blu-ray-compatible optical disc drive, and a Digital 
            Edition lacking this drive, serving as a lower-cost variant for consumers who prefer to buy games through digital download.
            The PlayStation 5 has a solid-state drive customized for high-speed data streaming to enable significant improvements in graphical 
            performance. It has a custom AMD GPU capable of ray tracing, 4K resolution display at up to 120 frames per second, 
            3D audio effects, and backward compatibility with most PlayStation 4 and PlayStation VR games. <p>
            <h5>Type: Home Video Game Console </h5>
            <h6>Website for more Information: <a href=\"https://www.playstation.com/en-us/ps5/\">playstation.com/ps5</a> </h6>
            <div class=\"stars-rating\">
              <h6>Rating:</h6>
              <div class=\"rating\">
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
              </div>
            </div>
            <div class=\"buy-game\">
              <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
              <input type='hidden' name='product_id' value='$productid'>
            </div>

          </div>

        </div>

      </div>
    </form>";
    echo $element;
  }  
  
    //Xbox Series X Review Page
    function seriesX($productimg,$productname,$productprice,$productid){
      $element = "    
      <form action= \"series.php\" method=\"post\">
        <div class=\"game-rating\">
          <div class=\"image-view\"><img class=\"shadow\" src=\"./Homepics/xbox.jpg\" alt=\"\"></div>
          <input type='hidden' name='' value='$productimg'>
          
          <div class=\"text-rating\">
            <div class=\"text-rating-container\">
              <p>Power Your Dreams</p>
              <h3>$productname</h3>
              <h5>Initial Release: <span class=\"release-date\">November 11, 2020</span></h5>
              <h5>Price: FCFA $productprice</h5>
  
              <p class=\"DB-history\">The Xbox Series X is powered by a custom 7 nm AMD Zen 2 CPU with eight cores running at a nominal 3.8 GHz
              , or when simultaneous multithreading (SMT) is used, at 3.6 GHz. One CPU core is dedicated to the underlying operating system. 
              The graphics processing unit is also a custom unit based on AMD's RDNA 2 graphics architecture. It has a total of 56 compute units 
              (CUs) with 3584 cores, with 52 CUs and 3328 cores enabled, and will be running at a fixed 1.825 GHz. This unit is capable of 12.15 
              teraflops of computational power. The unit ships with 16GB of GDDR6 SDRAM, with 10GB running at 560GB/s primarily to be used 
              with the graphics system and the other 6GB at 336GB/s to be used for the other computing functions. After accounting for the system 
              software, approximately 13.5GB of memory will be available for games and other applications, with the system software only drawing 
              from the slower pool. The Xbox Series X target performance is to render games at 4K resolution at 60 frames per second, with 
              the console being about four times as powerful as the Xbox One X. The Series X can support up to 120 frames per second, and can 
              render up to 8K resolution.</h5>
              <h6>Website for more Information: <a href=\"https://www.xbox.com/en-US/consoles/xbox-series-x\">xbox.com</a> </h6>
              <div class=\"stars-rating\">
                <h6>Rating:</h6>
                <div class=\"rating\">
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                </div>
              </div>
              <div class=\"buy-game\">
                <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
                <input type='hidden' name='product_id' value='$productid'>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </form>";
      echo $element;
    } 

    //Xbox Series X Review Page
    function Ninswitch($productimg,$productname,$productprice,$productid){
      $element = "    
      <form action= \"switch.php\" method=\"post\">
        <div class=\"game-rating\">
          <div class=\"image-view\"><img class=\"\" src=\"./pictures/new console/switch.png\" alt=\"\"></div>
          <input type='hidden' name='' value='$productimg'>
          
          <div class=\"text-rating\">
            <div class=\"text-rating-container\">
              <p>Power Your Dreams</p>
              <h3>$productname</h3>
              <h5>Initial Release: <span class=\"release-date\">March 3, 2017</span></h5>
              <h5>Price: FCFA $productprice</h5>
  
              <p class=\"DB-history\">The Nintendo Switch[h] is a video game console, developed by Nintendo and released worldwide in 
              most regions on March 3, 2017. It is a hybrid console that can be used as either a home console or a portable device. 
              Its wireless Joy-Con controllers, with standard buttons and directional analog sticks for user input, motion sensing, 
              and tactile feedback, can attach to both sides of the console to support handheld-style play. They can also connect to 
              a grip accessory to provide a traditional home console gamepad form, or be used individually in the hand like the Wii 
              Remote and Nunchuk, supporting local multiplayer modes. The Nintendo Switch's software supports online gaming through 
              Internet connectivity, as well as local wireless ad hoc connectivity with other consoles. Nintendo Switch games and 
              software are available on both physical flash-based ROM cartridges and digital distribution via Nintendo eShop; the 
              system has no region lockout.</h5>
              <h6>Website for more Information: <a href=\"https://www.nintendo.com/switch/\">www.nintendo.com/switch/</a> </h6>
              <div class=\"stars-rating\">
                <h6>Rating:</h6>
                <div class=\"rating\">
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                  <i style=\"font-size: 14px;\" class=\"fas fa-star\"></i>
                </div>
              </div>
              <div class=\"buy-game\">
                <button name=\"add\" type=\"submit\">Add To Cart<i class=\"fas fa-cart-arrow-down\"></i></button>
                <input type='hidden' name='product_id' value='$productid'>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </form>";
      echo $element;
    }
?>