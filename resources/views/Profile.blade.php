<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Lato', sans-serif;
            color: #000;
            background: rgb(34,193,195);
            background: radial-gradient(circle, rgba(34,193,195,1) 21%, rgba(253,187,45,1) 100%);
        }

        .student-profile .card {
            border-radius: 10px;
        }

        .student-profile .card .card-header .profile_img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 10px auto;
            border: 10px solid #ccc;
            border-radius: 50%;
        }

        .student-profile .card h3 {
            font-size: 20px;
            font-weight: 700;
        }

        .student-profile .card p {
            font-size: 16px;
            color: #000;
        }

        .student-profile .table th,
        .student-profile .table td {
            font-size: 14px;
            padding: 5px 10px;
            color: #000;
        }
    </style>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
</head>
<body>
<div class="student-profile py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                        <img class="profile_img" src="{{ asset('/images/b.jpg') }}">
                        <h3>Zanyar Shirwan Rauf</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-0"><strong class="pr-1">Date of Birth:</strong>May of 2000</p>
                        <p class="mb-0"><strong class="pr-1">Gender:</strong>Male</p>
                        <p class="mb-0"><strong class="pr-1">Status:</strong>Undergraduate Student</p>
                        <p class="mb-0"><strong class="pr-1">Email:</strong>zshirwan7@gmail.com</p>
                        <p class="mb-0"><strong class="pr-1">Address:</strong>Iraq, Sulaimani</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">University</th>
                                <td width="2%">:</td>
                                <td>Sulaimani Polytechnic University</td>
                            </tr>
                            <tr>
                                <th width="30%">College</th>
                                <td width="2%">:</td>
                                <td>Technical College Of Informatics Sulaimani</td>
                            </tr>
                            <tr>
                                <th width="30%">Academic Year</th>
                                <td width="2%">:</td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <th width="30%">Department</th>
                                <td width="2%">:</td>
                                <td>Information Technology</td>
                            </tr>
                            <tr>
                                <th width="30%">Stage</th>
                                <td width="2%">:</td>
                                <td>3</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card shadow-sm" style="margin-top: 20px">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Biography</h3>
                    </div>
                    <div class="card-body pt-0">
                        <p>
                            Hi there I'm Zanyar, Welcome to my Profile.<br>
                            I am an undergraduate student in the IT department and I am currently working on a couple of certificates in programming in general through online courses. I am familiar with some of the major programming languages such as (java, python, C#, javascript, PHP).<br>
                            I have recently taken an interest in Blockchain Technology because I believe it will be the future of technologies and currencies by being so secure and restricting the ability to tamper with its data.<br>
                            I have done some personal projects like:
                        </p>
                        <ul>
                            <li>Hotel Management System</li>
                            <li>Computer hardware Store website</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
