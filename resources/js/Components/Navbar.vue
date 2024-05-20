<script setup>

</script>
<template>
    <header id="header" class="d-flex align-items-center ">
        <div class="container d-flex justify-content-between">
            <div class="brand">
                <a href="/">
                <img src="img/static/logo.png" alt="logo.png">
                </a>
                
            </div>

            <nav id="navbar" class="navbar d-flex">
                <ul>
                    <li><a class="nav-link scrollto" href="https://mylottokenya.co.ke/how-to-play">HOW TO PLAY</a></li>
                    <li class="dropdown"><a href="#"><span>RESULTS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://mylottokenya.co.ke/jackpot-results">MEGA JACKPOT DRAW</a></li>
              <li><a href="https://mylottokenya.co.ke/results">DAILY DRAWS</a></li>
            </ul>
          </li>
                    <li><a class="nav-link active" href="#">WINNERS</a></li>
                    <li><a class="nav-link scrollto" href="https://mylottokenya.co.ke/contact">CONTACT</a></li>
                    <li><a class="btn btn-primary get-qt" href="https://mylottokenya.co.ke/home">PLAY NOW</a></li>
                    <span class="auth-arrow text-white"><i class='bx bxs-down-arrow'></i>down
            <div class="auth-box">
           
                <a v-if="$page.props.auth.user" class='d-flex align-items-center' href='Admin'><i class='bx bx-user-circle' ></i>{{ $page.props.auth.user.name }} </a>
           
               <a class="d-flex align-items-center" href="Admin"><i class="bx bx-user-circle" ></i>Admin</a>
              
             <a v-if="$page.props.auth.user" class="d-flex align-items-center" href="logout.php"><i class="bx bx-log-out"></i> logout</a>
            <a v-if="!$page.props.auth.user" class="d-flex align-items-center" href="login.php"><i class="bx bx-log-in"></i> login</a>
            </div>
            </span>
                </ul>
               
                <i class='bx bx-menu-alt-right mobile-nav-toggle'></i>
            </nav>
        </div>
    </header>
</template>