


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

  async function CLICK()
  {
      let url = "https://api.github.com/engineerscodes/";
      let respone= await fetch(url);
      let data= await respone.json()
      console.log(data)

  }
CLICK();