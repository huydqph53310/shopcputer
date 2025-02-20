<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        background-color: rgb(9, 11, 23);
    }

    .header {
        background-color: rgb(9, 11, 23);
        display: flex;
        justify-content: space-around;
    }


    .header ul {
        display: flex;
    }

    .header ul li {
        list-style: none;
        justify-content: space-between;
        margin-left: 30px;
        line-height: 40px;
    }

    .header ul li a {
        color: #CBB26A;

        text-decoration: none;
    }

    input[type="search"],
    input[type="text"],
    input[type="password"] {
        border: 2px solid #CBB26A;
        width: 300px;
        color: #CBB26A;
        border-radius: 10px;
        height: 40px;
        background-color: rgb(-1, -1, -1);
        margin: 1% 0px;
    }

    span {
        margin-top: 20px;
        color: #CBB26A;

    }

    input[type="submit"] {
        border: 2px solid #CBB26A;
        color: #CBB26A;
        width: 70px;
        height: 30px;
        border-radius: 10px;
        background-color: rgb(-1, -1, -1);
    }

    .Account ul li {
        justify-content: space-around;
    }

    .login {
        width: 70px;
        background-color: rgb(9, 11, 23);
        height: 30px;
        border: 1px solid #CBB26A;
        border-radius: 5px;
    }

    .login:hover {
        background-color: rgb(120, 11, 23);
    }

    .dieukhoan {
        color: #CBB26A;
    }

    .Regsiter {
        width: 70px;
        background-color: rgb(9, 11, 23);
        height: 30px;
        border: 1px solid #CBB26A;
        border-radius: 5px;
    }

    .Regsiter:hover {
        background-color: rgb(120, 11, 23);
    }

    .texs {
        margin-right: 230px;
    }

    .content {
        height: 1080px;
        background-color: rgb(9, 11, 23);
        border: 2px solid #CBB26A;
        margin-top: 5px;
    }

    .login-form {
        margin: auto;
        line-height: 20px;
        margin-top: 80px;
    }

    .content {
        height: 500px;
        text-align: center;
    }

    .footer {
        height: 300px;

    }

    .copyright {
        height: 30px;
    }

    .copyright .text-copyright {
        color: #CBB26A;
        line-height: 30px;
        text-align: center;
        font-size: 12px;
    }
</style>

