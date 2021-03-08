

let BooksArrayjson = [];
let cseBOOKSjson = [],
  eceBOOKSjson = [],
  mechBOOKSjson = [];

let booksitems = document.getElementById("gridbook");
let cats = document.getElementById("CAT");
let catjson = document.getElementById("CAT2");


function hideXML() {
  cats.style.display = "none";
  catjson.style.display = "flex";
}

function getitemsJSON() {
  let xhr = new XMLHttpRequest();

  BooksArrayjson = [];
  (cseBOOKSjson = []), (eceBOOKSjson = []), (mechBOOKSjson = []);
  xhr.open("GET", "Books.json", true);

  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var resp = JSON.parse(this.responseText);

      for (i in resp.books) {
        var dep = resp.books[i].department;
        var books = resp.books[i].book;
        for (j in books) {
          //console.log(books[i].name+"  hb");
          if (dep == "cse") {
            let temp = {
              name: books[j].name,
              PUBSHISER: books[j].PUBSHISER,
              YEAR: books[j].YEAR,
              dis: books[j].DISC
            };
            cseBOOKSjson.push(temp);
          }

          if (dep == "ece") {
            let temp = {
              name: books[j].name,
              PUBSHISER: books[j].PUBSHISER,
              YEAR: books[j].YEAR,
              dis: books[j].DISC
            };
            eceBOOKSjson.push(temp);
          }

          if (dep == "mech") {
            let temp = {
              name: books[j].name,
              PUBSHISER: books[j].PUBSHISER,
              YEAR: books[j].YEAR,
              dis: books[j].DISC
            };
            mechBOOKSjson.push(temp);
          }
        }
      }

      BooksArrayjson = BooksArrayjson.concat(
        cseBOOKSjson,
        eceBOOKSjson,
        mechBOOKSjson
      );
    }
  };

  xhr.send();
}


getitemsJSON();



function allbooksJSON() {
  booksitems.innerHTML = "";
  for (i in BooksArrayjson) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = BooksArrayjson[i].name;
    author.innerHTML = BooksArrayjson[i].PUBSHISER;
    year.innerHTML = BooksArrayjson[i].YEAR;
    dis.innerHTML = BooksArrayjson[i].dis;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitems.appendChild(div);
  }
}

function csebooksJSON() {
  booksitems.innerHTML = "";
  for (i in cseBOOKSjson) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = cseBOOKSjson[i].name;
    author.innerHTML = cseBOOKSjson[i].PUBSHISER;
    year.innerHTML = cseBOOKSjson[i].YEAR;
    dis.innerHTML = cseBOOKSjson[i].dis;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitems.appendChild(div);
  }
}

function alleceJSON() {
  booksitems.innerHTML = "";
  for (i in eceBOOKSjson) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = eceBOOKSjson[i].name;
    author.innerHTML = eceBOOKSjson[i].PUBSHISER;
    year.innerHTML = eceBOOKSjson[i].YEAR;
    dis.innerHTML = eceBOOKSjson[i].dis;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitems.appendChild(div);
  }
}

function allmechJSON() {
  booksitems.innerHTML = "";
  for (i in mechBOOKSjson) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = mechBOOKSjson[i].name;
    author.innerHTML = mechBOOKSjson[i].PUBSHISER;
    year.innerHTML = mechBOOKSjson[i].YEAR;
    dis.innerHTML = mechBOOKSjson[i].dis;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitems.appendChild(div);
  }
}