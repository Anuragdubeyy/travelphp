<?php
    
    $connection = mysqli_connect('localhost', 'root','', 'book_db');

    if(isset($_POST['send'])){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $address = $_POST['Address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrival = $_POST['Arrival'];
        $leaving = $_POST['Leaving'];

        $request = "insert into book_form(name,	email,	phone,	address,	location,	guests,	arrivals,	leaving	) values('$name', '$email',	'$phone', '$address',	'$location',	'$guests', 	'$arrivals',	'$leaving'	)";

        mysqli_query($connection, $request);

        header('location:book.php');

    }else{
        echo 'somthing went wrong try again';
    }


?>