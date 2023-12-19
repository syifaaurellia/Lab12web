<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <style>
  body {
    font-family: Tahoma, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
    display: grid;
    justify-content: center;
    border-radius: 20px;
  }

  h2 {
    text-align: center;
  }
  
  nav {
      background: #8ec3a5;
      margin: 0;
      padding: 8px;
  }
  
  a{
      text-decoration: none;
      padding: 5px;
      color:whitesmoke;
      background-color: #7cab92;
      border-radius: 10px;
  }
  
  table {
    border-collapse: collapse;
    margin-top: 20px;
  }
  
  th,
  td {
    border: 1px black solid;
    padding: 7px;
  }
  
  img {
    width: 100px;
  }
  
  .about-img img {
    width: 200px;
    border-radius: 50%;
  }
  
  .tambah, .hapus, .ubah{
    text-decoration: none;
    background-color:#80aba1;
    margin: 2px;
    color: #fff;
    border-radius: 5px;
    padding: 5px;
    font-size: 15px;
  }
  
  a:hover {
    background-color: whitesmoke;
    transform: scale(0.98);
    color: black;
  }
  
  nav a:hover {
    border-radius: 5px;
    padding: 10px;
  }
  
  footer {
      margin-top: 20px;
      border-radius: 20px;
      padding: 5 50px;
      color: #D3D3D3;
  }
  
  h1 {
      background:  #89b2a4;
      margin-bottom: 0;
      padding: 10px;
      color: #fff;
      border-radius: 10px 10px 0 0;
  }
  
  .modular-list, .modular{
    text-align: left;
  }
  
  .about-image img {
    width: 100px;
    height: 150px;
    border-radius: 200%;
}
.contact-content {
    display: flex;
    justify-content: space-around;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.contact-form h2, p{
    text-align: center;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    border-radius: 5px;
}

.contact-form button {
    background-color: #98b3a0;;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #4a4949;
}  
</style>
    <div class="container">
        <?php require('../../template/header.php'); ?>
        <div class="about-text">
                <h2>My Story</h2>
                <br>
                <p>Assalamu'alaikum, HIIII Let me introduce myself, my name is Syifa Aurellia Rahma, you can call me "Syifa". I am a student at Pelita Bangsa University and I am from the Faculty of Engineering with the Informatics Engineering study program. I am 19 years old and I have the zodiac sign Gemini. At my current age, I really like learning new things and I am very interested in creating applications especially web applications, I want to learn a lot about the world of coding. 
                    Apart from that, I am also interested in learning Computer Networks. My skills for now, I can create simple websites and simple applications then I am also interested and skilled in creating simple designs, not only that I am also a little skilled and am still learning programming languages, currently I already know and study HTML and CSS then Python, PHP and others. 
                    My desire is to graduate from college on time with a high IPK and then work in a large company where the position suits my skills and pays well. Hopefully my friends and I can be successful in our respective paths... Aamiin</div>
                <hr>
                    
        </div>
        <?php require('../../template/footer.php'); ?>
    </div>
</body>

</html>