
let btn=document.getElementsByTagName('button')[0]

btn.addEventListener('click',()=>{
   
    let xhr=new XMLHttpRequest();
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
    }*/

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
                    console.log(book[j].getElementsByTagName("NAME")[0].childNodes[0].nodeValue);
               }
           }
        }
    }
    


    //sends request import 
    xhr.send();

});
