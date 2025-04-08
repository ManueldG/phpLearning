<div class="px-3 bg-white border-b border-gray-200">

    <x-application-logo class="block h-14 w-auto" />

    <h1 class="my-8 text-2xl font-medium text-gray-900">
    Api istruzioni per l'uso
    </h1>

    <div class="flex flex-row ">
        <!-- documentation icon -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-gray-400">
           <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
       </svg>

       <!-- freccia -->
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 size-5 fill-indigo-500">
           <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
       </svg>
       <div>
           È possibile usare le API esposte usando l'endpoint/api/ask?code=< codice da provare>
           con cUrl:

           <pre class="text-green-400 bg-gray-800 my-3">
/>curl   -X GET /api/ask
    -H "Content-Type: application/json; charset=utf-8"
    -H "Authorization: Bearer &lt; token &gt; "
    -d "{ \"code\":\" echo+23%2B56%3B  \"}" // Url encoded  echo 23+56;
           </pre >

           oppure con Axios:

           <pre class="text-white bg-gray-800 my-2">

    axios.post(<span class="text-yellow-200">'/api/ask'</span>,
        {
            code: <span class="text-yellow-200">'echo+23%2B56%3B'</span> // Url encoded  echo 23+56;
        },
        {
            headers: {
                <span class="text-yellow-200">'Content-Type'</span>: <span class="text-yellow-200">'application/json'</span>
                <span class="text-yellow-200">'Authorization'</span> <span class="text-yellow-200">'Bearer abcdefghijklmnopqrstuvwxyz1234567890'</span>
            }
        }
    )
    .then(function (<span class="text-orange-400">response</span>) {
        console.log(<span class="text-orange-400">response</span>);
    })
    .catch(function (<span class="text-orange-400">error</span>) {
        console.log(<span class="text-orange-400">error</span>);
    });

        </pre>


           nel menù utente andare su "API tokens" per generare il token da usare nell'opzione per l'autorizzazione es.:
           <pre>
-H "Authorization: Bearer abcDfhiLmNoPqRst123456789 "
           </pre>
       </div>
    </div>

</div>


