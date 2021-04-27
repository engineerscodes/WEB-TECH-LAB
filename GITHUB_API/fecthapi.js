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
  "https://api.github.com/repos/engineerscodes/JavaWorkSpaceHUB/stats/contributors",
  requestOptions
)
  .then((response) => response.json())
  .then((result) => {
    console.log(result);

    //let contributorsnames = result[1].author;
    // console.log(contributorsnames)
    for (i in result) {
      
      console.log(
        "NAME :" + result[i].author.login + "---> COMMITS :" + result[i].total
      );
    }
  })
  .catch((error) => console.log("error", error));
