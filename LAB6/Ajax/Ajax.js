
let BooksArray=[];
let cseBOOKS=[],eceBOOKS=[],mechBOOKS=[];

let booksitem = document.getElementById("gridbook");

let cat=document.getElementById("CAT");

let cat2 = document.getElementById("CAT2");

function hide()
{
  cat2.style.display="none";
  cat.style.display = "flex";
}


function getitems()
{
   
    let xhr=new XMLHttpRequest();

      BooksArray = [];
      (cseBOOKS = []), (eceBOOKS = []), (mechBOOKS = []);
    xhr.open("GET","Books.xml",true);

    xhr.onreadystatechange =function(){
        if(this.readyState ==4 && this.status ==200)
        {
            let resXML=this.responseXML;
           //  console.log(resXML)
           let catgory = resXML.getElementsByTagName("CATEGORY");
           for (let i=0 ;i<catgory.length;i++)
           {     
               let book = catgory[i].getElementsByTagName("BOOK");

               for(let j=0;j<book.length;j++)
               {   
                   if (catgory[i].getAttribute("dep") == "cse")
                   {
                        let temp = {
                          name: book[j].getElementsByTagName("NAME")[0]
                            .childNodes[0].nodeValue,
                          PUBSHISER: book[j].getElementsByTagName(
                            "PUBSHISER"
                          )[0].childNodes[0].nodeValue,
                          YEAR: book[j].getElementsByTagName("YEAR")[0]
                            .childNodes[0].nodeValue,
                          DIS: book[j].getElementsByTagName("DIS")[0]
                            .childNodes[0].nodeValue,
                        };
                         
                        cseBOOKS.push(temp);
                        
                   }

                   if (catgory[i].getAttribute("dep") == "ece") {
                     let temp = {
                       name: book[j].getElementsByTagName("NAME")[0]
                         .childNodes[0].nodeValue,
                       PUBSHISER: book[j].getElementsByTagName("PUBSHISER")[0]
                         .childNodes[0].nodeValue,
                       YEAR: book[j].getElementsByTagName("YEAR")[0]
                         .childNodes[0].nodeValue,
                       DIS: book[j].getElementsByTagName("DIS")[0].childNodes[0]
                         .nodeValue,
                     };

                     eceBOOKS.push(temp)
                   }

                   if (catgory[i].getAttribute("dep") == "mech") {
                      let temp = {
                          name: book[j].getElementsByTagName("NAME")[0]
                            .childNodes[0].nodeValue,
                          PUBSHISER: book[j].getElementsByTagName(
                            "PUBSHISER"
                          )[0].childNodes[0].nodeValue,
                          YEAR: book[j].getElementsByTagName("YEAR")[0]
                            .childNodes[0].nodeValue,
                          DIS: book[j].getElementsByTagName("DIS")[0]
                            .childNodes[0].nodeValue,
                        };
                         mechBOOKS.push(temp);
                   }
                  
               }
           }
        }
        
                  BooksArray=BooksArray.concat(cseBOOKS,eceBOOKS,mechBOOKS);
                  
    }
    


    //sends request import 
    xhr.send();

}

getitems();


function allbooks() {
   booksitem.innerHTML=""
  for (i in BooksArray) {
    let div =document.createElement("div")
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year =document.createElement("h3")
    let dis=document.createElement("p")
     heading.innerHTML=BooksArray[i].name;
     author.innerHTML=BooksArray[i].PUBSHISER;
     year.innerHTML=BooksArray[i].YEAR
     dis.innerHTML=BooksArray[i].DIS
     div.style.color="white";
     div.style.textAlign="center";
     div.style.border="2px solid white"  
     div.style.padding="10px"
     div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";  
     div.appendChild(heading);
     div.appendChild(author);
     div.appendChild(year);
     div.appendChild(dis);
     
    
     booksitem.appendChild(div);
     
  }

  
}

function csebooks()
{  booksitem.innerHTML=""
   for (i in cseBOOKS) {
    let div =document.createElement("div")
    let heading = document.createElement("h1");
    let author = document.createElement("h3");
    let year =document.createElement("h3")
    let dis=document.createElement("p")
     heading.innerHTML=cseBOOKS[i].name;
     author.innerHTML=cseBOOKS[i].PUBSHISER;
     year.innerHTML=cseBOOKS[i].YEAR
     dis.innerHTML=cseBOOKS[i].DIS
     div.style.color="white";
     div.style.textAlign="center";
     div.style.border="2px solid white"  
     div.style.padding="10px"
     div.style.boxShadow = "5px 15px 10px rgb(3, 3, 10)";  
     div.appendChild(heading);
     div.appendChild(author);
     div.appendChild(year);
     div.appendChild(dis);
     
    
     booksitem.appendChild(div);}
}


function allece()
{
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



function allmech()
{
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

    booksitem.appendChild(div);}
}


















    // method,file url ,async or not
    //xhr.open('GET','Books.json',true);
   
    //new way
   // xhr.onload=function(){
   //     if(this.status==200)
   //     {
   //         console.log(this.response);
   //     }
   // }

    //old way

   /* xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status ==200)
        {
           // console.log(" ajax "+this.response)

           var resp=JSON.parse(this.responseText);
           console.log(resp.books);

           for (i in resp.books) {
               
                var dep = resp.books[i].department;
                var books =resp.books[i].book;
                for (i in books)
                {
                    console.log(books[i].name);
                }

               
           }

        }
    }


    */