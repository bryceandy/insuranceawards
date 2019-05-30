<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #applicationContent{
            width: 100vw;
            height: max-content;
            background: #fff;
            padding: 5vh 5% 5%;
            text-align: left;
            border: 1px solid;
            margin: 5%;
        }
        form{
            -webkit-box-shadow: 3px 3px 3px 3px rgba(0,0, 0, 0.4);
            -moz-box-shadow: 3px 3px 3px 3px rgba(0,0, 0, 0.4);
            box-shadow: 3px 3px 3px 3px rgba(0,0, 0, 0.4);
            height: max-content;
            width: 100%;
            padding-bottom: 5vh;
        }
        img{
            width: 10rem;
            height: auto;
            display: block;
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        h1{
            padding-bottom: 6vh
        }
        label{
            display: block;
            margin-bottom: 2rem
        }
        input{
            border-right: 0;
            border-left: 0;
            border-top: 0;
            border-bottom: 1px solid #001001;
            width: 30vw;
            text-align: center;
            outline: none;
            color: #15ace4
        }
        textarea{
            border: thin solid #001001;
            color: #15ace4;
            padding: 10px;
        }
        @media screen and (max-width: 745px){
            label{
                display: block
            }
        }
        @media screen and (max-width: 666px){
            textarea{
                width: 80vw
            }
            label{
                max-width: 80vw;
            }
            h1{
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>

<div id="applicationContent">

    <form action="#" method="POST">

        <img src="{{'images/insurancelogo.png'}}" alt="logo">
        <h1 class="text-center">Award Application Form</h1>

        <label for="fname">
            First name
            <input type="text" name="firstname" id="fname" value="{{$fname}}" readonly>
        </label>

        <label for="lname">
            Last name
            <input type="text" name="lastname" id="lname" value="{{$lname}}" readonly>
        </label>

        <label for="email">
            Email
            <input type="email" name="email" id="email" value="{{$email}}" readonly>
        </label>

        <label for="phone">
            Phone number
            <input type="text" id="phone" name="phone" value="{{$phone}}" readonly>
        </label>

        <label for="nom">
            Name of the Nominee
            <input type="text" name="nominee" id="nom" value="{{$nominee}}" readonly>
        </label>

        <label for="cat">
            Contesting for &nbsp;
            <input type="text" name="category" id="cat" value="{{$category}}" readonly>
        </label>

        <label for="description">
            About the nominee &nbsp;
            <textarea name="description" id="description" cols="60" rows="5" required>
                    {{$description}}
                </textarea>
        </label>

    </form>
</div>

</body>
</html>


