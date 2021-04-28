/*fetch("https://api.github.com/rate_limit")
  .then((res) => {
    if (res.ok) {
      console.log("DONE ");
      console.log(res.json());
    } else {
      console.log("FAILED");
    }
  })
  .then();*/

var myHeaders = new Headers();

myHeaders.append("Cookie", "_octo=GH1.1.2112506239.1613242999; logged_in=no");

var requestOptions = {
  method: "GET",
  headers: myHeaders,
  redirect: "follow",
};

fetch(
  "https://api.github.com/repos/engineerscodes/AndroidClub/stats/contributors",
  requestOptions
)
  .then((response) => response.json())
  .then((result) => {
    console.log(result);

    //let contributorsnames = result[1].author;
    // console.log(contributorsnames)
    for (i in result) {
      // console.log("NAME :" + result[i].author.login + "---> COMMITS :" + result[i].total );
      let dis = document.getElementById("display");
      let div = document.createElement("div");
      div.style.textAlign = "center";
      div.style.backgroundColor = " rgba(255, 255, 255, 0.9)";
      let img = document.createElement("img");
      img.src = result[i].author.avatar_url;
      img.style.width = "50px";
      img.style.height = "50px";
      img.style.borderRadius = "50%";
      img.style.margin = "auto";
      let h2 = document.createElement("h2");
      h2.innerHTML = result[i].author.login;
      let h3 = document.createElement("h3");
      h3.innerHTML = result[i].total;

      div.appendChild(img);
      div.appendChild(h2);
      div.appendChild(h3);

      dis.appendChild(div);
    }
  })
  .catch((error) => console.log("error", error));