<body>
    <header>
        <nav class="header">
            <ul>
                <li>
                    <svg width="333.3199920654297" height="16.89940895419711" viewBox="0 0 350 17.745089627891065" class="looka-1j8o68f">
                        <defs id="SvgjsDefs4338">
                            <linearGradient id="SvgjsLinearGradient4341">
                                <stop id="SvgjsStop4342" stop-color="#905e26" offset="0"></stop>
                                <stop id="SvgjsStop4343" stop-color="#f5ec9b" offset="0.5"></stop>
                                <stop id="SvgjsStop4344" stop-color="#905e26" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <g id="SvgjsG4339" featurekey="8L6ael-0" transform="matrix(1.18248046641002,0,0,1.18248046641002,-1.91561906603602,-5.904519136458708)" fill="url(#SvgjsLinearGradient4341)">
                            <path d="M10.56 5.52 q1.22 0.46 2.2 1.48 q2.1 2.12 2.1 5.41 t-2.1 5.43 q-0.98 1.02 -2.2 1.48 q-1.26 0.52 -2.58 0.52 l-5.66 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -1.44 q0 -0.3 0.21 -0.51 t0.49 -0.21 l5.6 0 q1.78 0 2.89 -1.3 t1.11 -3.26 t-1.11 -3.26 t-2.89 -1.3 l-5.6 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.51 l0 -1.44 q0 -0.28 0.21 -0.49 t0.49 -0.21 l5.66 0 q1.32 0 2.58 0.52 z M35.816 16.96 q0.3 0 0.5 0.21 t0.2 0.51 l0 1.46 q0 0.28 -0.2 0.49 t-0.5 0.21 l-9.88 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -1.46 q0 -0.3 0.21 -0.51 t0.49 -0.21 l9.88 0 z M25.936 13.86 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -1.5 q0 -0.28 0.21 -0.49 t0.49 -0.21 l8.98 0 q0.3 0 0.51 0.21 t0.21 0.49 l0 1.5 q0 0.28 -0.21 0.49 t-0.51 0.21 l-8.98 0 z M35.816 5 q0.3 0 0.5 0.21 t0.2 0.49 l0 1.46 q0 0.3 -0.2 0.51 t-0.5 0.21 l-9.88 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.51 l0 -1.46 q0 -0.28 0.21 -0.49 t0.49 -0.21 l9.88 0 z M59.37200000000001 5.32 q0.22 0.3 0.08 0.66 l-5.48 13.54 q-0.08 0.2 -0.26 0.32 t-0.4 0.12 l-1.76 0 q-0.22 0 -0.4 -0.12 t-0.26 -0.32 l-5.48 -13.54 q-0.16 -0.34 0.06 -0.66 t0.58 -0.32 l6.68 0 q0.28 0 0.49 0.21 t0.21 0.51 l0 1.46 q0 0.3 -0.21 0.51 t-0.49 0.21 l-3.36 0 l3.06 7.7 l4.02 -10.16 q0.08 -0.2 0.26 -0.32 t0.4 -0.12 l1.68 0 q0.18 0 0.34 0.09 t0.24 0.23 z M74.748 11.58 q0.28 0 0.49 0.2 t0.21 0.5 l0 1.6 q0 0.28 -0.21 0.49 t-0.49 0.21 l-5.52 0 q-0.3 0 -0.5 -0.21 t-0.2 -0.49 l0 -1.6 q0 -0.3 0.2 -0.5 t0.5 -0.2 l5.52 0 z M93.40400000000001 7.859999999999999 q-0.26 -0.04 -0.43 -0.24 t-0.17 -0.46 l0 -1.46 q0 -0.34 0.24 -0.54 t0.56 -0.16 q1.72 0.28 3.06 1.22 q1.74 1.26 2.46 3.34 q0.12 0.34 -0.08 0.64 t-0.58 0.3 l-1.6 0 q-0.22 0 -0.4 -0.11 t-0.26 -0.31 q-0.44 -1.04 -1.34 -1.66 q-0.7 -0.44 -1.46 -0.56 z M98.46400000000001 14.5 q0.38 0 0.58 0.3 t0.08 0.64 q-0.72 2.08 -2.46 3.34 q-1.34 0.94 -3.06 1.22 l-0.1 0 q-0.28 0 -0.46 -0.18 q-0.24 -0.18 -0.24 -0.52 l0 -1.46 q0 -0.26 0.16 -0.46 t0.42 -0.24 q0.84 -0.12 1.48 -0.56 q0.9 -0.62 1.34 -1.66 q0.08 -0.2 0.26 -0.31 t0.4 -0.11 l1.6 0 z M91.30400000000002 5.24 q0.26 0.2 0.26 0.54 l0 1.56 q0 0.22 -0.15 0.41 t-0.37 0.27 q-0.28 0.06 -0.44 0.14 q-0.8 0.36 -1.36 0.98 q-1.14 1.28 -1.14 3.35 t1.14 3.37 q0.7 0.8 1.8 1.12 q0.22 0.06 0.37 0.25 t0.15 0.41 l0 1.58 q0 0.34 -0.26 0.54 q-0.18 0.16 -0.46 0.16 l-0.14 0 q-2.14 -0.46 -3.62 -2.08 q-1.9 -2.14 -1.9 -5.34 t1.9 -5.34 q1.48 -1.64 3.62 -2.06 q0.32 -0.08 0.6 0.14 z M118.86000000000001 14.1 l3.02 4.62 q0.22 0.36 0.02 0.72 q-0.08 0.16 -0.25 0.26 t-0.35 0.1 l-1.82 0 q-0.18 0 -0.34 -0.09 t-0.24 -0.23 l-3.04 -4.82 l-3.56 0 l0 4.44 q0 0.28 -0.21 0.49 t-0.49 0.21 l-1.52 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -6.58 q0 -0.28 0.21 -0.49 t0.49 -0.21 l6.16 0 q1.76 0 2.34 -1 q0.2 -0.32 0.2 -0.92 q0 -0.94 -0.62 -1.48 q-0.64 -0.58 -1.84 -0.58 l-6.24 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -1.44 q0 -0.28 0.21 -0.49 t0.49 -0.21 l6.42 0 q2.34 0 3.74 1.32 q1.46 1.32 1.46 3.58 q0 1.46 -0.64 2.49 t-1.86 1.57 z M145.41600000000003 18.86 q0.14 0.32 -0.07 0.65 t-0.57 0.33 l-13.32 0 q-0.18 0 -0.34 -0.09 t-0.24 -0.23 q-0.22 -0.32 -0.06 -0.66 l0.62 -1.46 q0.08 -0.2 0.26 -0.32 t0.38 -0.12 l9.32 0 l-3.28 -7.84 l-2.68 6.4 q-0.08 0.2 -0.25 0.31 t-0.39 0.11 l-1.68 0 q-0.38 0 -0.6 -0.32 q-0.08 -0.14 -0.1 -0.32 t0.04 -0.34 l4.06 -9.52 q0.08 -0.2 0.25 -0.32 t0.39 -0.12 l1.92 0 q0.22 0 0.39 0.12 t0.25 0.32 z M162.53200000000004 7.859999999999999 q-0.26 -0.04 -0.43 -0.24 t-0.17 -0.46 l0 -1.46 q0 -0.34 0.24 -0.54 t0.56 -0.16 q1.72 0.28 3.06 1.22 q1.74 1.26 2.46 3.34 q0.12 0.34 -0.08 0.64 t-0.58 0.3 l-1.6 0 q-0.22 0 -0.4 -0.11 t-0.26 -0.31 q-0.44 -1.04 -1.34 -1.66 q-0.7 -0.44 -1.46 -0.56 z M167.59200000000004 14.5 q0.38 0 0.58 0.3 t0.08 0.64 q-0.72 2.08 -2.46 3.34 q-1.34 0.94 -3.06 1.22 l-0.1 0 q-0.28 0 -0.46 -0.18 q-0.24 -0.18 -0.24 -0.52 l0 -1.46 q0 -0.26 0.16 -0.46 t0.42 -0.24 q0.84 -0.12 1.48 -0.56 q0.9 -0.62 1.34 -1.66 q0.08 -0.2 0.26 -0.31 t0.4 -0.11 l1.6 0 z M160.43200000000004 5.24 q0.26 0.2 0.26 0.54 l0 1.56 q0 0.22 -0.15 0.41 t-0.37 0.27 q-0.28 0.06 -0.44 0.14 q-0.8 0.36 -1.36 0.98 q-1.14 1.28 -1.14 3.35 t1.14 3.37 q0.7 0.8 1.8 1.12 q0.22 0.06 0.37 0.25 t0.15 0.41 l0 1.58 q0 0.34 -0.26 0.54 q-0.18 0.16 -0.46 0.16 l-0.14 0 q-2.14 -0.46 -3.62 -2.08 q-1.9 -2.14 -1.9 -5.34 t1.9 -5.34 q1.48 -1.64 3.62 -2.06 q0.32 -0.08 0.6 0.14 z M191.20800000000003 18.7 q0.12 0.14 0.14 0.34 t-0.07 0.38 t-0.26 0.28 t-0.37 0.1 l-1.9 0 q-0.18 0 -0.33 -0.08 t-0.25 -0.22 l-4.78 -6.88 l-1.96 1.84 l0 4.64 q0 0.28 -0.21 0.49 t-0.49 0.21 l-1.52 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -5.56 q0 -0.32 0.22 -0.5 l8.36 -7.84 q0.2 -0.2 0.48 -0.2 l2.16 0 q0.2 0 0.38 0.12 t0.26 0.32 t0.04 0.41 t-0.2 0.37 l-4.68 4.4 z M179.20800000000003 10.1 q-0.28 0 -0.49 -0.2 t-0.21 -0.5 l0 -3.7 q0 -0.28 0.21 -0.49 t0.49 -0.21 l1.52 0 q0.28 0 0.49 0.21 t0.21 0.49 l0 3.7 q0 0.3 -0.21 0.5 t-0.49 0.2 l-1.52 0 z M206.42400000000004 11.58 q0.28 0 0.49 0.2 t0.21 0.5 l0 1.6 q0 0.28 -0.21 0.49 t-0.49 0.21 l-5.52 0 q-0.3 0 -0.5 -0.21 t-0.2 -0.49 l0 -1.6 q0 -0.3 0.2 -0.5 t0.5 -0.2 l5.52 0 z M219.12000000000003 5 q0.3 0 0.51 0.21 t0.21 0.51 l0 1.46 q0 0.3 -0.21 0.51 t-0.51 0.21 l-2.06 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.51 l0 -1.46 q0 -0.3 0.21 -0.51 t0.49 -0.21 l2.06 0 z M228.06000000000003 5 q0.28 0 0.49 0.21 t0.21 0.51 l0 1.46 q0 0.3 -0.21 0.51 t-0.49 0.21 l-4.02 0 l0 11.36 q0 0.28 -0.21 0.49 t-0.49 0.21 l-1.54 0 q-0.3 0 -0.51 -0.21 t-0.21 -0.49 l0 -13.54 q0 -0.3 0.21 -0.51 t0.51 -0.21 l6.26 0 z M249.19600000000003 16.96 q0.3 0 0.5 0.21 t0.2 0.51 l0 1.46 q0 0.28 -0.2 0.49 t-0.5 0.21 l-9.88 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -1.46 q0 -0.3 0.21 -0.51 t0.49 -0.21 l9.88 0 z M239.31600000000003 13.86 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -1.5 q0 -0.28 0.21 -0.49 t0.49 -0.21 l8.98 0 q0.3 0 0.51 0.21 t0.21 0.49 l0 1.5 q0 0.28 -0.21 0.49 t-0.51 0.21 l-8.98 0 z M249.19600000000003 5 q0.3 0 0.5 0.21 t0.2 0.49 l0 1.46 q0 0.3 -0.2 0.51 t-0.5 0.21 l-9.88 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.51 l0 -1.46 q0 -0.28 0.21 -0.49 t0.49 -0.21 l9.88 0 z M273.432 18.86 q0.14 0.32 -0.07 0.65 t-0.57 0.33 l-13.32 0 q-0.18 0 -0.34 -0.09 t-0.24 -0.23 q-0.22 -0.32 -0.06 -0.66 l0.62 -1.46 q0.08 -0.2 0.26 -0.32 t0.38 -0.12 l9.32 0 l-3.28 -7.84 l-2.68 6.4 q-0.08 0.2 -0.25 0.31 t-0.39 0.11 l-1.68 0 q-0.38 0 -0.6 -0.32 q-0.08 -0.14 -0.1 -0.32 t0.04 -0.34 l4.06 -9.52 q0.08 -0.2 0.25 -0.32 t0.39 -0.12 l1.92 0 q0.22 0 0.39 0.12 t0.25 0.32 z M296.9080000000001 5 q0.28 0 0.49 0.21 t0.21 0.49 l0 13.4 q0 0.28 -0.21 0.49 t-0.49 0.21 l-1.52 0 q-0.3 0 -0.5 -0.21 t-0.2 -0.49 l0 -9.04 l-3.7 4.76 q-0.22 0.26 -0.56 0.26 l0 0 q-0.16 0 -0.32 -0.07 t-0.24 -0.21 l-6.56 -8.68 q-0.12 -0.14 -0.14 -0.35 t0.08 -0.38 t0.26 -0.28 t0.36 -0.11 l1.76 0 q0.34 0 0.56 0.28 l4.24 5.6 l4.14 -5.6 q0.22 -0.28 0.58 -0.28 l1.76 0 z M285.38800000000003 14.7 q0.28 0 0.49 0.2 t0.21 0.5 l0 3.7 q0 0.28 -0.21 0.49 t-0.49 0.21 l-1.52 0 q-0.28 0 -0.49 -0.21 t-0.21 -0.49 l0 -3.7 q0 -0.3 0.21 -0.5 t0.49 -0.2 l1.52 0 z"></path>
                        </g>
                    </svg>
                </li>
            </ul>
            <ul>
                <li><a href="?wh=home">Home</a></li>
                <li><a href="?wh=gioithieu">Giới thiệu</a></li>
                <li><a href="?wh=service">Dịch Vụ</a></li>
                <li><a href="?wh=tintuc">Tin Tức</a></li>
                <li><a href="?wh=hotline">Liên Hệ</a></li>
            </ul>
            <ul>
                <li>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="search">
                        <input type="submit" value="Search">
                    </form>
                </li>
            </ul>
            <ul>
                <li class="Account">
                    <button class="login"><a href="?wh=login">Login</a></button>
                    <button class="Regsiter"><a href="?wh=reg">Regsiter</a></button>
                </li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="login-form">
            <h1 class="dieukhoan">Login</h1>
            <br>
            <form action="" method="post">
                <span class="texs">Username</span><br>
                <input type="text" name="username" placeholder="UserName">
                <br>
                <span class="texs">Password</span>
                <br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <input type="checkbox" name="checkbox">
                <span>đồng ý với <a href="" class="dieukhoan">điều khoản của công ty</a></span>
                <br>
                <br>
                <input type="submit" name="Login" value="Login">
            </form>
        </div>
    </div>
</body>

</html>