<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIT AP</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .NAVEEN {
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            text-transform: uppercase;
        }

        .blue {
            border: 2px solid #1ABC9C;
        }

        .blue thead {
            background: #1ABC9C;
        }

        .blue thead:hover {
            border: 2px solid #9B59B6;
            background: #9B59B6;
        }

        thead tr {
            height: 60px;
        }

        thead {
            color: white;
            padding: 10px 0;
        }

        th,
        td {
            text-align: center;
            padding: 5px 0;
        }

        tbody tr {
            height: 50px;
        }

        tbody tr:nth-child(even) {
            background: #ECF0F1;
        }

        tbody tr:hover {
            background: #BDC3C7;
            color: #FFFFFF;
        }

        #tds button {
            width: 150px;
            height: 50px;
            padding: 10px;
            margin: 10px;
            background-color: #9B59B6;
            color: white;
            font-weight: bold;
            border-radius: 5px;

        }

        #tds button:hover {
            background-color: #1ABC9C;
        }
    </style>
</head>

<body>
    <div class="NAVEEN">
        <table class="blue">
            <thead>
                <tr>
                    <th colspan="2"> VIT AP LOGIN SYSTEM </th>
                </tr>
            </thead>
            <tbody id="TB">
                <tr>
                    <td>REGISTER NUMBER</td>
                    <td>
                        <form id="myform" method="POST">
                            <input id="addyInput" name="reg" placeholder="regNumber">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="tds">
                        <button type="button"> GET MARKS</button>
                        <button type=" button"> UPDATE MARKS</button>
                        <button type="button"> DELETE RECORD </button>
                        <button type="button"> ADD New RECORD</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        let getmarks = document.getElementsByTagName('button')[0]

        //let regnum = document.getElementById('numbers').value;


        getmarks.addEventListener('click', () => {

            let regnumber = document.getElementById('addyInput').value;

            if (regnumber === "") {
                alert(" REG IS NEED  FOR GETMARKS");
                return false;
            }
            /*let regno = document.getElementById('addyInput').value;
            $.post("getmarks.php", {
                    reg : regno
                },
                function(data, status) {
                    
                }); */


            let myforms = document.getElementById('myform');
            myforms.setAttribute('action', 'getmarks.php')
            myforms.submit();


        });


        let updatemarks = document.getElementsByTagName('button')[1];

        updatemarks.addEventListener('click', () => {
            let regnumber = document.getElementById('addyInput').value;

            if (regnumber === "") {
                alert(" REG IS NEED UPDATE MARKS");
                return false;
            }
            let myforms = document.getElementById('myform');
            myforms.setAttribute('action', 'updatemarks.php')
            myforms.submit();

        });


        let deletes = document.getElementsByTagName('button')[2];

        deletes.addEventListener('click', () => {

            let regnumber = document.getElementById('addyInput').value;

            if (regnumber === "") {
                alert(" REG IS NEED  TO DELETE RECORD");
                return false;
            }
            let myforms = document.getElementById('myform');
            myforms.setAttribute('action', 'delete.php')
            myforms.submit();

        });

        let add = document.getElementsByTagName('button')[3];
        add.addEventListener('click', () => {

            let myforms = document.getElementById('myform');
            myforms.setAttribute('action', 'add.php')
            myforms.submit();
        })
    </script>

</body>

</html>