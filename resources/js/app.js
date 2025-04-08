import './bootstrap';

console.log(document.getElementById('id'));

axios.post('/api/ask', {
    code: 'echo+23%2B56%3B', /*// Url decoded = echo 23+56;*/

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
  });
