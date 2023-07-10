<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Command</title>
</head>

<body>
  <h1 style="text-align: center;">Fetch And CI4 Demo</h1>
  <div id="msg"></div>
  <div id="time"></div>
  <script>
  fetch("<?= base_url('fetch') ?>")
    .then((response) => {
      return response.json()
    })
    .then((result) => {
      document.getElementById('msg').innerHTML = `Message : ${result.message}`
      document.getElementById('time').innerHTML = `Current Time : ${result.timestamp}`
    })
    .catch((error) => {
      console.log("Error: " + error)
    })
  </script>
</body>

</html>