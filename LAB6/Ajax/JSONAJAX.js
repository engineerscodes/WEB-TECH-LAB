

let BooksArray = [];
let cseBOOKS = [],
  eceBOOKS = [],
  mechBOOKS = [];

let booksitem = document.getElementById("gridbook");

function getitems(){
    
    let xhr=new XMLHttpRequest();
     
      BooksArray = [];
      (cseBOOKS = []), (eceBOOKS = []), (mechBOOKS = []);
    xhr.open("GET", "Books.json", true);
    
    xhr.onreadystatechange =function()
    {   
        if(this.readyState ==4 && this.status ==200)
        { 
            var resp=JSON.parse(this.responseText);

           for (i in resp.books) {
               
                var dep = resp.books[i].department;
                var books =resp.books[i].book;
                for (j in books)
                {
                    //console.log(books[i].name+"  hb");
                    if (dep=="cse")
                    {
                        let temp = {
                          name: books[j].name,
                          PUBSHISER: books[j].PUBSHISER,
                          YEAR: books[j].YEAR,
                          dis: books[j].DISC,
                        };
                        cseBOOKS.push(temp);
                    }
                    
                    if (dep == "ece") {
                      let temp = {
                        name: books[j].name,
                        PUBSHISER: books[j].PUBSHISER,
                        YEAR: books[j].YEAR,
                        dis: books[j].DISC,
                      };
                      eceBOOKS.push(temp);
                    }

                    if (dep == "mech") {
                      let temp = {
                        name: books[j].name,
                        PUBSHISER: books[j].PUBSHISER,
                        YEAR: books[j].YEAR,
                        dis: books[j].DISC,
                      };
                      mechBOOKS.push(temp);
                    }

                    
                }
            }

            BooksArray = BooksArray.concat(cseBOOKS, eceBOOKS, mechBOOKS);
        }
    }

    xhr.send();
}


getitems();



function allbooks() {
  booksitem.innerHTML = "";
  for (i in BooksArray) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = BooksArray[i].name;
    author.innerHTML = BooksArray[i].PUBSHISER;
    year.innerHTML = BooksArray[i].YEAR;
    dis.innerHTML = BooksArray[i].DIS;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitem.appendChild(div);
  }
}

function csebooks() {
  booksitem.innerHTML = "";
  for (i in cseBOOKS) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = cseBOOKS[i].name;
    author.innerHTML = cseBOOKS[i].PUBSHISER;
    year.innerHTML = cseBOOKS[i].YEAR;
    dis.innerHTML = cseBOOKS[i].DIS;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitem.appendChild(div);
  }
}

function allece() {
  booksitem.innerHTML = "";
  for (i in eceBOOKS) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = eceBOOKS[i].name;
    author.innerHTML = eceBOOKS[i].PUBSHISER;
    year.innerHTML = eceBOOKS[i].YEAR;
    dis.innerHTML = eceBOOKS[i].DIS;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitem.appendChild(div);
  }
}

function allmech() {
  booksitem.innerHTML = "";
  for (i in mechBOOKS) {
    let div = document.createElement("div");
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year = document.createElement("h3");
    let dis = document.createElement("p");
    heading.innerHTML = mechBOOKS[i].name;
    author.innerHTML = mechBOOKS[i].PUBSHISER;
    year.innerHTML = mechBOOKS[i].YEAR;
    dis.innerHTML = mechBOOKS[i].DIS;
    div.style.color = "white";
    div.style.textAlign = "center";
    div.style.border = "2px solid white";
    div.style.padding = "10px";
    div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";
    div.appendChild(heading);
    div.appendChild(author);
    div.appendChild(year);
    div.appendChild(dis);

    booksitem.appendChild(div);
  }
}