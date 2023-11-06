<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     date_default_timezone_set('Europe/Paris');
     $user = Formation::getInstance()->findBy(['email_resp_stage' => $_POST['email']]);
     if ($admin) {
         $user = $user[0];
         if (password_verify($_POST['password'], $user['password'])) {
             HTTP::redirect('/responsable/dashboard');
         } else {
             $errors = 'Identifiants invalides';
         }
     }
 }

 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Canonical URL -->
        
        <!-- Title -->
        <title>Se connecter - Divernet</title>
        <!-- Meta Tags -->
        <meta name="robots" content="noindex, nofollow">
        <!-- Favicon -->
        <link rel="icon" href="./favicon.ico">
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/css/login.css">
    </head>
    <body>
        <!-- Main Content -->
        <main class="main-container">
            <div class="section-left">
                <div class="title-container">
                    <div class="logo">
                        <svg width="238" height="46" viewBox="0 0 238 46" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_381_3895)">
                                <path
                                    d="M74.144 37.4682V10.9957H85.7186C88.5939 10.9957 91.1127 11.5489 93.2841 12.6597C95.4509 13.7705 97.1423 15.3065 98.3537 17.2721C99.5651 19.2378 100.168 21.56 100.168 24.2297C100.168 26.8993 99.5651 29.1895 98.3537 31.1689C97.1423 33.1483 95.4555 34.6934 93.2841 35.8042C91.1173 36.9151 88.5939 37.4682 85.7186 37.4682H74.144ZM79.0627 33.3083H85.4946C87.4877 33.3083 89.2065 32.9289 90.6556 32.1746C92.1047 31.4204 93.2292 30.3598 94.0201 28.9976C94.8155 27.6353 95.2132 26.0491 95.2132 24.2342C95.2132 22.4194 94.8155 20.8012 94.0201 19.4481C93.2247 18.0995 92.1047 17.0481 90.6556 16.2893C89.2065 15.5305 87.4831 15.1556 85.4946 15.1556H79.0627V33.3129V33.3083Z" />
                                <path
                                    d="M107.313 13.9442C106.431 13.9442 105.704 13.6653 105.138 13.1122C104.571 12.5591 104.287 11.8871 104.287 11.1054C104.287 10.3237 104.571 9.62428 105.138 9.0803C105.704 8.53631 106.431 8.2666 107.313 8.2666C108.196 8.2666 108.923 8.52717 109.489 9.04373C110.056 9.56028 110.34 10.2094 110.34 10.9911C110.34 11.8231 110.061 12.5225 109.508 13.0893C108.955 13.6562 108.223 13.9396 107.313 13.9396V13.9442ZM104.932 37.4727V17.2767H109.659V37.4727H104.932Z" />
                                <path
                                    d="M121.233 37.4682L112.57 17.2721H117.489L124.94 35.0865H122.518L130.234 17.2721H134.773L126.111 37.4682H121.233Z" />
                                <path
                                    d="M146.65 37.7333C144.405 37.7333 142.444 37.2853 140.766 36.3893C139.089 35.4933 137.79 34.2636 136.872 32.7003C135.953 31.1369 135.491 29.3586 135.491 27.3655C135.491 25.3724 135.939 23.5622 136.835 22.0125C137.731 20.4629 138.965 19.2469 140.542 18.3646C142.119 17.4824 143.916 17.0389 145.932 17.0389C147.948 17.0389 149.653 17.4686 151.189 18.3235C152.725 19.1829 153.936 20.3897 154.819 21.9531C155.701 23.5165 156.144 25.3587 156.144 27.4752C156.144 27.6764 156.14 27.9049 156.126 28.1564C156.112 28.4078 156.094 28.6455 156.071 28.8741H139.239V25.7336H153.575L151.724 26.7164C151.751 25.5553 151.509 24.5359 151.006 23.6536C150.503 22.7714 149.813 22.0765 148.944 21.5737C148.076 21.0708 147.07 20.8148 145.936 20.8148C144.803 20.8148 143.761 21.0663 142.892 21.5737C142.023 22.0765 141.342 22.7805 140.849 23.6719C140.359 24.5679 140.113 25.6193 140.113 26.8307V27.5895C140.113 28.8009 140.391 29.8706 140.945 30.8032C141.498 31.7357 142.279 32.4534 143.29 32.9608C144.3 33.4682 145.456 33.7151 146.768 33.7151C147.902 33.7151 148.926 33.5368 149.831 33.1848C150.741 32.8328 151.545 32.2751 152.254 31.5209L154.787 34.4328C153.877 35.4933 152.739 36.307 151.363 36.8739C149.987 37.4407 148.419 37.7241 146.654 37.7241L146.65 37.7333Z" />
                                <path
                                    d="M160.684 37.4682V17.2721H165.186V22.8309L164.656 21.2035C165.259 19.8412 166.215 18.8081 167.513 18.1041C168.811 17.4001 170.43 17.0436 172.372 17.0436V21.5463C172.171 21.496 171.979 21.464 171.806 21.4503C171.627 21.4366 171.454 21.432 171.275 21.432C169.483 21.432 168.062 21.9577 167.001 23C165.941 24.0468 165.41 25.6056 165.41 27.6719V37.4682H160.684Z" />
                                <path
                                    d="M187.837 17.0435C189.451 17.0435 190.895 17.3589 192.166 17.9898C193.437 18.6206 194.443 19.5852 195.174 20.8834C195.905 22.1817 196.271 23.8548 196.271 25.8936V37.4681H191.544V26.497C191.544 24.7096 191.119 23.3702 190.278 22.4879C189.433 21.6057 188.253 21.1623 186.74 21.1623C185.629 21.1623 184.646 21.3908 183.792 21.8434C182.932 22.2959 182.274 22.9725 181.808 23.8685C181.341 24.7645 181.108 25.8936 181.108 27.2558V37.4681H176.381V17.2721H180.884V22.7165L180.089 21.0526C180.793 19.768 181.821 18.776 183.17 18.0812C184.518 17.3864 186.077 17.0389 187.842 17.0389L187.837 17.0435Z" />
                                <path
                                    d="M211.818 37.7333C209.574 37.7333 207.613 37.2853 205.935 36.3893C204.257 35.4933 202.959 34.2636 202.04 32.7003C201.121 31.1369 200.66 29.3586 200.66 27.3655C200.66 25.3724 201.108 23.5622 202.004 22.0125C202.9 20.4629 204.134 19.2469 205.711 18.3646C207.288 17.4824 209.085 17.0389 211.101 17.0389C213.116 17.0389 214.822 17.4686 216.358 18.3235C217.893 19.1829 219.105 20.3897 219.987 21.9531C220.869 23.5165 221.313 25.3587 221.313 27.4752C221.313 27.6764 221.308 27.9049 221.295 28.1564C221.281 28.4078 221.263 28.6455 221.24 28.8741H204.408V25.7336H218.744L216.892 26.7164C216.92 25.5553 216.678 24.5359 216.175 23.6536C215.672 22.7714 214.982 22.0765 214.113 21.5737C213.244 21.0708 212.239 20.8148 211.105 20.8148C209.971 20.8148 208.929 21.0663 208.061 21.5737C207.192 22.0765 206.511 22.7805 206.017 23.6719C205.528 24.5679 205.281 25.6193 205.281 26.8307V27.5895C205.281 28.8009 205.56 29.8706 206.113 30.8032C206.666 31.7357 207.448 32.4534 208.458 32.9608C209.469 33.4682 210.625 33.7151 211.937 33.7151C213.071 33.7151 214.095 33.5368 215 33.1848C215.91 32.8328 216.714 32.2751 217.423 31.5209L219.955 34.4328C219.045 35.4933 217.907 36.307 216.531 36.8739C215.155 37.4407 213.587 37.7241 211.823 37.7241L211.818 37.7333Z" />
                                <path
                                    d="M223.164 21.208V17.4276H236.627V21.208H223.164ZM233.454 37.7379C231.237 37.7379 229.518 37.1665 228.312 36.0191C227.105 34.8717 226.497 33.1757 226.497 30.9312V12.8105H231.223V30.8169C231.223 31.7769 231.47 32.5175 231.959 33.0477C232.449 33.578 233.139 33.8432 234.021 33.8432C235.082 33.8432 235.964 33.5643 236.668 33.0112L237.994 36.3757C237.44 36.8282 236.759 37.1711 235.95 37.3951C235.141 37.6236 234.309 37.7333 233.454 37.7333V37.7379Z" />
                                <path
                                    d="M9.65194 33.8935C9.65194 32.5815 9.6428 31.4341 9.65194 30.2867C9.67479 27.2422 11.6085 26.1131 15.0049 26.2228V45.5C11.8599 45.5 9.70222 44.5583 9.65651 41.6556C9.63822 40.4259 9.65651 39.2008 9.65651 37.8751C7.43942 38.0534 5.36862 38.1996 3.30696 38.3962C1.95842 38.5288 0.884161 38.1448 0.239606 36.8602C-0.075815 36.2386 -0.0666723 35.4751 0.257891 34.8534C0.929874 33.5826 2.0087 33.2123 3.35267 33.3495C5.38233 33.5506 7.42114 33.7015 9.65194 33.8889V33.8935Z" />
                                <path
                                    d="M18.0129 45.4954H36.5815C37.0432 45.4954 37.7838 45.4269 38.2363 45.3309C40.2843 44.8874 42.2545 44.2246 44.1288 43.2921C48.2429 41.2533 51.5023 38.3185 53.5274 34.1403C55.749 29.5598 56.0827 24.7097 55.4291 19.7635C54.8165 15.1236 53.02 10.9729 49.8383 7.49868C47.1001 4.50904 43.9002 2.21881 39.8957 1.19941C38.2821 0.787993 36.6547 0.60514 35.0044 0.5H6.43373V21.08L26.7944 6.92727L48.2247 21.9257V33.7106L26.7944 20.8515L18.0083 26.1131V45.4954H18.0129Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_381_3895">
                                    <rect width="237.987" height="45" transform="translate(0.00646973 0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h1 class="title">Se connecter</h1>
                </div>
                <form action="" method="POST" class="form-login">
                    <div class="form-input-container">
                        <label class="form-label" for="username">Nom d'utilisateur</label>
                        <input class="form-input" type="text" name="username" id="username" placeholder="Nom d'utilisateur"
                            required>
                    </div>
                    <div class="form-input-container">
                        <label class="form-label" for="password">Mot de passe</label>
                        <div class="password-wrapper">
                            <input class="form-input"  type="password" name="password" id="password" placeholder="Mot de passe" required>
                            <label class="form-checkbox"><input class="form-toggle" type="checkbox" id="toggle-password">
                            <svg class="eye hide" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2356 1.99299C21.0408 1.99866 20.8559 2.07992 20.72 2.21955L2.21995 20.7195C2.14797 20.7887 2.09051 20.8714 2.05092 20.963C2.01133 21.0546 1.99042 21.1532 1.98941 21.253C1.98839 21.3528 2.0073 21.4517 2.04501 21.5441C2.08273 21.6365 2.1385 21.7204 2.20906 21.791C2.27962 21.8615 2.36354 21.9173 2.45593 21.955C2.54831 21.9928 2.64729 22.0117 2.74707 22.0106C2.84685 22.0096 2.94542 21.9887 3.03702 21.9491C3.12861 21.9095 3.21139 21.8521 3.2805 21.7801L8.45823 16.6024C9.34258 17.5594 10.6004 18.1649 12.0002 18.1649C14.6652 18.1649 16.8352 15.9948 16.8352 13.3348C16.8352 11.9349 16.2298 10.6734 15.2727 9.78791L17.5266 7.534C19.9525 8.95438 21.8346 11.2482 22.5256 13.9344C22.6106 14.2744 22.9152 14.4998 23.2502 14.4998C23.3102 14.4998 23.3748 14.4944 23.4348 14.4744C23.8398 14.3744 24.0798 13.9653 23.9748 13.5653C23.2049 10.5639 21.2308 8.03637 18.6389 6.4217L21.7805 3.2801C21.8887 3.17472 21.9626 3.03913 21.9924 2.89108C22.0223 2.74303 22.0068 2.5894 21.9479 2.45032C21.889 2.31124 21.7895 2.19317 21.6624 2.11157C21.5353 2.02997 21.3866 1.98864 21.2356 1.99299V1.99299ZM11.9953 4.49982C6.41034 4.49982 1.37562 8.31025 0.0256167 13.5653C-0.0793833 13.9653 0.160656 14.3744 0.565656 14.4744C0.965656 14.5794 1.37484 14.3394 1.47484 13.9344C2.63984 9.40939 7.16534 5.99982 11.9953 5.99982C12.8503 5.99982 13.695 6.10439 14.51 6.30939L15.7405 5.0799C14.5455 4.6999 13.2853 4.49982 11.9953 4.49982ZM12.0002 8.49982C9.33523 8.49982 7.17015 10.6698 7.17015 13.3348C7.17015 13.4348 7.17491 13.5395 7.17991 13.6395L12.3098 8.50959C12.2048 8.50459 12.1052 8.49982 12.0002 8.49982Z"/>
                            </svg>
                            <svg class="eye visible" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12,4.5c-5.7,0-10.6,3.9-12,9.1c0,0.2,0,0.4,0.1,0.6c0.1,0.2,0.3,0.3,0.5,0.3c0.2,0,0.4,0,0.6-0.1
                                c0.2-0.1,0.3-0.3,0.3-0.5C2.6,9.5,7,6,12,6c5,0,9.4,3.5,10.5,7.9c0,0.2,0.2,0.4,0.3,0.5c0.2,0.1,0.4,0.1,0.6,0.1
                                c0.2,0,0.4-0.2,0.5-0.3C24,14,24,13.8,24,13.6C22.7,8.4,17.7,4.5,12,4.5z M12,8.5c-2.7,0-4.8,2.2-4.8,4.8c0,2.7,2.2,4.8,4.8,4.8
                                c2.7,0,4.8-2.2,4.8-4.8C16.8,10.7,14.7,8.5,12,8.5z"/>
                            </svg></label>
                            
                        </div>
                        <span style="color:var(--red); ">
                            <?php if (isset($errors)) {
                                echo $errors;
                            }?>
                        </span>
                    </div>
                    <div class="form-buttons">
                        <input class="login-button" type="submit" value="Se connecter">
                        <a class="forgetpass-button" href="#">Mot de passe oublié ?</a>
                    </div>
                </form>
            </div>
            <div class="section-right">
            </div>
        </main>
        <script>
            window.addEventListener("load", function () {
                const password = document.querySelector('#password')
                const checkbox = document.querySelector('#toggle-password')
                checkbox.addEventListener("click", function () {
                    if (password.type === "password") {
                        password.type = "text";
                    } else {
                        password.type = "password";
                    }
                })
            });
        </script>
    </body>
</html>
<?php