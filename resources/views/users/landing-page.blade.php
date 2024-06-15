<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
<style>
    header {
  height: 100vh;
  background-image: linear-gradient(
      to right,
      rgba(0, 0, 0, 0.8),
      rgba(0, 0, 0, 0.8)
    ),
    url(https://static.vecteezy.com/system/resources/previews/027/484/465/large_2x/businesswoman-using-smartphone-professional-business-woman-using-mobile-phone-for-business-executive-woman-working-with-mobile-phone-businesswoman-productive-by-using-her-smartphone-ai-generative-photo.jpg);
  background-size: cover;
  background-position: top;
  /* clip-path: polygon(topleft,topright,bottomright,bottomleft); */
  /*clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);*/
  position: relative;
} 

.logo-box {
  position: absolute;
  top: 4rem;
  left: 4rem;
}

.logo {
  height: 3.5rem;
  animation: moveInRight 1s ease-out;
}

.heading-primary {
  color: #ececec;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 4rem;
}

.heading-primary-main {
  display: block;
  font-size: 6rem;
  font-weight: 400;
  letter-spacing: 3.5rem;
  animation-name: moveInLeft;
  animation-duration: 1s;
  animation-timing-function: ease-in;
}

.heading-primary-sub {
  display: block;
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 1.75rem;
  /* animation-name: moveInRight;
  animation-duration: 1s;
  animation-timing-function: ease-in; */
  animation: moveInRight 1s ease-out;
}

.text-box {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

@keyframes moveInLeft {
  0% {
    opacity: 0;
    transform: translateX(-10rem);
  }
  100% {
    opacity: 1;
    transform: translate(0);
  }
}

@keyframes moveInRight {
  0% {
    opacity: 0;
    transform: translateX(10rem);
  }
  100% {
    opacity: 1;
    transform: translate(0);
  }
}

.btn {
  display: inline-block;
  padding: 1.5rem 3rem;
  text-decoration: none;
  text-transform: uppercase;
  border-radius: 5px;
  transition: all 0.2s;
  position: relative;
  font-size: 1.5rem;
}

.btn-white {
  background-color: #fff;
  color: #777;
}

.btn-ani {
  animation: moveInBottom 1.5s ease-in 0.5s;
  animation-fill-mode: backwards;
}

.btn:hover {
  transform: translateY(-5px);
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.4);
}

.btn:active {
  transform: translateY(-1px);
  box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.5);
}

.btn:after {
  content: "";
  display: inline-block;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  border-radius: 5px;
  transition: all 0.7s;
}

.btn-white:after {
  background-color: #fff;
}

.btn:hover::after {
  transform: scaleX(1.5) scaleY(1.5);
  opacity: 0;
}

@keyframes moveInBottom {
  0% {
    transform: translateY(10rem);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
/* //modall css  */
/* If you like this, be sure to ❤️ it. */
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


.container{
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

.container .title{
    padding: 25px;
    background: #f6f8fa;
}

.container .title p{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container .title p::before{
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


.input_box label::after{
    content: " *";
    color: red;
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

<header class="header">
    <div class="logo-box">
      <img class="logo" src="https://st3.depositphotos.com/4177785/31922/v/380/depositphotos_319223486-stock-illustration-sugar-free-linear-icon-food.jpg, https://st3.depositphotos.com/4177785/31922/v/450/depositphotos_319223486-stock-illustration-sugar-free-linear-icon-food.jpg 2x" alt="Logo" />
    </div>
    <div class="text-box">
      <h1 class="heading-primary">
        <span class="heading-primary-main">Form</span>
        <span class="heading-primary-sub">for your special Forms</span>
      </h1>
      <a href="#demo-modal" class="btn btn-white">Get started with Us</a>
    </div>
  </header>

  {{-- <div class="wrapper">
    <a href="#demo-modal">Open Demo Modal</a>
</div> --}}

<div id="demo-modal" class="modal">
    <div class="container">
      <div class="title">
          <p>Add Data</p>
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

<script>
  document.getElementById('add_more').addEventListener('click', function() {
      var userDetailDiv = document.querySelector('.user_details');
      var newUserDetailDiv = userDetailDiv.cloneNode(true);
      newUserDetailDiv.querySelectorAll('input').forEach(input => input.value = '');
      newUserDetailDiv.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
      document.getElementById('user_details_container').appendChild(newUserDetailDiv);
  });
</script>