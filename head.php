<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS - Bayu</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      * {
        box-sizing: border-box;
        padding: 0;
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
        width: 30%;
        height: 500px;
        background: #69b1d2;
        padding: 20px;
      }

      nav ul {
        list-style: none;
        padding: 0;
      }

      nav a {
        text-decoration: none;
      }

      nav a:hover {
        color: white;
        transition: 0.5s ease;
        letter-spacing: 1px;
      }

      article {
        float: left;
        width: 70%;
        padding: 20px;
        background: #56caff;
        height: 500px;
      }

      section::after {
        content: "";
        display: inline;
        clear: both;
      }

      footer {
        padding: 5px;
        background-color: rgb(5, 82, 150);
        color: white;
        display: flex;
        position: sticky;
        text-align: center;
        justify-content: center;
        align-items: center;
        width: 100%;
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