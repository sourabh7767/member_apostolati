<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
<style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:500px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  overflow: hidden;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

/* nav bar css */
*,
*::after,
*::before{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.html{
    font-size: 62.5%;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.container{
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.navbar{
    /* box-shadow: 0px 5px 10px 0px #aaa; */
    /* position: -webkit-sticky; */
    width: 100%;
    background: #99e9cf9f;
    color: #000;
    opacity: 0.85;
    z-index: 100;
    margin-top: 10px;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
    order: 1;
    font-size: 2.3rem;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a{
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover{
    color: #117964;
}

@media (max-width: 768px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: block;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 28px;
        width: 35px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }
    
    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: #fff;
        height: 100vh;
        max-width: 300px;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        box-shadow:  5px 0px 10px 0px #aaa;
        overflow: scroll;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .logo{
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 2.5rem;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
}

.button {
  display: inline-flex;
  height: 40px;
  width: 150px;
  border: 2px solid #BFC0C0;
  margin: 20px 20px 20px 20px;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-size: .8em;
  letter-spacing: 1.5px;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

a {
  color: #ffff;
  text-decoration: none;
  letter-spacing: 1px;
}


/* First Button */
#button-2 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-2 a {
  position: relative;
  transition: all .35s ease-Out;
}

#slide {
  width: 100%;
  height: 100%;
  left: -200px;
  background: linear-gradient(to right, #25c481, #25b7c4);
  position: absolute;
  transition: all .35s ease-Out;
  bottom: 0;
}

#button-2:hover #slide {
  left: 0;
}

#button-2:hover a {
  color: #ffff;
}
/* #button-2{
    align-items: center;
} */
.leftButton{
    text-align: right;
}

/* modall css  */
.wrapper {
  height: 100vh;
  /* This part is important for centering the content */
  display: flex;
  align-items: center;
  justify-content: center;
  /* End center */
  background: -webkit-linear-gradient(to right, #834d9b, #d04ed6);
  background: linear-gradient(to right, #834d9b, #d04ed6);
}

.wrapper a {
  display: inline-block;
  text-decoration: none;
  padding: 15px;
  background-color: #fff;
  border-radius: 3px;
  text-transform: uppercase;
  color: #585858;
  font-family: 'Roboto', sans-serif;
}

.modal {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(77, 77, 77, .7);
  transition: all .4s;
}

.modal:target {
  visibility: visible;
  opacity: 1;
}

.modal__content {
  border-radius: 4px;
  position: relative;
  width: 500px;
  max-width: 90%;
  background: #fff;
  padding: 1em 2em;
}

.modal__footer {
  text-align: right;
  a {
    color: #585858;
  }
  i {
    color: #d02d2c;
  }
}
.modal__close {
  position: absolute;
  top: 10px;
  right: 10px;
  color: #585858;
  text-decoration: none;
}
/* form css */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.container1{
    max-width: 700px;
    width: 100%;
    background: #ffffff;
    border-radius: 0.5rem;
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1),
                0px 5px 12px -2px rgba(0, 0, 0, 0.1),
                0px 18px 36px -6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 10px;
}

.container1 .title{
    padding: 25px;
    background: #f6f8fa;
}

.container1 .title p{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container1 .title p::before{
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 3px;
    background: linear-gradient(to right, #F37A65, #D64141);
}

.user_details{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 25px;
}

.user_details .input_box{
    width: calc(100% / 2 - 20px);
    margin: 0 0 12px 0;
}

.input_box label{
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
}

.input_box label::after{
    content: " *";
    color: red;
}

.input_box input{
    width: 100%;
    height: 45px;
    border: none;
    outline: none;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 15px;
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1);
    background-color: #f6f8fa;
    font-family: 'Poppins', sans-serif;
    transition: all 120ms ease-out 0s;
}


.input_box input:focus,
.input_box input:valid{
    box-shadow: 0px 0px 0px 2px #AC8ECE;
}

form .gender{
    padding: 0px 25px;
}

.gender .gender_title{
    font-size: 20px;
    font-weight: 500;
}

.gender .category{
    width: 80%;
    display: flex;
    justify-content: space-between;
    margin: 5px 0;
}

.gender .category label{
    display: flex;
    align-items: center;
    cursor: pointer;
}

.gender .category label .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border: 4px solid transparent;
    transition: all 0.3s ease;
}

#radio_1:checked ~ .category label .one,
#radio_2:checked ~ .category label .two,
#radio_3:checked ~ .category label .three{
    border-color: #d9d9d9;
    background: #D64141;
}

.gender input{
    display: none;
}

.reg_btn{
    padding: 25px;
    margin: 15px 0;
}

.reg_btn input{
    height: 45px;
    width: 100%;
    border: none;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    background: linear-gradient(to right, #F37A65, #D64141);
    border-radius: 5px;
    color: #ffffff;
    letter-spacing: 1px;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2);
}

.reg_btn input:hover{
    background: linear-gradient(to right, #D64141, #F37A65);
}

@media screen and (max-width: 584px){

    .user_details{
        max-height: 340px;
        overflow-y: scroll;
    }

    .user_details::-webkit-scrollbar{
        width: 0;
    }

    .user_details .input_box{
        width: 100%;
    }

    .gender .category{
        width: 100%;
    }

}


@media screen and (max-width: 419px){
    .gender .category{
        flex-direction: column;
    }   
}


.input_box select{
    width: 100%;
    height: 45px;
    border: none;
    outline: none;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 15px;
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1);
    background-color: #f6f8fa;
    font-family: 'Poppins', sans-serif;
    transition: all 120ms ease-out 0s;
}


.input_box select:focus,
.input_box select:valid{
    box-shadow: 0px 0px 0px 2px #AC8ECE;
}
</style>
<div>

    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#">Club List</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <h1 class="logo">Clubs</h1>
        </div>
      </nav>
</div>
<div class="leftButton">
    <div class="button" id="button-2">
        <div id="slide"></div>
        <a href="#demo-modal">Let's Go!</a>
      </div>
</div>
    <!--for demo wrap-->
    <h1>Fixed Table header</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Code</th>
            <th>Company</th>
            <th>Price</th>
            <th>Change</th>
            <th>Change %</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
          <tr>
            <td>AAC</td>
            <td>AUSTRALIAN COMPANY </td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
          </tr>
          <tr>
            <td>AAD</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
          </tr>
          <tr>
            <td>AAX</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
          </tr>
          <tr>
            <td>XXD</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
          </tr>
        </tbody>
      </table>
    </div>

  <div id="demo-modal" class="modal">
    <div class="container1">
      <div class="title">
          <p>Clubs</p>
      </div>

      <form action="{{ route('clubList') }}" method="GET">
        <div id="user_details_container">
            <div class="user_details">
                <div class="input_box">
                    <label for="club_id">Clubs</label>
                    <select name="club_id[]" id="club_id">
                        @foreach ($clubs as $club)
                        <option value="{{$club->id}}">{{$club->club_name}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="input_box">
                    <label for="username">Name</label>
                    <input type="text" name="username[]" id="username" placeholder="Enter your username">
                </div>
            </div>
        </div>
        <div class="add-btn" id="add_more"><i class="fas fa-plus"></i> Add more</div>
        <div class="reg_btn">
            <input type="submit" value="Submit">
        </div>
    </form>
  </div>
</div>
  </section>

  <script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
  </script>

<script>
    document.getElementById('add_more').addEventListener('click', function() {
        var userDetailDiv = document.querySelector('.user_details');
        var newUserDetailDiv = userDetailDiv.cloneNode(true);
        newUserDetailDiv.querySelectorAll('input').forEach(input => input.value = '');
        newUserDetailDiv.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
        document.getElementById('user_details_container').appendChild(newUserDetailDiv);
    });
  </script>