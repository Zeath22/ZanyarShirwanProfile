<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style>
            body{
                background: rgb(2,2,31);
                background: radial-gradient(circle, rgba(2,2,31,1) 41%, rgba(154,20,3,1) 100%);
            }
            .box{
                width: 250px;
                margin: 50px;
                text-align: center;
                border: 2px solid black;
                font-size: 26px;
                padding: 120px 0px;
                border-radius: 50%;
                color: white;
            }
            a:link {
                text-decoration: none;
            }
            #box3{
                width: 400px;
                height: 150px;
                margin: 30px;
                border: 2px solid black;
                border-radius: 48% 52% 51% 49% / 46% 49% 51% 54% ;
            }
            #container:hover  #box1{
                background-color: rgba(154,20,3,1);
                cursor: pointer;
            }
            #container:hover  #box2{
                background-color: rgba(154,20,3,1);
                cursor: pointer;
            }
            #container:hover  #box3{
                background-color: rgba(154,20,3,1);
            }
            #container{
                width: 700px;
            }
        </style>
    </head>
    <body style="display: flex; justify-content: center; align-items: center">
    <div id = "container">
        <div style="display: flex; justify-content: center; align-items: center">
            <div class = "box" id ='box1' onclick="location.href = 'Profile'">Profile</div>
            <div class = "box" id ='box2' onclick="location.href = 'Biography'">Biography</div><br>
        </div>
        <center><div id ='box3'></div></center>
    </div>
    </body>
</html>

