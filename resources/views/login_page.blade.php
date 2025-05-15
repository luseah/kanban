<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body  {
            margin: 0;
            background-color:rgb(231, 231, 231);
            font-family: 'Poppins', sans-serif;
        }

        .logo img {
            height: 75px;
            width: 75px;
            margin: 12px 0px 12px 50px;
        }

        .logo {
            background-color:rgb(255, 255, 255);
            margin: 0;
        }

        aside {
            width: 40%;
        }

        aside h1 {
            font-size: 3vw;
            margin: 150px auto 0 auto;
            padding: 0 50px;
            color: rgb(0, 0, 0); 
        }

         aside p {
            font-size: 1vw;
            margin: 15px auto ;
            padding: 0 50px;
            color: rgb(0, 0, 0); 
        }

        aside button {
            background-color: rgb(73, 65, 227);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1vw;
            margin: 15px 50px ;
            cursor: pointer;
            border-radius: 5px;
        }
        main {
            width: 60%;
        }

    </style>
</head>
<body>
    <head>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}">
        </div>
    </head>
    <aside>
        <h1>AppDates</h1>
        <p>Streamline your workflow with a visual and efficient Kanban system—boost productivity, track progress, and stay organized effortlessly!</p>
        <button href=''>ENTER</button>
    </aside>
    <main>

    </main>
</body>
</html>