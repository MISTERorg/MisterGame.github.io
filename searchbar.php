<form autocomplete="off" action="details.php" method="post">
  <div class="wrapper_contain">
    <div class="containing_board">
      <div class="search_box">
        <div class="dropdown">
          <div class="default_option" id="all_container"><span id="names">ALL</span></div>
          <ul class="contains">
            <li class="containing">All</li>
            <li class="containing">Recent</li>
            <!----<li class="containing">Popular</li>--->
          </ul>
        </div>
        <div class="search_field">
          <input style="outline: none;"  type="text" id="search" name="search" class="input" placeholder="Search">
          <button style="border: none; text-decoration: none;" name="submit" type="submit"><i class="photo"><img
                id="photo" src="./pictures/search.png" width="30px"></i></button>
        </div>
      </div>
    </div>

  </div>
</form>
<div class="col-md-5 search_position" style="position: relative;  margin-left: px; z-index: 100;">
  <div class="list-group" id="show-list">
    <!-- Here autocomplete list will be display -->
  </div>
</div>