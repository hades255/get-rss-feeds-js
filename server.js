const express = require("express");
// const fetch = require('node-fetch');
// import fetch from 'node-fetch';

const app = express();
const port = 3000;

// app.get('/fetch-content', async (req, res) => {
(async function () {
  try {
    const response = await fetch("https://devdocs.io/");
    if (response.ok) {
      const data = await response.text();
      console.log(data);
      //   res.send(data);
    } else {
      console.log("unable to find feed");
      //   res.status(500).send('Unable to find feed');
    }
  } catch (error) {
    console.log(error);
    // res.status(500).send('Error: ' + error.message);
  }
})();
// });

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
