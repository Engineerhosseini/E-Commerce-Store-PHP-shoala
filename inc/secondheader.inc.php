<!--New option for Header include file 
-->
<link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/newHeader.css">

<section id="profileheader">
      <div class="GContainer">
        <div class="headerconfig">
          <div id="logo">
          <a href="home.php">
          <img src="img/logo.svg" class="profile-image headerItem">
          </a>  
          <a href="home.php"><h1 class="home">Home</h1></a>
            
          </div>
          <div class="reviews vline headerItem p_top">
            
            <input class="search item grey_item" name="search" type="text" placeholder="SEARCH" required>
            <form action="#">
          <select class="item grey_item" name="Categories" id="categories">
            <option value="All Categories">All Categories</option>
            <option value="#1">PHP</option>
            <option value="#2">Java</option>
            <option value="#3">Golang</option>
            <option value="#4">Python</option>
            <option value="#5">C#</option>
          </select>
    </form>
              <button type="submit" class="BTN search_button item">SEARCH</button>
            

            
            <br>
            
          </div>
          <div class="logout vline headerItem p_top">
          <form action="cart.php">
          <button type="submit" class="BTN search_button item">MY CART</button>
          <div class="header_login" id="display_login">
            
          <img class="profile_header" src="img/profileImage.png" class="profile-image">
          <a href="profile.php"><h1>Account</h1></a>
          </div>  
        </form> 
        </div>
        </div>
      </div>
    </section>
    