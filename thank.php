

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .thanks{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 700px;
            height: 400px;
            border-radius: 7px;
            border: none;
            font-weight: bolder;
            background-color: green;
           margin-top: 12%;
        }

        p{
            font-size: 50px;
            font-weight: lighter;
            word-spacing: 4px;
            color: white;
            text-align: center;
            padding: 100px 0;    
        }
        
        @media screen and (max-width: 700px) {

            p{
                display: block;
            font-size: large;
            color: white;
            text-align: center;
        }

        .thanks{
            display: block;
            width: auto;
            height: min-content;
        }

        span{
            font-weight: lighter;
        }
}
    </style>
</head>
<body>
   <div class="thanks">
       <p class="fw-light">Thanks <br> your message has been sent Successfully</p>
        <span><a href="index.html" class="text-decoration-none  text-muted fw-light">Return to the Main Page</a></span>
   </div> 
</body>
</html>