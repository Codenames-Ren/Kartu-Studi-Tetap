<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS - Bayu</title>
    <style>
             @import url("https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        header {
            background-color: #3e82ff;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        nav {
            float: left;
            width: 25%;
            height: 500px;
            background: white;
            padding: 40px;
            border-radius: 30px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #e6e6e6;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }
        
        nav ul li {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }
        
        nav ul li:hover {
            background-color: #f0f7ff;
        }

        nav a {
            color: blue;
            text-decoration: none;
            display: block;
            padding: 5px 10px;
            font-weight: 500;
        }

        nav a:hover {
            color: darkblue;
            transition: 0.5s ease;
            letter-spacing: 1px;
        }

        article {
            float: left;
            width: 75%;
            padding: 20px;
            background: white;
            height: auto;
            min-height: 500px;
            overflow: auto;
        }

        section::after {
            content: "";
            display: table;
            clear: both;
        }

        footer {
            padding: 20px;
            background-color: rgb(5, 82, 150);
            color: white;
            display: inline-block;
            position: relative;
            text-align: center;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 28px;
            bottom: 0;
        }

        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
    </style>
  </head>