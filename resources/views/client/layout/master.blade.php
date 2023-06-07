<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <style>
        *{
            margin: 0 auto;
            box-sizing: border-box;
        }
        .header{
            background-color: purple;
            color: chartreuse;
            padding: 20px;
            text-align: center;
        }
        .nav{
            background-color: pink;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            padding: 20px;
        }
        section .sidebar{
            width: 400px;
            height: 150px;
            background: #b1b1b1;
            float: left;
        }
        section .content{
            width: 1520px;
            height: 150px;
            border: 1px solid #333;
            padding: 10px;
            float: right;
        }
            /* Bỏ floats sau khi tạo cột */

        section:after {

            content: "";

            display: table;

            clear: both;

        }
        footer .footer {

            background-color: #777;

            padding: 10px;

            text-align: center;

            color: white;

        }
    </style>
</head>
<body>
    @include('client.pages.header')
    <nav>   
        <div class="nav">
            Navigation
        </div>
    </nav>
    <section>
        <aside class="sidebar"> 
            {{-- @yield('sidebar') --}}
            @section('sidebar')
                <h2>Sidebar</h2>
            @show
        </aside> 
        <div class="content">
            @yield('content')
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptas nemo perspiciatis eaque veritatis obcaecati. Blanditiis quas delectus dolores numquam!</p>
        </div>
    </section>
    @include('client.pages.footer')
</body>
</html>