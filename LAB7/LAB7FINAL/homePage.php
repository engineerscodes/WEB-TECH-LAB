<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .Display {
            display: flex;

            width: 100%;
            height: 150px;
            flex-direction: column;
            background-color: #000;
            color: rgb(11, 223, 177);
            justify-content: center;
        }

        .Display div {
            margin-bottom: 20px;
            align-self: flex-end;
            padding-right: 20px;
            margin-right: 20px;
        }

        .QUESTIONS {
            display: flex;
            justify-content: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: rgb(204, 30, 210);
            padding: 30px;

            font-size: 32px;
        }

        .holde {
            height: 100vh;
            width: 100%;
            background-color: rgb(30, 210, 141);
        }

        .anw {
            padding: 50px;
            display: flex;
            flex-direction: column;
        }

        .anw div {
            font-size: 20px;
            margin: 10px;
            color: rgb(255, 0, 0);
            font-weight: bolder;
        }

        .NAV {
            display: flex;
            font-size: 32px;
            color: rgb(252, 42, 217);
            justify-content: center;
            padding: 30px;
        }

        button {
            background-color: cyan;
            width: 200px;
            height: 80px;
            text-align: center;
            font-size: 32px;
            color: rgb(252, 42, 217);
            font-weight: bolder;
            padding: 20px;
            margin: 30px;
            border: 2px solid magenta;
            border-radius: 50px;
        }

        #Marks {
            align-self: flex-start;
            height: 150px;
            text-align: center;
            border: 2px solid #ffff;

        }

        #Marks p {
            font-size: 20px;

        }

        .res h1 {
            text-align: center;
            padding: 50px;

            color: #ffff;
        }

        .res #DISPLAYTEXT {
            margin: auto;
            width: 500px;
            height: 500px;
            background-color: gainsboro;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .res p {
            font-size: 64px;

        }
    </style>

</head>
<?php session_start(); ?>





<body>

    <div class="holde">
        <main>

            <div class="Display">


                <div>
                    <h3><?php echo $_SESSION['NAME']; ?> </h3>
                </div>
                <div>
                    <h3> <?php echo $_SESSION['user']; ?></h3>
                </div>
                <div>
                    <h3><?php echo $_SESSION['NUMBER'] ?></h3>
                </div>
            </div>
        </main>




        <p id="text" class="NAV"></p>
        <br><br>

        <div id="answer" class="anw">

        </div>

        <button onclick="MINS()">PREV</button>

        <button onclick="DIS()">NEXT</button>
        <button onclick="CALLME()">SAVE </button>
        <button onclick="GETMARKS()">SUBMIT</button>
    </div>
    <div class="res" style="display: none;">
        <h1> MARKS </h1>

        <div id="DISPLAYTEXT">
            <diV>
                <p id="R"></p>
            </diV>
            <div>
                <p id="R2"></p>
            </div>
        </div>
    </div>


</body>
<script>
    let count = 0;
    let para = document.getElementById('text');
    let ans = document.getElementById('answer');
    let marks = []


    function GETMARKS() {
        let hide = document.getElementsByClassName("holde")[0];
        hide.style.display = "none";
        let unhide = document.getElementsByClassName("res")[0];
        unhide.style.display = "block";
        unhide.style.height = "100vh";
        unhide.style.backgroundColor = "#121212";
        let r = document.getElementById('R');
        let r2 = document.getElementById('R2');
        let right = marks.filter(Boolean).length;
        r.innerHTML = right + " OUT OF " + marks.length + "<hr>";
        r2.innerHTML = right + "/" + marks.length
    }



    function MINS() {
        
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "questions.json", true);
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var resp = JSON.parse(this.responseText);

                for (i in resp.ques) {

                    if (count == resp.ques[i].id) {
                        para.innerHTML = resp.ques[i].questions;
                        let answers = resp.ques[i].opitions.split(",");
                        ans.innerHTML = ""

                        for (i in answers) {

                            let opt = document.createElement('input');
                            let div = document.createElement('div');
                            let label = document.createElement('label')

                            opt.type = "radio";
                            opt.value = answers[i];
                            opt.setAttribute('name', 'tech')
                            opt.classList.add("q");
                            opt.setAttribute("required", true)
                            label.innerHTML = answers[i];
                            div.appendChild(opt)
                            div.appendChild(label)

                            ans.appendChild(div);
                        }
                    }
                }

            }


        }
        if (count == 1) {
            alert("QUESTION PAPER START")
            count = 2;
        }
        count--;


        xhr.send();
    }

    function DIS() {
        
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "questions.json", true);
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var resp = JSON.parse(this.responseText);
                if (count == 1) {
                    marks = new Array(resp.ques.length);
                    marks.fill(false)

                }
                for (i in resp.ques) {


                    if (count == resp.ques[i].id) {
                        para.innerHTML = resp.ques[i].questions;
                        let answers = resp.ques[i].opitions.split(",");
                        ans.innerHTML = ""

                        for (i in answers) {

                            let opt = document.createElement('input');
                            let div = document.createElement('div');
                            let label = document.createElement('label')

                            opt.type = "radio"
                            opt.value = answers[i];
                            opt.classList.add("q");
                            opt.setAttribute("required", true)
                            opt.setAttribute('name', 'tech')
                            label.innerHTML = answers[i];
                            div.appendChild(opt)
                            div.appendChild(label)

                            ans.appendChild(div);
                        }
                    }
                }

            }


        }
        if (count == 4) {
            count = 4
            alert("QUESTION PAPER END")
        }
        count++;

        xhr.send();
    }
    DIS();

    function CALLME() {

        let answers = document.getElementsByClassName("q");

        for (let i = 0; i < answers.length; i++) {
            if (answers[i].checked) {
                console.log(answers[i].value)
                console.log(count)
                let xhr = new XMLHttpRequest();
                xhr.open("GET", "questions.json", true);
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var resp = JSON.parse(this.responseText);
                        for (j in resp.ques) {

                            if (count == resp.ques[j].id) {
                                console.log(resp.ques[j].ans)
                                if (answers[i].value == resp.ques[j].ans) {
                                    marks[count - 1] = true;
                                    console.log(marks)
                                } else {
                                    marks[count - 1] = false;
                                    console.log(marks)
                                }
                            }
                        }


                    }


                }

                xhr.send()

            }
        }

    }
</script>


</html>

<!-- <div>
                <input type="radio" value="google" name="tech"> I
            </div>
              foreach ($JSON_Q['ques'] as $key => $value)
               {  $opt= $value['opitions'];
               echo  ( "<div><input type='radio' value='google' name='tech'>$opt</div>");

               }
            
            -->