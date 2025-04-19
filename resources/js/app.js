import './bootstrap';


//Listner per go back error page

let listnerOnLoad = document.getElementById("load") ?? false ;


if(listnerOnLoad){

    listnerOnLoad.addEventListener("onload", goBack(15));

}

function goBack(time){

    setTimeout(()=>{
        console.log("time");
        history.back();
    }, 1000*time);

}

// go back end

/*
console.log(document.getElementById('id'));

axios.post('/api/ask', {
    code: 'echo+23%2B56%3B', // Url decoded = echo 23+56;

  },{
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer 6hFAz7WnQW00ChRwMQZUSxyLdvqMYkAkVe3tZa8tac922b95'
    }
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  }); */
