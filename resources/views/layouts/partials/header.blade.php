<header>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">About</a></li>
            <li><a href="{{route('user.login')}}">Login</a></li>
        </ul>
        <ul>
            <li>
              <img class="logo" src="https://st3.depositphotos.com/4177785/31922/v/380/depositphotos_319223486-stock-illustration-sugar-free-linear-icon-food.jpg, https://st3.depositphotos.com/4177785/31922/v/450/depositphotos_319223486-stock-illustration-sugar-free-linear-icon-food.jpg 2x" alt="Logo" width="40" height="40"/></li>
            <li class="hideOnMobile"><a href="#">Home</a></li>
            <li class="hideOnMobile"><a href="#">Search</a></li>
            <li class="hideOnMobile"><a href="#">About</a></li>
            <li class="hideOnMobile"><a href="{{route('user.login')}}">Login</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
        </ul>
    </nav>
</header>